<?php
					require "hotreloader.php";
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


					$arr = array(
						array(
							"NodeLevel" => 0,			'val' => 20						),
						array(
							"NodeLevel" => 1,							'val' => 19						),
						array(
							"NodeLevel" => 2,							'val' => 18						),
						array(
							"NodeLevel" => 3,							'val' => 17						),
						array(
							"NodeLevel" => 4,							'val' => 16						),
						array(
							"NodeLevel" => 3,							'val' => 10						),
						array(
							"NodeLevel" => 3,							'val' => 15						),
						array(
							"NodeLevel" => 4,							'val' => 4						),
						array(
							"NodeLevel" => 2,							'val' => 2						),
						array(
							"NodeLevel" => 1,							'val' => 1						),
						array(
							"NodeLevel" => 1,							'val' => 0						),
						array(
							"NodeLevel" => 2,							'val' => 15						),
						array(
							"NodeLevel" => 2,							'val' => 18						),
						array(
							"NodeLevel" => 3,							'val' => 50						),
						array(
							"NodeLevel" => 2,							'val' => 60						),
						array(
							"NodeLevel" => 2,							'val' => 15						),
						array(
							"NodeLevel" => 3,							'val' => 5						),
						array(
							"NodeLevel" => 3,							'val' => 9						),
						array(
							"NodeLevel" => 1,							'val' => 7						),
						array(
							"NodeLevel" => 2,							'val' => 3						),
						array(
							"NodeLevel" => 3,							'val' => 1						),
					);
					echo 'hi';

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
						$cmp = strcmp(
							$a["InfocusAttribute"]["Attribute"],
							$b["InfocusAttribute"]["Attribute"]
						);
						return $cmp !== 0 ? $cmp : strcmp($a["InfocusAttribute"]["Label"], $b["InfocusAttribute"]["Label"]);
					}

					function sortTree(&$tree)
					{
						if(!isset($tree['children']) || sizeof($tree['children']) == 0) return;
						usort($tree['children'], 'compare');
						foreach ($tree['children'] as $child) {
								sortTree($child);
						}
					}

					$nodes = make_tree($arr);

					sortTree($nodes);
					//console_log($matchResults["SpotMatchResultPair"]);
					console_log($nodes);
					$adviceRowCount = 0;



					console_log(flattenTree($nodes));

					function flattenTree($tree)
					{
						$tempArr = [];
						foreach($tree as $key => $value){
							$tempArr[$key]=$value;
							if(isset($value['children']) && sizeof($value['children'])>0){
								$tempArr = array_merge($tempArr, flattenTree($value['children']));
							}
						}

						return $tempArr;
					}


?>