<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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

    form {
        border: 1px solid;
        border-radius: 5px;
        margin: 100px auto;
        width: fit-content;
        padding: 20px;
        height: 350px;
    }

    div {
        padding: 5px;
        margin-left: 20px;
    }

    input {
        padding: 3px;
        margin-left: 50px;
        width: 250px;
        border: 1px solid;
        border-radius: 5px;
        height: 20px;
    }

    .submit-btn {
        margin-left: 50px;
        padding: 10px 20px;
        font-size: 16px;
        border: 1px solid;
        border-radius: 5px;
        background-color: green;
        color: white;
    }

    .form-heading {
        text-transform: uppercase;
        text-align: center;
        padding: 20px;
    }

    .back-btn {
        text-decoration: none;
        background-color: blue;
        padding: 10px 20px;
        color: white;
        border-radius: 5px;
        margin-left: 750px;
    }
</style>

<body>
    <h2 class="heading">Edit Product</h2>

    <form action="update_product?id=<?php echo $fetch->id;?>" method="post" enctype="multipart/form-data">
        <h1 class="form-heading">Edit Product</h1>
        <div>
            <label>Name :</label>
            <input type="text" name="name" value="<?php echo $fetch->name; ?>">
        </div>
        <div>
            <label>Price :</label>
            <input type="number" name="price" value="<?php echo $fetch->price ?>" style="margin-left: 55px;">
        </div>
        <div>
            <label>Description :</label>
            <input type="text" name="description" value="<?php echo $fetch->description; ?>" style="margin-left: 12px;">
        </div>
        <div>
            <label>Image :</label>
            <input type="file" name="image" style="margin-left: 47px;">
        </div><br>
        <img src="image/<?php echo $fetch->image; ?>" alt="" height="80px" width="80px" style="margin-left: 40px;">

        <button type="submit" name="save" class="submit-btn">Submit</button>
    </form>
    <a href="dashboard" class="back-btn">Back</a>
</body>

</html>