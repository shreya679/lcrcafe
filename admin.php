<?php
 include('connection.php');
 if(isset($_POST["username"])){
 $username = $_POST['username'];
 $password  = $_POST['password'];

 if($username != "admin" && $password != "123")
 {
    echo "<script> location.href='login.html'; </script>";
    exit;
 }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
     

 </head>
 <body>
     <div class="container">
      <a  href="admin.php" class="btn btn-danger rounded-pill">
      enquiry
</a> 
    
    <a   class="btn btn-success rounded-pill">
      REGISTRATION
</a>
<!-- <a  href="login.html" class="btn btn-warning rounded-pill">
      LOGOUT
</a> -->


<?php
        
            include('connection.php');
            $query = "SELECT * FROM users ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

        ?>
        <br />
         <table class="table table-bordered"> 
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Address</th>
            </tr>
            <?php
                $no = 1;
                foreach ($result as $row)
                {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["mobileno"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "</tr>";
                    $no++;
                }
            ?>
         </table>

         <?php
        
            include('connection.php');
            $query = "SELECT * FROM enquiry ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

        ?>
        <br />
         <table class="table table-bordered"> 
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>enquiry </th>
            </tr>
            <?php
                $no = 1;
                foreach ($result as $row)
                {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["mobileno"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["enquiry"] . "</td>";
                    echo "</tr>";
                    $no++;
                }
            ?> 
         </table> 
     </div>
 </body>
 </html>


