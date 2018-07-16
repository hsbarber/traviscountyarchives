/**
 * map
 */
var maptitle = {
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  scaleControl: true,
  scrollwheel: false
}
var map = new google.maps.Map(document.getElementById("map"), maptitle);
//  We set zoom and center later by fitBounds()



/**
 * makeMarker() ver 0.2
 * creates Marker and InfoWindow on a Map() named 'map'
 * creates sidebar row in a DIV 'sidebar'
 * saves marker to markerArray and markerBounds
 * @param options object for Marker, InfoWindow and SidebarItem
 * @author Esa 2009
 */
var infoWindow = new google.maps.InfoWindow({
	maxWidth: 300
});
var markerBounds = new google.maps.LatLngBounds();
var markerArray = [];

function makeMarker(options){
  var pushPin = new google.maps.Marker({map:map});
  pushPin.setOptions(options);
  google.maps.event.addListener(pushPin, "click", function(){
    infoWindow.setOptions(options);
    infoWindow.open(map, pushPin);
    if(this.sidebarButton)this.sidebarButton.button.focus();
  });
  var idleIcon = pushPin.getIcon();
  if(options.sidebarItem){
    pushPin.sidebarButton = new SidebarItem(pushPin, options);
    pushPin.sidebarButton.addIn("mapsidebar");
  }
  markerBounds.extend(options.position);
  markerArray.push(pushPin);
  return pushPin;
}

google.maps.event.addListener(map, "click", function(){
  infoWindow.close();
});


/**
 * Creates an sidebar item
 * @constructor
 * @author Esa 2009
 * @param marker
 * @param options object Supported properties: sidebarItem, sidebarItemClassName, sidebarItemWidth,
 */
function SidebarItem(marker, title){
  var tag = title.sidebarItemType || "ul";
  var row = document.createElement(tag);
  row.innerHTML = title.sidebarItem;
  row.className = title.sidebarItemClassName || "mapsidebar_item";
  row.style.display = "block";
  row.onclick = function(){
    google.maps.event.trigger(marker, 'click');
  }
  row.onmouseover = function(){
    google.maps.event.trigger(marker, 'mouseover');
  }
  row.onmouseout = function(){
    google.maps.event.trigger(marker, 'mouseout');
  }
  this.button = row;
}
// adds a sidebar item to a <div>
SidebarItem.prototype.addIn = function(block){
  if(block && block.nodeType == 1)this.div = block;
  else
    this.div = document.getElementById(block)
    || document.getElementById("mapsidebar")
    || document.getElementsByTagName("body")[0];
  this.div.appendChild(this.button);
}
// deletes a sidebar item
SidebarItem.prototype.remove = function(){
  if(!this.div) return false;
  this.div.removeChild(this.button);
  return true;
}



var contentString1 = '<div class="window"><h4>Kincheonville</h4><p>Kincheonville was a community located in southwest Austin.'+
					'<p>It was bordered roughly by present-day Paisano Trail on the north, Davis Lane on the South, Brodie Lane on the west, and Longview Road'+
                    ' on the east.The community was established by Thomas Kincheon in June of 1865, and it developed into a thriving freedman community.</p>'+
					' <p>Unlike other communities that were predominantly black, Kincheonville also had Hispanics and Anglo settlers. The community had several churches'+
					' and a school, and it remained a small farming community until Kincheon\'s grandson, Thomas Wesley "T.W." Kincheon, and great-grandson, Thomas Wesley'+
					' “T.W.” Kincheon, Jr., sold the property for the development of subdivisions.</p>'+
					' <p>The Kincheon family moved to east Austin in the 1960s, along with many of the other black families'+
					' in Austin. Kincheonville has since been absorbed by the City of Austin; several streets that Kincheon named after his children are all that remains of the community.</p>'+
					'<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/thomaskincheonsmall.jpg" alt="Thomas Kincheon">'+
					'<br><div class="mapcaption">Thomas Kincheon<br><i>Photo No. PICB 13450, Austin History Center, Austin Public Library</i></div></div>'
