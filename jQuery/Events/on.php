<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <p>Hello this is Paragraph.</p>
</body>
<script>
    $(document).ready(function () {
        $("p").on("click", function () {
            $(this).css("color", "red");
            $(this).css("background-color", "yellow");
            $(this).css("width", "160px");
        });
    });
</script>