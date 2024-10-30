<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Comic </title>
    <link rel="stylesheet" href="Templates/style.css">
    
</head>

<body>


    <div id="wrapper">
        <div id="header">
            <a href="" class="logo">
                <img src="Templates/HinhAnh/logoPage.jpg" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="index.php?task=PageHome">Trang chủ</a>
                </div>

                

</ul>
</li>
                
                
                
            </div>
            <form  method="post">
            <div class="item" style="float: right;" >
                    <input type="text" style="width: 200px;" name="Search">
                   
                    
                    <input type="submit" value="Tìm kiếm" name="searchbtn" style="padding: 4px; color:aliceblue; background-color:rgb(38, 113, 211)"> 
                </div> </form>
            <div id="actions">
                <div class="item">
                    
                <a href="index.php?task=PageLoggin">Đăng nhập / Đăng kí</a> 
                </div>
               
            </div>
        </div>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>WEBSITE</span>
                    <br>
                    <span>Seiichi Comic</span>
                </h2>
                <p> Trang Web đọc truyện trực tuyến chất lượng nhất.
                    Với những đầu truyện được UpLoad không ngừng từ các nhà xuất bản danh tiếng và các bộ truyện được dịch sang tiếng việt từ các dịch giả dày dặn kinh nghiệm.
                    

                </p>
               <!-- <button>Đặt chỗ ngay</button> -->
            </div>
            <div class="box-right">
                <img src="Templates/HinhAnh/a.jpg" alt="">
                <img src="Templates/HinhAnh/b.jpg" alt="">
                <img src="Templates/HinhAnh/c.jpg" alt="">
                <!-- <img src="Templates/HinhAnh/d.jpg" alt="">     -->
                <!-- <img src="Templates/HinhAnh/1.jpg" alt="">           -->
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="Templates/HinhAnh/to_bottom.png" alt="">
                </a>
            </div>
        </div>
        <div id="wp-products">
            
            <ul id="list-products"> 
            <?php
                    foreach ($result as $row){
                      

                    ?>
                <div class="item" style="overflow: hidden;">
                    
                    <a href="index.php?task=GuestTTtruyen&IDtr=<?php echo$row['ID']?>"><img src="Templates/HinhAnh/<?php echo $row['AnhBia'] ?>" alt=""> </a>          
                    <div class="name"><a href=""><?php  echo $row['TenTruyen']?></a></div>
                    
                </div>
                
                <?php
                    }
                ?>


             
            </ul>
       
        </div>
        <!-- <div class="list-page">
                <div class="item">
                    <a href="">1</a>
                </div>
                <div class="item">
                    <a href="">2</a>
                </div>
                
            </div> -->



        <div id="footer">
            <div class="box">
               
                <p>Chúc các bạn đọc có những phút giây đọc truyện vui vẻ nhất</p>
            </div>
            
            <div class="box">
                <h3>LIÊN HỆ</h3>
                <form action="">
                    <h5 style="margin-top: 17px; font-size: 25px;">Email: hmayqyb@gmail.com</h5>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>