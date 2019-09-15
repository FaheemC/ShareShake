<?php
//include header and db connection
    include('header.php');
//hasAccess();
?>
    	<title>Edit Profile</title>
        <style>
            .container  * {
                margin-bottom: 10px;
            }
        </style>

	</head>
	<body>
        <div class="container">
            <form method = "post" action = "doEditProfile.php">
                <div class=".container-fluid" align = "center">
                    <h3>Name's Profile</h3>

                    <table>
                        <tr>
                            <td><b>First Name </b></td>
                            <td><input type="text" name="firstname"></td>
                        </tr>
                        <tr>
                            <td><b>Last Name </b></td>
                            <td><input type="text" name="lastname"></td>
                        </tr>
                        <tr>
                            <td><b>Email Address </b></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td><b>Location </b></td>
                            <td><input type="text" name="location"></td>
                        </tr>
                        <tr>
                            <td><b>Old Password </b></td>
                            <td><input type="text" name="oldpw"></td>
                        </tr>
                        <tr>
                            <td><b>New Password </b></td>
                            <td><input type="text" name="newpw"></td>
                        </tr>
                    </table>

                    <input type="submit" value="Update Changes">
                </div>
            </form>
        </div>
	</body>

</html>