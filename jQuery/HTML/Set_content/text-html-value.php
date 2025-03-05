<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <p id="first">This is a Paragraph</p>
    <p id="second">This is another Paragraph</p>
    Name : <input type="text" value="Unknown"><br><br>
    <button id="text">Change Text</button>
    <button id="html">Change HTML</button>
    <button id="value">Chnage Value</button>
</body>
<script>
    $(document).ready(function(){
        $("#text").click(function(){
            $("#first").text("This is changed paragraph");
            alert('Text Changed');
        });
        $("#html").click(function(){
            $("#second").html("<h3>This is changed Heading</h3>");
            alert('HTML Changed');
        });
        $("#value").click(function(){
            $("input").val("Ravi Mali");
            alert('Value Changed');
        });
    });
</script>