$(document).ready(function(){

    $('.js--add').click(function(){
        //get id and span element from button pressed.
        var id = $(this).attr('id').replace(/[^0-9]/gi, '')
        var qty_element = $('#js--qty_'+id)
       
        //send POST to order_handler, which will use sessions to get current and increment value. 
        $.ajax({
            url : "./php/order_handler.php",
            type: "POST",
            data : {'add_item_to_order': id},
            success: function(data, textStatus, jqXHR)
            {
                // display current value.
                qty_element.text(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });

        // prevent default
        return false;
    })

    $('.js--remove').click(function(){
       
        //get id and span element from button pressed.
        var id = $(this).attr('id').replace(/[^0-9]/gi, '')
        var qty_element = $('#js--qty_'+id)
        //send POST to order_handler, which will use sessions to get current and decrement value. 
        $.ajax({
            url : "./php/order_handler.php",
            type: "POST",
            data : {'subtract_item_from_order': id},
            success: function(data, textStatus, jqXHR)
            {
                // display current value.
                if(!data == ''){
                    qty_element.text(data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
        // prevent default
        return false;
    })

  $('.js--submit_order').click(function(){
       var customer_id = $(this).attr('value')
        $.ajax({
            url : "./php/order_handler.php",
            type: "POST",
            data : {'add_order_to_db': customer_id},
            success: function(data, textStatus, jqXHR)
            {
                console.log(data);
                if(data){
                    $('.js--order_qty').text('0')
                    $('.js--order_submit').css('display', 'none')
                    $('.js--order_success').css('display', 'flex')
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });

        // prevent default
        return false;
    })
})