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
   <link href="obilostyles.css" rel="stylesheet" />


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
            <a href="<?php echo $homepage; ?>">home</a>
            <a href="<?php echo $omniapi; ?>omniapi.php#projects">projects</a>
            <a href="<?php echo $contact; ?>">contact me</a>

            <a href="downloads/Obi Nwokogba - Resume - Full Stack Software Engineer.pdf" target="_blank">my resume</a>
            <!-- <a href="<?php echo $javascriptpad; ?>">javascript notes</a> -->
            <!-- <a href="<?php echo $rubypad; ?>">ruby notes</a> -->
           <!--  <a href="<?php //echo $phppad; ?>">php notes</a> -->
            
         </nav>
      </header>

<div class="pagecontainer">
    <div class="homesection">

    <h2 class="lightbigheader">about OmniAPI</h2>

    <h2 class="lightbigheader">Use and Examples</h2>

    <h2 class="lightbigheader">Future plans</h2>
        <span class="pageheader">RUBY NOTES</span>


<span class="explanationabovecodeblock">
Defining a class in Ruby</span>
<pre> <code class="language-ruby">    
# The Greeter class
class Greeter
  def initialize(name)
    @name = name.capitalize
  end

  def salute
    puts "Hello #{@name}!"
  end
end

g = Greeter.new("world")
g.salute
</code></pre>

<span class="explanationabovecodeblock">
String interpolation</span>
<pre><code class="language-ruby">
adjective = 'Clean'
puts "Hello #{adjective} World"
</code></pre>

      <h2 class="lightbigheader">RAILS</h2>

<span class="explanationabovecodeblock">
Some steps in Creating a Ruby on Rails app from the terminal.</span>

      <pre><code class="language-ruby">

1. Create the app
-----------------
rails new intro_app_api --api -d postgresql --skip-git


2. Create a database for your app
---------------------------------
rails db:create


# You can check your db was created:
------------------------------------
rails dbconsole

# You can close your PostgreSQL CLI with
----------------------------------------
\q

# We create our database tables and give them columns through Migrations.

3. Migration *****
----------------------------------
rails generate migration DatabaseName
OR
rails g migration DatabaseName

# Now, this migration command will make a file in
# db/migrate/20210714161635_database_name.rb

4. ***** Open up this file ^, and then define your schema/add fields.

# Run db Migrate *****
# ----------------------------------
rails db:migrate


      </code></pre>




      <span class="explanationabovecodeblock">
Seeding your database is can be elegantly done by a gem called <strong>
  
<a href="https://github.com/faker-ruby/faker" target="_blank">Faker</a></strong>. For example, if we have a Book model, and we want to add 100 books into our database, we would first install the Faker gem, and then we could use it in this way, in our seeds.rb file:</span>


      <pre><code class="language-ruby">

100.times do
Book.create(
    title: Faker::Book.title,
    author: Faker::Book.author,
    genre: Faker::Book.genre,
    publisher: Faker::Book.publisher,
    publish_date: Fake::Date.backward
)
end

#And then in your terminal, run the command:
rails db:seed

</code></pre>


    </div>
</div>

<div class="footerbox">


    <div class="socialboxcontainer">
        <div class="footersocialbox">
            <a href="https://github.com/obi-nwokogba">
                <i class="fab fa-github-square fa-3x"></i></a>
            <a href="https://github.com/obi-nwokogba">
                Github</a>
        </div>
        <div class="footersocialbox">
            <a href="https://www.linkedin.com/in/obi-nwokogba/">
                <i class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/obi-nwokogba/">LinkedIn</a>
        </div>
    </div>

    <br /><br />
    Last updated on August 10, 2021<br />
    &copy; 2021 Obi Nwokogba
</div>
</div>


<!-- Statcounter code -->
<script type="text/javascript">
var sc_project=12577044; 
var sc_invisible=1; 
var sc_security="c888cf51"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/12577044/0/c888cf51/1/"
alt="Web Analytics"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
</body>

</html>