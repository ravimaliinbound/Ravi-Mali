<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>

<body>
    <style>
        .test {
            color: red;
        }
    </style>

    <p>This is a paragraph</p>
    <p class="test">This is another paragraph</p>
    <p class="test">This is another paragraph</p>
    <button>Remove</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").remove(".test");
        });
    });
</script>