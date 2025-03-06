<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <style>
        .test * {
            border: 1px solid green;
            margin: 10px;
            padding: 10px;
        }
    </style>

    <div class="test" style="width: 300px;">
        <div>
            <p>First</p>
            <p>Second</p>
            <p>Third</p>
        </div>
    </div>
    <button>Get First & Last p element</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").children("p:first").css("border", "2px solid red");
            $("div").children("p:last").css("border", "2px solid red"); 
        });
    });
</script>