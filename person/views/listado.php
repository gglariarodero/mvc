
<html lang="es">

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php URL_SITE  ?>views/css/estilos.css">
</head>
<body>
    
<h1> LISTADO DE PERSONAS </h1>
    <div class="container">
        <table class="table">
            <thead class="thead">
                <th class ="table th">Nombre</th>
                <th class ="table th">Edad</th>
            </thead>

            <tbody> 
                <?php foreach ($datos_finales AS $persona) {?>

                    <tr>
                        <td class ="table td"><?php echo $persona['name']; ?></td>
                        <td class ="table td"><?php echo $persona['edad'];  ?></td>

                    </tr>

                <?php } ?>  

            </tbody>

        </table>

    </div>

</body>

</html>
