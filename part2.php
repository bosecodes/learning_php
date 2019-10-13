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
        
        /*
            we can use arrays in PHP as well, here the arrays are actually similar to python lists,
            they are very flexible just like python lists, and you can change each element,
            also, you can add elements just as simple as,                                                                    
            $friend[4] = "something" <--- if the friend array initially contained 3 elements.
            
            and we can create a constant valued array of desired length using the following function:
            array_fill((int: start index),(int: number of elements),(value to be put));
            
            example:
            <?php
            $a = array_fill(5, 2, "bosecodes" );
            print_r($a);
            ?>
            
            the output of above code will be:
            Array
            (
           [5]  => "bosecodes"
           [6]  => "bosecodes"

            )
        */
            $friends = array("Kevin", true, 43.43, "Oscar");
            $friends[2] = "Dwayne";
            $friends[4] = "Angela";
            echo $friends[2]."<br>";
            echo $friends[4]."<br>";
            echo count($friends)."<br>";
            
            echo "Roses are $color <br>";
            echo "$plural are blue <br>";
            echo "I love $celebrity <br>";
            echo "Password is $password <br>";
        ?>
    </body>
</html>   
