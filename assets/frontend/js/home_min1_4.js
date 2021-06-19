function fill_images(position)
{
	if(position > 100)
	{
		$(".np_img_scrl").each(function(){
			 if($(this).attr("data-src"))
			 {
				$(this).attr("src",$(this).attr("data-src"));
				$(this).attr("data-src",'');
				
				$(this).attr("style",$(this).attr("data-src-style"));
				$(this).attr("data-src-style",'');
			 }
		});	
	}
	
	if(position > 800)
	{
		$(".p_img_scrl").each(function(){
			 if($(this).attr("data-src"))
			 {
				$(this).attr("src",$(this).attr("data-src"));
				$(this).attr("data-src",'');
			 }
		});
	}
	
	if(position > 1500)
	{
		$(".image_news_bg").each(function(){
			 if($(this).attr("data-src"))
			 {
				$(this).attr("src",$(this).attr("data-src"));
				$(this).attr("data-src",'');
			 }
		});
		
		$(".image_blog_bg").each(function(){
			if($(this).attr("data-src"))
			{
				$(this).attr("src",$(this).attr("data-src"));
				$(this).attr("data-src",'');
			}
		});
	}
}

function load_slide_images(slides)
	{
		$.each(slides, function(i, slide){ //Loop on both slides
			var CurrSliderImg = slide.content.find('td a img');
			CurrSliderImg.each(function(i,obj){ //Loop on both images
				sliderImgSrc = $(obj).attr('data-src');
				if(sliderImgSrc != '')
				{
					$(obj).attr('src', sliderImgSrc);
					$(obj).attr('data-src','');
				}
				
				sliderImgSrcStyle = $(obj).attr('data-src-style');
				if(sliderImgSrcStyle != '')
				{
					$(obj).attr('style', sliderImgSrcStyle);
					$(obj).attr('data-src-style','');
				}
				
			});
		});
	}

