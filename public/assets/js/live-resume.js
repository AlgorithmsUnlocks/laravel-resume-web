$('[data-toggle="collapsible-nav"]').on('click', function(e){
    var target = ($(this).data('target'));
    $('#' + target).toggleClass('show');
});

$(document).ready(function(){
    if(window.innerWidth >= 992) {
        $('#collapsible-nav').addClass('show');  //Show navigation menu in bigger screens by default.
    } else {
        $('#collapsible-nav').removeClass('show');
    }

    if ($('.hover-box').length) {
        setHoverBoxPerspective();
    }
});

$(window).resize(
    function() {
        if ($('.hover-box').length) {
            setHoverBoxPerspective();
        }
    }
);

function setHoverBoxPerspective() {
    $('.hover-box').css({
        'perspective': function () {
            return Math.max( $(this).width(), $(this).height() ) * 2 + 50;
        }
    });
}


var classNames = ['in-up', 'in-right', 'in-down', 'in-left', 'out-up', 'out-right', 'out-down', 'out-left']; // Animation classes.

$('.hover-box').hover(
    function (event) {
        var direction = "up";
        if(jQuery.fn.entry){ //Check if entry js file is loaded.
            direction = $(this).entry({ e: event }); // Get mouse in direction.
        }

        $(this).removeClass(classNames.join(" ")); // Remove existing animation classes.
        $(this).addClass("in-" + direction); //Add mouse in animation

    },

    function (event) {

        var direction = "up";
        if(jQuery.fn.entry){
            direction = $(this).entry({ e: event }); // Get mouse out direction.
        }

        $(this).removeClass(classNames.join(" "));
        $(this).addClass("out-" + direction); //Add mouse out animation

    }
);


//Click JS for Nav Link

document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');
    function normalizeUrl(url) {
        return new URL(url, window.location.origin).pathname;
    }
    function setActiveClass(link) {
        const normalizedHref = normalizeUrl(link.getAttribute('href'));
        // console.log(`Comparing ${normalizedHref} with ${window.location.pathname}`);
        if (normalizedHref === window.location.pathname) {
            link.classList.add('active');
            // console.log(`${link.textContent} is now active`);
        } else {
            link.classList.remove('active');
        }
    }

    navLinks.forEach(setActiveClass);

    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            navLinks.forEach(function(item) {
                item.classList.remove('active');
            });
            this.classList.add('active');

            window.location.href = this.getAttribute('href');
        });
    });
});


// Page share function

function sharePage() {
    if (navigator.share) { // Check if the Web Share API is supported
        navigator.share({
            title: 'Web Development Expert - Ruman Ahmed',
            text: 'You can see more information after visited',
            url: window.location.href,
        })
            .then(() => console.log('Successful share'))
            .catch((error) => console.log('Error sharing', error));
    } else {
        alert('Web Share API is not supported to your web browser.');
    }
}
