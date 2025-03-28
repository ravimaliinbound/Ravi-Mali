<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .pages {
        display: flex;
        margin-left: 550px;
    }

    .pages li {
        list-style: none;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid grey;
    }

    .pages li:hover {
        background-color: aqua;
    }

    .pages a {
        text-decoration: none;
    }

    #limit {
        margin-left: 785px;
        padding: 5px 10px;
    }
</style>

<body>
    <h1 class="heading">Dashboard</h1>

    <div class="btn">
        <a href="add_product" class="add-product-btn">Add Product</a>
        <!-- <a href="logout" class="logout-btn">Logout</a> -->
        <a href="login" class="logout-btn">Login</a>
    </div>
    <form action="search" method="post">
        <div class="search">
            <input type="text" name="inp-search" value="<?php if (isset($value))
                echo $value; ?>">
            <span>
                <button type="submit" name="search">Search</button>
            </span>
        </div>
    </form>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID <a href="sort-num-asc"><i class="fa-solid fa-sort-up"></i></a><a href="sort-num-desc"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Name <a href="sort-name-asc"><i class="fa-solid fa-sort-up"></i></a>
                <a href="sort-name-desc"><i class="fa-solid fa-sort-down"></i></a>
            </th>
            <th>Email <a href="sort-email-asc"><i class="fa-solid fa-sort-up"></i></a><a href="sort-email-desc"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Image </th>
            <th>Gender <a href="sort-gender-asc"><i class="fa-solid fa-sort-up"></i></a><a href="sort-gender-desc"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Language<a href="sort-lang-asc"><i class="fa-solid fa-sort-up"></i></a><a href="sort-lang-desc"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>City <a href="sort-city-asc"><i class="fa-solid fa-sort-up"></i></a><a href="sort-city-desc"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Action</th>
        </tr>
        <?php
        if (!empty($product_arr)) {
            foreach ($product_arr as $products) {
                ?>
                <tr>
                    <td><?php echo $products->id; ?></td>
                    <td><?php echo $products->name; ?></td>
                    <td><?php echo $products->email; ?></td>
                    <td><img src="image/<?php echo $products->image; ?>" height="30px" width="40px" style="border-radius: 5px">
                    </td>
                    <td><?php echo $products->gender; ?></td>
                    <td><?php echo $products->language; ?></td>
                    <td><?php echo $products->city; ?></td>
                    <td>
                        <a href="add_product?id=<?php echo $products->id; ?>"  class="edit-product">Edit</a>
                        <a href="delete_product?id=<?php echo $products->id; ?>" onclick="return confirm('Do You Really Want To Delete?')" class="delete-product">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <th id="no-data" colspan="8">No Data Found At This Moment..!</th>
            </tr>
            <?php
        }
        ?>
    </table>
    <ul class="pages">
        <?php
        if (isset($totalPage)) {
            for ($i = 1; $i <= $totalPage; $i++) {
                ?>
                <a href="search?page=<?php echo $i; ?>&inp-search=<?php if (isset($value))
                       echo $value ?>">
                        <li><?php echo $i; ?></li>
                </a>
                <?php
            }
        }
        ?>
    </ul>
</body>



</html>