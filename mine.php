<?php
  require "hotreloader.php";
  require "json3.php";

  $reloader = new HotReloader();
  $reloader->init();
  error_reporting(E_ERROR | E_PARSE);

  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

  function console_log2( $data ){
    echo '<script>';
    echo 'console.log(JSON.stringify('. json_encode( $data ) .', null, 2))';
    echo '</script>';
  }

  function console_log3( $data ){
    echo '<script>';
    echo 'x = '.$data.';';
    echo 'console.log('.x.')';
    echo '</script>';
  }

  $decoded = json_decode($json, true);
  
  function findPair(){

  }

  function setInheritance(&$arr){
    foreach($arr as $k=>$v){
      if($k>0 && $arr[$k]['NodeLevel'] > $arr[$k-1]['NodeLevel']){
        $arr[$k]['parent'] = [
          $arr[$k-1]["InfocusAttribute"]["Attribute"],
          $arr[$k-1]["InfocusAttribute"]["Label"]
        ];
      }
      //attr used during final concattenation
      if($k<count($arr)-1 && $arr[$k+1]['NodeLevel']>$arr[$k]['NodeLevel']){
        $arr[$k]['child'] = [
          $arr[$k+1]["InfocusAttribute"]["Attribute"],
          $arr[$k+1]["InfocusAttribute"]["Label"]
        ];
      }
    }
  }

  function getLevelAndSort($level, &$arr){
    $compArr = [];
    $amount = -1; // once child is found starts at 0
    $parent = ''; //parent attr to each child

    //assign parent attr
    foreach($arr as $v){
      //console_log($v);
      if($v['NodeLevel']==1 && $level==1){
        array_push($compArr, $v);
      }
      if($v['NodeLevel']==$level && isset($v['parent'])){
        $parent = $v['parent'];
        array_push($compArr, []);
        $amount++;
        $compArr[$amount] = $v;
      }
      if($v['NodeLevel']==$level && !isset($v['parent']) && $level != 1){
        $v['parent'] = $parent;
        $amount++;
        $compArr[$amount] = $v;
      }
    }

    usort($compArr, 'comp');

    
    return $compArr;
  }
  //new attemp to make lvl2 an arr or arrs so 
  //i can sort them individually
  function getLevel($level, $arr){
    
  }
  //compare function
  function comp($a, $b){
    $a1 = $a["InfocusAttribute"]["Attribute"];
    $b1 = $b["InfocusAttribute"]["Attribute"];
    if($a1 == $b1){
      $a2 = $a["InfocusAttribute"]["Label"];
      $b2 =  $b["InfocusAttribute"]["Label"];
      if($a2==$b2) return 0;
      $x = $a2<$b2? -1: 1;
      return $x;
    }
    $x = $a1<$b1 ? -1: 1;
    return $x;
  }
  
  setInheritance($decoded);
  $lvl1 = getLevelAndSort(2, $decoded);
  console_log($lvl1);
  console_log($decoded);
?>