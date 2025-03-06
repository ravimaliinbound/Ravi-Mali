<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<style>
    .test * {
        border: 1px solid green;
        margin: 10px;
        padding: 10px;
        display: block;
        text-align: center;
    }
</style>

<div class="test" style="border: 2px solid green; width: 300px;">
    <p>P</p>
    <span>Span</span>
    <h2>H2</h2>
    <h1>H1</h1>
    <h4>H4</h4>
    <p>P</p>
</div><br>
<button>Show Siblings</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h2").siblings().css("border", "2px solid red");
        });
    }); 
</script>