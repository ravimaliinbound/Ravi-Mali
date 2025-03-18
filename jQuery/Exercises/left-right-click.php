<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>Left or Right click here...</p>

<script>
    $(document).ready(function(){
        $("p").click(function(){
            alert('Left Click');
        });
        $("p").contextmenu(function(){
            alert('Right Click');
        });
    });
</script>