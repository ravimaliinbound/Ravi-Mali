<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
Name : <input type="text" id="name"><br><br>
<input type="checkbox" id="accept">Accept terms and conditions <br><br>
<input type="submit" id="submitbtn" name="submit" value="Submit" disabled="disabled">
<script>
    $(document).ready(function(){
       $("#accept").click(function(){
        if($("#submitbtn").is(':disabled'))
        {
            $("#submitbtn").removeAttr("disabled");
        }
        else
        {
            $("#submitbtn").attr('disabled', 'disabled');
        }
       });
       $("#submitbtn").click(function(){
        alert("Welcome " + $("#name").val() + " !");
       });
    });
</script>