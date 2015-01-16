<?php
    session_start();
    class Stores extends ControllerDAO{
        public function index(){
            
            $offersModel = $this->model('OffersDAO');
            $userOffers = $offersModel->getOffersByUser($_SESSION['uid']);
            
            $this->view('templates/header');
            
            if(isset($_POST['offer'])){
                $offer = $_POST['offer'];
                $sql = "select * from discounts where title = '$offer'";
                $offerDetails = $offersModel->getOffersDAO($sql);
                $this->view('stores/index', array("userOffers"=>$userOffers, "offerDetails"=>$offerDetails));
                
            }else{
                $offerDetails=array();
                $this->view('stores/index', array("userOffers"=>$userOffers, "offerDetails"=>$offerDetails));
            }
            
            $this->view('templates/footer');

        }
        
        public function details(){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $lat = $_POST['lat'];
            $long = $_POST['long'];
            $percent = $_POST['percent'];
            
            $offersModel = $this->model('OffersDAO');
            $offersModel->updateOfferDetails($id, $title, $desc, $lat, $long, $percent);
            echo"<META http-equiv='refresh' content='0;URL=http://localhost/mvc/public/stores'>";
        }
        
        public function newOffer(){
            $title = $_POST['title'];
            $uid = $_SESSION['uid'];
            
            $offersModel = $this->model('OffersDAO');
            $success = $offersModel->addOffer($title, $uid);
            echo"<META http-equiv='refresh' content='0;URL=http://localhost/mvc/public/stores'>";
        }
        
        public function removeOffer(){
            $title = $_POST['title'];
            $uid = $_SESSION['uid'];
            
            $offersModel = $this->model('OffersDAO');
            $offersModel->deleteOffer($title, $uid);
            echo"<META http-equiv='refresh' content='0;URL=http://localhost/mvc/public/stores'>";
        }
    }
?>
