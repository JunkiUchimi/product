const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 1000,
        effect: "coverflow",
    
      // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: "fraction",
            hide: true,
        },
    
        autoplay: {
             delay: 4000,
        },
    
      // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    
      // And if we need scrollbar
        scrollbar: {
             el: '.swiper-scrollbar',
        },
        });