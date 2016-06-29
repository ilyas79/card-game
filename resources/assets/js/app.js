$(document).ready(function () {

    $('.start_game').click(function () {
        $.ajax({
            url: '/random_card',
            dataType: 'json',
            success: function (response) {
                $('.game').show();
                $('.start_game').hide();
                $('.current_card').html(response.card_value + ' of Hearts');
                $("input[name='card_key']").val(response.card_key);
            }
        })
    });
    
    $('.btn-check-card').click(function () {
        var button_click = $(this).attr('data-id');
        $.ajax({
            method: 'GET',
            url: '/check_card',
            dataType: 'json',
            data: {
                card: $("input[name='card_key']").val()
            },
            success: function (response) {

                $('.current_card').html(response.card_value  + ' of Hearts');
                $("input[name='card_key']").val(response.card_key);

                if (button_click == response.result || response.result == 'equal' ) {
                    var points = parseInt($('.points').text()) + 1;
                    $('.points').text(points);
                } else {
                    var lifes = parseInt($('.lifes').text()) - 1;
                    $('.lifes').text(lifes);

                    if (lifes == 0) {
                        swal({
                            title: "Game Over!",
                            type: "warning",
                            showCancelButton: false,
                            confirmButtonText: "OK",
                        }, function () {
                            location.reload();
                        })
                    }
                }
            }
        })
    });

});