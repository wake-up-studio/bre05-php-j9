<?php
    require "connexion.php";
    require "User.php";
    
    // $query = $db -> prepare("SELECT * FROM users WHERE id = 1");
    // $query -> execute();
    // $userDb = $query -> fetch(PDO::FETCH_ASSOC);
    // var_dump($userDb);
    
    $superman = [
    	"first_name" => "Clark",
    	"last_name" => "Kent",
    	"email" => "clark.kent@test.fr"
    ];
    
    // $query = $db -> prepare("SELECT * FROM users");
    // $query -> execute();
    // $users = $query -> fetchAll(PDO::FETCH_ASSOC);
    // var_dump($users);
    
    // $i = 1;
    // foreach($users as $user){
    //     $user = new User($user["first_name"], $user["last_name"], $user["email"],);
        
    //     $user -> setId($i);
    //     echo $user -> getId();
    //     echo "<br>";
    //     echo $user -> getFirstName();
    //     echo "<br>";
    //     echo $user -> getLastName();
    //     echo "<br>";
    //     echo $user -> getEmail();
    //     echo "<br>";
    //     $i++;
    // };
    
    $user = new User($superman["first_name"], $superman["last_name"], $superman["email"]);

    $query = $db -> prepare("INSERT INTO users (id, first_name, last_name, email) VALUE (NULL, :first_name, :last_name, :email)");
    $parameters = [
        'first_name' => $user -> getFirstName(),
        'last_name' => $user -> getLastName(),
        'email' => $user -> getEmail()
    ];
    $query -> execute($parameters);
    $id = $db -> lastInsertId();
?>