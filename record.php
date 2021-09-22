<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'users';
    $dbconnection = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
    $sqlquery = "SELECT * FROM `users`;";
    if(!($data = $dbconnection -> query($sqlquery)))
    echo "<script>alert('invalid');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="record.css">
    <title>HISTORY</title>
</head>

<body>
  <header>USERS</header>
  <div class="table-responsive-md">
    <div style="height: 255px;">
      <table class="table table-hover table-bordered">
        <tr><td  colspan="5">REGISTERED USERS</td></tr>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Password</td>
        </tr>
        <?php $adsnum = $data -> num_rows;
        for ($i=0; $i < $adsnum; $i++) {
        $row = $data -> fetch_assoc();
        ?>
        <tr>
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['password']; ?></td>
        </tr>
        <?php } ?>
      </table>
    </div>
    <ul style="justify-content:right;" class="pagination">
      <li class="page-item disabled">
        <a class="page-link">Previous</a>
      </li>
      <?php for ($i=1; $i*3-2 < $adsnum; $i++) { ?>
      <li class="page-item">
        <a class="page-link"><?php echo $i; ?></a>
      </li>
      <?php } ?> 
      <li class="page-item">
        <a class="page-link">Next</a>
      </li>
    </ul>
  </div>
</body>
<script src="slide.js"></script>
</html>    