<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<form class="search">
    <tr>
      <th>Keyword
      <input name="search" type="text" id="search" value="<?=$_GET["search"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form> 
</head>
<body>

<?php
$numTxtsearch =0 ;
include('Connect.php');
mysqli_set_charset($conn,"utf8");
$txtsearch = $_GET["search"] ;
$val= " ";
$val2= " ";

$sql = "SELECT * FROM Product WHERE (product_name LIKE '%".$txtsearch."%' )";
if ($objQueryy = mysqli_query($conn, $sql)) { /// connectDB
                    //echo "eeee";
					
					if($txtsearch !=""){
						
				   while ($roww = mysqli_fetch_array($objQueryy)) {
					$val = substr($roww['product_id'],0,2);
						//echo "<br>".$roww['product_name']."<br>";
						//echo "<br>".substr($roww['product_id'],0,2)."<br>";
						$numTxtsearch++;
						
					}
					/* echo $val."<br>";
					 print $numTxtsearch."<br>";*/
					
					if($numTxtsearch == 8){
						header("Location: http://pilot.cp.su.ac.th/usr/u07580529/public/category.php");
					}
					
					else{ 
						$sql = "SELECT * FROM Product_Type where  (type_id LIKE '%".$val."%')";
						if ($objQueryy = mysqli_query($conn, $sql)){							
								while ($roww = mysqli_fetch_array($objQueryy)) {
									
										$val2 = $roww['type_link'];
									
									
								}
						}
						header("Location: http://pilot.cp.su.ac.th/usr/u07580529/public/".$val2);
						

							
						}
											
					}
}
					
else 
	echo "no connect";
$conn->close();
?>


</body>
</html>