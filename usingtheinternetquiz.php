<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>What is a web browser</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> An application for reading and displaying web content <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> The arch nemesis of mario and frequent kidnapper of princess peach <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> A tool for writing code <br>
</form>
<br>

<form name = "question2">

<b>Old people should stay away from the internet</b><br>

<input type = "radio" name = "q2" onclick = "answer2('a')">True  <br>
<input type = "radio" name = "q2" onclick = "answer2('b')"> False <br>
</form>
<br>

<form name = "question3">

<b>How many pages of google should you click through to answer your question</b><br>

<input type = "radio" name = "q3" onclick = "answer3('a')"> 2-3<br>
<input type = "radio" name = "q3" onclick = "answer3('b')"> 4-5<br>
<input type = "radio" name = "q3" onclick = "answer3('c')"> If it isn't on the first page it isn't worth it<br>
<input type = "radio" name = "q3" onclick = "answer3('d')">What is google<br>
</form>
<br>

<form name = "question4">

<b>WiFi and the Internet are the same thing</b><br>

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
        if (input == "a") {alert ("Correct!!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "c") {alert ("Correct!")}
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