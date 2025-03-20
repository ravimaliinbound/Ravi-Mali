<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

    .err {
        color: red;
    }
</style>

<body>
    <div class="form-div">
        <h2>Registration Form</h2>
        <form action="add_product" method="post" enctype="multipart/form-data">
            <div class="inp-div">
                <label>Name :</label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
                <span class="err" id="err_name" style="margin-left: 105px;"></span>
            </div>
            <div class="inp-div">
                <label>Email :</label>
                <input type="email" name="email" id="email" style="margin-left: 50px;" placeholder="Enter Your Email">
                <span class="err" style="margin-left: 105px;" id="err_email"></span>

            </div>
            <div class="inp-div">
                <label>Password :</label>
                <input type="password" name="password" id="password" style="margin-left: 20px;"
                    placeholder="Enter Password">
                <span class="err" style="margin-left: 105px;" id="err_password"></span>

            </div>
            <div class="inp-div">
                <label>Image :</label>
                <input type="file" name="image" id="image" style="margin-left: 45px;">
                <span class="err" style="margin-left: 105px;" id="err_image"></span>

            </div>
            <div class="gender">
                <label>Gender :</label>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <span class="err" id="err_gender"></span>

            </div>
            <div class="lang">
                <label>Language :</label>
                <input type="checkbox" name="language[]" value="Hindi"> Hindi
                <input type="checkbox" name="language[]" value="English"> English
                <input type="checkbox" name="language[]" value="Gujrati"> Gujrati
                <span class="err" id="err_lang"></span>

            </div>
            <div class="city">
                <label>City :</label>
                <select name="city" id="city">
                    <option value="">Select City</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Mandar">Mandar</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                </select>
                <span class="err" id="err_city"></span>

            </div>
            <div class="inp-div">
                <button type="submit" name="submit" id="submit">Submit</button>
            </div>
            <div class="inp-div">
                <a href="dashboard">Back</a>
            </div>
        </form>
    </div>
</body>

<script>
    $(document).ready(function () {
        $("#submit").click(function (obj) {
            let valid = true;
            if ($("#name").val() === "") {
                $('#err_name').text("Please Enter Name...!");
                $("#name").focus(function () {
                    $("#err_name").css("display", "none");
                });
                $("#name").blur(function () {
                    if ($("#name").val() == "") {
                        $("#err_name").css("display", "inline");
                    }
                });
                valid = false;
            }
            if ($("#email").val() === "") {
                $("#err_email").text("Please Enter Email...!");
                $("#email").focus(function () {
                    $("#err_email").css("display", "none");
                });
                $("#email").blur(function () {
                    if ($("#email").val() == "") {
                        $("#err_email").css("display", "inline");
                    }
                });
                valid = false;
            }
            if ($("#password").val() == "") {
                $("#err_password").text("Please Enter Password...!");
                $("#password").focus(function () {
                    $("#err_password").css("display", "none");
                });
                $("#password").blur(function () {
                    if ($("#password").val() == "") {
                        $("#err_password").css("display", "inline");
                    }
                });
                valid = false;
            }
            if ($("#image").val() == "") {
                $("#err_image").text("Please Choose an Image...!");
                valid = false;
            }
            if ($("input[name='gender']").val()) {
                $("#err_gender").text("Please Select Gender...!");
                valid = false;
            }
            if ($("input[name='language[]']").val()) {
                $("#err_lang").text("Please Check Language(s)");
            }
            if ($("#city").val() == "") {
                $("#err_city").text("Please Select Your City...!");
                valid = false;
            }
            if (!valid) {
                obj.preventDefault();
            }
        })
    })
</script>

</html>