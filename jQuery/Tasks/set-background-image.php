<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<style>
    div{
        height: 180px;
        width: 90px;
        background-repeat: no-repeat;
        border: 1px solid;
        padding: 10px;
    }
</style>
<div></div><br>
<button>Set Background</button>

<script>
    $(document).ready(function(){
       $("button").click(function(){
        $("div").css({
            'background-image': 'url("/Ravi-Kumar/JavaScript/images/pic_bulbon.gif")',
            'border': 'none'
        });
       })
    });
</script>