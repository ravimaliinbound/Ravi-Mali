<?php
$conn = new mysqli("localhost", "root", "", "ajax_crud") or die("Connection Failed");

//----------------------->> Insert data------------------>>//

if (isset($_POST['action']) && $_POST['action'] == "insert") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $city = $_POST['city'];

    $language_str = implode(",", $language);

    $insert = "INSERT INTO employee (name, email, gender, language, city) VALUES ('$name','$email','$gender','$language_str','$city')";
    $result = $conn->query($insert);
    if ($result == 1) {
        echo "<p>Data Inserted Successfully...!</p>";
    } else {
        echo "<p>Something Went Wrong...!</p>";
    }
}

//------------------------->> Delete Data----------------->>//
if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];
    $delete = "DELETE FROM employee WHERE id = $id";
    $res = $conn->query($delete);
    if ($res == 1) {
        echo "<p>Data Deleted Successfully...!</p>";
    } else {
        echo "<p>Something Went Wrong...!</p>";
    }
}

//----------->> Fetch Data For edit ------------->>//
if (isset($_POST['action']) && $_POST['action'] == 'edit') {
    $id = $_POST['id'];
    $fetch = "SELECT * FROM employee WHERE id = $id";
    $res = $conn->query($fetch);
    if ($res->num_rows > 0) {

        $data = [];
        while ($row = $res->fetch_object()) {
            $data = $row;
        }
    }
    echo json_encode($data);
}

//-------------->>Update Data-------------->>

if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $city = $_POST['city'];
    $language_edit_str = implode(',', $language);

    $update = " UPDATE employee SET name = '$name', email = '$email', gender = '$gender', language = '$language_edit_str', city ='$city' WHERE id = $id";
    $res_upd = $conn->query($update);
    if ($res_upd == 1) {
        echo "<p>Data Updated Successfully...!</p>";
    } else {
        echo "<p>Something Went Wrong...!</p>";
    }
}

//-------------------->> Sorting <<---------------------//

if (isset($_POST['column'])) {
    $column = $_POST['column'];
    $order = $_POST['order'];
    $limit = $_POST['limit'];

    $select = "SELECT * FROM employee ORDER BY $column $order LIMIT $limit";
    $result = $conn->query($select);
    if ($order == 'asc') {
        $order = 'desc';
    } else {
        $order = 'asc';
    }
    $output = "<table border = '1' cellspacing = '0' cellpadding = '6' >";
    $output .= "  <tr style= 'border:1px solid;' class='text-center'>
    <th>No.</th>
    <th style= 'border:1px solid;' class='column' id='name' data-order='$order'>Name</i></th>
    <th style= 'border:1px solid;' class='column' id='email' data-order='$order'>Email</th>
    <th style= 'border:1px solid' class='column' id='gender' data-order='$order'>Gender</th>
    <th style= 'border:1px solid' class='column' id='language' data-order='$order'>Language</th>
    <th style= 'border:1px solid' class='column' id='city' data-order='$order'>City</th>
    <th>Action</th>
    </tr>";
    if ($result->num_rows > 0) {
        $i = 1;
        while ($data = $result->fetch_object()) {
            $output .= "<tr style= 'border:1px solid'>
       <td>$i</td>
       <td style= 'border:1px solid'>$data->name</td>
       <td style= 'border:1px solid'>$data->email</td>
       <td style= 'border:1px solid' >$data->gender</td>
       <td style= 'border:1px solid'>$data->language</td>
       <td style= 'border:1px solid'>$data->city</td>
       <td >
            <a class='btn btn-success' onclick='editUser($data->id)'>Edit</a>
            <a class='btn btn-danger' onclick='deleteUser($data->id)'>Delete</a>
       </td>
       </tr>";
            $i++;
        }
        $output .= "</table>";
        echo $output;
    } else {
        $output .= "<tr>
                <th colspan='7' class='text-center'>No Data Found At This Moment..!</th>
            </tr>";
        echo $output;
    }
}


//------------------------>> Paggination <<--------------------------------//

