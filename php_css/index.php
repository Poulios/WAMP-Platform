<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Record Find's Elements</title>

    <style>
        div.fixed {
        position: fixed;
        bottom: 10px;
        right: 0;
        }

        .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 19px;
        margin: 4px 2px;
        cursor: pointer;
        }              
    </style>
</head>
<body> 
    <div class="bg">          
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Record Find's Elements</h3>
                    </div>
                        <div class="card-body"> 
                            <form action="server.php" method="POST">
                                <!-- <input type="int" class="form-control mb-3" placeholder=" ID " name="ID"> -->
                                <input type="text" class="form-control mb-3" placeholder=" Category " name="Category">
                                <input type="text" class="form-control mb-3" placeholder=" Title " name="Title">
								<input type="text" class="form-control mb-3" placeholder=" Estimated_Time " name="Estimated_Time">                                                               
                                <input type="text" class="form-control mb-3" placeholder=" Archaeological_Place " name="Archaeological_Place">
                                <textarea rows="5" class="form-control mb-3" placeholder=" Description " name="Description"></textarea>
								<input type="text" class="form-control mb-3" placeholder=" Height (m) (use dot for decimal number) " name="Height">
                                <input type="text" class="form-control mb-3" placeholder=" Length (m) (use dot for decimal number)" name="Length">
                                <input type="text" class="form-control mb-3" placeholder=" Αrchaeologist_Name " name="Αrchaeologist_Name">
								<input type="text" class="form-control mb-3" placeholder=" Αrchaeologist_Surname " name="Αrchaeologist_Surname">
                                <input type="text" class="form-control mb-3" placeholder=" Inspectorate_Οf_Monuments " name="Inspectorate_Οf_Monuments">   
                                <button class="btn btn-primary" name="submit">Submit</button>

                                <div class='fixed'>
                                    <strong> ID:AAA NAME SURNAME </strong><br>                                 
                                </div>    
                            </form>
                        </div> 
                </div>
            </div>
        </div>
    </div>   
        
    <div style='text-align:center;'>
        <a href= 'view.php'><button class='button'> View Existing Records</button></a>
    </div>
</body>
</html>