<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>This is a Paragraph</p>
<button>Click Me !</button>

<script>
    let Ravi = $.noConflict();
    Ravi(document).ready(function(){
        Ravi("button").click(function(){
            Ravi("p").css("color", "red").slideUp(500).slideDown(500);
        });
    });
    
</script>