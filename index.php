<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi tienda</title>
</head>
<body>
    <?php
    require 'componentes\cabecera.php';
    ?>
    <center>
    <form action="confirmacion.php" id="frmTienda" name="frmTienda" method="post" enctype="multipart/form-data"
    target="_self">
    <table width="700" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="97" align="right" valign="bottom"><p>Producto:</p></td>
            <td width="23" align="left" valign="middle">&nbsp;</td>
            <td width="567" align="left" valign="bottom">
                <select name="cmbProducto" id="cmbProducto" onchange="javascript:CambiarImagen();">
                    <option value="ninguno">Seleccione</option>
                    <option value="Galaxy S6">Samsung Galaxy S6 - $790</option>
                    <option value="iPhone 6S">iPhone 6S - $890</option>
                    <option value="Samsung Galaxy A23">Samsung Galaxy A23 - $260</option>
                    <option value="Samsung Galaxy S24 Ultra">Samsung Galaxy S24 Ultra - $1750</option>
                    <option value="Honor 90">Honor 90 - $869.00</option>
                    <option value="Xiaomi Redmi Note 13 Pro">Xiaomi Redmi Note 13 Pro - $599</option>
                </select>
            </td>
            <td width="308" rowspan="2" align="center" valign="middle">
                <img id="FotoProducto" src="imagenes/noimagen.jpg" width="250" height="250">
            </td>
        </tr>
        <tr>
            <td height="290" align="right" valign="top"><p>Cantidad:</p></td>
            <td></td>
            <td valign="top"><input type="number" name="txtCantidad" id="txtCantidad" min="1" max="10" value="1"></td>
        </tr>
        <tr>
            <td>
                <p>Cargador:</p>
            </td>
                <td></td>
                <td colspan="2" align="left" valign="middle">
                    <select name="cmbCargador" id="cmbCargador">
                        <option value="normal">Cargador Normal - $15.00</option>
                        <option value="rapido">Cargador Rápido - $20.00</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>
                <p>Protector:</p>
            </td>
            <td></td>
            <td colspan="2" align="left" valign="middle">
                <select name="cmbProtector" id="cmbProtector">
                    <option value="plastico">Protector de Plástico - $10.00</option>
                    <option value="silicona">Protector de Silicona - $15.00</option>
                    <option value="aluminio">Protector de Aluminio - $25.00</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <p>Descuento:</p>
            </td>
            <td></td>
            <td colspan="2" align="left" valign="middle">
                    <input type="checkbox" name="descuento" id="descuento">
                    <label for="descuento">Aplicar descuento del 10%</label>
            </td>
        </tr>
        <tr>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan="2" align="left" valign="middle">
                <input type="submit" name="ped" value="Realizar Pedido">
                <input type="button" name="res" value="Reestablecer" onclick="location.reload()">
            </td>
        </tr>
        

</table>
</form>
</center>
<script type="text/javascript">
    function CambiarImagen(){
        var Seleccionado = document.getElementById('cmbProducto').value;
        if(Seleccionado=='Galaxy S6'){document.getElementById('FotoProducto').src='imagenes/galaxy.jpg';
        }
        else if(Seleccionado=='iPhone 6S'){
            document.getElementById('FotoProducto').src='imagenes/iphone.jpg';
        }
        else if(Seleccionado=='Samsung Galaxy A23'){
            document.getElementById('FotoProducto').src='imagenes/samsungalaxia23.webp';
        }
        else if(Seleccionado=='Samsung Galaxy S24 Ultra'){
            document.getElementById('FotoProducto').src='imagenes/s23.webp';
        }
        else if(Seleccionado=='Honor 90'){
            document.getElementById('FotoProducto').src='imagenes/honor.webp';
        }
        else if(Seleccionado=='Xiaomi Redmi Note 13 Pro'){
            document.getElementById('FotoProducto').src='imagenes/xiaomi.webp';
        }
        else{
            document.getElementById('FotoProducto').src='imagenes/noimagen.jpg';
        }
    }
</script>
</body>
</html