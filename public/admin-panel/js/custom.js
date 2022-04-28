
function writeCookie(name,value,days)
{
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
    }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}


function readCookie(name)
{
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}


function greeted()
{
    writeCookie('greeting', 1, 1);
}


function checkGreeted()
{
    if(readCookie('greeting') !== ''){
        $('#greeting').hide();
    }
}


function onDelete(id) {
    if (confirm('Вы действительно хотите удалить?')) {
        event.preventDefault();
        document.getElementById(id).click();
    } else {
        event.preventDefault();
    }
}

// ---- TINY EDITOR -----
tinymce.init({
    height: 500,
    selector: '.tinymce-editor',
    language: 'ru',
    plugins: [
        'advlist autolink lists link image imagetools charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen quickbars',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern codesample toc help code'
    ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
    toolbar2: "| link unlink anchor | image media | forecolor backcolor emoticons  | print preview code | codesample help",
    image_advtab: true ,
    custom_colors: true,
    color_map: [
        "000000", "Черный",
        "993300", "Сгоревший апельсин",
        "333300", "Темно-оливковый",
        "003300", "Темно-зеленый",
        "003366", "Темная лазурь",
        "000080", "Темно-синий",
        "333399", "Индиго",
        "333333", "Очень темно-серый",
        "800000", "Бордовый",
        "FF6600", "апельсин",
        "808000", "Оливковое",
        "008000", "Зеленый",
        "008080", "Бирюзовый",
        "0000FF", "Синий",
        "666699", "Серовато-синий",
        "808080", "Серый",
        "FF0000", "Красный",
        "FF9900", "Янтарь",
        "99CC00", "Желтый зеленый",
        "339966", "Цвет морской волны",
        "33CCCC", "Бирюзовый",
        "3366FF", "Королевский синий",
        "800080", "Фиолетовый",
        "999999", "Средний серый",
        "FF00FF", "Пурпурный",
        "FFCC00", "Золото",
        "FFFF00", "Желтый",
        "00FF00", "Лайм",
        "00FFFF", "Аква",
        "00CCFF", "Голубое небо",
        "993366", "Красный фиолетовый",
        "FFFFFF", "Белый",
        "FF99CC", "Розовый",
        "FFCC99", "Персик",
        "FFFF99", "Светло-желтого",
        "CCFFCC", "Бледно-зеленый",
        "CCFFFF", "Бледно-голубой",
        "99CCFF", "Светло-голубой",
        "CC99FF", "Слива"
    ],
    toolbar_mode: 'floating',
    tinycomments_author: 'Standard',
    indentation: '12px',
    font_formats: "Roboto=Roboto; Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace",
    relative_urls: false
});
