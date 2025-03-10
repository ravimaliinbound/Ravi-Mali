<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p>Hey... My name is <span>Ravi Mali</span> , I'm from Mandar.</p>
<button>Underline</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("span").css("text-decoration", "underline");
        });
    });
</script>