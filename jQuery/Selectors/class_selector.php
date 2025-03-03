
<body>
    <p class="test">Hello jQuery</p>
    <p class="test">Hide me.</p>
    <p class="test">Click The button to hide.</p>
    <button>Click</button>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $(".test").hide();
            });
        });
    </script>
</body>
</html>