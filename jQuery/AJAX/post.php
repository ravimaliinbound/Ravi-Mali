<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<button>Get Content</button>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.post('name.php', {name: "Ravi Mali", age: 20, city: "Mandar"}, function(data, status){
                alert("Data : " + data + "\nStatus : " + status);
            });
        });
    });
</script>