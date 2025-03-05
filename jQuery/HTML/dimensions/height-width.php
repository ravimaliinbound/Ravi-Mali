<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        div{
            height: 200px;
            width: 300px;
            border: 1px solid;
            background-color: aquamarine;
        }
    </style>
    <div></div><br>
    <button>Show Details</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert(" Height of div is : " + $("div").height() + "px\n Width of div is : " + $("div").width() + "px");
        });
    });
</script>