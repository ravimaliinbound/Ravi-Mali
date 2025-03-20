<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<form action="">
   Name : <input type="text" name="name" value=""> <br><br>  
   Age : <input type="number" name="age" value="" style="margin-left: 12px;"><br><br>
   Gender : <input type="radio" name="gender" value="male">Male <input type="radio" value="female" name="gender">Female
</form><br>
<button style="margin-left: 90px;">Submit</button>
<p></p>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").text($("form").serialize());
        });
    });
</script>