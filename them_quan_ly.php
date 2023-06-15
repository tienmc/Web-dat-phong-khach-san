<?php
include_once 'class.user.php'; 
$user=new User(); 
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $register=$user->them_quan_ly($name, $username, $password, $email) ;
    if($register) 
    { 
        echo "
        <script type='text/javascript'>
            alert('Thêm thành công');
        </script>"; 
                echo "
        <script type='text/javascript'>
            window.location.href = '/admin.php';
        </script>"; 
    } 
    else 
    {
        echo "
        <script type='text/javascript'>
            alert('Không thể kết nối với CSDL');
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
    <title>Thêm quản lý</title>

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
        <script language="javascript" type="text/javascript">
        function validate() {
            var form = document.reg;
            if (form.name.value == "") {
                alert("vui lòng nhập họ và tên.");
                return false;
            } else if (form.name.value == "") {
                alert("vui lòng nhập tên đăng nhập.");
                return false;
            } else if (form.pass.value == "") {
                alert("Enter vui lòng nhập mật khẩu.");
                return false;
            } else if (form.email.value == "") {
                alert("Enter vui lòng nhập email.");
                return false;
            }
        }
    </script>  

</head>
<body>

    <div id="check">
        <h2 style="display: flex; justify-content: center; color:orange;">Thêm quản lý</h2>
        <hr style="color:white;">
        <form action="" method="post" >
        <div class="time">
            <label  for="">Họ Và Tên:</label> <br>
            <input type="text" name="fullname">
        </div>

        <div class="time">
            <label for="">Tên Đăng Nhập:</label> <br>
            <input type="text"name="name">
        </div>
        
        <div class="time">
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>

        <div class="time">
            <label for="">Mật Khẩu:</label>
            <input type="password" name="password">
        </div>
        
        <div id="nut">
            <button class="btn btn-primary" type="submit" name="submit" onclick = "validate()">Đăng ký</button>
            <a href="admin.php">Quay Lại</a>
        </div>
        </form>
        
    </div>



          
</body>
</html>