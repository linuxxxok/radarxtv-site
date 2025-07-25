
// Right Click Block
document.addEventListener("contextmenu", (event) => event.preventDefault());

// Keyboard Shortcuts Block
document.addEventListener("keydown", function (event) {
    if (event.keyCode == 123) { // F12 Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Ctrl + Shift + I Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 74) { // Ctrl + Shift + J Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.keyCode == 85) { // Ctrl + U Block (View Source)
        event.preventDefault();
    }
});

// Disable Selection & Copying
document.addEventListener("copy", (event) => event.preventDefault());
document.addEventListener("cut", (event) => event.preventDefault());
document.addEventListener("paste", (event) => event.preventDefault());
document.addEventListener("selectstart", (event) => event.preventDefault());

// Anti-DevTools Trick (Detects if DevTools is Open)
setInterval(function () {
    function detectDevTools() {
        let before = new Date();
        debugger;
        let after = new Date();
        return after - before > 100;
    }
    if (detectDevTools()) {
        alert("DevTools Detected! Redirecting...");
        window.location.href = "https://google.com"; // Ya kisi bhi dusre page pe le jao
    }
}, 1000);

// Prevent Dragging Images & Text
document.ondragstart = function () { return false; };

// Hide Page Content If DevTools is Open
(function() {
    const element = new Image();
    Object.defineProperty(element, 'id', {
        get: function () {
            alert('DevTools Detected! Redirecting...');
            window.location.href = "about:blank";
        }
    });
    console.log('%c', element);
})();
