<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    .color{
        color: red;
    }
    .background{
        background-color: yellow;
        width: fit-content;
        padding: 5px
    }
</style>

<p>HTML</p>
<p>CSS</p>
<p>JavaScript</p>
<button>Add Multiple Classes</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p:last").addClass("color background");
        });
    });
</script>