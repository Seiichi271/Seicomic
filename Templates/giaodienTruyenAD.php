<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Templates/styleTTtruyen.css">
</head>
<body>
<form action="" method = "POST" action = "/Models/Modell.php" enctype= "multipart/form-data" >
<div id="wrapper">
        <div id="header">
            <a href="" class="logo">
                <img src="Templates/HinhAnh/logoPage.jpg" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="index.php?task=PageHomeAdmin">Trang chủ</a>
                </div>


                
                <div class="item">
                    <a href="index.php?task=QlyTruyen">Quản lý truyện</a>
                </div>
                
            </div>
            <div class="item" style="float: right;" >
                    <input type="text" style="width: 200px;"> <a href="">Tìm kiếm</a>
                </div>
            <div id="actions">
                <div class="item">
                    
                  <a href="index.php?task=PageHome">Đăng xuất</a> 
                </div>
               
            </div>
        </div>
     
     ?>
<div class="tong">
<?php 
foreach($resultTTt as $row){
?>
<div class="thongtintruyen"><b>Thông tin truyện.</b></div>          
    <div class="trai"> 
<div class="tenT">
<a href=""><?php echo $row['TenTruyen']?></a>
</div>


<span class="info">Thể Loại: <?php echo $row['TheLoai'] ?></span>

<p><span class="info">Tác giả: </span><span><a href=""><?php echo $row['TacGia']?></span> </a></p>


<p><span class="info">Thực hiện:</span> <a href=""><?php echo $row['NguoiTH']?></a></p>
<p>
<span class="info">Tình Trạng: </span>
<span><a href=" "> 
    <?php 
    if($row['TrangThai'] == 0){
        echo "Đã hoàn thành";
    }
    elseif ($row['TrangThai'] == 1){
        echo "Đang tiến hành";
    }
    else echo "Tạm ngưng";
    ?></a></span>
</p>

<p><span class="info">Nội dung:</span> <br><p style="line-height: 22px;"><?php echo $row['TomTat']?></p></p>



 

</div>

<?php }?>
<?php 
foreach($chap as $row){
    foreach($resultTTt as $r){
?>

        <div class="phai">
        
        <a href="index.php?task=ADDoctruyen&IDtr=<?php echo $row['IDtruyen']?>&IDchap=<?php echo $row['IDc']?>"><img src="Templates/HinhAnh/<?php echo $r['AnhBia']?>" alt="" style="width: 220px;">
            <h4>Đọc truyện</h4></a>
        </div>
        <?php }}?>
</div>  



<div class="chuong"  >
    <p>DANH SÁCH CHƯƠNG</p>
<div> 

<table>
    <?php foreach($resultCH as $row){  ?>
<tr>
    <td style="width: 70%; ">
        <a href="index.php?task=ADDoctruyen&IDtr=<?php echo $row['IDtruyen']?>&IDchap=<?php echo $row['IDc']?>"><h2  title="" style="float: left;"><?php echo $row['TenChap'] ;?></h2></a>
        <hr color="#2c2c2c" />
    </td>
    <td style="width: 10%; color:aliceblue"><?php echo $row['created'] ;?></td>
    

</tr> 
<?php } ?>

</table>

</div> 

</div>


</div>

</body>
</html>