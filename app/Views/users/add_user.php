

    <div class="add-form">
        <form action="<?= site_url('/submit-form')?>" method="post" id="add_create" name="add_create">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email"  class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">update</button>
            </div>
        </form>
    </div>
   
