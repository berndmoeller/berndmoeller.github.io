<?php
/*
 * PHP-Webseitenschutz - anmeldung.php
 * - https://werner-zenk.de
 */

session_start();
include "benutzer/benutzer.php"; // Pfadangabe beachten!

// Anmeldung überprüfen
if (isset($_POST["anmeldung"])) {
 if (isset($BENUTZER_PASS[trim($_POST["name"])]) && 
     $BENUTZER_PASS[trim($_POST["name"])] === $_POST["passwort"]) {

  // Session setzen
  session_regenerate_id();
  $_SESSION["benutzername"] = trim($_POST["name"]);

  // Zur "geschützten"-Seite nach der Anmeldung weiterleiten.
  // Gegebenenfalls muss diese hier angepasst werden!
  header("Location: ./intern.php"); // Pfadangabe beachten!
 }
}

// Abmeldung
if (isset($_GET["abmeldung"])) {

  // Session und Cookies löschen
 unset($_SESSION["benutzername"]);
$_SESSION = array();
  if (ini_get("session.use_cookies")) {
   $params = session_get_cookie_params();
   setcookie(session_name(), '', time() - 42000, $params["path"],
    $params["domain"], $params["secure"], $params["httponly"]);
  }
  session_destroy();

   // Zur Anmeldung weiterleiten.
   header("Location: mitgliederbereich.php");
}
?><!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-620-85000562.gif" type="image/x-icon">
  <meta name="description" content="Site Creator Description">
  
  <title>Mitgliederbereich</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

<!-- Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137474323-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137474323-1');
</script>
<!-- /Google Analytics -->


  <section class="cid-rm5XYgMcM2 mbr-fullscreen mbr-parallax-background" id="header2-24">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Mitgliederbereich</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Diese Seite führt zu einem geschützten Bereich für Mitglieder des SCF.<br>Der Bereich ist erst nach Anmeldung aufrufbar.<br>Bitte nach unten scrollen und einloggen.</p>
                
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<center class="cid-rmFNllkLED" id="form1-2x" data-rv-view="325">
<form class="block mbr-form" method="post">
                 <p>
                  <label>Benutzer:
                  <input class="form-control input" type="text" name="name" required="required" autocomplete="username" autofocus="autofocus">
                  </label>
                 </p>
                 <p>
                  <label>Passwort:
                  <input class="form-control input" type="password" name="passwort" required="required" autocomplete="current-password">
                  </label>
                 </p>
                 <p>
                  <input type="submit" class="btn btn-md btn-secondary btn-bgr" name="anmeldung" value="ANMELDEN">
                 </p>
</form>
</center>

<section class="menu cid-rlJRlDHyB2" once="menu" id="menu2-20">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/scf-logo-pfade.gif" alt="Mobirise" title="" style="height: 4.6rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.html">
                        Segelclub Fischen &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="regatten.html">
                        Regatten</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="termine.html">
                        Termine</a></li>
                <li class="nav-item dropdown"><a class="nav-link link text-black display-4" href="jugend.html" aria-expanded="false">Jugend</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="webcam.html">Webcam</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="aktuelles.html">Aktuelles</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="mitgliederbereich.php">Mitgliederbereich</a></li></ul>
            
        </div>
    </nav>
</section>

<section once="footers" class="cid-rlKlJcTUXk mbr-reveal" id="footer7-21">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="impressum.html">
                        </a><strong><a href="impressum.html">IMPRESSUM</a></strong></li><li class="foot-menu-item mbr-fonts-style display-7"><strong><a href="datenschutz.html">DATENSCHUTZ</a></strong></li><li class="foot-menu-item mbr-fonts-style display-7"><strong><a href="kontakt.html">KONTAKT</a></strong></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">© Copyright 2019 Bernd Möller</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  <input name="cookieData" type="hidden" data-cookie-text="Wir verwenden Cookies, um Ihr Shoppingerlebnis zu verbessern. Wenn Sie weiter auf unserer Seite surfen, akzeptieren Sie die Cookie-Policy. Weiterlesen <a href='datenschutz.html'>Datenschutz</a>.">
  </body>
</html>