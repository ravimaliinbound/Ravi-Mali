<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<select name="" id="">
    <option value="">Select State</option>
    <option value="">Rajasthan</option>
    <option value="">Gujrat</option>
    <option value="">Maharashtra</option>
</select>
<button>Add More</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("select").append("<option>Punjab</option>")
        })
    })
</script>