$(document).ready(function () {
    
    
    $('.delete_product_btn').click(function (e) { 
        e.preventDefault();
        
        var id = $(this).val();

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'product_id':id,
                    'delete_product_btn':true,
                },
                success: function (response) {
                    if(response == 200)
                    {
                        swal({
                            title: "Success!",
                            text: "Deleted Successfully",
                            icon: "success",
                          });
                          $("#customers").load(location.href + " #customers");
                    }
                    else if(response == 500)
                    {
                        swal({
                            title: "Failed!",
                            text: "Something Went Wrong",
                            icon: "error",
                          });
                    }
                }
              });
            }
          });

    });

});