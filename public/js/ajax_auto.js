$(document).ready(function () {
    $("#app_film_search_type_Recherche").keyup(function () {
        var input = $(this).val();
        if (input.length >= 2) {
            $.ajax({
                type: "POST",
                url: "/ajax/" + input,
                dataType: 'json',
                // timeout: 3000,
                success: function (response) {
                    var films = JSON.parse(response.data);
                    html = "";
                    for (i = 0; i < films.length; i++) {

                        html+='<div class="col-xs-6 col-md-3 vignetteFilm">'+
                            '<a href="/detailed/movie/'+ films[i].id +'">'+
                            '<div class="col-md-12 image-listFilms">'+

                            '<div class="middle">'+
                            '<div class="hoverAgeFilm">'+ films[i].label +'</div>'+
                            '</div>'+
                            '<a href="/detailed/movie/'+ films[i].id +'">'+
                            '<img class="image-listFilms" src="../img/'+ films[i].image +'" alt="'+films[i].title+'">'+
                            '</a>'+
                            '</div>'+
                            '<div class="col-md-12 titreVignetteFilm">'+
                            '<a href="/detailed/movie/'+ films[i].id +'">'+
                            '<h3>'+films[i].title+'</h3>'+
                            '</a>'+
                            '</div>'+
                            '</a>'+
                            '</div>'
                    }
                    $('#films-list').html(html);
                },
                error: function () {
                    $('#films-list').text('Ajax call error');
                }
            });
        } else {
            $('#films-list').html('');
        }
    });
});


