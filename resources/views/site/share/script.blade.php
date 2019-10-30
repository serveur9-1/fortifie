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
