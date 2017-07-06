<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>What is cloud computing?</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> A branch of meteorology <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> A style of laptop that is super light weight <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> A way of storing data in a decentrilized way so that it is accessible to all your devices <br>
<input type = "radio" name = "q1" onclick = "answer1('d')"> All of the above <br>
</form>
<br>

<form name = "question2">

<b>What is an example of cloud computing</b><br>

    <input type = "radio" name = "q2" onclick = "answer2('a')"> Microwaving a hotdog  <br>
    <input type = "radio" name = "q2" onclick = "answer2('b')"> Streaming a song using a  music service like Spotify <br>
    <input type = "radio" name = "q2" onclick = "answer3('a')"> Playing a videogame like super mario on your gameboy<br>
    <input type = "radio" name = "q2" onclick = "answer4('b')"> None of the above<br>
</form>
<br>

<form name = "question3">

<b>Is it possible to run your own cloud server</b><br>

<input type = "radio" name = "q3" onclick = "answer3('a')"> Yes<br>
<input type = "radio" name = "q3" onclick = "answer3('b')">No<br>
</form>
<br>

<form name = "question4">

<b>Will everything be in the cloud in the future</b><br>

    <input type = "radio" name = "q4" onclick = "answer4('a')"> Yes <br>
    <input type = "radio" name = "q4" onclick = "answer4('b')"> No <br>
    <input type = "radio" name = "q4" onclick = "answer4('c')"> Impossible to tell <br>
</form><br><br>
<br>
<br>
<br>
<a href="http://kelvin.ist.rit.edu/~butterscotch/webinars.php">Back to webinars</a>
</div>
<script>

    function answer1(input) {
        if (input == "c") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "b") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "a") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer4(input) {
        if (input == "c") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

</script>
<?php
	include 'footer.html'
?>