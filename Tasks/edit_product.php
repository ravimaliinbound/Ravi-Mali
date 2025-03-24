<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>


<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    body {
        background-color: aliceblue;
    }

    .form-div {
        margin: 150px auto;
        width: 40%;
        padding: 30px 5px;
        border-radius: 5px;
        ;
        background-color: rgb(216, 252, 255);
        box-shadow: 2px 4px gray;

    }

    .form-div h2 {
        text-transform: uppercase;
        text-align: center;
    }

    .inp-div {
        margin-top: 10px;
        padding: 0 15px;
    }

    .inp-div input {
        padding: 3px;
        border: 1px solid;
        border-radius: 5px;
        margin-left: 48px;
        width: 75%;
    }

    .inp-div button {
        background-color: aqua;
        width: 50%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        margin-left: 25%;
    }

    .inp-div p {
        margin-left: 30%;
    }

    .inp-div a {
        text-decoration: none;
    }

    .gender,
    .lang,
    .city {
        padding: 0 15px;
        margin-top: 10px
    }

    .gender input {
        margin-left: 37px;
    }

    .lang input {
        margin-left: 20px;
    }

    .city select {
        margin-left: 60px;
    }
</style>

<body>
    <div class="form-div">
    <h2>Edit Product Form</h2>

        <form action="update_product?id=<?php echo $fetch->id; ?>" method="post" enctype="multipart/form-data">
            <div class="inp-div">
                <label>Name :</label>
                <input type="text" name="name" id="name" value="<?php echo $fetch->name; ?>">
                <span class="err" id="err_name" style="margin-left: 105px;"></span>
            </div>
            <div class="inp-div">
                <label>Email :</label>
                <input type="email" name="email" id="email" style="margin-left: 50px;"
                    value="<?php echo $fetch->email; ?>">
                <span class="err" style="margin-left: 105px;" id="err_email"></span>

            </div>
            <div class="inp-div">
                <label>Image :</label>
                <input type="file" name="image" id="image" style="margin-left: 45px;">
                <span class="err" style="margin-left: 105px;" id="err_image"></span>

            </div>
            <div class="gender">
                <label>Gender :</label>
                <input type="radio" name="gender" value="Male" <?php if($fetch->gender == "Male")echo "checked";?>> Male
                <input type="radio" name="gender" value="Female" <?php if($fetch->gender == "Female")echo "checked";?>> Female
                <input type="radio" name="gender" value="Other" <?php if($fetch->gender == "Other")echo "checked";?>> Other
                <span class="err" id="err_gender"></span>

            </div>
            <div class="lang">
                <label>Language :</label>
                <input type="checkbox" name="language[]" value="Hindi" <?php if(in_array("Hindi", $language))echo "checked";?>> Hindi
                <input type="checkbox" name="language[]" value="English" <?php if(in_array("English", $language))echo "checked";?>> English
                <input type="checkbox" name="language[]" value="Gujrati" <?php if(in_array("Gujrati", $language))echo "checked";?>> Gujrati
                <span class="err" id="err_lang"></span>

            </div>
            <div class="city">
                <label>City :</label>
                <select name="city" id="city">
                    <option value="">Select City</option>
                    <option value="Ahmedabad" <?php if($fetch->city == "Ahmedabad")echo "selected";?>>Ahmedabad</option>
                    <option value="Mandar" <?php if($fetch->city == "Mandar")echo "selected";?>>Mandar</option>
                    <option value="Mumbai" <?php if($fetch->city == "Mumbai")echo "selected";?>>Mumbai</option>
                    <option value="Delhi" <?php if($fetch->city == "Delhi")echo "selected";?>>Delhi</option>
                </select>
                <span class="err" id="err_city"></span>

            </div>
            <img src="image/<?php echo $fetch->image; ?>" alt="" height="80px" width="80px"
                style="margin-left: 40px; margin-top:20px">

            <div class="inp-div">
                <button type="submit" name="save">Submit</button>
            </div>
            <div class="inp-div">
                <a href="dashboard">Back</a>
            </div>
        </form>
    </div>
</body>

</html>