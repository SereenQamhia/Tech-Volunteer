// console.log('hoiiii');
// (function () {

//           'use strict'


//           var siteMenuClone = function () {
//                     var jsCloneNavs = document.querySelectorAll('.js-clone-nav');
//                     var siteMobileMenuBody = document.querySelector('.site-mobile-menu-body');



//                     jsCloneNavs.forEach(nav => {
//                               var navCloned = nav.cloneNode(true);
//                               navCloned.setAttribute('class', 'site-nav-wrap');
//                               siteMobileMenuBody.appendChild(navCloned);
//                     });

//                     setTimeout(function () {

//                               var hasChildrens = document.querySelector('.site-mobile-menu').querySelectorAll(' .has-children');

//                               var counter = 0;
//                               hasChildrens.forEach(hasChild => {

//                                         var refEl = hasChild.querySelector('a');

//                                         var newElSpan = document.createElement('span');
//                                         newElSpan.setAttribute('class', 'arrow-collapse collapsed');

//                                         // prepend equivalent to jquery
//                                         hasChild.insertBefore(newElSpan, refEl);

//                                         var arrowCollapse = hasChild.querySelector('.arrow-collapse');
//                                         arrowCollapse.setAttribute('data-bs-toggle', 'collapse');
//                                         arrowCollapse.setAttribute('data-bs-target', '#collapseItem' + counter);

//                                         var dropdown = hasChild.querySelector('.dropdown');
//                                         dropdown.setAttribute('class', 'collapse');
//                                         dropdown.setAttribute('id', 'collapseItem' + counter);

//                                         counter++;
//                               });

//                     }, 1000);


//                     // Click js-menu-toggle

//                     var menuToggle = document.querySelectorAll(".js-menu-toggle");
//                     var mTog;
//                     menuToggle.forEach(mtoggle => {
//                               mTog = mtoggle;
//                               mtoggle.addEventListener("click", (e) => {
//                                         if (document.body.classList.contains('offcanvas-menu')) {
//                                                   document.body.classList.remove('offcanvas-menu');
//                                                   mtoggle.classList.remove('active');
//                                                   mTog.classList.remove('active');
//                                         } else {
//                                                   document.body.classList.add('offcanvas-menu');
//                                                   mtoggle.classList.add('active');
//                                                   mTog.classList.add('active');
//                                         }
//                               });
//                     })



//                     var specifiedElement = document.querySelector(".site-mobile-menu");
//                     var mt, mtoggleTemp;
//                     document.addEventListener('click', function (event) {
//                               var isClickInside = specifiedElement.contains(event.target);
//                               menuToggle.forEach(mtoggle => {
//                                         mtoggleTemp = mtoggle
//                                         mt = mtoggle.contains(event.target);
//                               })

//                               if (!isClickInside && !mt) {
//                                         if (document.body.classList.contains('offcanvas-menu')) {
//                                                   document.body.classList.remove('offcanvas-menu');
//                                                   mtoggleTemp.classList.remove('active');
//                                         }
//                               }

//                     });

//           };
//           siteMenuClone();

//           // Get a reference to the navigation bar element
//           var navbar = document.querySelector('.site-nav');

//           // Get the initial offset of the navigation bar
//           var offset = navbar.offsetTop;

//           // Function to handle the scroll event
//           function handleScroll() {
//                     if (window.pageYOffset >= offset) {
//                               // Add the 'fixed' class to the navigation bar
//                               navbar.classList.add('fixed');
//                               // Set the background color to red
//                               navbar.style.background = 'red';
//                     } else {
//                               // Remove the 'fixed' class from the navigation bar
//                               navbar.classList.remove('fixed');
//                               // Reset the background color
//                               navbar.style.background = '';
//                     }
//           }

//           // Attach the scroll event listener to the window
//           window.addEventListener('scroll', handleScroll);




//           // $(function () {
//           //   $(document).scroll(function () {
//           //     var $nav = $(".site-nav");
//           //     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//           //   });
// });




// // Get a reference to the navigation bar element
// var navbar = document.querySelector('.site-nav');
// var image = document.querySelector(".logo-image");
// var lii = document.querySelectorAll(".site-nav .site-navigation .site-menu>li>a "
// );

// // Get the initial offset of the navigation bar
// var offset = navbar.offsetTop;

// // Function to handle the scroll event
// function handleScroll() {
//           lii.forEach((li) => {
//                     if (!(li.classList.contains('active'))) {
//                               if (window.scrollY < 60) {
//                                         // Add the 'fixed' class to the navigation bar
//                                         image.src =
//                                                   "https://media.discordapp.net/attachments/1149330077880942705/1151770132192960542/codemates.png?width=721&height=541";
//                                         navbar.classList.add("fixed");
//                                         navbar.classList.remove("scrolled");
//                                         li.classList.remove("licolor");

