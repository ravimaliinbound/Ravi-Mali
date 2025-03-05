<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <div style="background-color: aqua; border: 1px solid; width: 200px; text-align:center">
        <p>This is first paragraph</p>
        <p>This is second paragraph</p>
        <p>This is thirs paragraph</p>
    </div><br>
    <button>Remove div</button>
    <p>The <b>remove()</b> method will remove selected element(with its child)</p>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").remove();
        });
    });
</script>