var contentString2 = '<div class="window"><h4>Manda</h4><p>Manda was located four miles north of U.S. Highway 290 and two miles east of Farm Road 973 in northeastern Travis County.'+
					 ' The earliest settlers included J.V. Morell in 1885 and Otto Bengston in 1888. Morell built a steam engine cotton gin in the area in 1886 and'+
					 ' then moved his blacksmith shop there from New Sweden. In 1893, Bengston built a large general store with a residence in the rear, and a post office,'+
					 ' named for his sister Amanda, was established in the front part of the store building. By 1899, telephone lines were extended to Manda. In 1900, the population'+
					 ' had reached 40, but it declined by the 1930s to 20.</p><p>A one-room school building was originally located in nearby New Sweden, but in 1915, a larger two-room schoolhouse'+
					 ' was build in Manda to serve the children living in Manda, New Sweden, Carlson and Willow Ranch. In 1947, the small surrounding school districts were consolidated, and the'+
 					 ' Manda Common School District was founded. It remained a school district until 1963, when the last record of Manda\'s population was still 20.'+
					 ' The 1915 school building still stands in Manda.</p>'+
					 '</p><img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/mandasmall.jpg" alt="Manda"><br><div class="mapcaption">1915 Manda school building,'+
					 '<br>as shown in the 1936 publication <i>The Defender</i><br>'+
					 '<i>- Travis County Archives</i></div></div>'

var contentString3 = '<div class="window"><h4>Mud</h4><p>Mud was a rural community on the Colorado River near Farm Road 2322, 16 miles northwest of Austin. Settled in the early 1870s,'+
					 ' the community took its name from the moist lowlands along the river. A post office was established in 1887, and in the 1890s the community also'+
					 ' reported a general store and ten residents. A second wave of settlement occurred around 1905, bringing many German settlers into the area. By 1913, '+
					 ' the post office had moved to a site about three miles northeast of its first location, and it was eventually discontinued in 1934.</p><p> The population of Mud'+
        			 ' was estimated at 100 in 1914, and had as many 254 residents from 23 families in 1920, but the population had fallen to 40 by 1939. No evidence of the'+
					 ' community was shown on county highway maps in the late 1940s. In the 1980s, the former town site became part of Pace Bend Park.'+
					 ' One of the few structures left from Mud is the school building, which has since been incorporated into the Moon River Bar.</p>'+
					 ' <img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/mudsmall.jpg" alt="Mud"><br><div class="mapcaption">Antonia and Adolf Rosenbusch, early Mud residents, in front of their homestead<br><i>-Courtesy of Bill Grace, Travis County Parks</i></div></div>'
var contentString4 = '<div class="window"><h4>Nameless</h4>'+
					 '<p>Located in northwestern Travis County, Nameless was situated on Sandy Creek and just off Farm Road 1431, five miles northeast of Lago Vista.'+
					 ' It was settled in 1869. When residents of the community applied for a post office, they had difficulty getting the post office department to accept the names they suggested.'+
					 ' After six names were rejected, residents wrote back saying, "Let the post office be nameless and be damned!"</p><p> The department took them at their word, and a post office called'+
					 ' Nameless was established in 1880. In 1884, Nameless reported a church, a district school, a general store, and 50 residents. Cotton, cedar posts, and rails were the principal'+
					 ' commodities shipped from the area. The post office was discontinued in 1890, and mail for the community was sent to Leander. During the 1940s, two churches, a business, and a'+
					 ' few scattered houses marked the community on county highway maps. Today, the location of the former community is marked by Nameless Road, the renovated school building, a cemetery,'+
					 ' and a historical marker.</p>'+
					 '<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/namelesssmall.jpg" alt="Nameless">'+
                     '<br><div class="mapcaption">Nameless school building in 1969<br>'+
					 '<i>-Photo No. PICA 03620, Austin History Center, Austin Public Library</i></div></div>'
var contentString5 = '<div class="window"><h4>Sprinkle</h4>'+
					 '<p>The town of Sprinkle, located in northeastern Travis County in the valley of Big Walnut Creek,'+
					 ' was founded in 1881 by Captain Erasmus Frederick Sprinkle, who came to the area in the 1870s with'+
					 ' his family from Virginia. Captain Sprinkle had bought a large tract of land in the area and his grandson,'+
					 ' William Braxton Barr, developed the family businesses into a small town. By 1890 the town had three'+
					 ' churches, a school, a general store, and a population of 100. Most of the families in the area'+
					 ' were farmers, and cotton was their principal cash crop. In 1904, the Missouri, Kansas and Texas Railroad'+
					 ' was built through the town, helping the residents transport their cotton.</p><p> Soon after, though,'+
					 ' the population of the town began to decline. The town suffered the loss of young men and women'+
					 ' to a typhoid fever epidemic, to World War I, to the lack of jobs during the Great Depression'+
					 ' and the fall of cotton prices during the war. By the early 1930s the population of Sprinkle'+
					 ' was at 10 residents. Buildings were torn down and today the only recognizable landmarks in Sprinkle'+
					 ' are the Barr Mansion and Sprinkle Rd.</p> '+
					 '<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/sprinklestoresmall.jpg" alt="Sprinkle_tx">'+
                     '<br><div class="mapcaption"> Sprinkle general store, circa 1880s<br>'+
					 '<i>-Photo No. PICA 03645, Austin History Center, Austin Public Library</i></div></div>'
