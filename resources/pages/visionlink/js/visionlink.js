import $ from 'jquery';

$(() => {
    const statePC = $("#statePC");
    const stateMobile = $("#stateMobile");
    const imagePcWrap = $("#imagePcWrap");
    const imageMobileWrap = $("#imageMobileWrap");

    statePC.on('click', function(){
        $(this).addClass('is-active');
        stateMobile.removeClass('is-active');
        imagePcWrap.addClass('is-visible');
        imageMobileWrap.removeClass('is-visible');
    });

    stateMobile.on('click', function(){
        $(this).addClass('is-active');
        statePC.removeClass('is-active');
        imageMobileWrap.addClass('is-visible');
        imagePcWrap.removeClass('is-visible');
    });
});
