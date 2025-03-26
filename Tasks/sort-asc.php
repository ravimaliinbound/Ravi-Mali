<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascending Order</title>
</head>

<style>
    * {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    .heading {
        background-color: deepskyblue;
        text-align: center;
        padding: 10px;
        font-size: 40px;
    }

    .btn {
        margin-top: 20px;
    }

    .btn a {
        text-decoration: none;
    }

    .add-product-btn,
    .sort-btn,
    .logout-btn {
        background-color: orange;
        padding: 10px 15px;
        color: white;
        border-radius: 5px;
        margin-left: 200px;
    }


    .logout-btn {
        background-color: red;
        margin-left: 450px;
    }

    .sort-btn {
        margin-left: 400px;
        background-color: green
    }

    table {
        margin: 10px auto;
        border-radius: 3px;
        border: 1px solid;
    }

    table th,
    td {
        padding: 10px;
    }

    table tr td .edit-product,
    .delete-product {
        background-color: green;
        text-decoration: none;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    table tr td .delete-product {
        background-color: red;
    }

    .search {
        margin-top: 50px;
        margin-left: 320px;
        ;
    }

    .search input,
    button {
        padding: 5px;
        border-radius: 5px;
    }

    .search button {
        margin-left: 8px;
        background-color: orange;
        border: none;
        color: white;
        padding: 7px 10px;
        ;
        ;
    }
</style>

<body>
    <h1 class="heading">Dashboard</h1>

    <div class="btn">
        <a href="add_product" class="add-product-btn">Add Product</a>
        <!-- <a href="logout" class="logout-btn">Logout</a> -->
        <a href="sort-desc" class="sort-btn">Sort Data</a>
        <a href="login" class="logout-btn">Login</a>
    </div>
    <form action="search" method="post">
        <div class="search">
            <input type="text" name="inp-search" placeholder="Search Values...">
            <span>
                <button type="submit" name="search">Search</button>
            </span>
        </div>
    </form>
    <table border="1" cellspacing="0">
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Gender</th>
            <th>Language</th>
            <th>City</th>
            <th>Action</th>
        </tr>
        <?php
        if (!empty($sort_arr)) {
            $i = 1;
            foreach ($sort_arr as $products) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $products->name; ?></td>
                    <td><?php echo $products->email; ?></td>
                    <td><img src="image/<?php echo $products->image; ?>" height="30px" width="40px" style="border-radius: 5px">
                    </td>
                    <td><?php echo $products->gender; ?></td>
                    <td><?php echo $products->language; ?></td>
                    <td><?php echo $products->city; ?></td>
                    <td>
                        <a href="edit_product?id=<?php echo $products->id; ?>" class="edit-product">Edit</a>
                        <a href="delete_product?id=<?php echo $products->id; ?>" class="delete-product">Delete</a>
                    </td>
                </tr>
                <?php
                $i++;
            }
        }
        ?>
    </table>
</body>



</html>