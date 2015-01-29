$(document).ready(function(){
    /*----------------------link to logo---------------------------------------*/
    $('div.logo img').on('click', function(){
        $(".tabs li.lg").addClass('active')
        tabsSwiper.swipeTo( $(".tabs li.lg").index() )
    });
    /*----------------------link to contacts-----------------------------------*/
    $('a.write-us').on('click', function(){
        $(".tabs li.cnt").addClass('active')
        tabsSwiper.swipeTo( $(".tabs li.cnt").index() )
    });
    /*----------------------swiper slider--------------------------------------*/
    var tabsSwiper = new Swiper('.swiper-container',{
        speed:500,
        onSlideChangeStart: function(){
            $(".tabs .active").removeClass('active');
            $(".tabs li").eq(tabsSwiper.activeIndex).addClass('active');
            $('.info a.active hr').addClass('a_active');
            if ($('div.swiper-slide.first').hasClass('swiper-slide-active')){
                var artHeight = $('div.swiper-slide.first article').height();
                $('.swiper-wrapper').css('height',artHeight+'px');
                $('.swiper-container').css('height',artHeight+'px');
            }
            if ($('div.swiper-slide.second').hasClass('swiper-slide-active')){
                var artHeight = $('div.swiper-slide.second article#forCompany').height();
                $('.swiper-wrapper').css('height',artHeight+'px');
                $('.swiper-container').css('height',artHeight+'px');
            }
            if ($('div.swiper-slide.third').hasClass('swiper-slide-active')){
                var artHeight = $('div.swiper-slide.third article').height();
                $('.swiper-wrapper').css('height',artHeight+'px');
                $('.swiper-container').css('height',artHeight+'px');
            }
        }
    });
    $(".tabs li").on('touchstart mousedown',function(e){
        e.preventDefault();
        $(".tabs .active").removeClass('active');
        $('.info a.active hr').removeClass('a_active');
        $(this).addClass('active');
        tabsSwiper.swipeTo( $(this).index());
    });
    $(".tabs li").click(function(e){
        e.preventDefault();
    });
    var mySwiper = $('.swiper-container').swiper({
        //Your options here:
        mode:'horizontal',
        loop: false,
        calculateHeight: true
        //etc..
    });

    /*--------------------------------------------------------------------------*/
    $('.info li').on('touchstart',function(){
        $('hr').removeClass('a_hover');
    });
    /*--------------------------------------------------------------------------*/
});

$(window).load(function(){
    changeHeight();
});

function changeHeight(){
    $('.swiper-slide').css('height',$('#portfolio').height());
    $('.swiper-wrapper').css('height',$('#portfolio').height());
    $('.swiper-container').css('height',$('#portfolio').height());
}