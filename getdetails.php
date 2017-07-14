<!DOCTYPE html>
<html>
<head>
<style>
.photo {
	background-image:url("http://gd.intranet.db.com/perl/photo?mail=junaid.mohammed@db.com");
	background-position: center;
	background-size: 150%;
	background-repeat: no-repeat;
	height: 40px;
	width: 40px;
	display: inline-block;
	border-radius: 20px;
	vertical-align: middle;
	margin-right: 8px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = ($_GET['q']);

$con = mysqli_connect('localhost','root','','sampledb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"sampledb");
$sql="SELECT * FROM dbpeople WHERE FirstName like '%".$q."%'";
/*"
SELECT dbpeople.FirstName,dbpeople.LastName,topic.Name,types.Name
FROM endorsements
    JOIN topic
        ON topic.topicID = endorsements.topicID
    JOIN dbpeople
        ON dbpeople.ID = endorsements.dbPeopleID
	JOIN types
        ON types.typesID = topic.typesID
WHERE FirstName like '%".$q."%'";*/

$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Skills</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><div class='photo' style='background-image:url(http://gd.intranet.db.com/perl/photo?mail=" . $row['email'] . ");'></div>" . $row['FirstName']
." ". $row['LastName'] ."</td>";   
	echo "<td>" .$row['email']."</td>";                                                                                                  
    echo "</tr>";                                                                                                                                         
}  
echo "</table>";
mysqli_close($con);
?>
</body>
</html>