$(document).ready(function(){
    var bodyWidth = $('body').width();
    if (bodyWidth <= 1024){
        $('textarea').attr('maxlength', 495);
        $('input[name="name"]').attr('maxlength', 25);
        $('input[name="country"]').attr('maxlength', 25);
        $('input[name="telephone"]').attr('maxlength', 16);
        $('input[name="email"]').attr('maxlength', 25);

        var tabsSwiper = new Swiper('.swiper-container',{
            speed:500,
            onSlideChangeStart: function(){
                $(".tabs .active").removeClass('active');
                $(".tabs li").eq(tabsSwiper.activeIndex).addClass('active')
                $('.info a.active hr').addClass('a_active');
                if ($('div.swiper-slide.first').hasClass('swiper-slide-active')){
                    var artHeight = $('div.swiper-slide.first article').height();
                    $('.swiper-container').css('height',artHeight+'px');
                }
                if ($('div.swiper-slide.second').hasClass('swiper-slide-active')){
                    var artHeight = $('div.swiper-slide.second article').height();
                    $('.swiper-container').css('height',artHeight+'px');
                }
                if ($('div.swiper-slide.third').hasClass('swiper-slide-active')){
                    var artHeight = $('div.swiper-slide.third article').height();
                    $('.swiper-container').css('height',artHeight+'px');
                }
            }
        });
    }

});

