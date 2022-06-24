$(document).ready(function() {
    $('form').on('submit', function() {
        let game = $("#game").val()
        let platform = $("#platform").val()
        let data = {
            'game':game,
            'platform': platform,
        };
        $.get("Action.php", data, function(d) {
            $("#result").html(d);
        });
        alert('Форма отправлена"');
        return false;
    });
});