
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
    <h2>H2</h2>
    <h1>H1</h1>
    <span>Span</span>
    <h3>H3</h3>
    <p>P</p>
</div><br>
<button>Show Next Sibling</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h1").next().css("border", "2px solid red");
        });
    });
</script>