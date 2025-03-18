<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div>
    <p>This is a Paragraph</p>
    <p class="test">This is a Paragraph</p>
    <p class="test">This is a Paragraph</p>
    <span class="test">This is a span element</span>
    <p>This is a Paragraph</p>
</div>
<button style="margin-left: 15px;">Click Me !</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").children(".test").css("color", "green");
        });
    });
</script>