$(document).ready(function(){
    $("form").submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/php/sendform.php",
            data: form_data,
            success: function() {
                $('.popup_thx').addClass('active');
            }
        });
        event.preventDefault();
    });
    
});

document.addEventListener('submit', (e) => {
    e.prevent.Default();
    e.target.reset()
});
