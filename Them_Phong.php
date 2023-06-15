<?php
include_once 'class.user.php'; 
$user=new User(); 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->add_room($roomname, $so_phong, $so_giuong, $loai_giuong,$tien_ich,$gia);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Thêm phòng thành công!');
            </script>";
    }
    else
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
    <title>Thêm Phòng</title>

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
                margin-bottom: 40px ;
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
    <form action=""method="post" name="loai_phong">
        <div id="check">
            <h2 style="display: flex; justify-content: center; color:orange;">Thêm Phòng</h2>
            <hr style="color:white;">
            <div class="time">
                <label  for="">Tên Phòng:</label> <br>
                <input type="text" name="roomname">
            </div>

            <div class="time">
                <label for="">Số Phòng:</label>
                <select name = "so_phong">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div class="time">
                <label for="">Số Giường:</label>
                <select name="so_giuong">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div class="time">
                <label for="">Loại Giường:</label>
                <select name="loai_giuong">
                    <option value="Giường đơn">Giường đơn</option>
                    <option value="Giường đôi">Giường đôi</option>
                </select>
            </div>

            <div class="time">
                <label for="">Tiện ích:</label> <br>
                <textarea style="width: 100%; border-radius: 4px;"  rows="5" name="tien_ich"></textarea>
            </div>

            <div class="time">
                <label  for="">Giá phòng một đêm:</label> <br>
                <input type="text" name="gia">
            </div>

            <div id="nut">
                <button class="btn btn-primary" type="submit"name= "submit">Thêm phòng</button>
                <a href="admin.php">Quay Lại</a>
            </div>
            
            
        </div>

    </form>

          
</body>
</html>