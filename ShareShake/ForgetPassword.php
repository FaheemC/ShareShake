<?php

include('header.php');

?>
<title>Forgot Password</title>
    <style>
        #mid{
            margin:0 auto;
            text-align: center;
        }

        #cmt{
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="nav" id="mid">
        <h1>We will send a verification email</h1>
        <form action="doForget.php" method ="post">
            Email: <input type="text" name="email">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
