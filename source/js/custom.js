$(document).ready(function () {
    animatePortfolioImg();
    backAnimatePortfolioImg();
    scrollMenuPortfolio();
    scrollMenuAboutMe();
    scrollMenuContact();
    scrollMenuSkills();


    checkFormName();
    checkFormEmail();
    checkFormBody();
    sendPhp();
    animate();
    animateRight();
    animateLeft();
    animateUp();

});

function animatePortfolioImg() {
    $(".c-img-portfolio").mouseenter(function () {
        $(this).transition({ skewY: '0deg' });
    })
}

function backAnimatePortfolioImg() {
    $(".c-img-portfolio").mouseleave(function () {
        $(this).transition({ skewY: '-3deg' });
    })
}

function scrollMenuPortfolio() {
    $("#portfolioLink").click(function () {
        $("html,body").animate({
            scrollTop: $("#portfolio").offset().top
        },2000);
    })
}

function scrollMenuAboutMe() {
    $("#aboutMeLink").click(function () {
        $("html,body").animate({
            scrollTop: $("#aboutMe").offset().top
        },2000);
    })
}

function scrollMenuContact() {
    $("#contactLink").click(function () {
        $("html,body").animate({
            scrollTop: $("#contact").offset().top
        },2000);
    })
}

function scrollMenuSkills() {
    $("#skillsLink").click(function () {
        $("html,body").animate({
            scrollTop: $("#skills").offset().top
        },2000);
    })
}

function checkFormName() {
    $(".c-form-input-name").on("blur", function () {
        if($(this).val().length == 0)
        {
            $(this).removeClass("c-valid").addClass("c-invalid");
            $(".c-error-name").css({"display":"block"});
        }else{
            $(this).removeClass("c-invalid").addClass("c-valid");
            $(".c-error-name").css({"display":"none"});
        }
        activeContactForm();
    })
}

function checkFormEmail() {
    var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    $(".c-form-input-email").blur(function () {
        if(!pattern.test($(this).val())){
            $(this).removeClass("c-valid").addClass("c-invalid");
            $(".c-error-email").css({"display":"block"});
        }else {
            $(this).removeClass("c-invalid").addClass("c-valid");
            $(".c-error-email").css({"display":"none"});
        }
        activeContactForm();
    })
}

function checkFormBody() {
    $(".c-form-input-body").blur(function () {
        if($(this).val().length == 0)
        {
            $(this).removeClass("c-valid").addClass("c-invalid");
            $(".c-error-body").css({"display":"block"});
        }else{
            $(this).removeClass("c-invalid").addClass("c-valid");
            $(".c-error-body").css({"display":"none"});
        }
        activeContactForm();
    })
}

function activeContactForm() {
        var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if ($(".c-form-input-body").val().length == 0 || $(".c-form-input-name").val().length == 0 || !pattern.test($(".c-form-input-email").val())) {
            $("#buttonForm").prop('disabled', true);
        } else {
            $("#buttonForm").prop('disabled', false);
        }
}

function sendPhp(){

    $('#buttonForm').click(function () {

        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#body').val();

        $.ajax({
            url: "../../validation.php",
            type: "post",
            data: {
                name:$('#name').val(),
                email:$('#email').val(),
                body:$('#body').val()
            }
        }).done(function (data) {
            $(".c-send-status").css({"display":"block"});
            });
    });
}

function animateLeft() {
    $('.animate-left').addClass('c-hide').each(function () {
        $(this).viewportChecker({
            classToAdd: 'show animated fadeInLeft',
            classToRemove: 'hide',
            offset: '20%'
        })
    })
}

function animateRight() {
    $('.animate-right').addClass('c-hide').each(function () {
        $(this).viewportChecker({
            classToAdd: 'show animated fadeInRight',
            classToRemove: 'hide',
            offset: '20%'
        })
    })
}

function animateUp() {
    $('.animate-up').addClass('c-hide').each(function () {
        $(this).viewportChecker({
            classToAdd: 'show animated fadeIn',
            classToRemove: 'hide',
            offset: '50%'
        })
    })
}

function animate() {
    $('.animate').addClass('c-show').each(function () {
        $(this).viewportChecker({
            classToAdd: 'show animated flipInX',
            classToRemove: 'hide',
            offset: '20%'
        })
    })
}