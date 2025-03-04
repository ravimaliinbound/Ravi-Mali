<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        #first, #second{
            padding: 5px;
            background-color: aqua;
            text-align: center;
            border: 1px solid;
        }
        #second{
            padding: 50px;
            display: none;
        }
    </style>

    <button>Stop</button><br><br>
    <div id="first">Click to slide panel.</div>
    <div id="second">Hello World !</div>
</body>
<script>
    $(document).ready(function(){
        $("#first").click(function(){
            $("#second").slideToggle(1000);
        });
        $("button").click(function(){
            $("#second").stop();
        });
    });
</script>