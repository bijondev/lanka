// JavaScript Document
jQuery(document).ready(function() {
            
            // build <select> dropdown
            jQuery("<select />").appendTo("nav.grid_6");

            //Create deafult option "Go to..."
            jQuery("<option />", {
                "selected": "selected",
                "value": "",
                "text": "Go to..."  
            }).appendTo(".grid_6 select");

            //Populate
            jQuery(".grid_6 ul li a").each(function() {
                var el = jQuery(this);
                    if(el.parents('.grid_6 ul ul').length) {
                        // if there are ul in li
                        jQuery('<option />', {
                        'value': el.attr('href'),
                        'text':  '- ' + el.text()
                    }).appendTo('.grid_6 select');
                    } else { // if no ul in li
                        jQuery('<option />', {
                        'value': el.attr('href'),
                        'text': el.text()
                    }).appendTo('.grid_6 select');
                }
            });

            //make links work 
            jQuery(".grid_6 select").change(function() {
                window.location = jQuery(this).find("option:selected").val();
            });
    });


// website scroll




$(document).ready(function() {
	
	$(window).scroll(function(){
		
      if($(window).scrollTop()>295){
	  $('#scrlTop').css('display','block');
	   }
	 else{$('#scrlTop').css('display','none');
		 }
		})
	
	$('#scrlTop').click(function () {
                 $('html, body').animate({
                     scrollTop: '0px'
                 },
                 1500);
                 return false;
             });
	
	
	
$('#text_box_slider').cycle({
		speed: 2000,
		timeout:7000, 
		fx: 'fade',
		pager:'ul.pager',
		activePagerClass:'active',
		pagerAnchorBuilder: function(idx, slide) {
		 return 'ul.pager li:eq(' + (idx) + ')';
		}
	});	
	
	$('nav ul li a').click(function(){
	$.scrollTo( this.hash,800, {offset: {top:0} });	
	return false;
	});
	
	$('header a.logo').click(function(){
	$.scrollTo( this.hash,800, {offset: {top:0} });	
	
	return false;
	});
	
	
    var scrollorama = $.scrollorama({
        blocks:'.scrollblock'
    });
	
	
	$('header').mouseleave(function(){lg=0;});
	var lg=0;
	$('nav ul li a').click(function(){
	$('nav ul li a').removeClass('menuactive');
	 $(this).addClass('menuactive'); 
	 lg=1;
	 return false;
     });
	
	
	scrollorama.onBlockChange(function() {
	var i = scrollorama.blockIndex;
	 if(lg!=1){
	           if(i==0){
				   $('nav ul li a').removeClass('menuactive'); }
			   if(i==1){
				   $('nav ul li a').removeClass('menuactive');
			       $('nav ul li:nth-child(1)').children().addClass('menuactive');}
			   if(i==2){  $('nav ul li a').removeClass('menuactive');
				$('nav ul li:nth-child(2)').children().addClass('menuactive');}
			   if(i==3){  $('nav ul li a').removeClass('menuactive');
				$('nav ul li:nth-child(3)').children().addClass('menuactive');}
				if(i==4){ $('nav ul li a').removeClass('menuactive');
				$('nav ul li:nth-child(4)').children().addClass('menuactive');}  
				                                                                 }
	                                                                                });
																					
																					
																					
	
																					
																					
			
	if (!$.browser.msie){
	
	/*........home Block........................*/
	
	if ($.browser.webkit){ 
	scrollorama.animate('#bounce1',{ delay:210, duration: 50, property:'left',start:27,end:-190 });
	scrollorama.animate('#bounce1',{ delay:250, duration: 200, property:'opacity', end:0 });
	scrollorama.animate('#bounce1',{ delay:250, duration: 208, property:'top',start:50, end:400 });
	scrollorama.animate('.title1_',{ delay:210, duration: 50, property:'top', end:-30 });
	
	
	
		scrollorama.animate('#bounce2',{ delay:250, duration: 208, property:'top',start:50,end:400 });
		scrollorama.animate('#bounce2',{ delay:250, duration: 200, property:'opacity', end:0 });
	scrollorama.animate('.title2_',{ delay:250, duration: 50, property:'bottom', end:30 });

	
	
	scrollorama.animate('#bounce3',{ delay:210, duration: 50, property:'right',start:100, end:-150 });
		scrollorama.animate('#bounce3',{ delay:250, duration: 208, property:'top',start:50, end:400 });
		scrollorama.animate('#bounce3',{ delay:250, duration: 200, property:'opacity', end:0 });
	scrollorama.animate('.title3_',{ delay:210, duration: 50, property:'top', end:-30 });
	
	}
	else{	
		scrollorama.animate('#bounce1',{ delay:210, duration: 50, property:'left', end:-190 });
		scrollorama.animate('#bounce1',{ delay:250, duration: 200, property:'opacity', end:0 });
		scrollorama.animate('#bounce1',{ delay:250, duration: 208, property:'top', end:400 });
	scrollorama.animate('.title1_',{ delay:210, duration: 50, property:'top', end:-30 });
	
	
	
		scrollorama.animate('#bounce2',{ delay:250, duration: 208, property:'top', end:400 });
		scrollorama.animate('#bounce2',{ delay:250, duration: 200, property:'opacity', end:0 });
	scrollorama.animate('.title2_',{ delay:250, duration: 50, property:'bottom', end:30 });

	
	
	scrollorama.animate('#bounce3',{ delay:210, duration: 50, property:'right', end:-150 });
		scrollorama.animate('#bounce3',{ delay:250, duration: 208, property:'top', end:400 });
		scrollorama.animate('#bounce3',{ delay:250, duration: 200, property:'opacity', end:0 });
	scrollorama.animate('.title3_',{ delay:210, duration: 50, property:'top', end:-30 });
	                                                                                            }
    
	/*..........................About Us Block..................*/
	
	    scrollorama.animate('#drop1',{ delay:500, duration:0,property:'zoom', start:0 });
	    scrollorama.animate('#drop2',{ delay:700, duration:0, property:'zoom', start:0	});
		scrollorama.animate('#drop3',{ delay:900, duration:0, property:'zoom', start:0});
		scrollorama.animate('#drop3',{ delay:900, duration:0, property:'top', start:-30,end:-30});
		scrollorama.animate('#drop3',{ delay:900, duration:0, property:'left', start:-30,end:-30});
		
		
			/*..........................Our solution Block..................*/
		
		
		scrollorama.animate('#rotate1',{ delay:450, duration:150, property:'rotate', start:-360});
		scrollorama.animate('#rotate2',{ delay:450, duration:150, property:'rotate', start:-360});
		scrollorama.animate('#rotate3',{ delay:650, duration:350, property:'rotate', start:-360});
		scrollorama.animate('#rotate4',{ delay:650, duration:350, property:'rotate', start:-360});
		scrollorama.animate('#rotate5',{ delay:650, duration:350, property:'rotate', start:-360});
		/*..........................Clientele Block..................*/
		
		
		scrollorama.animate('.fadeIn1',{ delay:550, duration:500, property:'opacity', start:0});
		
		scrollorama.animate('.fadeIn2',{ delay:550, duration:500, property:'opacity', start:0});
	//	scrollorama.animate('.fadeIn2',{ delay:500, duration:500, property:'letter-spacing', start:20});
		scrollorama.animate('.fadeIn3',{ delay:550, duration:500, property:'opacity', start:0});
		//scrollorama.animate('.fadeIn3',{ delay:500, duration:500, property:'letter-spacing', start:20});
		scrollorama.animate('.fadeIn4',{ delay:550, duration:500, property:'opacity', start:0});
	
		scrollorama.animate('.fadeIn5',{ delay:750, duration:300, property:'opacity', start:0});
		
		scrollorama.animate('.fadeIn6',{ delay:750, duration:200, property:'opacity', start:0});
		
		scrollorama.animate('.fadeIn7',{ delay:750, duration:200, property:'opacity', start:0});
		
		scrollorama.animate('.fadeIn8',{ delay:750, duration:200, property:'opacity', start:0});
		
		scrollorama.animate('.fadeIn9',{ delay:900, duration:150, property:'opacity', start:0});
		scrollorama.animate('.fadeIn10',{ delay:900, duration:150, property:'opacity', start:0});
		scrollorama.animate('.fadeIn11',{ delay:900, duration:150, property:'opacity', start:0});
		scrollorama.animate('.fadeIn12',{ delay:900, duration:150, property:'opacity', start:0});
		                                                                                           }
		
	
	$('#contact_form').validate();
	
	
	if (navigator.platform.match(/iP(od|hone|ad)/i)) {
    $(window).scroll(function() {
        $('#scrlTop').css({
            position : 'absolute',
			 top : ($(window).height() + $(document).scrollTop()-150) + 'px',
			 
        });
    });
}
	
	
			
});


