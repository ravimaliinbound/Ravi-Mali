<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ul li:first</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("ul li:first").hide();
            });
        });
    </script>
</head>
<body>
    <h3>First &lt;li&gt; of first &lt;ul&gt; will be hidden.</h3>
     <p>Fruits :</p>
     <ul>
        <li>Orange</li>
        <li>Mango</li>
        <li>Papaya</li>
        <li>Banana</li>
     </ul>
     <p>Vegetables :</p>
     <ul>
        <li>Pea</li>
        <li>Tomato</li>
        <li>Potato</li>
        <li>Brinjal</li>
     </ul>
     <button>Click</button>
</body>
</html>