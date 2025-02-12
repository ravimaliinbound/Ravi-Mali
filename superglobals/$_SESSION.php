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
        $_SESSION['name'] = $_REQUEST['name'];
        $_SESSION['age'] = $_REQUEST['age'];
        $_SESSION['city'] = $_REQUEST['city'];
        if (isset($_SESSION['name'])) {
            echo "Welcome " . $_SESSION['name'] . "!";
            echo "<br>Your Age is : " . $_SESSION['age'];
            echo "<br>You Are From " . $_SESSION['city'];
            $_SESSION['name'] = "Vikram Mali";
            echo "<br>Welcome " . $_SESSION['name'] . "!";
            session_unset();
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