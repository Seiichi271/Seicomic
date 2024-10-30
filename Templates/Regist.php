
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí TK</title>
    <style>
     body {
        background-image: url('Templates/HinhAnh/nen1.jpg' );
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
     }

 .wrapper-login {
        width: 30%;
        margin: 0 auto;
     }

form {
	width: 400px;
	border: 2px solid #ccc;
	padding: 15px;
	background: #fff;
	border-radius: 10px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
div {
	
	font-size: 18px;
	padding: 10px;
}
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
} */
 

</style>        
</head>
<body>
    
    <div class = "wrapper-login">

        <form action ="" autocomplete = "off" method = "POST">
        <h2>Trang Đăng Kí</h2>
             <form action="">
                
                    <tr>
                 <div class="input-form">
                     <span >Email</span>
                     <input type="text" name="usernamead">
                 </div>
                 <div class="input-form">
                     <span>Mật Khẩu</span>
                     <input type="text" name="passwordad">
                 </div>
                 <div class="input-form">
                     <span>Tên đăng nhập</span>
                     <input type="text" name="name">
                 </div>

                 <div class="input-form">
                     <input type="submit" name = "Regist" value="Đăng kí">
                 </div>
                 <a href="index.php?task=PageLoggin">Trở lại trang đăng nhập</a>
                 </tr>
               
             </form>
    
</body>
</html>
