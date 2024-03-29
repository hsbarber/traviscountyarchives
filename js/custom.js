//Bootstrap navbar sticky on scroll https://bootstrap-menu.com/detail-fixed-onscroll.html

document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 142) {
        document.getElementById('exhibit-navbar').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('exhibit-navbar').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      }
  });
});


// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
// Initialize and add the map
var map;
var Markers = {};
var infowindow;
var locations = [
	[
		'Driskill Hotel and Bar',
    '<h5>Driskill Hotel and Bar</h5><p>The palatial Driskill Hotel, opened in 1886, ' +
     'is said to house more ghosts than can be listed here. Sightings are reported' +
     'in the hotel to the present day, including that of a former housekeeper' +
     'in a long Victorian dress who appears to be still fussing with flower' +
     'arrangements in the lobby, a longtime resident from the turn of the century' +
     'who checks his pocket watch on the elevator, and a woman who carries shopping bags' +
     'into a fourth-floor room where a wealthy Houston woman committed suicide in the early 1990s, ' +
     'after her fiancé canceled their wedding.</p>',
		30.26833390879523, -97.74174575714143
	],
	[
		'Omni Austin Hotel Downtown',
    '<h5>Omni Austin Hotel Downtown</h5>' , +
    '<p>According to urban legend, a man simply known as “Jack”' , +
    'jumped off a balcony on the hotel to his death. Since he was unable to pay his tab, '+
    'allegedly his name remains in the computer log - and staff and guests '+
    'say they can hear him in his room at night.</p> '+
		30.2691694494448, -97.74036490778028
  ],
  [
    "Texas Governor's Mansion",
    "<h5>Texas Governor's Mansion</h5>" +
    "<p>The Governor's Mansion, completed in 1956, " +
    "is supposedly haunted by the ghosts of Sam Houston," +
    "a man who committed suiced in the mansion afte being rejected by Governor Pendleton Murrah's wife's neice, "+
    "and a young woman, a maid, who may have become pregnant by someone in the mansion. " +
    "</p>",
    30.272997977765428, -97.74318051097075
  ],
  [
    'Oakwood Annex Cemetery',
    '<h5>Oakwood Annex Cemetery</h5>', +
    '<p>Said to be one of Austin’s most beautiful yet ' +
    'most haunted cemeteries, Oakwood Cemetery and ' +
    'the Oakwood Annex Cemetery hold the graves ' +
    'of one of the very few that survived the Alamo, ' +
    'Susannah Wilkerson Dickinson, as well as 1880s ' +
    'Austin city marshal Ben Thompson. Whether ' +
    'the property is, in fact, haunted has yet to be proven, ' +
    'because the gates are locked each night at dusk. ' +
    'However, visitors along its exterior can try to capture ' +
    'evidence of spooky sightings on camera by filming or ' +
    'taking photos through its fence bars.</p> ' +
    30.277049595704604, -97.72668322322538
  ],
  [
    'The Inn at Pearl Street',
    '<h5>The Inn at Pearl Street</h5><p>Originally the 1896 ' +
    'building home of Judge Charles A. Wilcox and family, ' +
    'the apparition of a woman carrying a child has been seen walking ' +
    'through the house or sitting in a rocking chair. Music, lights, ' +
    'and other noises also have been heard while the place was empty ' +
    'and even while the electricity was turned off.</p>',
    30.283245343307907, -97.74708437849152
  ],
  [
    'Buffalo Billiards',
    '<h5>Buffalo Billiards</h5><p>' +
    'First opened back in the early 1860s as the Missouri Hotel, '+
    'accounts of ghosts are common and frequent at this billiard bar. '+
    'One haunted guest, who the bar staff calls '+
    'Fred, makes his presence known by leaving drinks out '+
    'overnight and rattling barstools. Other spirits, however, '+
    'are a little more subtle. On numerous occasions the ghost '+
    'of a woman in a white dress has been spotted looking down '+
    'from the stairs, while others have pointed out strange '+
    'hand prints from a child magically appearing on the pool tables. '+
    '</p>',
    30.267549155250446, -97.74128829517156
  ],
  [
    'Texas State Cemetery',
    '<h5>Texas State Cemetery</h5>',
    30.26729755671083, -97.72656699579821
  ],
  [
    'Moonshine Grill',
    '<h5>Moonshine Grill</h5><p>With its location near Waller Creek and the Colorado River, ' +
    'flooding around the building was frequent in the early 1900s, ' +
    'which caused numerous drownings. It’s suspected that the ghosts ' +
    'of those that died never left, and instead took up residence at Moonshine. ' +
    'Reports of the pesky poltergeists tapping guests on their shoulder ' +
    'and licking their necks is common, as well as incidences of mirrors ' +
    'falling and wine bottles flying across the room.</p>',
    30.26401766348431, -97.73804562344186
  ],
  [
    'Handlebar',
    '<h5>Handlebar</h5>'+
    '<p>Beginning as a funeral parlor, this bar was orginally the spot of Austin’s '+
    'first cremation—a practice that was illegal at the time. '+
    'The ghosts of a young girl and an old man are often spotted, '+
    'and on some nights the startling sound of '+
    'someone shouting “Hey!” from the basement can be heard.</p> ',
    30.266870456557, -97.74208578124556
  ],
  [
    '503 Neches St.',
    '<h5>503 Neches St.</h5>',+
    '<p>503 Neches St. houses one of the most historically intriguing ' +
    'cases of paranormal activity. A psychic, reportedly without knowing '+
    "the building's history, once said she heard a black man laughing there, "+
    "amused, she said, that he had become his own client. Records show that " +
    "the building was once owned by a black undertaker named Nathan Rhambo, "+
    "who opened a funeral home there around 1915 and was murdered in 1932. "+
    "The murder, blamed on a young black man who police said was out to rob "+
    "the wealthy Rhambo, threw the city's black community into an uproar. "+
    "Does Rhambo carry on in his old shop because he has something to say "+
    "about the circumstances of his murder?",
    30.26622585806263, -97.73828576626842
  ],
  [
    'Texas Capitol',
    '<h5>Texas Capitol</h5><p>Several ghosts may occupy the capitol building. '+
    'Comptroller Robert Marshall Love, who was shot at his desk there, is said to haunt the capitol building.' +
    'Another ghost, proverbial Lady in Red, haunts a secret stairwell where she met her lover.</p>',
    30.274924600256742, -97.74029684980161
  ]
];
var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);

