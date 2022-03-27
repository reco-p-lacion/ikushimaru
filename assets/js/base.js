/*------------------------------
Mobile Menu (toggleClass to activate transitions)
------------------------------*/
(function($){

    const navbar = $('.navbar-toggler')

    navbar.on("click",function(e){
        e.preventDefault()
        if( $(".navbar-type").hasClass("is-toggled")) {
            $(this).removeClass("is-toggled")
            $(".navbar-type").removeClass("is-toggled")
        }else{
            $(this).addClass("is-toggled")
            $(".navbar-type").addClass("is-toggled")
        }
       
        return false
    })

    let navbarH = $('.navbar').innerHeight();
    let w = $(window).width();

    if( w < 769 ){
        $('.navbar-collapse').css({
            'margin-top': navbarH
        })
    }

    $(window).resize(function(){
        if( w < 769 ){
            $('.navbar-collapse').css({
                'margin-top': navbarH
            })
        }
    })

})(jQuery);