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
            $("a").attr("href", function(i, oldValue){
                alert("Old URL was : " + oldValue + "...  Current URL is : https://instagram.com");
            });
            $("a").attr("href", "https://instagram.com");
        });
    });
</script>