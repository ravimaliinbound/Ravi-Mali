<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<div>This is div element</div><br>
<button>Get Content</button>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("div").load('demo.html', function(responseTxt, statusTxt, xhr){
                if(statusTxt == 'success'){
                    alert("External Data Loaded Successfully");
                }
                if(statusTxt == 'error'){
                    alert('Error : ' + xhr.status + " " + xhr.statusText);
                }
            });
        });
    });
</script>