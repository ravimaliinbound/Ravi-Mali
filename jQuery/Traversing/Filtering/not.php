<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div>
    <p>This is a Paragraph without class</p>
    <p class="test">This is a Paragraph with class</p>
    <p class="test">This is a Paragraph with class</p>
    <p>This is a Paragraph without class</p>
</div><br>
<button>Filter Siblings</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").not(".test").css({"background-color":"yellow", "color":"red", "width":"215px", "padding":"5px"});
        });
    });
</script>