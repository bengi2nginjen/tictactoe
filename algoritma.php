<?php 
	class Node{
		public $heuristic;
		public $number;
		public $box;
		public $nextNode;
		public $parentNode;

		public function __construct($box, $no) {
        	$this->box = array();
        	$this->box = $box;
        	$this->number = $no;
        	$this->nextNode = array();
    	}

    	function printNode(){
    		echo "level Node: ". $this->number;
    		echo "<br>";
    		echo $this->box[1] ."  ". $this->box[2] ."  ". $this->box[3];
            echo "<br>";
            echo $this->box[4] ."  ". $this->box[5] ."  ". $this->box[6];
            echo "<br>";
            echo $this->box[7] ."  ". $this->box[8] ."  ". $this->box[9];
            echo "<br>";echo "<br>";
    	}

    	function setHeuristic(){

    	}

    	function isEmptyNextNode(){
    		return empty($nextNode);
    	}
	}

	class Gameplay{
		public $root;
		public $i;
		public function __construct($box){
			$this->root = new Node($box, 0);
			$this->i=0;
			$this->makeTree($box, $this->root, true, 4);

		}
		// membuat tree
		function makeTree($box, $node, $ai, $level){
			$levelNode = $node->number+1;
			if($level > 0 && !$this->isFull($node->box)){
				if($ai){
					for($i=1; $i<10; $i++){
						$tempBox = $node->box;
						if($tempBox[$i] == 0){
							$tempBox[$i] = 1;
							array_push($node->nextNode, new Node($tempBox, $levelNode));
							$this->makeTree($tempBox, end($node->nextNode), false, $level-1);
						}	
					}
				}
				else{
					for($i=1; $i<10; $i++){
						$tempBox = $node->box;
						if($tempBox[$i] == 0){
							$tempBox[$i] = 2;
							array_push($node->nextNode, new Node($tempBox, $levelNode));
							$this->makeTree($tempBox, end($node->nextNode), true, $level-1);
						}	
					}

				}
			}
		}

		function isFull($box){
			for($i=1; $i<10; $i++){
				if($box[$i] == 0){
					return false;
				}
			}

			return true;
		}

		
		function printAllNode($node){
			echo "node : ". $this->i . "<br>";
			$this->i +=1;
			$node->printNode();
			foreach ($node->nextNode as $data) {
				$this->printAllNode($data);
			}
		}

	}

	//AI : 1
	// PLAYER : 2

	$box = array('1' => 0, '2' => 0,'3' => 0,'4' => 0,'5' => 0,'6' => 0,'7' => 0,'8' => 0,'9' => 0);

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$box['1'] = $_POST['b1'];
	}

	
	// $node = new Node();
	// $jsonValue = json_encode($node);
	// echo $jsonValu
	$gamePlay = new Gameplay($box);
	$gamePlay->printAllNode($gamePlay->root);
 ?>