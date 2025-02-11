<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get" style="margin: 200px auto; border: 2px solid; padding:20px; width:300px; border-radius:5px;">
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
    if (isset($_GET['submit'])) {
    ?>
        <div style="margin-left:780px; border: 2px solid deepskyblue; padding:20px; width:300px; border-radius:5px;">
        <?php
        $name = $_GET['name'];
        $age = $_GET['age'];
        $city = $_GET['city'];

        echo "<p>Hello : " . $name . ", We Welcome You!</p>";
        echo "<p>Your Current Age is : " . $age . " Years!</p>";
        echo "<p>And Your Are From : " . $city . "!</p>";
    }
        ?>
        </div>
</body>

</html>