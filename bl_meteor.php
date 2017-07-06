<?php
  include 'header.html'
?>
<div class="container">
	<div class="row">
		<div class ="col-sm-9">
			<h1>Getting Started with Meteor</h1>
			<h2>by Blake Costa</h2>
			<div class="row">
				<div class="col-sm-10">
					<div class="container">
						<div class="well">
							<p style="text-indent: 50px">
								The first thing you need to do before you start jumping into meteor, is to actually install it. 
								To do this, navigate to https://www.meteor.com/install and download the Windows installer. If you’re 
								using a linux distro, go to the CLI and type in curl https://install.meteor.com/ | sh 
								After this, I highly recommend making a separate folder to for your first project as meteor will generate 
								a lot of default files. To make your first project, navigate to the directory with the command line. 
								If you know git, I recommend making a new git repository in here, but don’t fret if you don’t know git. 
								Just type in this command meteor create simple-todos  and that will generate your first project in the current directory. 
								Head over to my webinar in order to see the rest of meteor walkthrough.
								Node Thumbnail:										https://pbs.twimg.com/profile_images/527039622434418688/uJPMDhZq_400x400.png
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<img src="media/blake.jpg" class="img-rounded" alt="Cinque Terre" width="400" height="300">
		</div>
	</div>
</div>
		
<div class="container-fluid text-center">
	<div class="row">
		<h1>Related Posts</h1>
		<div class="jumbotron">
			<div class="col-sm-4">
				<h2><a href="bl_os.php">Open Source</a></h2>
				<br>
				<img src="media/clayton.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
			</div>
			<div class="col-sm-4">
				<h2><a href="bl_cc.php">Cloud Computing</a></h2>
				<br>
				<img src="media/bryson.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
			</div>
			<div class="col-sm-4">
				<h2><a href="bl_bgbw.php">Beginner's Guide to Building a Website</a></h2>
				<br>
				<img src="media/jason.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
			</div>
		</div>
	</div>
</div>
<?php
  include 'footer.html'
?>