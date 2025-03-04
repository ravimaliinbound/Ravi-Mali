<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <h2>Toggle Effect</h2>
    <p>Hide and Show with signle button.</p>
    <button>Click Me !</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").toggle();
        });
    });
</script>