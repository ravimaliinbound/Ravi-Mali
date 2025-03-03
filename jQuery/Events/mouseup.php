<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
    <p>This is mouseup Event.</p>
</body>
<script>
    $(document).ready(function(){
        $("p").mouseup(function(){
            alert('The mouseup Event Occured');
        });
    });
</script>