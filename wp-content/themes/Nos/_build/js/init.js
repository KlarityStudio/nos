(function(){
	$(function(){
    galleryShuffle();
    hideEmptyFeatures();
});

  function galleryShuffle(){

    if($('body').hasClass('single-cars')){
      var $gallery = $('.featured-image').children('.car-gallery'),
          $galleryImage = $gallery.find('li');

      $galleryImage.first().addClass('active');
      $galleryImage.on('click', function(){
        $galleryImage.removeClass('active');
        $(this).addClass('active');
        $(this).fadeOut();
        $('.active').fadeIn(500, 'linear');
      });
    }
  }
  function hideEmptyFeatures(){
    if($('body').hasClass('single-cars')){
      var $featureContainer = $('.feature-container').children('ul');

      if ( $featureContainer.children().length == 0 ){
        $('.feature-container').css('display', 'none');
      }
    }
  }
}) (jQuery);
