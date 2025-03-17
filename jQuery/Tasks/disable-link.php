<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<a href="https://www.facebook.com" style="text-decoration: none;">Visit Facebook</a><br><br>
<button>Disable Link</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("a").removeAttr("href");
        });
    });
</script>