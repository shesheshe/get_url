<?php
class Preg {

	public $sUrl = '';
	public $sGetData = '';
	public $sTempData = '';
	public $aPreg = array(
		'title' => '/<title(.*?)\/title>/i',
		'meta' => '/<meta(.*?)>/i',
		'body' => '/<body.*?>.*?body>/',
		/*'elm' => '/<'.$elm.'.*?>(.*?)<\/'.$elm.'>/',*/
		'a' => '/<a(.*?)a>/',
		'img' => '/<img(.*?)>/',
		'all_html' => 'all_html'
	);
	
	function __construct() { }

	//post url
	function go($url) {
		$this->sUrl 	= $url;
		$this->sGetData = file_get_contents($url);
	}
	
	//找要的目標
	function search($pattern) {
		$this->_echo('條件:' . $pattern);
		if($pattern=='all_html') {
			echo $this->sGetData . '\n';
			return;
		}
		preg_match_all($pattern, $this->sGetData, $matches);
		$this->sTempData = $matches[0];
		foreach($this->sTempData as $k => $v) {
			$this->_echo($v);
		}
	}
	
	function get($key) {
		$this->search($this->aPreg[$key]);
	}
	
	function get_self($pattern) {
		$this->search($pattern);
	}
	
	function _echo($str) {
		echo $str;
		echo "\n";
	}
	
}
$preg = new Preg();