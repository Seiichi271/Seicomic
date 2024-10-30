
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>HentaiVN - Quản Lý Truyện</title>
<link rel="stylesheet" href="Templates/uploadCSS.css">
<link rel="stylesheet" href="Templates/AddChap.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>



<div style="position: absolute; left: 95; top: 30;">
<span style="float: right;line-height: 30px;margin-right: 300px;font-size: 13px;color: #0D4AB4;font-weight: bold;">

</div>
</div>
<div id="h_nav">
<div id="left_links">
<a href="index.php?task=PageHomeAdmin" title="Trang chủ" target="_blank">Trang chủ</a>
</div>
<div id="left_links">
<a href="index.php?task=QlyTruyen" title="Danh sách truyện">Danh sách truyện</a>
</div>
<div id="left_links">
<a href="index.php?task=pageUpload" title="Đăng truyện" style="color: #2196F3;"><b>+Thêm Truyện Mới</b></a>
</div>


</div>
</div>
<div id="main">

<div id="contentwrapper">
<div id="content">
<h5>DANH SÁCH CHAPTER</h5>
<table style "width: 100%" border="1" style "border-collapse: collapse; ">
<form action="" method = "POST" enctype= "multipart/form-data" >

<tr>

<th style="width: 50%;">Tên Chap</th>
<th tyle="width: 5%;">STT</th>
<th tyle="width: 5%;"> Sửa chap</th>
<th tyle="width: 5%;">Xem</th>
<th tyle="width: 5%;">Xóa</th>

</tr>


<?php

foreach($resultCH as $row) {

?>

<tr>
    <td><?php  echo $row['TenChap']?></td>
    
    <td><?php  echo $row['STT']?></td>

    <td><a href=""><b>Sửa</b></a></td>
     
    <td><a href="index.php?task=ADDoctruyen&IDtr=<?php echo $row['IDtruyen']?>&IDchap=<?php echo $row['IDc']?>"><b>Xem</b></a></td>
   
    <td><a href="index.php?task=delechap&IDchap=<?php echo $row['IDc']?>"><b>Xóa</b></a></td>
    
</tr>

<?php
}
?>

</table>
<br> <br>
<h5>THÊM CHAP</h5>
<div class="default_pic" style="padding:0; text-align:left">
<form style="padding: 5px;" method="post" enctype="multipart/form-data">



<td class="td_"><br><b><span style="font-size: 15;margin-bottom: 5px;">Tên chap:</span></b>
<input style="width: calc(100% - 10px);margin-bottom: 10px;max-width: 210px;" name="tenchap" type="text">
</td>
</tr>

<tr>
<td class="td_"> <br><b><span style="font-size: 15;margin-bottom: 5px;">Thứ tự:</span></b>
<input style="width: calc(100% - 10px);margin-bottom: 10px;max-width: 210px;" name="thutu" type="text" >
</td>
</tr>

<tr>
<td class="td_"><br><b><span style="font-size: 15;margin-bottom: 5px;">Link Ảnh truyện:</b></span>
<input type="file" name="anhtruyen[]" multiple= "multiple"> <b><h2 style= "font-size: 17px; margin-top:10px ;color: green" >Có thể chọn nhiều tệp!</h2></b>
</td> 
</tr>
<tr>
<td class="td_" colspan="2"> <br><br><input name="themchap" type="submit" value="Thêm chap"  style="height: 35px;width: 120px;margin-bottom: 7px;"></td>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>


<div id="leftcol">
</div>

<div class="clr"></div>
</div>
<!-- <div id="footer" style=" margin-top: 30px; "> -->
<br>
</div> </div>
</body></html>
