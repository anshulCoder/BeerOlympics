<!--not tho change js-->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/doolally-local-session.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/propeller.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/angular.min.js"></script>

<!-- constants -->
<script>
    window.base_url = '<?php echo base_url(); ?>';
</script>

<!-- Loader Show and hide script -->
<script>
    function showCustomLoader()
    {
        $('body').addClass('custom-loader-body');
        $('.custom-loader-overlay').css('top',$(window).scrollTop()).addClass('show');
    }

    function hideCustomLoader()
    {
        $('body').removeClass('custom-loader-body');
        $('.custom-loader-overlay').removeClass('show');
    }


    function maxLengthCheck(object)
    {
        if (object.value.length > object.maxLength)
            object.value = object.value.slice(0, object.maxLength)
    }
    function formatJsDate(gotDate)
    {
        if(gotDate == null)
        {
            return '';
        }
        var monthNames = [
            "Jan", "Feb", "Mar",
            "Apr", "May", "June", "July",
            "Aug", "Sep", "Oct",
            "Nov", "Dec"
        ];

        var date = new Date(gotDate);
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        return day + ' ' + monthNames[monthIndex] + ' ' + year;
    }

    function isEmailValid(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>
<script>
    function showProgressBar()
    {
        $('.progress').removeClass('hide');
    }
    function hideProgressBar()
    {
        $('.progress').addClass('hide');
    }
    function saveErrorLog(errorTxt)
    {
        $.ajax({
            type:'POST',
            dataType:'json',
            url:base_url+'home/saveErrorLog',
            data:{errorTxt: errorTxt},
            success: function(data){},
            error: function(){}
        });
    }
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        // If we need pagination
        pagination: '.swiper-pagination',
        effect: 'slide'
    });

    var getDiscount= 0;
    var finalAmt = 8000;
    var couponApplied = false;
    //Angular validation
    var app = angular.module('beerOlympicApp', []);
    app.controller('validateCtrl', function($scope, $http) {
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $scope.totalBus = 0;
        $scope.athleteAmt = 8000;
        $scope.busCost = 800;
        $scope.isReqPending = false;
        $scope.calcAndPay = function()
        {
            if($scope.ifBusRequired)
            {
                if($scope.busForm.busBookerName.$invalid )
                {
                    $('#error-alert').attr('data-message','Name is Required!').click();
                    return false;
                }
                if($scope.busForm.busBookerMobile.$invalid )
                {
                    $('#error-alert').attr('data-message','Valid 10 Digit Mobile Number is Required!').click();
                    return false;
                }
                if($scope.busForm.busBookerEmail.$invalid )
                {
                    $('#error-alert').attr('data-message','Valid Email is Required!').click();
                    return false;
                }
                if($scope.busForm.busBookerSeats.$invalid)
                {
                    $('#error-alert').attr('data-message','Number of Seats are Required!').click();
                    return false;
                }
                if(!$('#tncCheck').is(":checked"))
                {
                    $('#error-alert').attr('data-message','Please Agree to Terms!').click();
                    return false;
                }

                if($scope.isReqPending === false)
                {
                    $scope.isReqPending = true;
                    showProgressBar();
                    $.ajax({
                        type:'POST',
                        dataType:'json',
                        url:$('#busForm').attr('action'),
                        data: $('#busForm').serialize(),
                        success: function(data)
                        {
                            hideProgressBar();
                            $scope.isReqPending = false;
                            if(data.status === true)
                            {
                                window.location.href=data.payUrl;
                            }
                            else
                            {
                                $('#error-alert').attr('data-message',data.errorMsg).click();
                            }

                        },
                        error:function(xhr, status, error)
                        {
                            $scope.isReqPending = false;
                            hideProgressBar();
                            $('#error-alert').attr('data-message','Some Error Occurred!').click();
                            var err = '<pre>'+xhr.responseText+'</pre>';
                            saveErrorLog(err);
                        }
                    });
                }
                else
                {
                    $('#error-alert').attr('data-message','Please Wait for the Previous Request To Finish!').click();
                }
            }
            else
            {
                if($scope.captainForm.$valid)
                {
                    if(!$('#tncCheck').is(":checked"))
                    {
                        $('#error-alert').attr('data-message','Please Agree to Terms!').click();
                        return false;
                    }

                    if($scope.isReqPending === false)
                    {
                        $scope.isReqPending = true;
                        showProgressBar();
                        $.ajax({
                            type:'POST',
                            dataType:'json',
                            url:$('#captainForm').attr('action'),
                            data: $('#captainForm').serialize(),
                            success: function(data)
                            {
                                hideProgressBar();
                                $scope.isReqPending = false;
                                if(data.status === true)
                                {
                                    window.location.href=data.payUrl;
                                }
                                else
                                {
                                    $('#error-alert').attr('data-message',data.errorMsg).click();
                                }

                            },
                            error:function(xhr, status, error)
                            {
                                $scope.isReqPending = false;
                                hideProgressBar();
                                $('#error-alert').attr('data-message','Some Error Occurred!').click();
                                var err = '<pre>'+xhr.responseText+'</pre>';
                                saveErrorLog(err);
                            }
                        });
                    }
                    else
                    {
                        $('#error-alert').attr('data-message','Please Wait for the Previous Request To Finish!').click();
                    }

                }
                else
                {
                    $('#error-alert').click();
                }
            }
        };
        $scope.addToTotal = function(busCheck)
        {
            if(busCheck)
            {
                $scope.totalBus += 1;
            }
            else
            {
                $scope.totalBus -= 1;
                if($scope.totalBus < 0)
                {
                    $scope.totalBus= 0;
                }
            }
            if($scope.totalBus != 0)
            {
                $('#team-wagon-details').html('Wagon Price ('+$scope.totalBus+' x Rs. 800)');
                var fTotal = $scope.athleteAmt + ($scope.totalBus * $scope.busCost);
                $('#team-wagon-price').html('Rs. '+($scope.totalBus * $scope.busCost));
                if(couponApplied)
                {
                    finalAmt = fTotal - getDiscount;
                }
                else
                {
                    finalAmt = fTotal;
                }
                $('#final-total').html('Rs. '+finalAmt);
            }
            else
            {
                $('#team-wagon-details').html('');
                $('#team-wagon-price').html('');
                if(couponApplied)
                {
                    $('#final-total').html('Rs. '+($scope.athleteAmt - getDiscount));
                }
                else
                {
                    //$('#finalAmt').val($scope.athleteAmt);
                    $('#final-total').html('Rs. '+$scope.athleteAmt);
                }
            }
        };
        $scope.checkCoupon = function()
        {
            if($scope.couponForm.couponC.$pristine || $scope.couponForm.couponC.$invalid)
            {
                $('#error-alert').attr('data-message','Please Provide the Coupon Code!').click();
            }
            else
            {
                var coupon = $('#couponC').val();
                showProgressBar();
                $.ajax({
                    type:'POST',
                    dataType:'json',
                    url:base_url+'checkCoupon',
                    data: {couponCode: coupon},
                    success: function(data){
                        hideProgressBar();
                        if(data.status === true)
                        {
                            couponApplied = true;
                            $('#couponCode').val(coupon);

                            if(data.couponType.toLowerCase() == 'percentage')
                            {
                                //Calculating percentage discount on Team base price i.e. 8000
                                getDiscount = (Number(data.couponCost) / 100) * $scope.athleteAmt;
                                $('.coupon-panel #coupon-details').html('Coupon ('+data.couponCost+'% off)');
                                $('#coupon-discount').html('-(Rs. '+getDiscount+')');
                                finalAmt = finalAmt - getDiscount;
                                $('#final-total').html('Rs. '+finalAmt);
                            }

                            $('#coupon-field').addClass('hide');
                            $('.coupon-panel .only-coupon').html(coupon);
                            $('.coupon-panel').removeClass('hide');
                        }
                        else
                        {
                            $('#error-alert').attr('data-message',data.errorMsg).click();
                        }
                    },
                    error:function(xhr, status, error)
                    {
                        hideProgressBar();
                        $('#error-alert').attr('data-message','Some Error Occurred!').click();
                        var err = '<pre>'+xhr.responseText+'</pre>';
                        saveErrorLog(err);
                    }
                });
            }
        };
        $scope.calWagonPrice = function()
        {
            var seatsVal = $('#busBookerSeats').val();

            if(seatsVal != '' && seatsVal != 0)
            {
                var wagonFinal = seatsVal * $scope.busCost;
                $('#bus-subtotal').html('Seats ('+seatsVal+' x Rs. '+$scope.busCost+')');
                $('#final-bus-total').html('Rs. '+wagonFinal);
                $('#final-total').html('Rs. '+wagonFinal);
            }
        };
    });

    $(document).on('click','.remove-coupon', function(){
        $('.coupon-panel').addClass('hide');
        $('#coupon-discount').html('');
        $('#couponCheck').click();
        //input field
        $('#couponCode').val('');
        $('#coupon-field').removeClass('hide');
        //$('#coupon-strike').html('').addClass('hide');
        finalAmt = finalAmt + getDiscount;
        $('#final-total').html('Rs. '+finalAmt);
        couponApplied = false;
    });

    $(document).ready(function(){
        if(typeof $('#payStatus').val() !== 'undefined')
        {
            if($('#payStatus').val() == '1')
            {
                $('#alert-dialog .pmd-card-title-text').html('Thank You!');
            }
            else
            {
                $('#alert-dialog .pmd-card-title-text').html('Error!');
            }
            $('#alert-dialog .modal-body').html($('#payText').val());
            $('#alert-modal').click();
        }
    });
    $(document).on('click','#only-book-wagon', function(){
        $('html, body').animate({
            scrollTop: $("#wagon-accordion").offset().top
        }, 1000);
    });
    $(document).on('click','.beer-tnc', function(){
        $('#alert-dialog .pmd-card-title-text').html('Terms And Conditions');
        $('#alert-dialog .modal-body').html('All events are a race against time<br>'+
        'Please remember this is just a game and not a life altering scenario<br>'+
        'Each game has a referee, and the referee is always right<br>'+
        'Also you are definitely drunk, the referee is not.<br>'+
            'The games are divided into two parts - Eliminations and Finals. The elimination rounds will run from 11 am to 3 pm and the finals will run from 4 pm to 6 pm.<br>'+
            'All four team members will play all five games. Substitution is not allowed.');
        $('#alert-modal').click();
    });
</script>