function initialize() {
  var mapOptions = {
    zoom: 13,
    center: origin
  };

  map = new google.maps.Map(document.getElementById('map'), mapOptions);

	infowindow = new google.maps.InfoWindow();

    for(i=0; i<locations.length; i++) {
    	var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
		var marker = new google.maps.Marker({
			position: position,
			map: map,
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][1]);
				infowindow.setOptions({maxWidth: 400});
				infowindow.open(map, marker);
			}
		}) (marker, i));
		Markers[locations[i][4]] = marker;
	}

	locate(0);

}

function locate(marker_id) {
	var myMarker = Markers[marker_id];
	var markerPosition = myMarker.getPosition();
	map.setCenter(markerPosition);
	google.maps.event.trigger(myMarker, 'click');
}

google.maps.event.addDomListener(window, 'load', initialize);













window.addEventListener("scroll", () => {
  const sections = document.querySelectorAll("section");
  const navLi = document.querySelectorAll(".exhibit-chapters .exhibit-chapters-list li");
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (scrollY >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});
jQuery('.block-gallery').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
    enabled: true,
    navigateByImgClick: true,
  },
  image: {
    titleSrc: 'title',
  }
  // other options
});

jQuery('.image-link').magnificPopup({
		type: 'image',
		closeBtnInside: true,
    closeOnContentClick: true,
    gallery: {
       enabled: true
   },
   image: {
       titleSrc: function(item) {
          return item.el.find('img').attr('title');
       }
   }


	});
document.addEventListener("DOMContentLoaded", function() {
  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

  if ("IntersectionObserver" in window) {
    var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(video) {
        if (video.isIntersecting) {
          for (var source in video.target.children) {
            var videoSource = video.target.children[source];
            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
              videoSource.src = videoSource.dataset.src;
            }
          }

          video.target.load();
          video.target.classList.remove("lazy");
          lazyVideoObserver.unobserve(video.target);
        }
      });
    });

    lazyVideos.forEach(function(lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
});
// lazy load
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

