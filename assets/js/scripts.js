'use stricts'
// window.addEventListener("load", inicio);

// function inicio() {
var btnCargar = document.getElementById('cargar');

// }


//pasamos  primero definir que primero se carge la pagina antes de la ejecucion dej js


function cargarAjax() {
    // creamos el objeto
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "conexion.php", true)

    // pasar datos

    xhr.onreadystatechange = function() {
        //si tenemos una respueta exitosa
        if (xhr.readyState == 4 && this.status == 200) {
            console.log("se cargo correctamente");
            var json = JSON.parse(xhr.responseText);
            console.log(json);


            let res = document.querySelector('#res');
            // res.innerHTML = json.country;
            // contenido.innerHTML = json.latitude;
            for (var item of json) {
                console.log(item);
                res.innerHTML += `
                <tr>
                        <th>${item.country}</th>
                        <th>${item.latitude}</th>
                        <th>${item.longitude}</th>
                        <th>${item.name}</th>
                </tr>
                `
            }

        }
    }
    xhr.send();
}
btnCargar.addEventListener('click', cargarAjax);