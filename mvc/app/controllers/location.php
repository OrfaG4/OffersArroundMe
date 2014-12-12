<?php 
	class Location extends ControllerDAO{
		
		public function index(){
			$locationModel = $this->model('LocationDAO');
			$location = $locationModel->seperateCoordinates();
			
			$latLong = array("lat"=>$location[0],"long"=>$location[1]);
			
			$this->view('location/index',array('location'=>$latLong));
		}
	}

?>