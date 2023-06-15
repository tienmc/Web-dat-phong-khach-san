<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--CSS header-->
        <style>
        #header
        {
            display: flex;
        justify-content: center;
        
        }

        #header ul {
        list-style-type: none;
        margin-top: -8px;
        padding: 0;
        overflow: hidden;
        background-color: #333;

        display: flex;
        justify-content: center;

        border-radius: 8px;
        }

        #header li {
        float: left;
        }

        #header li a {
        display: block;
        color: white;
        text-align: center;
        padding: 20px 172px;
        text-decoration: none;
        }

        #header li a:hover {
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

            body
            {
                background-image: url(img/background.jpg);
                background-attachment: fixed;
            }

            .a{
                color: orange;
            }
            .a:hover
            {
                color: rgb(250, 236, 211);
            }
            .logout{
                margin: 5px;
            }
        </style>

</head>
<body>

    <!--thanh header-->
    <div id="header">
        <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="DatPhong.php">Đặt hàng</a></li>
        <li><a class="active" href="admin.php">Admin</a></li>
        </ul>
    </div>

    <div id="check" >
        <h1 style="color: orange;">Quản lý hàng</h1> <hr style="color:white;">
            <ul style="color: orange;">
                <li><a class="a" href="Them_Phong.php">Thêm hàng</a></li>
                <li><a class="a" href="hien_thi_phong_chua_dat.php">Chỉnh sửa hàng</a></li>
                <li><a class="a" href="hien_thi_phong_da_dat.php">Chỉnh sửa hàng đã đặt</a></li>
            </ul>
    </div>

    <div id="check" >
        <h1 style="color: orange;">Thêm hàng lý</h1> <hr style="color:white;">
            <ul style="color: orange;">
                <li><a class="a" href="them_quan_ly.php">Thêm quản lý</a></li>
            </ul>
    </div>
    <div class="logout">
        <a href="index.php?q=logout">
        <button type="button" class="btn btn-danger">Đăng xuất</button>
        </a>
    </div>



          
</body>
</html>