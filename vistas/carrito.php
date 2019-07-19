<div class="carritot" onclick="minimizer()">
    Carrito de compra
    <input type="hidden" id="minimized" value="0"/>
</div>

<div class="carritob">
    <table class="table table-striped">
        <tr>
            <th>Nombre del producto</th>
            <th>Cantidad</th>
            <th>Precio </th>
        </tr>
        <?php
            $id_cliente = clear($_SESSION['id_cliente']);
            $q = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente'");
            $monto_total = 0;
            while($r = mysqli_fetch_array($q)){
                $q2 = $mysqli->query("SELECT * FROM productos WHERE id = '".$r['id_producto']."'");
                $r2 = mysqli_fetch_array($q2);

                $preciototal = 0;
                        if($r2['oferta']>0){
                            if(strlen($r2['oferta'])==1){
                                $desc = "0.0".$r2['oferta'];
                            }else{
                                $desc = "0.".$r2['oferta'];
                            }

                            $preciototal = $r2['price'] -($r2['price'] * $desc);
                        }else{
                            $preciototal = $r2['price'];
                        }

                $nombre_producto = $r2['name'];

                $cantidad = $r['cant'];

                $precio_unidad = $r2['price'];
                $precio_total = $cantidad * $preciototal;
                $imagen_producto = $r2['imagen'];

                $monto_total = $monto_total + $precio_total;
            ?>
                <tr>
                    <td><?=$nombre_producto?></td>
                    <td><?=$cantidad?></td>
                    <td><?=$precio_unidad?> <?=$divisa?></td>
                </tr>
            <?php
            }
        ?>
    </table>
    <br>
    <span>Monto Total: <b class="text-green"><?=$monto_total?> <?=$divisa?></b></span>

    <br><br>
    <form method="post" action="?p=carrito">
        <input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
        <button class="btn btn-primary" type="submit" name="finalizar"><i class="fa fa-check"></i> Finalizar Compra</button>
    </form>
</div>