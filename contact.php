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
   <h2 class="lightbigheader">
   <i class="far fa-comment-alt"></i> &nbsp;contact me</h2>

      <label for="sendername">Name</label>
      <input name="sendername" id="sendername" class="contactformfield">

      <label for="email">Email Address</label>
      <input name="sendername" id="email" class="contactformfield">

      <label for="email">Phone Number (optional)</label>
      <input name="sendername" id="email" class="contactformfield">

      <label for="email">Message</label>
      <textarea class="contactformfield contactformtextarea"></textarea>

      <button class="sendmessagebutton">send message</button> 
   </div>
</div>

<?php require_once "universal_footer.php"; ?>