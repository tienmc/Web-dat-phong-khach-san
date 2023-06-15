<?php
    include_once 'class.user.php'; 
    $user=new User(); 
    if(isset($_REQUEST[ 'submit'])) 
    { 
        $ten_loai=$_GET['ten_loai'];
        extract($_REQUEST); 
        $result=$user->dat_phong($checkin, $checkout, $name, $phone,$ten_loai);
        if($result)
        {
            echo "<script type='text/javascript'>
                  alert('".$result."');
             </script>";
        }


        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt phòng</title>

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
                margin-top: 40px;
            }

            #nut
            {
                display: flex;
                align-items:flex-end;
                justify-content:space-around 
            }
            
        </style>


</head>
<body>
    
        <div id="check">
            <h2 style="display: flex; justify-content: center; color:orange;">Đặt phòng:</h2>
            <hr style="color:white;">
            <form action=""method="post" name="loai_phong">
            <div class="time">
                <label  for="">Họ Và Tên:</label> <br>
                <input type="text" name="name">
            </div>

            <div class="time">
                <label for="">Số Điện Thoại:</label> <br>
                <input type="text" name="phone">
            </div>
            
            <div class="time">
                <label for="">Ngày đặt:</label>
                <input type="date"name="checkin">
            </div>

            <div class="time">
                <label for="">Ngày trả:</label>
                <input type="date" name="checkout">
            </div>
            
            <div id="nut">
                <button class="btn btn-primary" type="submit" name="submit">Đặt phòng</button>
                <a href="DatPhong.php">Quay Lại</a>
            </div>
            
            
        </div>
    </form>








</body>
</html>