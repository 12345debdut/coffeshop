<?php
    include("connect.php");
    $sql=mysql_query("select * from `signup`");
    $r=mysql_num_rows($sql);
    if($r)
    {
        echo "<table width='395' align='center' border='1'>
            <tr><th>FNAME</th>
            <th>LNAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>PASS</th></tr>";
        while($r1=mysql_fetch_array($sql))
        {
            echo "<tr>";
            echo "<td>".$r1['FNAME']."</td>";
            echo "<td>".$r1['LNAME']."</td>";
            echo "<td>".$r1['EMAIL']."</td>";
            echo "<td>".$r1['PHONE']."</td>";
            echo "<td>".$r1['PASS']."</td>";
              echo "</tr>";
        }
        echo "</table>";
        }
?>