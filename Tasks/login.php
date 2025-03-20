<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>


<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    body{
        background-color: aliceblue;
    }
    .form-div {
        margin: 150px auto;
        width: 35%;
        padding: 20px 5px;
        border-radius: 5px;;
        background-color:rgb(216, 252, 255);
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
        margin-left: 40px;
        width: 80%;
    }
    .inp-div button{
        background-color: aqua;
        width: 50%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        margin-left: 25%;
    }
    .inp-div p{
        margin-left: 30%;
    }
    .inp-div a{
        text-decoration: none;
    }
</style>

<body>
    <div class="form-div">
        <h2>Login Form</h2>
        <form action="" method="post">
            <div class="inp-div">
                <label>Email :</label>
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="inp-div">
                <label>Password :</label>
                <input type="password" name="password" placeholder="Enter Your Password" required
                    style="margin-left: 10px;">
            </div>
            <div class="inp-div">
               <button type="submit" name="login">Login</button>
            </div>
            <div class="inp-div">
                <p>Don't have an account? <a href="signup">Signup</a></p>
            </div>
        </form>
    </div>
</body>

</html>