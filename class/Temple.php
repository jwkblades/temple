<?php

class Template{
	private $template;
	public function Template($str){
		$this->template = temple_prepare($str);
	}
	public function get(){
		return $this->template;
	}
	public function fetch(){
		return temple_template_fetch($this->template);
	}
	public function close(){
		temple_template_close($this->template);
	}
}

class Temple{
	public function Temple(){
	}
	public function prepare($str){
		return new Template($str);
	}
	public function prepare_file($filepath){
		$content = file_get_contents($filepath);
		return new Template($content);
	}

}

?>
