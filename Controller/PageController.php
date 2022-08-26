<?php
    require_once 'Model/DBConnection.php';
    require_once 'Model/Car.php';

class PageController
{
    public function GetTemplate(){
        include_once 'View/Template/Template.php';
    }
    
    public function GetPage(){

        if( isset($_GET['action']) ){
            $btnAction = $_GET['action'];
            return $this->$btnAction();
        }
    }
    
    private function ShowCars(){
        try{
            $cars = Car::GetAll();
            return include_once "View/CarViews/ShowCars.php";
        }
        catch(exception $e){
            echo $e;
        }
        
    }

    public function ShowForBrand(){
        try{
            if(isset($_GET['_Brand'])){
                $car = Car::GetCarByBrand($_GET['_Brand']);
            }
            return include_once "View/CarViews/ShowForBrand.php";
        }
        catch(exception $e){
            echo $e;
        }
        
    }


    private function SetRegistrer(){
        try{
            if(!empty($_POST['btn'])){
                $Brand = $_POST['_Brand'];
                $Model = $_POST['_Model'];
                $Year = $_POST['_Year'];
                $Price = $_POST['_Price'];
                $DescriptionC = $_POST['_DescriptionC'];
                Car::RegisterCar($Brand, $Model, $Year, $Price, $DescriptionC);
            }
            return include_once "View/CarViews/RegisterCar.php";
            
        }
        catch(exception $e){
             echo "Error";
        }
        
    }

    private function UpdateCar(){
        try{
            if(isset($_GET['_id'])){
                $Car =  Car::GetCarById($_GET['_id']);
            }

            if(!empty($_POST['btn'])){
                $id= $_POST['_id'];
                $Brand = $_POST['_Brand'];
                $Model = $_POST['_Model'];
                $Year = $_POST['_Year'];
                $Price = $_POST['_Price'];
                $DescriptionC = $_POST['_DescriptionC'];
                Car::Update($id, $Brand, $Model, $Year, $Price, $DescriptionC);
                header('Location: ?action=UpdateCar');
            }

            return include_once "View/CarViews/UpdateCar.php";
        }

        catch(Exception $e){
            echo $e;
            print $e;
        }
        
        
    }

    private function DeleteCar(){
        if(isset($_GET['id'])){
            Car::Delete($_GET['id']);
            header("Location: ?action=ShowCars");
        }
    }

    

}

?>