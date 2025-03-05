<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .red{
            color:red;
        }
    </style>
    <h1 class="red">This is Heading 1</h1>
    <h2 class="red">This is Heading 2</h2>
    <p class="red">This is a Paragraph.</p>
    <button>Remove Color</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("h1, h2, p").removeClass("red");
        });
    });
</script>