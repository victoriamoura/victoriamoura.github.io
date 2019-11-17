$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

$(document).ready(function() {
    $('body').scrollTop(0);
});


function esconderTudo() {
    $("body").removeClass('overflow');
    $("aside").removeClass('ativo');
    $(".overlay").removeClass('ativo');
    $(".modal-box").removeClass('ativo');
    $(".modal-menu").removeClass('ativo');
    $(".thankyou").removeClass('ativo');
    $(".thanksnewsletter").hide();
    $(".thanksinteresse").hide();
    $(".thankscontato").hide();
}


$("a.fechar, .overlay").click(function() {
    esconderTudo()
});

function showContatoBox() {
    showThankyoubox();
    $(".thankscontato").show();
}

function showInteresseBox() {
    showThankyoubox();
    $(".thanksinteresse").show();
}

function showComodatoBox() {
    showThankyoubox();
    $(".thanksnewsletter").show();
}

function showThankyoubox() {
    $(".thankyou").addClass('ativo');
}

function modalTrigger(nomeId) {
    $(".overlay").addClass('ativo');
    $("body").addClass('overflow');
    $("#" + nomeId).addClass('ativo');
}

$("a.modal-trigger").click(function() {
    var nomeId = $(this).data('id');

    modalTrigger(nomeId);
});

if ($(window).width() < 960) {
    $(".galeria_trabalhos .item").addClass('ativo');
    $(".galeria_trabalhos .item .botao_confira").addClass('ativo');
}
