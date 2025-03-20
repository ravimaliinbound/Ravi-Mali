<?php
include_once('model.php');

class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();
        $path = $_SERVER['PATH_INFO'];
        switch ($path) {
            case '/':
                include_once('dashboard.php');
                break;

            case '/dashboard':
                $product_arr = $this->select("product");
                include_once('dashboard.php');
                break;
            case '/login':
                if (isset($_REQUEST['login'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];

                    $where = array("name" => $name, "email" => $email, "password" => $password);

                    $res = $this->select_where('admin', $where);
                    $ans = $res->num_rows;
                    if ($ans) {
                        $fetch = $res->fetch_object();

                        $_SESSION['id'] = $fetch->email;
                        $_SESSION['name'] = $fetch->name;
                        echo "<script>
							alert('Login Success');
							window.location='dashboard';
						</script>";
                    } else {
                        echo "<script>
							alert('Login Failed Due To Wrong Credential');
							window.location='login';
						</script>";
                    }
                }
                include_once('login.php');
                break;

            case '/logout':
                unset($_SESSION['id']);
                unset($_SESSION['name']);
                echo "<script>
                alert('Logout Success');
                window.location='login';
            </script>";

            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $image = $_FILES['image']['name'];
                    $price = $_REQUEST['price'];
                    $description = $_REQUEST['description'];

                    $data = array("name" => $name, "image" => $image, "price" => $price, "description" => $description);
                    $res = $this->insert('product', $data);

                    if ($res) {
                        $path = "image/" . $image;
                        $tmp = $_FILES['image']['tmp'];
                        move_uploaded_file($tmp, $path);
                        echo "<script>
                            alert('Submit Suceess');
                            window.location='add_product';
                            </script>";
                    }
                }
                include_once('add_product.php');
                break;
            case '/delete':
                if (isset($_REQUEST['delete'])) {
                    $id = $_REQUEST['delete'];

                    $where = array("id" => $id);

                    $resdata = $this->select_where('product', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->image;


                    $res = $this->delete_where('product', $where);
                    if ($res) {
                        unlink('image/' . $del_img); // delete image from path
                        echo "
                              <script>
                              alert('Product deleted Successfully !');
                              window.location='dashboard';
                              </script>
                          ";
                    }
                }
                break;

                case '/edit_product':
                    if (isset($_REQUEST['product'])) {
                      $id = $_REQUEST['product'];
  
                      $where = array("id" => $id);
                      $res = $this->select_where('product', $where);
                      $fetch = $res->fetch_object();
  
                      if (isset($_REQUEST['save'])) {
                          $name = $_REQUEST['name'];
                          $price = $_REQUEST['price'];
                          $description = $_REQUEST['description'];
                          if ($_FILES['image']['size'] > 0) {
                              
                              $old_img = $fetch->image;
  
                              $image = $_FILES['image']['name'];
                              $path = 'image/' . $image;
                              $tmp_file = $_FILES['image']['tmp_name'];
                              move_uploaded_file($tmp_file, $path);
                             
                              $data = array("name" => $name, "image" => $image, "price" => $price, "description" => $description);
  
                              $res = $this->update_where('product', $data, $where);
                              if ($res) {
                                  unlink('image/' . $old_img);
                                  echo "<script>
                                        alert('Product Data Update Success !');
                                        window.location='dashboard';
                                      </script>";
                              }
                          } else {
                              $data = array("name" => $name, "price" => $price, "description" => $description);
                              $res = $this->update_where('product', $data, $where);
                              if ($res) {
                                    echo "<script>
                                          alert('Product Data Update Success !');
                                          window.location='dashboard';
                                        </script>";
                              }
                          }
                      }
                  }
                    include_once('edit_product.php');
                    break;
        }
    }
}
$obj = new control;