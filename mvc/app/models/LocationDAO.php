<?php
/*Η κλάση LocationDAO ειναι το model Που διαχειρίζεται
 *την τοποθεσία του χρήστη μεσα απο txt αρχείο
 */

class LocationDAO{
	protected $txt;
	
	//Διαβαζω το αρχείο και επιστρέφω τα περιεχόμενα του.
	private function getMyLocation(){
		$this->txt = fopen(APP . "location.txt", "r") or die("Unable to open file!");
		$context = fread($this->txt,filesize(APP . "location.txt"));
		fclose($this->txt);
		return $context;
		}
	
	//Σπαω το κειμενο σε 2 μεταβλητές.	
	public function seperateCoordinates(){
		$context = $this->getMyLocation();
		$coordinates = explode(" ",$context);
		return $coordinates;
	}
}

?>