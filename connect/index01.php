<?php
$connect = mysqli_connect('localhost', 'root', '', 'school');
if (!$connect) {
    exit('Kết nối không thành công!');
} 
$result = mysqli_query($connect, 'SELECT * FROM students');
echo "<table border =1> 
<tr> <th> id </tr> </th>
<tr> <th> name </tr> </th>
 <tr> <th> age </tr> </th>
<tr> <th> class </tr> </th>
<tr> <th> mark </tr> </th>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row[0]. "</td";
    echo "<td>" .$row[1]. "</td>";
    echo "<td>" .$row[2]. "</td>";
    echo "<td>" .$row[3]. "</td>";
    echo "</tr>";
}
echo "</table>";


?>