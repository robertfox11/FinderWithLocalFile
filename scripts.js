'use stricts'
var btnCargar = document.getElementById('cargar')
    //pasamos  primero definir que primero se carge la pagina antes de la ejecucion dej js
btnCargar.addEventListener('click', cargarAjax);

function cargarAjax() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "conexion.php", true)
    xhr.send();
    xhr.onreadystatechange = function() {
        //si tenemos una respueta exitosa
        if (this.readyState == 4 && this.status == 200) {
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


}


window.addEventListener("load", inicio);
// creamos la funcion con el evento click y nombrando una nueva funcion

function inicio() {
    document.getElementById("searchCountry").addEventListener("keyup", toshowname);
    // document.getElementById("showCountries").addEventListener("submit", toshowAjax);
}
// con la nueva funcion creada trabajaremos con Ajax

function toshowname(e) {
    //buscamos por elemento y extremos el value
    var cadena = e.target.value;
    xhr.open("GET", "conexion.php?nombre=" + cadena, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhr.send();
    xhr.send("nombre=" + cadena);
    if (cadena.length == 0) {
        document.getElementById("sugerencia").innerHTML = "";
        return;
    } else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sugerencia").innerHTML = this.responseText;
            }
        }

    }
}

// function toshowAjax() {
//     var xhr = new XMLHttpRequest();
//     //cuando cambien el estado que ejecute esta funcion anonima
//     xhr.open("Get", "conexion.php", true);
// xhr.onreadystatechange = function() {
//     //hacemos una peticion de http
//     if (this.readyState == 4 && this.status == 200) {
//         //Capturaremosel texto de php al hacer parse un arraya
//         var countries = JSON.parse(this.responseText);

//         //recorremos el array con un for
//         for (var i = 0; i < countries.length; i++) {
//             document.getElementById("parrafo").innerHTML += countries[i] + "<br/>";
//         }
//         //Si queremos convertir un array js a una cadena usamos stringfy
//         var cadena = JSON.stringify(countries);
//         document.getElementById("parrafo").innerHTML += "El array" + countries + "en modo cadena es" + cadena + "<br/>";
//     }
// }

//     xhr.send();
// }