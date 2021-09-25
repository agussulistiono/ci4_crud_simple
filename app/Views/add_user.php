<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
    .container{
        max-width:500px;
    }

    .error{
        display:block;
        padding-top:5px;
        font-size:14px;
        color:red;
    }
</style>
<body>
    <div class="container mt5">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>

    <script>
        //membuat validasi dengan javascript
        if($('#add_create').length > 0){
            $("#add_create").validate({
                rules:{
                    name:{
                        require:true,
                    },
                    email:{
                        require:true,
                        maxlength:60,
                        email:true,
                    },
                },
                message:{
                    name:{
                        require:"Name is Required",
                    },
                    email:{
                        require:"Email is required",
                        email:"It does not seem to be a valid mail",
                        maxlength:"the email should be or equal to 60 chars",
                    },
                },
            })
        }
    </script>
</body>
</html>