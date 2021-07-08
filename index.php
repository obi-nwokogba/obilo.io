<?php
require_once "universal_header.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "urlmaker.php";
?>

<title>
   Obi Nwokogba - Software Engineer - FullStack Developer - obilo.io
</title>

</head>

<body>
   <div class="outermostcontainer">
      <header>
         <h2 class="siteheadertext">
            obi<span class="lightest">lo.io</span>
         </h2>
         <nav>
            <ul class="navbar">
               <li>
                  <a href="index.html">home</a>
               </li>
               <li>
                  <a href="<?php echo $javascriptpad; ?>">javascript pad</a>
               </li>
               <li>
                  <a href="<?php echo $csspad; ?>">
                     css pad
                  </a>
               </li>
               <li><a href="<?php echo $phppad; ?>">
                     php pad</a>
               </li>
            </ul>
         </nav>
      </header>
      <div class="container-lg">
         <div class="homesection">
            <h4>
               Hello! My name is Obi and I'm a Full-stack Software Engineer. I enjoy working with Javascript, CSS, amd HTML5. I can create React apps, ExpressJS apps and native Android apps. I'm creative and I have a background in Illustration + Graphic Design. Please check some of my projects below!

            </h4>
         </div>

         <div class="homesection">
            <span class="lastupdatednote">updated July 7, 2021</span><br />
            I am currently a Software Engineering Fellow at General Assembly. During this 460-hour course, so far, I have created these projects:<br />

            <a href="https://obilo.io/stockspro" class="projectnamelink">
               StocksPro &middot <span class="lightest">https://obilo.io/stockspro</span>
            </a>
            <p class="projectdescription">Research the Stocks of American Companies. Made in React JS
               <span class="technologiesused">React, API, HTML5, CSS3</span></p>

            <a href="https://groovym.com" class="projectnamelink">
               Groovy Movie <span class="lightest">&middot https://groovym.com</span>
            </a>
            <p class="projectdescription">Search for movie reviews, ratings, shows, upcoming releases. Uses the OMDB API and jQuery mainly to make API AJAX calls. <span class="technologiesused">React, API, HTML5, CSS3</span></p>

            <a href="https://expressstore.herokuapp.com/" class="projectnamelink">
               Sunglasses Store<span class="lightest">&middot https://expressstore.herokuapp.com/</span>
            </a>
            <p class="projectdescription">Search for movie reviews, ratings, shows, upcoming releases. Uses the OMDB API and jQuery mainly to make API AJAX calls.</p>


            <a href="https://preacherquotes.com" class="projectnamelink">
               Preacher Quotes <span class="lightest">&middot https://preacherquotes.com</span>
            </a>
            <p class="projectdescription">A user-created collection of Preachers and some of their sayings.

               <span class="technologiesused">
                  MongoDB, Express JS, Node, HTML5, CSS3, Javascript
               </span></p>

            <a href="https://pesapulse.com" class="projectnamelink">
               PesaPulse  <span class="lightest">&middot https://pesapulse.com</span>
            </a>
            <p class="projectdescription">A financial research app that presents lived market data for Forex, Stocks, and Cryptocurrencies.</p>
         </div>
         <div class="homesection">

            <h2 class="lightbigheader">PERSONAL PROJECTS</h2>
            These are some of projects which I created, own, and actively maintain:

            <div class="panelbox">
               <div class="panelboxheader">
                  <a href="https://ngplaylist.com" class="projectname">
                     NGplaylist
                  </a>

                  <a href="https://ngplaylist.com" class="projectnamelink">
                     https://ngplaylist.com</span>
                  </a><!-- comment -->
                  <p class="projectdescription">
                     A social network for musicians and their fans, centered around Nigerian music. Created with PHP, MySQL, Javascript, HTML5, CSS5. Started in 2015.
                  </p>
               </div></div>

            <div class="panelbox">
               <div class="panelboxheader">

                  <a href="https://obipix.com" class="projectname">
                     ObiPix Wallpapers <span class="lightest"></span>
                  </a>

                  <a href="https://obipix.com" class="projectnamelink">
                     https://obipix.com</span>
                  </a>    

                  </a>
                  <p class="projectdescription">
                     Create an infinite variety of algorithm-generated wallpapers. Image generation was coded in PHP. Also includes a designer-palette maker as well as an illustrator's palette-maker. 
                  </p></div></div>

            <div class="panelbox">
               <div class="panelboxheader">

                  <a href="https://play.google.com/store/apps/details?id=com.obipix.wallpapers&hl=en_US&gl=US" class="projectname">
                     ObiPix Wallpapers on Android</a>

                  <a href="https://play.google.com/store/apps/details?id=com.obipix.wallpapers&hl=en_US&gl=US" class="projectnamelink">
                     https://play.google.com/store</a>

               </div>
               <div class="panelboxcontent">
                  <p class="projectdescription">
                     Android app I made in Java - bring those lovely wallpapers/generated-images to to mobile. 
                     <span class="technologiesused">Java, Android Studio</span>
                  </p></div>

               <div class="panelbox">
                  <div class="panelboxheader">
                     <a href="https://coloressa.com" class="projectname" target="_blank">
                        Coloressa
                     </a>
                     <a href="https://coloressa.com" class="projectnamelink" target="_blank">
                        https://coloressa.com
                     </a>
                  </div>

                  <div class="panelboxcontent">
                     <p class="projectdescription">
                        A versatile color explorer and finder for shades, tints, variants. A great tool for web designers and graphic designers. <span class="technologiesused">React, jQuery, HTML5, CSS3</span>
                     </p></div>
               </div>

              <div class="panelbox">
                  <div class="panelboxheader">
                     <a href="https://obiverse.com" class="projectname" target="_blank">
                        ObiVerse
                     </a>
                     <a href="https://obiverse.com" class="projectnamelink" target="_blank">
                        https://obiverse.com
                     </a>
                  </div>

                  <div class="panelboxcontent">
                     <p class="projectdescription">
                        A versatile. <span class="technologiesused">PHP, Javascript, jQuery, HTML5, CSS3, APIs, SQL</span>
                     </p></div>
               </div> 
            </div>
         </div>

         <?php require_once "universal_footer.php"; ?>