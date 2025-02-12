<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post"
        style="margin: 200px auto; border: 2px solid; padding:20px; width:300px; border-radius:5px;">
        <div style="padding:10px;">
            <label>Name : </label>
            <input type="text" name="name" placeholder="Enter Your Name" required>
        </div>
        <div style="padding:10px; margin-left:13px;">
            <label>Age : </label>
            <input type="number" name="age" placeholder="Enter Your Age" required>
        </div>
        <div style="padding:10px; margin-left:13px;">
            <label>City : </label>
            <input type="text" name="city" placeholder="Enter Your City" required>
        </div>
        <button type="submit" name="submit" style="margin-left:120px;">Submit</button>
    </form>
    <?php
    if (isset($_REQUEST['submit'])) {
        // Assigning values to session
        $_SESSION['name'] = $_REQUEST['name'];
        $_SESSION['age'] = $_REQUEST['age'];
        $_SESSION['city'] = $_REQUEST['city'];

        // checking if session(name) is set or not
        if (isset($_SESSION['name'])) {

            // Printing Sessions
            echo "Welcome " . $_SESSION['name'] . "!";
            echo "<br>Your Age is : " . $_SESSION['age'];
            echo "<br>You Are From " . $_SESSION['city'];

            //Modifying Session
            $_SESSION['name'] = "Vikram Mali";
            echo "<br>Name After Modifying Session : " . $_SESSION['name'] . "!";

            // session_id() ---> 26 Characters
            $id = session_id();
            echo "<br>Session ID is : " . $id;

            // session_name()
            echo "<br>Session Name is : " . session_name();

            // Session ID After session_regenerate_id()
            session_regenerate_id();

            // unsetting sessions
            session_unset();
            echo "<br>Session ID After Regenerating :" . $id;
        } else {
            echo "No Session Found";
        }
        echo "<script>
        alert('Submit Success');
        </script>";
    }
    ?>
</body>

</html>