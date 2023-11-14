$(document).ready(function () {

    $('.addToCartBtn').click(function (e) { 
        e.preventDefault();
        
        var prod_id = $(this).val();
        alert(prod_id);
    });
    
});