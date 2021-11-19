<body style="background:url('./assets/css/fondo.jpg');">

<h1 class="page-header">Cotizaciones</h1>

<div class="well well-sm text-right" >
    <a class="btn btn-primary" href="?c=Cotizaciones&a=Crud" >Nueva cotización</a>
</div>

<table class="table table-striped">
    <thead style="background-color:black">
        <tr style="color:white">
            <th style="width:180px;">Nombre</th>
            <th>Correo electrónico</th>
            <th>Telefono</th>
            <th style="width:120px;">Accesorio</th>
            <th>Medida Alto</th>
            <th>Medida Ancho</th>
            <th style="width:120px;">Cuadricula</th>
            <th style="width:120px;">Color de Vidrio</th>
            <th style="width:120px;">Color de Aluminio</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody style="background-color:lightgray">
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->correo_electronico; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->accesorio;?></td>
            <td><?php echo $r->medida_alto; ?></td>            
            <td><?php echo $r->medida_ancho; ?></td>
            <td><?php echo $r->cuadricula; ?></td>
            <td><?php echo $r->color_vidrio; ?></td>
            <td><?php echo $r->color_aluminio; ?></td>
            <td>
                <a href="?c=cotizaciones&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cotizaciones&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
    </body>