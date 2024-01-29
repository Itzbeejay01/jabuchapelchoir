<!DOCTYPE html>
<html>
<head>
    <title>Alto Members</title>
<link rel="shortcut icon" href="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" type="image/x-icon">
    
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #00e676;
            color: rgb(12, 12, 13);
        }
        h3{
            text-align: center;
            padding: 10px;
            
        }
        body{
            font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
        }
    </style>
</head>
<body>
    <h3>ALTO MEMBER LIST</h3> <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Part</th>
            <th>Gender</th>
            <th>Level</th>
            <th>Phone</th>
        </tr>
        <?php
$servername = 'db4free.net';
$username = "choirmembers";
$password = "choirmembers";
$dbname = "choir_members";
$dbport = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query the database to fetch data from the tblsoprano table
        $sql = "SELECT id, fullname, part, gender, level, phone FROM tblalto";
        $result = $conn->query($sql);

        // Output data in a table-friendly format
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["fullname"] . "</td>";
                echo "<td>" . $row["part"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["level"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>