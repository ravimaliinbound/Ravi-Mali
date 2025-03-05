<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<body>
    <ul>
        <li>List 1</li>
        <li>List 2</li>
        <li>List 3</li>
    </ul>
    <button>Prepend List Item</button>
</body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("ul").prepend("<li>New Item</li>");
        });
    });
</script>