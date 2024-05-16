<?php
    include "./vistas/inc/admin_security.php";
?>
<div class="full-box page-header">
    <h3 class="text-start roboto-condensed-regular text-uppercase">
        <i class="fas fa-plus fa-fw"></i> &nbsp; Pedidos & Ventas
    </h3>
</div>

<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" href="<?php echo SERVERURL.DASHBOARD; ?>/ventas-new/" ><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva venta</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/ventas-realizadas/" ><i class="fas fa-boxes fa-fw"></i> &nbsp; Ventas realizadas</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/pedidos-pendientes/" ><i class="fas fa-stopwatch-20 fa-fw"></i> &nbsp; Pedidos pendientes</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/buscar-venta/" ><i class="fas fa-search fa-fw"></i> &nbsp; Buscar pedido o venta</a>
        </li>
    </ul>
</div>


