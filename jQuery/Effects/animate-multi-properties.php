<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click to Animate</button><br><br>
    <div style="background-color: aqua; height: 100px; width: 100px; position: absolute;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({
                height: '250px',
                width: '250px',
                left: '100px',
                top: '100px'
            });
        });
    });
</script>