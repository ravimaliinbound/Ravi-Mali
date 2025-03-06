<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .test *{
            border: 1px solid green;
            margin: 10px;
            padding: 10px;
            display: block
        }
    </style>

    <div class="test" style="width: 300px;">
        <p>
            <span>This is first Paragraph</span>
        </p>
        <p>
            <span>This is second Paragraph</span>
        </p>
        <p>
            <span>This is Third Paragraph</span>
        </p>
    </div>
    <button>All span Descendants</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").find("span").css("border", "2px solid red");
        });
    });
</script>