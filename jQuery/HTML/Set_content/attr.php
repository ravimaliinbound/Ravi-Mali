<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <a href="https://facebook.com">Facebook</a><br><br>
    <button>Change href Value</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("a").attr("href", "https://instagram.com");
            alert($("a").attr("href"));
        });
    });
</script>