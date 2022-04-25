<?php
    require_once('./src/demo.php');

    define('COLOR', [0, 0, 0]);
    define('FONT_SIZE', 28);
    define('FONT_FAMILY', './src/font/Lato-Regular.ttf');
    define('MARGIN', 30);

    if (isset($_POST['runBtn'])) {
        chmod('./imgs/out/', '777');
        $file = isset($_FILES['file']) ? $_FILES['file'] : null;
        copy($file['tmp_name'], './imgs/in/'.$file['name']);
        $txt = isset($_POST['txt']) ? $_POST['txt'] : null;
        $img = imagecreatefromjpeg('./imgs/in/'.$file['name']);
        if ($img) {
            $imageHeight = imagesy($img);
            $imageHeight -= MARGIN;
            $color = imagecolorallocate($img, ...COLOR);
            imagettftext($img, FONT_SIZE, 0, MARGIN, $imageHeight, $color, 'Lato-Regular.ttf', $txt);
            // header('Content-Type: image/jpeg');
            imagejpeg($img, './imgs/out/image.jpg');
            imagedestroy($img);
        }
    }
?>