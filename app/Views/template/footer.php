</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <!--Untuk Grafik-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>

  //membuat grafk
    var serries = <?php echo json_encode($products); ?>;
        var data = serries,
          config = {
            data: <?php echo json_encode($products); ?>,
            xkey: 'day',
            ykeys: ['s'],
            labels: ['Sales this week'],
            fillOpacity: 0.7,
            hideHover: 'auto',
            resize: true,
            behaveLikeLine: true,
            stacked: true,
            barColors: "455"
            };
        
        // Call bar chart
        config.element = 'MorrisBarChart';
        Morris.Bar(config);
			
			// Call stacked chart
			config.element = 'MorrisStakcedChart';
			config.stacked = true;
			Morris.Bar(config);
    $(document).ready(function(){
        $('#user-list').DataTable();
        $('#produk-list').DataTable();
    })
    
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

    //validasi update
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
    
    
</script>
</body>
</html>