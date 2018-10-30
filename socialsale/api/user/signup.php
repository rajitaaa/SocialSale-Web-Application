    <?php
     
    // get database connection
    include_once '../config/database.php';
     
    // instantiate user object
    include_once '../objects/user.php';
     
    $database = new Database();
    $db = $database->getConnection();
     
    $user = new User($db);
     
    // set user property values
    $user->l_username = $_POST['l_username'];
    $user->password = $_POST['password'];
    $user->phone_no = $_POST['phone_no'];
    $user->email_id = $_POST['email_id'];
    $user->first_name = $_POST['first_name'];


     
    // create the user
    if($user->signup()){
        $user_arr=array(
            "status" => true,
            "message" => "Successful Signup!",
            "l_username" => $user->l_username
        );
    }
    else{
        $user_arr=array(
            "status" => false,
            "message" => "Username already exists!"
        );
    }
    print_r(json_encode($user_arr));
    ?>