<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
   Name :  <input type="text" Value="Unknown">
    <button>Change</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("input").val("Ravi Mali");
        });
    });
</script>