
jQuery(document).ready(function() {

    // Scroll Effects
    jQuery('.firstsection').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 300,
        //classToRemove : 'hidden'
    });



    //Timer
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 30, 2017 12:00:00").getTime();

// Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("timer").innerHTML = seconds + " : " + minutes + " : " + hours + " : " + days;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);



    // Inputs Fields :
    // JavaScript for label effects only
    jQuery(window).load(function(){
        $(".email-subscribtion-input input").val("");

        $(".input-effect input").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })
    });

    // Buttons :
    jQuery(function() {
        var taint, d, x, y;
        $(".material-button").click(function(e){
            if ($(this).find(".taint").length == 0) {
                $(this).prepend("<span class='taint'></span>")
            }
            taint = $(this).find(".taint");
            taint.removeClass("drop");
            if(!taint.height() && !taint.width()) {
                d = Math.max($(this).outerWidth(), $(this).outerHeight());
                taint.css({height: d, width: d});
            }
            x = e.pageX - $(this).offset().left - taint.width()/2;
            y = e.pageY - $(this).offset().top - taint.height()/2;
            taint.css({top: y+'px', left: x+'px'}).addClass("drop");
        });
    });

    jQuery(".button").click(function(){
        if(jQuery('.email').val().length == 0) {
            jQuery('.email_confirmation').text('المدخل غير صحيح ، تأكد من إدخالك للإيميل قبل الإشتراك');
            jQuery('.email_confirmation').show();
            jQuery('.email_confirmation').css('color', 'red');

        }
        else {
            jQuery('.email_confirmation').text('ستتوصل بإيميل لتفعيل بريدك الإلكتروني لإستكمال تسجيلك ، المرجو التحقق منه ');
            jQuery('.email_confirmation').show();
            jQuery('.email_confirmation').css('color', 'green');

        }
    });


});

function check_email() {
    var text_confirmation =  document.getElementById('email_confirmation');
    var input_email =  document.getElementById('mce-EMAIL');

    if(input_email=="" || input_email==null){
        text_confirmation.innerHTML = "خطأ"
        text_confirmation.style.display = block ;
    }

}

