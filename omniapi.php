<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <!-- <script defer src="fontawesome/js/all.js"></script> -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/all.js"></script>
  <script src="obiloscripts.js"></script>

  <link href="css/normalize.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/google-light.min.css">
  <script src="js/highlight.min.js"></script>
  <!--<script src="js/jquery.fancybox.min.js"></script>
      <script src="js/clipboard.min.js"></script> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


  <link href="css/all.css" rel="stylesheet">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="omniapistyles.css" rel="stylesheet" />


  <?php


  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once "urlmaker.php";
  ?>

  <title>
    OmniAPI - An API that provides many different kinds of information and data - obilo.io/omniapi
  </title>






</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <div class="outermostcontainer">

    <div class="stripedyellow"></div>
    <header>

      <img src="img/omniapi_logo_svg_v3_final.svg" class="headerlogo" alt="OmniAPI">

      <nav class="navbar">
        <a href="#about">about</a>
        <a href="#useandexamples">examples</a>
        <a href="#futureplans">future plans</a>


      </nav>
    </header>

    <div class="pagecontainer">
      <div class="homesection">

        <h2 class="lightbigheader">about</h2>

        <span class="paragraph">
          OmniAPI is a source of a variery of information and data, which you can freely use in your apps. It is an API that serves JSON responses.

        </span>

        <h2 class="lightbigheader">Use and Examples</h2>

        <span class="paragraph">
          Seeding your database is can be elegantly done by a gem called

          <strong>
            At this moment, OmniAPI currently serves random quotes. These quotes can be accesed at:
            <a href="https://omniapi7.herokuapp.com/quotes" target="_blank">https://omniapi7.herokuapp.com/quotes</a>
          </strong><br />.

          <br />

          <pre> <code class="language-json">    
        {
status: 200,
quote: {
id: 10,
quoteid: 10,
quotetext: "Life without love is like a tree without blossoms or fruit.",
quoteby: "Khalil Gibran",
created_at: "2021-08-09T04:28:48.306Z",
updated_at: "2021-08-09T04:28:48.306Z"
}
}
</code></pre>

        </span>

        <h2 class="lightbigheader" id="futureplans">Future plans</h2>
        <span class="paragraph">
          The ultimate goal for OmniAPI is to generously provide a large variety of information and data. So I keep my mind open to ideas, as well as my eyes open for inspiration on different types of data to provide from OmniAPI.
        </span>

      </div>
    </div>

    <div class="footerbox">
      Last updated on August 10, 2021<br />
      &copy; 2021 OmniAPI<br /><br />

      Version 1.8.10
    </div>
  </div>


  <!-- Statcounter code -->
  <script type="text/javascript">
    var sc_project = 12577044;
    var sc_invisible = 1;
    var sc_security = "c888cf51";
  </script>
  <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
  <noscript>
    <div class="statcounter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/12577044/0/c888cf51/1/" alt="Web Analytics" referrerPolicy="no-referrer-when-downgrade"></a></div>
  </noscript>
  <!-- End of Statcounter Code -->
</body>

</html>