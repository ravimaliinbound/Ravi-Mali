<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <style>
        .test{
            color: red;
        }
        .demo{
            color:green;
        }
    </style>
    <p>This is a paragraph</p>
    <p class="test">This is another paragraph(.test)</p>
    <p class="test">This is another paragraph(.test)</p>
    <p class="demo">This is another paragraph(.demo)</p>
    <button>Remove</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("p").remove(".test, .demo");
        });
    });
</script>