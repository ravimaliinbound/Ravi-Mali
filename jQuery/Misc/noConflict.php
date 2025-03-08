<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>This is a Paragraph</p>
<button>Cilck Me !</button>

<script>
    $.noConflict();
    jQuery(document).ready(function(){
        jQuery("button").click(function(){
            jQuery("p").hide(500);
            alert("Paragraph Is Now Hidden");
        });
    });
</script>