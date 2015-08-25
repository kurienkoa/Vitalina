$(document).ready(function () {
    $('.thumbs').each(function () {
        var PhotoSetID = $(this).attr("id");

        var url = "https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=f0b84fba1c00631410b85b90720f52ba";
        var src;
        $.getJSON(url + "&photoset_id=" + PhotoSetID + "&format=json&jsoncallback=?", function (data) {
            $.each(data.photoset.photo, function (i, item) {
                src = "http://farm" + item.farm + ".static.flickr.com/" + item.server + "/" + item.id + "_" + item.secret + ".jpg";
                title = item.title;


                $("<a>").attr({
                    "href": src,
                    "class": "gallery",
                    "rel" : PhotoSetID,
                    "title": title
                }).html(
                    $("<img />").attr({
                        "src": src,
                        "alt": title,
                        "class": (i === 0 ? "show" : "hide"),
                        "width": "240",
                        "height": "180"
                    })

                ).appendTo("#" + PhotoSetID);
                $("a.gallery[rel=" + PhotoSetID +"]").colorbox();

            });

        });

    });

});
