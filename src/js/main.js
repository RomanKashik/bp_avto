$(function () {
    //magnific-popup
    var buttonUp;
    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        // focus: '#link-popup',
    })

    $('.popup-about').magnificPopup({
        type: 'inline',
    })

    $(document).on('click', '.popup-about-dismiss', function (e) {
        e.preventDefault()
        $.magnificPopup.close()
    })
    $(document).on('click', '.popup-modal-dismiss', function (e) {
        e.preventDefault()
        $.magnificPopup.close()
    })

    var getIphoneWindowHeight = function () {

// Get zoom level of mobile Safari
// Such zoom detection might not work correctly on other platforms
        //
        var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
// window.innerHeight returns height of the visible area.
        // We multiply it by zoom and get our real height.
        return window.innerHeight * zoomLevel;
    };


//pagetoscroll
    $(window).on('load', function () {
        $('a,a[href=\'#top\'],a[rel=\'m_PageScroll2id\'],a.PageScroll2id').mPageScroll2id({
            highlightSelector: 'a',
        })
    })

    // Кнопка вверх

    $(window).scroll(function () {
        if ($(window).scrollTop() > 1000) {
            buttonUp.show(500);
        } else {
            buttonUp.hide(500);
        }
    });



     buttonUp = $('#btnUp');
    buttonUp.on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 800);
    });



// Remove placeholder on focus
    $('input,textarea').focus(function () {
        $(this).data('placeholder', $(this).attr('placeholder'))
        $(this).attr('placeholder', '');
    });
    $('input,textarea').blur(function () {
        $(this).attr('placeholder', $(this).data('placeholder'));
    });


    // process the form

    $('form').submit(function (event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'link': $('input[name=link]').val(),
            'email': $('input[name=email]').val(),
            'email-popup': $('input[name=email-popup]').val(),
            'email-footer': $('input[name=email-footer]').val(),
            'message-popup': $('textarea[name=message-popup]').val(),
            'message-footer': $('textarea[name=message-footer]').val(),
        };
        var m_action=$(this).attr('action');
        // process the form
        $.ajax({
            type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url:  m_action, // the url where we want to POST
            data: formData, // our data object
            dataType: 'json', // what type of data do we expect back from the server
            encode: true
        })
            // using the done promise callback
            .done(function (data) {

                // log data to the console so we can see
                console.log(data);

                // here we will handle errors and validation messages
                if (!data.success) {

                    // handle errors for name ---------------
                    if (data.errors.link) {
                        $('#link').addClass('has-error'); // add the error class to show red input
                        // $('#link-group').append('<div class="help-block">' + data.errors.link + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.link) {
                        $('#email').addClass('has-error'); // add the error class to show red input
                        // $('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for superhero alias ---------------
                    if (data.errors.link) {
                        $('#message').addClass('has-error'); // add the error class to show red input
                        // $('#message-group').append('<div class="help-block">' + data.errors.messages + '</div>'); // add the actual error message under our input
                    }
                    if ( $(".g-recaptcha-response") =="" && $(".g-recaptcha-response") == undefined) {
                        $('.g-recaptcha').addClass('has-error'); // add the error class to show red input
                         // $('.form__captcha').append('<div class="help-block">' + data.errors.messages + '</div>'); // add the actual error message under our input
                    }
                } else {
                    // ALL GOOD! just show the success message!
                    $('.form__result').html(data.message);
                    setTimeout(function() {window.location = location.href;}, 5000);
                    // usually after form submission, you'll want to redirect
                    //  window.location = location.href; // redirect a user to another page
                    // alert('success'); // for now we'll just alert the user
                }
            })


        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault()

            // using the fail promise callback
            .fail(function (data) {
                $('.form_result').html(data);
                // show any errors
                // best to remove for production
                console.log(data);
            });
    });

    // process the form
    $('form').submit(function (event) {

        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

    });


});