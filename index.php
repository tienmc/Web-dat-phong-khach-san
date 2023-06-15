<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>



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
            .gioi_thieu
            {
                margin-top: 50px;
                margin-left: 10%;
                margin-right: 10%;
                padding: 30px;
                background-color: rgba(51,51,51,0.8);
                border-radius: 6px;
            }

            h2
            {
                font-family: monospace;
            }

            p
            {
                color: orange;
                font-family: monospace;
                font-size: 15px;
            }

            body
            {
                background-image: url(img/background.jpg);
                background-attachment: fixed;
            }

            #thong_tin
            {
                margin-top: 50px;
                display: flex;
                justify-content: space-around;
            }

            .last
            {
                padding: 30px;
                background-color: rgba(51,51,51,0.8);
                border-radius: 6px;
                margin-bottom: 30px;
            }

            #animation
            {
                display: flex;
                justify-content: center;
                background-color: white;
                padding: 2% 0 ;
                margin: 30px 10% 0 10%;
                border-radius: 4px;
            }

            .anh_dong
            {
                width:95%; height:450px;
                background-color: white;
                position: relative;
                animation-name: example;
                animation-duration: 15s;
                animation-iteration-count: infinite;
                background-repeat: no-repeat;
                
            }

            @keyframes example {
                
            0%   {background-image: url(img/animation\ 1.jpg);}
            25%  {background-image: url(img/animation\ 2.jpg);}
            50%  {background-image: url(img/animation\ 3.jpg);}
            100% {background-image: url(img/animation\ 4.jpg);}
            }
        </style>


</head>
<body>

    <!--thanh header-->
    <div id="header">
        <ul>
        <li><a class="active" href="index.php">Trang chủ</a></li>
        <li><a href="DatPhong.php">Đặt phòng</a></li>
        <li><a href="Login.php">Admin</a></li>
        </ul>
    </div>


        <div id="animation">
        <div class="anh_dong"></div>
        </div>

        <div class="gioi_thieu">
        <h2><strong style="color: orange">Giới thiệu</strong></h2><br>
        <p>Bạn đang chuẩn bị cho chuyến du lịch của mình nhưng chưa biết đặt phòng nào tốt nhất cho mình? Hãy đến với chúng tôi, website đặt phòng trực tuyến của chúng tôi đảm bảo chất lượng và uy tín sẽ giúp bạn có một chuyến du lịch thật vui vẻ. </p>
        <br>
        <p>Website được mọi người yêu thích lựa chọn để đặt phòng khách sạn với giá rẻ. Website của chúng tôi được đánh giá tốt ở dịch vụ hỗ trợ khách hàng nhanh chóng. Bên cạnh đó, thông tin phòng khách sạn được mô tả rõ ràng.</p>
        <br>
        <p>Giao diện và thiết kế cũng được thiết kế rẩt thân thiện, dễ sử dụng, phù hợp với người dùng Việt.</p>
        </div>


        <div id="thong_tin">
            <div class="last">
                <h2><strong style="color: orange">Liên hệ</strong></h2> <hr>
                <p>
                    Địa chỉ : 175 Tây Sơn, Đống Đa, Hà Nội<br>
                    Mail : tienmc001@gmail.com <br>
                </p>
            </div>

            <div class="last">
                <h2><strong style="color: orange">Phát hành</strong></h2><hr>
                   <p> Nhóm 3 - Lớp 61TH6 - Trường đại học Thủy Lợi </p>
            </div>
        </div>


          
</body>
</html>