if (isset($_POST['show'])) {
    $page = $_POST['page'];
    $limit = isset($_POST['limit']) ? $_POST['limit'] : 5;
    $offset = ($page - 1) * $limit;

    $sel = "SELECT * FROM employee LIMIT $offset, $limit";
    $res = $conn->query($sel);
    $row = $res->num_rows;
    $output = "<table border = '1' cellspacing = '0' cellpadding = '6' >";
    $output .= "  <tr style= 'border:1px solid;' class='text-center'>
    <th>No.</th>
    <th style= 'border:1px solid;' class='column' id='name' data-order='asc'>Name</i></th>
    <th style= 'border:1px solid;' class='column' id='email' data-order='asc'>Email</th>
    <th style= 'border:1px solid' class='column' id='gender' data-order='asc'>Gender</th>
    <th style= 'border:1px solid' class='column' id='language' data-order='asc'>Language</th>
    <th style= 'border:1px solid' class='column' id='city' data-order='asc'>City</th>
    <th>Action</th>
</tr>";
    if ($res->num_rows > 0) {
        $i = $offset + 1;
        while ($data = $res->fetch_object()) {
            $output .= "<tr style= 'border:1px solid'>
       <td>$i</td>
       <td style= 'border:1px solid'>$data->name</td>
       <td style= 'border:1px solid'>$data->email</td>
       <td style= 'border:1px solid' >$data->gender</td>
       <td style= 'border:1px solid'>$data->language</td>
       <td style= 'border:1px solid'>$data->city</td>
       <td >
            <a class='btn btn-success' onclick='editUser($data->id)'>Edit</a>
            <a class='btn btn-danger' onclick='deleteUser($data->id)'>Delete</a>
       </td>
       </tr>";
            $i++;
        }
        $output .= "</table>";
        echo $output;
    } else {
        $output .= "<tr>
                <th colspan='7' class='text-center'>No Data Found At This Moment..!</th>
            </tr>";
        echo $output;
    }
}
//----------Filter--------------//
if (isset($_POST['filter'])) {
    $value = isset($_POST['keywords']) ? trim($_POST['keywords']) : '';
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $language = isset($_POST['language']) ? trim($_POST['language']) : '';
    $city = isset($_POST['city']) ? trim($_POST['city']) : '';
    $limit = isset($_POST['limit']) ? trim($_POST['limit']) : '';

    $search_conditon =
        "(name LIKE '%$value%' OR 
    email LIKE '%$value%' OR 
    gender LIKE '$value' OR 
    language LIKE '%$value%' OR 
    city LIKE '%$value%')";
    $where = [];
    if (!empty($value)) {
        $where[] = $search_conditon;
    }
    if (!empty($city)) {
        $where[] = "city LIKE '%$city%'";
    }

    if (!empty($gender)) {
        $where[] = "gender LIKE '$gender'";
    }

    if (!empty($language)) {
        $where[] = "language LIKE '%$language%'";
    }
    if (count($where) > 0) {
        $where = implode(" AND ", $where);
        $sel = "SELECT * FROM employee WHERE $where LIMIT $limit";
    } else {
        $sel = "SELECT * FROM employee LIMIT $limit";
    }
    $res = $conn->query($sel);
    $row = $res->num_rows;
    $output = "<table border = '1' cellspacing = '0' cellpadding = '6' >";
    $output .= "  <tr style= 'border:1px solid;' class='text-center'>
    <th>No.</th>
    <th style= 'border:1px solid;' class='column' id='name' data-order='asc'>Name</i></th>
    <th style= 'border:1px solid;' class='column' id='email' data-order='asc'>Email</th>
    <th style= 'border:1px solid' class='column' id='gender' data-order='asc'>Gender</th>
    <th style= 'border:1px solid' class='column' id='language' data-order='asc'>Language</th>
    <th style= 'border:1px solid' class='column' id='city' data-order='asc'>City</th>
    <th>Action</th>
</tr>";
    if ($res->num_rows > 0) {
        $i = 1;
        while ($data = $res->fetch_object()) {
            $output .= "<tr style= 'border:1px solid'>
       <td>$i</td>
       <td style= 'border:1px solid'>$data->name</td>
       <td style= 'border:1px solid'>$data->email</td>
       <td style= 'border:1px solid' >$data->gender</td>
       <td style= 'border:1px solid'>$data->language</td>
       <td style= 'border:1px solid'>$data->city</td>
       <td >
            <a class='btn btn-success' onclick='editUser($data->id)'>Edit</a>
            <a class='btn btn-danger' onclick='deleteUser($data->id)'>Delete</a>
       </td>
       </tr>";
            $i++;
        }
        $output .= "</table>";
        echo $output;
    } else {
        $output .= "<tr>
                <th colspan='7' class='text-center'>No Data Found At This Moment..!</th>
            </tr>";
        echo $output;
    }
}
?>