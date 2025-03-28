<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

</body>

</html>
<?php
include_once 'model.php';

class Control extends Model
{
    public function __construct()
    {
        Model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/pagination':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                } else {
                    $value = '';
                }
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else {
                    $limit = 5;
                }
                $product_arr = $this->pagination('product', $page, $limit, $value);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];
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
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $resdata = $this->select_where('product', $data);
                    $fetch = $resdata->fetch_object();
                    $language = explode(",", $fetch->language);
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
                        window.location = 'pagination';
                        </script>";
                    }
                }
                break;

            case '/update_product':

                if (isset($_REQUEST['submit'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];
                    $gender = $_REQUEST['gender'];
                    $language = $_REQUEST['language'];
                    $city = $_REQUEST['city'];
                    $language_str = implode(",", $language);

                    if ($_FILES['image']['name'] > 0) {
                        $image = $_FILES['image']['name'];
                        $resdata = $this->select_where('product', $data);
                        $fetch = $resdata->fetch_object();
                        $old_img = $fetch->image;
                        $data_arr = array("name" => $name, "email" => $email, "password" => $password, "image" => $image, "gender" => $gender, "language" => $language_str, "city" => $city);
                        $res = $this->update_product('product', $data_arr, $id);

                        if ($res) {
                            $path = "image/" . $image;
                            $tmp = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp, $path);
                            unlink("image/" . $old_img);
                            echo "<script>
                                alert('Product Updated Successfully');
                                window.location = 'pagination';
                                </script>";
                        } else {
                            echo "<script>
                                alert('Product Update Failed');
                                window.location = 'pagination';                          
                                </script>";
                        }
                    } else {
                        $data_arr = array("name" => $name, "email" => $email, "password" => $password, "gender" => $gender, "language" => $language_str, "city" => $city);
                        $res = $this->update_product('product', $data_arr, $id);

                        if ($res) {
                            echo "<script>
                                alert('Product Updated Successfully');
                                window.location = 'pagination';
                                </script>";
                        } else {
                            echo "<script>
                                alert('Product Update Failed');
                                window.location = 'pagination';                          
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
                        window.location = 'pagination';
                        </script>";
                    }
                }
                include_once 'signup.php';
                break;
            case '/login':
                include_once 'login.php';
                break;

            case '/sort-num-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'id', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-num-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'id', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-name-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'name', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-name-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'name', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-email-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'email', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-email-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'email', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-gender-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'gender', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-gender-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'gender', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-lang-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'language', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-lang-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'language', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-city-asc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'city', 'asc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;
            case '/sort-city-desc':
                if (isset($_REQUEST['inp-search'])) {
                    $value = $_REQUEST['inp-search'];
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $product_arr = $this->sort('product', 'city', 'desc', $value, $limit);
                $totalPage = $this->totalpage('product', $limit, $value);
                include_once 'dashboard.php';
                break;


        }
    }

}
$obj = new Control();
?>