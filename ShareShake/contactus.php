<?php

include('header.php');

?>
    <title>Contact Us</title>
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
                <h1>Ask us</h1>

                <form action="doContact.php" method ="post" id="cmt">
                    Your Email: <input type="text"  name="email">
                    <button type="submit">Submit</button>
                </form>

                <textarea name="comment" form="cmt">Enter inquiry here...</textarea>

            </div>
    </body>
</html>
