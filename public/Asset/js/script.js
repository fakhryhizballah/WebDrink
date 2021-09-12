$( document ).ready(function() {
 
    const flashSuccess = $(".flash-Success").data("flashdata");
console.log(flashSuccess);
if (flashSuccess) {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: flashSuccess,
    })
}

$('.owl-carousel').owlCarousel({

    autoplay: true,

    dots: false,


    loop: true,

    responsive: {

        0: {

            items: 2

        },

        768: {

            items: 4

        },

        900: {

            items: 6

        }

    }

});

});

