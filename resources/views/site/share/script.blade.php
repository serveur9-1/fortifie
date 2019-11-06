        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('/dist/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('/dist/js/popper.js') }}"></script>
        <script src="{{ asset('/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('/dist/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('/dist/js/mail-script.js') }}"></script>
        <script src="{{ asset('/dist/js/stellar.js') }}"></script>
        <script src="{{ asset('/dist/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('/dist/js/custom.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

        <!-- scroll to the top page -->
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  // document.getElementById("dispa").style.display = "none";
                  document.getElementById("dispa1").style.display = "none";
                  document.getElementById("bouton_haut").style.display = "block";
              }else {
                  // document.getElementById("dispa").style.display = "block";
                  document.getElementById("dispa1").style.display = "block";
                  document.getElementById("bouton_haut").style.display = "none";
              }

             
          }
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }

         
        </script>
        <script type="text/javascript">
            $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                        $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-success').addClass('btn-default');
                        $item.addClass('btn-success');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url']"),
                        isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-success').trigger('click');
            });
        </script>
        <script>
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
        </script>
        
