var moreListItem = $('.navigation .more');
var moreLink = $('.navigation .more .more-trigger');
var moreWidth = moreLink.outerWidth();

function order_frame_loaded(frame){
  $('.loading-spinner').hide();
}

$(document).ready(function(){
	$('.accordion .trigger').click(function(){
		$(this).toggleClass('open').parent('h2').next('.section').slideToggle();
	});

	if($('.navigation li.more').is(":visible")){
		check_ratio();
	}

	$('.navigation').addClass('rendered');

	$(window).resize(function(){
		if($('.navigation li.more').is(":visible")){
			check_ratio();
		}
	});

	$('.mobile-nav-button').click(function(){
		$(this).toggleClass('open');
		$('.navigation ul').slideToggle();
	});

  //$('a.skip-to-start-of-content').attr('href', window.location.pathname + window.location.search + '#start-of-content');

  $('li.dropdown ul.dropdown-menu li:last-child a').on('keydown', function(e){
    if(e.key === 'Tab' && !e.shiftKey){
      $(this).parents('li.dropdown').find('a.dropdown-toggle').trigger('click');
    }
  });

  // Add event listeners for navigation dropdown in template 1.5
  if(moreListItem.length){
    moreListItem.find('ul li:last-child a').on('keydown', function(e){
      if(e.key === 'Tab' && !e.shiftKey){
        moreListItem.removeClass('open');
      }
    });

    $(document).on('click', function(e){
      if(!moreListItem.has(e.target).length){
        moreListItem.removeClass('open');
      }
    });
  }
});

function check_ratio(){

	var numHidden = 0;
	var totalWidth = 0;
	var wrapperWidth = $('.container').outerWidth() - 40;

	$.each($('.navigation>ul>li:not(.more)'), function(index){
		var position = index+1;
		var item = $(this);
		totalWidth += item.outerWidth();

		if(totalWidth > (wrapperWidth - moreWidth)){
      numHidden++;
			item.hide();
			$('.navigation .more li:nth-of-type('+position+')').css('display', 'block');
		}else{
			item.show();
			$('.navigation .more li:nth-of-type('+position+')').css('display', 'none');
		}
	});

	if(numHidden == 0){
		moreLink.hide();
	}else{
		moreLink.show();
	}
}

moreLink.on('click', function(e){
  e.preventDefault();
  moreListItem.toggleClass('open');
});