var contentString6 = '<div class="window"><h4>Wheatville</h4><p> Wheatville, the first black community associated with Austin after the Civil War,'+
					 ' was located at the western edge of Austin on former plantation land. James Wheat, a former slave from Arkansas,'+
					 ' brought his family to the area and founded the community in 1867. In 1869 he bought a plot of land at what is now 2409 San Gabriel Street and  became'+
					 ' Wheatville\'s first landowner. Wheat raised corn while many of Wheatville’s residents worked as domestics in white households,'+
					 ' merchants in the community, and as semiskilled laborers in the Austin construction industry. A few blacksmiths'+
					 ' lived in Wheatville, and some residents farmed and raised livestock. George Franklin, a former slave and a carpenter,'+
					 ' purchased land at the site of present-day 2402 San Gabriel in 1869 and constructed a stone building with walls four'+
					 ' stones thick. Now known as the Franzetti building, it became the center of the community as subsequent owners used'+
					 ' it to house families, grocery stores, various other businesses, and churches. Jacob Fontaine, a Baptist Minister'+
					 ' who settled in Wheatville in the 1960s, lived in the Franzetti building with his family periodically from'+
					 ' 1875 to 1898. In 1876 he used it for the office of the Austin Gold Dollar, an early black newspaper.'+
					 ' In 1881, The Wheatville School opened in the community. W. H. Passon, a prominent black educator in Austin,'+
					 ' served on the school staff and later became principal. In 1904 ninety-seven students attended the school.</p>'+
					 '<p>Wheatville had about 300 inhabitants at its peak, which was probably around the turn of the century.'+
					 ' The community remained relatively isolated until Austin\'s white population began to expand toward'+
					 ' the more varied landscape and better drainage offered to the west. Wheatville began gradually changing'+
					 ' to a neighborhood of Italian immigrants, and white residents surrounded the community. In 1905 Salvatore'+
					 ' Perrone bought the Franzetti building and began operating a grocery store there. In 1928 the city of Austin'+
					 ' adopted a plan to locate all public facilities for blacks, presumably schools, recreation facilities,'+
					 ' and health clinics, in East Austin. The plan\'s stated purpose was to draw the remaining black inhabitants'+
					 ' in western Austin to the east. The Wheatville School closed in 1932, and the community had practically'+
					 ' vanished by the mid-1930s. Today, the remaining sign of Wheatville is the stone building at'+
					 ' 2402 San Gabriel, which has been declared a historical landmark by the Austin City Council.</p>'+
					 '<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/wheatvillesmall.jpg" alt="Wheatville">'+
					 '<br><div class="mapcaption">Wheatville, c. 1900s<br><i>Photo No. PICA 36047, Austin History Center, Austin Public Library</i></div></div>'

					 /**
 * markers and info window contents
 */


makeMarker({
  position: new google.maps.LatLng(30.201648,-97.834957),
  title: "Kincheonville",
  sidebarItem: "Kincheonville",
  content: contentString1
});
makeMarker({
  position: new google.maps.LatLng(30.402446, -97.468419),
  title: "Manda",
  sidebarItem: "Manda",
  content: contentString2
});
makeMarker({
  position: new google.maps.LatLng(30.449854, -98.032040),
  title: "Mud",
  sidebarItem: "Mud",
  content: contentString3
});
makeMarker({
  position: new google.maps.LatLng(30.525712, -97.927669),
  title: "Nameless",
  sidebarItem: "Nameless",
  content: contentString4
});
makeMarker({
  position: new google.maps.LatLng(30.352334, -97.647272),
  title: "Sprinkle",
  sidebarItem: "Sprinkle",
  content: contentString5
});
makeMarker({
  position: new google.maps.LatLng(30.288554, -97.747864),
  title: "Wheatville",
  sidebarItem: "Wheatville",
  content: contentString6
});
/**______________________________________________________________________*/
function makeMarker1(options){
  var pushPin = new google.maps.Marker({map:map});
  pushPin.setOptions(options);
  google.maps.event.addListener(pushPin, "click", function(){
    infoWindow.setOptions(options);
    infoWindow.open(map, pushPin);
    if(this.sidebarButton1)this.sidebarButton1.button.focus();
  });
  var idleIcon = pushPin.getIcon();
  if(options.sidebarItem1){
    pushPin.sidebarButton1 = new SidebarItem1(pushPin, options);
    pushPin.sidebarButton1.addIn("mapsidebar1");
  }
  markerBounds.extend(options.position);
  markerArray.push(pushPin);
  return pushPin;
}



