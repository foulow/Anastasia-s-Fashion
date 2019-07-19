<div class="header">
	Tienda Online
</div>
<div class="menu">
    <a href="?p=principal">Principal</a>
    <a href="?p=productos">Productos</a>
    <a href="?p=ofertas">Ofertas</a>
    <?php
    if(isset($_SESSION['id_cliente'])){
    ?>
    <a href="?p=carrito">Mi Carrito</a>
    <a href="?p=miscompras">Mis Compras</a>
    <?php
    }else{
        ?>
            <a href="?p=login">Iniciar Sesion</a>
            <a href="?p=registro">Registrate</a>
        <?php
    }
    ?>
    <!--
    <a href="admin/">Panel Admin</a>
    <a href="?p=admin">Administrador</a>
    -->

    <?php
        if(isset($_SESSION['id_cliente'])){
    ?>

    <a class="pull-right subir" href="?p=salir">Salir</a>
    <a class="pull-right subir" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>

    <?php
        }
    ?>
</div>