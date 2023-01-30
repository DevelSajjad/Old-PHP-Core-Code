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
        #load-button label{
            margin-left: 50px ;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="col-12">
            <div id="header">
                <h2>Ajax with Load More Pagination</h2>
            </div>
            <div id="main">
                <table id="table-data" class="table  table-bordered text-center">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
      $(document).ready(function(){
        function loadData(page){
            $.ajax({
                url: "ajaxPHP/pageLoad.php",
                type: "POST",
                data: {pageNum: page},
                success: function(data){
                    $("#table-data").append(data);
                }
            });
        };
        loadData();
        $(document).on("click","#btn",function(){
            var pid = $(this).data("id");
            loadData(pid);
        });
      });
    </script>
</body>
</html>