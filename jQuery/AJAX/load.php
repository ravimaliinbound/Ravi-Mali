<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');   
?>
    <div>This is a div element</div>
    <button>Click Me!</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").load("test.txt");
        });
    });
</script>
</html>