    <?php
    class User{
     
        // database connection and table name
        private $conn;
        private $table_name = "user_login";
     
        // object properties
        public $l_username; 
        public $phone_no;
        public $email_id;
        public $password;
        public $first_name;
        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }
        // signup user
        function signup(){
                if($this->isAlreadyExist()){
                return false;
                }
            // query to insert record
            $query = "INSERT INTO
                        " . $this->table_name . "
                    SET
                        l_username=:l_username, phone_no=:phone_no, email_id=:email_id, password=:password, first_name=:first_name ";
            // prepare query
            $stmt = $this->conn->prepare($query);
            // sanitize
            $this->l_username=htmlspecialchars(strip_tags($this->l_username));
            $this->phone_no=htmlspecialchars(strip_tags($this->phone_no));
            $this->email_id=htmlspecialchars(strip_tags($this->email_id));
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->first_name=htmlspecialchars(strip_tags($this->first_name));
            // bind values
            $stmt->bindParam(":l_username", $this->l_username);
            $stmt->bindParam(":phone_no", $this->phone_no);
            $stmt->bindParam(":email_id", $this->email_id);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":first_name", $this->first_name);
            // execute query
            if($stmt->execute()){
                $this->id = $this->conn->lastInsertId();
                return true;
            }
            return false;
        
        }
        // login user
        function login(){
                 // select all query
            $query = "SELECT
                `l_username`, `password`
            FROM
                " . $this->table_name . " 
            WHERE
                l_username='".$this->l_username."' AND password='".$this->password."'";
    
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            return $stmt;
        }
        
        // a function to check if username already exists
        function isAlreadyExist(){
            $query = "SELECT *
                FROM
                " . $this->table_name . " 
                WHERE
                    l_username='".$this->l_username."'";
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }