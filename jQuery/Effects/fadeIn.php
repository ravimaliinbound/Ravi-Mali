<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <button>Click Me !</button>
    <br><br>
    <div id="div1" style="height: 80px; width: 80px; background-color: red; display: none;"></div><br>
    <div id="div2" style="height: 80px; width: 80px; background-color: green; display: none;"></div><br>
    <div id="div3" style="height: 80px; width: 80px; background-color: blue; display: none;"></div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#div1").fadeIn();
            $("#div2").fadeIn(500);
            $("#div3").fadeIn(1500);
        });
    });
</script>