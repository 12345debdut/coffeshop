<?php

include("connect1.php");
  $sql = mysql_query("SELECT * FROM `fileup` ");
  $result=mysql_num_rows($sql);
  
  echo"<table  align='center' height='10' bgcolor='#F7E2B9'>
<tr bgcolor='#F7E2B9'  class='style1'>
<td align='center'><h4>Details of Short Courses </h4></td>
</tr></table> ";
 echo"<table border='1' bordercolor='#0066CC' align='center' >
    <tr bgcolor='#FFFFFF' width='1200' height='50' class='style1' >

	<th width='100'>here it is</th>	
	
    </tr></table>";
	
	
for($i=1;$i<=$result;$i++)
{
$r=mysql_fetch_array($sql);
echo "<table border='1' bordercolor='#0066CC' align='center'>";

      
	        echo "<tr bgcolor='#ffffff' width='1200' height='50' class='style2'>";
			echo "<td width='150'>".$r['CName']."</td>";
		    $ab=$r['content'];
			
			echo "<td width='100'>"."<a href='$ab'>Download</a>"."</td>";
															
			echo "</tr>";
		
		echo "</table>";
}
?>