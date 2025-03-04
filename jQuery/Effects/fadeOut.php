<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click Me !</button><br><br>
    <div id="div1" style="height: 80px; width: 80px; background-color: red;"></div><br>
    <div id="div2" style="height: 80px; width: 80px; background-color: green"></div><br>
    <div id="div3" style="height: 80px; width: 80px; background-color: deepskyblue;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#div1").fadeOut();
            $("#div2").fadeOut(500);
            $("#div3").fadeOut(1500);
        });
    });
</script>