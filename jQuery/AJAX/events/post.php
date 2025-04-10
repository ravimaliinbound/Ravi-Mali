<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
<button>Click</button>
<br><br>
<div></div>
<script>
    $(document).ready(function () {
        $(document).ajaxSuccess(function () {
            console.log("Ajax request completed successfully...!");
        });
        $(document).ajaxError(function () {
            console.log("An Error Occured...!");
        });
        $("button").click(function () {
            $.post("test.php",
                {
                    name: "Ravi",
                    surname: "Mali",
                    city: "Mandar",
                    age: 21,
                    hobbies: ["travelling", "esports"]
                },
                function (data, status) {
                    console.log(data);
                    $("div").text(data);
                    // console.log(status); // To check if ajax is successful in jquery or not
                }
            );
        });
    });
</script>