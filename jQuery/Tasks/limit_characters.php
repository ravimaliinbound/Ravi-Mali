<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>Maximum 15 Characters Allowed</p>
<textarea name="" id="text" maxlength="15"></textarea>
<p><span id="remain">15</span> Characters Remaining</p>


<script>
    let length = 15;
    $(document).ready(function(){
        $("#text").keyup(function(){
            let len = length- $(this).val().length;
            $("#remain").text(len);
        });
    });
</script>