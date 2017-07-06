<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>What is open source?</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> A type of dog <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> A type of software locked down by companies for their own enjoyment <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> A type of software made to be public and designed to be accessible <br>
<input type = "radio" name = "q1" onclick = "answer1('d')"> A special sauce that goes on the turkey during thanksgiving <br>
</form>
<br>

<form name = "question2">

<b>Open Source only benefits programmers</b><br>

<input type = "radio" name = "q2" onclick = "answer2('a')">True  <br>
<input type = "radio" name = "q2" onclick = "answer2('b')"> False <br>
</form>
<br>

<form name = "question3">

<b>How many people can contribute to an open source project?</b><br>

<input type = "radio" name = "q3" onclick = "answer3('a')"> 1 person<br>
<input type = "radio" name = "q3" onclick = "answer3('b')"> infinite people<br>
<input type = "radio" name = "q3" onclick = "answer3('c')"> 5 people<br>
<input type = "radio" name = "q3" onclick = "answer3('d')"> 62.3 people<br>
</form>
<br>

<form name = "question4">

<b>You need a degree or background in computing to work on an open source project</b><br>

<input type = "radio" name = "q4" onclick = "answer4('a')"> True <br>
<input type = "radio" name = "q4" onclick = "answer4('b')"> False <br>
</form><br><br>
<br>
<br>
<br>
<a href="http://kelvin.ist.rit.edu/~butterscotch/webinars.php">Back to webinars</a>
</div>

<script>

    function answer1(input) {
        if (input == "c") {alert ("Correct! Bravo you know what open source is!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "b") {alert ("Correct! Open source benefits the whole world!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "b") {alert ("Correct! There is no limit to the number of people who can contribute to an open source project!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer4(input) {
        if (input == "db") {alert ("Correct! Anyone can contribute no matter their background")}
        else {alert ("Whoops wrong answer")}
    }

</script>
<?php
	include 'footer.html'
?>