<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        #first, #second{
            background-color: aqua;
            text-align: center;
            padding: 5px;
            border: 1px solid;
        }
        #second{
            padding: 50px;
            display: none;
        }
    </style>
    <div id="first">Click to slide down the panel</div>
    <div id="second">Hello World !</div>
</body>
<script>
    $(document).ready(function(){
        $("#first").click(function(){
            $("#second").slideDown("slow");
        });
    });
</script>