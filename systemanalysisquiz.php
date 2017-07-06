<?php
	include 'header.html'
?>

<div class="container">
<form name = "question1">

<b>Which of these programming languages is appropriate for developing databases</b><br>

<input type = "radio" name = "q1" onclick = "answer1('a')"> HTML <br>
<input type = "radio" name = "q1" onclick = "answer1('b')"> Chef <br>
<input type = "radio" name = "q1" onclick = "answer1('c')"> Whitespace <br>
<input type = "radio" name = "q1" onclick = "answer1('d')"> mySQL <br>
</form>
<br>

<form name = "question2">

<b>Which of these companies is well known for networking and database work</b><br>

<input type = "radio" name = "q2" onclick = "answer2('a')"> Toys 'R' Us <br>
<input type = "radio" name = "q2" onclick = "answer2('b')"> Wegmans<br>
<input type = "radio" name = "q2" onclick = "answer2('c')"> Cisco<br>
<input type = "radio" name = "q2" onclick = "answer2('d')"> Valve <br>
</form>
<br>

<form name = "question3">

<b>What device is used to store information on the web</b><br>

<input type = "radio" name = "q3" onclick = "answer3('a')"> Web Server<br>
<input type = "radio" name = "q3" onclick = "answer3('b')"> A Happy Meal<br>
<input type = "radio" name = "q3" onclick = "answer3('c')"> Speakers<br>
<input type = "radio" name = "q3" onclick = "answer3('d')"> Micro Processor<br>
</form>
<br>

<form name = "question4">

<b>The internet and the web the same thing</b><br>

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
        if (input == "d") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
        }
    
    function answer2(input) {
        if (input == "c") {alert ("Correct!")}
        else {alert ("Whoops wrong answer")}
    }

    function answer3(input) {
        if (input == "a") {alert ("Correct!")}
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