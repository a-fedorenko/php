<?php

// 31.10.2020 SQL

$host = "localhost";
$user = "root";
$password = "";
$dbname = "shop";

$conn = mysqli_connect($host, $user, $password, $dbname);

// $sql = "INSERT INTO guestbook (username, email, message) VALUES('Ann', 'ann@my.com', 'Hello, Ann here');";

$sql = "SELECT * FROM guestbook";


// mysqli_query($conn, "DROP DATABASE IF EXISTS shop;");

// $sql = <<<EOT
//     DROP TABLE IF EXISTS guestbook; 
//     CREATE TABLE guestbook (
//         id int(11) NOT NULL AUTO_INCREMENT,
//         username varchar(25) NOT NULL,
//         email varchar(30) NOT NULL,
//         message text NOT NULL,
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         PRIMARY KEY(id)
//     );
// EOT;

mysqli_query($conn, $sql);

// mysqli_multi_query($conn, $sql);
mysqli_close($conn);





// $sql = "DROP DATABASE IF EXISTS shop; CREATE DATABASE shop;";
// mysqli_query($conn, "DROP DATABASE IF EXISTS shop;"); // при создании базы данных без указания переменной ($sql) можно это сделать двумя вызовами функции mysqli_query() с разными командами (сначала DROP, потом CREATE)  
// mysqli_query($conn, "CREATE DATABASE shop;");

// mysqli_multi_query($conn, $sql); // если использовать переменную, то нам уже нужна функция mysqli_multi_query() для двух действий
// mysqli_close($conn);


// print_r(get_defined_constants());

// var_dump($argc); //??
// var_dump($argv); //??

// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "test";
// $conn = mysqli_connect($host, $user, $password, $dbname);

// if (mysqli_connect_errno()) {
//     echo ("Error connection");
//     exit();
// }
// echo mysqli_get_host_info($conn);
// mysqli_close($conn);



// $conn = mysqli_init(); // инициализация соединения с базой данных

// if($conn) {
//     if(!mysqli_options($conn, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')){
//         die("Error set Auto Commit");
//     }
// } else {
//     die("Error not init insyanse");
// }

// if (!mysqli_real_connect($conn, 'localhost', 'root', '', 'test')){
//     die('Error Connection ('.mysqli_connect_errno().')'.mysqli_connect_error());
// }

// var_dump($conn);

// mysqli_close($conn); // закрыть соединение с базой днных

// 01.11.2020 OOП
// class User 
// {
//     // Properties
//     public $username;
//     private $first_name; // свойство, к котрому нельзя получить доступ и изменить его
//     private $last_name; 
//     protected $age; // защищенные свойства (которые тоже нельзя изменить)

//     const TABLE = 'users'; // константа внутри класса

//     // public function __construct()
//     // {
//     //     echo "Instance of ".__CLASS__;
//     // } // магический метод класса __construct()

//     // public function __destruct()
//     // {
//     //     echo "Remove item of ".__CLASS__;
//     // } // магический метод класса __destruct()

//     public function __construct($username, $first_name, $last_name, $age)
//     {
//         $this->username = $username,
//         $this->first_name = $first_name,
//         $this->last_name = $last_name,
//         $this->age = $age
//     }

//     public function name() {
//         return $this->first_name . $this->last_name
//     } // создать публичный метод, который будет возвращять значение приватных свойств

//     public function setAge($number) {
//         $this->age = $number;
//     } // функция установки значения переменной age

//     public function getAge() {
//         return $this->age;
//     }


// }



// $user = new User(); // создание нового обьекта класса User

// var_dump($user); //получить свойства обькта

// echo $user->username = "Firs User"; // для доступа к свойствам обьекта (которые определенны как public) используем символ ->
// echo $user->first_name

// echo get_class($user); // определить класс данного обьекта

// echo $user->name(); // дял получения значений приватных свойств класса

// echo $user->setAge(25);
// var_dump($user);

// echo $user->getAge();

// echo User::TABLE; // получить значение константы (обращении от имени класса)
// echo $user::TABLE; // получить значение константы (обращении от имени обьекта)

// $user = new User('user1', 'Mary', 'Ann', 17);

