$(document).ready(function(){
    
    $("#add-products").on("click",function(){
        let product_name = $("#product_name").val();
        let product_description = $("#product_description").val();
        let product_category = $("#choosecate").val();
        let product_price =$("#product_price").val();

        let data = JSON.stringify{
            
        }
        $.ajax({
            url:"",
        })
    });
});