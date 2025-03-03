<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
    <p>This is mousedown Event.</p>
</body>
<script>
    $(document).ready(function(){
        $("p").mousedown(function(){
            alert('mousedown Event Occured');
        });
    });
</script>