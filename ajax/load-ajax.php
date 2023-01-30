<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>AJAX</title>
    <style>
        #header{
            text-align: center;
            background-color: yellowgreen;
        }
        #main{
            width: 100%;
        }
        #load-button{
            margin-left: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-12">
        <table id="main"  cellspacing = "0">
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>
            </td>
        </tr>
        <tr><td style="background-color:aqua; height:50px" id="load">
            <input class=" btn btn-dark" type="button" id="load-button" value="Load Data">
        </td></tr>
        <tr>
            <td id="table-data">
                    <table class="table table-bordered width = 100% "  cellspacing="0" cellpadding="10px">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                        <tr>
                            <td >1</td>
                            <td>Sajjad </td>
                            <td> Hossain</td>
                        </tr>
                    </table>
            </td>
        </tr>
    </table>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function loadData (){
                $.ajax({
                    url: "ajaxPHP/ajaxLoad.php",
                    type:"POST",
                    success:function(data){
                        $('#table-data').html(data);
                    }
                });
            };
            loadData();
        });
    </script>
</body>
</html>