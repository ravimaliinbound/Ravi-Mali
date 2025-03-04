<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    Name : <input type="text" class="first"> <br><br>
    Email : <input type="email" class="second">
</body>
<script>
    $(document).ready(function () {
        $("input.first").focus(function(){
            $(this).css("background-color", "yellow");
        });
        $("input.second").focus(function(){
            $(this).css("background-color", "deepskyblue");
        });
        $("input.first").blur(function(){
            $(this).css("background-color", "green");
        });
        $("input.second").blur(function(){
            $(this).css("background-color", "red");
        });
    });
</script>