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