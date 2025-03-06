<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    .test *{
        border: 1px solid green;
        margin: 10px;
        padding: 10px;
        display: block;
        text-align: center;
    }
</style>

<div class="test" style="width: 300px; border: 2px solid green;">
    <p>P</p>
    <h3>H3</h3>
    <span>Span</span>
    <h2>H2</h2>
    <p>P</p>
    <span>Span</span>
    <h1>H1</h1>
    <p>P</p>
</div><br>
<button>Show Siblings</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h1").prevUntil("h3").css("border", "2px solid red");
        });
    });
</script>