//Creates an sidebar item

function SidebarItem1(marker1, red){
  var tag = red.sidebarItem1Type || "ul";
  var row = document.createElement(tag);
  row.innerHTML = red.sidebarItem1;
  row.className = red.sidebarItem1ClassName || "mapsidebar_item1";
  row.style.display = "block";
  row.onclick = function(){
    google.maps.event.trigger(marker1, 'click');
  }
  row.onmouseover = function(){
    google.maps.event.trigger(marker1, 'mouseover');
  }
  row.onmouseout = function(){
    google.maps.event.trigger(marker1, 'mouseout');
  }
  this.button = row;
}
// adds a sidebar item to a <div>
SidebarItem1.prototype.addIn = function(block){
  if(block && block.nodeType == 1)this.div = block;
  else
    this.div = document.getElementById(block)
    || document.getElementById("mapsidebar1")
    || document.getElementsByTagName("body")[0];
  this.div.appendChild(this.button);
}
// deletes a sidebar item
SidebarItem1.prototype.remove = function(){
  if(!this.div) return false;
  this.div.removeChild(this.button);
  return true;
}
var contentString6 = '<div class="window"><h4>Austin-Travis County Tuberculosis Sanatorium</h4><p>Travis County and the City of Austin partnered to open a tubercular camp,'+
					' located about four miles northeast of Austin. Despite these modest efforts for the treatment of individuals'+
					' suffering from tuberculosis, in 1921 the Travis County Humane Society issued a plea that more diligent and long-range'+
					' efforts be taken to prevent the spread of the disease.</p><p>It wasn’t until 1938 that plans for a large-scale treatment'+
					' facility were put into motion. Sponsored through the efforts of the Austin Women’s Club'+
					' and the Austin Junior Chamber of Commerce, together with money raised by public donations,'+
					' county and city appropriations, and a federal grant from the WPA, the Austin-Travis County Tuberculosis Sanatorium'+
					' officially opened on May 6, 1940.</p><p>The Austin-Travis County Tuberculosis Sanatorium was run jointly by Travis County'+
					' and the City of Austin. It was governed by a Board of Directors appointed by the County Judge.'+
					' Located five miles east of Austin on Webberville Road, on a sixteen-acre plot of ground donated by the county,'+
					' the building had six separate wings, with private rooms and fifty beds to accommodate “white, Mexican,'+
					' and colored” patients. It provided treatment for all stages of pulmonary tuberculosis and had complete'+
					' laboratory facilities. Admission to the Sanatorium was limited to citizens of Travis County, but both private (paying)'+
					' patients and “charity cases” were accepted.</p><p>In the mid-1950s, with operations of the'+
					' Austin-Travis County Tuberculosis Sanatorium running well below patient capacity, the possible closure of the facility came under'+
					' discussion. In the end, the facility was not closed for another 15 years, although its services were reduced'+
					' so that the facility served more as a “holding station” than a hospital, providing treatment to tuberculosis'+
					' patients only until they could be admitted to one of the State tuberculosis hospitals. In 1970,'+
					' Austin-Travis County Tuberculosis Sanatorium (by then referred to as Brackenridge Hospital East) was finally closed.</p>'+
					'<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/sanatoriumsmall.jpg" alt="Sanatorium"><br>'+
					'<div class="mapcaption">Austin-Travis County Tuberculosis Sanatorium, 1948<br><i>-Photo No. ND-48-A004-01, Austin History Center, Austin Public Library</i></div></div>'
