<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    .new{
        color: red;
        font-size: 20px;
    }
</style>

<p>HTML</p>
<p>CSS</p>
<p>JavaScript</p>

<button>Change CSS of last</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p:last").addClass("new");
        });
    });
</script>