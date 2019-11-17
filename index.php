<?php require_once 'assets/includes/header.php';?>
<main class="container flex-grow-1 bg-purple">
        <div>
            <!-- <input type="text" id="show" class="form-control mr-sm-2" type="search" placeholder="Countries" aria-label="Search"> -->
            Buscador:
            <input type="searchCountry" id="searchCountry" />
            <button id="cargar" value="cargar" class="btn btn-outline-success my-2 my-sm-0">Mostrar</button>
            <p id="sugerencia"></p>
            <div id="contenido" class="container_form result">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="res">

                    </tbody>
                </table>
            </div>

        </div>
    </main>
<?php require_once 'assets/includes/footer.php';?>