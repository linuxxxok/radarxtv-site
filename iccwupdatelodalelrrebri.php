<?php
$pathToHTML = "iccw.php"; // path to existing HTML file
$status = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['mpd_url'] ?? '';

    // Extract till .mpd
    if (preg_match('/(https?:\/\/[^\s]+?\.mpd)/', $input, $match)) {
        $newMpd = $match[1];

        // Load existing HTML content
        $html = file_get_contents($pathToHTML);

        // Replace old manifest URL
        $updated = preg_replace('/https?:\/\/[^\s"]+?\.mpd/', $newMpd, $html);

        // Save back
        file_put_contents($pathToHTML, $updated);
        $status = "✅ MPD link updated successfully!";
    } else {
        $status = "❌ Invalid MPD URL!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update .MPD Link</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            background: #000;
            color: #0f0;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        textarea {
            width: 100%;
            height: 100px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
            background: #00f7ff;
            border: none;
            cursor: pointer;
        }
        .status {
            margin-top: 15px;
            color: #ff0;
        }
    </style>
</head>
<body>
    <h2>🔄 Update MPD Link in icc.php</h2>
    <form method="post">
        <label>Paste full MPD URL here:</label><br>
        <textarea name="mpd_url" placeholder="Paste full .mpd URL here..."></textarea><br>
        <button type="submit">🛠 Extract & Save</button>
    </form>
    <div class="status"><?= htmlspecialchars($status) ?></div>
</body>
</html>