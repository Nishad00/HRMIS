<html>
<head>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<title>Training Calender</title>

<style></style>


<body>
<center><h1>Tranning Calender</h1></center>
<br>
<div class="table">

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" rowspan="2">SR.NO</th>
      <th scope="col" rowspan="2">Training Topics</th>
      <th scope="col" colspan="24"><center>Month</center></th>
      <th scope="col" rowspan="2">No of Employess Attended</th>
      <th scope="col" rowspan="2">Remark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td colspan="2">Jan</td>
      <td colspan="2">Feb</td>
       <td colspan="2">Mar</td>
<td colspan="2">Apr</td><td colspan="2">May</td><td colspan="2">Jun</td><td colspan="2">July</td><td colspan="2">Aug</td><td colspan="2">Sept</td><td colspan="2">Oct</td><td colspan="2">Nov</td><td colspan="2">Dec</td>
<td></td><td></td>

    </tr>
   
      <?php
require 'vendor\autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->hrmis;
$empcollection = $companydb->trainingcalender;

      $counter = $empcollection->find();
foreach($counter as $row) {
        echo " <tr>";
        echo '<th scope="row">1</th>';
        echo "<td>" . $row['trainingtopic'] ."</td>";
   echo  '    
        <td>P</td>
        <td>C</td>
  <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
';
  echo "   </tr>";
}
      ?>
     
 
  </tbody>
</table>

</div>

</body>


</html>
