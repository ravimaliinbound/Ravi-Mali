<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <div style="margin-left: 100px; margin-top: 50px;">
        <a href="https://github.com">Git Hub</a><br><br>
        <button>Show href VAlue </button>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert($("a").attr("href"));
        });
    });
</script>