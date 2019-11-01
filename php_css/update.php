<?php 
    $con=mysqli_connect("localhost","root","root","finds");
    if(!$con)
    {
        die(" Connection Error ");
    }
 
    if(isset($_POST['ID']))    {
        
        $ID = mysqli_real_escape_string($con, $_POST['ID']);
        $Category = mysqli_real_escape_string($con, $_POST['Category']);
		$Title = mysqli_real_escape_string($con, $_POST['Title']);
        $Estimated_Time = mysqli_real_escape_string($con, $_POST['Estimated_Time']);  
        $Archaeological_Place = mysqli_real_escape_string($con, $_POST['Archaeological_Place']);
		$Description = mysqli_real_escape_string($con, $_POST['Description']);
		$Height = mysqli_real_escape_string($con, $_POST['Height']);
        $Length = mysqli_real_escape_string($con, $_POST['Length']);
		$Αrchaeologist_Name = mysqli_real_escape_string($con, $_POST['Αrchaeologist_Name']);
		$Αrchaeologist_Surname = mysqli_real_escape_string($con, $_POST['Αrchaeologist_Surname']);
        $Inspectorate_Οf_Monuments = mysqli_real_escape_string($con, $_POST['Inspectorate_Οf_Monuments']);     
        
        $query = " update records set Category='".$Category."', Title='".$Title."', Estimated_Time='".$Estimated_Time."', Archaeological_Place ='".$Archaeological_Place."', Description = '".$Description."', Height='".$Height."', Length='".$Length."', Αrchaeologist_Name='".$Αrchaeologist_Name."', Αrchaeologist_Surname ='".$Αrchaeologist_Surname."', Inspectorate_Οf_Monuments ='".$Inspectorate_Οf_Monuments."' where ID= $ID";
		mysqli_set_charset($con,'utf8');
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
    mysqli_close($con);  
?>