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
        session_start();
        Model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/pagination':
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                } else {
                    $value = '';
                }
                $current_page = '';
                if (isset($_REQUEST['current_page'])) {
                    $page = $_REQUEST['current_page'];
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
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->multi_search('product', $gender, $language, $city, $page, $limit);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->pagination('product', $page, $limit, $value);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;

            case '/multi-search':
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
                $value = isset($_REQUEST['inp-search']) ? trim($_REQUEST['inp-search']) : '';
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->multi_search('product', $gender, $language, $city, $page, $limit);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->pagination('product', $page, $limit, $value);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }

                include_once 'dashboard.php';
                break;
            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $name = trim($_REQUEST['name']);
                    $email = trim($_REQUEST['email']);
                    $password = md5(trim($_REQUEST['password']));
                    $norm_pass = trim($_REQUEST['password']);
                    $image = trim($_FILES['image']['name']);
                    $img_ext = pathinfo($image, PATHINFO_EXTENSION);
                    $img_name = pathinfo($image, PATHINFO_FILENAME);
                    $final_image = $img_name . time() . "." . $img_ext;
                    $gender = $_REQUEST['gender'];
                    $language = $_REQUEST['language'];
                    $language2 = $_REQUEST['language'];
                    $city = $_REQUEST['city'];
                    $language_str = implode(",", $language);
                    $email_check = array("email" => $email);
                    $email_res = $this->select_where('product', $email_check);

                    if ($email_res->num_rows > 0) {
                        $_SESSION['email'] = 'Email Already Exists...!';

                    } else {
                        $data = array("name" => $name, "email" => $email, "password" => $password, "image" => $final_image, "gender" => $gender, "language" => $language_str, "city" => $city, "norm_pass" => $norm_pass);
                        $res = $this->insert('product', $data);
                        if ($res) {
                            $path = "image/" . $final_image;
                            $tmp = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp, $path);

                            $_SESSION['insert'] = 'Product Inserted Successfully...!';
                            header('Location: pagination');
                            exit;
                        }
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
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $data = array("id" => $id);
                    $resdata = $this->select_where('product', $data);
                    $fetch = $resdata->fetch_object();
                    $img = $fetch->image;
                    $res = $this->delete_product('product', $data);

                    if ($res) {
                        unlink("image/" . $img);
                        $_SESSION['delete'] = 'Product Deleted Successfully...!';
                        header('Location: pagination?&page=' . $page);
                        exit;
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
                            $_SESSION['upd_success'] = 'Product Updated Successfully...!';
                            echo "<script>
                                window.location = 'pagination';
                                </script>";
                        } else {
                            $_SESSION['upd_failed'] = 'Product Updatation Failed...!';

                            echo "<script>
                                window.location = 'pagination';                          
                                </script>";
                        }
                    } else {
                        $data_arr = array("name" => $name, "email" => $email, "password" => $password, "gender" => $gender, "language" => $language_str, "city" => $city);
                        $res = $this->update_product('product', $data_arr, $id);

                        if ($res) {
                            $_SESSION['upd_success'] = 'Product Updated Successfully...!';
                            echo "<script>
                                window.location = 'pagination';
                                </script>";
                        } else {
                            $_SESSION['upd_failed'] = 'Product Updatation Failed...!';
                            echo "<script>
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
                        alert('Signup Success, Now Please Login...!');
                        window.location = 'login';
                        </script>";
                    }
                }
                include_once 'signup.php';
                break;
            // case '/login':
            //     if(isset($_REQUEST['login'])){
            //         $email = $_REQUEST['email'];
            //         $password = md5($_REQUEST['password']);
            //         $data = array("email"=>$email, "password"=>$password);
            //         $res = $this->login_check('customer', $data);
            //     }
            //     include_once 'login.php';
            //     break;



            case '/sort-name-asc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'name', 'asc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'name', 'asc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-name-desc':
                $current_page = '';
                if (isset($_REQUEST['current_page'])) {
                    $page = $_REQUEST['current_page'];
                }
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'name', 'desc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'name', 'desc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-email-asc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'email', 'asc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'email', 'asc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-email-desc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'email', 'desc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'email', 'desc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-gender-asc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'gender', 'asc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'gender', 'asc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-gender-desc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'gender', 'desc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'gender', 'desc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-lang-asc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'language', 'asc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'language', 'asc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-lang-desc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'language', 'desc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'language', 'desc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-city-asc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'city', 'asc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'city', 'asc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;
            case '/sort-city-desc':
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                if (isset($_REQUEST['inp-search'])) {
                    $value = trim($_REQUEST['inp-search']);
                }
                if (isset($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                } else
                    $limit = 5;
                $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
                $language = isset($_REQUEST['language']) ? $_REQUEST['language'] : '';
                $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';


                if ($city || $gender || $language) {
                    $product_arr = $this->sort_where('product', 'city', 'desc', $limit, $gender, $language, $city, $page);
                    $totalPage = $this->totalpage_where('product', $limit, $gender, $language, $city);
                } else {
                    $product_arr = $this->sort('product', 'city', 'desc', $value, $limit);
                    $totalPage = $this->totalpage('product', $limit, $value);
                }
                include_once 'dashboard.php';
                break;


        }
    }

}
$obj = new Control();
?>