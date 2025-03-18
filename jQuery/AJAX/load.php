<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div>This is text of division</div><br>
<button>Get Content</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").load('demo.html');
        });
    });
</script>