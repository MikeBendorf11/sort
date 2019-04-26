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
	$return = 0;
	if($a1==null) $return = 1;
	else if($b1==null) $return = -1;
	else if ($a1 == $b1) {
		$a2 = $a["InfocusAttribute"]["Label"];
		$b2 =  $b["InfocusAttribute"]["Label"];
		if ($a2 == $b2) $return = 0;
		else if ($a2 < $b2) $return = -1;
		else if ($a2 > $b2) $return = 1;
	}
	else if($a1<$b1) $return = -1;
	else if($a1>$b1) $return = 1;
	// console_log('______________________________');
	// console_log($a['InfocusAttribute']['Value']);
	// console_log($a['TargetAttribute']['Value']);
	// console_log($b['InfocusAttribute']['Value']);
	// console_log($b['TargetAttribute']['Value']);
	// console_log('______________________________');
	return $return;
}

function sortTree2(&$tree)
{
	usort($tree, 'compare');
	foreach ($tree as $key => $child) {
		if (isset($child['children'])) {
			//usort($child['children'], 'compare');
			sortTree2($tree[$key]['children']);
		} 
	}
}


function flattenTree($tree)
{
	$tempArr = array();
	foreach ($tree as $value) {
		array_push($tempArr, $value);
		if (isset($value['children'])) {
			$tempArr = array_merge($tempArr, flattenTree($value['children']));
		}
		if (isset($value['children'])) unset($value['children']);
	}
	return $tempArr;
}


function print_table($tree)
{
	$spacer = '<img src="spacer.png"/>';
	echo '<table border=1>';
	foreach ($tree as $key => $val) {
		echo '<tr>';
		if ($val['NodeLevel'] == 1) {
			echo '<td>' . $spacer . $val["InfocusAttribute"]["Attribute"] . '</td>';
		} else if ($val['NodeLevel'] == 2) {
			echo '<td>' . $spacer . $spacer . $val["InfocusAttribute"]["Attribute"] . '</td>';
		} else if ($val['NodeLevel'] == 3) {
			echo '<td>' . $spacer . $spacer . $spacer . $val["InfocusAttribute"]["Attribute"] . '</td>';
		} else {
			echo '<td>' . $val["InfocusAttribute"]["Attribute"] . '</td>';
		}
		echo '<td>' . $val["InfocusAttribute"]['Label'] . '</td>';
		echo '</tr>';
	}
	echo '</table>';
}

$nodes = json_decode($json, true);

$nodes = make_tree($nodes);
//usort($nodes[0]['children'][21]['children'], 'compare');
sortTree2($nodes);

//console_log($nodes[0]['children'][21]['children']);

$nodes = flattenTree($nodes);
print_table($nodes);
//console_log($nodes);
