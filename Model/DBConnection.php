<?php

    class DBConnection
    {
        private static $connection = null;

        public static function StartConnection()
        {
            include ('Config.php');

            if (!isset(self::$connection))
            {
                try
                {
                    self::$connection = mysqli_connect($Server, $User, $Pass, $DBName);
                }
                catch(exception $e)
                {

                    echo $e;
                }
            }

            return self::$connection;
        }
    }        

?>
