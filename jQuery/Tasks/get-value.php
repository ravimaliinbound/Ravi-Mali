<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
Name : <input type="text" placeholder="Enter Your Name"><br><br>
<button>Submit</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert('Welcome ' + $("input").val() + ' !');
        });
    });
</script>