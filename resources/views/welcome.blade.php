<html>
<header style="text-align: center">
    <h1>Task</h1>
</header>
<body>
<div class="address">
    <h3>Insert address</h3>
    <input id="address" style="width: 20%">
    <button class="api">Submit</button>
</div>
{{--<div class="date">--}}
    {{--<h3>Date:</h3>--}}
    {{--<input type="date" id="date" name="date">--}}
    {{--<input type="submit">--}}
{{--</div>--}}
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).on('click', ".api", function() {
        var address = $("#address").val();
        //var date = $("#date").val();
        console.log(address);
        window.location =  window.location + 'address/' + address;
    });
</script>
</html>