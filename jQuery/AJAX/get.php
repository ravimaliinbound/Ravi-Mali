<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<button>Request Data</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.get('load.php', function(data, status){
                alert('Data : ' + data + "\nStatus : " + status);
            });
        });
    });
</script>