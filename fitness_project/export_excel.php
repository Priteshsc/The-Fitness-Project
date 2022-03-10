<html>
<head>
<title>The Fitness Project</title>
</head>
<body>
<button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>
<table class="table table-responsive" id="tblData">    
<tr>
<th>Sr.no</th>    
<th>First Name</th>
<th>Last Name</th>
<th>Mobile No</th>
<th>Email Id</th>
<th>Address</th>
<th>Gender</th>
<th>Age</th>
<th>Weight</th>
<th>Weight Goal</th>
<th>Height</th>
<th>Personal Trainer</th>
<th>Emergency Contact</th>
<th>Relationship</th>
</tr>

<?php 
include('dbcon.php');
$sql="Select * from registration";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row['srno'].'</td>'; 
    echo '<td>'.$row['fname'].'</td>';
    echo '<td>'.$row['lname'].'</td>';
    echo '<td>'.$row['mobile1'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['address'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['age'].'</td>';
    echo '<td>'.$row['weight'].'</td>';
    echo '<td>'.$row['weight_goal'].'</td>';
    echo '<td>'.$row['height'].'</td>';
    echo '<td>'.$row['personal'].'</td>';
    echo '<td>'.$row['emergency'].'</td>';
    echo '<td>'.$row['relationship'].'</td>';
    echo '</tr>';
}
?>
</table>    
</body>
<script>
 function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}     
 </script>     
</html>