<?php global $flowers;
include('itemheader.php');
?>
<?php include('flowers.php'); ?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($flowers as $flower):?>
                    <tr>
                        <td><?= htmlspecialchars($flower['name']) ?></td>
                        <td><?= htmlspecialchars($flower['moTa']) ?></td>
                        <td><img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?> "width="100" ></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('itemfooter.php'); ?>