!function (i) { i("#MyDropDownID").change(function () { i("#loading-image").show() }), i.ajax({ url: "https://texashistory.unt.edu/explore/partners/TCCO/oai/?verb=ListRecords&metadataPrefix=untl", type: "GET", dataType: "xml", async: !0, data: "", cache: !0, success: function (e) { i(e).find("record").each(function () { var e = i(this).find("title[qualifier='officialtitle'], untl\\:title[qualifier='officialtitle']").text(), t = i(this).find("identifier[qualifier='itemURL'], untl\\:identifier[qualifier='itemURL']").text(), n = i(this).find("title[qualifier='seriestitle'], untl\\:title[qualifier='seriestitle']").text(), r = i(this).find("date[qualifier='creation'], untl\\:date[qualifier='creation']").text(); function o(n) { var o = "<li><a href='" + t + "'><h4>" + e + "</h4></a>" + r + "</li>", a = i(n); a.append(o), a.find("li").sort(function (e, t) { var n = i(e).text().toUpperCase(), r = i(t).text().toUpperCase(); return n < r ? -1 : n > r ? 1 : 0 }).appendTo(n) } -1 != e.indexOf("Civil Minutes") ? o("#civil") : "Travis County Commissioners Court Records" === n ? o("#commCourt") : -1 != e.indexOf("Commissioners Court Minutes") || -1 != e.indexOf("Commissioners Court Road Minutes") ? o("#commMinutes") : -1 != e.indexOf("Criminal Minutes") ? o("#criminal") : -1 != e.indexOf("Travis County Deed Records") ? o("#deeds") : -1 != e.indexOf("Election") ? o("#election") : -1 != e.indexOf("Travis County Naturalization Records") ? o("#naturalization") : -1 != e.indexOf("Travis County Probate Records") ? o("#probate") : -1 != e.indexOf("Road Book") ? o("#road") : -1 != e.indexOf("Travis County Survey Records") ? o("#survey") : o("#genClerk") }), i("#loading-image").hide() }, error: function (i) { alert("The XML File could not be processed correctly.") } }) }(jQuery);
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
!function (t) { t.ajax({ url: "https://texashistory.unt.edu/explore/partners/TDCD/oai/?verb=ListRecords&metadataPrefix=untl", type: "GET", dataType: "xml", data: "", cache: !0, success: function (e) { t(e).find("record").each(function () { var e = t(this).find("title[qualifier='officialtitle'], untl\\:title[qualifier='officialtitle']").text(), i = t(this).find("identifier[qualifier='itemURL'], untl\\:identifier[qualifier='itemURL']").text(), a = t(this).find("date[qualifier='creation'], untl\\:date[qualifier='creation']").text(); function r(r) { var n = "<li><a href='" + i + "'><h4>" + e + "</h4></a>" + a + "</li>", l = t(r); l.append(n), l.find("li").sort(function (e, i) { var a = t(e).text().toUpperCase(), r = t(i).text().toUpperCase(); return a < r ? -1 : a > r ? 1 : 0 }).appendTo(r) } -1 != t(this).find("subject[qualifier='UNTL-BS'], untl\\:subject[qualifier='UNTL-BS']").text().indexOf("Government and Law - Legal Documents") && r("#legal"), -1 != e.indexOf("Travis County Naturalization Records") && r("#districtNat") }) }, error: function (t) { alert("The XML File could not be processed correctly.") } }) }(jQuery);

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

class Slideshow {

  constructor() {
    this.initSlides();
    this.initSlideshow();
  }

  // Set a `data-slide` index on each slide for easier slide control.
  initSlides() {
    this.container = $('[data-slideshow]');
    this.slides = this.container.find('img');
    this.slides.each((idx, slide) => $(slide).attr('data-slide', idx));
  }

  // Pseudo-preload images so the slideshow doesn't start before all the images
  // are available.
  initSlideshow() {
    this.imagesLoaded = 0;
    this.currentIndex = 0;
    this.setNextSlide();
    this.slides.each((idx, slide) => {
      $('<img>').on('load', $.proxy(this.loadImage, this)).attr('src', $(slide).attr('src'));
    });
  }

  // When one image has loaded, check to see if all images have loaded, and if
  // so, start the slideshow.
  loadImage() {
    this.imagesLoaded++;
    if (this.imagesLoaded >= this.slides.length) { this.playSlideshow() }
  }

  // Start the slideshow.
  playSlideshow() {
    this.slideshow = window.setInterval(() => { this.performSlide() }, 3500);
  }

  // 1. Previous slide is unset.
  // 2. What was the next slide becomes the previous slide.
  // 3. New index and appropriate next slide are set.
  // 4. Fade out action.
  performSlide() {
    if (this.prevSlide) { this.prevSlide.removeClass('prev fade-out') }

    this.nextSlide.removeClass('next');
    this.prevSlide = this.nextSlide;
    this.prevSlide.addClass('prev');

    this.currentIndex++;
    if (this.currentIndex >= this.slides.length) { this.currentIndex = 0 }

    this.setNextSlide();

    this.prevSlide.addClass('fade-out');
  }

  setNextSlide() {
    this.nextSlide = this.container.find(`[data-slide="${this.currentIndex}"]`).first();
    this.nextSlide.addClass('next');
  }

}

