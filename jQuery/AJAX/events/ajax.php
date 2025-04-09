<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<div></div>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $.ajax({
                url: "test.txt",
                beforeSend: function () {
                    console.log("Ajax request is going to send");
                },
                success: function (data) {
                    $("div").text(data);
                    console.log("Data Fetched Successfully...!");
                }
            });
        });
    });
</script>