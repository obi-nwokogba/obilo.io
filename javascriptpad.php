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
   <div class="homesection">
      <span class="pageheader">JAVASCRIPT NOTES</span>


      <span class="explanationabovecodeblock">
A random number generator, which includes the minimum and maximum sent into it.</span>

      <pre><code class="language-javascript">
         // min and max are included 
         function randomInteger(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min)
         }

      </code></pre>

   </div>
</div>

<?php require_once "universal_footer.php"; ?>