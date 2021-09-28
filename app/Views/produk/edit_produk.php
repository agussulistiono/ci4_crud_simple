

    <div class="edit-form">
        <form action="<?= site_url('/update-produk')?>" method="post" id="update" name="update_produk">
            <input type="text" name="id" id="id" value="<?php echo $produk_obj['id']; ?>">
            <div class="form-group">
                <label for="name">Product</label>
                <input type="text" name="name" value="<?php echo $produk_obj['name']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="sell">sell</label>
                <input type="number" name="sell"  value="<?php echo  $produk_obj['sell']?>" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
   
