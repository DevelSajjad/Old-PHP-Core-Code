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
        <table id="main"  cellspacing = "0">
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>
                <label for="">Search</label>
                <input type="text" id="search">
            </td>
        </tr>
        <tr><td style="background-color:aqua; height:50px" id="load">
        <form id="inputF" action="" class="text-center">
        <label for="">First Name</label>
            <input class="" type="text" id="fname" >
        <label for="">Last Name</label>
            <input class=""  type="text" id="lname" >
            <input class=" btn btn-dark" type="submit" id="load-button" value="Save">
        </form>
        <h2 id="error"></h2>
        <h2 class="bg-info text-center" id="success"></h2>
        </td>
    </tr>
        <tr>
            <td id="table-data">
                    <table class="table table-bordered text-center"  cellspacing="0" cellpadding="10px">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            
                        </tr>
                        <tr>
                            <td >1</td>
                            <td>Sajjad </td>
                            
                        </tr>
                    </table>
            </td>
        </tr>
    </table>
    </div>
    </div>
    <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form id="inputF" action="">
            <input  type="text" id="fname" >
            <input  type="text" id="lname" >
        </form>
      </div>
      <div class="modal-footer">
        <button id="save" type="button" class="btn btn-primary">Save changes</button>
        <button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="modal" class="modal" tabindex="-1" role="dialog">

    <script type="text/javascript" src="js/jquery.js"></script>
    
    <script type="text/javascript">
       $(document).ready(function(){
        function loadData(page){
            $.ajax({
                url: "ajaxPHP/ajaxLoad.php",
                type: "POST",
                data:{page_id:page},
                success: function(data){
                    $('#table-data').html(data);
                }
            });
        }
        loadData();
        $('#load-button').on("click",function(e){
            e.preventDefault();
            var firstName = $('#fname').val();
            var lastName = $('#lname').val();
            if(firstName == "" || lastName == ""){
                $('#error').html("Required Field").slideUp(2000);
            }else{
                $.ajax({
                url:"ajaxPHP/inputAjax.php",
                type: "post",
                data:{fname:firstName, lname: lastName},
                success:function(data){
                    if(data == 1)
                        loadData();
                        $('#inputF').trigger("reset");
                         $('#success').html("Data Save Successful").fadeOut(2000);
                }    
            });
            }
            
        });
            $(document).on("click","#btn",function(){
                if(confirm("Do You Really Delete!!")){
                var studentId = $(this).data("id");
                $.ajax({
                    url:"ajaxPHP/delete.php",
                    type: "POST",
                    data:{id:studentId},
                    success:function(data){
                        if(data == 1){
                            loadData()
                            $('#success').html('Delete SuccessFull').fadeOut(2000);
                        }
                    }
                });
            }
            });
       $(document).on("click","#edit",function(){
        var editId = $(this).data("eid");
        $('#modal').show().fadeIn();
        $.ajax({
            url: "ajaxPHP/edit.php",
            type: "post",
            data:{edit:editId},
            success: function(data){
                $('#modal').html(data);
            }
        });
       });
       $(document).on("click","#close",function(){
        $('#modal').hide().fadeOut();
       });

       $(document).on("click","#save",function(e){
        var mid = $('#modalId').val();
        var mfname = $("#modalfname").val();
        var mlname = $("#modallname").val();
        $.ajax({
            url: "ajaxPHP/update.php",
            type: "POST",
            data:{mdlid:mid,mdlfname:mfname, mdllname:mlname},
            success:function(data){
                if(data == 1){
                    $('#modal').hide().fadeOut();
                    loadData();       
                }
            }
        });
       });
       $(document).on("keyup",function(){
        var search =$("#search").val();
        $.ajax({
            url:"ajaxPHP/search.php",
            type: "post",
            data:{search:search},
            success: function(data){
                $('#table-data').html(data);
            }
        });
       });
       $(document).on("click","#pagination a",function(e){
            e.preventDefault();
            var pageId = $(this).attr("id");
            loadData(pageId);
       })
    });   
    </script>
</body>
</html>