<?php
include "connect.php";
$qry="SELECT * FROM user ";
$result = mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./registrationstyle.css">

</head>

<body>
    <div  class="container" >
        <div class="row col-md-6">
            <div class="inside-container">
                <form action="connect.php" method="post">
                    <div class="container-headling">
                        <h2>Registration</h2>
                    </div>
                    <div class="container-body">
                        <label for="name"> User Name : </label>
                            <input type="text" id="name" name="name" placeholder="Enter User Name" />
                        
                        <br><br>

                        <label for="start">Age :</label>
                        <input type="text"  name="age" placeholder="Enter your age" />
                        <br><br>
                        <div class="container-button">
                            <button type="submit" name="submit" >Add</button>
                            </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <table class="table">
    <tr class="tr">
    <th>id</th>
    <th>name</th> 
    <th>age</th>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
  <tr class="tr">
    <td><?php echo $row["id"]; ?></th>
    <td><?php echo $row["name"];?></th> 
    <td><?php echo $row["age"];?></th>
  </tr>
  <?php
}
?>
</table>

</body>

</html>