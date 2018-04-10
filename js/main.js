<script>
  $('.dropdown > li').mouseover(function(){
    $('.dropdown_main').addClass('dropdown_main_over');
    $('html').click(function() {		
      $('.dropdown > li > ul').removeClass('dropdown_main_over');
    });
  });  
    
  $('li.parent').mouseover(function(){
  $(this).siblings().find('ul').removeClass('child_over')
    $(this).child('ul').addClass('child_over');
    $('html').click(function() {		
      $('ul').removeClass('child_over');
    });
  });
</script>
