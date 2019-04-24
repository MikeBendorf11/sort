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

					$arr = array(
						array(
							"NodeLevel" => 0,			'val' => 'z'
						),
						array(
							"NodeLevel" => 1,							'val' => 'x'
						),
						array(
							"NodeLevel" => 2,							'val' => 18
						),
						array(
							"NodeLevel" => 3,							'val' => 17
						),
						array(
							"NodeLevel" => 4,							'val' => 16
						),
						array(
							"NodeLevel" => 3,							'val' => 10
						),
						array(
							"NodeLevel" => 3,							'val' => 15
						),
						array(
							"NodeLevel" => 4,							'val' => 4
						),
						array(
							"NodeLevel" => 2,							'val' => 2
						),
						array(
							"NodeLevel" => 1,							'val' => 'j'
						),
						array(
							"NodeLevel" => 1,							'val' => 'n'
						),
						array(
							"NodeLevel" => 2,							'val' => 15
						),
						array(
							"NodeLevel" => 2,							'val' => 18
						),
						array(
							"NodeLevel" => 3,							'val' => 50
						),
						array(
							"NodeLevel" => 2,							'val' => 60
						),
						array(
							"NodeLevel" => 2,							'val' => 15
						),
						array(
							"NodeLevel" => 3,							'val' => 5
						),
						array(
							"NodeLevel" => 3,							'val' => 9
						),
						array(
							"NodeLevel" => 1,							'val' => 'a'
						),
						array(
							"NodeLevel" => 2,							'val' => 3
						),
						array(
							"NodeLevel" => 3,							'val' => 1
						),
						array(
							"NodeLevel" => 0,			'val' => 'k'
						),
					);

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
						$a_attr = $a["InfocusAttribute"];
						$b_attr = $b["InfocusAttribute"];
						if($a_attr["Attribute"] == $b_attr["Attribute"]) {
							if($a_attr["Label"] == $b_attr["Label"]) return 0;
							if($a_attr["Label"] == null) return 1;
							if($b_attr["Label"] == null) return -1;
							return strcmp($a_attr["Label"], $b_attr["Label"]);
						}
						if($a_attr["Attribute"] == null) return 1;
						if($b_attr["Attribute"] == null) return -1;
						$cmp = strcmp($a_attr["Attribute"], $b_attr["Attribute"]);
						if($cmp == 0){
							return strcmp($a_attr["Label"], $b_attr["Label"]);
						}
						return $cmp;
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

					function sort_tree($tree)
					{
						sort_children($tree);
						return $tree;
					}

					function sortTree2(&$tree)
					{
						usort($tree, 'compare');
						foreach ($tree as $child) {
							if (isset($child['children']) > 0) {
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



					$nodes = $matchResults["SpotMatchResultPair"];
					$nodes = make_tree($matchResults["SpotMatchResultPair"]);
					$nodes = array(sort_tree($nodes[0]));
					$nodes = flattenTree($nodes);
					//console_log($nodes);
					console_log2($nodes);