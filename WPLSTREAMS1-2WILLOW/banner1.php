<?php
echo '<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (!window.popupShown) {
            window.popupShown = true; // Ensure popup appears only once
            setTimeout(function() {
                if (confirm("Join our Telegram Channel for updates?")) {
                    window.location.href = "https://t.me/+A2v0Cr_zHutjYWU1";
                }
            }, 1000);
        }
    });
</script>';
?>

<div class="promo-banner">
    <style>
        @keyframes zoomInOut {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .promo-banner {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            text-align: center;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: zoomInOut 4s infinite ease-in-out;
        }
        .promo-banner a {
            text-decoration: none;
            color: inherit;
            display: block;
            width: 100%;
        }
        .promo-banner img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }
        .join-now {
            margin-top: 15px;
            padding: 15px 30px;
            background: #FFD700;
            color: #000;
            font-weight: bold;
            font-size: 20px;
            text-transform: uppercase;
            border-radius: 10px;
            transition: background 0.3s, transform 0.2s;
            cursor: pointer;
            display: inline-block;
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.3);
        }
        .join-now:hover {
            background: #FFC107;
            transform: scale(1.08);
            box-shadow: 0px 8px 18px rgba(0, 0, 0, 0.4);
        }
    </style>
    <a href="https://t.me/+A2v0Cr_zHutjYWU1" target="_blank">
        <img src="https://Radarxtv.site/banner.jpg" alt="Promo Banner">
    </a>
    <a href="https://t.me/+A2v0Cr_zHutjYWU1" target="_blank">
        <div class="join-now">Join Now</div>
    </a>
</div>