<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>Click to check left or right click.</p>
<button>Click Me !</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert('Left Click');
        });
        $("button").contextmenu(function(){
            alert('Right Click');
        });
    });
</script>