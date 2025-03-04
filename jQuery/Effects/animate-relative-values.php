<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click to Animate</button><br><br>
    <div style="background-color: mediumaquamarine; height: 100px; width: 100px; position: absolute"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({
                left: '100px',
                height: '+=10px',
                width: '+=10px'
            });
        });
    });
</script>