import $ from 'jquery';
import 'slick-carousel/slick/slick';

$(() => {
    const statePC = $("#statePC");
    const stateMobile = $("#stateMobile");
    const imagePcWrap = $("#imagePcWrap");
    const imageMobileWrap = $("#imageMobileWrap");

    const projectModalWrap = $("#gjProjectModalWrap");
    const ProjectModal = $("#gjProjectModal");
    const projectModalClose = $("#projectModalClose");
    const modalImageWrap = $("#gjModalImageWrap");

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

    imagePcWrap.slick({
        slidesToShow: 1
    });

    function scrollDisable(){
        $('body').css({'overflow': 'hidden'});
    }
    function scrollAble(){
        $('body').css({'overflow': 'auto'});
    }

    projectModalWrap.on('click', function(e){
        ProjectModal.on('click', function(e){
            e.stopPropagation();
        });

        scrollAble();
        projectModalWrap.removeClass('is-active');
        modalImageWrap.find('img').attr('src', '#');
    });

    imageMobileWrap.children('li').on('click', function(){
        scrollDisable();
        projectModalWrap.addClass('is-active');
        let imageSrc = $(this).find('img').attr('src');

        modalImageWrap.find('img').attr('src', imageSrc);
    });

    projectModalClose.on('click', function(){
        scrollAble();
        projectModalWrap.removeClass('is-active');
        modalImageWrap.find('img').attr('src', '#');
    });
});
