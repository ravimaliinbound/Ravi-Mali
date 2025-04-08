<?php
include_once('C:\xfinal\htdocs\ravi-kumar\jquery\header.php');
?>
    <div>Click To Get Some Data</div>
    <button>Click Me!</button>
</body>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $.get("test.txt", function (data, status) {
                console.log(status);
                console.log(data);
            });
        });
    });
</script>

</html>