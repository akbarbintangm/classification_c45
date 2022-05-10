$(window).on('load', function () {
    var toggle = $('.dark-switch');

    if (localStorage.getItem('darkMode')===null){
        localStorage.setItem('darkMode', "false");
    }

    checkStatus();

    function checkStatus(){
        if (localStorage.getItem('darkMode')==="true"){
            toggle.checked = true;
            toggle.addClass('active');
            $body.toggleClass('dark-mode');
        } else {
            toggle.checked = false;
            toggle.removeClass('active');
            $body.toggleClass('light-mode');
        }
    }
});
