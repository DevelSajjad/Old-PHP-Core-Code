<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="json"></div>
</body>
<script src="js/jquery.js"></script>
<script>
   $.getJSON(
    "https://jsonplaceholder.typicode.com/posts",
    function(data){
        $.each(data,function(key,value){
            $("#json").append(value.title + "<br>")
        })
    }
   );
</script>
</html>