

    <div class="add-form">
        <form action="<?= site_url('/submit-form-produk')?>" method="post" id="add_create" name="add_create">
            <div class="form-group">
                <label for="name">Product</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="sell">sell</label>
                <input type="number" name="sell"  class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div> 
   
