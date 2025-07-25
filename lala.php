<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplayer Mafia Game</title>
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
        import { getDatabase, ref, set, update, remove, get, onValue, push } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js";

        const firebaseConfig = {
            databaseURL: "https://game-f18e0-default-rtdb.firebaseio.com/"
        };
        const app = initializeApp(firebaseConfig);
        const db = getDatabase();

        let roles = {};
        let players = {};
        let nightActions = {};
        let currentPhase = "lobby";

        function startGame() {
            let roomCode = prompt("Enter Room Code:");
            if (!roomCode) return alert("Room code required!");

            let playerName = prompt("Enter Your Name:");
            if (!playerName) return alert("Player name required!");

            sessionStorage.setItem("roomCode", roomCode);
            sessionStorage.setItem("playerName", playerName);

            let roomRef = ref(db, "rooms/" + roomCode);

            get(roomRef).then(snapshot => {
                if (snapshot.exists()) {
                    update(ref(db, "rooms/" + roomCode + "/players"), { [playerName]: true });
                    enterLobby(roomCode, playerName);
                } else {
                    set(ref(db, "rooms/" + roomCode), {
                        host: playerName,
                        players: { [playerName]: true },
                        phase: "lobby",
                        roles: {},
                        nightActions: {},
                        votes: {},
                        roundNumber: 0,
                        chat: {}
                    });
                    enterLobby(roomCode, playerName);
                }
            });
        }

        function enterLobby(roomCode, playerName) {
            alert("You are in lobby. Waiting for game to start...");
            let roomRef = ref(db, "rooms/" + roomCode);
            onValue(roomRef, snapshot => {
                let data = snapshot.val();
                if (data.phase === "night") {
                    startNightPhase();
                } else if (data.phase === "day") {
                    startDayPhase();
                }
            });
        }

        function assignRoles(players) {
            let shuffledPlayers = players.slice().sort(() => Math.random() - 0.5);
            roles = {
                [shuffledPlayers[0]]: "Pushpa",
                [shuffledPlayers[1]]: "Shekhawat",
                [shuffledPlayers[2]]: "Sidappa",
            };
            shuffledPlayers.slice(3).forEach(player => {
                roles[player] = "Syndicate Member";
            });

            let roomCode = sessionStorage.getItem("roomCode");
            update(ref(db, "rooms/" + roomCode + "/roles"), roles);
        }

        function startNightPhase() {
            currentPhase = "night";
            alert("Night Phase Started! Perform your secret actions.");
            prepareActionButtons();

            setTimeout(() => {
                endNightPhase();
            }, 30000);
        }

        function prepareActionButtons() {
            let playerName = sessionStorage.getItem("playerName");
            let roomCode = sessionStorage.getItem("roomCode");
            let rolesRef = ref(db, "rooms/" + roomCode + "/roles");

            get(rolesRef).then(snapshot => {
                if (snapshot.exists()) {
                    roles = snapshot.val();
                    let role = roles[playerName];

                    if (!role) return;

                    let actions = "";
                    Object.keys(roles).forEach(target => {
                        if (target !== playerName) {
                            if (role === "Pushpa") {
                                actions += `<button onclick="performAction('${target}', 'kill')">Eliminate ${target}</button>`;
                            } else if (role === "Shekhawat") {
                                actions += `<button onclick="performAction('${target}', 'investigate')">Investigate ${target}</button>`;
                            } else if (role === "Sidappa") {
                                actions += `<button onclick="performAction('${target}', 'heal')">Heal ${target}</button>`;
                            }
                        }
                    });

                    document.getElementById("actionButtons").innerHTML = actions;
                }
            });
        }

        function performAction(target, actionType) {
            let playerName = sessionStorage.getItem("playerName");
            let roomCode = sessionStorage.getItem("roomCode");
            let actionRef = ref(db, "rooms/" + roomCode + "/nightActions/" + playerName);

            set(actionRef, { action: actionType, target: target });
            alert(`Action performed: ${actionType} on ${target}`);
        }

        function endNightPhase() {
            alert("Night Phase Ended. Processing results...");
            startDayPhase();
        }

        function startDayPhase() {
            currentPhase = "day";
            alert("Day Phase Started! Time to vote.");
            showVotingUI();

            setTimeout(() => {
                endDayPhase();
            }, 30000);
        }

        function showVotingUI() {
            let votingContainer = document.getElementById("votingContainer");
            let roomCode = sessionStorage.getItem("roomCode");

            get(ref(db, "rooms/" + roomCode + "/roles")).then(snapshot => {
                if (snapshot.exists()) {
                    let roles = snapshot.val();
                    let buttons = "";
                    Object.keys(roles).forEach(player => {
                        buttons += `<button onclick="votePlayer('${player}')">Vote for ${player}</button>`;
                    });

                    votingContainer.innerHTML = buttons;
                }
            });
        }

        function votePlayer(target) {
            let playerName = sessionStorage.getItem("playerName");
            let roomCode = sessionStorage.getItem("roomCode");
            update(ref(db, "rooms/" + roomCode + "/votes"), { [playerName]: target });

            alert(`Voted for ${target}`);
        }

        function endDayPhase() {
            let roomCode = sessionStorage.getItem("roomCode");
            get(ref(db, "rooms/" + roomCode + "/votes")).then(snapshot => {
                if (snapshot.exists()) {
                    let votes = snapshot.val();
                    let voteCount = {};
                    Object.values(votes).forEach(vote => {
                        voteCount[vote] = (voteCount[vote] || 0) + 1;
                    });

                    let highestVoted = Object.keys(voteCount).reduce((a, b) => voteCount[a] > voteCount[b] ? a : b);
                    alert(`${highestVoted} was eliminated!`);

                    remove(ref(db, "rooms/" + roomCode + "/players/" + highestVoted));
                    startNightPhase();
                }
            });
        }
    </script>
</head>
<body>
    <h1>Mafia Game</h1>
    <button onclick="startGame()">Start Game</button>
    <div id="actionButtons"></div>
    <div id="votingContainer"></div>
</body>
</html>