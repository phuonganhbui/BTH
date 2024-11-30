<?php global $flowers;
include('itemheader.php'); ?>
<?php include('flowers.php');
?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Ảnh <b> 14 loài hoa</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($flowers as $flower):?>
                    <tr>
                        <td><?= htmlspecialchars($flower['name']) ?></td>
                        <td><?= htmlspecialchars($flower['moTa']) ?></td>
                        <td><
                            <img src="<?php echo $flower['image']; ?>" alt="<?php echo $flower['name']; ?>" width="300"></td>
                        <td>
                            <a href="#editProductModal" class="edit" data-toggle="modal" data-id="<?= $flower['id'] ?>" data-name="<?= htmlspecialchars($flower['name']) ?>" data-moTa="<?= htmlspecialchars($flower['moTa']) ?>" data-image="<?= htmlspecialchars($flower['image']) ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?= $flower['id'] ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('itemfooter.php'); ?>

<div id="addProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="main.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Số Lượng</label>
                        <input type="number" class="form-control" name="moTa" required>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Giá Cả</label>
                        <input type="text" class="form-control" name="moTa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="addProduct" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="editProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="main.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input type="text" class="form-control" name="name" id="edit-name" required>
                    </div>
                    <div class="form-group">
                        <label for="soLuong">Số Lượng</label>
                        <input type="number" class="form-control" name="soLuong" id="edit-soLuong" required>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Giá Cả</label>
                        <input type="text" class="form-control" name="moTa" id="edit-moTa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="editProduct" class="btn btn-info">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="deleteProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="main.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="delete-id">
                    <p>Are you sure you want to delete this product?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="deleteProduct" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
