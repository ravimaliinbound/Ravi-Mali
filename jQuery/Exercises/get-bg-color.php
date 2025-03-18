<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    .first, .second, .third{
        height: 70px;
        width: 70px;
        border: 1px solid;
        margin-top: 5px;
        background-color: aqua;
    }
    .second{
        background-color: aquamarine;
    }
    .third{
        background-color: violet;
    }
</style>

<div class="first"></div>
<div class="second"></div>
<div class="third"></div>
<p></p>

<script>
    $(document).ready(function(){
        $("div").click(function(){
            let color = $(this).css("background-color");
            $("p").text(color);
        });
    });
</script>