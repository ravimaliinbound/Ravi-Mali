<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    p{
        color: green;
        font-size: 20px;
    }
</style>

<textarea name="" id="">jQuery</textarea>
<textarea name="" id="">JavaScript</textarea>
<p>jQuery</p>
<p>JavaScript</p>
<button>Click</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("textarea, p").css("border", "2px solid red");
        });
    });
</script>