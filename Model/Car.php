<?php

class Car
{
    public $id;
    public $Brand;
    public $Model;
    public $Year;
    public $Price;
    public $DescriptionC;

    public function __construct($id, $Brand, $Model, $Year, $Price, $DescriptionC)
    {
        $this->id = $id;
        $this->Brand = $Brand;
        $this->Model = $Model;
        $this->Year = $Year;
        $this->Price = $Price;
        $this->DescriptionC = $DescriptionC;
    }

    //CREATE Car
    public static function RegisterCar($Brand, $Model, $Year, $Price, $DescriptionC)
    {
        $connect = DBConnection::StartConnection();
        $query = "INSERT INTO cars (Brand, Model, Year, Price, DescriptionC) values ('$Brand', '$Model', '$Year', '$Price', '$DescriptionC')";
        try {
            $querySuccessful = mysqli_query($connect, $query);

            if ($querySuccessful) {
                echo "Bien! Los datos se guardaron correctamente.";
            }
        } catch (Exception $e) {
            return $e;
        }
    }


    // READ cars
    public static function GetAll()
    {
        $carsList = [];
        $connect = DBConnection::StartConnection();
        $query = "SELECT * FROM cars";

        try {
            $queryResult = mysqli_query($connect, $query);
        } catch (Exception $e) {
            return $e;
        }

        while ($cars = $queryResult->fetch_object()) {

            $carsList[] = new Car($cars->id, $cars->Brand, $cars->Model, $cars->Year, $cars->Price, $cars->DescriptionC);
        }

        return $carsList;
    }

    // UPDATE Car
    public static function Update($id, $Brand, $Model, $Year, $Price, $DescriptionC)
    {
        $connect = DBConnection::StartConnection();
        $query = "UPDATE cars SET 
                            Brand = '$Brand',
                            Model = '$Model',
                            Year = '$Year',
                            Price ='$Price', 
                            DescriptionC = '$DescriptionC',
                            WHERE id = '$id'";
        try{
            $querySuccessful = mysqli_query($connect, $query);
            if (!$querySuccessful) {
                echo "Parece que hubo un error! Los datos no se actualzaron correctamente: " . mysqli_error($connect);
            }
        }                    
        catch(exception $e){
            echo $e;
        }


    }

    //DELETE Car
    public static function Delete($id)
    {
        $connect = DBConnection::StartConnection();
        $query = "DELETE FROM cars WHERE id = '$id'";
        $querySuccessful = mysqli_query($connect, $query);

        try {
            $querySuccessful = mysqli_query($connect, $query);
        } catch (Exception $e) {
            return $e;
        }

        if (!$querySuccessful) {
            echo "Parece que hubo un error! No se pudo eliminar " . mysqli_error($connect);
        }
    }

    // Search Car

    public static function GetCarById($id)
    {
        $connect = DBConnection::StartConnection();
        $query = "SELECT FROM cars WHERE id = '$id'";

        try {
            $querySuccessful = mysqli_query($connect, $query);
        } catch (Exception $e) {
            return $e;
        }

        if (mysqli_num_rows($querySuccessful) > 0) {
            $car = $querySuccessful->fetch_object();
            return new Car($car->id, $car->Brand, $car->Model, $car->Year, $car->Price, $car->DescriptionC);
        } else {
            echo 'No se encuentra un producto con ese ID';
        }
    }


    public static function GetCarByBrand($Brand)
    {
        $connect = DBConnection::StartConnection();
        $query = "SELECT FROM cars WHERE Brand = '$Brand'";

        try {
            $querySuccessful = mysqli_query($connect, $query);
        } catch (Exception $e) {
            return $e;
        }

        if (mysqli_num_rows($querySuccessful) > 0) {
            $car = $querySuccessful->fetch_object();

            return new Car($car->id, $car->Brand, $car->Model, $car->Year, $car->Price, $car->DescriptionC);
        } else {
            echo "Aún no hay registros con esa marca";
        }
    }
}
