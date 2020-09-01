//設定錨點定義
function scrollToChoosePart(val, speed)
{
    $('html, body').animate({
        scrollTop: $(val).offset().top
    }, speed);
}

