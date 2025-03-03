<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p:first Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("p:first").click(function(){
                $(this).hide();
            });
        });
    </script>
</head>
<body>
    <p>This will be hidden</p>
    <p>This will not be hidden</p>
    <p>This will not be hidden</p>
</body>
</html>