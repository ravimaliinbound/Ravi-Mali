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
    <h2>h2</h2>
    <span>Span</span>
    <h1>H1</h1>
    <p>P</p>
</div><br>
<button>Show Siblings</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h2").nextUntil("p").css("border", "2px solid red");
        });
    });
</script>