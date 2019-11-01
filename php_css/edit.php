<?php 
 
    $con=mysqli_connect("localhost","root","root","finds");
    if(!$con)
    {
        die(" Connection Error ");
    }
    $ID = $_GET['PostID'];
    $query = " select * from records where ID= '".mysqli_real_escape_string($con, $ID)."'";
    mysqli_set_charset($con,"utf8");   
    
    $result = mysqli_query($con,$query);
 
    while($row=mysqli_fetch_array($result))
    { 
        $ID = htmlspecialchars($row['ID']);
        $Category = htmlspecialchars($row['Category']);
		$Title = htmlspecialchars($row['Title']);
        $Estimated_Time = htmlspecialchars($row['Estimated_Time']);  
        $Archaeological_Place = htmlspecialchars($row['Archaeological_Place']);
		$Description = htmlspecialchars($row['Description']);
		$Height = htmlspecialchars($row['Height']);
        $Length = htmlspecialchars($row['Length']);
		$Αrchaeologist_Name = htmlspecialchars($row['Αrchaeologist_Name']);
		$Αrchaeologist_Surname = htmlspecialchars($row['Αrchaeologist_Surname']);
        $Inspectorate_Οf_Monuments = htmlspecialchars($row['Inspectorate_Οf_Monuments']); 
    }
 
?>
<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
    <style>
      div.fixed {
        position: fixed;
        bottom: 10px;
        right: 0;
        }
              
    </style>
</head>
<body>        
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Record </h3>
                        </div>
                        <div class="card-body">
 
                            <form action="update.php?ID=<?php echo $ID ?>" method="POST">
                                <input type="hidden" class="form-control mb-2" placeholder=" ID " name="ID" value="<?php echo $ID ?>"/>
                                <input type="text" class="form-control mb-2" placeholder=" Category " name="Category" value="<?php echo $Category ?>"/>
                                <input type="text" class="form-control mb-2" placeholder=" Title " name="Title" value="<?php echo $Title ?>"/>
                                <input type="text" class="form-control mb-2" placeholder=" Estimated_time " name="Estimated_Time" value="<?php echo $Estimated_Time ?>"/>
                                <input type="text" class="form-control mb-3" placeholder=" Archaeological_Place " name="Archaeological_Place" value="<?php echo $Archaeological_Place ?>"/>
                                <textarea rows="5" class="form-control mb-3" placeholder=" Description " name="Description"><?php echo $Description ?></textarea>
								<input type="text" class="form-control mb-3" placeholder=" Height " name="Height" value="<?php echo $Height ?>"/>
                                <input type="text" class="form-control mb-3" placeholder=" Length " name="Length" value="<?php echo $Length ?>"/>
                                <input type="text" class="form-control mb-3" placeholder=" Αrchaeologist_Name " name="Αrchaeologist_Name" value="<?php echo $Αrchaeologist_Name ?>"/>
								<input type="text" class="form-control mb-3" placeholder=" Αrchaeologist_Surname " name="Αrchaeologist_Surname" value="<?php echo $Αrchaeologist_Surname ?>"/>
                                <input type="text" class="form-control mb-3" placeholder=" Inspectorate_Οf_Monuments " name="Inspectorate_Οf_Monuments" value="<?php echo $Inspectorate_Οf_Monuments ?>"/>
                                <button class="btn btn-primary" name="update">Update</button>
                                <div class='fixed'>
                                    <strong> ID:AAA NAME SURNAME </strong><br>
                                </div> 
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>