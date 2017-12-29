/**
 * Created by Administrator on 2017/8/11.
 */
$(".inputbox-input").focus(function(){
    $('.inputbox-img').css('display','none');
    $(".write-btngroup").css("display","block");
}).blur(function () {
    $('.inputbox-img').css('display','inline-block');
    $(".write-btngroup").css("display","none");
});
