<!DOCTYPE html>
<html lang="en">
<?php require_once('config/config.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <link rel="stylesheet" href="<?= CSS ?>/modal.css">

</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a class="ion-social-tux" href=""></a></li>
            <li><a class="ion-social-wordpress" href=""></a></li>
            <li><a class="ion-social-instagram" href=""></a></li>
            <li><a class="ion-android-folder" href=""></a></li>
            <li><a class="ion-android-mail" href=""></a></li>
        </ul>
    </div>
    <a class="btn"></a>

    <div class="section-top">
        <div class="content">
            <h1>JS Solution</h1>
            <a href="#" id="modalBtn">Sign Up Now</a>
        </div>
    </div>
    <div id="simpleModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="closeBtn">&times;</span>
                <h2>Modal header</h2>
            </div>
            <div class="modal-body">
                <p>Hello.. I'm a modal</p>

            </div>
            <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div>
        </div>
    </div>
</body>
<script src="<?= JS ?>/main.js"></script>

</html>
