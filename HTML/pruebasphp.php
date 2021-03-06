<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

    <header>
        <h1 class="titulo">Jorge Delfin S.</h1> 
    </header>
    
    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="http://www.itszn.edu.mx/coyote/" target="blanc">Universidad</a>
            <a href="https://github.com/tonydelfin" target="blanc">Portafolio</a>
            <a href="index.html " target="blanc">Inicio</a>
        </nav>
    </div>
    


    <section class="hero">
        <div class="contenido-hero">
            <h2>¡Hola!</h2>   
            <h2>Soy Jorge Antonio Delfin Santos</h2><h2>Estudinate de ITSZN</h2>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                  </svg>
            </div>
            <p>Las Esperanzas city, Rio Grande</p>
            

        </div> <!-- .contenido-hero -->
    </section>

    <!-- Comentar -->
   

    <main class="contenedor sombra">

        

        <div class="servicios"> 
    
            <section class="servicio">
                <h3>¿Quien soy?</h3>

                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                </div>
                <p>Hola, soy Jorge Antonio actualmente me encuentro estudiando el sexto semestre en la carrera de <br> Ingenieria en Sistemas Computacionales </p>
            
            </section>
            
            <section class="servicio">
                <h3>Portafolio</h3>

                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-laptop" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="3" y1="19" x2="21" y2="19" />
                        <rect x="5" y="6" width="14" height="10" rx="1" />
                      </svg>


                </div>
                <p>Actualmente no cuento con un portafiolo muy grande, pero e desarrollado algunos proyectos ubicados en mi cuenta de GitHub</p>
                
            </section>
            
            <section class="servicio">
                <h3>Experiencia</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tabler" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 9l3 3l-3 3" />
                        <line x1="13" y1="15" x2="16" y2="15" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                      </svg>
                </div>
                <p>Tengo conocimientos basicos en algunos lenguajes de programacaión como: </p>
                <ul >
                    <li>C#</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>C++</li>
                    <li>Etc...</li>

                </ul>
                
            </section>

            

            
    </div> 
        


        
    </main>

    <section>
        
        <h2>Prueba usando PHP</h2>
    

        <form class="formulario" action="pruebaphp.php" method="post">
            <fieldset>
                <legend>Complete los siguientes datos</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input class="input-text" name="nombre" type="text" placeholder="Nombre">
                    </div>

                    <div class="campo">
                        <label >Número</label>
                        <input class="input-text" name="numero" type="number" placeholder="Numero de veces">
                    </div>

                
                <div>
                    <input class="boton w-sm-100" type="submit" value="Enviar" onclick="leeDatos()">
                </div>

                <br>
                
                <p class="campo" id="respuesta">Resultado: <br></p>
                
                

            </fieldset>
        </form>
    </section>
    
   

    

</body>
</html>