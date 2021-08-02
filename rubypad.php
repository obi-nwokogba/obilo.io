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

<?php require_once "universal_footer.php"; ?>