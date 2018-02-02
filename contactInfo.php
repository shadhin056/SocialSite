<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "outzone");
if(!empty($_POST))
{
 $output = '';
   // $email = mysqli_real_escape_string($connect, $_POST["email"]);
   $email='shadhinemail@gmail.com';
    $mobile= mysqli_real_escape_string($connect, $_POST["mobile"]);
    $address = mysqli_real_escape_string($connect, $_POST["address"]);
    $query = "
    INSERT INTO ogroup(email, mobile, address)
     VALUES('$email', '$mobile', '$address')
    ";
    if(mysqli_query($connect, $query))
    {

   }
 }
?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }
  </style>
</head>
<body>

<div class="container">
  <h2>Group create</h2>
  <?php
      //include('db.php');
      $select = mysqli_query($connect, "SELECT * FROM ogroup");
      $num_row = mysqli_num_rows($select);

      if( $num_row ) {
  ?>
        <table>
            <tr>
                <th>email</th>
                <th>mobile</th>
                <th>address</th>
            </tr>
            <?php while( $userrow = mysqli_fetch_array($select) ) { ?>
            <tr>
                <td><?php echo $userrow['email']; ?></td>
                <td><?php echo $userrow['mobile']; ?></td>
                <td><?php echo $userrow['address']; ?></td>

            </tr>
            <?php } ?>
        </table>
  <?php } ?>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Update</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-wrench"></span> Group Information</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" disabled class="form-control" id="email" name="email" value='shadhin' placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="mobile"><span class="glyphicon glyphicon-phone"></span> Group name</label>
              <input type="text" required class="form-control" id="mobile" name="mobile" placeholder="Enter Group name.">
            </div>
            <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-home"></span> Type</label>
              <input type="text" required class="form-control" id="address" name="address" placeholder="Enter Type">
            </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

        </div>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
