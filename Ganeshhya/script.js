// DOM Elements
const roomSection = document.getElementById('room-section');
const lobbySection = document.getElementById('lobby-section');
const gameSection = document.getElementById('game-section');
const hostRoomButton = document.getElementById('host-room');
const joinRoomButton = document.getElementById('join-room');
const roomIdInput = document.getElementById('room-id');
const playersList = document.getElementById('players-list');
const startGameButton = document.getElementById('start-game');
const phaseTitle = document.getElementById('phase-title');
const gameInfo = document.getElementById('game-info');
const chatMessages = document.getElementById('chat-messages');
const chatInput = document.getElementById('chat-input');
const sendMessageButton = document.getElementById('send-message');
const votingSection = document.getElementById('voting-section');
const voteOptions = document.getElementById('vote-options');

// Game State
let roomId;
let playerId;
let playerName;
let playerRole;
let isHost = false;

// Firebase Database Reference
const roomsRef = database.ref('rooms');

// Host Room
hostRoomButton.addEventListener('click', () => {
  roomId = Math.random().toString(36).substring(7);
  playerId = Math.random().toString(36).substring(7);
  playerName = prompt('Enter your name:');
  isHost = true;
  roomsRef.child(roomId).set({
    players: { [playerId]: { name: playerName, role: null } },
    gameState: 'lobby'
  });
  joinRoom(roomId);
});

// Join Room
joinRoomButton.addEventListener('click', () => {
  roomId = roomIdInput.value;
  playerId = Math.random().toString(36).substring(7);
  playerName = prompt('Enter your name:');
  joinRoom(roomId);
});

function joinRoom(roomId) {
  roomsRef.child(roomId).child('players').update({ [playerId]: { name: playerName, role: null } });
  roomSection.classList.add('hidden');
  lobbySection.classList.remove('hidden');
  if (isHost) startGameButton.classList.remove('hidden');
  listenForUpdates();
}

// Listen for Updates
function listenForUpdates() {
  roomsRef.child(roomId).on('value', (snapshot) => {
    const data = snapshot.val();
    if (data) {
      updateLobby(data.players);
      if (data.gameState === 'game') {
        startGame(data);
      }
    }
  });
}

// Update Lobby
function updateLobby(players) {
  playersList.innerHTML = '';
  for (const [id, player] of Object.entries(players)) {
    const playerElement = document.createElement('div');
    playerElement.textContent = player.name;
    playersList.appendChild(playerElement);
  }
}

// Start Game
startGameButton.addEventListener('click', () => {
  roomsRef.child(roomId).update({ gameState: 'game' });
});

function startGame(data) {
  lobbySection.classList.add('hidden');
  gameSection.classList.remove('hidden');
  assignRoles(data.players);
  startNightPhase();
}

// Assign Roles
function assignRoles(players) {
  const roles = ['Pushpa', 'Gundappa', 'Shekhawat', 'Sidappa', ...Array(Object.keys(players).length - 4).fill('Syndicate')];
  roles.sort(() => Math.random() - 0.5);
  let index = 0;
  for (const [id, player] of Object.entries(players)) {
    player.role = roles[index++];
    if (id === playerId) {
      playerRole = player.role;
      alert(`You are ${playerRole}`);
    }
  }
  roomsRef.child(roomId).child('players').update(players);
}

// Start Night Phase
function startNightPhase() {
  phaseTitle.textContent = 'Night Phase';
  gameInfo.textContent = 'Perform your actions secretly...';
  setTimeout(() => startDayPhase(), 5000); // Simulate night phase
}

// Start Day Phase
function startDayPhase() {
  phaseTitle.textContent = 'Day Phase';
  gameInfo.textContent = 'Discuss and vote to eliminate a player...';
  votingSection.classList.remove('hidden');
  renderVoteOptions();
}

// Render Vote Options
function renderVoteOptions() {
  voteOptions.innerHTML = '';
  roomsRef.child(roomId).child('players').once('value', (snapshot) => {
    const players = snapshot.val();
    for (const [id, player] of Object.entries(players)) {
      if (id !== playerId) {
        const button = document.createElement('button');
        button.textContent = player.name;
        button.addEventListener('click', () => vote(player.name));
        voteOptions.appendChild(button);
      }
    }
  });
}

// Vote
function vote(playerName) {
  alert(`You voted to eliminate ${playerName}`);
  // Update Firebase with vote
}

// Send Chat Message
sendMessageButton.addEventListener('click', () => {
  const message = chatInput.value;
  if (message) {
    roomsRef.child(roomId).child('chat').push().set({ sender: playerName, message });
    chatInput.value = '';
  }
});

// Listen for Chat Messages
roomsRef.child(roomId).child('chat').on('child_added', (snapshot) => {
  const { sender, message } = snapshot.val();
  const messageElement = document.createElement('div');
  messageElement.textContent = `${sender}: ${message}`;
  chatMessages.appendChild(messageElement);
});