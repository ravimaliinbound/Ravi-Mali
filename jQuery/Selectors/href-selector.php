<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>href  Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("[href]").hide();
            });
        });
    </script>
</head>
<body>
    <a href="href-selector.html">This will be hidden.</a>
    <p>This will not be hiddem.</p>
    <button>CLick</button>
</body>
</html>