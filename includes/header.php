<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a href="index.php"> <img id="headerlogo" src="images/logo/logo.png" alt="radiohead logo"></a> <a href="https://www.facebook.com/radiohead"><i class="fab fa-facebook-square fa-2x"></i></a> <a href="https://www.twitter.com/radiohead"><i class="fab fa-twitter fa-2x"></i></a> <a href="https://www.instagram.com/radiohead"><i class="fab fa-instagram fa-2x"></i></a> <a href="https://www.youtube.com/radiohead"><i class="fab fa-youtube fa-2x"></i></a>
        </div><!--=====End Logo and Social Media Links=====-->
            <!--=====Navigation=====-->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($currentPage == 'index.php' AND '#myPage'){
                  echo'class="active"';
                  } ?>><a href="index.php#myPage">HOME</a></li>
                <li <?php  if ($currentPage == 'div id="#band"'){
                  echo'class="active"';
                  } ?>><a href="index.php#band">BAND</a></li>
                <li <?php if ($currentPage == 'div id="#albums"'){
                  echo'class="active"';
                  } ?>><a href="index.php#albums">DISCOGRAPHY</a></li>
                <li <?php if ($currentPage == 'newsletter.php'){
                  echo'class="active"';
                  } ?>><a href="newsletter.php">NEWSLETTER</a></li>
            </ul>
        </div><!--=====End Navigation Links=====-->
    </div><!--=====End Nav Container=====-->
</nav>
