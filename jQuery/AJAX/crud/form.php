<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="insert.css">
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>

</head>
<style>
    .form-div {
        margin: 100px auto;
    }

    .session {
        margin: 50px auto;
        border: 1px solid green;
        width: fit-content;
        padding: 10px;
        border-radius: 5px;
        color: green;
    }

    .danger {
        margin: 50px auto;
        border: 1px solid red;
        width: fit-content;
        padding: 10px;
        border-radius: 5px;
        color: red;
    }

    .submit-btn {
        background-color: aqua;
        width: fit-content;
        padding: 7px 10px;
        font-size: 16px;
        text-align: center;
        border: none;
        border-radius: 5px;
    }

    #result {
        width: fit-content;
        padding: 8px 10px;
        border-radius: 5px;
        margin: 50px auto;
        font-size: 20px;
        color: green;
    }
</style>

<body>
    
    <div id="result"></div>
    <div id="container" class="form-div">
        <h2>Registration Form</h2>
        <form method="post" action="" id="contactform">
            <div class="inp-div">
                <input type="hidden" id="action" value="Insert">
                <input type="hidden" id="uid" value="0">
                <label>Name :</label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name">
                <span class="err" id="errname" style="margin-left: 105px;"></span>
            </div>
            <div class="inp-div">
                <label>Email :</label>
                <input type="email" name="email" id="email" style="margin-left: 50px;" placeholder="Enter Your Email">
                <span class="err" style="margin-left: 105px;" id="erremail"></span>

            </div>
            <div class="inp-div">
                <label>Password :</label>
                <input type="text" name="password" id="password" style="margin-left: 20px;"
                    placeholder="Enter Password">
                <span class="err" style="margin-left: 105px;" id="errpassword"></span>

            </div>
            <div class="inp-div">
                <label>Confirm Password :</label>
                <input type="text" name="password2" id="cpassword" style="margin-left: 0px; width: 68%;"
                    placeholder="Confirm Password">
                <span class="err" style="margin-left: 105px;" id="errcpassword"></span>
            </div>

            <div class="inp-div img-div">
                <label>Image :</label>
                <input type="file" name="image" id="image" style="margin-left: 45px;">
                <span class="err" style="margin-left: 105px;" id="errimage"></span>

            </div>
            <div class="gender">
                <label>Gender :</label>
                <input type="radio" name="gender" id="male" value="Male"> <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female"> <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="Other"> <label for="other">Other</label>
                <span class="err" id="errgender"></span>

            </div>
            <div class="lang">
                <label>Language :</label>
                <input type="checkbox" class="lang" name="language[]" id="hindi" value="Hindi"> <label for="hindi"
                    id="Hindi_lbl">Hindi</label>
                <input type="checkbox" id="english" class="lang" name="language[]" value="English"> <label
                    for="english">English</label>
                <input type="checkbox" id="gujrati" class="lang" name="language[]" value="Gujrati"> <label
                    for="gujrati">Gujrati</label>
                <span class="err" id="errlang"></span>
            </div>
            <div class="city">
                <label>City :</label>
                <select name="city" id="city">
                    <option value="">Select City</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Mandar">Mandar</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Malipura">Malipura</option>
                    <option value="Surat">Surat</option>
                </select>
                <span class="err" id="errcity"></span>
            </div>
            <a href="#" id="back" style="margin: 10px 20px;">Back</a>

            <button type="submit" class="btn btn-primary" style="margin-left: 200px; padding: 7px 10px; border-radius: 5px; background-color: aqua; border: none;">Submit</button>
        </form>
    </div>
</body>

<script>

    $(document).ready(function () {
        $('.btn-primary').click(function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var cpassword = $('#cpassword').val();
            var image = $('#image').val();
            var gender = $("input[name='gender']:checked").val();
            var language = $("input[type='checkbox']:checked").val();
            var language = [];
            $(':checkbox:checked').each(function (i) {
                language[i] = $(this).val();
            });
            var city = $('#city').val();
            $.ajax
                ({
                    type: "POST",
                    url: "action.php",
                    data: {
                        "name": name, "email": email, "email": email, "password": password, "image": image, "gender": gender,
                        "language": language, "city": city, action: "Insert"
                    },
                    success: function (data) {
                        $("#result").html(data);
                        $('#contactform')[0].reset();
                    }
                });
        });
        $("body").on("click", "#back", function (e) {
            $.ajax({
                url: "form.php",
                type: "POST",
                success: function () {
                    // window.location = "show.php";
                    $("body").load("show.php");
                }
            });
        });
        // if ($("#result").val() != "") {
        //     setTimeout(function () {
        //         $("#result").fadeOut('slow');
        //     }, 2000);
        // }
    });
</script>

</html>