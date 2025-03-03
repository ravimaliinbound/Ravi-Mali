<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
    <p>This is mouseleave Event</p>
</body>
<script>
    $(document).ready(function(){
        $("p").mouseleave(function(){
            alert('mouseleave Event Occured');
        });
    });
</script>