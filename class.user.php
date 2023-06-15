<?php
    include "db_config.php";
        class user
        {
            public $db;
            public function __construct()
            {
                $this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,'khach_san');
                if(mysqli_connect_errno())
                {
                    echo "Không thể kết nối tới CSDL";
                    exit;
                }
            }
            public function them_quan_ly($name, $username, $password, $email)
            {
                //$password=md5($password);
                $sql="SELECT * FROM quan_ly WHERE name='$username' OR email='$email'";
                $check=$this->db->query($sql);
                $count_row=$check->num_rows;
                if($count_row==0)
                {
                    $sql1="INSERT INTO quan_ly SET name ='$username', pass='$password', fullname='$name', email='$email'";
                    $result= mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Không thể chèn dữ liệu");
                    return $result;
                }
                else
                {
                    return false;
                }
            }
            
            
            public function add_room($roomname, $so_phong, $so_giuong, $loai_giuong,$tien_ich,$gia)
            {
                
                    $available=$so_phong;
                    $booked=0;
                    
                    $sql="INSERT INTO loai_phong SET ten_loai='$roomname', kha_dung='$available', trang_thai='$booked', so_phong='$so_phong', so_giuong='$so_giuong', loai_giuong='$loai_giuong', tien_ich='$tien_ich', gia='$gia'";
                    $result= mysqli_query($this->db,$sql) or exit(mysqli_connect_errno()."Không thể chèn dữ liệu");
                
                
                    // for($i=0;$i<$so_phong;$i++)
                    // {
                    //     $sql2="INSERT INTO phong SET loai_phong='$roomname', trang_thai='false'";
                    //     mysqli_query($this->db,$sql2); 
                    // }
                
                    return $result;
                

            }
            
            public function check_room($checkin, $checkout)
            {
                
                
                   $sql="SELECT DISTINCT loai_phong FROM phong WHERE id_phong NOT IN (SELECT DISTINCT id_phong FROM phong WHERE (ngay_dat <= '$checkin' AND ngay_tra >='$checkout') OR (ngay_dat >= '$checkin' AND ngay_tra <='$checkout') OR (ngay_dat <= '$checkin' AND ngay_tra >='$checkin') )";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Truy vấn không thành công!");;

                
                    return $check;
                

            }
            
            
            
            
            public function dat_phong($checkin, $checkout, $name, $phone,$ten_loai)
            {
                    
                    $sql="SELECT * FROM phong WHERE loai_phong='$ten_loai' AND (id_phong NOT IN (SELECT DISTINCT id_phong FROM phong WHERE ngay_dat <= '$checkin' AND ngay_tra >='$checkout'))";
                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Không thể kết nối đến CSDL");;
                 
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $id=$row['id_phong'];
                        
                        $sql2="UPDATE phong  SET ngay_dat='$checkin', ngay_tra='$checkout', name='$name', phone='$phone', trang_thai='true' WHERE id_phong=$id";
                         $send=mysqli_query($this->db,$sql2);
                        if($send)
                        {
                            $result="phòng của bạn đã được đặt!";
                        }
                        else
                        {
                            $result="Đặt phòng không thành công!";
                        }
                    }
                    else                       
                    {
                        $result = "Phòng này không khả dụng!";
                    }
                    
                    
                
                    return $result;
                

            }
            
            
            
            
             public function cap_nhat_phong($checkin, $checkout, $name, $phone,$id)
            {
                                
                        $sql2="UPDATE phong  SET ngay_dat='$checkin', ngay_tra='$checkout', name ='$name', phone='$phone', trang_thai='true' WHERE id_phong=$id";
                         $send=mysqli_query($this->db,$sql2);
                        if($send)
                        {
                            $result="phòng của bạn đã được cập nhật!";
                        }
                        else
                        {
                            $result="Cập nhập không thành công!";
                        }
                    
                
                    return $result;
                

            }
            
            
            
            
            
             public function cap_nhat_loai_phong($so_phong, $so_giuong, $loai_giuong,$tien_ich,$gia,$ten_loai,$loai_phong)
            {
                    
                 
                        $sql2="DELETE FROM phong WHERE loai_phong='$loai_phong'";
                        mysqli_query($this->db,$sql2);
                 
                 
                        for($i=0;$i<$so_phong;$i++)
                        {
                            $sql3="INSERT INTO phong SET loai_phong='$ten_loai', trang_thai='false'";
                            mysqli_query($this->db,$sql3);

                        }

                 
                        $available=$so_phong;
                        $booked=0;
                 
                        $sql="UPDATE loai_phong  SET ten_loai='$ten_loai', kha_dung='$available', trang_thai='$booked', so_phong='$so_phong', so_giuong='$so_giuong', loai_giuong='$loai_giuong', tien_ich='$tien_ich', gia='$gia' WHERE ten_loai='$loai_phong'";
                         $send=mysqli_query($this->db,$sql);
                        if($send)
                        {
                            $result="phòng của bạn đã được cập nhật!";
                        }
                        else
                        {
                            $result="Cập nhập không thành công!";
                        }
  
                    
                
                    return $result;
                

            }
            
            
            
            
            
            public function check_login($emailusername,$password)
            {
                //$password=md5($password);
                $sql2="SELECT id from quan_ly WHERE email='$emailusername' OR name='$emailusername' and pass='$password'";
                $result=mysqli_query($this->db,$sql2);
                $user_data=mysqli_fetch_array($result);
                $count_row=$result->num_rows;
                
                if($count_row==1)
                {
                    $_SESSION['login']=true;
                    $_SESSION['id']=$user_data['id'];
                    return true;    
                }
                else
                {
                    return false;
                }
            }

            public function get_session()
            {
                return $_SESSION['login'];
            }
            public function user_logout()
            {
                $_SESSION['login']=false;
                session_destroy();
            }
        }

?>