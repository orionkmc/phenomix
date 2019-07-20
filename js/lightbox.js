/*
 * jQuery Easing v1.3.2 - http://gsgd.co.uk/sandbox/jquery/easing/
 * Open source under the BSD License.
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * https://raw.github.com/gdsmith/jquery-easing/master/LICENSE
 */

    /* Lightbox*/

    $('a[data-rel^=lightcase]').each(function() {
        $(this).on({
            click : function(e) {
                e.preventDefault();
                $.fancybox.open({
                    href : $(this).attr('href'),
                    type : 'iframe',
                    padding : 50
                });
            }
        });
    });
