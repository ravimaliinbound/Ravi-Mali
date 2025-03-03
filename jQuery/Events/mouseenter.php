<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is mouseenter Event</p>
</body>
<script>
    $(document).ready(function(){
        $("p").mouseenter(function(){
            alert("mouseenter Event Occured");
        });
    });
</script>