<?php 
    $con=mysqli_connect("localhost","root","root","finds");
    if(!$con)
    {
        die(" Connection Error ");
    }
?>

<?php    
    if(isset($_POST['submit']))
    {
        if(empty($_POST['Category']) || empty($_POST['Title']) || empty($_POST['Estimated_Time']) || empty($_POST['Archaeological_Place']) || empty($_POST['Description']) || empty($_POST['Height']) || empty($_POST['Length']) || empty($_POST['Αrchaeologist_Name']) || empty($_POST['Αrchaeologist_Surname']) || empty($_POST['Inspectorate_Οf_Monuments']) )
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
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
            
            $date = new DateTime("now", new DateTimeZone('Europe/Athens') );
            $Submited_Date = $date->format('d-m-Y H:i:s');      
                 
 
           $query = " insert into records (Category, Title, Estimated_Time, Archaeological_Place, Description, Height, Length, Αrchaeologist_Name, Αrchaeologist_Surname, Inspectorate_Οf_Monuments, Submited_Date) values('$Category','$Title', '$Estimated_Time', '$Archaeological_Place', '$Description', '$Height', '$Length', '$Αrchaeologist_Name', '$Αrchaeologist_Surname', '$Inspectorate_Οf_Monuments', '$Submited_Date' )";
                     
           mysqli_set_charset($con,"utf8");
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
    }
    else
    {
        header("location:index.php");
    }
 ?>