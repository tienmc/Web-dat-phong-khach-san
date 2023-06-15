<?php
    include_once 'class.user.php'; 
    $user=new User(); 
 if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_room($checkin, $checkout);
        if(!($result))
        {
            echo $result;
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Phòng</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--CSS header-->
        <style>
        #header
        {
            display: flex;
        justify-content: center;
        
        }

        ul {
        list-style-type: none;
        margin-top: -8px;
        padding: 0;
        overflow: hidden;
        background-color: #333;

        display: flex;
        justify-content: center;

        border-radius: 8px;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 20px 172px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }

        .active {
        background-color: black;
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
                height: 28px;
                border-radius: 4px;
            }

            button
            {
                margin-top: 40px;
                margin-left: 25%;
            }
            
          
            .well {
                background: rgba(0, 0, 0, 0.7);
                border: none;
                height: 200px;
                margin-top:30px;
                border-radius: 4px;
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

    <!--thanh header-->
    <div id="header">
        <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a class="active" href="DatPhong.php">Đặt phòng</a></li>
        <li><a href="Login.php">Admin</a></li>
        </ul>
    </div>
    <form action="" method="post" name="loai_phong">
        <div id="check">
            <div class="time">
                <label for="">Ngày đặt:</label>
                <input type="date"name="checkin">
            </div>

            <div class="time">
                <label for="">Ngày trả:</label>
                <input type="date" name="checkout">
            </div>
            
            <div id="nut">
                <button class="btn btn-primary" type="submit" name="submit">Kiểm tra phòng trống</button>
            </div>
        </div>
    </form>
<?php   
        
        if(isset($_REQUEST[ 'submit']))
        {
           if(mysqli_num_rows($result) > 0)
           {
               while($row = mysqli_fetch_array($result))
               {
                   
                   $ten_loai=$row['loai_phong'];
                   $sql="SELECT * FROM loai_phong WHERE ten_loai='$ten_loai'";
                   $query = mysqli_query($user->db, $sql);
                   $row2 = mysqli_fetch_array($query);
                   
                  echo "
                           <div class='row'>
                           <div class='col-md-4'></div>
                           <div class='col-md-5 well'>
                               <h4>".$row2['ten_loai']."</h4><hr>
                               <h6>Loại giường:".$row2['so_giuong']." ".$row2['loai_giuong']." bed.</h6>
                               <h6>Phòng khả dụng: ".$row2['kha_dung']."</h6>
                               <h6>Tiện ích: ".$row2['tien_ich']."</h6>
                               <h6>giá: ".$row2['gia']." VND/đêm.</h6>
                           </div>
                           <div class='col-md-3'>
                               <a href='./Link_Dat_Phong.php?ten_loai=".$row2['ten_loai']."'><button class='btn btn-primary button'>Đặt phòng</button></a>
                           </div>   
                           </div>
                           
                           
                       
                   
                        ";
                   
                   
               }
               
               
                         
           }
        }
       
       
?>

   



</body>
</html>