<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/shop">Shop</a></li>
</ul>
<?php
// 



// echo "Hello World", 3+4, "Hello Echo";

// print "Hello Print";

// var_dump('Int Sise', PHP_INT_MIN);

// $foo // для обьявления переменной нужно перед ней обязательно ставить знак доллараб (если не будет этого знака, то это уже будет константаб а не переменная)

// $foo = "1";
// var_dump($foo);

// $foo *= 2;
// var_dump($foo);

// $foo = $foo*3.14;
// var_dump($foo);

// $foo = 5 * "10 Little Pigs";
// var_dump($foo);

// $foo = "10 Little Pigs";
// var_dump($foo);

// settype($foo, "integer");
// var_dump((int)$foo);

// var_dump((binary)$foo);
// var_dump((boolean)$foo);

// $foo = "World";

// echo "Hello $foo";


// $arr = [
//     2=>1,4=>2,6=>4,8=>5,"a"=>6,"b"=>7
// ];
// var_dump($arr);

// $arr = [
//     2=>1,"2"=>2,2.3=>4
// ];
// var_dump($arr);

// $arr = [
//     "foo"=>"bar",
//     10=>100,
//     "m"=> [
//         "d" => [
//             "a"=>"zoo"
//         ]
//     ]
// ]; // многомерный массив
//var_dump($arr['m']['d']['a']); // доступ к многомерному массиву

// $arr = [
//     "foo"=>"bar",
//     10=>100,
//     "m"=> [
//         "d" => [
//             "a"=>"zoo"
//         ]
//     ]
// ];
// print_r($arr);
// echo "<br>"; //перевод строки
// $arr[] = 1000;

// print_r($arr);
// echo "<br>";
// $arr = array_values($arr); // переиндексация массива
// print_r($arr);
// echo "<br>";


// phpinfo(); // выводит все настройки нашей среды разработки

// echo $_SERVER['REQUEST_URI'];

// if ($_SERVER['REQUEST_URI']=="/"){
//     echo "<h1>Home Page</h1>";
// }else if ($_SERVER['REQUEST_URI']=="/about"){
//     echo "<h1>About Page</h1>";
// }else if ($_SERVER['REQUEST_URI']=="/shop"){
//     echo "<h1>Shop Page</h1>";
// }else if ($_SERVER['REQUEST_URI']=="/contact"){
//     echo "<h1>Contact Page</h1>";
// }else {
//     echo "<h1>404 Not Found</h1>";
// }

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        echo "<h1>Home Page</h1>";
        break;
    case '/about':
        echo "<h1>About Page</h1>";
        break;
    case '/shop':
        echo "<h1>Shop Page</h1>";
        break;
    case '/contact':
        echo "<h1>Contact Page</h1>";

        if(isset($_POST['username'])){
            // var_dump($_POST);
            // var_dump($_REQUEST);
            echo "<h2>Hi, ".$_POST["username"]."!</h2>";
        }

    ?>

    <form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>">
        <lable>Name:</lable>
        <input name="username">
        <input type="submit">
    </form>
<?php
        
        break;
    
    default:
        echo "<h1>404 Not Found</h1>";
        break;
}

