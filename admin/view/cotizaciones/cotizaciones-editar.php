<body style="background:url('./assets/css/fondoCrud.jpg');">
<h1 class="page-header" >
    <?php echo $alm->id != null ? $alm->nombre : 'Nueva Cotización'; ?>
    
</h1>
<ol class="breadcrumb" style="background-color:lightyellow">
  <li><a href="?c=cotizaciones">Cotizaciones</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->nombre : 'Nueva Cotización'; ?></li>
</ol>

<form id="frm-cotizaciones" action="?c=cotizaciones&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Correo Electronico</label>
        <input type="text" name="correo_electronico" value="<?php echo $alm->correo_electronico; ?>" class="form-control" placeholder="Ingrese su correo" data-validacion-tipo="requerido|correo_electronico" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $alm->telefono;?>" class="form-control" placeholder="Ingrese su teléfono" data-validacion-tipo="requerido|telefono" />
    </div>
    
    <div class="form-group">
        <label>Accesorio</label>
        <select name="accesorio" selected class="form-control">
            <option <?php echo $alm->accesorio == 1;?> value="Puerta">Puerta</option>
            <option <?php echo $alm->accesorio == 2;?> value="Ventana">Ventana</option>
            <option <?php echo $alm->accesorio == 1;?> value="Domo">Domo</option>
            <option <?php echo $alm->accesorio == 2;?> value="CancelBanio">Cancel de baño</option>
            <option <?php echo $alm->accesorio == 1;?> value="CancelAcceso">Cancel de acceso</option>
        </select>
    </div>

    <div class="form-group">
        <label>Medida Alto</label>
        <input type="text" name="medida_alto" value="<?php echo $alm->medida_alto;?>" class="form-control" placeholder="Ingrese su medida de alto" data-validacion-tipo="requerido|medida_alto" />
    </div>

    <div class="form-group">
        <label>Medida Ancho</label>
        <input type="text" name="medida_ancho" value="<?php echo $alm->medida_ancho;?>" class="form-control" placeholder="Ingrese su medida de ancho" data-validacion-tipo="requerido|medida_ancho" />
    </div>

    <div class="form-group">
        <label>Cuadriculado</label>
        <select name="cuadricula" selected class="form-control">
            <option <?php echo $alm->cuadricula == 1;?> value="Si">Sí</option>
            <option <?php echo $alm->cuadricula == 2;?> value="No">No</option>
        </select>
    </div>

    <div class="form-group">
        <label>Color de vidrio</label>
        <select name="color_vidrio" selected class="form-control">
            <option <?php echo $alm->color_vidrio == 1;?> value="Claro">Claro</option>
            <option <?php echo $alm->color_vidrio == 2;?> value="Oscuro">Oscuro</option>
            <option <?php echo $alm->color_vidrio == 1;?> value="Verde">Verde</option>
            <option <?php echo $alm->color_vidrio == 2;?> value="EspejoClaro">Tipo Espejo Claro</option>
            <option <?php echo $alm->color_vidrio == 1;?> value="EspejoOscuro">Tipo Espejo oscuro</option>
        </select>
    </div>

    <div class="form-group">
        <label>Color de aluminio</label>
        <select name="color_aluminio" selected class="form-control">
            <option <?php echo $alm->color_aluminio == 1;?> value="Blanco">Blanco</option>
            <option <?php echo $alm->color_aluminio == 2;?> value="Bronce">Bronce</option>
            <option <?php echo $alm->color_aluminio == 1;?> value="DuroE">Duro E</option>
            <option <?php echo $alm->color_aluminio == 2;?> value="MaderaClaro">Madera Claro</option>
            <option <?php echo $alm->color_aluminio == 1;?> value="MaderaOscuro">Madera Oscuro</option>
            <option <?php echo $alm->color_aluminio == 2;?> value="Champange">Champange</option>
            <option <?php echo $alm->color_aluminio == 1;?> value="Dorado">Dorado</option>
        </select>
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cotizaciones").submit(function(){
            return $(this).validate();
        });
    })
</script>
</body>