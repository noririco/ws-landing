$(document).ready(function(){
    //Collect fields.
    $(':input[type="submit"]').prop('disabled', true);

    var trigger = 'form_submit';
    var is_valid = false;
    var name = phone = email = licence = city = '';

    $('#name').on('input focus', function() {
        if( $('#name').val() )  {
            name = $('#name').val();
            // console.log(name);
            if(!/^[\u0590-\u05FF ]*$/.test(name)) {
                // addRemoveClass($(this), 1);
                $(this).addClass('error');
                $(this).removeClass('success');
                is_valid = false;
                // console.log("++++++++++++++++++");
                // console.log($(this)[0].classList.contains('error'));
                // console.log("++++++++++++++++++");

                //addRemoveClass($(this), 1);
                console.log("Only letters allowed");
            }
            else{
                //ok

                // console.log($(this)[0].classList.contains('error'));
                $(this).addClass('success');
                $(this).removeClass('error');
                is_valid = true;
                // addRemoveClass($(this), 0);
                //console.log(name);
            }
        }
        else {
            // addRemoveClass($(this), 1);
            is_valid = false;
            $(this).addClass('error');
            $(this).removeClass('success');
            console.log("ERROR EMPTY");
        }
    });

    $('#phone').on('input focus', function() {
        if( $('#phone').val() )  {
            phone = $('#phone').val();
            // console.log(name);
            if(!/^\d{9,10}$/.test(phone)) {
                //error
                is_valid = false;
                $(this).addClass('error');
                $(this).removeClass('success');
                console.log("Only 9-10 Numbers allowed");
            }
            else{
                //ok
                is_valid = true;
                $(this).addClass('success');
                $(this).removeClass('error');
                console.log(phone);
            }
        }
        else {
            is_valid = false;
            $(this).addClass('error');
            $(this).removeClass('success');            
            console.log("ERROR EMPTY");
        }
    });

    $('#email').on('input focus', function() {
        if( $('#email').val() )  {
            email = $('#email').val();
            // console.log(name);
            if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                //error
                is_valid = false;
                $(this).addClass('error');
                $(this).removeClass('success'); 
                console.log("Email is not valid");
            }
            else{
                //ok
                is_valid = true;
                $(this).addClass('success');
                $(this).removeClass('error');
                console.log(email);
            }
        }
        else {
            is_valid = false;
            $(this).addClass('error');
            $(this).removeClass('success'); 
            console.log("ERROR EMPTY");
        }
    });

    $('#licence').on('input focus', function() {
        if( $('#licence').val() )  {
            licence = $('#licence').val();
            // console.log(name);
            if(!/^\d{6,7}$/.test(licence)) {
                //error
                is_valid = false;
                $(this).addClass('error');
                $(this).removeClass('success'); 
                console.log("6-7 Numbers are allowed.");
            }
            else{
                //ok
                is_valid = true;
                $(this).addClass('success');
                $(this).removeClass('error');
                console.log(licence);
            }
        }
        else {
            is_valid = false;
            $(this).addClass('error');
            $(this).removeClass('success'); 
            console.log("ERROR EMPTY");
        }
    });

    $('#city').on('input focus', function() {
        if( $('#city').val() )  {
            city = $('#city').val();
            // console.log(name);
            if(!/^[\u0590-\u05FF ]*$/.test(city)) {
                //error
                is_valid = false;
                $(this).addClass('error');
                $(this).removeClass('success'); 
                console.log("Only letters allowed.");
            }
            else{
                //ok
                is_valid = true;
                $(this).addClass('success');
                $(this).removeClass('error');
                console.log(city);
            }
        }
        else {
            is_valid = false;
            $(this).addClass('error');
            $(this).removeClass('success'); 
            console.log("ERROR EMPTY");
        }
    });

    if(is_valid) {
        $(':input[type="submit"]').prop('disabled', false);
    }
    //On SUBMIT
    $('#contact').submit(function(e){
        e.preventDefault();

        if(is_valid){
            //form valid
            console.log("form is valid");
            //Ajax animation desgin.
            $('#submitBtn').css('display', 'none');
            $('.sk-circle').css('display', 'block');
            $('.form-title span').text('שולח טופס...');
            // $('.succesIcon').show();   
            // $('.succesIcon polyline').show().css('-webkit-animation-play-state', 'running').delay(1000);                     

            //Send Ajax.
            $.ajax({
                type: 'POST',
                url: '',
                data: {
                    'trigger': 'form_submit',
                    'name': name,
                    'phone': phone,
                    'email': email,
                    'licence': licence,
                    'city': city
                },
                success: function(data) {
                    console.log(data);
                    if(data == 'SUCCESS') {
                        //Ajax Off animation;
                        //Change text/
                        $('.sk-circle').css('display', 'none');   
                        $('.form-title span').text('נשלח בהצלחה!');
                        $('.formWrapper .form-control span').show();
                        $('.succesIcon').show();
                        $('.succesIcon polyline').show().css('-webkit-animation-play-state', 'running').delay(1000);
                    }
                },
                
             });
        }
        else {
            // form is not valid yet...
            console.log("form is not valid, could not submit");
        }
        
    });




    /* Shlomi Edit */
    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }
 
    //var deadline = new Date( Date.parse(new Date()) + 12 * 24 * 60 * 60 * 1000);
    var schedule = 'Apr 8 2018';
    initializeClock('clockdiv', schedule);
    initializeClock('titleclockdiv', schedule);

});

function addRemoveClass(element, addRemove = 0) {
    console.log(element);
    if(element[0].classList.contains('error')) {
        element.removeClass('error');
        element.addClass('success');
    }
    else if(element[0].classList.contains('success')){
        element.removeClass('success');
        element.addClass('error');
    }
    else {
        //1
        if(addRemove) {
            element.addClass('error');
        }
        //0
        else{
            element.addClass('success');
        }
    }
}

