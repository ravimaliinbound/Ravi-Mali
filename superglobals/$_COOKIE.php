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
        <p style="margin-left: 50px;"><input type="checkbox" name="remember">Remember Me</p>
        <button type="submit" name="submit" style="margin-left:120px;">Submit</button>
    </form>
<?php
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $city = $_REQUEST['city'];
    echo "Welcome ". $name. "!";
    if(isset($_REQUEST['remember']))
    {
       setcookie('name',$name, time()+ 86400*30); 
       setcookie('age',$age, time()+ 86400*30); 
       setcookie('city',$city, time()+ 86400*30);
       if(isset($_COOKIE['name']))
       {
        echo "<br>Cookie is Set";
       } 
    }
    echo "<script>
    alert('Submit Success');
    </script>";
}
?>
</body>
</html>