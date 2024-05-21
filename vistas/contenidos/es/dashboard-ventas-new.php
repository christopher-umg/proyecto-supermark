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


<div class="container-fluid">
    <form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="<?php echo LANG; ?>" autocomplete="off" action="<?php echo SERVERURL;?>ajax/categoriaAjax.php">
            <input type="hidden" name="modulo_categoria" value="registro">
            <fieldset class="mb-4">
                <legend><i class="fas fa-tag fa-fw"></i> &nbsp; Informacion de venta</legend>
                <p class="text-center" style="margin-top: 40px;">
                    <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="venta_codigo_reg" id="codigo_venta" maxlength="49">
                                <label for="codigo_venta" class="form-label">Codigo <?php echo FIELD_OBLIGATORY; ?></label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="venta_descripcion_reg" id="venta_descripcion" maxlength="49">
                                <label for="venta_descripcion" class="form-label">Descripción</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="campo_adicional_1" id="campo_adicional_1" maxlength="49">
                                <label for="campo_adicional_1" class="form-label">Cantidad</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="campo_adicional_1" id="campo_adicional_1" maxlength="49">
                                <label for="campo_adicional_1" class="form-label">Precio</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="campo_adicional_1" id="campo_adicional_1" maxlength="49">
                                <label for="campo_adicional_1" class="form-label">Total</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="campo_adicional_1" id="campo_adicional_1" maxlength="49">
                                <label for="campo_adicional_1" class="form-label">Opcion</label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <p class="text-center">
                <small>Los campos marcados con <?php echo FIELD_OBLIGATORY; ?> son obligatorios</small>
            </p>
    </form>

</div>
