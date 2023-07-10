<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); 

    class db{
        // Properties
        private $host = 'localhost';
        private $user = 'indigo';
        private $password = '1234';
        private $dbname = 'db_indigo';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->host;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->user, $this->password);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, 
                                                                  PDO::ERRMODE_EXCEPTION);

            return $dbConnection;
        }
    }

    $id = $_POST["productID"];
    $name = $_POST["username"];
    $quantity = $_POST["quantity"];
    $image = $_POST["image"];

try {
    $sql = "INSERT INTO cart (username,productID,quantity,image) VALUES
			               (:username,:productID,:quantity,:image)";
    $db = new db();
    // Connect
    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $name);
    $stmt->bindValue(':productID', $id);
    $stmt->bindValue(':quantity', $quantity);
    $stmt->bindValue(':image', $image);
    $stmt->execute();
    $count = $stmt->rowCount();
    $db = null;

    $data = array(
        "status" => "success",
        "rowcount" =>$count
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}
?>