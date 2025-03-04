<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        #first, #second{
            background-color: lightgreen;
            padding: 5px;
            text-align: center;
            border: 1px solid;
        }
        #second{
            padding: 50px;;
        }
    </style>

    <div id="first">Click tom slide panel up or down.</div>
    <div id="second">Hello World !</div>
</body>
<script>
    $(document).ready(function(){
        $("#first").click(function(){
            $("#second").slideToggle(500);
        });
    });
</script>