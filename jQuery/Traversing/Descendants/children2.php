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
            <p class="first">First p</p>
            <p class="second">Second p</p>
        </div>
    </div>
    <button>class="first" Descendant</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").children("p.first").css("border", "2px solid red");
        });
    });
</script>