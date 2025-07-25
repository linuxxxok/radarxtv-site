<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flyer</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef2f3, #dce0e1);
            text-align: center;
        }

        img {
            max-width: 90%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            margin-bottom: 20px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
            cursor: pointer;
        }

        label {
            font-size: 14px;
            color: #333;
        }

        .note {
            font-size: 14px;
            color: #ff0000;
            margin-bottom: 15px;
        }

        .btn-proceed {
            padding: 14px 28px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(135deg, #007BFF, #0056b3);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            opacity: 0.6;
            cursor: not-allowed;
        }

        .btn-proceed.enabled {
            opacity: 1;
            cursor: pointer;
        }

        .btn-proceed:hover.enabled {
            background: linear-gradient(135deg, #0056b3, #003f80);
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <img src="radar.png" alt="Flyer">

    <div class="checkbox-container">
        <input type="checkbox" id="termsCheckbox">
        <label for="termsCheckbox">I have read and agreed to the above conditions and am wholly liable for the consequences.</label>
    </div>

    <p class="note"><strong></strong> </p>

    <form action="https://radarxTV.site/index.html" method="get">
        <button type="submit" class="btn-proceed" id="proceedButton" disabled>
            Agree and Proceed to RadarxTV
        </button>
    </form>

    <script>
        const checkbox = document.getElementById("termsCheckbox");
        const button = document.getElementById("proceedButton");

        checkbox.addEventListener("change", function () {
            if (this.checked) {
                button.classList.add("enabled");
                button.removeAttribute("disabled");
            } else {
                button.classList.remove("enabled");
                button.setAttribute("disabled", "true");
            }
        });
    </script>

</body>
</html>