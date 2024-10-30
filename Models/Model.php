<?php

use LDAP\Result;

class ModelC{
    public function __construct(){ 
        $db = mysqli_connect("localhost","root","","webtruyentranh");
        mysqli_set_charset($db,"utf8");
        $this->db = $db;
    }

    public function hienThiTruyen(){
        
        $hienT = "select* from datatruyen order by ID asc ";
        $resultT = mysqli_query($this -> db, $hienT);
        return $resultT;
    }

    public function hienThiTTtruyen(){
        $hienTTt = "select* from datatruyen where datatruyen.ID = '".$_GET['IDtr']."' ";
        $resultTT = mysqli_query($this->db,$hienTTt);
        return $resultTT;
    }

    public function hienThiTTchap(){
        $hienTTt = "select datatruyen.ID, chaptruyen.TenChap, chaptruyen.created 
        from datatruyen, chaptruyen where datatruyen.ID = '".$_GET['IDtr']."' and datatruyen.ID = chaptruyen.IDtruyen";
        $resultTT = mysqli_query($this->db,$hienTTt);
        return $resultTT;
    }

    public function chaptruyen(){
        $hienTTt = "select* from chaptruyen where IDtruyen = '".$_GET['IDtr']."' order by IDc DESC ";
        $resultTT = mysqli_query($this->db,$hienTTt);
        return $resultTT;
    }

    public function hienThianhTruyen(){
        $hienTtr = "select img, IDtruyen, IDchap
        from anhtruyen where IDchap = '".$_GET['IDchap']."' and IDtruyen = '".$_GET['IDtr']."'";
        $resultTT = mysqli_query($this->db,$hienTtr);
        return $resultTT;

    }


    public function hienThiChap(){
        $hienTC = "select  datatruyen.ID, chaptruyen.IDc, chaptruyen.TenChap, chaptruyen.IDtruyen, chaptruyen.STT, chaptruyen.created from chaptruyen, datatruyen 
        where datatruyen.ID = '".$_GET['IDtr']."' and datatruyen.ID = chaptruyen.IDtruyen 
        ORDER BY chaptruyen.STT DESC";
        $resultChap = mysqli_query($this->db,$hienTC);
        return $resultChap;
    }

    public function hienThiChapnguoc(){
        $hienTC = "select  datatruyen.ID, chaptruyen.IDc, chaptruyen.TenChap, chaptruyen.IDtruyen, chaptruyen.STT, chaptruyen.created from chaptruyen, datatruyen 
        where datatruyen.ID = '".$_GET['IDtr']."' and datatruyen.ID = chaptruyen.IDtruyen 
        ORDER BY chaptruyen.STT ASC";
        $resultChap = mysqli_query($this->db,$hienTC);
        return $resultChap;
    }

    public function loggin(){
        $log = "select* from taikhoan where Username = '".$_POST['usernamead']."' and Password = '".$_POST['passwordad']."'";
        $resultLG = mysqli_query($this -> db,$log);
        if(mysqli_num_rows($resultLG)>0) {
            $row = mysqli_fetch_assoc($resultLG);
            return $row;
            } return false;     
    }

    public function checkAC(){
        $check = "SELECT * FROM `taikhoan`";
        $ch = mysqli_query($this ->db , $check);
        return $ch;
    }

