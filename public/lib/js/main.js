$(window).on('turbolink:ready', function () {
    var bodyPage = $('.nk-body');
    var toggle = $('.dark-switch');
});

$(window).on('turbolink:load', function () {
    var bodyPage = $('.nk-body');
    var toggle = $('.dark-switch-2');

    if ((localStorage.getItem('darkMode')===null) || (sessionStorage.getItem('darkMode')===null)){
        localStorage.setItem('darkMode', "false");
        sessionStorage.setItem('darkMode', "false");
    }

    function checkStatus(){
        if ((localStorage.getItem('darkMode')==="true") || (sessionStorage.getItem('darkMode')==="true")){
            toggle.checked = true;
            toggle.addClass('active');
            bodyPage.toggleClass('dark-mode');
        } else {
            toggle.checked = false;
            toggle.removeClass('active');
            bodyPage.toggleClass('light-mode');
        }
    }

    checkStatus();
});

/* Google Analytics */
/* const GA_SCOPE = "https://www.googleapis.com/auth/analytics.readonly";
const GA_API_URL = "https://analyticsdata.googleapis.com/$discovery/rest?version=v1beta";

gapi.load("client:auth2", function() {
    gapi.auth2.init({
        client_id: CLIENT_ID
    }).then(() => document.dispatchEvent(new Event('gapi-loaded')));
});

function signIn(scope = GA_SCOPE) {
    return gapi.auth2.getAuthInstance().signIn({
        scope
    }).then(() => {
        setCookie('guser-loggedin', 'true', 1);
        location.reload();
    }, (e) => console.error(e));
}

function signOut() {
    return gapi.auth2.getAuthInstance().signOut().then(() => {
        setCookie('guser-loggedin', 'true', -1);
        location.reload();
    }, (e) => console.error(e));
}

function loadClient(apiPath = GA_API_URL) {
    return gapi.client.load(apiPath);
}

function runReport(propertyId, query, cb = function(res) {
    console.log(res);
}, err = function(err) {
    console.error(err);
}) {

    return loadClient().then(() => gapi.client.analyticsdata.properties
    .runReport({
        property: "properties/" + propertyId,
        resource: query
    })
    .then(cb, err));
}

function isSignedIn() {
    if (getCookie('guser-loggedin') === 'true') return true;
    return false;
}

function setCookie(cname = 'guser-loggedin', cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
} */

// Your Client ID
/* const CLIENT_ID = "953473479449-m9ietvm5jc0hl9akdjkl9hatqu8vha01.apps.googleusercontent.com"; */

/* function loadData() { */
// Your GA property ID
/* const propertyId = "310327829"; */

/* const startDate = "30daysAgo";
const endDate = "today"; */

/* const dimensions = [{
    name: "cohort"
},
{
    name: "cohortNthDay"
},
{
    name: "cohortNthMonth"
},
];

const metrics = [{
    name: "activeUsers"
},
{
    name: "screenPageViews"
},
{
    name: "sessions"
},
{
    name: "engagedSessions"
},
];

const query = {
    dateRanges: [{
        startDate,
        endDate
    }],
    metrics: metrics,
    dimensions: dimensions
}; */

/* runReport(propertyId, query, displayResult); */
/* } */

/* function displayResult(response) {
    document.getElementById("displayUsers").innerHTML =
    response.result.rows[0].metricValues[0].value;
    document.getElementById("displayPageViews").innerHTML =
    response.result.rows[0].metricValues[1].value;
    document.getElementById("displaySessions").innerHTML =
    response.result.rows[0].metricValues[2].value;
    document.getElementById("displayEngagedSessions").innerHTML =
    response.result.rows[0].metricValues[3].value;
} */

// Login buttons
/* document.addEventListener("gapi-loaded", (e) => {
    if (isSignedIn()) {
        document.getElementById("sign-out-btn").style.display = "";
        document.getElementById("sign-in-btn").style.display = "none";
        document.getElementById("card-stats").style.display = "";
        loadData();
    } else {
        document.getElementById("sign-out-btn").style.display = "none";
        document.getElementById("sign-in-btn").style.display = "";
        document.getElementById("card-stats").style.display = "none";
    }
}); */

// Init
$(document).ready(function () {
    // $.fn.modal.Constructor.prototype._enforceFocus = function() {};
});

// Back to Top or Scroll to() Script
$(document).ready(function () {
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: (target.offset().top)
            }, 1000, "easeInOutExpo");
            return false;
        }
    }
});
});

// Activate scrollspy to add active class to navbar product on scroll
/* $('body').scrollspy({
    target: '#mainNav',
    offset: 75
}); */

// Scroll to top button appear
$(document).on('turbolink:scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
    } else {
        $('.scroll-to-top').fadeOut();
    }
});

// Smooth scrolling using jQuery easing
$(document).on('turbolink:click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top)
    },1000, 'easeInOutExpo');
    e.preventDefault();
});

// AOS
/* $(document).ready(function () {
    AOS.init();
}); */

// counterup
/* $(document).ready(function () {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
}); */

// Register Button
$(document).ready(function () {
    $('#registerButton').attr('disabled', 'disabled');
    $('.registerCheckbox').on('turbolink:change', function () {
        if ($('.registerCheckbox:checked').length > 0) {
            $('#registerButton').removeAttr('disabled', 'disabled');
        } else {
            $('#registerButton').attr('disabled', 'disabled');
        }
    });
});

// Verify Button
$(document).ready(function () {
    $('#verifyButton').attr('disabled', 'disabled');
    $('.verifyCheckbox').on('turbolink:change', function () {
        if ($('.verifyCheckbox:checked').length > 0) {
            $('#verifyButton').removeAttr('disabled', 'disabled');
        } else {
            $('#verifyButton').attr('disabled', 'disabled');
        }
    });
});

// Login Button
$(document).ready(function () {
    $('#loginButton').attr('disabled', 'disabled');
    $('.loginCheckbox').on('turbolink:change', function () {
        if ($('.loginCheckbox:checked').length > 0) {
            $('#loginButton').removeAttr('disabled', 'disabled');
        } else {
            $('#loginButton').attr('disabled', 'disabled');
        }
    });
});


