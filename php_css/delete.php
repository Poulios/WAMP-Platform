<?php 
$con=mysqli_connect("localhost","root","root","finds");
if(!$con)
{
    die(" Connection Error ");
}

if(isset($_GET['Del']))
{
    $ID = $_GET['Del'];
    $query = " delete from records where ID = '".mysqli_real_escape_string($con, $ID)."' ";
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

?>