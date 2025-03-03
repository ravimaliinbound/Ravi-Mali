<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dblclick Event</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("p").dblclick(function(){
                $(this).hide();
            });
        });
    </script>
</head>
<body>
    <p>Double Click to hide this element.</p>
</body>
</html>