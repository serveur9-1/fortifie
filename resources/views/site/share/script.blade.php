        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <script src="{{ asset('/dist/js/popper.js') }}"></script>
        <script src="{{ asset('/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/dist/js/aos.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('/dist/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('/dist/js/mail-script.js') }}"></script>
        <script src="{{ asset('/dist/js/stellar.js') }}"></script>
        <script src="{{ asset('/dist/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/dist/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('/dist/js/custom.js') }}"></script>
        <script src="{{ asset('/dist/js/bootstrap-select.min.js') }}"></script>
        
        


        <script>
        AOS.init();
        </script>

        <script src="{{ asset('/dist/js/slick.js') }}"></script>
        
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
        <script>
          function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                  /*check if the item starts with the same letters as the text field value:*/
                  if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                  }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                  /*If the arrow DOWN key is pressed,
                  increase the currentFocus variable:*/
                  currentFocus++;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 38) { //up
                  /*If the arrow UP key is pressed,
                  decrease the currentFocus variable:*/
                  currentFocus--;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 13) {
                  /*If the ENTER key is pressed, prevent the form from being submitted,*/
                  e.preventDefault();
                  if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                  }
                }
            });
            function addActive(x) {
              /*a function to classify an item as "active":*/
              if (!x) return false;
              /*start by removing the "active" class on all items:*/
              removeActive(x);
              if (currentFocus >= x.length) currentFocus = 0;
              if (currentFocus < 0) currentFocus = (x.length - 1);
              /*add class "autocomplete-active":*/
              x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
              /*a function to remove the "active" class from all autocomplete items:*/
              for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
              }
            }
            function closeAllLists(elmnt) {
              /*close all autocomplete lists in the document,
              except the one passed as an argument:*/
              var x = document.getElementsByClassName("autocomplete-items");
              for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                  x[i].parentNode.removeChild(x[i]);
                }
              }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
          }

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
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
        <script type="text/javascript">
          $(document).ready(function(){
             $("#confirmer").click(function () {
                $("#theme1").val(
                    $("#theme").val()
                );
                $("#cat1").val(
                    $("input[name=category]:checked").attr('categorie')
                );
                $("#date1").text(
                    $("#date_debut").val()
                );
                $("#heure1").text(
                    $("#heure_debut").val()
                );
                $("#heure2").text(
                    $("#heure_fin").val()
                );
                $("#date2").text(
                    $("#date_fin").val()
                );
                $("#desc1").text(
                    $("#desc").val()
                );
                
                $("#contact1").val(
                    $("#contacts").val()
                );
                $("#email1").val(
                    $("#email").val()
                );
                $("#subCat1").val(
                    $("input[class=js--subcategorie]:checked").attr('subcategorie')
                );
            });
         });
         </script>
         <script type="text/javascript">
            $(document).ready(function() {

              $(".toggle-accordion").on("click", function() {
                var accordionId = $(this).attr("accordion-id"),
                  numPanelOpen = $(accordionId + ' .collapse.in').length;
                
                $(this).toggleClass("active");

                if (numPanelOpen == 0) {
                  openAllPanels(accordionId);
                } else {
                  closeAllPanels(accordionId);
                }
              })

              openAllPanels = function(aId) {
                console.log("setAllPanelOpen");
                $(aId + ' .panel-collapse:not(".in")').collapse('show');
              }
              closeAllPanels = function(aId) {
                console.log("setAllPanelclose");
                $(aId + ' .panel-collapse.in').collapse('hide');
              }
                 
            });
        </script>



<!-- For google recaptcha -->





