<?php
include_once("model.php");
class Control extends Model
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) 
        {
            case '/dashboard':
                $student_arr = $this->select('student');
                include_once('index.php');
                break;
            case '/add-student':
                if(isset($_REQUEST['submit']))
                {
                    $name = $_REQUEST['name'];
                    $mobile = $_REQUEST['mobile'];
                    $email = $_REQUEST['email'];
                    $image = $_FILES['image']['name'];

                    $data = array("name"=>$name, "mobile"=>$mobile, "email"=>$email, "image"=>$image);
                    $res = $this->insert('student', $data);

                    if($res)
                    {
                        $path = "image/$image";
                        $tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($tmp, $path);
                        echo "<script>
                        alert('Student Data Added Successfully..!');
                        window.location = 'add-student';
                        </script>";
                    }
                }
                include_once('add-student.php');
                break;
        }
    }
}
$obj = new Control();
?>
