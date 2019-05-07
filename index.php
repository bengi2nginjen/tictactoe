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
      <button type="button" class="btn btn-success">Reset</button>
      <button type="button" class="btn btn-success">Second Play</button>
      
      <div class="col-md-12"></div>

        <table style="margin-top: 5%">
          
          <tr>
            <td><label class="selected"></label></td>
            <td><label class="selected-enemy"></label></td>
            <td><label></label></td>
          </tr>

          <tr>
            <td><label></label></td>
            <td><label></label></td>
            <td><label></label></td>
          </tr>

          <tr>
            <td><label></label></td>
            <td><label></label></td>
            <td><label></label></td>
          </tr>

        </table>

    </div>
    <div class="col-sm-6">
      <form>
        <div class="form-group">
          <textarea class="form-control" id="log" rows="15"></textarea>
      </div>
      </form>
  </div>
</div>

</body>
</html>
