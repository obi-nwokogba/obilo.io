<?php
require_once "universal_header.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "urlmaker.php";
?>

<title>
   Javascript Cheat Sheet - obilo.io
</title>

<?php
require_once "universal_navigation.php"; ?>

<div class="pagecontainer">
   <div class="homesection">
      <span class="pageheader">JAVASCRIPT NOTES</span>


      <span class="pageheader2">object types</span>


      <span class="pageheader2">checking object types</span>

      <span class="pageheader2">booleans</span>










      <span class="pageheader2">strings</span>
      <span class="pageheader3">split() </span>

<span class="explanationabovecodeblock">
Split is a handy string method that creates an array of characters from a string</span>






 <span class="pageheader2">decimal numbers / floats</span>
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
<pre><code class="language-javascript">
let cities = ["Paris", "Boston", "Nairobi", "Seoul"];
cities.indexOf("Seoul");
// returns 3

cities.indexOf("London");
// returns -1 because "London" isnt in the array.

cities.lastIndexOf("Nairobi");
// returns 2
</code></pre>

<span class="pageheader3">push(), pop(), shift() and unshift() </span>

<span class="explanationabovecodeblock">
These four methods are simple ways to add and remove elements from the ends of an array.</span>

<pre><code class="language-javascript">
let letters = ["j","k","l","m"];
letters.push("n");
</code></pre>



<span class="explanationabovecodeblock">
In Javascript, an array can have different types of object. The same array can contain strings, integers, booleans, etc as its elements.</span>

<pre><code class="language-javascript">
// Length/Size of an Array
let numbers = [1,2,3,4];
console.log(numbers.length);
// This prints 4</code></pre>


      <span class="explanationabovecodeblock">
A random number generator, which includes the minimum and maximum sent into it.</span>

      <pre><code class="language-javascript">
         // min and max are included 
         function randomInteger(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min)
         }</code></pre>

   </div>
</div>

<?php require_once "universal_footer.php"; ?>