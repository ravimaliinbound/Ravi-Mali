<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .test{
            color: red;
        }
        .test2{
            color:blue;
        }
    </style>
    <h1>This is Header1</h1>
    <h2>This is Header2</h2>
    <p>This is a Paragraph.</p>
    <p>This is also a Paragraph</p>
    <button>Change Color</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h1, p:first").addClass("test");
            $("h2, p:last").addClass("test2");
        });
    });
</script>
