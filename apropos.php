<<<<<<< HEAD
<?php session_start(); ?>
<?php require('core/functions.php'); ?>
<?php require('conf.inc.php'); ?>
<?php include('template/head.php'); ?>
<?php include('template/navbar.php'); ?>
=======
<?php session_start();
require('core/functions.php');
require('conf.inc.php');
include('template/head.php');
include('template/navbar.php'); 
redirectIfNotConnected();
?>
>>>>>>> e468b0d28489a58c6add75a02c87f5c54037312d
<h1> A propos </h1>

C fefe qui va remplir <br>
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum modi eius magnam, atque error impedit mollitia, alias
nesciunt a hic aperiam ea minus? Deleniti deserunt aliquam, placeat ratione eius dolores.
Lorem ipsum dolor sit amet consectetur.....

<?php include('template/footer.php'); ?>