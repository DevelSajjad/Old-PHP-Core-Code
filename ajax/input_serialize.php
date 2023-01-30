<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #main{
            background-color: rebeccapurple;
            height: 100px;
            text-align: center;
            color: yellow;
        }
    </style>
</head>
<body>
    <div id = "main">
        <h2>Ajax with Input Serialize</h2>
    </div>
    <div class="container">
        <div class="col-12">
            <form id="input_form" class="input-group">
                <table  class="table table-bordered text-center">
                    <tr>
                        <td>
                            <label for="">Name</label>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Age</label>
                            <input type="number" name="age" id="age">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Gender</label>
                            <input type="radio" name="gender" value="male" > Male
                            <input type="radio" name="gender"  value="female" > Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Country</label>
                            <select name="country" id="">
                                <option value="ind">India</option>
                                <option selected value="BD">Bangladesh</option>
                                <option value="pk">Pakisthan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Phone Num</label>
                            <input type="number" name="number" id="number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" name="submit" id="submit" class="btn btn-success" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            <div id="endDiv" class="bg-warning text-center"></div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                var name = $("#name").val();
                var age = $("#age").val();
                var phone = $("#number").val();
                if(name == "" || age == "" || phone == "" || !$("input:radio[name=gender]").is(":checked")){
                    $("#endDiv").fadeIn("slow");
                    $("#endDiv").html("<h1> All Field Required!! </h1>").fadeOut("slow");
                }else{
                    $.post(
                        "ajaxPHP/serialize.php",
                        $("#input_form").serialize(),
                        function(data){
                            $("#input_form").trigger("reset");
                            $("#endDiv").fadeIn("slow");
                            setTimeout(function(){
                                $("#endDiv").html(data).fadeOut("slow");
                            },10000);
                            
                            
                        }

                    );
                }
            });
        });
    </script>
</body>
</html>