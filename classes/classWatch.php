<?php
	class WatchFace{
		public $faceName, $faceDescription;
		
		public function __construct($name, $description){
			$this->faceName = $name;
			$this->faceDescription = $description;
		}	
		
		public function getName()
		{
			return $this->faceName;
		}
	}
?>