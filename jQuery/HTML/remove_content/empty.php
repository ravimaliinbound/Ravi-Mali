<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <div style="background-color: aquamarine; border: 1px solid; width: 200px; text-align: center; height: 200px">
        <p>This is a paragraph</p>
        <p>This is a paragraph</p>
        <p>This is a paragraph</p>
        <p>This is a paragraph</p>
        <p>This is a paragraph</p>
    </div><br>
    <button>Empty div</button>
    <p>The <b>empty()</b> will remove only the elements of the div(empty the div) not the whole div</p>
</body>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("div").empty();
        });
    });
</script>