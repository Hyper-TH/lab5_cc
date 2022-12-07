<?php

    require_once "conn.php";

    if (isset($_POST['studentName']) && isset($_POST['email']))
    {

        $sn = $_POST['studentName'];
        $e = $_POST['email'];

        $sql_insert = "INSERT INTO students (studentName, email)
        VALUES  ('$sn', '$e')";

        if($conn->query($sql_insert) === TRUE) {
            echo "Student Registration Successful";
        } else {
            echo "Student Registration Unsuccessful: " . $sql_insert . "<br>" . $conn->error;
        }

        $conn->close();
    
    }

?>

<!DOCTYPE HTML>
<html>
    <head>

        <title>
            Add Student Page
        </title>

        <meta charset="utf-8">

        <!-- <link rel="stylesheet" type="text/css" href=""> -->

    </head>

    <body>

        <form method="POST">

            <p><label for="ISBN">Enter student name: </label></p>
                <input type="text" name="studentName" size="25" required/> 

            <p><label for="bookTitle">Enter student email: </label></p>
                <input type="text" name="email" size="25" required/>
            

            <p><input type="submit" value="Submit Student Details"/></p>

        </form>

        <a href="index.php"> Return to homepage </a> <br><br>
        
    </body>

</html>


