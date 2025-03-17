<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    .first{
        color: red;
    }
    .second{
        color: green;
    }
</style>

<p class="first">This is a Paragraph.</p>
<button>Change Class</button>   

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").removeClass("first").addClass("second");
            alert('Class Changed');
        });
    });
</script>