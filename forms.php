<?php 
    include 'header.html'
?>

    

<div class="container">
    <div class="well well-sm">
        <h3 class="text-center">Contact Us</h3>
    </div>

    <div class="well well-lg">
        <form class="form-horizontal" name="form" action="forms.php"  onsubmit="" method="post">

            <div class="form-text">
                <p>Email:  <input type="text" name="Email"  /></p><br/>
                <p>Name:  <input type="text"  name="Name"  /></p><br/>

                <p>Topic:   <input type="text"  name="Topic"  /><br /></p><br>
                <p>Comment: <textarea class="form-control" name="Comments" rows="5" cols="40"></textarea></p><br/>
            </div>
            <div class="form-text">
                <p><button type="submit" name="Submit" value="Send Form" />Submit Form</button></p> 
            </div>
        </form>    
        <br>
    </div>
    
</div>

<script>
    function errorFunction(){
        alert("Please fill in all fields");
    }
</script>

<?php
//establishing connection to the server
$servername = "localhost";
$username = "butterscotch";
$password = "WuTang1337";
$dbname = "butterscotch";

$MessageID = "";
$Email = $_POST['Email'];
$Name = $_POST['Name'];
$Topic = $_POST['Topic'];
$Comments = $_POST['Comments'];

if( empty($Email) || empty($Name) || empty($Topic) || empty($Comments)){
    echo '<script type="text/javascript">',
         'errorFunction();',
         '</script>'
         ;
}
/*
if (isset($_POST['Comments'])) {
    // Escape any html characters
    echo htmlentities($_POST['Comments']);
}
*/
else{
    //establishing a new connections
    $conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	//
	$sql2 = "INSERT INTO CONTACT(MessageID, Email, Name, Topic, Comments) VALUES( NULL, '".$Email."', '". $Name . "', '". $Topic ."', '". $Comments . "');";
	
	//executes the query
	$result = $conn->query($sql2);
    //making sure all values are in the database
    $sqlGetValues = "SELECT * FROM CONTACT";
    $result = $conn->query($sqlGetValues);
    
    
    if($result->num_rows > 0){
	/*echo '<table>';
	echo '<tr>
			<th>Email</th>
			<th>Name</th>
			<th>Topic</th>
            <th>Comments</th>
		</tr>';
	//listing each row of information from the database
	while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row["Email"] . "</td>"; 
		echo "<td>" . $row["Name"] . "</td>";
		echo "<td>" . $row["Topic"] . "</td>";
		echo "<td>" . $row["Comments"] . "</td>";
	}
	echo "</table>";
    }*/
    
    //will have to edit this to css
    echo '<div class="well"><h1 class="text-center">Information successfully posted</h1></div>';
    }
    
    else{
        echo "0 results";

    }
    //closing connection
	$conn->close();
}


    
    

?>

<?
    include 'footer.html'
?>