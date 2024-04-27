<?php

// class Flat{


    // public ?string $testPub = 'public';
    // private string $testPriv = 'private';
    // protected string $testProt = 'Protective';

    // private function privateMethod(): void{
    //     echo "JEstem prywatną metodą <br>";
    // }

    // public function printProperties(): void{
    //     var_dump($this->testPub);
    //     var_dump($this->testPriv);
    //     var_dump($this->testProt);

    //     $this->privateMethod();
    // }


    // public function isTypeSet(): bool {
    //     return (bool) $this ->type;
    // }    
    
    // public function printType(): void {
    //     if($this->isTypeSet()){
    //         echo "Nazse mieszkanie to " .
    //         $this->type . "<br>";
    //     } else {
    //         echo "Jeszcze nie wiemy jakiego typu to jest mieszkanie <br>";
    //     }
    // }    

    // public function open(): void{ 
    //     echo "Drwzi zostały otwarte <br>";
    // }

    // public function close(): void{
    //     echo "Drwzi zostały zamknięte <br>";
    // }

    // public function doSomething(string $command): ?string{
    //     if($command === 'test') {
    //         return null;
    //     }
    //     return 'Dzień dobry!';
    // }


//     private string $doorLockCode = '123qwe';

//     private bool $closed = true;

//     public function close() : void {
//         $this-> close = true;
//     }

//     public function open(string $code) : void {
//         if($code === $this->doorLockCode){
//             $this->closed = false;
//             echo "Mieszkanie zostało otwarte <br>";
//         }else {
//             echo "Kod jest niepoprawny";
//         }
//     }
//     public function isOpen() : bool {
//         return !$this->closed;
//     }
// };




// $flat = new Flat();
// $flat->open('123qwe');
// var_dump($flat);




// var_dump($object->testPub);
// var_dump($object->testPriv);
// var_dump($object->testProt);

// $object->privateMethod();
// $object-> printProperties();







/* 
class NazwKlasy(
    ciało klasy
    )
    */
    
    
    // $myFlat = new Flat();
    // $myFlat->printType();
    // $myFlat->type = 'Jednorodzinne';
    // $myFlat->printType();

    // $myFlat2 = new Flat();
    // $myFlat2->printType();

// $myFlat -> open();
// $myFlat -> close();
// $temporary = $myFlat -> doSomething('darek');
// var_dump($temporary);


// $myFlat->type = 'A1';
// var_dump($myFlat->type);


// $myFlat->type = 11;
// $myFlat->type = [];
// $myFlat->type = 'string';
// var_dump($myFlat->type);

// $flatType = $myFlat->type;
// var_dump($flatType);
// $myFlat->type = 'Zmiana';
// var_dump($myFlat->type);
// var_dump($flatType);



// class someClass 
// {
//     public function __construct() 
//     {
//         echo "Hej to ja, konstruktor twojej klasy <br>";
//     }
// }

// $object = new someClass();

// class Flat {
//     private string $doorLockCode = '123qwe';

//     private bool $closed = true;

//     public function __construct(int $doorCode) {
//         if(strlen((string) $doorCode) < 6){
//             echo "Kod jest za krótki <br>";
//         } else {
//             echo "kod został ustrawiony <br>";
//             $this -> doorLockCode = $doorCode;
//         }
//     }

//     public function close() : void {
//         $this -> closed = true; 
//     }

//     public function open(string $code) : void {
//         if($code === $this->doorLockCode){
//             $this->closed = false;
//         }else {
//             echo "Niepoprawny kod <br>";
//         }
//     }

//     public function isOpen() : bool {
//         return !$this -> closesd;
//     }
// }


// $newDoorLockCode = rand(100000,999999);
// $flat = new Flat($newDoorLockCode);
// var_dump($flat);

// $newDoorLockCode = rand(100000,999999);
// $flat2 = new Flat($newDoorLockCode);
// var_dump($flat2);

// class someClass {
//     const TEST = 'test';
//     public const OTHER = 'other';
//     private const PRIV = 'private';

//     public function doSomething() {
//         echo self::TEST . '<br>';
//     }
// }

// var_dump(someClass::OTHER);
// $object = new someClass();
// var_dump($object);

// $object -> doSomething();

// var_dump($object::TEST);




// class someClass {
//     public static string $foo;
//     private static string $bar;

//     public static function doSomething() 
//     {
//         self::$bar = "Wartość prywatnej zmiennej statycznej <br>";
//         echo "Metoda wykonała się <br>";
//         var_dump(self::$bar);
//     }
// }

// class Flat {
//     private const BUILT = 5;

//     private static int $sold = 0;

//     public static function sold() : int {
//         return self::$sold;
//     }

