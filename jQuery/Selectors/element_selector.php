<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemet Selector</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").hide();
            });
        });
    </script>
</head>
<body>
    <p>Hello I'm going to hide.</p>
    <p>Hello jQuery...!</p>
    <p>Click button below to hide app elements</p>
    <button>Click Me!</button>
</body>
</html>