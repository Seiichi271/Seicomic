<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Templates/styleQly.css">
 

  
</head>
<body>

<div id="h_nav">
<div id="left_links">
<a href="index.php?task=PageHomeAdmin" title="Trang chủ" target="_blank">Trang chủ</a>
</div>

<div id="left_links">
<a href="index.php?task=pageUpload" title="Đăng truyện" style="color: #2196F3;"><b>+Thêm Truyện Mới</b></a>
</div>
</div>

 <div class="bang">
<table style "width: 100%" border="1" style "border-collapse: collapse; ">
<form action="" method = "POST"  enctype= "multipart/form-data" >
<tr>

<th style="width: 40%;">Tên truyện</th>
<th style="width: 5%;">Ảnh bìa </th>
<th style="width: 5%;">Tương tác</th>
<th style="width: 15%;">Chỉnh sửa</th>
</tr>


<?php
foreach($result as $row) {
?>

<tr>
    <td><?php  echo $row['TenTruyen']?></td>
    
    <td><img src = "Templates/HinhAnh/<?php echo $row['AnhBia'] ?>" width = "100px"></td>
    </td>

    <td><?php  echo $row['TuongTac']?></td>

    <td >
        <a href="index.php?task=deleTruyen&IDtr=<?php echo $row['ID'] ?>">Xóa</a> | 
        <a href="index.php?task=fixTruyen&IDtr=<?php echo $row['ID'] ?>">Sửa</a> |
        <a href="index.php?task=AddChap&IDtr=<?php echo $row['ID'] ?>">Thêm chap</a>
    </td>


</tr>

<?php
}
?>

</table>
</div>   
    
</body>
</html>