//     public function __construct() {
//         if(self::$sold < self::BUILT) {
//             echo "Witamy w nowym mieszkaniu <br>";
//             self::$sold += 1;
//         }else {
//             echo "Sprzedano wszystkie mieszkania <br>";
//         }
//     }
// }

// $flat1 = new Flat();
// $flat2 = new Flat();
// $flat3 = new Flat();
// $flat4 = new Flat();
// $flat5 = new Flat();
// $flat6 = new Flat();

// var_dump(Flat::sold());


// someClass::$foo = 'foo foo';
// var_dump(someClass::$foo);
// SomeClass::doSomething();

// var_dump(someClass::$bar);

// $object = new someClass();
// var_dump($object::$foo);


// class classParent{

// }

// class child extends classParent {

// }

// class user {
//     public string $login = 'userLogin';
//     private string $topSecret = 'secret';

//     private function __construct() {
        
//     }
// }

// class client extends user {
//     public int $number = 111;

//     public function __construct() {
//         var_dump($this->login);
//         var_dump($this->number);
//     }
// }


// class admin extends user {
//     public string $role = 'superUser';

//     public function __construct() {
//         var_dump($this->login);
//         var_dump($this->role);
//         // var_dump($this->topSecret);
//     }
// }

// $client = new client();
// $admin = new Admin();


// class Rodzic{
//     protected ?string $nazwa = null;

//     public function __construct(string $nazwa) {
//         var_dump("TO JEST KONSTRUKTOR RODZICA <br>");
//         $this->nazwa = $nazwa;
//     }

//     public function pobierzNazwe() : ?string {
//         return $this->nazwa . '<br>';
//     }
// }

// $obiektRodzica = new Rodzic('Testowa nazwa rodzica');
// var_dump($obiektRodzica->pobierzNazwe());


// class Dziecko extends Rodzic {
//     public function __construct(string $tekst, int $number) {
//         var_dump("TO JEST KONSTRUKTOR DZIECKA<BR>");
//     }
// }

// $obiektDziecka = new Dziecko('To jest nazwa dziecka', 115);
// var_dump($obiektDziecka->pobierzNazwe());



// abstract class SomeClass{
//     protected string $property;

//     abstract public function doSomething(string $param1, array $param2) : object;

//     public function property() : string {
//         return $this->property;
//     }
// }


// class Test extends SomeClass {
//     public function doSomething(string $param1, array $param2) : object {
//         return new splClass();       
//     }
// }

// abstract class Renderer {
//     protected string $text;

//     public function __construct(string $text) {
//         $this->text = $text;
//     }

//     abstract public function render() : string;

//     public function text() : string  {
//         return $this->text;
//     }
// }

// class HtmlRenderer extends Renderer {
//     public function render() : string {
//         return '<html><body><h2> -->' . $this->text . '<-- </h2></body></html>';
//     }
// }

// class JsonRenderer extends Renderer {
//     public function render() : string {
//         return json_encode($this->text);
//     }
// }

// $html = new HtmlRenderer('Tekst do wyświetlenia');
// echo $html->render() . '<br>';

// $json = new JsonRenderer('Tekst do wyświetlenia');
// echo $json->render() . '<br>';





// interface ExampleInterface {
//     public const SOMEHING = 'bar';
//     public function doSomething1(int $arg) : string;
//     public function doSomething2(string $arg1, string $arg2) : void;

// }

// class Exaple implements ExampleInterface {
//     public function doSomething1(int $arg) : string {
//         return 'bar';
//     }

//     public function doSomething2(string $arg1, string $arg2) : void {
//         // ...
//     }
// }


// interface RenderInterface {
//     public function render(string $text) : string;
// }

// class HtmlRenderer implements RenderInterface {
//     public function render(string $text) : string {
//         return '<html><head></head><body><div><b>' . $text . '</b></div></body></html>' ;
//     }
// }

// class JsonRenderer implements RenderInterface {
//     public function render(string $text) : string {
//         return json_encode($text);
//     }
// }

// $htmlRenderer = new HtmlRenderer();
// $html1 = $htmlRenderer->render('cokolwiek');
// $html2 = $htmlRenderer->render('cokolwiek2');

// echo $html1;
// echo $html2;

// $json = new JsonRenderer();
// echo $json->render('Tekst w jsonie');


// // final class Vehicle {

// // }

// // class Car extends Vehicle {

// // }

// class Vehicle {
//     final public function doSomething3() : void {
//         echo 'foo';
//     }

//     public function doSomething4() : void {
        
//     }
// }

// class Car extends Vehicle {
//     public function doSomething4() : void {
//         echo 'sialalala';
//     }

//     public function doSomething3() : void {
        
//     }
// }





// declare(strict_types=1);


// namespace Application;
// namespace App\Path\To\Class;
/* 
    use App\Path\To\Class;
    use Main\Exception\AppException;
*/



echo "hello world!";


?>