//                                         // Set the background color to red
//                                         navbar.style.background = "transparent";
//                               } else {
//                                         // Remove the 'fixed' class from the navigation bar
//                                         navbar.classList.remove("fixed");
//                                         navbar.classList.add("scrolled");
//                                         li.classList.add("licolor");
//                                         image.src =
//                                                   "https://media.discordapp.net/attachments/1149330077880942705/1151770919937781760/codemates-logo__1_-removebg-preview_1.png?width=721&height=541";


//                                         // Reset the background color
//                               }
//                     }
//           });

// }

// // Attach the scroll event listener to the window
// window.addEventListener('scroll', handleScroll);




console.log('hoiiii');

(function () {
          'use strict';

          var siteMenuClone = function () {
                    var jsCloneNavs = document.querySelectorAll('.js-clone-nav');
                    var siteMobileMenuBody = document.querySelector('.site-mobile-menu-body');

                    jsCloneNavs.forEach(nav => {
                              var navCloned = nav.cloneNode(true);
                              navCloned.setAttribute('class', 'site-nav-wrap');
                              siteMobileMenuBody.appendChild(navCloned);
                    });

                    setTimeout(function () {
                              var hasChildrens = document.querySelector('.site-mobile-menu').querySelectorAll(' .has-children');
                              var counter = 0;

                              hasChildrens.forEach(hasChild => {
                                        var refEl = hasChild.querySelector('a');
                                        var newElSpan = document.createElement('span');
                                        newElSpan.setAttribute('class', 'arrow-collapse collapsed');

                                        // prepend equivalent to jQuery
                                        hasChild.insertBefore(newElSpan, refEl);

                                        var arrowCollapse = hasChild.querySelector('.arrow-collapse');
                                        arrowCollapse.setAttribute('data-bs-toggle', 'collapse');
                                        arrowCollapse.setAttribute('data-bs-target', '#collapseItem' + counter);

                                        var dropdown = hasChild.querySelector('.dropdown');
                                        dropdown.setAttribute('class', 'collapse');
                                        dropdown.setAttribute('id', 'collapseItem' + counter);

                                        counter++;
                              });
                    }, 1000);

                    // Click js-menu-toggle
                    var menuToggle = document.querySelectorAll(".js-menu-toggle");
                    var mTog;

                    menuToggle.forEach(mtoggle => {
                              mTog = mtoggle;
                              mtoggle.addEventListener("click", (e) => {
                                        if (document.body.classList.contains('offcanvas-menu')) {
                                                  document.body.classList.remove('offcanvas-menu');

                                                  mtoggle.classList.remove('active');
                                                  mTog.classList.remove('active');
                                        } else {
                                                  document.body.classList.add('offcanvas-menu');
                                                  mtoggle.classList.add('active');
                                                  mTog.classList.add('active');
                                        }
                              });
                    });

                    var specifiedElement = document.querySelector(".site-mobile-menu");
                    var mt, mtoggleTemp;

                    document.addEventListener('click', function (event) {
                              var isClickInside = specifiedElement.contains(event.target);

                              menuToggle.forEach(mtoggle => {
                                        mtoggleTemp = mtoggle;
                                        mt = mtoggle.contains(event.target);
                              });

                              if (!isClickInside && !mt) {
                                        if (document.body.classList.contains('offcanvas-menu')) {
                                                  document.body.classList.remove('offcanvas-menu');
                                                  mtoggleTemp.classList.remove('active');
                                        }
                              }
                    });
          };

          siteMenuClone();

          // Get a reference to the navigation bar element
          var navbar = document.querySelector('.site-nav');
          var image = document.querySelector(".logo-image");
          var lii = document.querySelectorAll(".site-nav .site-navigation .site-menu>li>a ");
          // Get the initial offset of the navigation bar
          var offset = navbar.offsetTop;

          // Function to handle the scroll event
          function handleScroll() {
                    lii.forEach((li) => {
                              if (!(li.classList.contains('active'))) {
                                        if (window.scrollY < 60) {
                                                  // Add the 'fixed' class to the navigation bar
                                                  image.src =
                                                            "https://media.discordapp.net/attachments/1149330077880942705/1151770132192960542/codemates.png?width=721&height=541";
                                                  navbar.classList.add("fixed");
                                                  navbar.classList.remove("scrolled");
                                                  li.classList.remove("licolor");

                                                  // Set the background color to red
                                                  navbar.style.background = "transparent";
                                        } else {
                                                  // Remove the 'fixed' class from the navigation bar
                                                  navbar.classList.remove("fixed");
                                                  navbar.classList.add("scrolled");
                                                  li.classList.add("licolor");
                                                  image.src =
                                                            "https://media.discordapp.net/attachments/1149330077880942705/1151770919937781760/codemates-logo__1_-removebg-preview_1.png?width=721&height=541";


                                                  // Reset the background color
                                        }
                              }
                    });

          }

          // Attach the scroll event listener to the window
          window.addEventListener('scroll', handleScroll);
})();
