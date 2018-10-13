$(document).on('focusin', function (e) {
    if ($(e.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});

tinymce.init({
    selector: '.editor',
    height: 400,
    relative_urls: false,
    remove_script_host: false,
    //language: "pt_BR",
    plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
    ],
    toolbar: 'code insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | preview | fullscreen | image | responsivefilemanager | forecolor backcolor',

    table_class_list: [
    {title: 'Nenhum', value: ''},
    {title: 'Tabela', value: 'table table-hover'},
    {title: 'Tabela com borda', value: 'table table-bordered'},
    {title: 'Tabela com borda 2', value: 'table table-bordered table-striped'}
    ],
    table_cell_class_list: [
    {title: 'Nenhum', value: ''},
    {title: 'Thumbnail', value: 'thumb'}
    ],
    link_class_list: [
    {title: 'Nenhum', value: ''},
    {title: 'Lightbox', value: 'group2'}
    ],
    image_class_list: [
    {title: 'Nenhuma', value: ''},
    {title: 'Borda', value: 'img-thumbnail'}
    ],
    content_css: [
    '//www.tinymce.com/css/codepen.min.css'
    ],

    formats: {
        alignleft: {selector: 'img', styles: {float: 'left', margin: '0 12px 0 0'}},
        alignright: {selector: 'img', styles: {float: 'right', margin: '0 0 0 12px'}}
    },


    external_filemanager_path: "http://localhost:8000/vendor/adminlte/vendor/tinymce/filemanager/",
    filemanager_title: "Gerenciador de mídia",
    external_plugins: {"filemanager": "http://localhost:8000/vendor/adminlte/vendor/tinymce/filemanager/plugin.min.js"}

});