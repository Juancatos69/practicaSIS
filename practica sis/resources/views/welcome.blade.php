<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRCARLOS - Mi Página</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos para el formulario de login */
        .login {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login h2 {
            text-align: center;
        }

        .login form {
            display: flex;
            flex-direction: column;
        }

        .login label {
            margin-bottom: 5px;
        }

        .login input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .login .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>BIENVENIDO A LA PAGINA DE MRCARLOS</h1>
        <nav>
            <ul>
                <li><a href="/">INICIO</a></li>
                <li><a href="/sobre">SOBRE MR CARLOS</a></li>
                <li><a href="/login">LOGIN</a></li> <!-- Añadir enlace al login -->
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <h2>CREADOR DE CONTENIDOS</h2>
        <p>MR EDITOR DE VIDEOS Y ASPIRANTE A MUCHAS COSAS</p>
        <a href="/sobre" class="btn">QUIERES SABER MÁS BUENO</a>
    </section>

    <section class="features">
        <h2>MI CARACTERÍSTICA</h2>
        <div class="feature-item">
            <h3>CREADOR DE CONTENIDO PORQUE LO HAGO</h3>
            <p>HAGO FELIZ A LA GENTE Y ME GUSTA</p>
        </div>
        <div class="feature-item">
            <h3>ME GUSTA LA PROGRAMACIÓN</h3>
            <p>ESTO SERÁ GENIAL</p>
        </div>
        <div class="feature-item">
            <h3>ENTRA RÁPIDO</h3>
            <p>ENTRA A MIS REDES TAL VEZ TE INTERESE</p>
        </div>
    </section>
    </section>

    <footer>
        <p>&copy; 2024 - MRCARLOS</p>
        <p>SÍGUEME</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=61557377249867" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/mrcarlosfrases/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@mrcarlosfrases" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
    </footer>
</body>
</html>
