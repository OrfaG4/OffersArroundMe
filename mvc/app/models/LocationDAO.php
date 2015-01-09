


<?php
/*Η κλάση LocationDAO ειναι το model Που διαχειρίζεται
 *την τοποθεσία του χρήστη μεσα απο txt αρχείο
<?php
class LocationDAO{
	protected $txt;
	
	//Διαβαζω το αρχείο και επιστρέφω τα περιεχόμενα του.
	public function getMyLocation($location){
		$this->txt = fopen($location, "r") or die("Unable to open file!");
		$context = fread($this->txt,filesize(APP . "location.txt"));
		fclose($this->txt);
		return $context;
		}
	
	//Σπαω το κειμενο σε 2 μεταβλητές.	
	public function seperateCoordinates($context){
		$coordinates = explode(" ",$context);
		return $coordinates;
	}
}

?>
