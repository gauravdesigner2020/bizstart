  $(document).ready(function(){
    
             $('.feturSlider').owlCarousel({
                  loop: true,
                  nav: true,
                  dots:false,
                  center:false,
                  margin:5,
                  items: 2,
                  autoplay: true,
                  autoplayHoverPause: true,
                  responsive: {
                     0: {
                      items: 1.3, 
                      loop: true
                    },
                    600: {
                      items: 2, 
                      loop: true
                    },
                    1000: {
                      items: 4,
                    }
                  }                
         }); 

 });
             

 $(document).ready(function(){
    
             $('.slidr').owlCarousel({
                  loop: true,
                  nav: true,
                  dots:false,
                  center:false,
                  margin:20,
                  items: 2,
                  autoplay: true,
                  autoplayHoverPause: true,
                  responsive: {
                     0: {
                      items: 1.3, 
                      loop: true
                    },
                    600: {
                      items: 3, 
                      loop: true
                    },
                    1000: {
                      items: 5,
                    }
                  }                
         }); 

 });


 

 