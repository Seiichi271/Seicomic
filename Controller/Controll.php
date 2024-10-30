<?php
include "Models/Model.php";
include "Views/Viewer.php";

class controll{
    var $model, $view;

    public function __construct()
    {
        $this-> model = new ModelC();
        $this-> view = new View();
    }

    public function getPageHome(){
        $result = $this-> model -> hienThiTruyen();
        $this-> view -> giaoDien($result);
        
    }

    public function getPageLoggin(){
        $this-> view -> pageLoggin();
    }

    public function getPageAdmin(){
       
        // $ptr = $this-> model ->phanTrang();
        // $trang = ceil( (int)$ptr/3);

       
        //     $page = $_GET['trang'];
        
        
        
        // if($page = "" || $page == 1){
        //     $begin = 0;
        // }
        // else $begin = ($page*2);
        // $result = $this-> model -> hienThiTruyen($begin);
        

        // $this-> view -> pageAdmin($result, $trang, $begin);
        $result = $this-> model -> hienThiTruyen();
        $this-> view -> pageAdmin($result );
    }

    public function getPageUser(){
        $result = $this-> model -> hienThiTruyen();
        $this-> view -> pageUser($result);
    }

    public function getPageRegist(){
        $this-> view -> pageRegist();
    }

    public function getPageQlyT(){
        $result = $this-> model -> hienThiTruyen();
        $this-> view -> PageQlyT($result);
    }

    public function getRegist(){
        $resultRG = $this-> model -> Regist();
    }

    public function getPageUpload(){
        $this-> view -> pageUpload();
    }

    public function getPageAddChap(){
        $resultCH = $this-> model ->hienThiChap();
        $chap = $this-> model -> chaptruyen();
        $this-> view -> pageAddChap($resultCH, $chap);
    }

   public function getdeleChap(){
    $this-> model -> deleChap();
    $message = "Xóa chap thành công";
    echo "<script type='text/javascript'>alert('$message');</script>";
   }

    public function getPageTTtruyen(){
        $resultCH = $this-> model ->hienThiChap();
        $chap = $this-> model -> chaptruyen();
       $resultTTt =  $this-> model -> hienThiTTtruyen();
       $resultTTchap =  $this-> model -> hienThiTTchap();
       if($_GET['task'] == 'ADTTtruyen'){
        $this-> view -> pageTTtruyenAD($resultTTt, $resultTTchap, $chap, $resultCH);
       }
       elseif ($_GET['task'] == 'UserTTtruyen'){
        $this-> view -> pageTTtruyenUSer($resultTTt, $resultTTchap, $chap, $resultCH);
       }
       else {$this-> view -> pageTTtruyen($resultTTt, $resultTTchap, $chap, $resultCH);}
    }



    public function getRead(){
        $resultCH = $this-> model ->hienThiChap();
        $resultCHn = $this-> model -> hienThiChapnguoc();
  
        if ($_GET['task'] == 'ADDoctruyen'){
            $resultanh = $this-> model -> hienThianhTruyen();
        $this-> view -> ReadAD($resultanh, $resultCH,  $resultCHn);
        }

        else{
        $resultanh = $this-> model -> hienThianhTruyen();
        $this-> view -> Read($resultanh, $resultCH,  $resultCHn);
        }
    }

    public function getLoggin(){
        $resultLG = $this-> model -> loggin();
       if( isset($resultLG['Username'])) $_SESSION['usernamad'] = $resultLG['Username'];
       if(isset($resultLG['Password'])) $_SESSION['username'] = $resultLG['Username'];
       if(isset($resultLG['lvl'])){
       if ($resultLG['lvl'] == 1){
        header("location: index.php?task=PageHomeAdmin");
       }
       elseif ($resultLG['lvl'] == 0){
        header("location: index.php?task=PageHomeUser");
       }}  
    }

    public function getAddT(){
        $this-> model -> addTruyen();
    }

    public function getAddChap(){
        $this-> model -> addChap();
    }

    public function getFixTruyen(){
        $hienthi = $this-> model -> hienThiTTtruyen();
        $this-> view -> pagefixTruyen($hienthi);
    }

    public function getFixTruyenBTN(){
       $result = $this-> model -> FixTruyen();
    }

    public function getdeleTruyen(){
        
        $this-> model -> deleTruyen();
        $message = "Xóa truyện thành công";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
    }

    public function getSearch( $Search){
       $result = $this-> model -> Search($Search );   
       $this-> view -> Search($result);
       
    }

   
 
   








}
?>