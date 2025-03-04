<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click to Show</button><br><br>
    <div style="background-color: blue; height: 100px; width: 100px; position: absolute; display: none;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").animate({
                height: 'show'
            });
        });
    });
</script>