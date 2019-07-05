<html>
    <head>
        <title>PHP TEST</title>
    </head>
    <body>
    <form action = "index.php" method = "get">
                Enter Name : <input type = "text" name = "name" placeholder = "NAME">
                <br>
                Enter Age : <input type = "text" name = "age" placeholder = "AGE">
                <br>
                
                <br>
                <input type = "number" name = "num1">
                <br>
                <input type = "number" name = "num2">

                <input type = "submit">

            </form>
            <br>
            <?php
                echo("Hello ");
                echo (strtoupper($_GET['name']));
                echo("<br>");
                echo("Your age is ");
                echo $_GET['age'];
                echo "<br>Answer : ";
                echo $_GET['num1'] + $_GET['num2'];
            ?>
        <?php
        /*Different data types::::
            $phrase = "To be or not to be" <--- string
            $age = 45 <--- whole number (integer)
            $const = 56.43 <-- decimal number (float)
            $decision = true/false <-- boolean
            null <--- no value


            String functions ------------------
            $phrase = "Somdev Base"
            strtolower($phrase)
            strtoupper($phrase)
            strlen($phrase) <-- length of the string
            $phrase[3] <-- this is the 4th character in the string (0 based index)
            also,
            you CAN MODIFY the characters in the string
            $phrase[0] = 'R'   <-- PHRASE TURNS TO Romdev Basu
            Replacing certain parts of the string, or the string as a whole,
            str_replace("Basu", "Bosecodes", $phrase)
            substr($phrase, (startingindex =) 7, (length =)  3 ) <--- 'Bos'

            number properties ----------------
            echo -45.4346 <-- float
            echo 43 <-- int
            echo 6+8 <-- 14 <-- vis a vis, +, -, /, *, % <-- everything works!
            echo (4+5) * 10 <-- follows order of operations BEDMAS
            increment operator >>>>>> num++ <--- works
            ***shorthand operator also
            
            advanced math functions::::::::
            echo abs(-100) <-- absolute value
            echo pow(2,4) <--- 2^4
            echo sqrt(144) <-- 12
            echo max(a,b) <-- maximum num
            echo min(a,b) <--- minimum num
            echo round(3.2) <-- 3
            echo ceil(3.3) <-- rounds up
            echo floor(3.8) <--- rounds down
            sin, cos, tan, etc...


            Get User Input:::::::::::::::::::::::::
            <form action = "index.php" method = "get">
                Name : <input type = "text" name = "name">
                <input type = "submit">
            </form>
            <br>
            <?php
                echo ("Hello $_GET["name"]");
            ?>

        */ 

            $characterName = "Tom";
            $age = 80;
            echo ('
            <h1>My site</h1>
            ');
            echo("There was once a man named $characterName <br>");
            echo("He was $age years old<br>");
            $characterName = "Mike";
            $age = 35;
            echo("He liked the name $characterName<br>");
            echo("But didn't like being $age<br>");
            echo("<hr><br><br>");

         ?>
    </body>
</html>
