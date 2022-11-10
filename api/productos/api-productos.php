<?php

include_once 'productos.php';

if(isset($_GET['categoria']) && isset($_GET['nivel'])){
$categoria = $_GET['categoria'];
$nivel = $_GET['nivel'];

    if($categoria == '' && $nivel == '' ){
        echo json_encode(['statuscode' => 400,'response'=> 'No existe esa categoria']);
    }else{
        if($nivel==1){
        $productos = new Productos();
        $items = $productos-> getItemsByCategory($categoria);

        echo json_encode(['statuscode' => 200, 'items'=> $items]); }
        if($nivel==2){
            $productos = new Productos();
            $items = $productos-> getItemsByCategory1($categoria);
    
            echo json_encode(['statuscode' => 200, 'items'=> $items]); }
            if($nivel==3){
                $productos = new Productos();
                $items = $productos-> getItemsByCategory2($categoria);
        
                echo json_encode(['statuscode' => 200, 'items'=> $items]); }
    }

}else if(isset($_GET['get-item'])){
    $id= $_GET['get-item'];
    
    if($id == ''){
        echo json_encode(['statuscode' => 400,'response'=> 'No hay valor para id']); 
    }
    else{
        $productos = new Productos();
        $item = $productos -> get($id);
        echo json_encode(['statuscode' => 200, 'item' => $item]);
    }
}else{
    echo json_encode(['statuscode' => 400,'response'=> 'No hay accion']);
}


?>