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

<?php
require_once "universal_navigation.php"; ?>

<div class="pagecontainer">
   <div class="parallax homepageparallax">
      Hello! My name is Obi and I'm a Full-stack Software Engineer. I have a passion for making engaging apps and designing elegant user interfaces. <br /><br />
      I enjoy working with React, React Native, Ruby, Ruby on Rails, Javascript, Java, ExpressJS, NodeJS, MongoDB, SQL, PHP, HTML5 and CSS3.

      <div class="favoritetechnologies">
         <i class="fab fa-js-square blueicon fa-2x"></i>
         <i class="fab fa-react blueicon fa-2x"></i>
         <i class="fab fa-html5 blueicon fa-2x"></i>
         <i class="fab fa-css3-alt blueicon fa-2x"></i>
         <i class="fab fa-node blueicon fa-2x"></i>
      </div>
   </div>

   <div class="homesection">

      <div class="statusupdatebox">
         <span class="lastupdatednote">August 4 , 2021 update</span>
         I graduated from <a href="https://generalassemb.ly/" target="_blank">General Assembly's</a> Software Engineering program after over 460 hours of web development instruction and coursework completed. Projects created during this time include:
      </div>


      <h2 class="lightbigheader" id="projects">projects</h2>



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
               A versatile color explorer and finder for shades, tints, variants. A great tool for web designers and graphic designers. <span class="technologiesused">Javascript, jQuery, HTML5, CSS3</span>

               <span class="technologiesused">Screenshots:</span>

               <a href="images/coloressa_screenshot1.png" data-fancybox="graphicdesign" data-caption="Coloressa.com - User Interface">
            <img class="artpicthumb" src="images/coloressa_screenshot1_thumbnail.png"></a>

            <a href="images/coloressa_screenshot2.png" data-fancybox="graphicdesign" data-caption="Coloressa.com - User Interface">
            <img class="artpicthumb" src="images/coloressa_screenshot2_thumbnail.png"></a>
            </p>
         </div>
      </div>

      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://play.google.com/store/apps/details?id=com.obipix.wallpapers&hl=en_US&gl=US" class="projectname" target="_blank">
               ObiPix Wallpapers</a><span class="lightest"> java 
                  &bull; android app</span>

            <a href="https://play.google.com/store/apps/details?id=com.obipix.wallpapers&hl=en_US&gl=US" class="projectnamelink">
               https://play.google.com/store</a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               Android app I made in Java. Generates different images based on several algorithms. There are over 40 different image-making algorithms like 'Polka Dots', 'Matrix', 'Grunge'...
               <span class="technologiesused">Java, Android Studio</span>
            </p>
         </div>
      </div>



      <div class="panelbox">
         <div class="panelboxheader projectname">

            <a href="downloads/pesapulse-184.apk" class="projectname">
               Pesa Pulse <span class="lightest"> react native</span>
            </a>

            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               A mobile app I made in React Native, which gives live prices of cryptocurrencies and stocks. This was my final project at General Assembly. You can download the APK for Android phones here:
               <span class="technologiesused">
                  <a href="downloads/pesapulse-184.apk">
                     Download: Pesa Pulse v 1.8.4 APK - 63 MB</a><br />
                  Updated August 4, 2021</span>
               <span class="technologiesused">React Native, Expo, Javascript, REST APIs</span>
            </p>
         </div>
      </div>


      <div class="panelbox">
         <div class="panelboxheader">
            <a href="http://codegreenforever.herokuapp.com/" class="projectname">
               Code Green <span class="lightest"></span>
            </a>
            <a href="http://codegreenforever.herokuapp.com/" class="projectnamelink" target="_blank">
               http://codegreenforever.herokuapp.com/</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               A real-time chat app for a fictional garden-tech company. I worked with three other awesome teammates to create this app. We all worked all aspects of this app together - the React front-end, and the back-end Ruby on Rails API. My role was Deployment Manager, and Front-end designer, so I was in charge of Git and our versioning, as well as the UI, colors, and the entire look and feel of the app. Please test it out! You can log in as 'Obi' and the password is '12345'.<span class="technologiesused">React, Ruby on Rails, PostgreSQL, HTML5, CSS3, Javascript, Ruby</span>
            </p>
         </div>
      </div>


      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://groovym.com" class="projectname">
               Groovy Movie <span class="lightest"></span>
            </a>
            <a href="https://groovym.com" class="projectnamelink" target="_blank">
               https://groovym.com</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               Search for movie reviews, ratings, shows, upcoming releases. Uses the OMDB API and jQuery mainly to make API AJAX calls. <span class="technologiesused">React, API, HTML5, CSS3</span>
            </p>
         </div>
      </div>

      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://expressstore.herokuapp.com/" class="projectname">
               Sunglasses Express <span class="lightest"></span>
            </a>
            <a href="https://expressstore.herokuapp.com/" class="projectnamelink" target="_blank">
               https://expressstore.herokuapp.com/</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               A fictional sunglasses store. This site has full CRUD operations on sunglasses for sale, and it runs on ExpressJS,NodeJS and a MongoDB database. I also designed the UI,CSS and graphics, without using any CSS frameworks.
               <span class="technologiesused">Javascript, ExpressJS, NodeJS, MongoDB, Mongoose, HTML5, CSS3</span>
            </p>
         </div>
      </div>










      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://obilo.io/stockspro" class="projectname">
               Stocks Pro <span class="lightest"></span>
            </a>
            <a href="https://obilo.io/stockspro" class="projectnamelink" target="_blank">
               https://obilo.io/stockspro</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               An app to research the Stocks of publicly traded American Companies. Made in ReactJS. Connects to the Finnhub's REST API for data.
               <span class="technologiesused">React, API, HTML5, CSS3, API</span>
            </p>
         </div>
      </div>








      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://preacherquotes.com" class="projectname">
               Preacher Quotes<span class="lightest"></span>
            </a>
            <a href="https://preacherquotes.com" class="projectnamelink" target="_blank">
               https://preacherquotes.com</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               A user-created collection of Preachers and some of their sayings.
               <span class="technologiesused">MongoDB, Express JS, Node, HTML5, CSS3, Javascript, Mongoose</span>
            </p>
         </div>
      </div>

      <!-- <div class="panelbox">
         <a href="https://pesapulse.com" class="projectnamelink">
            PesaPulse <span class="lightest">&middot https://pesapulse.com</span>
         </a>
         <p class="projectdescription">A financial research app that presents lived market data for Forex, Stocks, and Cryptocurrencies.</p>
      </div> -->
   </div>
   <div class="homesection">

      <h2 class="lightbigheader">my projects</h2>
      These are some of projects which I created, own, and actively maintain:

      


      <div class="panelbox">
         <div class="panelboxheader">
            <a href="https://ngplaylist.com" class="projectname">
               NGplaylist
            </a>

            <a href="https://ngplaylist.com" class="projectnamelink">
               https://ngplaylist.com</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               A social network for musicians and their fans, centered around Nigerian music. Used by many musicians to promote their songs. Started in 2015.
               <span class="technologiesused">PHP, MySQL, Javascript, jQuery, HTML5, CSS3</span>
            </p>
         </div>
      </div>

      <div class="panelbox">
         <div class="panelboxheader">

            <a href="https://obipix.com" class="projectname">
               ObiPix Wallpapers <span class="lightest"></span>
            </a>
            <a href="https://obipix.com" class="projectnamelink" target="_blank">
               https://obipix.com</span>
            </a>
         </div>
         <div class="panelboxcontent">
            <p class="projectdescription">
               Create an infinite variety of algorithm-generated wallpapers. Image generation was coded in PHP using the PHP GD library and algorithms I created. Also includes a designer-palette maker as well as an illustrator's palette-maker.

               <span class="technologiesused">PHP, MySQL, Javascript, jQuery, HTML5, CSS5</span>
            </p>
         </div>
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
               Create images with beautiful backgrounds and Bible Verses overlayed on them. Accesses over 6 different versions, and uses the same image-pattern algorithms from ObiPix Wallpapers.<span class="technologiesused">PHP, Javascript, jQuery, HTML5, CSS3, APIs, SQL</span>
            </p>
         </div>
      </div>

      <h2 class="lightbigheader">
         Graphic&nbsp;Design<br />UI&nbsp;design<br />Print&nbsp;Design</h2>
      <div class="panelbox">

         <a href="graphicdesign/Logo-7.png" data-fancybox="graphicdesign" data-caption="AgPro logo design">
            <img class="artpicthumb" src="graphicdesign/Logo-7-150x150.png"></a>

         <a href="graphicdesign/logo2_iteration.jpg" data-fancybox="graphicdesign" data-caption="AgPro logo design"">
