<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="bg-primary text-center">
        <h1>Ajax with JSON</h1>
    </div>
    <table class="table table-bordered" id="json">

    </table>
    <script src="js/jquery.js"></script>
    <script>
        $.getJSON(
            "json/fetch-json.php",
            function(data){
                $.each(data,function(key , value){
                    $("#json").append("<tr>"+"<td>"+value.name + "</td> <td> " + value.age + "</td> <td> " + value.gender+ " </td> <td>"+ value.country+"</td> <td> "+ value.phone+"</td></tr>");
                })
            }
        );
        // $.ajax({
        //     url:"json/fetch-json.php",
        //     type: "POST",
        //     dataType:"JSON",
        //     data:{age:27},
        //     success: function(data){
        //         $.each(data,function(key,value){
        //             $("#json").append("<tr>"+"<td>"+value.name + "</td> <td> " + value.age + "</td> <td> " + value.gender+ " </td> <td>"+ value.country+"</td> <td> "+ value.phone+"</td></tr>");
        //         });
        //     }
        // }); 
    </script>
</body>
</html>