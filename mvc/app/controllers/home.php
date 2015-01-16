<?php 
    session_start(); 
	class Home extends ControllerDAO{
		
		public function index(){
			if(!isset($_SESSION['user'])){
				$this->view('templates/header');
				$this->view('login/index');
				$this->view('templates/footer');
			
			}else{
				$recipesModel = $this->model('RecipesDAO');
				$recipes = $recipesModel->getTopThreeRecipesDAO("SELECT * FROM recipes ORDER BY RAND() LIMIT 3 ");
				
				if(isset($_POST['searchField'])){ 
					$searchField = $_POST['searchField'];
					if(isset($_POST['radio_ingr']))
					{
					$searchRecipes = $recipesModel->showSearchedRecipes("SELECT * FROM recipes WHERE Ingredients LIKE '%$searchField%' ");
					}
					else if (isset($_POST['radio_time']))
					{
					$searchRecipes = $recipesModel->showSearchedRecipes("SELECT * FROM recipes WHERE time='$searchField' ");
					}
					else
					$searchRecipes = $recipesModel->showSearchedRecipes("SELECT * FROM recipes WHERE title LIKE '%$searchField%' ");
					
					
					$this->view('templates/header'); 
					$this->view('home/index', array("recipes"=>$recipes, "searchRecipes"=>$searchRecipes));
					$this->view('templates/footer');
				}
				else {
				$this->view('templates/header'); 
				$this->view('home/index', array("recipes"=>$recipes));
				$this->view('templates/footer');
			
				}	
		
			}
		}
	}
?>
