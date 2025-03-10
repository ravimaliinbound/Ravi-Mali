<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<a href="#">Print Page</a>

<script>
    $(document).ready(function(){
        $("a").click(function(){
            window.print();
        });
    });
</script>