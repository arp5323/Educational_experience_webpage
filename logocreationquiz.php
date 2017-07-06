<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>What is a logo?</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> A symbol for your business/website that brands you in the public eye <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> An image used to let people know if they are allowed to cross the street at a crosswalk <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> The picture used when sending a casting agent your photo <br>
<input type = "radio" name = "q1" onclick = "answer1('d')"> The art of using logic to convince a person you are right in a debate<br>
</form>
<br>

<form name = "question2">

<b>Only a business can have a logo</b><br>

<input type = "radio" name = "q2" onclick = "answer2('a')">True  <br>
<input type = "radio" name = "q2" onclick = "answer2('b')"> False <br>
</form>
<br>

<form name = "question3">

<b>It takes multiple people to create a logo</b><br>

<input type = "radio" name = "q2" onclick = "answer3('a')">True  <br>
<input type = "radio" name = "q2" onclick = "answer3('b')"> False <br>
</form>
<br>

<form name = "question4">

<b>Well made logos are only created by professionals</b><br>

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
        if (input == "a") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer4(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

</script>
<?php
	include 'footer.html'
?>