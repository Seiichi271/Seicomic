<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Templates/styleTTtruyen.css">
</head>
<body>
<form action="" method="get"> 
<div id="wrapper">
        <div id="header">
       
            <a href="" class="logo">
                <img src="Templates/HinhAnh/logoPage.jpg" alt="">
            </a>
            
            <div id="menu">
            <form action="" method="get">
                <div class="item">
                    <a href="index.php?task=<?php if($_GET['task'] == 'ADDoctruyen'){echo "PageHomeAdmin";} 
                    elseif($_GET['task'] == 'UserDoctruyen'){echo"PageHomeUser";} else echo "PageHome";  ?>">Trang chủ</a>
                </div>
                </form>

                <li class="li-nav">
<ul style="float: left;position: relative;">
<a href="javascript:void(0);" data-toggle="dropdown" class="a-nav a-drop-2" onclick="tagAction('1');"><div>Thể Loại</div></a>
<!-- <ul role="menu" class="drop-menu drop-2" style="width: 970px;margin-left: -222px;" id="1_tags"> -->
<!-- <script>function tagAction(o){$.post("tag_box.php",{tagid:o},function(t){$("#"+o+"_tags").html(t),$(".a-drop-2").removeAttr("onclick"),$(".a-drop-2").prop("onclick",null)})}</script> -->
</ul>
</ul>
</li>
                
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
<!--Begin chon chap-->
<div class="tttp"><p>Thông tin truyện: <a href="">locall</a></p></div>
<?php 
$c = (int)$_GET['IDchap'];

foreach($resultCH as $row){  

for ($i = $c; $i <= $c + 50; $i++){
if($i == $row['IDc'] && $i > $c){
    $next = $i; 
}  
}
}

foreach($resultCHn as $roww){
for ($i = $c; $i >= $c - 50; $i--){
    if($i == $roww['IDc'] && $i < $c){
    $prev = $i;  
    }
}
}
    ?>
<div class="chon-chap">
<div class='n-prev'>
    <a class='b-prev'  href="index.php?task=ADDoctruyen&IDtr=<?php echo $_GET['IDtr']?>&IDchap=<?php echo "$prev"?>"><img src='Templates/HinhAnh/prevc.png' style='cursor: pointer;' />
        </a></div>

        <select class="form-control" name="chapters" onchange="window.location=this[this.selectedIndex].value;">
<option value="36753-69031-xem-truyen-after-report-chap-4.html">Chap 4</option>
<option selected value="36753-68977-xem-truyen-after-report-chap-1.html">Chap 1</option>
</select>

<div class="n-next">
 <a href="index.php?task=ADDoctruyen&IDtr=<?php echo $_GET['IDtr']?>&IDchap=<?php echo "$next"?>">
    <img src="Templates/HinhAnh/nextc.png" title="Next chapter" /></a>
</div>
</div>
<?php 
foreach($resultanh as $row){
?>

<div class="anhtruyenIMG"><img src="Templates/anhtruyen/<?php echo $row['img']?>" alt="" style="width: 950px;"></div>
<?php }?>


<div class="chon-chap" style="margin-bottom: 50px;">
<div class='n-prev'>
    <a class='b-prev'  href="index.php?task=ADDoctruyen&IDtr=<?php echo $_GET['IDtr']?>&IDchap=<?php echo "$prev"?>"><img src='Templates/HinhAnh/prevc.png' style='cursor: pointer;' />
        </a></div>

 <select class="form-control" name="chapters" >
<option value="index.php?task=ADDoctruyen&IDtr=<?php echo $row['IDtruyen']?>&IDchap=<?php echo $row['IDc']?>">Chap 2</option>
<option selected value="">Chap 1</option>
</select>  


<div class="n-next">
 <a href="index.php?task=ADDoctruyen&IDtr=<?php echo $_GET['IDtr']?>&IDchap=<?php echo "$next"?>">
    <img src="Templates/HinhAnh/nextc.png" title="Next chapter" /></a>
</div>
</div>

</div>





<!--End chon chap-->






       
        </body>
</html>