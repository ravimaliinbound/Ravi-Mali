<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<input type="submit" value="Change Text">

<script>
    $(document).ready(function(){
        $("input").click(function(){
            $(this).attr('value', 'Changed');
        });
    });
</script>