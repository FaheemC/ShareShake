<?php

include('header.php');

?>



<style>
    .btn

    {
        //display: flex;
        justify-content: space-between;
    }


    #email
    {
        margin-left:23px;
    }

    #mid
    {
        max-width: 980px;
        width:30%;
        margin:auto;
        position:relative;
        text-align: center;
    }
    #mid > * {
        margin-bottom: 10px;
    }

    #btn1,#btn2,#btn3
    {
        display:inline-block;
        margin: 5px;
    }
</style>

<title>Login</title>
</head>

<body>

    <div class="nav" id="mid">
        <h1>Sign In</h1>

        <form action = "doLogin.php" method="post">
            <label for="username">Email</label>
            <input type="text" size="11" class="form-control" name="username" required>

            <label for="password">Password</label>

            <input type="password" size="11" class="form-control" name="password" required>

            <input type="submit" class = "btn btn-primary" value = "&nbsp;Log In&nbsp;" id="btn3">
        </form>

        <form action="register.php" method ="get">
            <button type ="submit" id="btn1">Sign Up</button>
        </form>

        <form action ="Login.php">
            <button id = "btn2" type ="reset" >Cancel</button>
        </form>

        <a href="ForgetPassword.php">Forget Password?</a>
    </div>


</body>
</html>

