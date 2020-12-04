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










// function initialize() {
//   const driskill = { lat: 30.26833390879523, lng: -97.74174575714143 };
//   const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 15,
//     center: driskill,
//   });
//   const contentString =
//     '<div>' +
//     '<h5 id="firstHeading" class="firstHeading">The Driskill Bar</h5>' +
//     '<div id="bodyContent">' +
//     "<p>The palatial Driskill Hotel, opened in 1886, is said to house more ghosts than can be listed here." +
//     "Sightings are reported in the hotel to the present day, including that of a former housekeeper" +
//     "in a long Victorian dress who appears to be still fussing with flower arrangements in the lobby," +
//     "a longtime resident from the turn of the century who checks his pocket watch on the elevator," +
//     "and a woman who carries shopping bags into a fourth-floor room where a wealthy Houston woman" +
//     "committed suicide in the early 1990s, after her fiancé canceled their wedding. </p>" +
//     "</div>";
//   const infowindow = new google.maps.InfoWindow({
//     content: contentString,
//   });
//    const marker = new google.maps.Marker({
//     position: driskill,
//     map,
//     title: "The Driskill Hotel and Bar",
//   });
//   marker.addListener("click", () => {
//     infowindow.open(map, marker);
//   });
// }
// google.maps.event.addDomListener(window, 'load', initialize);