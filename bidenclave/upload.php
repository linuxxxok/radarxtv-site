<?php
header('Content-Type: application/json');

$targetDir = __DIR__ . "/uploads/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];

    $fileName = basename($file['name']);
    $targetFilePath = $targetDir . $fileName;

    // Check file size (optional, max 5MB)
    if ($file['size'] > 5 * 1024 * 1024) {
        echo json_encode(['success' => false, 'message' => 'File too large']);
        exit;
    }

    // Allow certain file formats
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($fileType, $allowedTypes)) {
        echo json_encode(['success' => false, 'message' => 'Invalid file type']);
        exit;
    }

    // Move uploaded file to target folder
    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
        // Return URL of uploaded file
        $fileUrl = "https://radarxtv.site/bidencalve/uploads/" . $fileName;
        echo json_encode(['success' => true, 'url' => $fileUrl]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Upload failed']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No image file sent']);
}
?>