<img class=" artpicthumb" src="graphicdesign/Logo-2-150x150.png"></a>

         <a href="graphicdesign/agpro_logo5_iteration_sq.jpg" data-fancybox="graphicdesign" data-caption="AgPro logo design">
            <img class="artpicthumb" src="graphicdesign/thumbnail_agpro_logo5_iteration_sq.jpg"></a>

         <a href="graphicdesign/Logo-10.png" data-fancybox="graphicdesign" data-caption="AgPro logo design">
            <img class="artpicthumb" src="graphicdesign/Logo-10-150x150.png"></a>

         <a href="graphicdesign/1_TheArrivalsGroup - Banner Letterhead - Dark middle.jpg" data-fancybox="graphicdesign" data-caption="Print design for the Arrivals Group">
            <img class="artpicthumb" src="graphicdesign/LetterheadDesign_Colored_TheArrivalsGroup-150x150.jpg"></a>

         <a href="graphicdesign/jamb2-1140x641.png" data-fancybox="graphicdesign" data-caption="Illustration for an examination board - Print Design">
            <img class="artpicthumb" src="graphicdesign/jamb2-300x300.png"></a>

         <a href="graphicdesign/jamb1-1140x641.png" data-fancybox="graphicdesign" data-caption="Illustration for an examination board - Print Design">
            <img class="artpicthumb" src="graphicdesign/jamb1-300x300.png"></a>

         <a href="graphicdesign/UI-Design_Figma_BellaNaija_redesign.jpg" data-fancybox="graphicdesign" data-caption="UI design for Bella Naija">
            <img class="artpicthumb" src="graphicdesign/UI-Design_Figma_BellaNaija_redesign-150x150.jpg"></a>

         <a href="graphicdesign/Patience-and-Sani-Wedding-Invitation-Classic.jpg" data-fancybox="graphicdesign" data-caption="Wedding Invitation Design">
            <img class="artpicthumb" src="graphicdesign/Patience-and-Sani-Wedding-Invitation-Classic-150x150.jpg"></a>

         <a href="graphicdesign/construction-center.png" data-fancybox="graphicdesign" data-caption="JollyCab Logo Design">
            <img class="artpicthumb" src="graphicdesign/construction-center-300x300.png"></a>

         <a href="graphicdesign/Color-Palette.png" data-fancybox="graphicdesign" data-caption="JollyCab Branding Palette">
            <img class="artpicthumb" src="graphicdesign/Color-Palette-150x150.png"></a>

         <a href="graphicdesign/Verification.png" data-fancybox="graphicdesign" data-caption="Mobile app UI design for JollyCab">
            <img class="artpicthumb" src="graphicdesign/Verification-300x300.png"></a>

         <a href="graphicdesign/Logo_Final_Reflection.png" data-fancybox="graphicdesign" data-caption="Canero Bridge Logo Design - Oil and Gas">
            <img class="artpicthumb" src="graphicdesign/thumbnail_Canero_Bridge_Logo_Design.png"></a>


         <a href="graphicdesign/Logo_IDEA_slightcolorchange.jpg" data-fancybox="graphicdesign" data-caption="Wedding Invitation Design">
            <img class="artpicthumb" src="graphicdesign/Logo_IDEA_slightcolorchange-150x150.jpg"></a>



      </div>
   </div>
</div>

<?php require_once "universal_footer.php"; ?>