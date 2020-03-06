<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<button onclick="gen()">start ques</button>
<button onclick="stop()">stop ques</button>

<script>
function gen()
{
    var x="clicked";
    // alert(x);
    $.ajax({
                type: "post",
                url: "start.php",
                data: {data : x},
                success: function (result) {
                  alert(result);
                }
            });
}
function stop()
{
}
</script>
</body>
</html>