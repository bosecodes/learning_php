<html>
    <head>
        <title>Starting PHP</title>
    </head>
    <body>
        <form action = "index.php" method = "post">
            Enter a color : <input type = "text" name = "color" placeholder = "Color"/>
            <br>
            Enter a plural : <input type = "text" name = "plural" placeholder = "Enter a plural"/>
            <br>
            Enter a celebrity : <input type = "text" name = "celebrity" placeholder = "Celeb Crush" />
            <br>
            Password : <input type = "password" name = "password" placeholder = "Enter password" />
            <br>
            <input type = "submit"/>
        </form>

        <br>

        <?php
        /* WHY USE POST INSTEAD OF GET?
            GET method on the form pushes each input to the url, which can be changed
            and viewed by any user, therefore affecting the secureness of the website.
            Therefore, we use POST in which information is not loaded into the url, thereby
            being a much safer alternative.
        */
            $color = $_POST['color'];
            $plural = $_POST['plural'];
            $celebrity = $_POST['celebrity'];
            $password = $_POST['password'];
            echo "Roses are $color <br>";
            echo "$plural are blue <br>";
            echo "I love $celebrity <br>";
            echo "Password is $password <br>";
        ?>
    </body>
</html>
