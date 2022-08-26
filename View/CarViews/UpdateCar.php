<?php


?>
<section>
    <div class="titleDiv">
        <h3>EDITAR REGISTRO</h3>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                    
                    <form method='post' action=''>
                        <label for="_id">Buscar por ID:</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="_id" aria-describedby="helpId" placeholder="Ingrese ID">
                            <input name="btn" id="" class="btn btn-secondary btn-sm" type="submit" value="Buscar">
                        </div>

                    </form>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action=''>
                            <div class="mb-3">
                                <label for="_id" class="form-label">Código ID:</label>
                                <input type="text" class="form-control" name="_id" id="_id" aria-describedby="helpId" readonly Value="<?php if (!empty($Car)){$Car->id;}?>">
                            </div>
                            <div class="mb-3">
                                <label for="_Brand" class="form-label">Marca:</label>
                                <input type="text" class="form-control" name="_Brand" aria-describedby="helpId" readonly Value="<?php if(!empty($Car)){$Car->Brand;}?>">
                            </div>
                            <div class="mb-3">
                                <label for="_Model" class="form-label">Modelo: </label>
                                <input type="text" class="form-control" name="_Model" aria-describedby="helpId" readonly Value="<?php if(!empty($Car)){$Car->Model;}?>">
                            </div>
                            <div class="mb-3">
                                <label for="_Price" class="form-label">Precio: $</label>
                                <input type="number" class="form-control" name="_Price" aria-describedby="helpId" Value="<?php if(!empty($Car)){$Car->Price;}?>">
                            </div>
                            <div class="mb-3">
                                <label for="_Year" class="form-label">Año: </label>
                                <input type="number" class="form-control" name="_Year" aria-describedby="helpId" readonly Value="<?php if(!empty($Car)){$Car->Year;}?>">
                            </div>
                            <div class="mb-3">
                                <label for="_DescriptionC" class="form-label">Descripción: </label>
                                <input type="text" class="form-control" name="_DescriptionC" aria-describedby="helpId" Value="<?php if(!empty($Car)){$Car->DescriptionC;}?>" placeholder="P.ej: Versión, kilometraje, detalles etc. ">
                            </div>
                            <input name="btn" id="" class="btn btn-secondary btn-sm" type="submit" value="Guardar Cambios">
                            <a href="index.php?action=ShowCars" class="btn btn-secondary btn-sm"> Cancelar </a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>