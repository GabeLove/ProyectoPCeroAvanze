<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
    <div class="imagen"><img src="img/imgcpus/<?php echo $item['imagen'];  ?>" /></div>
    <div class="titulo"><?php echo $item['nombre'];  ?></div>
    <div class="precio">Tipo:<?php echo $item['caracteristicas'];  ?> </div>
    
    <div class="botones">
        <button class='btn-add'>Agregar al carrito</button>
    </div>
</div>