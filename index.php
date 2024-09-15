<?php
// Directory containing images
$imageDir = 'foton';

// Fetch all files in the directory
$files = scandir($imageDir);

// Filter out non-image files
$images = array_filter($files, function($file) use ($imageDir) {
    $filePath = $imageDir . '/' . $file;
    return is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lyzios bilder</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/lightbox.css">

</head>
<body>
    <div class="gallery">
    <?php foreach ($images as $image): ?>
            <div>
                <a href="<?php echo $imageDir . '/' . $image; ?>" data-lightbox="gallery">
                    <img src="<?php echo $imageDir . '/' . $image; ?>" alt="<?php echo $image; ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="js/lightbox-plus-jquery.js"></script> <!-- Link to Lightbox JS -->
</body>
</html>