<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p.demo Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("p.demo, p.test").click(function(){
                $(this).hide();
            });
        });
    </script>
</head>
<body>
    <p class="demo">This will be hidden.</p>
    <p class="demo">This will also be hidden.</p>
    <p>This will not be hidden.</p>
</body>
</html>