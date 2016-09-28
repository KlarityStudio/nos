(function(){
	$(function(){
    galleryShuffle();
});

function galleryShuffle(){

  if($('body').hasClass('single-cars')){

    var $gallery = $('.featured-image').children('.car-gallery'),
        $galleryImage = $gallery.find('li');

      $galleryImage.first().addClass('active');
      $galleryImage.on('click', function(){
        $galleryImage.removeClass('active');
        $(this).addClass('active');
        // $(this).fadeOut();
        // $('.active').fadeIn(500, 'linear');
    });
  }
}
}) (jQuery);
