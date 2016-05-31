<?php
include 'App\Animals\Dog.php';

$bella = new \App\Animals\Dog('bella');
$bella->type = 'boxer';
$bella->setGender('female');
$bella->save();

$animals = \App\Animals::all();

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <ul>
    <?php foreach($animals as $animal): ?>
        <li>
            <?= $animal['name'] ?> - <?= $animal['type'] ?>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>



<?php
namespace App\Animals;
include 'db.php';


class Dog {
    private $name;
    public $type; 
    private $gender;
  
    function __construct ($arr) { 
        $this->name = $arr; 
    } 
    
    public function Setgender($x){
       $this -> gender = $x;
    }
    
    public function save() {
        $sql = 'INSERT INTO `dogs`(`name`, `type`, `gender`) VALUES ("'.$this->name.'", "'.$this->type.'", "'.$this->gender.'")';
           
      query ($sql);
    }
}



<?php
namespace App;
 class  Animals{
     
     static function all(){
         $sql = 'select * from `dogs`';
         $animals = query($sql);
         rerurn $animals;
     }
 }


<?php

function query($sql) {
    $pdo = new PDO('mysql:host=localhost; charset=utf8; dbname=animals', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    $stmt = $pdo->query($sql);
    if(stripos($sql, 'select') !== false) {
        return $stmt->fetchAll();
    } 
    return [];
}
