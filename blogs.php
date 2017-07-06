<?php
  include 'header.html'
?>

<div class="container">
	<div class="col-sm-6">
		<div class="row">
			<h2><a href="bl_bgbw.php">Beginner's Guide to Building a Website</a></h2>
			<p>This blog will help you get started on your first webpage.</p>
			<img src="media/jason.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		</div>
		<div class="row">
			<h2><a href="bl_cc.php">Cloud Computing</a></h2>
			<p>This blog will give you a deeper understanding of cloud computing.</p>
			<img src="media/bryson.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		</div>
		<div class="row">
			<h2><a href="bl_meteor.php">Getting Started with Meteor</a></h2>
			<p>This blog is designed to ease you into meteor js.</p>
			<img src="media/blake.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		</div>
	</div>
	<div class="col-sm-4">
		<div class="well">
			<h3 class="form-text">Get Our Newsletter!</h3>
			<hr>
			<form class="form-text" action="blogs.php" onsubmit="" method="post">
				<input type="text" name="Email" value="Email">
				<br>
				<br>
				<input type="text" name="Name" value="Name">
				<br><br>
                <button type="submit" name="submit" value="Sign Up">Sign Up</button>
			</form>
            <?php
                //establishing connection to the server
                $servername = "localhost";
                $username = "butterscotch";
                $password = "WuTang1337";
                $dbname = "butterscotch";

                $UserID = "";
                $Email = $_POST['Email'];
                $Name = $_POST['Name'];

                if( empty($Name) || strcmp($Name,"Name") == 0 || empty($Email) || strcmp($Email,"Email") == 0){
                    echo '*missing values, please fill in all fields*';
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
                    $sql2 = "INSERT INTO NEWSLETTER(UserID, Email, Name) VALUES( NULL, '".$Email."', '". $Name . "');";

                    //executes the query
                    $result = $conn->query($sql2);
                    //making sure all values are in the database
                    $sqlGetValues = "SELECT * FROM CONTACT";
                    $result = $conn->query($sqlGetValues);


                    if($result->num_rows > 0){
                    
                    echo '<br><div class="well"><h1 class="text-center">You Have Subscribed Successfully!</h1></div>';
                    }

                    else{
                        echo "0 results";

                    }
                    //closing connection
                    $conn->close();
                }
            ?>
			<p>
				You will receive the latest updates about our webinars and additions to the team.
				It is highly encouraged to sign up for our newsletter so you can spread the
				notoriety of WuTang Web Design.
			</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h2><a href="bl_os.php">Open Source</a></h2>
			<p>This blog shows you exactly what you need to know about open source.</p>
			<img src="media/clayton.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
		</div>
	</div>
</div>
<?php
  include 'footer.html'
?>