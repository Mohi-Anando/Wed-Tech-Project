<!DOCTYPE html>
<html lang="en">
<head>

<style>
		table,td,tr,th{
			border:3px solid rosybrown;
			padding:25px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
    
</body>
</html>


<?php

$conn = mysqli_connect('localhost', 'root', '', 'entry') or die("Connection Failed");

$sql = "SELECT * FROM store";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
    $output = '<table >
            <tr>
            <th>Member Name</th>
            <th>Email</th>
            <th>Gender</th>
            </tr>';

            while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["Name"]}</td>
                <td align='center'>{$row["Email"]}</td>
                <td align='center'>{$row["Gender"]}</td>
                </tr>";
            }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
