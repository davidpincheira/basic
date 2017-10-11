
<?php if (sizeof($modelos)): ?>
    <?php foreach ($modelos as $modelo): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-4">
                        <strong>Fecha: </strong><?php echo $modelo->fecha; ?>
                    </div>
                              
                    <div class="col-sm-4" id="acciones">
                        <button type="button" class="glyphicon glyphicon-pencil" aria-label="Left Align" data-action="update" title="Editar" data-man-evento-seguimiento-id="<?php echo $modelo->id; ?>">
                        </button>
                        <button type="button" class="glyphicon glyphicon-trash" aria-label="Left Align" data-action="delete" title="Eliminar" data-man-evento-seguimiento-id="<?php echo $modelo->id; ?>">
                        </button>
                        
                    </div>                
                </div>
            </div>
            <div class="panel-body">
                <div>
                    <div class="col-xs-12">
                        <strong>Descripcion:</strong>
                        <?php echo $modelo->descripcion; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>    
<?php else: ?>
    <div class='panel panel-default'>
        <div class='panel-heading'>
            <strong>No existen Seguimientos</strong>
        </div>
    </div>
<?php endif; ?>