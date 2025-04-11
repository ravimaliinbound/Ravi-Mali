<?php
$conn = new mysqli("localhost", "root", "", "ajax_crud") or die("Connection Failed");
$action = $_POST['action'];

if ($action == "Fetch") {
    $select = "SELECT * FROM students";
    $result = $conn->query($select);

    $output = "<table border = '1' cellspacing = '0' cellpadding = '5'>";
    $output .= "  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Language</th>
    <th>City</th>
    <th>Action</th>
</tr>";
    if ($result->num_rows > 0) {

        while ($data = $result->fetch_object()) {
            $output .= "<tr>
       <td>$data->id</td>
       <td>$data->name</td>
       <td>$data->email</td>
       <td>$data->gender</td>
       <td>$data->language</td>
       <td>$data->city</td>
       <td>
            <a href='#' class='edit'>Edit</a>
            <a href='#' class= 'delete'>Delete</a>
       </td>
       </tr>";
        }
        $output .= "</table>";
        echo $output;
    } else {
        $output .= "<tr>
                <th colspan='7'>No Data Found At This Moment..!</th>
            </tr>";
        echo $output;
    }
} elseif ($action == "Insert") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? md5(trim($_POST['password'])) : "";
    $norm_pass = isset($_POST['password']) ? trim($_POST['password']) : "";
    $image = isset($_POST['image']) ? $_POST['image'] : "";
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $language_arr = isset($_POST['language']) ? $_POST['language'] : "";
    $city = isset($_POST['city']) ? $_POST['city'] : "";
    $language = implode(',', $language_arr);
    $insert = "INSERT INTO students (name, email,password, image, gender, language, city, norm_pass) 
      VALUES('$name', '$email', '$password','$image','$gender', '$language', '$city', '$norm_pass')";
    $result = $conn->query($insert);
    if ($result == 1) {
        echo "<p>Data Inserted Successfully...!</p>";
    } else {
        echo "<p>Something Went Wrong...!</p>";
    }
} elseif ($action == "Delete") {
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
    $delete = "DELETE FROM students WHERE id = $id";
    $res = $conn->query($delete);
    if ($res == 1) {
        echo "<p>Data Deleted Successfully...!</p>";
    } else {
        echo "<p>Something Went Wrong...!</p>";
    }
}


?>