<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>This is a paragraph</p>
<div><p>This is a paragraph within a div</p></div>
<p>This is another paragraph</p>
<div>This is a <span>span</span> element within a div</div><br>
<button>Click Me !</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").children().css("color", "green");
        });
    });
</script>