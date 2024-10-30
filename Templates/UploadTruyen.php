
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>HentaiVN - Quản Lý Truyện</title>
<link rel="stylesheet" href="Templates/uploadCSS.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
    <style>
        .radioTL{
            justify-content: space-between;
            align-items: center; 
            padding: 10px;
        }
    </style>
<div id="wrapper">
<div id="header">
<div id="banner" style="background: #FFFFFF url(../icon/banner.jpg) repeat-x bottom; height: 20px;">

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
<h3>THÊM TRUYỆN MỚI</h3>
<br/>
<div class="default_pic" style="padding:0; text-align:left">
<form style="padding: 5px;" method="post" enctype="multipart/form-data">
<table class="table_themt" border="0">
<tr>
<td class="td_"><b><span style="font-size: 15;margin-bottom: 5px;">Tên truyện:</span></b>
<input style="width: calc(100% - 10px);margin-bottom: 10px;max-width: 500px;" class="input_them" name="tenT" placeholder=" Ghi tên truyện vào" type="text" value>
</td>
</tr>

<tr>
<td class="td_"><br><b><span style="font-size: 15;margin-bottom: 5px;">Link Ảnh bìa truyện:</b></span>
<input type="file" name="anhbia"> 
</td>
</tr>

<tr>


<tr>
<td class="td_"> <br><b><span style="font-size: 15;margin-bottom: 5px;">Tác giả:</span></b>
<input style="width: calc(100% - 10px);margin-bottom: 10px;max-width: 210px;" name="tg" type="text" value="Đang cập nhật">
</td>
</tr>

<tr>
<td class="td_"><b><span style="font-size: 15;margin-bottom: 5px;margin-top: 15px;">Người thực hiện:</span></b>
<input style="width: calc(100% - 10px);margin-bottom: 10px;max-width: 350px;" class="input_them" placeholder=" Ghi tên người thực hiện truyện này" name="nth" type="text" value>
</td>
</tr>
<tr>
<td class="td_"><b><span style="font-size: 15;margin-bottom: 5px;text-align:left;">Thể loại truyện:</span></b>
<div class="radioTL">
  <input type="checkbox" name="theloai[]" value="Null &nbsp;" multiple = "multiple" checked = "checked">
  <b><label for="css">NUll   </label>&nbsp; &nbsp; &nbsp;</b>
<input type="checkbox"  name="theloai[]" value="Hành động, &nbsp;" multiple = "multiple">
  <b><label for="html">Hành động</label>&nbsp; &nbsp; &nbsp;</b>
  <input type="checkbox" name="theloai[]" value="Tình cảm, lãng mạn, &nbsp;" multiple = "multiple" >
  <b><label for="css">Tình cảm, lãng mạn   </label>&nbsp; &nbsp; &nbsp;</b>
  <input type="checkbox" name="theloai[]" value="Kinh dị, &nbsp;" multiple = "multiple">
  <b><label for="javascript">Kinh dị   </label>&nbsp; &nbsp; &nbsp;</b>
  <input type="checkbox" name="theloai[]" value="Siêu năng lực, &nbsp;" multiple = "multiple">
  <b><label for="javascript">Siêu năng lực </label>&nbsp; &nbsp; &nbsp;</b>
  <input type="checkbox" name="theloai[]" value="Khoa học, viễn tưởng, &nbsp;" multiple = "multiple">
  <b><label for="javascript">Khoa học, viễn tưởng  </label>&nbsp; &nbsp; &nbsp;</b>
</td>
</div>
</tr>

<tr>
<td class="td_"><br><b><span style="font-size: 15;margin-bottom: 5px;">Trạng thái:</span></b>
<select class="input_them" name="tt" style="max-width: 120px;margin-bottom: 7px;width: calc(100% - 10px);">
<option value="0">Đã hoàn thành</option>
<option value="1">Đang tiến hành</option>
<option value="2">Tạm ngưng</option>
</select>
</td>
</tr>

<tr>
<td class="td_"><br><b><span style="font-size: 15;margin-bottom: 5px;">Nhiều chap:</span></b>
<select class="input_them" name="nc" style="max-width: 175px;margin-bottom: 10px;width: calc(100% - 10px);">
<option value="1">Có: Series, Short Hentai</option>
<option selected="selected" value="0">Không: Oneshot</option>
</select>
</td>
</tr>



<tr>
<td class="td_"><b><span style="font-size: 15;margin-bottom: 5px;">Tóm tắt truyện:</span></b>
<textarea rows="10" cols="50" style="width: calc(100% - 10px);padding: 7px 5px;margin-bottom: 10px;max-width: 500px;height: 240px;" placeholder=" Tóm tắt ngắn về truyện. Không ghi cũng được." name="tomtat"></textarea>
</td>
</tr>

<tr>
<td class="td_" colspan="2"><input name="ok" type="submit" value="Thêm mới"  style="height: 35px;width: 120px;margin-bottom: 7px;"></td>
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
<div id="footer" style=" margin-top: 30px; ">
<br>
</div> </div>
</body></html>
