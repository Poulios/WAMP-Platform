<?php 
    $con=mysqli_connect("localhost","root","root","finds");
    if(!$con)
    {
        die(" Connection Error ");
    }
    $query = " select * from records ";
    mysqli_set_charset($con,'utf8');
    $result = mysqli_query($con,$query);
	if (!$result) printf (mysqli_error ($con));
	$increment = 1;
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>

<style>    
    div.fixed {
        position: fixed;
        bottom: 10px;
        right: 0;
    }
    .button{
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
    }
	.scrollable {
		overflow: auto;
		max-height: 200px;
	}
 </style>
</head>
<body >                   
                <table class="table table-bordered">                        
                    <tr class="font-weight-bold">  
                        <tr class="table-primary">                              
                            <th style="text-align:center;">No.</th>                                 
                            <th style="text-align:center;">Category </th>
                            <th style="text-align:center;">Title</th>
                            <th style="text-align:center;">Estimated_Time</th>
                            <th style="text-align:center;">Archaeological_Place</th>
                            <th style="text-align:center; padding-left: 80px; padding-right: 80px;">Description</th>
                            <th style="text-align:center;">Height(m)</th>
                            <th style="text-align:center;">Length(m)</th>
                            <th style="text-align:center;">Αrchaeologist_Name</th>
                            <th style="text-align:center;">Αrchaeologist_Surname</th>
                            <th style="text-align:center;">Inspectorate_Οf_Monuments</th>    
                            <th style="text-align:center;">Submited_Date</th>  
                            <th style="text-align:center;">Area(m²)</th>
                            <th style="text-align:center;">Edit</th> 
                            <th style="text-align:center;">Delete</th>    
                        </tr>
                    </tr>
                        <?php                                     
                            while($row=mysqli_fetch_array($result))
                               {                                      
                                $ID = htmlspecialchars ($row['ID']);
                                $Category = htmlspecialchars ($row['Category']);
                                $Title = htmlspecialchars ($row['Title']);
                                $Estimated_Time = htmlspecialchars ($row['Estimated_Time']); 
                                $Archaeological_Place = htmlspecialchars ($row['Archaeological_Place']);
                                $Description = htmlspecialchars ($row['Description']);
                                $Height = htmlspecialchars ($row['Height']);
                                $Length = htmlspecialchars ($row['Length']);
                                $Αrchaeologist_Name = htmlspecialchars ($row['Αrchaeologist_Name']);
                                $Αrchaeologist_Surname = htmlspecialchars ($row['Αrchaeologist_Surname']);
                                $Inspectorate_Οf_Monuments = htmlspecialchars ($row['Inspectorate_Οf_Monuments']);  
                                $Submited_Date = htmlspecialchars ($row['Submited_Date']);                                                                     
                                       
                        ?>                           
                                    <!-- <div class="a"> -->
                        <tr>
                            <td style="text-align:center;"><?php
								echo $increment;
								$increment++;
							?></td>
                            <td style="text-align:center;" class="table-danger"><?php echo $Category ?></td>
                            <td style="text-align:center;"><?php echo $Title ?></td> 
                            <td style="text-align:center;"><?php echo $Estimated_Time ?></td>  
                            <td style="text-align:center;" class="bg-light text-dark"><?php echo $Archaeological_Place ?></td>
                            <td style="text-align:center;"><p class="a scrollable"><?php echo $Description ?></p></td>
                            <td style="text-align:center;"><?php echo $Height?></td>
                            <td style="text-align:center;"><?php echo $Length ?></td>
                            <td style="text-align:center;"><?php echo $Αrchaeologist_Name ?></td> 
                            <td style="text-align:center;"><?php echo $Αrchaeologist_Surname ?></td>                                        
                            <td style="text-align:center;"><?php echo $Inspectorate_Οf_Monuments ?></td>  
                            <td style="text-align:center;"><?php echo $Submited_Date ?></td>  
                            <td style="text-align:center;"><?php echo $Height*$Length ?></td>                                      
                            <td style="text-align:center;"><a href="edit.php?PostID=<?php echo $ID ?>">Edit</a></td>
                            <td style="text-align:center;"><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></td>
                        </tr>              
                                    <!-- </div>     -->
                        <?php 
                            } 
                            mysqli_close($con); 
                        ?>
                </table>                   
    <div style='text-align:center;'>
        <a href= 'index.php'><button class='button'>Create new Record</button></a>
    </div>
    <div class='fixed'>
        <strong> AAA NAME SURNAME </strong><br>    
    </div>
</body>
</html>