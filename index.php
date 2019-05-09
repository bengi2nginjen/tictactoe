<!DOCTYPE html>
<html lang="en">
<head>
  <title>Unbeatable tic tac toe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style type="text/css">
    td {
        border: 1px solid grey;
        width: 8em;
        height: 8em;
    }

    label {
        width: 100%;
        height: 100%;
        margin: 0;
    }


    .selected {
        background: url("img/cross.png");
        background-size: 90%;
        background-repeat: no-repeat;
        background-position: center;
    }

    .selected-enemy {
        background: url("img/circle.png");
        background-size: 90%;
        background-repeat: no-repeat;
        background-position: center;
    }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Unbeatable tic tac toe</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
  
      
      <button type="button" class="btn btn-success" id="reset" onclick="start()">Reset</button>
      <button type="button" class="btn btn-success" id="secondPlay">Second Play</button>

      <div class="input-group mb-3" style="margin-top: 3%; width: 50%;">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Level</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
          <option value="1">Easy</option>
          <option value="2">Medium</option>
          <option selected value="3">Hard</option>
        </select>
    </div>


        <table style="margin-top: 5%">
          
          <tr>
            <td><label for="b1" id="a1" name="a1"></label></td>
            <td><label for="b2" id="a2" name="a2"></label></td>
            <td><label for="b3" id="a3" name="a3"></label></td>
          </tr>

          <tr>
            <td><label for="b4" id="a4" name="a4"></label></td>
            <td><label for="b5" id="a5" name="a5"></label></td>
            <td><label for="b6" id="a6" name="a6"></label></td>
          </tr>

          <tr>
            <td><label for="b7" id="a7" name="a7"></label></td>
            <td><label for="b8" id="a8" name="a8"></label></td>
            <td><label for="b9" id="a9" name="a9"></label></td>
          </tr>
        </table>

        <form>
          <input class="input" type="text" name="b1" id="b1" value="0"></input>
          <input class="input" type="text" name="b2" id="b2" value="0"></input>
          <input class="input" type="text" name="b3" id="b3" value="0"></input>
          <input class="input" type="text" name="b4" id="b4" value="0"></input>
          <input class="input" type="text" name="b5" id="b5" value="0"></input>
          <input class="input" type="text" name="b6" id="b6" value="0"></input>
          <input class="input" type="text" name="b7" id="b7" value="0"></input>
          <input class="input" type="text" name="b8" id="b8" value="0"></input>
          <input class="input" type="text" name="b9" id="b9" value="0"></input>
        </form>

    </div>
    <div class="col-sm-6">
      <form>
        <div class="form-group">
          <textarea class="form-control" id="log" rows="15"></textarea>
      </div>
      </form>
  </div>
</div>

<script type="text/javascript">

  $("label").click(function(){
    $(this).addClass("selected");
  });

  $(".input").click(function(){
    $(this).val("1");
  });
  
  function start(){
    $.ajax({
        type: 'POST',

        url: 'algoritma.php',
        dataType: 'text',
        data: {
          "b1":$("#b1").val(), 
          "b2":$("#b2").val(),
          "b3":$("#b3").val(),
          "b4":$("#b4").val(),
          "b5":$("#b5").val(),
          "b6":$("#b6").val(),
          "b7":$("#b7").val(),
          "b8":$("#b8").val(),
          "b9":$("#b9").val(),
        },
        success: function(msg){
          console.log(msg);
        }
    });

  }
</script>
</body>
</html>
