<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<button>Get Content</button>
<h3></h3>

<script>
    $(document).ready(function(){
        $("button").click(function(){
            $.get('demo1.html', function(data, status){
                $("h3").html(data);
            });
        });
    });
</script>