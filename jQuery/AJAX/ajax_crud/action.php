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

if (isset($_POST['filter'])) {
    $value = isset($_POST['keywords']) ? trim($_POST['keywords']) : '';
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $language = isset($_POST['language']) ? trim($_POST['language']) : '';
    $city = isset($_POST['city']) ? trim($_POST['city']) : '';
    $limit = isset($_POST['limit']) ? (int) $_POST['limit'] : 5;
    $column = isset($_POST['column']) ? $_POST['column'] : 'id';
    $order = isset($_POST['order']) ? $_POST['order'] : 'asc';

    $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;
    $offset = ($page - 1) * $limit;

    $search_condition = "(name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%')";
    $where = [];

    if (!empty($value))
        $where[] = $search_condition;
    if (!empty($city))
        $where[] = "city LIKE '%$city%'";
    if (!empty($gender))
        $where[] = "gender LIKE '$gender'";
    if (!empty($language))
        $where[] = "language LIKE '%$language%'";

    $where_sql = count($where) > 0 ? implode(" AND ", $where) : "1";

    $query = "SELECT * FROM employee WHERE $where_sql ORDER BY $column $order LIMIT $offset, $limit";
    $res = $conn->query($query);

    $count_query = "SELECT COUNT(*) as total FROM employee WHERE $where_sql ORDER BY $column $order";
    $total_res = $conn->query($count_query);
    $total_rows = $total_res->fetch_assoc()['total'];
    $total_pages = ceil($total_rows / $limit);
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
        // Pagination using <ul><li>
        $output .= "<div class='pagination-wrapper' style='margin-top: 15px; text-align: center;'>";
        $output .= "<ul class='pagination' style='list-style: none; padding: 0; display: inline-flex;'>";

        for ($p = 1; $p <= $total_pages; $p++) {
            $output .= "<a style='margin: 0 5px; background-color: aqua'>
                 <li class='page-btn' style=' border: none;  cursor: pointer; background-color:aqua' onclick='searchFilter($p, $limit)'>$p</li>
             </a>";

        }


        $output .= "</ul>";
        $output .= "</div>";

        echo $output;

    } else {
        $output .= "<tr><td colspan='7' class='text-center'>No Data Found</td></tr></table>";
        echo $output;
    }
}
//----------- Display Data with or without filter------------------//

// if (isset($_POST['filter'])) {
//     $value = isset($_POST['keywords']) ? trim($_POST['keywords']) : '';
//     $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
//     $language = isset($_POST['language']) ? trim($_POST['language']) : '';
//     $city = isset($_POST['city']) ? trim($_POST['city']) : '';
//     $limit = isset($_POST['limit']) ? (int) $_POST['limit'] : 5;
//     $column = isset($_POST['column']) ?  $_POST['column'] : 'id';
//     $order = isset($_POST['order']) ?  $_POST['order'] : 'asc';

//     $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;
//     $offset = ($page - 1) * $limit;

//     $search_condition = "(name LIKE '%$value%' OR email LIKE '%$value%' OR gender LIKE '$value' OR language LIKE '%$value%' OR city LIKE '%$value%')";
//     $where = [];

//     if (!empty($value))
//         $where[] = $search_condition;
//     if (!empty($city))
//         $where[] = "city LIKE '%$city%'";
//     if (!empty($gender))
//         $where[] = "gender LIKE '$gender'";
//     if (!empty($language))
//         $where[] = "language LIKE '%$language%'";

//     $where_sql = count($where) > 0 ? implode(" AND ", $where) : "1";

//     $query = "SELECT * FROM employee WHERE $where_sql LIMIT $offset, $limit";
//     $res = $conn->query($query);

//     $count_query = "SELECT COUNT(*) as total FROM employee WHERE $where_sql";
//     $total_res = $conn->query($count_query);
//     $total_rows = $total_res->fetch_assoc()['total'];
//     $total_pages = ceil($total_rows / $limit);

//     $output = "<table border='1' cellspacing='0' cellpadding='6'>";
//     $output .= "<tr style='border:1px solid;' class='text-center'>
//         <th>No.</th>
//         <th style='border:1px solid;' class='column' id='name' data-order='asc'>Name</th>
//         <th style='border:1px solid;' class='column' id='email' data-order='asc'>Email</th>
//         <th style='border:1px solid' class='column' id='gender' data-order='asc'>Gender</th>
//         <th style='border:1px solid' class='column' id='language' data-order='asc'>Language</th>
//         <th style='border:1px solid' class='column' id='city' data-order='asc'>City</th>
//         <th>Action</th>
//     </tr>";

//     if ($res->num_rows > 0) {
//         $i = $offset + 1;
//         while ($data = $res->fetch_object()) {
//             $output .= "<tr style='border:1px solid'>
//                 <td>$i</td>
//                 <td style='border:1px solid'>$data->name</td>
//                 <td style='border:1px solid'>$data->email</td>
//                 <td style='border:1px solid'>$data->gender</td>
//                 <td style='border:1px solid'>$data->language</td>
//                 <td style='border:1px solid'>$data->city</td>
//                 <td>
//                     <a class='btn btn-success' onclick='editUser($data->id)'>Edit</a>
//                     <a class='btn btn-danger' onclick='deleteUser($data->id)'>Delete</a>
//                 </td>
//             </tr>";
//             $i++;
//         }

//         $output .= "</table>";
//         // Pagination using <ul><li>
//         $output .= "<div class='pagination-wrapper' style='margin-top: 15px; text-align: center;'>";
//         $output .= "<ul class='pagination' style='list-style: none; padding: 0; display: inline-flex;'>";

//         for ($p = 1; $p <= $total_pages; $p++) {
//             $output .= "<a style='margin: 0 5px; background-color: aqua'>
//                 <li class='page-btn' style=' border: none;  cursor: pointer; background-color:aqua' onclick='searchFilter($p, $limit)'>$p</li>
//             </a>";

//         }


//         $output .= "</ul>";
//         $output .= "</div>";

//         echo $output;

//     } else {
//         $output .= "<tr><td colspan='7' class='text-center'>No Data Found</td></tr></table>";
//         echo $output;
//     }
// }


?>