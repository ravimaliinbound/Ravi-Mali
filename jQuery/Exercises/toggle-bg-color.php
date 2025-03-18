<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    div{
        height: 100px;
        width: 100px;
        border: 1px solid;
    }
</style>

<div></div>
<p>Left or Right click on div</p>

<script>
    $(document).ready(function(){
        $("div").click(function(){
            $("div").css("background-color","green");
        });
        $("div").contextmenu(function(){
            $("div").css("background-color", "red");
        });
    });
</script>