    public function Regist(){
        $Regist = "INSERT INTO `taikhoan`(`Username`, `Password`, `TenDangNhap`) VALUES ('".$_POST['usernamead']."','".$_POST['passwordad']."','".$_POST['name']."')";
        $resultRG = mysqli_query($this -> db, $Regist);
        $message = "Đăng kí thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    public function addTruyen(){
        $anh = $_FILES['anhbia']['name']; 
        $anh_tmp = $_FILES['anhbia']['tmp_name'];
        $anh = time().'_'.$anh;

        $theloai = $_POST['theloai'];
        foreach($theloai as $tl){

        $addT = "INSERT INTO `datatruyen`(`TenTruyen`, `AnhBia`, `TacGia`, `NguoiTH`,`NhieuChap`, `TrangThai`, `TheLoai` , `TomTat`) 
        VALUES ('".$_POST['tenT']."','".$anh."','".$_POST['tg']."','".$_POST['nth']."','".$_POST['nc']."','".$_POST['tt']."','".$tl."','".$_POST['tomtat']."')";
        move_uploaded_file($anh_tmp,'Templates/HinhAnh/'.$anh);
        }
        $result = mysqli_query($this-> db, $addT);
        $message = "Thêm truyện thành công!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    public function addChap(){
        $anh = $_FILES['anhtruyen']['name']; 
        $anh_tmp = $_FILES['anhtruyen']['tmp_name'];
        // foreach($anh as $emo){
        //     $emo = time().$emo;
        //     echo "$emo";
        // }
        // if(!empty($anh)){
        //     foreach($anh as $valu){
        //         $anhM = time().'_'.$valu;
        //     }
        // }
       
        
        
      
        $addChap = "INSERT INTO `chaptruyen`(`TenChap`, `STT` ,`created` ,`IDtruyen`) 
        VALUES ('".$_POST['tenchap']."','".$_POST['thutu']."', now() ,'".$_GET['IDtr']."')";
        $result = mysqli_query($this->db,$addChap);
         
        $max = "SELECT Max(IDc) FROM chaptruyen";
        $idchap = mysqli_query($this-> db, $max);

        if (mysqli_num_rows($idchap) > 0){
            while($rowData = mysqli_fetch_array($idchap)){
                $IDchap = $rowData[0];  
            }}
             

            foreach($anh  as $key => $value){
                $addChap = "INSERT INTO `anhtruyen`(`img`,`IDtruyen`,`IDchap`) VALUES ('".time().$value."', '".$_GET['IDtr']."','".$IDchap."')";
                $result = mysqli_query($this->db,$addChap);
                move_uploaded_file($anh_tmp[$key],'Templates/anhtruyen/'.time().$value);
            } 


            $message = "Thêm chap thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
         
        
    }

    public function deleTruyen(){
        $deleTr = "DELETE FROM `datatruyen` WHERE ID = '".$_GET['IDtr']."'";
        $result =  mysqli_query($this->db,$deleTr);
        $deleTr = "DELETE FROM `anhtruyen` WHERE IDtruyen = '".$_GET['IDtr']."'";
        $result =  mysqli_query($this->db,$deleTr);
        $deleTr = "DELETE FROM `chaptruyen` WHERE IDtruyen = '".$_GET['IDtr']."'";
        $result =  mysqli_query($this->db,$deleTr);
           
    }

    public function FixTruyen(){
        
        $anh = $_FILES['anhbia']['name']; 
        $anh_tmp = $_FILES['anhbia']['tmp_name'];
        $anh = time().'_'.$anh;

       
        $theloai = isset($_POST['theloai']) ? $_POST['theloai'] : null;
       
        foreach($theloai as $tl){
            if($_FILES['anhbia']['name']){
        $fix = "UPDATE `datatruyen` SET `TenTruyen`='".$_POST['tenT']."',`AnhBia`='".$anh."',`TacGia`='".$_POST['tg']."',
        `NguoiTH`='".$_POST['nth']."',`NhieuChap`='".$_POST['nc']."',`TrangThai`='".$_POST['tt']."',`TheLoai`='".$tl."',
        `TomTat`='".$_POST['tomtat']."' where ID = '".$_GET['IDtr']."'";
        move_uploaded_file($anh_tmp,'Templates/HinhAnh/'.$anh);
    }
    else {
        $fix = "UPDATE `datatruyen` SET `TenTruyen`='".$_POST['tenT']."',`TacGia`='".$_POST['tg']."',
        `NguoiTH`='".$_POST['nth']."',`NhieuChap`='".$_POST['nc']."',`TrangThai`='".$_POST['tt']."',`TheLoai`='".$tl."',
        `TomTat`='".$_POST['tomtat']."' where ID = '".$_GET['IDtr']."'";

    }}
    $result = mysqli_query($this-> db, $fix);
    $message = "Sửa truyện thành công!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }


    public function deleChap(){
        $deleChap = "DELETE FROM `chaptruyen` WHERE IDc = '".$_GET['IDchap']."'";
        mysqli_query($this->db,$deleChap);
    }

    // public function phanTrang(){
        
    //     $result = mysqli_query($this->db, "SELECT* FROM datatruyen");
    //     $num = mysqli_num_rows($result);
    //     return $num;
    // }

    public function Search(string $Search ){
       $key = $Search;
        $searchSQL = "SELECT *
        FROM datatruyen 
        WHERE TenTruyen LIKE '%$key%' ";
        $res = mysqli_query($this->db, $searchSQL);
        // $num = mysqli_fetch_assoc($res);
        
        return $res;


    }
}

?>