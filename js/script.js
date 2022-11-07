document.addEventListener('DOMContentLoaded',event=> {
    //cookies
    const cookies = document.cookie.split(';');
    let cookie = null;

    cookies.forEach(item =>{
        if(item.indexOf('items') > -1){
            cookie = item;
        }
    });
    
    if(cookie != null){
        const count  = cookie.split('=')[1];
        console.log(count);
        document.querySelector('.btn-carrito').innerHTML = `(${count}) Carrito`;
    }

});

const bCarrito = document.querySelector('.btn-carrito');

bCarrito.addEventListener('click', event =>{

    const carritoContainer = document.querySelector('#carrito-container');

    if(carritoContainer.style.display == ''){
        carritoContainer.style.display = 'block';
        actualizarCarritoUI();
    }else{
        carritoContainer.style.display = '';
    }
    
});

function actualizarCarritoUI(){

    fetch('http://localhost/ProyectoPCeroAvanze/api/carrito/api-carrito.php?action=mostrar')
    .then(res => res.json())
    .then(response => {
        console.log(response);
        let tablaCont = document.querySelector('#tabla');
        let precioTotal = '';
        let html = '';

        response.items.forEach(element =>{
            html +=`
            <div class='fila'>
                <div class='imagen'></div>
                    <img src='img/discos/${element.imagen}' width='100'/>
                <div class='info'>
                    <input type='hidden' value='${element.id}'/>
                    <div class='nombre'>${element.nombre}</div>
                    <div>Tipo${element.tipo}</div>
					<div>${element.cantidad} discos</div>
					<div class='capacidad'>${element.capacidad}</div>
                    <div>Subtotal: ${element.subtotal}</div>
                    <div class-'botones'><button class='btn-remove'>Quitar 1 del carrito</button></div>
                </div>
            </div>
            `;
        });

        precioTotal = `<p>Productos: ${response.info.count}</p>`;
        tablaCont.innerHTML= precioTotal + html;

        document.cookie = `items=${response.info.count}`; 

        bCarrito.innerHTML = `(${response.info.count}) Carrito`;

        document.querySelectorAll('.btn-remove').forEach(boton =>{
            boton.addEventListener('click', e =>{
                const id = boton.parentElement.parentElement.children[0].value;

                removeItemFromCarrito(id);
            })
        })
    })
    
}

const botones = document.querySelectorAll('.btn-add');

 botones.forEach(boton =>{
    const id = boton.parentElement.parentElement.children[0].value;

    boton.addEventListener('click', e =>{
        addItemToCarrito(id);
    });
 });

function removeItemFromCarrito(id){
    fetch('http://localhost/ProyectoPCeroAvanze/api/carrito/api-carrito.php?action=remove&id='+id)
    .then(res => res.json())
    .then(response => { 
        console.log(response.status);
        actualizarCarritoUI();

    });
}

function addItemToCarrito(id){
    fetch('http://localhost/ProyectoPCeroAvanze/api/carrito/api-carrito.php?action=add&id='+id)
    .then(res => res.json())
    .then(response => { 
        console.log(response.status);
        actualizarCarritoUI();

    });

}