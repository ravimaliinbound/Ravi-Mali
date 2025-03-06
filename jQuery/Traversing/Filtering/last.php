<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    div{
        border: 1px solid;
        width: 300px;
        text-align: center;
        margin: 2px;
    }
</style>

<div>
    <p>This is Paragraph</p>
    <p>This is Paragraph</p>
</div>
<div>
    <p>This is Paragraph</p>
    <p>This is Paragraph</p>
</div>
<div>
    <p>This is Paragraph</p>
    <p>This is Paragraph</p>
</div>
<div>
    <p>This is Paragraph</p>
    <p>This is Paragraph</p>
</div>
<br>
<button>Filter Last</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").last().css({"background-color": "yellow", "color": "red"});
        });
    });
</script>