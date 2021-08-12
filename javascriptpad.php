<?php
require_once "universal_header.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "urlmaker.php";
?>

<title>
   JavaScript Notes - JavaScript Cheat Sheet - obilo.io
</title>

<?php
require_once "universal_navigation.php"; ?>

<div class="pagecontainer">
   <div class="homesection">
      <span class="pageheader">JAVASCRIPT NOTES</span>

      <span class="pageheader2">object types</span>


      <span class="pageheader2">checking object types</span>
      <span class="explanationabovecodeblock">
A lot of times you want to check what type of object some variable is. Here are some Javascript methods and functions that help you know for sure what kind of variable or data you're dealing with.</span>

<span class="pageheader3">typeof</span>

<pre><code class="language-javascript">
if(typeof age !== 'undefined'){
      
}
</code></pre>


<span class="pageheader3">instanceof</span>

<pre><code class="language-javascript">
let num = 5.5694235234789;
num instanceof float;

</code></pre>

      <span class="pageheader2">booleans</span>










      <span class="pageheader2">strings</span>

      <span class="subjectminiheader">Strings</span>
      <span class="pageheader3">split() </span>

<span class="explanationabovecodeblock">
Split is a handy string method that creates an array of characters from a string</span>






 <span class="pageheader2">decimal numbers / floats</span>

 <span class="subjectminiheader">floats</span>
      <span class="pageheader3">toFixed() </span>

<span class="explanationabovecodeblock">
A very handy method for rounding up a decimal to a specified number of digits.</span>

<pre><code class="language-javascript">
let num = 5.5694235234789;
let n = num.toFixed(2);
// n becomes 5.57
</code></pre>





      <span class="pageheader2">arrays</span>

      <span class="explanationabovecodeblock">
There are several ways to create an array in Javascript:</span>
<pre><code class="language-javascript">// FIRST way to create an array
let cities = [];

// SECOND way to create an array
let cities = ["Paris", "Boston", "Nairobi", "Seoul"];

// THIRD way to create an array
let cities = new Array();

// FOURTH way to create an array
let cities = new Array("Seoul","Tokyo","Bangokok");

// FIFTH way to create an array
let cities = new Array(8);
</code></pre>

<span class="pageheader3">indexOf() and lastIndexOf() </span>
<span class="explanationabovecodeblock">
indexOf()</span>
<pre><code class="language-javascript">let cities = ["Paris", "Boston", "Nairobi", "Seoul"];

cities.indexOf("Seoul");
// returns 3

cities.indexOf("London");
// returns -1 because "London" isnt in the array.

cities.lastIndexOf("Nairobi");
// returns 2
</code></pre>

<span class="subjectminiheader">Arrays</span>
<span class="pageheader3">push(), pop(), shift() and unshift() </span>

<span class="explanationabovecodeblock">
These four methods are simple ways to add and remove elements from the ends of an array.</span>

<pre><code class="language-javascript">let letters = ["j","k","l","m"];
letters.push("n");
</code></pre>

<pre><code class="language-javascript">// Length/Size of an Array
let numbers = [1,2,3,4];

console.log(numbers.length);
// This prints 4</code></pre>

<span class="explanationabovecodeblock">
In Javascript, an array can have different types of object. The same array can contain strings, integers, booleans, etc as its elements.</span>




<span class="pageheader2">maps</span>

<span class="explanationabovecodeblock">
A map is a type of JavaScript data structure thats used for mapping keys to values. Unlike a typical JavaScript object, where you can only map strings to values, a map allows you map different types of objects to values. Maps are considered a superior data structure to objects, and should be used for mapping keys to values.<br />A map also comes with some very useful methods like get(), set(), has(), keys(), entries(), clear(), delete()...</span>

<pre><code class="language-javascript">// Lets create a map
let favoriteMovies = new Map();
</code></pre>


<span class="subjectminiheader">maps</span>
<span class="pageheader3">get(), set()</span>
<pre><code class="language-javascript">// Lets add objects into our map
let favoriteMovies = new Map();
</code></pre>
<pre><code class="language-javascript"></code></pre>


<span class="subjectminiheader">maps</span>
<span class="pageheader3">has(), keys()</span>

<span class="pageheader2">loops</span>

<span class="pageheader2">Math and Algebra</span>

<span class="pageheader3">Math.pow(x,y), Math.sqrt(x,y)</span>
<pre><code class="language-javascript">// EXPONENTIATION FUNCTIONS
// 2^3 = 2 raised to power 3 = 2 * 2 * 2
Math.pow(2,3)
// returns 8

// 5^4 = 5 raised to power 4 = 5 * 5 * 5 5 * 5
Math.pow(5,4)
// returns 625

// Square root of 99
Math.sqrt(99)
// returns 9.9498743710662

// Square root of 25
Math.sqrt(25)
// returns 5
</code></pre>

<span class="pageheader2">regular expressions or RegEx</span>

<span class="explanationabovecodeblock">
Regulard expressions are a type of javascript object. You can create a regex to check if a string matches a certain patter.</span>


<span class="pageheader2">helpful general purpose functions</span>


<span class="pageheader3">random number(integer) generator</span>
      <span class="explanationabovecodeblock">
A random number generator, which includes the minimum and maximum sent into it.</span>

<pre><code class="language-javascript">// min and max are included 
function randomInteger(min, max) {
      return Math.floor(Math.random() * (max - min + 1) + min)
}</code></pre>


<pre><code class="language-javascript"></code></pre>
<pre><code class="language-javascript"></code></pre>
<pre><code class="language-javascript"></code></pre>
<pre><code class="language-javascript"></code></pre>
<pre><code class="language-javascript"></code></pre>
   </div>
</div>

<?php require_once "universal_footer.php"; ?>