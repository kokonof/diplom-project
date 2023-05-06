(function ($) {
    wp.customize('cocojambo_link_color', function (value) {
        console.log(newval)
        value.bind( function (newval) {
            $('a').css('color', newval);
        })
    })
}) (Jquery);

console.log('====================')