<?php
class View{
    public function giaoDien($result){
        include "Templates/giaoDien.php";
    }

    public function pageLoggin(){
        include "Templates/Logging.php";
    }

    public function pageAdmin($result ){
        include "Templates/GiaodienADmin.php";
    }

    public function pageUser($result){
        include "Templates/GiaodienUser.php";
    }

    public function pageRegist(){
        include "Templates/Regist.php";
    }

    public function pageUpload(){
        include "Templates/UploadTruyen.php";
    }

    public function PageQlyT($result){
        include "Templates/QlyTruyen.php";
    }

    public function pageAddChap($resultCH, $chap){
        include "Templates/AddChap.php";
    }

    public function pageTTtruyenAD($resultTTt, $resultTTchap, $chap, $resultCH){
        include "Templates/giaodienTruyenAD.php";
    }

    public function pageTTtruyen($resultTTt, $resultTTchap, $chap, $resultCH){
        include "Templates/giaodienTruyen.php";
    }

    public function pageTTtruyenUser($resultTTt, $resultTTchap, $chap, $resultCH){
        include "Templates/giaodienTruyenUser.php";
    }

    public function Read($resultanh, $resultCH,  $resultCHn){
        include "Templates/trangDocTruyen.php";
    }

    public function ReadAD($resultanh, $resultCH, $resultCHn){
        include "Templates/trangDocTruyenAD.php";
    }

    public function pagefixTruyen($hienthi){
        include "Templates/Fixtruyen.php";
    }

    public function Search($result){
        include "Templates/search.php";
    }

}

?>