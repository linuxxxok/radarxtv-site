<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed with Dynamic Watermark Block</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #000;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            position: relative;
        }

        /* The overlay that blocks everything */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            pointer-events: none; /* Ensure the iframe is still clickable */
            z-index: 100;
        }

        /* Watermark block, dynamically positioned */
        .block-watermark {
            position: absolute;
            bottom: 0;  /* Adjust according to your watermark's position */
            right: 0;   /* Adjust according to your watermark's position */
            width: 150px;  /* Adjust width */
            height: 50px;  /* Adjust height */
            background-color: #000; /* Block the watermark */
            pointer-events: none;  /* Allow clicks through */
            z-index: 101;
        }
        
        /* Ensure it's responsive on small screens */
        @media (max-width: 768px) {
            .block-watermark {
                width: 100px;  /* Adjust for smaller screens */
                height: 40px;
            }

            .overlay {
                background-color: rgba(0, 0, 0, 0.7); /* Darker overlay for mobile */
            }
        }
    </style>
</head>
<body>

<!-- Embed the iframe -->
<iframe id="iframe" src="https://re.fredflix.fun/ayna/play.php?id=fc95d30e-5323-4c12-bb38-7a1e3f04acc2" allowfullscreen></iframe>

<!-- Overlay div to hacky block the watermark -->
<div class="overlay"></div>

<!-- Block for watermark -->
<div class="block-watermark"></div>

<script>
    window.onload = function() {
        var iframe = document.getElementById('iframe');
        var watermarkDiv = document.querySelector('.block-watermark');

        // Attempt to position the watermark block dynamically, if possible
        try {
            var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

            // Locate the watermark element within the iframe (only works if same-origin)
            var watermark = iframeDoc.querySelector('.watermark');

            if (watermark) {
                // Get watermark position
                var rect = watermark.getBoundingClientRect();
                
                // Dynamically position the watermark blocker div
                watermarkDiv.style.bottom = rect.bottom + 'px';
                watermarkDiv.style.right = rect.right + 'px';
                watermarkDiv.style.width = rect.width + 'px';
                watermarkDiv.style.height = rect.height + 'px';
            }
        } catch (e) {
            console.log("Unable to access iframe content due to cross-origin restrictions.");
        }
    };
</script>

</body>
</html>
