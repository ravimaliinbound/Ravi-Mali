<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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

    #multi-search {
        margin-left: 400px;
    }

    #multi-search select {
        padding: 5px;
    }
</style>

<body>
    <h1 class="heading">Dashboard</h1>

    <div class="btn">
        <a href="add_product" class="add-product-btn">Add Product</a>
        <!-- <a href="logout" class="logout-btn">Logout</a> -->
        <a href="login" class="logout-btn">Login</a>
    </div>
    <form action="" method="post" id="multi-search">
        <select name="gender" id="gender">
            <option value="">Select Gender</option>
            <option value="Male" <?php
            if (isset($_REQUEST['gender'])) {
                if ($_REQUEST['gender'] == 'Male') {
                    echo 'selected';
                }
            }
            ?>>Male</option>
            <option value="Female" <?php
            if (isset($_REQUEST['gender'])) {
                if ($_REQUEST['gender'] == 'Female') {
                    echo 'selected';
                }
            }
            ?>>Female</option>
        </select>
        <select name="language" id="language">
            <option value="">Select Language</option>
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
            <option value="Gujrati">Gujrati</option>
        </select>
        <select name="city" id="city">
            <option value="">Select City</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Mandar">Mandar</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Malipura">Malipura</option>
            <option value="Surat">Surat</option>
        </select>
    </form>
    <form action="pagination?limit=<?php if (isset($limit))
        echo $limit ?>&value=<?php if (isset($value))
        echo $value; ?>" method="post">
        <div class="search">
            <input type="text" name="inp-search" placeholder="Search Values..." value="<?php if (isset($value))
                echo $value; ?>">
            <span>
                <button type="submit" name="search">Search</button>
            </span>
        </div>
    </form>
    <table border="1" cellspacing="0">
        <tr>
            <th>ID <a href="sort-num-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                                echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a><a href="sort-num-desc?inp-search=<?php if (isset($value))
                                        echo $value ?>&limit=<?php if (isset($limit))
                                        echo $limit ?><?php if (isset($gender))
                                        echo '&gender=' . $gender; ?><?php if (isset($language))
                                                echo '&language=' . $language; ?><?php if (isset($city))
                                                        echo '&city=' . $city; ?>"><i
                        class="fa-solid fa-sort-down"></i></a>
            </th>
            <th>Name <a href="sort-name-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                                echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a>
                <a href="sort-name-desc?inp-search=<?php if (isset($value))
                    echo $value ?>&limit=<?php if (isset($limit))
                    echo $limit ?><?php if (isset($gender))
                    echo '&gender=' . $gender; ?><?php if (isset($language))
                            echo '&language=' . $language; ?><?php if (isset($city))
                                    echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-down"></i></a>
            </th>
            <th>Email <a href="sort-email-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                                echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a><a href="sort-email-desc?inp-search=<?php if (isset($value))
                                        echo $value ?>&limit=<?php if (isset($limit))
                                        echo $limit ?><?php if (isset($gender))
                                        echo '&gender=' . $gender; ?><?php if (isset($language))
                                                echo '&language=' . $language; ?><?php if (isset($city))
                                                        echo '&city=' . $city; ?>"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Image </th>
            <th>Gender <a href="sort-gender-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                                echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a><a href="sort-gender-desc?inp-search=<?php if (isset($value))
                                        echo $value ?>&limit=<?php if (isset($limit))
                                        echo $limit ?><?php if (isset($gender))
                                        echo '&gender=' . $gender; ?><?php if (isset($language))
                                                echo '&language=' . $language; ?><?php if (isset($city))
                                                        echo '&city=' . $city; ?>"><i
                        class="fa-solid fa-sort-down"></i></a></th>
            <th>Language<a href="sort-lang-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                               echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a><a href="sort-lang-desc?inp-search=<?php if (isset($value))
                                      echo $value ?>&limit=<?php if (isset($limit))
                                      echo $limit ?><?php if (isset($gender))
                                      echo '&gender=' . $gender; ?><?php if (isset($language))
                                              echo '&language=' . $language; ?><?php if (isset($city))
                                                     echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-down"></i></a></th>
            <th>City <a href="sort-city-asc?inp-search=<?php if (isset($value))
                echo $value ?>&limit=<?php if (isset($limit))
                echo $limit ?><?php if (isset($gender))
                echo '&gender=' . $gender; ?><?php if (isset($language))
                        echo '&language=' . $language; ?><?php if (isset($city))
                               echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-up"></i></a><a href="sort-city-desc?inp-search=<?php if (isset($value))
                                      echo $value ?>&limit=<?php if (isset($limit))
                                      echo $limit ?><?php if (isset($gender))
                                      echo '&gender=' . $gender; ?><?php if (isset($language))
                                              echo '&language=' . $language; ?><?php if (isset($city))
                                                     echo '&city=' . $city; ?>"><i class="fa-solid fa-sort-down"></i></a></th>
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
                        <a href="add_product?id=<?php echo $products->id; ?>" class="edit-product">Edit</a>
                        <a href="delete_product?id=<?php echo $products->id; ?>"
                            onclick="return confirm('Do You Really Want To Delete?')" class="delete-product">Delete</a>
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
        if (isset($page)) {
            if ($page >= 2) {
                ?>
                <a href="pagination?page=<?php if (isset($page))
                    echo $page - 1; ?>&limit=<?php if (isset($limit))
                            echo $limit ?>&inp-search=<?php if (isset($value))
                            echo $value; ?>">
                    <li><i class="fa-solid fa-backward"></i></li>
                </a>

                <?php
            }
        }
        ?>
        <?php
        if (isset($totalPage)) {
            for ($i = 1; $i <= $totalPage; $i++) {
                ?>
                <a href="pagination?page=<?php echo $i; ?>&limit=<?php if (isset($limit))
                       echo $limit ?>&inp-search=<?php if (isset($value))
                       echo $value; ?>">
                    <li><?php echo $i; ?></li>
                </a>
                <?php
            }
        }
        if (isset($page) && isset($totalPage)) {
            if ($page < $totalPage) {
                ?>
                <a href="pagination?page=<?php echo $page + 1; ?>&limit=<?php if (isset($limit))
                         echo $limit ?>&inp-search=<?php if (isset($value))
                         echo $value; ?>">
                    <li><i class="fa-solid fa-forward"></i></li>
                </a>

                <?php
            }
        }


        ?>
    </ul>

    <select name="limit" id="limit">
        <option value="">Select Limit</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
    </select>


</body>
<script>
    $(document).ready(function () {
        $("#limit").change(function () {
            var limit = $(this).val();
            window.location.href = "pagination?limit=" + limit + "&inp-search=<?php if (isset($value))
                echo $value; ?>";
        });
        $("#gender").change(function () {
            var gender = $(this).val();
            $("#language").change(function () {
                var language = $(this).val();
                $("#city").change(function () {
                    var city = $(this).val();
                    window.location.href = "multi-search?gender=" + gender + "&language=" + language + "&city=" + city + "&inp-search=<?php if (isset($value))
                        echo $value; ?>";
                });
            });
        });
    });
</script>

</html>