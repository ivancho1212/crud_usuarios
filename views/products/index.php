<!--content -->
<div class="content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="?c=products&m=create" class="btn btn-success">Crear nuevo producto</a>
                          <div class="table-responsive mt-4">
                            <table class="table table-border table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>PRECIO</th>
                                        <th>DESCRIPCION</th>
                                        <th>IMAGEN</th>
                                        <th width="250">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1;$i<10;$i++){   ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>Coca Cola</td>
                                        <td>$6.000</td>
                                        <td>TAMAÑO FAMILIAR 3 LITROS</td>
                                        <td><img src="data:image/jpeg;base64,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" alt="" width="90"> </td>
                                        <td>
                                            <a href="?c=products&m=show" class="btn btn-sm btn-info">Detalles</a>
                                            <a href="?c=products&m=edit" class="btn btn-sm btn-warning">Editar</a>
                                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                          <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>