<section>
    <div class="titleDiv">
        <h3>REGISTROS</h3>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="container">
                    <table class="table table-striped TableReg border">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Año</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cars as $Car) { ?>
                                <tr>
                                    <th scope="row"><?= $Car->id ?></th>
                                    <td><?= $Car->Brand ?></td>
                                    <td><?= $Car->Model ?></td>
                                    <td><?= $Car->Year ?></td>
                                    <td>$<?= $Car->Price ?></td>
                                    <td><?= $Car->DescriptionC ?></td>
                                    <td>

                                        <div class="btn-group" role="group" aria-label="">
                                            <a href='index.php?action=UpdateCar&id=<?php echo $Car->id ?>' class="btn"><img src="./Assets/edit.png" alt="icono"></a>
                                            <a href="index.php?action=DeleteCar&id=<?php echo $Car->id ?>" class="btn"><img src="./Assets/delete.png" alt="icono"></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <form action="" method="post">
                            <p>Buscar por Marca:</p>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="_Brand" id="_Brand" aria-describedby="helpId" placeholder="Ingrese Marca" required>
                            </div>
                            <a href="index.php?action=ShowForBrand&Brand=<?php echo $Car->Brand ?>" class="btn btn-secondary btn-sm">Buscar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>