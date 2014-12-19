<?php 
	class Location extends ControllerDAO{
		
		public function index(){
			$locationModel = $this->model('LocationDAO');
                        $context = $locationModel->getMyLocation(APP . "location.txt");
			$location = $locationModel->seperateCoordinates($context);
			
			$latLong = array("lat"=>$location[0],"long"=>$location[1]);
			$this->view('location/index',array('location'=>$latLong));
		}
	}

?>
