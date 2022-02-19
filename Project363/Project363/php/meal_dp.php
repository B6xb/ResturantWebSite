<?php 
define('SERVER', 'localhost');
 define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'meals');
   $connection = mysqli_connect("localhost", "root", "", "meals");

class meal_db{
 
    private $connection;

    
    public function meal_db(){

        $this->connection = $connection;
    
        if( mysqli_connect_errno() ) {
            die( 'Could not connect: ' . mysqli_connect_error() );
         }
         
    }

    public function getAllMeals(): ?array {
        global $connection;
        $sql = "SELECT * FROM meal";

        $retrival = mysqli_query($connection ,$sql);
        return mysqli_fetch_all($retrival,MYSQLI_ASSOC);
    }

    public function getMealById($id) {
      
        global $connection;

        $sql = "SELECT * FROM meal m where m.id = $id ";

        $retrival = mysqli_query($connection ,$sql);
        
        return mysqli_fetch_array($retrival, MYSQLI_ASSOC);

    }
    

    
    function getMealReviwes($id): array {
        global $connection;
   
        $sql = " SELECT * FROM reviews where id like '%$id%'";
        $result = mysqli_query($connection, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function addMealReview($data):bool{

        global $connection;

            $sql = "INSERT INTO reviews (id,reviewer_name,review) VALUES ('$id','$reviewer_name','$review')"; 
            $result = mysqli_query($connection, $sql);
            mysqli_fetch_all($result,MYSQLI_ASSOC);
            
    
    }

    private function upload_file($file):bool{
        $target_file = "reviewImages/".basename($file["reviewer_name"]);
        return move_uploaded_file($file["tmp_name"], $target_file);
    }


}

?>