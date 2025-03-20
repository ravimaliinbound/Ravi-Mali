<?php
include_once 'model.php';

class Control extends Model
{
    public function __construct()
    {
        Model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/dashboard':
                $product_arr = $this->select('product');
                include_once 'dashboard.php';
                break;

            case '/add_product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $price = $_REQUEST['price'];
                    $description = $_REQUEST['description'];
                    $image = $_FILES['image']['name'];

                    $data = array("name" => $name, "price" => $price, "description" => $description, "image" => $image);
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
                }
                include_once 'edit_product.php';
                break;

            case '/update_product':

                if (isset($_REQUEST['save'])) {
                    $id = $_REQUEST['id'];
                    $name = $_REQUEST['name'];
                    $price = $_REQUEST['price'];
                    $description = $_REQUEST['description'];

                    $data_arr = array("name" => $name, "price" => $price, "description" => $description);
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
                break;
        }
    }
}
$obj = new Control();
?>