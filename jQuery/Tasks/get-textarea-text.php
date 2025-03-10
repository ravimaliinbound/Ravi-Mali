<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<textarea name="" id=""></textarea>
<p>You Tpyed : </p>
<button>Submit</button>

<script>
    let data = $("p").text();
    $(document).ready(function(){
        $("button").click(function(){
        data += $("textarea").val();
            $("p").text(data);
        });
    });
</script>