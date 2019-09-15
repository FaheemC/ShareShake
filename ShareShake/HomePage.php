<?php

include('header.php');

?>

        <title>
            Home Page
        </title>
        <style>
            .container
            {
                width: 30%;
                margin: 0 auto;
                position:relative;
                text-align: center;

            }
            .icon
            {
                width:25px;
                line-height:40px;
                background:black;
                color:white;
                text-align:center;
            }
            .left
            {
                position:absolute;
                top:50%;
                left:0%;
                transform: translate(0%,-50%);
            }
            .right
            {
                position:absolute;
                top:50%;
                right:0%;
                transform: translate(0%,-50%);

            }
            #search{
                background-color:ghostwhite;
                width:100%;
                clear:left;
                text-align: center;
                margin-bottom: 10px;
                padding: 5px;
            }
        </style>

    </head>

    <body>
        <div id="search">
            <input id="round" type="text" placeholder ="Search">
            <select width="200" height="50" >
                <option value="Auto">Auto</option>
                <option value ="Book">Books</option>
                <option value ="Office Appliance">Office Supplies</option>
                <option value ="Electronics">Electronics</option>
            </select>
            <input type="text" placeholder="Location">
            <button type="submit">Search</button>

        </div>

        <div class ="container">
            <h3>Recent Posts</h3>
            <img class="myslider" src="images/download.jpg" style="width:100%">
            <img class="myslider" src="images/352751_p_4.jpg" style="width: 100%">
            <img class="myslider" src="images/41+6cmb0-PL._SL500_AC_SS350_.jpg" style="width: 100%">
            <img class="myslider" src="images/mac.jpg" style="width: 100%">
            <a class ="icon left" onclick="getdiv(-1)">&#10094</a>
            <a class ="icon right" onclick="getdiv(1)">&#10095</a>
        </div>

        <script>
            var index =1
            showdiv(index);

            function getdiv(n)
            {
                showdiv(index+=n);
            }

            function showdiv(n)
            {
                var i;
                var a = document.getElementsByClassName("myslider");
                if(n > a.length)
                {
                    index = 1;

                }
                if(n < 1)
                {
                    index = a.length;

                }
                for(i=0; i < a.length; i++)
                {
                    a[i].style.display = "none";
                }
                a[index-1].style.display ="block";
            }

        </script>



    </body>

</html>