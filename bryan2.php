<?php
	require "hotreloader.php";
	require "json3.php";

	$reloader = new HotReloader();
  $reloader->init();
  error_reporting(E_ERROR | E_PARSE);

	function console_log($data)
	{
		echo '<script>';
		echo 'console.log(' . json_encode($data) . ')';
		echo '</script>';
	}
	function console_log2($data)
	{
		echo '<script>';
		echo 'console.log(JSON.stringify(' . json_encode($data) . ', null, 2))';
		echo '</script>';
	}

	

	function endKey($array)
	{
		end($array);
		return key($array);
	}

	function group_level(&$arr, $level)
	{
		$nodes = array();
		while (sizeof($arr) != 0 && $arr[0]["NodeLevel"] >= $level) {
			if ($arr[0]["NodeLevel"] == $level) {
				array_push($nodes, array_shift($arr));
			} else {
				$nodes[endKey($nodes)]['children'] = group_level($arr, $arr[0]["NodeLevel"]);
			}
		}
		return $nodes;
	}

	function make_tree($arr)
	{
		if (sizeof($arr) == 0) {
			return array();
		} else {
			return group_level($arr, $arr[0]["NodeLevel"]);
		}
	}

	function compare($a, $b)
	{
    $a1 = $a["InfocusAttribute"]["Attribute"];
		$b1 = $b["InfocusAttribute"]["Attribute"];
		if($a1 == 'weatheringHasMineralEnhanced'){
			$kk=0;
		}
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

	function sort_children(&$node)
	{
		usort($node['children'], 'compare');
		foreach ($node['children'] as $child) {
			if (isset($child['children']) && sizeof($child['children']) > 1){
				sort_children($child);
			}
		}
	}

	function sortTree2(&$tree)
	{
		usort($tree, 'compare');
		foreach ($tree as $child) {
			if (isset($child['children'])&&sizeof($child['children'])>1) {
					sortTree2($child['children']);
			}
		}
	}

	function flattenTree($tree)
	{
		$tempArr = array();
		foreach ($tree as $value) {
			array_push($tempArr, $value);
			if (isset($value['children']) && sizeof($value['children']) > 0) {
				$tempArr = array_merge($tempArr, flattenTree($value['children']));
			}
			if(isset($value['children'])) unset($value['children']);
		}
		return $tempArr;
	}


	$nodes = json_decode($json, true);
	$nodes = make_tree($nodes);
	
$result =array(array());

function findParents($arr, &$result){
	global $result;
	global $nodes;
	//$toSort = array(array());
	foreach($arr as $k => $child){
		//console_log($child);
		if (isset($child['children'])) {
			$key = $arr[$k]['NodeLevel'];
			$val = $k;
			if(!isset($result[$key])) 
				$result[$key] = [];
			array_push($result[$key], $val);
			findParents($child['children'], $result);
		}
	}
	//return $toSort;
}
	
findParents($nodes, $result);
//console_log($result);
	
	//sortTree2($nodes);
	//usort($nodes[0]['children'][21]['children'], 'compare');
	//console_log($nodes[0]['children'][21]['children']);

	//console_log($nodes);
	//$nodes = flattenTree($nodes);
	//console_log($nodes);
	
	
	function test2(&$x){
		if($x>0) {
			console_log($x);
			$x--;  
			test2($x);
		}
	}


	$x = 2;
	test2($x);
	console_log($x);

?>