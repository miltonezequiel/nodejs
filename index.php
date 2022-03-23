<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include('class-usuario.php');
include('class-alumno.php');
$persona= new Alumn('juan','perez',35,'Masculino','Ing Sistemas',35550939,8);
$persona->setNombre("juan");
/*$persona->setApellido("perez");
$persona->setEdad(35);
$persona->setGenero('Masculino');
$persona->setCarrera('Ing Sistemas');
$persona->setCuenta(35550939);
$persona->setPromedio(8);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php con POO</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }

        body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto', sans-serif;
        background: #343E46;
        }

        a {
        text-decoration: none;
        }

        .contenedor {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .lista {
        width: 500px;
        }

        .lista a {
        padding: 20px;
        font-size: 18px;
        display: block;
        background: #535e66;
        color: #fff;
        margin-bottom: 20px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: .3s ease all;
        }

        .lista a:hover {
        background: #E86B19;
        }

        .lista a i {
        display: none;
        }

        .lista a.activo i {
        display: block;
        }

        .btn-agregar {
        background: #E86B19;
        border-radius: 5px;
        padding: 20px;
        cursor: pointer;
        font-size: 18px;
        color: #fff;
        border: none;
        margin-bottom: 20px;
        transition: .3s ease all;
        }

        .btn-agregar:hover {
        background: #da6315;
        }

    </style>
</head>
<body>
    <?php 
       //echo'<pre>';
       //var_dump($persona->cancelarClase());
    
    ?>
    <div class="contenedor">
		<button class="btn-agregar" id="btn-agregar">Agregar Elemento</button>
        <button class="btn-agregar" id="add" onclick="agregarElemento();" >Agregar Elemento</button>
		<div class="lista" id="lista">
            <div>
            <a href="#" >
                        Elemento <i class="bi bi-check-square-fill"></i>
                    </a>
            </div>
               <div>
            <a href="#">
                        Elemento <i class="bi bi-check-square-fill"></i>
                    </a>
            </div>
            <div>
            <a href="#">
                        Elemento <i class="bi bi-check-square-fill"></i>
                    </a>
            </div>
		</div>
	</div>

 <script>
    const lista = document.getElementById('lista');
    const btnAgregar = document.getElementById('btn-agregar');
    //console.log(lista.childNodes);
    //lista.childNodes.forEach((element)=> element.addEventListener('click',(e)=> e.target.classList.toggle('activo')))
    lista.addEventListener('click', function(e){
        if(e.target.tagName=='A'){
            e.target.classList.toggle('activo'); 
        }
        
    })
    function agregarElemento(){
        console.log('asdasdasd');
        lista.innerHTML += `
            <div>
                <a href="#">
                    ElementoAdd+ <i class=" bi bi-check-square-fill"></i>
                </a>
          </div> 
        `;
    }

    btnAgregar.addEventListener('click', () => {
        const elemento = `
            <a href="#">
                ElementoAdd <i class="bi bi-check-square-fill"></i>
            </a>
        `;

	lista.innerHTML += elemento;
    });
 </script>   
</body>
</html>