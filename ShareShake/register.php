<?php

include('header.php');
?>

        <title>
        Register
        </title>
        <style>
            #email
            {
                margin-left:22px;
            }
            .left {
                width: 30%;
                float: left;
                text-align: right;
            }
            .right {
                width: 65%;
                margin-left: 10px;
                float:left;
            }
            div{
                margin-bottom: 10px;
            }
            form {
               text-align:center;
            }
            #mid{
                width: 30%;
                margin: auto;
                position: relative;
                text-align: center;
            }

        </style>
    </head>
    <body>
        <div class="nav" id="mid">

            <h1>Create an account</h1>
            <form action="doRegister.php" method="post">
                <div>
                    <div class="left"><label id = "fname">FirstName</label></div>
                    <div class="right"><input type="text" size = "12" name="fname" required></div>
                </div>

                <div>
                    <div class="left"><label id = "lname">LastName</label></div>
                    <div class="right"><input type="text" size = "12" name="lname" required></div>
                </div>

                <div>
                    <div class="left"><label for ="email">Email</label></div>
                    <div class="right"><input type="text" size = "12" name="email" required></div>
                </div>

                <div>
                    <div class="left"><label>Password</label></div>
                    <div class="right"><input type="password" size = "12" name="pass" required></div>
                </div>

                <div>
                    <div class="left"> <label>Confirm</label></div>
                    <div class="right"><input type="password" size = "12" name="pass2" required></div>
                </div>



                <button type="submit">Create Account</button>
            </form>

            <form action = "login.php" method ="get">
                <input type ="submit" value="Cancel">
            </form>
        </div>



    </body>
</html>



