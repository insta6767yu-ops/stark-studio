<?php
// upload.php
$target_dir = "uploads/"; // Folder to store uploaded videos
$target_file = $target_dir . basename($_FILES["video"]["name"]);

if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
    echo "The video ". htmlspecialchars(basename($_FILES["video"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your video.";
}
?>
