<?php
    $car =  Car::GetCarByBrand($_GET['Brand']);
?>
<section>
    <div class="titleDiv">
        <h3>VER REGISTROS POR MARCA</h3>
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
                            foreach ($car as $Car) { ?>
                                <tr>
                                    <th scope="row"><?= $car->id ?></th>
                                    <td><?= $car->Brand ?></td>
                                    <td><?= $car->Model ?></td>
                                    <td><?= $car->Year ?></td>
                                    <td>$<?= $car->Price ?></td>
                                    <td><?= $car->DescriptionC ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href="index.php?action=UpdateCar&id=<?php echo $car->id ?>" class="btn"><img src="./Assets/edit.png" alt="icono"></a>
                                            <a href="index.php?action=DeleteCar&id=<?php echo $car->id ?>" class="btn"><img src="./Assets/delete.png" alt="icono"></a>
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
                                <input type="text" class="form-control" name="_Brand" id="_Brand" aria-describedby="helpId">
                            </div>
                            <a href="index.php?action=ShowForBrand&Brand=<?php ?>" class="btn btn-secondary btn-sm">Buscar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>