var contentString7 = '<div class="window"><h4>The Reuben Hornsby Home</h4>'+
					 '<p>Hornsby Bend, also known as Hornsby or Hornsby\'s, is on Farm Road 969 and the Colorado River, nine miles east of Austin in eastern Travis County.'+
					 ' It was named for Reuben Hornsby, who settled there in 1832 and served as postmaster during the Republic of Texas era.'+
					 ' The community has been called the oldest settlement in Travis County. A United States post office was established at Hornsby Bend in 1856,'+
					 ' but it was discontinued during the Civil War and not reopened until 1886. The community had two general stores in 1892.'+
					 ' Its post office was discontinued in 1901, and mail for Hornsby Bend was sent to Austin.  In 1905 the Hornsby Bend'+
					 ' schools combined with those of Dunlap to form the Hornsby-Dunlap common school district. The Hornsby-Dunlap district'+
					 ' was annexed to the Del Valle Independent School District in 1967. The population of Hornsby Bend was reported as ten in'+
					 ' the 1930s and 1940s and as twenty from the 1950s through 2000.</p>'+
					 '<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/hornsbyhomesmall.jpg" alt="Hornsby Home"><br>'+
					 '<div class="mapcaption">Reuben Hornsby\'s Home, built around 1886, date unknown<br><i>Photo No. PICA 03148, Austin History Center, Austin Public Library</i></div></div>'
var contentString8 = '<div class="window"><h4>Montopolis Courthouse</h4>'+
					 '<p>The Montopolis Courthouse is said to be the first courthouse in Travis County, though, when the courthouse was built and later demolished is not known.'+
					 ' The courthouse was a part of the community of Montopolis, which was four miles southeast of downtown Austin in south central Travis County.'+
					 ' The community was was settled in the late 1830s, when Jessie C. Tannehill built a cabin and laid out a townsite to be called Montopolis for its location on top of a hill.'+
					 ' By the mid-1890s, a small community of fifty people resided in the area and a post office opened in Montopolis around this time.</p>'+
					 ' <p>The population grew to 142 in 1900, but the communities\'s proximity to Austin and slow developed allowed it to be incorporated'+
					 ' into the city. The post office closed in 1902 and Most of Montopolis proper was annexed by the city of Austin in 1951.</p>'+
					 '<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/montopoliscourthousesmall.jpg" alt="montopolis"><br>'+
					 '<div class="mapcaption">Montopolis Courthouse, 1937<br><i>Photo No. PICA 04663, Austin History Center, Austin Public Library</i></div></div>'
var contentString9 = '<div class="window"><h4>The 1876 Travis County Courthouse</h4><p>Since Travis County’s founding in 1840, three buildings, dating from 1855, 1876, and 1931, have officially served as Travis County courthouses.'+
                    ' The 1876 Courthouse, a three-story limestone building, was a breathtaking example of "Second Empire" architecture. Resplendent with ironwork'+
					' cresting, decorative dormers, and Mansard roofs, the 1876 Courthouse stood proudly on the southwest corner of 11th Street'+
					' and Congress Avenue, directly across from the Texas State Capitol Building. However, by 1927 it had become so infested with rats, bats, pigeons,'+
					' and other vermin that it, too, needed to be replaced.</p>'+
					'<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/courthousesmall.jpg" alt="Travis County Courthouse"><br>'+
					'<div class="mapcaption">Travis County Courthouse, 1876<br><i>Photo No. PICA 19698, Austin History Center, Austin Public Library</i></div></div>'
var contentString10 = '<div class="window"><h4>Travis County Poor Farm</h4><p>Based on the tradition of the almshouse, county-established poor farms provided the means for destitute inhabitants'+
					' to live and work in an agrarian-based institutionalized setting. Those who came or were sent to poor farms were expected to work the land to help support'+
					' the institution unless physically disabled.</p><p>In 1879, the Travis County Commissioners Court, likely influenced by economic factors, established'+
					' the Travis County Poor Farm. Former County Commissioner Richard Septimus Young served as the first poor farm superintendent. Initially the farm'+
					' was located around what is now 51st and Guadalupe/Lamar Streets, and the land totaled just over 200 acres. Over the years, changes in the Travis County'+
					' population caused the location of the poor farm to be moved several times. Around 1908, the poor farm was relocated to near present-day Tarrytown, just north'+
					' of Lake Austin Boulevard. The main building at the Poor Farm held the kitchen; a storeroom for supplies, groceries, and clothing; a dining room; and quarters'+
					' for the staff. Outbuildings included cottages for the elderly and infirm, a separate guarded building for inmates, and a large barn.</p>'+
					' <p>The onset of the Great Depression and a myriad of federal welfare and relief laws in the 1930s contributed to the decline of the poor farm'+
					' throughout Texas. Populations at such institutions gradually dropped off as other types of relief were made available. The services offered by'+
					' the Travis County Poor Farm were discontinued in 1936, and portions of the land were auctioned off in 1939.</p>'+
					'<img src="http://www.traviscountyhistory.org/wp-content/uploads/2016/05/richardyoungsmall.jpg" alt="Richard Young"><br>'+
					'<div class="mapcaption">Richard Young, the first Travis County Poor Farm Superintendent<br><i>-ancestry.com</i></div></div>'
