<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is a Paragraph</p>
    <button>CLick Me !</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").css("color", "red").slideUp(500).slideDown(500);
        });
    });
</script>