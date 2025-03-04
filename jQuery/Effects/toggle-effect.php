<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>Hide and Show by single button with effect(speed).</p>
    <button>Click Me !</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").toggle(500);
        });
    });
</script>