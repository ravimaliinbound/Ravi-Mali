<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
    <input type="text" class="first"><br><br>
    <input type="text" class= "second">
    <h2 style="margin-left: 40px;">INDIA</h2>
</body>
<script>
    $(document).ready(function(){
        $("input.first").focus(function(){
            $(this).css("background-color", "orange");
        });
        $("input.second").focus(function(){
            $(this).css("background-color", "green");
        });
    });
</script>