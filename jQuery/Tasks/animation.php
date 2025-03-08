<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<style>
    div {
        height: 100px;
        width: 100px;
        background-color: aqua;
        position: absolute;
    }
</style>
<button id="animate">Animation</button><br><br>
<div></div>

<script>
    let height = screen.height;
    let width = screen.width;
    $(document).ready(function () {
        $("#animate").click(function () {
            var left = 0;
            loop();
            function loop() {
                var div = $("div");
                div.animate({ height: '300px', width: '100px', opacity: '0.4' });
                div.animate({ width: '300', height: '300px', opacity: 1 });
                div.animate({ height: '100px', width: '300px', opacity: 0.4 });
                div.animate({ height: '100px', width: '100px', opacity: 1 });
                div.animate({ left: '+=100' })
                left+=100;
                if(left<width-300)
                {
                    loop(); 
                }               
            }
        });
    });
    

</script>