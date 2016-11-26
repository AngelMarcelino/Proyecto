<?php

include ("sidebar-admin.html");
include ("getUsers.php");
?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<h2 class="placeholder">Registro</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>Nombre de usuario</td>
                    <td>Email</td>
                    <td>Domicilio</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($u = 0; $u < count($usuarios); $u++)
                    {
                        $usuario = $usuarios[$u];
                        echo '<tr>'.
                        '<td>'.$usuario["Nombre"] . '</td>'.
                        '<td>'.$usuario["NombreUsuario"] . '</td>'.
                        '<td>'.$usuario["Correo"] . '</td>'.
                        '<td>'.$usuario["Domicilio"] . '</td>'.
                        '<tr>';
                    }
                    
                ?>
            </tbody>
        </table>
    </div>