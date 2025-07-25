let currentPath = window.location.pathname;
let storedTime = localStorage.getItem("timeSpent_" + currentPath) 
                ? parseInt(localStorage.getItem("timeSpent_" + currentPath)) 
                : 0;

setInterval(function () {
    storedTime++;
    localStorage.setItem("timeSpent_" + currentPath, storedTime); 
    fetch(`track.php?time=${storedTime}&path=${encodeURIComponent(currentPath)}`);
}, 1000);