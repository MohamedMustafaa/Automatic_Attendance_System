<?php  


$connect = mysqli_connect("localhost", "root", "", "qr");
$output = '';
if(isset($_POST["export"]))
{
$fullName=$_POST['fullName'];
 $query = "SELECT * FROM $fullName";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>name</th>  
                         <th>id</th>  
                         <th>date</th>
                         
      
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["date"].'</td>
                         
      
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/csv');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
