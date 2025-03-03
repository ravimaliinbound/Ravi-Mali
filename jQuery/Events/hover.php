<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');   
?>
<body>
    <p>Want to try hover effect?</p>
</body>
<script>
    $(document).ready(function(){
        $("p").hover(function(){
            alert('Mouse Entered');
        },
        function(){
            alert('Mouse Out');
        });
    });
</script>