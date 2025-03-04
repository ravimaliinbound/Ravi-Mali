<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button id="hide">Hide !</button>
    <button id="show">Show !</button>
    <p>This is a Paragraph</p>
</body>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide("slow", function(){
                alert("Now you can't see the paragraph");
            });
        });
        $("#show").click(function(){
            $("p").show("slow", function(){
                alert("Now you can see the paragraph");
            });
        });
    });
</script>