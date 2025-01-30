// start jquery
$(document).ready(function() {

    $('html').on('input', '.btype_rask', function () {
        btn = $(this)
        // btype_start = Number(btn.parent().siblings('.btype_start').attr('data-start'))
        // $(this).parent().siblings('.btype_kaspi').html((btype_start - sum) + ' тг')
        // btn.parent().siblings('.btype_start').attr('data-rask', sum)

        sum = Number(btn.attr('data-val'))
        $.ajax({
            url: "/kassa/get.php?expenses",
            type: "POST",
            dataType: "html",
            data: ({ 
                id: $('.read_pay2').attr('data-id'),
                user_id: $('.read_pay2').attr('data-user-id'),
                expenses: sum,
            }),
            success: function(data){ 
                // if (data == 'yes') location.reload();
                console.log(data);
            },
            beforeSend: function(){ },
            error: function(data){ }
        })
    })
    
    $('html').on('input', '.btype_cash', function () {
        btn = $(this)
        // btype_start = Number(btn.parent().siblings('.btype_start').attr('data-start'))
        // btype_rask = Number(btn.parent().siblings('.btype_start').attr('data-rask'))

        // $(this).parent().siblings('.btype_kaspi').html((btype_start - sum - btype_rask) + ' тг')

        sum = Number(btn.attr('data-val'))

        $.ajax({
            url: "/kassa/get.php?cash",
            type: "POST",
            dataType: "html",
            data: ({ 
                id: $('.read_pay2').attr('data-id'),
                user_id: $('.read_pay2').attr('data-user-id'),
                cash: sum,
            }),
            success: function(data){ 
                // if (data == 'yes') location.reload();
                console.log(data);
            },
            beforeSend: function(){ },
            error: function(data){ }
        })
    })







    // cashbox_pay
	$('.read_one').click(function(){
		$('.read_block').addClass('pop_bl_act');
		$('#html').addClass('ovr_h');

        $('.read_pay2').attr('data-id', $(this).attr('data-id'))      
        $('.read_pay2').attr('data-user-id', $(this).attr('data-user-id'))      
	})
	$('.read_back').click(function(){
		$('.read_block').removeClass('pop_bl_act');
		$('#html').removeClass('ovr_h');

        $('.read_pay2').attr('data-id', '')      
        $('.read_pay2').attr('data-user-id', '')
	})
    $('html').on('click', '.read_pay2', function () {
        sum = Number($('.btype_kaspi').attr('data-val'))

        btn = $(this)
        $.ajax({
            url: "/kassa/get.php?kaspi",
            type: "POST",
            dataType: "html",
            data: ({ 
                id: $('.read_pay2').attr('data-id'),
                user_id: $('.read_pay2').attr('data-user-id'),
                kaspi: sum,
            }),
            success: function(data){ 
                if (data == 'yes') location.reload();
                console.log(data);
            },
            beforeSend: function(){ },
            error: function(data){ }
        })
    })

}) // end jquery