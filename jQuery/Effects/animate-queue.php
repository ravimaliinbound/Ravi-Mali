<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click Me !</button><br><br>
    <div style="background-color:aqua; height: 100px; width: 100px;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({height: '300px', opacity: 0.3});
            $("div").animate({width: '300px', opacity: 1});
            $("div").animate({height: '100px', opacity: 0.3});
            $("div").animate({width: '100px', opacity: 1});
        });
    });
</script>