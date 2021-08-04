<?php session_start(); ?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Jul 17 2021 19:16:30 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="60f313e76a170e7fdc1b9b56" data-wf-site="60f313e76a170ed31f1b9b2f">
<head>
  <meta charset="utf-8">
  <title>CamperEinbruch in Bittenfield</title>
  <meta content="A complete UI toolkit for businesses and startups for Webflow CMS. Launch your site quickly with tons of pre-built pages and flexible components." name="description">
  <meta content="Quicksmart - Webflow HTML Website Template" property="og:title">
  <meta content="A complete UI toolkit for businesses and startups for Webflow CMS. Launch your site quickly with tons of pre-built pages and flexible components." property="og:description">
  <meta content="Quicksmart - Webflow HTML Website Template" property="twitter:title">
  <meta content="A complete UI toolkit for businesses and startups for Webflow CMS. Launch your site quickly with tons of pre-built pages and flexible components." property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/campereinbruch.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Rubik:regular,italic,500,500italic,700,700italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <!-- Hotjar Tracking Code for https://campereinbruch.com/1KN4TI68/ -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:2537291,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
  <style>
body{
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
  
  <?php 
    include_once("../includes/get_visitors.php"); 
    $visitor_id = $_SESSION['visitor_id'];
    $yes = "YES";
    $sql = "UPDATE `visitors_data` SET `visited_1kn4ti6_page` = '$yes' WHERE `id` = '$visitor_id'";
    mysqli_query($conn, $sql);
  ?>

  <div class="navbar-container bg-gray-4 sticky-top">
    <div class="container">
      <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="324348c1-89f2-fbc8-2826-4c985b37fdf0" role="banner" class="navbar w-nav">
        <a href="1kn4ti68.html" aria-current="page" class="navbar-logo w-nav-brand w--current">
          <div class="logofont">CamperEinbruch</div>
        </a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <div></div>
        </nav>
      </div>
    </div>
  </div>
  <div class="section no-bottom-space bg-gray-4">
    <div class="container hero-container text-center">
      <h1 class="text-huge">Kopfgeld <span class="text-span">(Belohnung)</span></h1>
      <div class="text-large section-subtitle">Am 26/27 Juni 2021 wurde am Freibad Bittenfeld in meinen Campingbus eingebrochen. Es wurden Wertgegenstände gestohlen und der Innenraum demoliert. Der Schaden beläuft sich auf über 2.000,- EUR.</div>
    </div><img src="../images/divider-sharp-bottom.svg" alt="" class="divider">
  </div>
  <div class="section">
    <div class="container container-narrow text-center">
      <h3 class="large-heading">4.000,- EUR Belohung</h3>
      <div class="text-large"><strong>Ich verdopple hiermit den Betrag</strong> und setze eine Belohnung von 4.000,- EUR in Bar aus, für Hinweise, die zur Ergreifung der Täter und der vollständigen Rückführung meines Eigentums führen.<br><br>Es konnten zahlreiche Fingerabdrücke der Täter sichergestellt wurden und es gibt Videoaufnahmen aus der Überwachungskamera im Innenraum.<br><br>HINWEISE KÖNNEN ANONYM GEGEBEN WERDEN.<br>DISKRETION WIRD ZUGESICHERT</div>
      <div class="hero-section-action">
        <a class="button button-large w-inline-block" onclick="button_clicker('stolen')">
          <div>Liste der gestohlenen Wertsachen</div>
        </a>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container container-narrow text-center">
      <div class="hero-section-action"><img src="../images/123141154111.jpeg" loading="eager" alt="" onclick="button_clicker('video')"></div>
      <div class="hero-section-action">
        <a class="button button-large w-inline-block" onclick="button_clicker('video_btn')">
          <div>Überwachungs-video ansehen</div>
        </a>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container container-narrow text-center">
      <div class="hero-section-action">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form"><textarea placeholder="Nachricht..." maxlength="5000" name="field-2" data-name="Field 2" class="textarea w-input" id="msg_box"></textarea></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="hero-section-action">
        <a class="button button-large w-inline-block" onclick="message_saver()">
          <div>Nachricht / Hinweis hinterlassen</div>
        </a>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div>
        <div class="text-small">© CamperEinbruch • 2021<span class="text-span-2">☿</span>Johannes Wick</a>
        </div>
      </div>
    </div>
  </div>
  <div data-w-id="31a58d08-14b1-cd0c-9506-180401f38f5a" class="back-to-top">
    <a href="#" class="button button-round back-to-top-button w-inline-block"><img src="../images/icon-arrow-up-light.svg" alt=""></a>
  </div>

  <script src="../js/1KN4TI68.js"></script>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60f313e76a170ed31f1b9b2f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>