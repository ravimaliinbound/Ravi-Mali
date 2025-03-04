<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
   Name : <input type="text"> <br><br>
   Email : <input type="email">
</body>
<script>
    $(document).ready(function(){
        $("input").focus(function(){
            $(this).css("background-color", "deepskyblue");
        });
    });
</script>