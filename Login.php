<?php session_start(); include_once 'class.user.php'; $user=new User(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập </title>

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
                height: 30px;
                border-radius: 4px;
            }

            button
            {
                margin-top: 40px;
                margin-left: 35%;
            }
            
        </style>
          <script language="javascript" type="text/javascript">
            function submitlogin() {
                var form = document.login;
                if (form.emailusername.value == "") {
                    alert("Nhập tài khoản của bạn.");
                    return false;
                } else if (form.password.value == ) {
                    alert("Nhập mật khẩu của bạn.");
                    return false;
                }
            }
        </script>

</head>
<body>

    <!--thanh header-->
    <div id="header">
        <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="DatPhong.php">Đặt phòng</a></li>
        <li><a class="active" href="Login.php">Admin</a></li>
        </ul>
    </div>
    <form action="" method="post" name="login">
        <div id="check">
            <h1 style="display: flex; justify-content: center; color:orange;">Đăng nhập</h1>
            <hr style="color:white;">
            <div class="time">
                <label  for="">Tài khoản:</label> <br>
                <input type="email" name= "emailusername">
                <p id="wrong_id" style=" color:red; font-size:12px; "></p>
            </div>

            <div class="time">
                <label for="">Mật khẩu:</label> <br>
                <input type="password"name= "password">
            </div>
            
            <div id="nut">
                <button  onclick="retrun(submitlogin())" class="btn btn-primary" type="submit"name= "submit"value = "login" >Đăng nhập</button>
            </div>
        </div>
        
        <?php if(isset($_REQUEST[ 'submit'])) { extract($_REQUEST); $login=$user->check_login($emailusername, $password); 
                        if($login) { echo "<script>location='admin.php'</script>"; } 
                    else{?>

                    <script type="text/javascript">
                        document.getElementById("wrong_id").innerHTML = "Sai tên tài khoản";
                    </script>

        <?php } }?>

        </form>

          
</body>
</html>