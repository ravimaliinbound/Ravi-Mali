<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <p>This is a Paragraph.</p>
    <button>Change HTML</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").html(function(i, old){
                alert("Old HTML is : " + old + " New HTML is : <h1>Hello World!</h1>");
            });
            $("p").html("<h1>Hello World!</h1>");
        });
    });
</script>