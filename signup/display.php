<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <button><a href="signup.php">Add User</a></button>
    </div>
    <table width="80%" border="1">
        <tr>
            <th>SRO</th>
            <th>Name</th>
            <th>Password</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Operation</th>
        </tr>
        <?php
        $sql = "SELECT * FROM information";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $pass = $row['password'];
            $email = $row['email'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$pass.'</td>
        <td>'.$cont.'</td>
        <td>'.$mail.'</td>
        
        </tr>';
        }
        ?>
    </table>
</body>
</html>