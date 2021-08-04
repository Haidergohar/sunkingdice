<?php session_start(); ?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Jul 17 2021 19:16:30 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="60f313e76a170e2cae1b9b31" data-wf-site="60f313e76a170ed31f1b9b2f">
<head>
  <meta charset="utf-8">
  <title>CamperEinbruch in Bittenfield</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/campereinbruch.webflow.css" rel="stylesheet" type="text/css">
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
<body class="utility-page-wrap">
<?php 

include_once("includes/get_visitors.php");
$visitor_id = $_SESSION['visitor_id'];
$yes = "YES";
$sql = "UPDATE `visitors_data` SET `visited_index_page` = '$yes' WHERE `id` = '$visitor_id'";
mysqli_query($conn, $sql);

?>
  <div class="navbar-container bg-gray-4 sticky-top">
    <div class="container">
      <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="324348c1-89f2-fbc8-2826-4c985b37fdf0" role="banner" class="navbar w-nav">
        <a href="1kn4ti68.html" class="navbar-logo w-nav-brand">
          <div class="logofont">CamperEinbruch</div>
        </a>
        <br>
        <br>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <div></div>
        </nav>
      </div>
    </div>
  </div>
  <div class="section utility-page-content bg-primary-3">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form"><label for="name">Bitte Vorgangsnummer eingeben:</label><input type="text" class="w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="transaction"><span class="w-button" onclick="transaction_saver()">Weiter</span></form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>

  <script src="js/custom.js"></script>>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60f313e76a170ed31f1b9b2f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>