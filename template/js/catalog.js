$(document).ready(function(){
    $('.add-to-cart, .add-to-cart span').click(function(event){
        var product = $(this).attr('id');
        $.ajax({
            url:'?app=cart&action=addtocart',
            type:'post',
            data:'product='+product,
            success:function(response){
                console.log(response);
                $(event.target).prop('disabled', true);
                $(event.target).find('span').removeClass('glyphicon-shopping-cart').addClass('glyphicon-ok');
                if($(event.target).hasClass('glyphicon-shopping-cart'))
                {
                    $(event.target).parent().prop('disabled', true);
                    $(event.target).removeClass('glyphicon-shopping-cart').addClass('glyphicon-ok');
                }
            }
        });
    });

    $('.delete-from-cart').click(function(event){
        var product = $(this).attr('id');
        $.ajax({
            url:'?app=cart&action=deletefromcart',
            type:'post',
            data:'product='+product,
            success:function(response){
                console.log(response);
                $(event.target).closest('.product').fadeOut(100);
            }
        });
        return false;
    });
});