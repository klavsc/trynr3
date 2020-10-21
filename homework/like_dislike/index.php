<?php

require_once 'LikeDislike.php';
require_once 'Data.php';
require_once 'PicturesConstruct.php';

$photosDatabase = new Data('pictures.csv');

if (isset($_POST['like'])) {
    $photo = $photosDatabase->findPhotoByID($_POST['like']);
    $photo->setLikes(1);
}
if (isset($_POST['dislike'])) {
    $photo = $photosDatabase->findPhotoByID($_POST['dislike']);
    $photo->setLikes(-1);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Like/Dislike</title>
</head>
<body>
<?php foreach ($photosDatabase->getPhotos() as $photo) : ?>
    <div class="gallery">
        <img src="<?= $photo->getSource(); ?>" alt=""><br>
    </div><br>
    <form action="index.php" method="post">
        <div class="desc">
            <h3>Likes: <?= $photo->getLikes(); ?></h3>
            <button type="submit" id="like" name="like" value="<?= $photo->getID(); ?>">Like</button>
            <button type="submit" id="dislike" name="dislike" value="<?= $photo->getID(); ?>">Dislike</button>
        </div>
    </form>
<?php endforeach; ?>
</body>
</html>

