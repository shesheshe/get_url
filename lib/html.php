<?php
class Html {

	function __construct() { }

	function br($count=1) {
		$this->each('<br />', $count);
	}

	function input($type, $self='') {
		if($type=='') { return; }
		echo '<input type=\''.$type.'\' '.$self.' />';
	}
	
	function a($url, $label, $self='') {
		if($url==''||$label=='') { return; }
		echo '<a href=\''.$url.'\' '.$self.'>'.$label.'</a>';
	}
	
	function each($clone, $count) {
		for($i=0; $i<$count; $i++) {
			echo $clone;
		}
	}
	
}
$html = new Html();