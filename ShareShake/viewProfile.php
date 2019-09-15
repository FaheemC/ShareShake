<?php

include('header.php');
//hasAccess();
?>
<html>
	<head>
		<title>User's Profile</title>

    </head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3>Name's Profile</h3>
					<br><br><br>
					<b>Name</b> <?php echo $_SESSION['firstname']; + "" + $_SESSION['lastname']?>
                    <br>
					<b>Email Address</b> <?php  echo $_SESSION['email'];?>
                    <br>
					<b>Location</b>  <?php  echo $_SESSION['address'];?>
                    <br>
					<b>Member since:</b>
					<br><br>
					<button onclick="window.location.href='editProfile.php'">Edit Profile</button>
				</div>
				<div class="col-sm-6">
					<h3>Post History</h3>
					<p>Ad Name</p>
					<p>Price</p>
					<p>Image goes here</p>
					<p>Description for item<p>
					<br>
					<button>View Ad</button>
					<br><br>
					<button>Next Ad</button>
				</div>
			</div>
		</div>
	</body>
</html>