<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <form action="" method="post" style="border: 1px solid; width: 300px; padding: 20px; border-radius: 5px;">
        <div style="padding: 10px 0; margin-left: 20px;">
            <label>Name</label>
            <input type="text" placeholder="Enter Your Name" name="name" required>
        </div>
        <div style="padding: 10px 0; margin-left: 20px;">
            <label>Email</label>
            <input type="email" placeholder="Enter Your Email" name="email" required>
        </div>
        <div style="padding: 10px 0; margin-left: 30px;">
            <label>Age</label>
            <input type="number" placeholder="Enter Your Age" name="age" required>
        </div>
        <button type="submit" name="submit" style="margin-left: 100px;">Submit</button>
    </form>
</body>

</html>


<?php
class Insert
{
    public $conn = '';
    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'ravi') or die("Connection Failed");
        if (isset($_REQUEST['submit'])) 
        {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $age = $_REQUEST['age'];
            // echo $name;
            // echo $email;
            // echo $age;
          $ins = "INSERT INTO test(name, email, age) VALUES ('$name', '$email', '$age')";
          $run = $this->conn->query($ins);
          if($run)
          {
            echo "<script>
            alert('Data Inserted Successfully');
            </script>";
          }
          else
          {
            echo "<script>
            alert('Data Insertion Failed');
            </script>";
          }
        }
        // else
        // {
        //     echo "<script>
        //     alert('No Data Found');
        //     </script>";
        // }
    }
}
$obj = new Insert();
?>