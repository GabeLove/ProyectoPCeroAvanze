<?php
include_once '../../lib/db.php';

class Productos extends DB{

    function __construct(){
        parent::__construct();
    }

   public function get($id){
    $query = $this -> connect()->prepare('SELECT * FROM productos WHERE id = :id LIMIT 0,12');
    $query->execute(['id' => $id]);

    $row = $query->fetch();

    return[
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'caracteristicas' => $row['caracteristicas'],
        'link' => $row['link'],
        'imagen' => $row['imagen']
    ];
   }

   public function getItemsByCategory($category){
    $query = $this->connect()->prepare('SELECT * FROM productos WHERE nivel=1 AND categoria = :cat LIMIT 0,12');
    
    $query->execute(['cat' => $category]);
    

    $items=[];

    while($row = $query->fetch(PDO::FETCH_ASSOC)){

        $item = [
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'caracteristicas' => $row['caracteristicas'],
            'link' => $row['link'],
            'imagen' => $row['imagen']
        ];

        array_push($items,$item); 

    }

    return $items;
   }

   public function getItemsByCategory1($category){
    $query = $this->connect()->prepare('SELECT * FROM productos WHERE nivel=2 AND categoria = :cat LIMIT 0,12');
    
    $query->execute(['cat' => $category]);
    

    $items=[];

    while($row = $query->fetch(PDO::FETCH_ASSOC)){

        $item = [
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'caracteristicas' => $row['caracteristicas'],
            'link' => $row['link'],
            'imagen' => $row['imagen']
        ];

        array_push($items,$item); 

    }

    return $items;
   }

   
   public function getItemsByCategory2($category){
    $query = $this->connect()->prepare('SELECT * FROM productos WHERE nivel=3 AND categoria = :cat LIMIT 0,12');
    
    $query->execute(['cat' => $category]);
    

    $items=[];

    while($row = $query->fetch(PDO::FETCH_ASSOC)){

        $item = [
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'caracteristicas' => $row['caracteristicas'],
            'link' => $row['link'],
            'imagen' => $row['imagen']
        ];

        array_push($items,$item); 

    }

    return $items;
   }

}
?> 