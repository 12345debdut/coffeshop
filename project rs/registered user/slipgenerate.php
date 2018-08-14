<?php
session_start();
?>
  <script>
      function printpage()
      {
          window.print();
      }
</script>
<p style="text-align:right;"><input type="button" value="Print" onclick="printpage()"></p>
  <div style="border:1px solid red; width:600px; margin-left:300px;">
   <?php
    include("connect.php");
    $name=$_SESSION["name"];
    $sql=mysql_query("select * from `booking` where `name`='$name'");
    $r=mysql_num_rows($sql);
    if($r)
    {
        echo "<table width='500' height='300' align='center' background='images/logo.jpg'>
            <tr><th>NAME</th>
            <th>PHONE NUMBER</th>
            <th>EMAIL</th>
            <th>MASSAGE</th>
            <th>DATE</th></tr>";
        while($r1=mysql_fetch_array($sql))
        {
            echo "<tr>";
            echo "<td>".$r1['name']."</td>";
            echo "<td>".$r1['phone']."</td>";
            echo "<td>".$r1['email']."</td>";
            echo "<td>".$r1['massage']."</td>";
            echo "<td>".$r1['date']."</td>";
              echo "</tr>";
        }
        echo "</table>";
        }
?>
</div>
<a href="registered%20user.php" style="text-decoration:none;"> click me to goto the home page</a>
