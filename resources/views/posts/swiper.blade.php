<style>
        .swiper {
                width: 800px;
                height: 500px;
        }
</style>
<div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
                　<!-- Slides -->
              <div class="swiper-slide"><img src="images/slide1.png" alt="" /></div>
              <div class="swiper-slide"><img src="images/slide2.png" alt="" /></div>
        </div>
</div>
        <!-- If we need pagination -->
<div class="swiper-pagination"></div>
        
          <!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
      
        <!-- If we need scrollbar -->
<div class="swiper-scrollbar"></div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
        
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
</script> 

