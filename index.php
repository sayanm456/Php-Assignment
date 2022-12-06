<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>This is Employee Table</title>
</head>
<body style="margin: 50px;">
    <div class="mx-3 my-2">
        <h1>List of Employees</h1>
    </div>
    <div class="mx-3"> 
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Second Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Department</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Joining</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "employee";

                $conn = mysqli_connect($servername, $username, $password, $database);

                if (!$conn){
                    die("Sorry we failed to connect: ". $conn->connect_error);
                }

                $sql = "SELECT * FROM `employee`";
                $result = $conn->query($sql);



                while($row = $result->fetch_assoc()){

                    if ($row["is_active"] == 1 && $row["present_year"] - $row["start_year"] > 5) {
                        
                        echo "<tr class='table-success'>
                        <td>". $row["employee_id"] ."</td>
                        <td>". $row["first_name"] ."</td>
                        <td>". $row["last_name"] ."</td>
                        <td>". $row["position"] ."</td>
                        <td>". $row["email_id"] ."</td>
                        <td>". $row["phone_no"] ."</td>
                        <td>". $row["address"] ."</td>
                        <td>". $row["dept"] ."</td>
                        <td>". $row["sal"] ."</td>
                        <td>". $row["start_year"] ."</td>
                        </tr>";
                    } 
                    else {
                        
                        echo "<tr>
                        <td>". $row["employee_id"] ."</td>
                        <td>". $row["first_name"] ."</td>
                        <td>". $row["last_name"] ."</td>
                        <td>". $row["position"] ."</td>
                        <td>". $row["email_id"] ."</td>
                        <td>". $row["phone_no"] ."</td>
                        <td>". $row["address"] ."</td>
                        <td>". $row["dept"] ."</td>
                        <td>". $row["sal"] ."</td>
                        <td>". $row["start_year"] ."</td>
                        </tr>";
                    }

                }

                
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>