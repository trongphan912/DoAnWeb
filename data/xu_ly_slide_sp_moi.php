<?php
include_once("../DB.php");
$sql = "select * from product where 1 = 1 limit 15";
$result = $mysqli -> query($sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{    
    echo "<tr>";
    foreach ($row as $key => $value) {
        if($key == "contactEmail"){
          $mailUrl = "mailto:".$value;
          echo "<td><a href=".$mailUrl.">".$value."</a>";
        }
        else{
          echo "<td>" . $value . "</td>";
        }
    }
    echo "<td><a href='updateform.php?id=" . $row['id'] . "'>Edit</a></td>";
    echo "</tr>";
}
