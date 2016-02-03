$(document).on('submit', '#play_form', function (e) {
    e.preventDefault();
    $.post('./play.php', $(this).serialize(), function (data) {
        if (typeof(data.error) == 'undefined') {
            $('.card_list').append('<li>' + data.card_name + '</li>');
        }
        else {
            alert(data.error);
        }
    }, 'json');
});
