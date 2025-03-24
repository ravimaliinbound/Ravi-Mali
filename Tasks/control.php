<?php
include_once 'model.php';

class Control extends Model
{
    public function __construct()
    {
        Model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/':
                $product_arr = $this->select('product');
                include_once 'dashboard.php';
                break;
            case '/dashboard':
                $product_arr = $this->select('product');
                include_once 'dashboard.php';
                break;
            
            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);
                    $image = $_FILES['image']['name'];
                    $gender = $_REQUEST['gender'];
                    $language = $_REQUEST['language'];
                    $city = $_REQUEST['city'];
                    $language_str = implode(",", $language);
                    $data = array("name" => $name, "email" => $email, "password" => $password, "image" => $image, "gender" => $gender, "language" => $language_str, "city" => $city);
                    $res = $this->insert('product', $data);

                    if ($res) {
                        $path = "image/" . $image;
                        $tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($tmp, $path);

                        echo "<script>
                        alert('Product Inserted Successfully');
                        window.location = 'add_product';
                        </script>";
                    }
                }
                include_once 'add_product.php';
                break;

            case '/delete_product':
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $resdata = $this->select_where('product', $data);
                    $fetch = $resdata->fetch_object();
                    $img = $fetch->image;
                    $res = $this->delete_product('product', $data);

                    if ($res) {
                        unlink("image/" . $img);
                        echo "<script>
                        alert('Product Deleted Successfully');
                        window.location = 'dashboard';
                        </script>";
                    }
                }
                break;

            case '/edit_product':
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $resdata = $this->select_where('product', $data);
                    $fetch = $resdata->fetch_object();
                    $language = explode(",", $fetch->language);
                }
                include_once 'edit_product.php';
                break;

            case '/update_product':

                if (isset($_REQUEST['save'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $gender = $_REQUEST['gender'];
                    $language = $_REQUEST['language'];
                    $city = $_REQUEST['city'];
                    $language_str = implode(",", $language);

                    if ($_FILES['image']['name'] > 0) {
                        $image = $_FILES['image']['name'];
                        $resdata = $this->select_where('product', $data);
                        $fetch = $resdata->fetch_object();
                        $old_img = $fetch->image;
                        $data_arr = array("name" => $name, "email" => $email, "image" => $image, "gender" => $gender, "language" => $language_str, "city" => $city);
                        $res = $this->update_product('product', $data_arr, $id);

                        if ($res) {
                            $path = "image/" . $image;
                            $tmp = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp, $path);
                            unlink("image/" . $old_img);
                            echo "<script>
                                alert('Product Updated Successfully');
                                window.location = 'dashboard';
                                </script>";
                        } else {
                            echo "<script>
                                alert('Product Update Failed');
                                window.location = 'dashboard';                          
                                </script>";
                        }
                    } else {
                        $data_arr = array("name" => $name, "email" => $email, "gender" => $gender, "language" => $language_str, "city" => $city);
                        $res = $this->update_product('product', $data_arr, $id);

                        if ($res) {
                            echo "<script>
                                alert('Product Updated Successfully');
                                window.location = 'dashboard';
                                </script>";
                        } else {
                            echo "<script>
                                alert('Product Update Failed');
                                window.location = 'dashboard';                          
                                </script>";
                        }
                    }


                }
                break;

            case '/signup':
                if (isset($_REQUEST['signup'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);
                    $image = $_FILES['image']['name'];

                    $data = array("name" => $name, "email" => $email, "password" => $password, "image" => $image);
                    $res = $this->insert('customer', $data);

                    if ($res) {
                        $path = "customer_img/" . $image;
                        $tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($tmp, $path);
                        echo "<script>
                        alert('Signup Success');
                        window.location = 'dashboard';
                        </script>";
                    }
                }
                include_once 'signup.php';
                break;
            case '/login':
                include_once 'login.php';
                break;
           
        }
    }

}
$obj = new Control();
?>