<?php

session_start();
include "connection.php";
include "plantillaHtmlAdmin.php";



$sqlProductos="SELECT nombre as nombre,foto as foto,idUsuario as idUsuario,clase as clase, subclase as subclase, descripcion as descripcion FROM actividades where `idUsuario`='1'";
          $consultaProductosCarrito=mysqli_query($con,$sqlProductos);
                ?> 
                    <table id="example" class="display" style="width:70%">

	<thead>
            <tr>
                <th>Nombre</th>
                <th>Clase</th>
                <th>Subclase</th>
                <th>Video</th>
            </tr>
        </thead>
                   
        <tbody class="tableBody"> 
                    
                    <?php
          while ($knowProductosCarrito = mysqli_fetch_array($consultaProductosCarrito)){
              $nombreActividad = $knowProductosCarrito["nombre"];
          $fotoActividad = $knowProductosCarrito["foto"];
          $idUsuario= $knowProductosCarrito["idUsuario"];
            $clase = $knowProductosCarrito["clase"];
            $subClase=$knowProductosCarrito["subclase"];
            $descripcion =$knowProductosCarrito["descripcion"];
?>

            <tr class="tableBody">
                <td><?php  echo $nombreActividad; ?> <form method="post" action="cambioNomre.php" > <input class="inTd" type="text" value=""> </form></td>
                <td><?php  echo $clase; ?> <form method="post" action="cambioClase.php" > <input class="inTd" type="text" value=""></td>
                <td><?php  echo $subClase; ?> <form method="post" action="cambioSubClase.php" > <input class="inTd" type="text" value=""></td>
                <td><?php  echo $descripcion; ?> <form method="post" action="cambioDescripcion.php" > <input class="inTd" type="text" value=""></td>
            </tr>

<?php } ?>
</tbody>
       
    </table>
    </div>
</div>


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('table.display').DataTable();
        } );
    </script>
</body>
</html>