// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('btntop').style.display='block';
  } else {
    document.getElementById('btntop').style.display='none';
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
        document.addEventListener("DOMContentLoaded", function () {
            var lazyloadImages = document.querySelectorAll("img.lazy");
            var lazyloadThrottleTimeout;
            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }
                lazyloadThrottleTimeout = setTimeout(function () {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function (img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }
            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        });

        $(window).load(function () {
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({ default_offset_pct: 0.7 });
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({ default_offset_pct: 0.3, orientation: 'vertical' });
        });
        //// end doctor.html script      
        /////////this is for achievements.html
                function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Load more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Load less";
                moreText.style.display = "inline";
            }
        }
        //////////end achievements.html
        
       
        
        
      