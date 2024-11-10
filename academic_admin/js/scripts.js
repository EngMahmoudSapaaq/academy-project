/*!
* Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        // if (window.scrollY === 0) {
        //     navbarCollapsible.classList.remove('navbar-shrink')
        // } else {
            navbarCollapsible.classList.add('navbar-shrink')
        // }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    // if (mainNav) {
    //     new bootstrap.ScrollSpy(document.body, {
    //         target: '#mainNav',
    //         rootMargin: '0px 0px -40%',
    //     });
    // };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

    // activate tooltips
    $('.mytooltip').tooltip();

});


/*------ validate jquery --------*/

$.extend($.validator.messages, {
  required: "هذا الحقل مطلوب!",
  email: "البريد الاكتروني غير صحيح!",
  equalTo: "القيم غير متطابقة!",
  pattern: "النمط المدخل غير صحيح!",
  minlength: $.validator.format("هذا الحقل يجب أن يكون {0} حروف على الأقل!"),
});

$.validator.addMethod("custommaxsize", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			for ( var i = 0; i < element.files.length; i++ ) {
				if ( element.files[ i ].size > param * 1024 ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "File size must not exceed {0} KB each." ) );

$('.form').validate({
  rules: {
    phone: {
      minlength: 10,
      pattern: "^05[0-9]{8}$"
    },
    username: {
      minlength: 3
    },
    password: {
      minlength: 8
    },
    password_confirmation: {
      equalTo: 'input[name=password]'
    },
    name: {
      minlength: 3
    },
    location: {
      minlength: 3
    },
    info: {
      minlength: 10
    }
  },
  errorPlacement: function (err, elem) {
    if (elem.attr('name') === 'gender')
      err.insertAfter($('#gender-radio'))
    else if (elem.attr('name') === 'attachment')
      err.insertAfter($('.attachment-contint'))
    else
      err.insertAfter(elem)

  }
});
