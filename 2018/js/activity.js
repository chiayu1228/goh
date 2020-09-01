window.onscroll = function() {scrollFunction()};
//設定"back to top"按鈕多少px時出現
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("top_btn").style.display = "block";
    } else {
        document.getElementById("top_btn").style.display = "none";
    }
}


$(document).ready(function(){
    //設定"back to top"按鈕的動作、範圍、速度
    $('#top_btn').click(function(){
        scrollToChoosePart('body', 1000);
    });
    
    //下拉式選單選擇時到對應錨點位置
    $("#scrollBtn").change(function(){
        // #container + val
        var tag = '#container'+ $(this).val();
        //控制滑動到錨點時的速度
        scrollToChoosePart( tag, 30 );
    });
    
});
