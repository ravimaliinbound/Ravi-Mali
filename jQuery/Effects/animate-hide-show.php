<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button id="hide">Hide</button>
    <button id="show">Show</button><br><br>
    <div style="background-color:brown; height: 100px; width: 100px; position: absolute;"></div>
</body>
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("div").animate({
                height : 'hide'
            });
        });
        $("#show").click(function(){
            $("div").animate({
                height: 'show'
            });
        });
    });
</script>