direction=window.direction||"ltr";var slide_hp="",pl_data_arr=new Array;gbl_combo_city_id=1,$(window).load(function(){var e="";e+=$(window).scrollTop(),fill_images(e),$(window).scroll(function(){var e="";e+=$(window).scrollTop(),fill_images(e)})}),$("document").ready(function(){$(".sb_btn_buy").on("click",function(){this_obj_buy=$(this),$("#sb_sl_btn_bg").animate({left:$(this).position().left+3+"px"},function(){var e=$("#btn_find_properties").val();$("#find_properties_projects").html(e);var t=$("#general_search").val();$("#frm_tabsearch_property").attr("action",t),$(".new_project_fields").hide(),$(".price_range_fields").show(),$(".sb_btn_want").css({color:"#BEB9B5"}),$(".sb_btn_rent").css({color:"#BEB9B5"}),$(".sb_btn_new_projects").css({color:"#BEB9B5"}),this_obj_buy.css({color:"#fff"})}),$("#tab_purpose").val("1")}),$(".sb_btn_rent").on("click",function(){this_obj_rent=$(this),$("#sb_sl_btn_bg").animate({left:$(this).position().left+10+"px"},function(){var e=$("#btn_find_properties").val();$("#find_properties_projects").html(e);var t=$("#general_search").val();$("#frm_tabsearch_property").attr("action",t),$(".new_project_fields").hide(),$(".price_range_fields").show(),$(".sb_btn_want").css({color:"#BEB9B5"}),$(".sb_btn_buy").css({color:"#BEB9B5"}),$(".sb_btn_new_projects").css({color:"#BEB9B5"}),this_obj_rent.css({color:"#fff"})}),$("#tab_purpose").val("2")}),$(".sb_btn_new_projects").on("click",function(){this_obj_new_projects=$(this),$("#sb_sl_btn_bg").animate({left:$(this).position().left+3+"px"},function(){var e="post",t=$("#btn_find_projects").val();$("#find_properties_projects").html(t);var s=$("#new_project_search").val();$("#frm_tabsearch_property").attr("action",s),$("#frm_tabsearch_property").attr("method",e),$(".price_range_fields").hide(),$(".new_project_fields").show(),$(".sb_btn_want").css({color:"#BEB9B5"}),$(".sb_btn_rent").css({color:"#BEB9B5"}),$(".sb_btn_buy").css({color:"#BEB9B5"}),this_obj_new_projects.css({color:"#fff"})}),$("#tab_purpose").val("4")}),$(".sb_btn_want").on("click",function(){this_obj_want=$(this),$("#sb_sl_btn_bg").animate({left:$(this).position().left+0+"px"},function(){var e=$("#btn_find_properties").val();$("#find_properties_projects").html(e);var t=$("#general_search").val();$("#frm_tabsearch_property").attr("action",t),$(".price_range_fields").show(),$(".new_project_fields").hide(),$(".sb_btn_rent").css({color:"#BEB9B5"}),$(".sb_btn_buy").css({color:"#BEB9B5"}),$(".sb_btn_new_projects").css({color:"#BEB9B5"}),this_obj_want.css({color:"#fff"})}),$("#tab_purpose").val("3")});var slider_fa=$(".agnt_slider").royalSlider({arrowsNav:!1,arrowsNavAutoHide:!1,controlNavigation:"none",loop:!1,loopRewind:!1,slidesOrientation:"vertical",easeOut:"easeOutSine",block:{fadeEffect:!1,moveEffect:"left"},autoPlay:{enabled:!0,pauseOnHover:!0,delay:5e3}}).data("royalSlider");slide_hp=$(".hot_prop").royalSlider(hot_prop_slider_options).data("royalSlider");var call_made_arr={1:1};s_imz(call_recording_1),$.data(slide_hp,"prev_slide",0),slide_hp.ev.on("rsAfterSlideChange",function(event){var slides=[],slide_offset=1,total_slides=slide_hp.slides.length,curr_slider_id=slide_hp.currSlide.id,prev_slider_id=$.data(slide_hp,"prev_slide");if(curr_slider_id-prev_slider_id==1||curr_slider_id-prev_slider_id==-5){var slides=[],FirstSliderId=slide_hp.currSlide.id+slide_offset;"undefined"!=typeof slide_hp.slides[FirstSliderId]&&(slides[0]=slide_hp.slides[FirstSliderId]),"undefined"!=typeof slide_hp.slides[FirstSliderId+1]&&(slides[1]=slide_hp.slides[FirstSliderId+1]),load_slide_images(slides)}else{var slides=[],FirstSliderId=slide_hp.currSlide.id;"undefined"!=typeof slide_hp.slides[FirstSliderId]&&(slides[0]=slide_hp.slides[FirstSliderId]),load_slide_images(slides)}$.data(slide_hp,"prev_slide",curr_slider_id);var scroll_to=slide_hp.currSlideId+1;call_made_arr[scroll_to]||(call_made_arr[scroll_to]=1,s_imz(eval("call_recording_"+scroll_to)))}),$(".news_slider").royalSlider({arrowsNav:!0,arrowsNavAutoHide:!1,fadeinLoadedSlide:!0,imageAlignCenter:!0,controlNavigation:"bullets",imageScaleMode:"fill",imageAlignCenter:!0,loop:!0,loopRewind:!1,numImagesToPreload:4,slidesOrientation:"horizontal",keyboardNavEnabled:!0,easeOut:"easeOutSine",keyboardNavEnabled:!1,block:{fadeEffect:!1,moveEffect:"left"}});var slider_fa=$(".agnt_slider").royalSlider({arrowsNav:!1,arrowsNavAutoHide:!1,controlNavigation:"none",loop:!1,loopRewind:!1,slidesOrientation:"vertical",easeOut:"easeOutSine",block:{fadeEffect:!1,moveEffect:"left"}}).data("royalSlider");if(jQuery(document).ready(function(e){new_prop=e(".new_prop"),new_prop.length>0&&(window.np_stats_data={0:1},window.fd_stats_data={0:1},new_prop_slider=new_prop.royalSlider({arrowsNavAutoHide:!1,imageScaleMode:"fill",loop:!0,keyboardNavEnabled:!1,navigateByClick:!1,block:{fadeEffect:!1,moveEffect:"left"}}).css({display:"block"}).data("royalSlider"),new_prop_slider.ev.on("rsBeforeAnimStart",function(){index=new_prop_slider.currSlideId,np_stats_data[index]||(np_stats_data[index]=1,s_imz(window["np_stats_data_"+index]))}),e.data(new_prop_slider,"prev_slide",0),new_prop_slider.ev.on("rsAfterSlideChange",function(){var t=[],s=1,i=(new_prop_slider.slides.length,new_prop_slider.currSlide.id),r=e.data(new_prop_slider,"prev_slide");if(i-r==1||i-r==-5){var t=[],a=new_prop_slider.currSlide.id+s;"undefined"!=typeof new_prop_slider.slides[a]&&(t[0]=new_prop_slider.slides[a]),"undefined"!=typeof new_prop_slider.slides[a+1]&&(t[1]=new_prop_slider.slides[a+1]),load_slide_images(t)}else{var t=[],a=new_prop_slider.currSlide.id;"undefined"!=typeof new_prop_slider.slides[a]&&(t[0]=new_prop_slider.slides[a]),load_slide_images(t)}e.data(new_prop_slider,"prev_slide",i)}),s_imz(window.np_stats_data_0)),e(".rangebox input").click(function(){var t=parseInt(e(this).val());isNaN(t)&&e(this).val("")})}),$(".add_slider").length){var ads_slider=$(".add_slider").royalSlider({arrowsNavAutoHide:!1,controlNavigation:"none"}).data("royalSlider");ads_slider.slides[0].content.html($("<div/>").html(home_middle_ad_0).text()+" "+$("<div/>").html(home_middle_ad_1).text()),ads_slider.slides[1].content.html($("<div/>").html(home_middle_ad_2).text()+" "+$("<div/>").html(home_middle_ad_3).text()),ads_slider.slides[2].content.html($("<div/>").html(home_middle_ad_4).text()+" "+$("<div/>").html(home_middle_ad_5).text())}$(".agnt_container .arrowTop").click(function(){slider_fa.prev()}),$(".agnt_container .arrowBottom").click(function(){slider_fa.next()}),$(".sb_plogo,.sb_alogo").tooltip({tooltipClass:"ttg price_tooltip",position:{my:"left-46 bottom-13",at:"center top",collision:"none",using:function(e){$(this).append("<div class='bgc tt_arrow'></div>"),$(this).css(e)}}});var slider=$(".lt_slide").royalSlider({arrowsNav:!1,arrowsNavAutoHide:!1,slidesOrientation:"vertical",slidesSpacing:1,controlNavigation:"none",block:{fadeEffect:!1,moveEffect:"left"}}).data("royalSlider");$(".loc_slider").css({display:"block"}),$(".loc_container .arrowTop").click(function(){slider.prev()}),$(".loc_container .arrowBottom").click(function(){slider.next()})}),$("#tab_type").live("change",function(){var e=["12","11","19","23","13","15","17","14","16","26"],t=$(this).val();e.indexOf(t)>-1?($(".tab_beds").css("background-color","#E1E1E1"),$("#tab_beds").attr("disabled","disabled")):($(".tab_beds").removeAttr("style"),$("#tab_beds").removeAttr("disabled"))}),$("#home_sms_send").click(function(){var e=$(this).parent().attr("action"),t=$(this).parent().serialize(),s=0;$("#phone_email_country").val()?$("#phone_email_country").removeClass("home_sms_red_bdr"):(s=1,$("#phone_email_country").addClass("home_sms_red_bdr")),$("#phone_email_area").val()?$("#phone_email_area").removeClass("home_sms_red_bdr"):(s=1,$("#phone_email_area").addClass("home_sms_red_bdr")),$("#phone_email_phone").val()?$("#phone_email_phone").removeClass("home_sms_red_bdr"):(s=1,$("#phone_email_phone").addClass("home_sms_red_bdr")),0==s&&$.get(e,t,function(e){$("#home_sms_success").html(e)})}),$(".home_sms_input").blur(function(){$(this).val()&&$(this).removeClass("home_sms_red_bdr")});