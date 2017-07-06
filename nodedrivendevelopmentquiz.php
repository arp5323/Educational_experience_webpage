<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>What is meteor.js?</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> A game where you drive go-karts and target people with turtle shells <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> An open source platform for web and mobile development <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> An application that lets you stream music into your shower<br>
<input type = "radio" name = "q1" onclick = "answer1('d')"> The christmas present you always wanted but never got <br>
</form>
<br>

<form name = "question2">

<b>Can apps be run on meteor</b><br>

<input type = "radio" name = "q2" onclick = "answer2('a')">Yes <br>
<input type = "radio" name = "q2" onclick = "answer2('b')"> No <br>
</form>
<br>

<form name = "question3">

<b>What is full stack reactivity</b><br>

<input type = "radio" name = "q3" onclick = "answer3('a')"> It is when your the webpage retrieves a document<br>
<input type = "radio" name = "q3" onclick = "answer3('b')"> It is when apps automatically update overnight<br>
<input type = "radio" name = "q3" onclick = "answer3('c')"> It is what happens when you are allergic to a food and eat it anyway<br>
<input type = "radio" name = "q3" onclick = "answer3('d')"> It is the ability for the UI to represent changes to the state of the stored data instantly<br>
</form>
<br>
<br>
<br>
<br>
<a href="http://kelvin.ist.rit.edu/~butterscotch/webinars.php">Back to webinars</a>
</div>
<script>

    function answer1(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "a") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "d") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }

</script>
<?php
	include 'footer.html'
?>