<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        #first, #second{
            padding: 5px;
            background-color: aquamarine;
            text-align: center;
            border: 1px solid;                
        }
        #second{
            padding: 50px;
        }
    </style>

    <div id="first">Click to slide up the panel.</div>
    <div id="second">Hello World !</div>
</body>
<script>
    $(document).ready(function(){
        $("#first").click(function(){
            $("#second").slideUp(500);
        });
    });
</script>   