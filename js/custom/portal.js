// COUNTY CLERK AJAX REQUEST TO PORTAL TO GET XML RECORDS
(function ($) {
    $("#MyDropDownID").change(function () {
        $('#loading-image').show();
    })
    $.ajax({
        url: 'https://texashistory.unt.edu/explore/partners/TCCO/oai/?verb=ListRecords&metadataPrefix=untl',
        type: "GET",
        dataType: "xml",
        async: true,
        data: "",
        cache: true,
        success: function (xml) {

            var record = $(xml).find('record');

            record.each(function () {

                var newTitle = $(this).find("title[qualifier='officialtitle'], untl\\:title[qualifier='officialtitle']").text();
                var address = $(this).find("identifier[qualifier='itemURL'], untl\\:identifier[qualifier='itemURL']").text();
                var series = $(this).find("title[qualifier='seriestitle'], untl\\:title[qualifier='seriestitle']").text();
                var dates = $(this).find("date[qualifier='creation'], untl\\:date[qualifier='creation']").text();

                function sortUL(selector) {
                    var $li = '<li>' + "<a href='" + address + "'>" + '<h4>' + newTitle + '</h4>' + '</a>' + dates + '</li>';
                    var $ul = $(selector);
                    $ul.append($li);
                    $ul.find('li').sort(function (a, b) {
                        var upA = $(a).text().toUpperCase();
                        var upB = $(b).text().toUpperCase();
                        return (upA < upB) ? -1 : (upA > upB) ? 1 : 0;
                    }).appendTo(selector);
                };

                // if (newTitle.indexOf("Travis County Clerk Records") != -1 && series != "Travis County Commissioners Court Records") {
                //     sortUL('#genClerk');
                // }
                if (newTitle.indexOf("Civil Minutes") != -1) {
                    sortUL('#civil');
                }
                else if (series === "Travis County Commissioners Court Records") {
                    sortUL('#commCourt');
                }
                else if (newTitle.indexOf("Commissioners Court Minutes") != -1 || newTitle.indexOf("Commissioners Court Road Minutes") != -1) {
                    sortUL('#commMinutes');
                }
                else if (newTitle.indexOf("Criminal Minutes") != -1) {
                    sortUL('#criminal');
                }
                else if (newTitle.indexOf("Travis County Deed Records") != -1) {
                    sortUL('#deeds');
                }
                else if (newTitle.indexOf("Election") != -1) {
                    sortUL('#election');
                }
                else if (newTitle.indexOf("Travis County Naturalization Records") != -1) {
                    sortUL('#naturalization');
                }
                else if (newTitle.indexOf("Travis County Probate Records") != -1) {
                    sortUL('#probate');
                }
                else if (newTitle.indexOf("Road Book") != -1) {
                    sortUL('#road');
                }
                else if (newTitle.indexOf("Travis County Survey Records") != -1) {
                    sortUL('#survey');
                }
                else {
                    sortUL('#genClerk');
                }

            })
            $('#loading-image').hide();
        },

        error: function (error) {
            alert("The XML File could not be processed correctly.");
        }
    });

})(jQuery);
