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
                margin-left: 35%;
                margin-right: 35%;
                margin-bottom: 40px;
                padding: 30px;
                padding-bottom: 50px;
                background-color: rgba(51,51,51,0.8);
                border-radius: 6px;

                
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
                margin-top: 10px;
                margin-left: 25%;
            }

            #nut
            {
                display: flex;
                align-items:flex-end;
                justify-content:space-around 
            }
            .well {
                background: rgba(0, 0, 0, 0.7);
                border: none;
                height: 200px;
                margin-top:30px;
                border-radius: 4px;
                width: 300px;
                margin-left:30px;
                }
            h6
            {
                color: navajowhite;
                font-family:  monospace;
            }
            label
            {
                color:#ffbb2b;
                font-size: 13px;
                font-weight: 100;
            }
            h4 {
                color: #ffbb2b;
            }
            
        </style>


</head>
<body>

    <div id="check">
        <h2 style="display: flex; justify-content: center; color:orange;">Phòng: </h2>
        <hr style="color:white;">
        <div id="nut">
            <a href="admin.php">Quay Lại</a>
        </div>
        <?php
        $sql="SELECT * FROM phong WHERE trang_thai='true'";
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
                                <h4>".$row['loai_phong']."</h4><hr>
                                <h6>Ngày đặt: ".$row['ngay_dat']." and ngày trả: ".$row['ngay_tra']."</h6>
                                <h6>Họ và tên: ".$row['name']."</h6>
                                <h6>Điện thoại: ".$row['phone']."</h6>
                                <h6>trạng thái: ".$row['trang_thai']."</h6>
                            </div class='col-md-3'>
                            <a href='chinh_sua_phong_da_dat.php?id=".$row['id_phong']."'><button class='btn btn-primary button'>Sửa</button></a>
                            </div>
                        ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "không có thông tin phòng đã đặt";
            }
        }
        else
        {
            echo "không thể kết nối tới CSDL".$result;
        }
        
        
        
        
        
        ?>

        
    </div>



          
</body>
</html>