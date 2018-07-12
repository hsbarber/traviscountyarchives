// DISTRICT CLERK AJAX REQUEST TO PORTAL TO GET XML RECORDS
(function($) {
      $.ajax({
          url: 'https://texashistory.unt.edu/explore/partners/TDCD/oai/?verb=ListRecords&metadataPrefix=untl',
          type: "GET",
          dataType: "xml",
          data: "",
          cache: true,
          success: function(xml){
            
            var record = $(xml).find('record');
            
              record.each(function(){
            
                var newTitle = $(this).find("title[qualifier='officialtitle'], untl\\:title[qualifier='officialtitle']").text();
                var address = $(this).find("identifier[qualifier='itemURL'], untl\\:identifier[qualifier='itemURL']").text();           
                var dates = $(this).find("date[qualifier='creation'], untl\\:date[qualifier='creation']").text();
                var subject = $(this).find("subject[qualifier='UNTL-BS'], untl\\:subject[qualifier='UNTL-BS']").text();

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
    
          
                if (subject.indexOf("Government and Law - Legal Documents") != -1 ) {          
                    sortUL('#legal');
                }
                if (newTitle.indexOf("Travis County Naturalization Records") != -1 ) {     
                    sortUL('#districtNat');
                }
        
               
              })
            },
                
          error: function(error){
              alert("The XML File could not be processed correctly.");
          }
      });
  
})( jQuery );