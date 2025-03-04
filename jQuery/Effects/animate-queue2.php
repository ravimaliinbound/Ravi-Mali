<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click Me !</button><br><br>
    <div style="height: 100px; width: 150px; background-color: aqua; position: absolute;">jQuery</div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({
                marginLeft: '200px',
                opacity: 0.5,
                padding: '10px'
            });
            $("div").animate({
                fontSize: '55px'
            });
        });
    });
</script>