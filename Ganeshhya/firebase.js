// Firebase configuration
const firebaseConfig = {
  databaseURL: "https://game-f18e0-default-rtdb.firebaseio.com"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const database = firebase.database();