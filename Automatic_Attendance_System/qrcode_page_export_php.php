<?php
$connect = mysqli_connect("localhost", "root", "", "qr");
$fullName=$_POST['fullName'];
$sql = "SELECT * FROM $fullName";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
 
 <title>Attendance Table</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
 <link rel="stylesheet" href="export_page_css.CSS"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
    
  
 </head>  
 <body>

 <div class="logo">
<a href="#"> <img src="ACU_logo.png"></a>
<nav>
<ul>
<li><a href="">Contact Us</a></li>
</nav>
</ul>
</div>
<div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 alignn="center">Attendance Table</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>Name : </th>  
                         <th>Id : </th>  
                         <th>Date : </th>
                         
      
                    </tr>
                    
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["id"].'</td>  
         <td>'.$row["date"].'</td>
         

         
       </tr>  
        ';  
     }
     ?>
    </table>
    <br/>
    <form method="post" action="export_page_download_today_php.php">
            <select class="select" type="text" name="fullName" required>
                <option value="">Select Course Name</option>
                <option value="image">Image Processing</option>
                <option value="advanced">Advanced Databases</option>
                <option value="pattern">Pattern Recognition</option>
                <option value="security">Security</option>
              </select>
              <button type="submit" name="export" class="btn btn-success">Export today's attendance</button>
        </form>
 
        
        
        <form method="post" action="export_page_download_semester_php.php">
            <select class="select" type="text" name="fullName" required>
                <option value="">Select Course Name</option>
                <option value="image_count">Image Processing</option>
                <option value="advanced_count">Advanced Databases</option>
                <option value="pattern_count">Pattern Recognition</option>
                <option value="security_count">Security</option>
              </select>
              <button type="submit"  name="export" class="btn btn-success">Export semester attendacne</button>
        </form>
   </div>  
  </div>  
 </body>  
</html>