makeMarker1({
  position: new google.maps.LatLng(30.282579, -97.676150),
  title: "Austin-Travis County Tuberculosis Sanatorium",
  sidebarItem1: "Austin-Travis County Tuberculosis Sanatorium",
  content: contentString6
});
makeMarker1({
  position: new google.maps.LatLng(30.248544, -97.583506),
  title: "the Reuben Hornsby Home",
  sidebarItem1: "The Reuben Hornsby Home",
  content: contentString7
});
makeMarker1({
  position: new google.maps.LatLng(30.224456, -97.703648 ),
  title: "Montopolis Courthouse",
  sidebarItem1: "Montopolis Courthouse",
  content: contentString8
});
makeMarker1({
  position: new google.maps.LatLng(30.273145,-97.745250),
  title: "The 1876 Travis County Courthouse",
  sidebarItem1: "The 1876 Travis County Courthouse",
  content: contentString9
});
makeMarker1({
  position: new google.maps.LatLng(30.295499, -97.764417),
  title: "Travis County Poor Farm",
  sidebarItem1: "Travis County Poor Farm",
  content: contentString10
});
/**
 *   fit viewport to markers
 */
map.fitBounds(markerBounds);

// COUNTY CLERK AJAX REQUEST TO PORTAL TO GET XML RECORDS
(function($)  {
      $.ajax({
          url: 'https://texashistory.unt.edu/explore/partners/TCCO/oai/?verb=ListRecords&metadataPrefix=untl',
          type: "GET",
          dataType: "xml",
          data: "",
          cache: true,
          success: function(xml){
            
            var record = $(xml).find('record');
            
              record.each(function(){
            
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
                else if  (newTitle.indexOf("Travis County Deed Records") != -1 ) {          
                    sortUL('#deeds');
                }
                else if  (newTitle.indexOf("Travis County Election Records") != -1 ) {     
                   sortUL('#election');
                }
                else if  (newTitle.indexOf("Travis County Naturalization Records") != -1 ) {               
                    sortUL('#naturalization');
                }
                else if  (series === "Travis County Probate Records") {                  
                    sortUL('#probate');
                }
                else if  (newTitle.indexOf("Travis County Survey Records") != -1 ) {                    
                    sortUL('#survey');
                }
                else {
                  sortUL('#genClerk');
                }
               
              })
            },
                
          error: function(error){
              alert("The XML File could not be processed correctly.");
          }
      });
  
})( jQuery );

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

 jQuery(document).ready(function() {
  var searchbar  =  jQuery('#searchbar');

    jQuery('#navbar-content a').on('click', function(e){
        if(jQuery(this).attr('id') == 'searchtoggle') {
            if(!searchbar.is(":visible")) {
            // if invisible we switch the icon to appear collapsable
            jQuery("#searchtoggle > svg").removeClass('fa-search').addClass('fa-search-minus');
            } else {
            // if visible we switch the icon to appear as a toggle
            jQuery("#searchtoggle > svg").removeClass('fa-search-minus').addClass('fa-search');
            }

            searchbar.slideToggle(300, function(){
            // callback after search bar animation
            });
        }
    });
});
<!--jQuery to make navbar shrink on scroll -->
	
jQuery(window).scroll(function() {
		  if (jQuery(document).scrollTop() > 100) {
			jQuery('nav.navbar').addClass('shrink');
		  } else {
			jQuery('nav.navbar').removeClass('shrink');
		  }
		});

jQuery(document).ready(function($){

var root = location.protocol + '//' + location.host;

if($('#menu-item-791').length > 0) {
$('#menu-item-791').html('Search');
}
});