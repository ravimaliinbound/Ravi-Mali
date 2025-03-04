<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click to Toggle</button><br><br>
    <div style="background-color:aquamarine; height: 100px; width: 100px;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({
                height : 'toggle',
                width : 'toggle'
            });
        });
    });
</script>