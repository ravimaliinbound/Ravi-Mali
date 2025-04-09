<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Data Loaded Successfuylly...!");
        });
        $("button").click(function () {
            $.get("test.txt", function (data) {
                $("div").text(data);
            }).done(function(){         // Executes when data loaded successfully (same as success)
                console.log("Success"); 
            }).fail(function(){         // Execues when error occurs (same as error)
                console.log("Failed"); 
            }).always(function(){       // Executes even when error occurs (executes always) (same as complete)
                console.log("Completed"); 
            });
        });
    });
</script>