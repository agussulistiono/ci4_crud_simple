          
    <div class="container mt-4" >
        <div class="dflex justify-content-end">
            <a href="<?= site_url('/produk-form')?>" class="btn btn-success mb2">Add Product</a>
        </div>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }
        ?>      
            <table class="table table-bordered" id="produk-list">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name Product</th>
                        <th>Sell</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($produk):?>
                    <?php foreach($produk as $p):?>
                        <tr>
                            <td><?php echo $p['id']?></td>
                            <td><?php echo $p['name']?></td>
                            <td><?php echo $p['sell']?></td>
                            <td><?php echo $p['created_at']?></td>
                            <td><a href="<?php echo base_url('edit-view-produk/'.$p['id'])?>" class="btn btn-primary btn-sm">Edit</a>
                             <a href="<?php echo base_url('delete-produk/'.$p['id'])?>" class="btn btn-warning btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
</div>