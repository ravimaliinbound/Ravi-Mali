<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    Name : <input type="text" value="Empty">
    <button>Show Value</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert($("input").val());
        });
    });
</script>