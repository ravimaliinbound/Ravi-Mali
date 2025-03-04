<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click Me !</button><br><br>
    <div id="div1" style="height: 80px; width: 80px; background-color: red;"></div><br>
    <div id="div2" style="height: 80px; width: 80px; background-color: green;"></div><br>
    <div id="div3" style="height: 80px; width: 80px; background-color: deepskyblue;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#div1").fadeTo(500, 0.2);
            $("#div2").fadeTo(1000, 0.5);
            $("#div3").fadeTo(1500, 0.8);
        });
    });
</script>