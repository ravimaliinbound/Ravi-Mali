<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ul li:first-child</title>
    <script src="/ravi-kumar/jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $('button').click(function(){
                $("ul li:first-child").hide();
            });
        });
    </script>
</head>
<body>
    <h3>First &lt;li&gt; of each &lt;ul&gt; will be hidden.</h3>
    <p>Fruits :</p>
    <ul>
        <li>Apple</li>
        <li>Pineapple</li>
        <li>Banana</li>
        <li>MAngo</li>
    </ul>
    <p>Vegetables :</p>
    <ul>
        <li>Pea</li>
        <li>Tomato</li>
        <li>Potato</li>
        <li>Onion</li>
    </ul>
    <p>Cars :</p>
    <ul>
        <li>Innova</li>
        <li>Fortuner</li>
        <li>Scorpio</li>
        <li>BMW</li>
    </ul>

    <button>Click</button>
</body>
</html>