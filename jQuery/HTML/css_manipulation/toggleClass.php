<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .green{
            color: green;
        }
    </style>
    <h1>This is Heading 1</h1>
    <h2>This is Heading 2</h2>
    <p>This is a Paragraph</p>
    <button>Apply or Remove Color</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h1, h2, p").toggleClass("green");
        });
    });
</script>