<?php
header('Content-type:application/json;charset=UTF-8');
include "../libs/functions/dbaccount.php";
include "../libs/functions/functions.php";
$subject = $_GET['keyword'];
if($subject!=''){
  $count = ($_GET['count']!='')?$_GET['count']:'all';
  try{
  //$db_conn->beginTransaction();
  $sql = "SELECT  `pdt_num`,`pdt_subject`,`pdt_title`,`pdt_img`,`pdt_price`,`pdt_keyword`,`pdt_content`
            FROM `product` 
            WHERE `pdt_subject` LIKE :subject 
            AND pdt_status = '啟用'
            AND pdt_startT <= now() 
            AND pdt_endT > now() ";
  if($count!='all'){
    $sql .= " limit ". $count ." ";
  }
            
  $stmt=$db_conn->prepare($sql);
  $stmt->bindParam(':subject', $subject);
  //if($count!='all') $stmt->bindParam(':count', $count);
  $stmt->execute();
  $row=array();
  while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
    $row[]=$rows;
  }
  //$db_conn->commit();
}catch(PDOException $e){
  //$db_conn->rollBack();
  echo "錯誤2，請聯絡管理員。";
  echo $sql."<br />";
  echo $count."<br />";
  echo "A database problem has occurred: ". $e->GETMessage();
  exit;
  
}
$db_conn=null; //結束與資料庫連線
if(empty($_GET['callback'])) echo json_encode($row);
else echo "{$_GET['callback']}(json_encode($row))"; 
}


?>