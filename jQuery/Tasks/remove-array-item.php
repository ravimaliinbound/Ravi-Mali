<?php
include_once('C:\xampp\htdocs\Ravi-Kumar\jQuery\header.php');
?>
<p id="first"></p>
<button>Remove Banana</button>
<p id="second"></p>
<script>
    const arr = ['Apple', 'Banana', 'Orange', 'Kiwi'];
    let remove = 'Banana';
    $(document).ready(function () {
        $("#first").text("Original Array : " + arr);
        $("button").click(function () {
            let updated = $.grep(arr, function (value) {
                return value != 'Banana';
            });
            $("#second").text('Updated Array : ' + updated);
        });
    });
</script>