$(document).ready(function() {
  new Slideshow;
});

jQuery(document).ready(function($){

var root = location.protocol + '//' + location.host;

if($('#menu-item-791').length > 0) {
$('#menu-item-791').html('Search');
}
});
// jQuery(document).ready(function($){
// 	var contentSections = $('.cd-section'),
// 		navigationItems = $('#fixednav a');

// 	updateNavigation();
// 	$(window).on('scroll', function(){
// 		updateNavigation();
// 	});

// 	//smooth scroll to the section
// 	navigationItems.on('click', function(event){
//         event.preventDefault();
//         smoothScroll($(this.hash));
//     });
//     //smooth scroll to second section
//     $('.cd-scroll-down').on('click', function(event){
//         event.preventDefault();
//         smoothScroll($(this.hash));
//     });

//     //open-close navigation on touch devices
//     $('.touch .cd-nav-trigger').on('click', function(){
//     	$('.touch #cd-vertical-nav').toggleClass('open');

//     });
//     //close navigation on touch devices when selectin an elemnt from the list
//     $('.touch #cd-vertical-nav a').on('click', function(){
//     	$('.touch #cd-vertical-nav').removeClass('open');
//     });



// 	function smoothScroll(target) {
//         $('body,html').animate(
//         	{'scrollTop':target.offset().top},
//         	600
//         );
// 	}
// });
jQuery(document).ready(function($){
// jQuery element variables
var $hamburgerMenuBtn,
    $slideNav,
    $closeBtn,
    $main;




$(window).scroll(function() {
    if ($(this).scrollTop()<1500)
     {
        $('#hamburger-menu').hide(1000);
     }
    else
     {
      $('#hamburger-menu').show(1000);
     }
 });


// focus management variables
var $focusableInNav,
    $firstFocusableElement,
    $lastFocusableElement;

$(document).ready(function() {
  $hamburgerMenuBtn = $("#hamburger-menu"),
    $slideNav = $("#slide-nav"),
    $closeBtn = $("#close"),
    $main = $("main"),
    $focusableInNav = $('#slide-nav button, #slide-nav [href], #slide-nav input, #slide-nav select, #slide-nav textarea, #slide-nav [tabindex]:not([tabindex="-1"])');
  if ($focusableInNav.length) {
    $firstFocusableElement = $focusableInNav.first();
    $lastFocusableElement = $focusableInNav.last();
  }
  addEventListeners();
});

function addEventListeners() {
  $hamburgerMenuBtn.click(openNav);
  $closeBtn.click(closeNav);
  $slideNav.on("keyup", closeNav);
  $firstFocusableElement.on("keydown", moveFocusToBottom);
  $lastFocusableElement.on("keydown", moveFocusToTop);
}

function openNav() {
  $slideNav.addClass("visible active");
  setTimeout(function() {
    $firstFocusableElement.focus()
  }, 1);
  $main.attr("aria-hidden", "true");
  $hamburgerMenuBtn.attr("aria-hidden", "true");
}

function closeNav(e) {
  if (e.type === "keyup" && e.key !== "Escape") {
    return;
  }

  $slideNav.removeClass("active");
  $main.removeAttr("aria-hidden");
  $hamburgerMenuBtn.removeAttr("aria-hidden");
  setTimeout(function() {
    $hamburgerMenuBtn.focus()
  }, 1);
  setTimeout(function() {
    $slideNav.removeClass("visible")
  }, 501);
}

function moveFocusToTop(e) {
  if (e.key === "Tab" && !e.shiftKey) {
    e.preventDefault();
    $firstFocusableElement.focus();
  }
}

function moveFocusToBottom(e) {
  if (e.key === "Tab" && e.shiftKey) {
    e.preventDefault();
    $lastFocusableElement.focus()
  }
}


// VIDEO NAVIGATION - STOP YOUTUBE VIDEO WHEN CLOSING MODAL
$('.modal').on('hide.bs.modal', function() {
  var memory = $(this).html();
  $(this).html(memory);
})



});




// var contentSections = $('.cd-section'),
// navigationItems = $('#slideoutnav a');

// function updateNavigation() {
// 	contentSections.each(function(){
// 		$this = $(this);
// 		var activeSection = $('#slideoutnav ul li a[href="#'+$this.attr('id')+'"]').data('number') - 1;
// 		if ( ( $this.offset().top - $(window).height()/2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
// 			navigationItems.eq(activeSection).addClass('is-selected');
// 		}else {
// 			navigationItems.eq(activeSection).removeClass('is-selected');
// 		}
// 	});
// }

