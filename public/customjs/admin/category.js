$(document).ready(function() {
    $('#name').on('input', function() {
        var name = $(this).val(); // fix here
        var slug = name.toLowerCase()
            .replace(/ /g, '-')             // replace spaces with hyphens
            .replace(/[^\w-]+/g, '');       // remove non-word characters
        $('#slug').val(slug);
    });
});
