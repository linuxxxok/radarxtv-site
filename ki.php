
<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket</title>
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #242424, #3b5998);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        /* Bingewav Sports Logo Section */
        .logo-container {
            background: #000; /* Black background for the logo */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .logo-container img {
            width: 220px; /* Adjust the logo size */
            height: auto;
        }

        /* Video Player Styling */
        .player-container {
            width: 95%;
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            overflow: hidden;
            background: #000; /* Black background behind the video for better focus */
        }

        .player-container iframe {
            border-radius: 15px;
        }

        /* Stream Issue Section */
        .stream-issue {
            margin-top: 20px;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 16px;
            color: #fff;
            width: fit-content;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .stream-issue a {
            color: #00c1ff;
            text-decoration: none;
            font-weight: bold;
        }

        .stream-issue a:hover {
            text-decoration: underline;
        }

        /* Credits Section */
        .credits {
            margin-top: 25px;
            padding: 15px 25px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            font-size: 16px;
            color: #fff;
            width: fit-content;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            display: inline-block;
        }

        .credits-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .credits a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }

        .credits a:hover {
            text-decoration: underline;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .logo-container img {
                width: 180px;
            }

            .credits, .stream-issue {
                font-size: 14px;
                padding: 10px 20px;
            }

            .credits-title {
                font-size: 16px;
            }
        }
    </style>
<style type="text/css">* {user-select: auto !important; -webkit-user-select: auto !important;}</style><input type="hidden" id="inject_idm_text_selection"></head>
<body>
    </div>

   <!-- Video Player Section -->
<div class="player-container">
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe id="contentFrame" sandbox="allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen="true" scrolling="no" src="https://vod.mafiatv.live/tv/watch.php?play=370" style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
    </div>
</div>
<!-- Join Telegram Button -->
<div class="join-telegram-container">
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>

<style>
    .join-telegram-container {
        margin-top: 20px;
        text-align: center;
    }

    .join-telegram-btn {
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        background-color: #008fd6;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .join-telegram-btn:hover {
        background-color: #006bb3;
    }
</style>

<script>
 // Close popup function
    function closePopup() {
      const popup = document.getElementById('popup');
      popup.style.display = 'none';
    }
  </script>

  <div id="popup" style="display: none;">
    <div class="popup-content">
      <h2>Support Us!</h2>
      <p>Join Our Telegram Channel @RadarXCricket</p>
      <button class="join-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Now</button>
      <button class="close-btn" onclick="closePopup()">Already Joined</button>
    </div>
  </div>

<script>
        // Show the alert
        if (confirm("Join Our Telegram Channel @RadarXCricket")) {
            // Redirect to the Telegram channel if 'OK' is clicked
            window.location.href = "https://t.me/RadarXCricket";
        } else {
            // Close the alert if 'Cancel' is clicked (do nothing)
        }
</script>


</body></html>