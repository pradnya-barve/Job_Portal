<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .navbar{
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .banner{
            background-image: url('images/career.jpg');
            background-size: cover;
            padding-top: 100px;
            padding-left: 200px;
            padding-bottom: 70px;
        }
        .banner h2{
            font-size: 50px;
            color: white;
        }
        .banner p{
            color: white;
        }
        .content{
            width: 28%;
            margin-left: 10px;
            margin-top: 30px;
            height: auto;
            padding: 10px;
            border: 2px solid black;
            text-align: justify;
            display:grid;
        }
                
        .content:hover{
            box-shadow: 10px 10px 8px 10px #888888;
        }
        .content h2{
            text-align: center;
            font-size: 30px;
        }
        .content h3{
            text-align: center;
            font-size: 25px;
        }
        .content p{
            font-size: 15px;
        }
        
    </style>
    <title>Career</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="banner">
                <h2>Job Portal</h2>
                <p>Best job available matching your skills</p>
            </div>
        </div>

        <div class="content">
            <?php
                $sql="Select cname,position,Jdesc,skills,CTC from jobs";
                $result=mysqli_query($conn,$sql);

                        //$result = $conn->query("Select cname,position,CTC from jobs");
                        
                if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                        echo '
                            <div class="col-md-4>
                                <div class="jobs">
                                    <h3 style="text-align: center;">'.$rows['position'].'</h3>
                                    <h4 style="text-align: center;">'.$rows['cname'].'</h4>
                                    <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
                                    <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
                                    <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                                        Apply Now
                                    </button>
                                </div>
                            </div>';
                        
                        }}
                        
            ?>
        </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for job</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                    
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Applying for</label>
                                    <input type="text" class="form-control" name="apply">
                                </div>
                                    
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Qualification</label>
                                    <input type="text" class="form-control" name="qual">
                                </div>
                                    
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Year passout</label>
                                    <input type="text" class="form-control" name="year">
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="first" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>