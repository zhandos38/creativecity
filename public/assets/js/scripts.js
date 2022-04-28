$(document).ready(function () {
    $("#tel-input").mask("+7(999) 999-9999");
//mobile header
    var burger = document.getElementById("burger");
    var burger1 = document.getElementById("burger1");
    var menu = document.getElementById("menu");
    var body = document.getElementById("body");
    var closeMenu = document.getElementById("close-menu");
    var openModal = document.getElementById("open-modal");
    var cartModal = document.getElementById("cartModal");
    var closeModal = document.getElementById("close-modal");
    var closeModal1 = document.getElementById("close-modal1");
    var closePlacemarkModal = document.getElementById("close-Placemark-Modal");
    var thankModal = document.getElementById("thankModal");
    var submit = document.getElementById("submit");
    var openModal1 = document.getElementById("openModal1");
    var imgModal = document.getElementById("imgModal");
    var PlacemarkModal = document.getElementById("Placemark-Modal");
    var openForm = document.getElementById("openForm");
    var exampleImg = document.getElementById("exampleImg");
    var closeImgModal = document.getElementById("close-modal2");
    var moreBtn = document.getElementById("more");
    var moreInfo = document.getElementById("moreInfo");


    if (burger)
        burger.onclick = function () {
            menu.style.display = "block";
            body.style.overflow = "hidden";
        }
    if (moreBtn)
        moreBtn.onclick = function () {
            moreInfo.style.display = "block";
            moreBtn.style.opacity='0';
        }
    if (openForm)
        openForm.onclick = function () {
            $("#cartModal #id_input").val($(openForm).attr("data-id"))
            cartModal.style.display = "block";
            PlacemarkModal.style.display = "none";
        }
    if (exampleImg)
        exampleImg.onclick = function () {
            imgModal.style.display = "block";
        }
    if (burger1)
        burger1.onclick = function () {
            menu.style.display = "block";
            body.style.overflow = "hidden";
        }

    if (openModal)
        openModal.onclick = function () {
            $("#cartModal #id_input").val('');
            cartModal.style.display = "block";
        }

    if (openModal1)
        openModal1.onclick = function () {
            cartModal.style.display = "block";
        }

    if (closeModal)
        closeModal.onclick = function () {
            cartModal.style.display = "none";
        }
    if (closeImgModal)
        closeImgModal.onclick = function () {
            imgModal.style.display = "none";
        }
    if (closePlacemarkModal)
        closePlacemarkModal.onclick = function () {
            PlacemarkModal.style.display = "none";
        }

    if (closeModal1)
        closeModal1.onclick = function () {
            thankModal.style.display = "none";
        }

    if (closeMenu)
        closeMenu.onclick = function () {
            menu.style.display = "none";
            body.style.overflow = "auto";
        }

    $('.modal-inputs').submit(function (e) {
        var $form = $(this);
        var x = document.forms["Form-request"]["phone"].value;
        var y = document.forms["Form-request"]["email"].value;
        if (x == "" || y == '') {
            alert("Все поля должны быть заполнены");
            return false;
        } else {
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                dataType: "json",
                success: function (response) {
                    cartModal.style.display = "none";
                    thankModal.style.display = "block";
                },
                error: function (response) {
                    let errors = $.parseJSON(response.responseText);
                    printErrorMessages(errors.errors);
                }
            });
        }

        e.preventDefault();
    });

    function printErrorMessages(errors) {
        $.each(errors, function (key, value) {
            alert(value);
        });
    }

    $(function () {
        $(".menu-item").click(function(){
            menu.style.display = "none";
            body.style.overflow = "auto";
        });
        $('.peoples-cards').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '.contact .contact-content .contact-peoples .peoples-arrow .arrow-left',
            nextArrow: '.contact .contact-content .contact-peoples .peoples-arrow .arrow-right',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]

        });
        $('.about-cards').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            nextArrow: '.about .about-content .about-branches .arrows .arrow-right',
            prevArrow: '.about .about-content .about-branches .arrows .arrow-left',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
        });
        $('.portfolio-right-imgs').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            arrows: true,
            nextArrow: '.portfolio .portfolio-content .portfolio-left .portfolio-action .portfolio-arrows .arrow-right',
            prevArrow: '.portfolio .portfolio-content .portfolio-left .portfolio-action .portfolio-arrows .arrow-left',
        });
    })


// $(function());
    ymaps.ready(init);

    function init() {
        $.ajax({
            type: 'get',
            url: "/get-points",
            dataType: 'json',
            success: function (response) {
                let placemarks = response.data;

                var myMap = new ymaps.Map("map", {center: [43.234638, 76.896812], zoom: 14, controls: []});
                myMap.controls.add("zoomControl").add("typeSelector").add("mapTools");
                placemarks.forEach(placemark => {
                    var myPlacemark = new ymaps.Placemark([placemark.lang, placemark.lat], {}, {
                        iconImageHref: './assets/img/map-pin.png',
                        // Размеры метки.
                        iconImageSize: [48, 51],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-3, -60]
                    });
                    myMap.geoObjects.add(myPlacemark);
                    myPlacemark.events.add('click', function () {
                        let image = placemark.image;
                        if(placemark.image != null){
                            image = image.replace("public", "storage");
                        }

                        $('#Placemark-Modal img').attr('src', image);
                        $('#Placemark-Modal .modal-btn').attr('data-id', placemark.id);
                        $('#Placemark-Modal .modal-text').html(placemark.description_ru);
                        $('#Placemark-Modal .modal-title').html(placemark.title_ru);
						$('#Placemark-Modal #lat').html(placemark.lat);
						$('#Placemark-Modal #lng').html(placemark.lang);
						console.log(placemark);
                        PlacemarkModal.style.display = 'block'
                    });
                })
                myMap.controls.remove('mapTools').remove('zoomControl').remove('typeSelector');
            },
            error: function () {

            }
        });
    }
    $("#ticker").eocjsNewsticker({
        speed: 10,
        timeout: 0.5
    });
    $("#ticker2").eocjsNewsticker({
        speed: 10,
        timeout: 0.5
    });

    $('#lang').change(function() {
        window.location.replace(this.value);
    });
	
	$('#partners-slider').slick();
});