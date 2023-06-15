<?php
include_once 'class.user.php'; 
$user=new User();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị phòng</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <style>

        a
        {
            text-decoration: none;
            color: orange;
            margin-top:10px;
            
        }

        a:hover 
        {
            color: rgb(236, 220, 192);
        }


        </style>


        <!--CSS nội dung-->
        <style>
            #check
            {
                margin-top: 50px;
                margin-left: 25%;
                margin-right: 35%;
                margin-bottom: 40px;
                padding: 30px;
                padding-bottom: 50px;
                background-color: rgba(51,51,51,0.8);
                border-radius: 6px;
                width: 50%;

                
            }

            label
            {
                color: orange;
                font-family: monospace;
                font-size: 15px;
                margin-top: 5px;
            }

            body
            {
                background-image: url(img/background.jpg);
                background-attachment: fixed;
            }


            .time
            {
                 margin-top: 20px; 
            }

            input
            {
                width: 100%;
                height: 30px;
                border-radius: 4px;
            }

            button
            {
                margin-top:20px;
                margin-left:45%;
            }

            .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
            margin-left:60px;
            margin-top:40px;
            }   
            
            h4 {
                color: #ffbb2b;
            }
            h6
            {
                color: navajowhite;
                font-family:  monospace;
            }
            
            
        </style>


</head>
<body>

    <div id="check">
        <h2 style="display: flex; justify-content: center; color:orange;">Phòng: </h2>
        <hr style="color:white;">
        <a href="admin.php"style = "padding-left: 46%">Quay Lại</a>
        <?php
        $sql="SELECT * FROM loai_phong";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['ten_loai']."</h4><hr>
                                <h6>Số giường: ".$row['so_giuong']." ".$row['loai_giuong'].".</h6>
                                <h6>Tiện ích: ".$row['tien_ich']."</h6>
                                <h6>giá: ".$row['gia']." VND/đêm.</h6>
                            </div>
                            <a href='Sua_Phong.php?ten_loai=".$row['ten_loai']."'><button class='btn btn-primary button'>Sửa</button></a>
                            </div>
                                              
                         ";                   
                }                        
            }
            else
            {
                echo "Không có dữ liệu!";
            }
        }
        else
        {
            echo "không thể kết nối đến CSDL".$result;
        }   
        ?>    
    </div>      
</body>
</html>