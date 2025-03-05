<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        div{
            height: 100px;
            width: 200px;
            border: 1px solid;
            background-color: aqua;
        }
    </style>
    <div></div><br>
    <button>Resize Div</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").height(300).width(300);
            alert(" New Height is : " + $("div").height() + "px\n New Width is : " + $("div").width());
        });
    });
</script>