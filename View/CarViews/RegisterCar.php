<section class="RegisterForm">

  <div class="titleDiv">
    <h3>NUEVO REGISTRO</h3>
  </div>
  <hr>
  <div class="card">
    <div class="card-body">
      <form method="post" action=''>
        <div class="mb-3">
          <label for="_Brand" class="form-label">Marca:</label>
          <input type="text" class="form-control" name="_Brand"  aria-describedby="helpId" placeholder="P.ej: Ford" required>
        </div>
        <div class="mb-3">
          <label for="_Model" class="form-label">Modelo: </label>
          <input type="text" class="form-control" name="_Model"  aria-describedby="helpId" placeholder="P.ej: Ecosport" required>
        </div>
        <div class="mb-3">
          <label for="_Price" class="form-label">Precio: $</label>
          <input type="number" class="form-control" name="_Price"  aria-describedby="helpId" placeholder="0.00" required>
        </div>
        <div class="mb-3">
          <label for="_Year" class="form-label">Año: </label>
          <input type="number" class="form-control" name="_Year"  aria-describedby="helpId" placeholder="0000" required>
        </div>
        <div class="mb-3">
          <label for="_DescriptionC" class="form-label">Descripción: </label>
          <input type="text" class="form-control" name="_DescriptionC"  aria-describedby="helpId" placeholder="P.ej: Versión, kilometraje, detalles etc. ">
        </div>
        <input name="btn" id="" class="btn btn-secondary btn-sm" type="submit" value="Registrar automóvil">
        <a href="index.php?action=ShowCars" class="btn btn-secondary btn-sm"> Cancelar </a>
      </form>
    </div>

  </div>

</section>