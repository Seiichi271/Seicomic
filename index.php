<?php
include "Controller/Controll.php";
session_start();

$Cont = new controll();

$task = isset($_GET['task']) ? $_GET['task'] : null;
$IDtruyen = isset($_GET['IDtruyen']) ? $_GET['IDtruyen'] : null;
$IDchap = isset($_GET['IDtruyen']) ? $_GET['IDtruyen'] : null;
$Search = isset($_POST['Search']) ? $_POST['Search'] : null;

if(isset($_POST['searchbtn'])){
  
  $Cont-> getSearch($Search);
}

if(isset($_POST['loggin'])){
    $Cont -> getLoggin();
}

if(isset($_POST['Regist'])){
    $Cont -> getRegist();
    
}

if(isset($_POST['ok'])){
    $Cont -> getAddT();
}

if(isset($_POST['themchap'])){
    $Cont -> getAddChap();
}

if(isset($_POST['fix'])){
    $Cont -> getFixTruyenBTN();
}



switch($task){

case'PageHome':
    if(!isset($_POST['searchbtn']))
    $Cont -> getPageHome();
    break;

case 'PageHomeAdmin':
    if(!isset($_POST['searchbtn']))
    $Cont -> getPageAdmin();
    break;
    
case 'PageHomeUser':
    if(!isset($_POST['searchbtn']))
    $Cont -> getPageUser();
    break;    

case 'PageLoggin':
    $Cont -> getPageLoggin();
    break;

case 'PageRegist':
    $Cont -> getPageRegist();
    break;

case 'pageUpload':
    $Cont -> getPageUpload();
    break;  
    
case 'QlyTruyen':
    $Cont -> getPageQlyT();
    break;    

case 'AddChap':
    if($IDtruyen = 'IDtr'){
        $Cont -> getPageAddChap();
    }    break;

case 'deleTruyen':
    if($IDtruyen = 'IDtr'){
        $Cont -> getdeleTruyen();
    }    break;

case 'fixTruyen':
    if($IDtruyen = 'IDtr'){
        $Cont -> getFixTruyen();
    }    break;

case 'delechap':
    if ($IDtruyen = 'IDchap'){
        $Cont -> getdeleChap();
    }  break;

case 'ADTTtruyen':
    if ($action = 'actionBy' && $IDtruyen = 'IDtr') {
        $Cont -> getPageTTtruyen();
    } break;

    case 'UserTTtruyen':
        if ($action = 'actionBy' && $IDtruyen = 'IDtr') {
            $Cont -> getPageTTtruyen();
        } break;

        case 'GuestTTtruyen':
            if ($action = 'actionBy' && $IDtruyen = 'IDtr') {
                $Cont -> getPageTTtruyen();
            } break;

           
case 'ADDoctruyen':
    if($IDtruyen = 'IDtr' && $IDchap = 'IDchap'){
        $Cont -> getRead();
    } break;

    case 'UserDoctruyen':
        if($IDtruyen = 'IDtr' && $IDchap = 'IDchap'){
            $Cont -> getRead();
        } break;

        case 'GuestDoctruyen':
            if($IDtruyen = 'IDtr' && $IDchap = 'IDchap'){
                $Cont -> getRead();
            } break;

// case 'Search':
//    echo 
    //     $Cont-> getVSearch();
    // break;

    

default:
        $Cont->getPageHome();
        break;
}



?>