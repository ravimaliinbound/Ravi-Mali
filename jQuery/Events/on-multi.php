<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>Hello this is Paragraph</p>
</body>
<script>
   $(document).ready(function(){
    $("p").on({
        mouseenter :function(){
            $(this).css("background-color", "yellow");
        },
        mouseleave : function(){
            $(this).css("background-color", "green");
        },
        click : function(){
            $(this).css("background-color", "red");
        },
        dblclick :function(){
            $(this).css("background-color", "deepskyblue"); 
        }
    });
   });
</script>