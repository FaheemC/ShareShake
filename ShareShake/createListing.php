<?php

include('header.php');

?>
    <title>Post Item</title>
        <style>
            div.inside {
                width:500px;
                padding: 10px;
                border: 2px solid black;
                margin: 0 auto;
            }

            div.button {
                width: 200px;
                margin: 0 auto;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center;"><strong>Create Listing</strong></h1>
            <div class ="outside">
                <div class="inside">
                    <form action="/action_page.php">Product:<br />
                        <input type="text" name="firstname" size="30" />
                        <br /><br />
                        Maximum Renting Period:<br />
                        <input type="text" name="firstname" size="15" />
                        <br /><br />
                        Price Per Week:<br />
                        <input type="text" name="firstname" size="4" />
                        <br /><br />
                        <div class="image">
                            <a href="">Upload Image (Optional)</a><br>
                            <img src="product.jpg" alt="Product Image" border="2" width="50" height="50">
                        </div>
                        <br>
                        Condition:
                        <br>
                        <select>
                            <option value="Not Used">Not Used</option>
                            <option value="Lightly Used">Lightly Used</option>
                            <option value="Moderetely Used">Moderetely Used</option>
                            <option value="Heavily Used">Heavily Used</option>
                            <option value="Heavily Damaged">Heavily Damaged</option>
                        </select>
                        <br /><br />
                        Describe Product:<br />
                        <textarea rows="4" cols="50"></textarea>
                        <br /><br />
                    </form>
                </div>
            <br>
                <div class ="button">
            <input type="submit" value="Enter" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button">Cancel</button>
                </div>
            </div>
        </div>
    </body>
</html>