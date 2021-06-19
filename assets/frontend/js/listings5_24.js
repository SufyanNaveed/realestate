
$( window ).resize(function() {
	var fsb_stp = $(window).scrollTop();
	fsb_hpos = $("#fsb_holder").position();
	$("#results_filters").css("left",fsb_hpos.left);
	if( fsb_stp >= (fsb_hpos.top) )
	{
		$("#results_filters").css("left",0);
	}
});

$(".sb_btn_buy").on('click',function(){
		this_obj_buy = $(this);
		$("#sb_sl_btn_bg").animate({"left":"7px"},function(){
			$(".sb_btn_want").css({"color":"##BEB9B5"});
			$(".sb_btn_rent").css({"color":"##BEB9B5"});
			this_obj_buy.css({"color":"#fff"});
			$(".sb_btn_rent").children().removeClass("btn_sel");
			$(".btn_txt").removeClass("txt_sel");
			this_obj_buy.children(".btn_txt").addClass("txt_sel");
			this_obj_buy.children().addClass("btn_sel");
		});		
	});
	
$(".sb_btn_rent").on('click',function(){
	this_obj_rent = $(this);
	$("#sb_sl_btn_bg").animate({"left":"95px"}, function(){
		$(".sb_btn_want").css({"color":"##BEB9B5"});
		$(".sb_btn_buy").css({"color":"##BEB9B5"});
		this_obj_rent.css({"color":"#fff"});
		$(".sb_btn_buy").children().removeClass("btn_sel");
		$(".btn_txt").removeClass("txt_sel");
		this_obj_rent.children(".btn_txt").addClass("txt_sel");
		this_obj_rent.children().addClass("btn_sel");
	});
});
var d_min={};
var a_min={};
$("document").ready(function(){
	$(".ls").on('mouseover',function(){
		$(this).find(".ls_vdet_main").show();
	});
	$(".ls").on('mouseout',function(){
		$(this).find(".ls_vdet_main").hide();
	});
	$(".cb_alpha_sort,.cb_alpha_sort_spacer_left").live('click',function(){
		//$(".load_cats").css('display','block');
		 $('.cb_alpha_slider').animate(
								{left: '+=32'}, 30, function(){
									$(".cb_alpha_sort_spacer").removeClass("cb_alpha_sort_spacer_left");
									$(".cb_alpha_sort_spacer").addClass("cb_alpha_sort_spacer_right");
								}
							); 
		
		$(".sort_count").css('display','none');
		if( $(".sort_alpha").length )
		{	
			$(".sort_alpha").css('display','block');
			$.get(this_domain_ajax+'&c=ajax_hide_cat_box&show_cat_alpha_order=1','','');
		}
		else
		{
			$(".load_cats").css('display','block');
			var sort_param = $(".cb_alpha_sort").attr("id");
			$.get(this_domain_ajax+'&c=ajax_sort_cat_childs&sort_by=alpha&s_param='+sort_param,"",function(str){
				$(".load_cats").css('display','none');
				$(".cat_childs_content").append("<div class='sort_alpha'>"+str+"</div>");
			});	
		}		
	});
	$(".cb_alpha_sort_selected,.cb_alpha_sort_spacer_right").live('click',function(){
		
		$(".sort_alpha").css('display','none');
		if( $(".sort_count").length )
		{
			$(".sort_count").css('display','block');
			$.get(this_domain_ajax+'&c=ajax_hide_cat_box&show_cat_count_order=1','',''); 
		}
		else
		{
			$(".load_cats").css('display','block');
			var sort_param = $(".cb_alpha_sort_selected").attr("id");
			$.get(this_domain_ajax+'&c=ajax_sort_cat_childs&sort_by=count&s_param='+sort_param,"",function(str){
				$(".load_cats").css('display','none');
				$(".cat_childs_content").append("<div class='sort_count'>"+str+"</div>");
			});	
		}
		
		 $('.cb_alpha_slider').animate(
								{left: '-=32'}, 30, function() {
								$(".cb_alpha_sort_spacer").removeClass("cb_alpha_sort_spacer_right");
								$(".cb_alpha_sort_spacer").addClass("cb_alpha_sort_spacer_left");		
							  }
							); 
		//$(".load_cats").css('display','none');
		//$(".sort_count").css('display','block');
	});
	var browser_name = navigator.appName;

	if( browser_name == "Microsoft Internet Explorer")
	{
		$("#propertytypeimage li").live('mousemove',function(){
			tm_class = this.id;
			if( tm_class )
			{
				$("."+tm_class+"_a").addClass("tm_hover_a");
				//$("."+tm_class).css("margin-top","-1px");
				$("."+tm_class).addClass("tm_container_display");
				//if( direction == "rtl" && navigator.appVersion.indexOf("MSIE 7.") != -1)
				//	$("."+tm_class).css("margin-top","6px");
			}	
		});
	}
	else
	{
		$("#propertytypeimage li").live('mouseenter',function(){
			tm_class = this.id;
			if( tm_class )
			{
				$("."+tm_class+"_a").addClass("tm_hover_a");
				$("."+tm_class).addClass("tm_container_display");
				//$("."+tm_class).css("margin-top","4px");
			}	
		});
	}
	$("#propertytypeimage li").live('mouseleave',function(){
		tm_class = this.id;
		if( tm_class )
		{
			$("."+tm_class+"_a").removeClass("tm_hover_a");
			$("."+tm_class).removeClass("tm_container_display");
			//$("."+tm_class).css("margin-top","-9999999px");
		}  
		
	});
	$(".filter_search span").live("click",function(){
		
		/* PRICE CHECK */
		
		var p_slider_lower_limit = window.sb_price_min;
		var p_slider_uppler_limit = window.sb_price_max;
		
		var p_slider_new_min = $("#price_1").val();
		var p_slider_new_max = $("#price_2").val();
		var flag_min_price = false;
		var flag_max_price = false;
		 
		if( isNaN(p_slider_new_min) )
		{
			if(p_slider_new_min != '')
				flag_min_price = true;
				
			p_slider_new_min = p_slider_lower_limit;
		}	
		if( isNaN(p_slider_new_max))
		{
			if(p_slider_new_max != '')
				flag_max_price = true;
			
			p_slider_new_max = p_slider_uppler_limit;
		}	
			
		/* var p_slider_curr_min = $( "#price-range" ).slider( "values", 0 );
		var p_slider_curr_max = $( "#price-range" ).slider( "values", 1 ); */
		var p_slider_curr_min = p_slider_lower_limit;
		var p_slider_curr_max = p_slider_uppler_limit;
		
		$(".sb_ptxt .sb_pfield").css('border','1px solid #CACACA');
		if(p_slider_new_min != p_slider_curr_min)
		{
			if(parseInt(p_slider_new_min) > parseInt(p_slider_new_max) && p_slider_new_max != '')
			{
				$(".sb_ptxt .p_from .sb_pfield").css('border','1px solid #FF0000');
				
					if( !$("#fsb_pa").is(':visible') )
					{
						$("#fsb_pa").parent().click();
					}
					d_min = $("#price_1").tooltip("open").data();
				
				$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_p_min_msg_1);
				
				return false;
			}
			if( p_slider_new_min < 0 )
			{
				$(".sb_ptxt .p_from .sb_pfield").css('border','1px solid #FF0000');
				if( !$("#fsb_pa").is(':visible') )
				{
					$("#fsb_pa").parent().click();
				}
				d_min = $("#price_1").tooltip("open").data();
				$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_p_min_msg_2);
				return false;
			}
			//$("#price-range").slider( "values", 0, p_slider_new_min );
		}
		else if(p_slider_new_max != p_slider_curr_max)
		{
			if(parseInt(p_slider_new_max) < parseInt(p_slider_new_min) && p_slider_new_min != '')
			{
				$(".sb_ptxt .p_to .sb_pfield").css('border','1px solid #FF0000');
				if( !$("#fsb_pa").is(':visible') )
				{
					$("#fsb_pa").parent().click();
				}
				d_min = $("#price_2").tooltip("open").data();
				$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_p_max_msg_1);
				
				return false;
			}
			if( p_slider_new_max < 0 )
			{
				$(".sb_ptxt .p_to .sb_pfield").css('border','1px solid #FF0000');
				if( !$("#fsb_pa").is(':visible') )
				{
					$("#fsb_pa").parent().click();
				}
				d_min = $("#price_2").tooltip("open").data();
				$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_p_max_msg_2);
				
				return false;
			}
			//$( "#price-range" ).slider( "values", 1, p_slider_new_max );
		}
		if(flag_min_price)
		{
			$(".sb_ptxt .p_from .sb_pfield").css('border','1px solid #FF0000');
			if( !$("#fsb_pa").is(':visible') )
			{
				$("#fsb_pa").parent().click();
			}
			d_min = $("#price_1").tooltip("open").data();
			$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_price_message_2);
			return false;
		}
		if(flag_max_price)
		{
			$(".sb_ptxt .p_to .sb_pfield").css('border','1px solid #FF0000');
			if( !$("#fsb_pa").is(':visible') )
			{
				$("#fsb_pa").parent().click();
			}
			d_min = $("#price_2").tooltip("open").data();
			$("#"+d_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_price_message_2);
			return false;
		}
		/* END PRICE CHECK */
		
		/* AREA CHECK */
		
		var a_slider_lower_limit = window.sb_area_min;
		var a_slider_uppler_limit = window.sb_area_max;
		
		var a_slider_new_min = $("#area_1").val();
		var a_slider_new_max = $("#area_2").val();
		var flag_min_area = false;
		var flag_max_area = false;
		if( isNaN(a_slider_new_min) )
		{
			if(a_slider_new_min != '')
				flag_min_area = true;
			
			//a_slider_new_min = a_slider_lower_limit;
		}
		if( isNaN(a_slider_new_max) )
		{
			if(a_slider_new_max != '')
				flag_max_area = true;
			//a_slider_new_max = a_slider_uppler_limit;
		}	
		/* if(a_slider_new_max != '' && a_slider_new_min == '')
		{
			flag_min_area = true;
		}
		if(a_slider_new_min != '' && a_slider_new_max == '')
		{
			flag_max_area = true;
		} */
		
		/* var a_slider_curr_min = $( "#area-range" ).slider( "values", 0 );
		var a_slider_curr_max = $( "#area-range" ).slider( "values", 1 ); */
		var a_slider_curr_min = a_slider_lower_limit;
		var a_slider_curr_max = a_slider_uppler_limit;
		
		$(".sb_atxt .sb_pfield").css('border','1px solid #CACACA');
		if(a_slider_new_min != a_slider_curr_min)
		{
			if(parseInt(a_slider_new_min) > parseInt(a_slider_new_max) && a_slider_new_max != "")
			{
				$(".sb_atxt .p_from .sb_pfield").css('border','1px solid #FF0000');
				if( !$("#fsb_pa").is(':visible') )
				{
					$("#fsb_pa").parent().click();
				}
				a_min = $("#area_1").tooltip("open").data();
				$("#"+a_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_a_min_msg_1);
				
				return false;
			}
		}
		else if(parseInt(a_slider_new_max) != parseInt(a_slider_curr_max))
		{
			if(parseInt(a_slider_new_max) < parseInt(a_slider_new_min) && a_slider_new_min != "")
			{
				$(".sb_atxt .p_to .sb_pfield").css('border','1px solid #FF0000');
				if( !$("#fsb_pa").is(':visible') )
				{
					$("#fsb_pa").parent().click();
				}
				a_min = $("#area_2").tooltip("open").data();
				$("#"+a_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_a_max_msg_1);
				
				return false;
			}
			//$( "#area-range" ).slider("values", 1, a_slider_new_max);
		}
		
		if(flag_min_area)
		{
			$(".sb_atxt .p_from .sb_pfield").css('border','1px solid #FF0000');
			if( !$("#fsb_pa").is(':visible') )
			{
				$("#fsb_pa").parent().click();
			}
			a_min = $("#area_1").tooltip("open").data();
			$("#"+a_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_area_message_2);
			return false;
		}
		if(flag_max_area)
		{
			$(".sb_atxt .p_to .sb_pfield").css('border','1px solid #FF0000');
			if( !$("#fsb_pa").is(':visible') )
			{
				$("#fsb_pa").parent().click();
			}
			a_min = $("#area_2").tooltip("open").data();
			$("#"+a_min.uiTooltipId).html("<div class='bgc tt_arrow'></div>"+glang_area_message_2);
			return false;
		}
		/* END AREA CHECK */
		$("#frm_tabsearch_property #page").val("");
		$("#frm_tabsearch_property").submit();
	});
	$(".ls_sort #filter,.ls_sort #filter_sec").live("change",function(){
		$("#frm_tabsearch_property #page").val(1);
		//return false;
		$("#filter_sec_srch").val();
		var ls_fil_id = $(this).attr('id');
		$("#"+ls_fil_id+"_srch").val($(this).val());
		$(".cl_list_check input").attr("checked",false)
		$("#frm_tabsearch_property").attr("action","").submit();
		//$("#frm_tabsearch_property").submit();
		//code commit by devii for chnges of Checkbox
		/* var ls_fil_id = $(this).attr('id');
		var ls_fil_val = $(this).val();
		$("#"+ls_fil_id+"_srch").val(ls_fil_val);
		$("#frm_tabsearch_property").attr("action","");
		$("#frm_tabsearch_property").submit(); */
	});
	$(".ls_sort #filter_cmb").live("change",function(){
		$("#filter").val($(this).val());
		$("#sort_list").css("display",'block');
		$("#sort_list").submit();
	});
	$(".pg_submit").live("click",function(){
		var pg_sub_id = $(this).attr('id');
		var pg_sub_id_arr = pg_sub_id.split("_");
		$("#pg_hd_page").val(pg_sub_id_arr[1]);
		$("#sort_list").css("display",'block');
		$("#sort_list").submit();
	});
	$(".ls_sort #filter_cmb_sec").live("change",function(){
		if($("#filter_cmb").length > 0)
			$("#filter").val($("#filter_cmb").val());
		$("#filter_sec").val($(this).val());
		$("#sort_list").css("display",'block');
		$("#sort_list").submit();
	});
	$(".pg_links").live('click',function(){
		if($(this).attr("href")=="")
		{
			var pg_lnk_id = $(this).attr("id");
			var pg_lnk_num = pg_lnk_id.split("_");
			$("#page").val(pg_lnk_num[1]);
			$("#frm_tabsearch_property").submit();
			
			
			return false;
		}
	});
	//price box
	$( ".p_settings" ).dialog({
	  position: {
				my: "left-65 top+10",
				at: "center bottom",
				of: $(".p_fbx")
			},
	  height: 'auto',
	  width: 340,
	  modal: false,
	  draggable: false,
	  dialogClass: "filter_price_box",
	  resizable: false,
	  autoOpen: false,
	  clickOutside: true
	});
	//Area Box
	$( ".a_settings" ).dialog({
	  position: {
				my: "left-65 top+10",
				at: "center bottom",
				of: $(".a_fbx")
			},
	  height: 'auto',
	  width: 340,
	  modal: false,
	  draggable: false,
	  dialogClass: "filter_price_box a_fbc",
	  resizable: false,
	  autoOpen: false,
	  clickOutside: true
	});
	//Bed Box
	/* $(".bed_settings").dialog({
	  position: {
				my: "left-65 top+5",
				at: "center bottom",
				of: $(".bed_fbx")
			},
	  height: 'auto',
	  width: 340,
	  modal: false,
	  draggable: false,
	  dialogClass: "filter_price_box bath_fbc",
	  resizable: false,
	  autoOpen: false,
	  clickOutside: true
	}); */
	//Bath Box
	/* $( ".bath_settings" ).dialog({
	  position: {
				my: "left-65 top+10",
				at: "center bottom",
				of: $(".bath_fbx")
			},
	  height: 'auto',
	  width: 340,
	  modal: false,
	  draggable: false,
	  dialogClass: "filter_price_box bath_fbc",
	  resizable: false,
	  autoOpen: false,
	  clickOutside: true
	}); */
	//submit requirement
	$(".sub_req_call").dialog({
	  height: 'auto',
	  width: 470,
	  modal: true,
	  draggable: false,
	  resizable: false,
	  title: 'Submit Requirement',
	  autoOpen: false
	});
	$("#alert_city").live('change',function()
	{
		$("#alert_cat_id_input").val("");
		$("#as-selections-alert_cat_id .as-selection-item").remove();
		var city_id = $(this).val();
		if(city_id)
		{
			$("#alert_cat_id_input").removeAttr("disabled").val(loading_txt);
			load_combo_data(city_id,function(){
				$("#alert_cat_id_input").blur();
			});
		}
		else
		{
			$("#alert_cat_id_input").attr('disabled', 'disabled').blur();
		}
	});
	$("#agentid_input").autoSuggest(json_agent_list,{
		selectionAdded: function(){$("#agentid").trigger('change');},
		selectionRemoved: function(elem){elem.remove();$("#agentid").trigger('change');}
	});
	/* if($(".autofill #agentid").length > 0)
	{
		$(".autofill #agentid").attr("disabled", "disabled");
	} */	
	$("#show_advance").live("click",function(){
		//$("#filter_advance input, #filter_advance select").attr("disabled",false);
		$("#show_adv_frm").val(1);
		var custom_hd = $.trim($(this).attr('custom_hd'));
		$(this).attr('custom_hd',$(this).contents().last()[0].nodeValue);
		$(this).contents().last().replaceWith(custom_hd);
		$("#filter_advance").slideDown('fast',function(){
			$("#show_advance").attr("id","hide_advance");
		});
	});
	$("#hide_advance").live("click",function(){
		var custom_hd = $(this).attr('custom_hd');
		$(this).attr('custom_hd',$(this).text());
		$(this).contents().last().replaceWith(custom_hd);
		$("#filter_advance").slideUp('fast',function(){
			//$("#filter_advance input, #filter_advance select").attr("disabled",true);
			if( $("#show_adv_frm").length > 0 )
				$("#show_adv_frm").val(0);
			
			$("#hide_advance").attr("id","show_advance");
		});
	});
	
});
function property_add_form_submit(hs_form)
{
	$("#popup_waiting_image").show();
	
	$.post(hs_form.attr("action"), hs_form.serialize(), function(str)
	{ 
		var result = json_obj(str);
		$("#alert_message").html(result.html).show();
		$("#popup_waiting_image").hide();
	});
	return false;
}
function req_cat_preFill(data_handler,opts)
{
	city_id = $("#alert_city").val();
	load_combo_data(city_id,function(){
		data_handler(combo_source_array);
		$(".req_cat_filter").removeAttr("disabled").blur();
	});
}
function auto_close_dialog(){
	if( $( ".p_settings" ).dialog( "isOpen" ) )
	{
		$(".p_settings").dialog("close");
	}
	if( $( ".a_settings" ).dialog( "isOpen" ) )
	{
		$(".a_settings").dialog("close");
	}
	if( $( ".bed_settings" ).dialog( "isOpen" ) )
	{
		$(".bed_settings").dialog("close");
	}
	if( $( ".bath_settings" ).dialog( "isOpen" ) )
	{
		$(".bath_settings").dialog("close");
	}
}

function imp_num(selector)
{
	data = eval("stats_data_array_" + selector);
	s_imz(data);
	s = "#s_" + selector;
	v = "#v_" + selector;
	//$(v).fadeOut(500, function () {$(s).fadeIn(500);});
	$(v).hide();
	$(s).show();
}

var eb_flag_lock = 0;
function eb_load_list(el,id)
{	
	var eb_serialize;
	var firmname;
	var price_html;
	var property_logo;
	var link_path;
	var description;
	
	if( $("#ls_loc_"+id).length > 0 )
	{
		firmname = $("#ls_loc_"+id).html();
	}
	if( $("#ls_price_"+id).length > 0 )
	{
		if( $("#ls_price_"+id+" font").length > 0 )
			price_html = $("#ls_price_"+id+" font").text();
		else
			price_html = $("#ls_price_"+id).text();
	}
	
	property_logo = $("#ls_image_"+id+" .rsContainer").find('img:first').parent().html();
	
	
  
  if(typeof property_logo === "undefined" && $("#ls_image_"+id).length > 0)
    property_logo = $("#ls_image_"+id).html();
    
	
	if( $("#ls_property_link_"+id).length > 0 )
	{
		link_path = $("#ls_property_link_"+id).attr("href");
	}
	else if( $("#ls_title_"+id).length > 0 )
	{
		link_path = $("#ls_title_"+id).attr("href");
	}
	if( $("#ls_title_"+id).length > 0 )
	{
		description = $("#ls_title_"+id).html();
	}
	
	if( $(el).children("input").attr('checked') )
	{
		$(el).children("input").removeAttr('checked');
	}	
	else
	{
		$(el).children("input").attr('checked','checked');
	}
	
	if( $(el).children("input").attr('checked') )
	{
		eb_serialize = {"firmname":firmname,"price_html":price_html,"property_logo":property_logo,"link_path":link_path,"selector":id,"description":description};
		$(el).removeClass("eb_list_unchk");
		$(el).addClass("eb_list_ckh");
		
		if( eb_flag_lock == 0 )
		{
			eb_flag_lock = 1;
			$.get(this_domain_ajax+"&c=ajax_property_email_basket",eb_serialize,function(str){
				$(".eb_content_list").append(str);
				if( !$(".eb_container").is(':visible') )
					$(".eb_container").fadeIn('slow');
				$(".eb_content").scrollTop( $(document).height() );
				
				eb_flag_lock = 0;
			});
		}	
	}
	else
	{
		$(el).removeClass("eb_list_ckh");
		$(el).addClass("eb_list_unchk");
		var eb_unchk_id = $(el).children("input").attr('id');
		eb_unchk_id_arr = eb_unchk_id.split("eb_select_");
		$.get(this_domain_ajax+"&c=ajax_property_email_basket&eb_bid="+eb_unchk_id_arr[1],'','');
		eb_cbox_id = $(el).children("input").attr('id');
		$("#"+eb_cbox_id+"_list").remove();
		if( $(".eb_list").length <= 0 )
			$(".eb_close").click();		
	}
}
/* function show_contact_agent_form(id,email_alert_json)
{
	$(".pv_frm_msgs").html("");
	$(".pv_frm_msgs").hide();
	$( ".popup_inquiry .message_box" ).hide();
	$( ".popup_inquiry .enquiry_fields" ).show();
	$('#ea_alert_json').val(email_alert_json);
	$('#property_selector').val(id);
	$( ".hidden_form" ).dialog(
	{
		title : glang_pop_contact_agent,
		width: 430
	});
} */
function show_contact_agent_form(selector,email_alert_json,email_to_agent)
{
	var popUp = $(".hidden_form");
	popUp.find(".pv_frm_msgs").html("").hide();
	popUp.find(".message_box" ).hide();
	popUp.find(".enquiry_fields" ).show();
	popUp.find('#ea_alert_json').val(email_alert_json);
	popUp.find('#property_selector').val(selector);
	popUp.find('#email_to_agent').val(email_to_agent);
	
	var formAction = popUp.find('#hiddenAction1').val();//listing enquiry
	if( email_to_agent )
	{
		formAction = popUp.find('#hiddenAction2').val();//agent inquiry
		
	}
	popUp.find('form').attr("action",formAction);
	popUp.dialog(
	{
		title : glang_pop_contact_agent,
		width: 430
	});
}
function show_hide_box(obj,container)
{
	cat_id = obj.id.replace("id_","");
	if(container.style.height == "")
	{
		if (document.all) 
			container_div_height = container.offsetHeight;
		else
			container_div_height = container.clientHeight;
		
		container.style.height = container_div_height + "px";
	}
	if(obj.className == "hide_icon")
	{
		obj.className = "show_icon";
		$(".cat_box_type_div").css("border-bottom","none");
		$(container).animate({height:'toggle'},700);
		
	}
	else if(obj.className == "show_icon")
	{
		obj.className = "hide_icon";
		$(container).animate({height:'toggle'},700);
		$(".cat_box_type_div").css("border-bottom","2px solid #ECECEC");
	}
}
function submit_requirment()
{
	var params = { cat_info:category_info,subtype:$("#subtype").val(),alert_purpose:$("#purpose").val(),type:$("#type").val() };
	$.get(this_domain_ajax + "&tpl=property_category_submit_requirment.tpl&c=property_category_submit_requirment",params,function(str){
		$(".sub_req_call").html(str);
		$(".sub_req_call").dialog('open');
	});

}
$(document).ready(function(){
(function(){
		var tabs_list = [];
		var tab_parent = "#cattabs";
		var el_first_id = $("#cattabs li:first-child").attr("id");
		var el_last_id = $("#cattabs li:last-child").attr("id");
		var el_id_next = el_first_id;
		var el_id_prev = el_last_id;
		$(".cattabs_tabs").click(function()
		{
			$('#cat_text_blabel').html();
			var cat_text_lable=$(this).find('span a').html();			
			$('#cat_text_blabel').html(cat_text_lable + " Link(s):");
			var pid=$(this).attr("id");
			tab_parent = "#cattabs";
			$(".all_child").addClass("tab_hide");
			$(".child_content").removeClass("child_selected");
			$(".tab_content").addClass("tab_hide");
			$(".ptab_common").addClass("cattabs_tabs");
			$(".ptab_common").removeClass("selected");
			$("#"+pid).removeClass("cattabs_tabs");
			$("#"+pid).addClass("selected");
			$(".parent_"+pid).removeClass("tab_hide");
			var total_li=$(".parent_"+ pid +" li").size();			 
			total_li =total_li/2;
			if(total_li<1)
				$("#trans_links").hide();
			else
				$("#trans_links").show();
			if($("#tab_data_"+pid).length == 0)
			{
				var subtab_first = $(".parent_"+pid +" li:first-child").attr("id");
				$(".child_content").removeClass("child_selected");
				$(".tab_content").addClass("tab_hide");
				$("#tab_data_"+subtab_first).removeClass("tab_hide");
				$(".child-"+subtab_first).addClass("child_selected");
			}
			else
				$("#tab_data_"+pid).removeClass("tab_hide");
			if($("#" +pid).next().length != 0)
				el_id_next = $("#" +pid).next().attr("id");
			else
				el_id_next = el_first_id;
			if($("#" +pid).prev().length != 0)
				el_id_prev = $("#" +pid).prev().attr("id");
			else
				el_id_prev = el_last_id;
		});
		$(".child_content").click(function()
		{
			var tab_child = $(this).attr("class").replace(/(.+)-/,"");
			tab_child=tab_child.split(" ");
			tab_child =tab_child[0]; 
			tab_parent = ".sub_tab";
			if($(".child-" +tab_child).next().length != 0)
				el_id_next = $(".child-" +tab_child).next().attr("id");
			else
				el_id_next = $(".child-" +tab_child).parent().find("li:first-child").attr("id");
			if($(".child-" +tab_child).prev().length != 0)
				el_id_prev = $(".child-" +tab_child).prev().attr("id");
			else
				el_id_prev = $(".child-" +tab_child).parent().find("li:last-child").attr("id");;
			$(".child_content").removeClass("child_selected");
			$(".tab_content").addClass("tab_hide");
			$("#tab_data_"+tab_child).removeClass("tab_hide");
			$(".child-"+tab_child).addClass("child_selected");
		});
		$("#cattabs li:first-child").click();
		$(".right_tab_btn").click(function(){
			$(tab_parent).find("#" + el_id_next).click();
		});
		$(".left_tab_btn").click(function(){
			$(tab_parent).find("#" + el_id_prev).click();
		});
	})();
	
	$('.radio_login_type').live("change",function(event){
		if(this.value=="new")
		{
			$('#new_member_div').show();
			$('#old_member_div').hide();
		}
		else
		{
			$('#old_member_div').show();
			$('#new_member_div').hide();
		}
	}); 
});
function show_hide_box(ref){
	
	ctb_id = $(ref).attr('id');
	ctb_arr = ctb_id.split('_');
	if( ctb_arr[1] == 0 )
	{
		$(ref).html("close");
		$(ref).attr('id',''+ctb_arr[0]+'_1');
		$(".box_title").css('width','88%');
		$(".vl_lbl").css('display','none');
	}	
	$("#ajax_list").slideToggle('fast', 
	function(){
		/* var exdate=new Date();
		exdate.setDate(exdate.getDate()+60);
		$(ref).parent().parent().parent().remove();
		document.cookie="hide_cbox=1;expires="+exdate.toGMTString()+";path=/"; */
			 
		if( ctb_arr[1] == 1 )
		{
			$(ref).html("open");
			$(ref).attr('id',''+ctb_arr[0]+'_0');
			$(".box_title").css('width','77%');
			$(".vl_lbl").css('display','inline-block');
		}
		
		$.get(this_domain_ajax+'&c=ajax_hide_cat_box&hide_bx='+ctb_arr[1],'',''); 
	});
}
function show_mortgage_form(){
	//$("#bank").val(bk_id).change();
	$( ".lm_form" ).dialog({
		title : glang_pop_mhfc,
		width: 430
	});
}
$(document).ready(function(){
	
	/* SHOW MORTGAGE LINKS */
	
	$('.ls').live('mouseenter',function(){
		
		if($(this).find(".ls_vnum_main").length == 0 )
		{
			return;
		}
		else
		{
			var lm_l_child = $(this).find(".lm_l_child");
			var lm_l_id = $(this).find(".ls_vnum_main").attr('id');
			window.lm_li_arr  = lm_l_id.split('_');
			
			if(lm_l_child.length == 0)
			{
				$(this).append($(".lm_ttp").html()).find('.lm_main').addClass('lm_l_child').show();	
			}
			else
			{
				lm_l_child.show();
			}
		}	
	});
	$('.ls').live('mouseleave',function(){
		$(this).find(".lm_l_child").hide();
	});
	
	mortgage_form_send = 0;
	$('.mortgage_form').submit(function(){ 
	if (mortgage_form_send) return false;
	mortgage_form_send = 1;
	mortgage_form = $(this);
	var list_id = lm_li_arr[1];
	mortgage_form.find(".lm_waiting_img").show();
	mortgage_form.find(".send_mortgage").hide();
	//var pref_bnk = mortgage_form.find("#bank :selected").text();
	mortgage_form.find("#source_info").val(list_id);
	mortgage_form.find("#source_type").val('property');
	//$("#pref_bk_nme").val(pref_bnk);
	$.post(this_domain_ajax+'&c=ajax_mortgage_submit', mortgage_form.serialize(), function (str)
	{
		mortgage_form_send = 0;
		mortgage_form.find(".lm_waiting_img").hide();
		mortgage_form.find(".send_mortgage").show();
		mortgage_form.find(".lm_sh_msg").html(str).show();
		if( $(".ui-dialog .mortgage_form").length ) $(".lm_form").dialog("option","position","center");
	});
		return false;
});

	
	/* $(".send_mortgage").live('click',function(){
		$.post(this_domain_ajax+'&c=ajax_mortgage_submit','',function(str){
			$(".lm_sh_msg").html(str);
		});
	});	 */
});
//zoomyfy_common_params = "&zNavigatorVisible=1&zToolbarVisible=1&zClickZoom=1&zClickPan=1&zMousePan=1&zKeys=1&zInitialZoom=10";
//zoomyfy_common_params += "&zSkinPath="+paths.images+"/zoomyfy_skins/Default";
//zoomyfy_common_params += "&zWatermarkPath="+paths.images+"/common/zoomyfy_watermark.png";
$(document).ready(function()
{
	if( $(".society_map_box").length )
	{
		obj = $(".society_map_box");
		path = obj.attr("data-path");
		Z.showImage( obj[0].id, path, zoomyfy_common_params );
	}
	$( ".ea_success_pop" ).dialog({
	  width: 490,
	  dialogClass: "ui-dialog_orng bgw",
	  autoOpen: false
	});
});
$(".sb_pfield input").click(function(){
	var $rng_sl_val = parseInt($(this).val());
	if(isNaN($rng_sl_val))
		$(this).val("");
}); 


/* CODE FOR ALERT BANER */
function banner_alert_pop(ref)
{
	var alerts_email_add = $(ref).prev().children().val();
	if(alerts_email_add==undefined)
		alerts_email_add = $(ref).prev().val();
	var alerts_email_source = $(ref).attr("id");
	
	/* $('#ea_success_pop').html("<div class='p_tl pop_v'>&nbsp;</div>"
	+"<div class='p_tm pop_h'>"
		+"<div class='p_ml pop_v'>"
			+"<div class='p_mr pop_v'>"
				+"<div class='p_bm pop_h'>"
					+"<div class='img_load'>"
						+"<div id='ea_message' style='display:none;margin-bottom:20px;'>&nbsp;</div>"
						+"<div style='background:#FFFFFF;width:450px;'>"
							+"<a class='close' style='right:-31px;'></a>"
							+"<div class='ea_main_msg' style='padding:10px 10px 15px;'><center><img src='"+byt_loading+"' alt='Loading...'/></center></div>"
						+"</div>"
					+"</div>"
					+"<div class='p_br pop_v'>&nbsp;</div>"
				+"</div>"
			+"</div>"
		+"</div>"
	+"</div>"
	+"<div class='p_tr pop_v'>&nbsp;</div>"
	+"<div class='p_bl pop_v'>&nbsp;</div>"); 
	
	if(typeof alert_pop_api == 'undefined')
	{
		alert_pop_api = $('#ea_success_pop').overlay({effect: 'default',fixed:false, mask: {color:'#000000',loadSpeed:0,opacity: 0.5}}).data('overlay');
	}
	alert_pop_api.load();
	*/
	$.get(this_domain_ajax+'&c=ajax_add_alerts_zameen&ea_alert_json='+ea_alert_pop_json+'&alerts_email_add='+alerts_email_add+'&action=view&ea_source='+alerts_email_source,'',function(str){
		$('.ea_success_pop').html(str);
		email_alerts_events(str,alerts_email_add);
	});
	$( ".ea_success_pop" ).dialog('open');
}
$('.list_alert_btn,.view_alert_btn').live('click',function(){
	banner_alert_pop(this);
});
var fsb_menu;
var fsb_flag = 0;
var fsb_in_flg = 1;

$("#tab_city").mouseenter(function(){
		//alert('mouse in city');
		fsb_in_flg = 1;
	});
$('.stp_hde').click(function(){

	fsb_in_flg = 1;
});
$("#sb_sel_area").click(function(){
	fsb_in_flg = 1;
});
$('.stp_hde').hover(function(){

	fsb_in_flg = 1;
});
$(".fsb_tab").mouseenter(function(){
	fsb_in_flg = 1;
});

$(".fsb_tab").mouseleave(function(){
	fsb_in_flg = 0;
});	
var fsb_elf = false;	
$('document').ready(function(){

	$(".fsb_tab").live('click',function(){
		
		//$(".fsb_tab").css("background","#F3F1F2");
		$(".fsb_tab").removeAttr('style');
		$(".sb_seprator").css("box-shadow","-1px 0 0 0 #FFFFFF");
		$(".fsb_tab").not($(this)).children(".fsb_tab_title").next().css('display','none');
		
		fsb_menu = $(this);
		fsb_menu.css("background","#FFFFFF");
		$(".fsb_arw").css('display','inline-block');
		$(this).next(".sb_seprator").css("box-shadow","0 0 0 0 #F5F5F5");
		if($(this).prev(".sb_seprator").length > 0)
		{
			$(this).prev(".sb_seprator").css("box-shadow","0 0 0 0 #F5F5F5");
		}
		fsb_menu.children(".fsb_tab_title").next().css('display','block');
		$(fsb_menu).find(".fsb_arw").css('display','none');
		
		fsb_flag = 1;
	});
	 $("body").live('click',function(){
	 
		//setTimeout(function(){
			
			if(fsb_flag && fsb_in_flg == 0 && !$(".filter_price_box").is(":visible") && !$(".as-results").is(":visible"))
			{
				//alert('in mouse up');
				fsb_flag = 0;
				//fsb_menu.css("background","#F3F1F2");
				fsb_menu.removeAttr('style');
				fsb_menu.next(".sb_seprator").css("box-shadow","-1px 0 0 0 #FFFFFF");
				if(fsb_menu.prev(".sb_seprator").length > 0)
				{
					fsb_menu.prev(".sb_seprator").css("box-shadow","-1px 0 0 0 #FFFFFF");
				}
				fsb_menu.children(".fsb_tab_title").next().css('display','none');
				$(fsb_menu).find(".fsb_arw").css('display','inline-block');
			}
			if( $(d_min).length > 0 )
			{
				$("#price_1").tooltip("close");
				$("#price_2").tooltip("close");
			}
			if( $(a_min).length > 0 )
			{
				$("#area_1").tooltip("close");
				$("#area_2").tooltip("close");
			}
		
		//},1);
	});
	if($("#fsb_holder").length > 0)
	{
		$(window).scroll(function(){
			var fsb_stp = $(window).scrollTop();
			/* if($(".p_settings").is(":visible"))
			{
				$(".p_settings").dialog("close");
			}
			else if($(".a_settings").is(":visible"))
			{
				$(".a_settings").dialog("close");
			} */
			if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) 
			{	
				$(".fsb_al_btn").addClass('fsb_al_btn_saf');
			}
			if( fsb_stp >= (fsb_hpos.top) )
			{
				$("#results_filters").css('width','100%');
				$("#results_filters").css('position','fixed');
				$("#results_filters").css('top','0');
				$("#results_filters").css('left','0');
				$(".fsb_h_logo").css('display','block');
				$(".fsb_al_btn").css('display','inline-block');
			}
			else
			{
				$("#results_filters").css('width','960');
				$("#results_filters").css('position','absolute');
				$("#results_filters").css("top",fsb_hpos.top);
				$("#results_filters").css("left",fsb_hpos.left);
				$(".fsb_h_logo, .fsb_al_btn").css('display','none');
			}
			if( $(d_min).length > 0 )
			{
				$("#price_1").tooltip("close");
				$("#price_2").tooltip("close");
			}
			if( $(a_min).length > 0 )
			{
				$("#area_1").tooltip("close");
				$("#area_2").tooltip("close");
			}
		});
	}
	$(".fsb_al_btn").live('click',function(){
		$('.apl_igp').dialog('open');
	});
	
	/* LOAD TAB TEXT */
	
	/* TYPE TEXT */
	$("#tab_type").live('change',function(){
		$("#fsb_type_tXt").html($("#tab_type option:selected").text());
	});
	$("#tab_purpose").live('change',function(){
		$("#fsb_purp_tXt").html($("#tab_purpose option:selected").text());
	});
	
	/* CATEGORY TEXT */
	/* $("#as-selections-tab_cat_id").live('change',function(){
		//$("#tab_cat_id").trigger('change');
	}); */
	
	$("#tab_cat_id").live('change',function(){
		var fsb_loc_id = $("#tab_cat_id").val();
		var fsb_city_id = $("#tab_city").val();
		fsb_loc_id = fsb_loc_id.split(",");
		if(fsb_loc_id == "")
		{
			if(fsb_elf)
			{
				$("#fsb_loc_txt").html($("#tab_city option:selected").text());
			}	
		}
		else
		{
			fsb_elf = true;
			var fsb_mul_loc_count = fsb_loc_id.length - 1;
			if( fsb_mul_loc_count > 1 )
			{
				$("#fsb_loc_txt").html(fsb_mul_loc_count+" "+glang_loc_selected);
			}	
			else
			{
				var fsb_locality_data = get_loc_data(fsb_loc_id[0],fsb_city_id);
				
				if(fsb_locality_data[1].length > 35)
				{
					fsb_locality_data[1] = fsb_locality_data[1].substring(0,35)+"...";
				}	
				$("#fsb_loc_txt").html(fsb_locality_data[1]);
			}	
		}
	});
	/* PRICE AND AREA TEXT */
	$("#tab_price").live('change',function(){
		var fsb_price_str = $(this).val();
		var fsb_price_arr = fsb_price_str.split("_");
		var fsb_price_to=" ";
		var fsb_price_txt="";
		
		if(typeof(fsb_price_arr[0]) == 'undefined' || fsb_price_arr[0] == "" || isNaN(fsb_price_arr[0]))
		{
			fsb_price_arr[0] = 0;
		}
		if(typeof(fsb_price_arr[1]) == 'undefined' || fsb_price_arr[1] == "" || isNaN(fsb_price_arr[1]) )
		{
			fsb_price_arr[1] = 0;
		}
		if( fsb_price_arr[1] > 0 )
		{
			if(fsb_price_arr[0] > 0)
				fsb_price_to = " "+glang_to_text+" "+fsb_price_arr[1]+" ";
			else	
				fsb_price_to = fsb_price_arr[1]+" ";
		}	
		
		if( fsb_price_arr[0] > 0 )
		{
			fsb_price_txt = fsb_price_arr[0]+fsb_price_to+glang_pkr_text;
			if(fsb_price_to == " ")
				fsb_price_txt = glang_min_text+fsb_price_arr[0]+fsb_price_to+glang_pkr_text;
		}	
		
		else if( fsb_price_arr[0] == 0 && fsb_price_arr[1] > 0 )
			fsb_price_txt = glang_max_text+fsb_price_to+' '+glang_pkr_text;
		
		if(fsb_price_txt.length > 24)
		{
			fsb_price_txt = fsb_price_txt.substring(0,20)+"...";
		}
		
		if( fsb_price_arr[0] > 0 || fsb_price_arr[1] > 0)
		{
			$("#fsb_price_tXt").css('display','block');
			$("#fsb_price_tXt").html(fsb_price_txt);
		}
		else
		{
			$("#fsb_price_tXt").css('display','none');
			$("#fsb_price_tXt").html('');
		}
	});
	$("#tab_sqft").live('change',function(){
		var fsb_area_str = $(this).val();
		var fsb_area_arr = fsb_area_str.split("_");
		var fsb_area_to ="";
		var fsb_area_txt;
		
		if(typeof(fsb_area_arr[0]) == 'undefined' || fsb_area_arr[0] == "" || isNaN(fsb_area_arr[0]))
		{
			fsb_area_arr[0] = 0;
		}
		if(typeof(fsb_area_arr[1]) == 'undefined' || fsb_area_arr[1] == "" || isNaN(fsb_area_arr[1]) )
		{
			fsb_area_arr[1] = 0;
		}
		if( fsb_area_arr[1] > 0 )
		{
			if( fsb_area_arr[0] > 0 )
				fsb_area_to = " "+glang_to_text+" "+fsb_area_arr[1];
			else	
				fsb_area_to = glang_max_text+fsb_area_arr[1];
		}	
		
		if( fsb_area_arr[0] > 0 )
		{
			fsb_area_txt = fsb_area_arr[0]+fsb_area_to;
			if( fsb_area_arr[1] == 0 )
				fsb_area_txt = glang_min_text+fsb_area_txt;
		}	
		else	
			fsb_area_txt = fsb_area_to;
		
		if(fsb_area_txt.length > 14)
		{
			fsb_area_txt = fsb_area_txt.substring(0,20)+"...";
		}
		
		if(fsb_area_arr[0] > 0 || fsb_area_arr[1] > 0)
		{
			$("#fsb_area_tXt").css('display','block');
			$("#fsb_area_tXt").html(fsb_area_txt+"<span id='fsb_a_unit' style='display:inline;'> "+$("#sb_sel_area option:selected").text()+"</span>");
		}
		else
		{
			$("#fsb_area_tXt").css('display','none');
			$("#fsb_area_tXt").html('');
		}
	});
	/* BEDS AND BATH TEXT */
	$("#tab_beds").live('change',function(){
		var fsb_bed_str = $(this).val();
		var fsb_bed_arr = fsb_bed_str.split("_");
		var fsb_bed_to =" ";
		var fsb_bed_txt;
		
		if(typeof(fsb_bed_arr[0]) == 'undefined' || fsb_bed_arr[0] == "" || isNaN(fsb_bed_arr[0]))
		{
			fsb_bed_arr[0] = 0;
		}
		if(typeof(fsb_bed_arr[1]) == 'undefined' || fsb_bed_arr[1] == "" || isNaN(fsb_bed_arr[1]) )
		{
			fsb_bed_arr[1] = 0;
		}
		if( fsb_bed_arr[1] > 0 )
		{
			fsb_bed_to = " "+glang_to_text+" "+fsb_bed_arr[1]+" ";
		}
		
		
		if(fsb_bed_arr[0] == -1)
			fsb_bed_txt = glang_studio_text+fsb_bed_to+glang_beds_text;
		else
			fsb_bed_txt = fsb_bed_arr[0]+fsb_bed_to+glang_beds_text;
		
		if(fsb_bed_txt.length > 24)
		{
			fsb_bed_txt = fsb_bed_txt.substring(0,20)+"...";
		}
		
		if( fsb_bed_arr[0] > 0 || fsb_bed_arr[0] == -1 )
		{
			$("#fsb_bed_txt").css('display','block');
			$("#fsb_bed_txt").html(fsb_bed_txt);
		}
		else
		{
			$("#fsb_bed_txt").css('display','none');
			$("#fsb_bed_txt").html('');
		}
	});
	$("#tab_baths").live('change',function(){
		var fsb_bath_str = $(this).val();
		var fsb_bath_arr = fsb_bath_str.split("_");
		var fsb_bath_to;
		var fsb_bath_txt;
		
		if(typeof(fsb_bath_arr[0]) == 'undefined' || fsb_bath_arr[0] == "" || isNaN(fsb_bath_arr[0]))
		{
			fsb_bath_arr[0] = 0;
		}
		if(typeof(fsb_bath_arr[1]) == 'undefined' || fsb_bath_arr[1] == "" || isNaN(fsb_bath_arr[1]) )
		{
			fsb_bath_arr[1] = 0;
		}
		if( fsb_bath_arr[1] > 0 )
		{
			fsb_bath_to = " "+glang_to_text+" "+fsb_bath_arr[1]+" ";
		}
		
		fsb_bath_txt = fsb_bath_arr[0]+fsb_bath_to+glang_baths_text;
		
		if(fsb_bath_txt.length > 24)
		{
			fsb_bath_txt = fsb_bath_txt.substring(0,20)+"...";
		}
		
		if(fsb_bath_arr[0] > 0 )
		{
			$("#fsb_bath_txt").css('display','block');
			$("#fsb_bath_txt").html(fsb_bath_txt);
		}
		else
		{
			$("#fsb_bath_txt").css('display','none');
			$("#fsb_bath_txt").html('');
		}
	});
	$("#keywords").live('keyup',function(){
		var fsb_kywd_str = $(this).val();
		var fsb_kywd_txt;
		
		if(fsb_kywd_str.length > 35)
		{
			fsb_kywd_txt = fsb_kywd_str.substring(0,35)+"...";
		}
		else
			fsb_kywd_txt = fsb_kywd_str;
			
		$("#fsb_kywd_txt").css('display','block');
		$("#fsb_kywd_txt").html(fsb_kywd_txt);	
	});
	/* Agent TEXT */
	$("#agentid_input").live('blur',function(){
		$("#agentid").trigger('change');
	});
	$("#agentid").live('change',function(){
		var fsb_agent_id = $("#agentid").val();
		if(fsb_agent_id == "")
		{
			$("#fsb_agent_txt").html("");
		}
		else
		{
			fsb_agent_id = fsb_agent_id.split(",");
			var fsb_mul_agent_count = fsb_agent_id.length - 1;
			if( fsb_mul_agent_count > 1 )
			{
				$("#fsb_agent_txt").html(fsb_mul_agent_count+" "+glang_agen_selected);
			}	
			else
			{
				var fsb_agent_data = get_agent_data(fsb_agent_id[0]);
				
				if(fsb_agent_data[1].length > 24)
				{
					fsb_agent_data[1] = fsb_agent_data[1].substring(0,24)+"...";
				}	
				$("#fsb_agent_txt").css('display','block');
				$("#fsb_agent_txt").html(fsb_agent_data[1]);
			}	
		}
	});
		
/*  ============== For Sort combo ===== */
	$(".fsb_tab").on('click', '.cl_chk_bx', function(){		
		if($(this).hasClass("classif_lsit_unchk")){
			$(this).removeClass("classif_lsit_unchk");
			$(this).addClass("classif_lsit_chk");
			$(this).children().attr("checked", true).val('1');
		}
		else{
			$(this).removeClass("classif_lsit_chk");
			$(this).addClass("classif_lsit_unchk");
			$(this).children().attr("checked", false).val('');
		} 
	});
	/* OWNERSHIP TEXT */
	$("#ownership").live('change',function(){
		fsb_chk_more_counter();
	});
	$("#occupancy").live('change',function(){
		fsb_chk_more_counter();
	});
	$("#finance").live('change',function(){
		fsb_chk_more_counter();
	});
	$("#addin").live('change',function(){
		fsb_chk_more_counter();
	});	
	$("#view_sale").live('change',function(){
		fsb_chk_more_counter();
	});	
	$("document").ready(function(){
		$(".cl_chk_bx").live('click',function(){
			fsb_chk_more_counter();
		});	
	});
	$("document").ready(function(){
		$("#filter").live('click',function(){
			fsb_chk_more_counter();
		});	
	});
	$("document").ready(function(){
		fsb_chk_more_counter();
	});
});
function fsb_chk_more_counter()
{
	var fsb_more_val_counter =  0;
//	console.log(parseInt($("#ownership").val()));
	if( parseInt($("#ownership").val()) || isNaN($("#ownership").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#occupancy").val()) || isNaN($("#occupancy").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#finance").val()) || isNaN($("#finance").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#addin").val()) || isNaN($("#addin").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#view_sale").val()) || isNaN($("#view_sale").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#verified").val()) || isNaN($("#verified").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#hot").val()) || isNaN($("#hot").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#videos").val()) || isNaN($("#videos").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#picture").val()) || isNaN($("#picture").val()) )
		fsb_more_val_counter++;
	if( parseInt($("#titanium_agent").val()) || isNaN($("#titanium_agent").val()) )
		fsb_more_val_counter++;
		
	if(fsb_more_val_counter > 0 )
	{
		$("#fsb_mre_opt_txt").css('display','block');
		if(fsb_more_val_counter > 1 )
			$("#fsb_mre_opt_txt").html(fsb_more_val_counter+glang_options_selected);
		else
			$("#fsb_mre_opt_txt").html(fsb_more_val_counter+glang_option_selected);
	}	
}
function ls_phone_view_click(obj,selector,userid,contact_info_ob,purpose)
{
	if(!window.logged_in && !window.session_in)
	{
		show_popup_login_minimal(0, { minimal : 1, button_selector : "#v_"+selector } , function(){
			ls_phone_view_click(obj,selector,userid,contact_info_ob);
		});
		return;
	}
	$("#v_" + selector).hide();
	$("#s_" + selector).show();
	$.get(this_domain_ajax+"&c=phone_view_recording&selector="+selector);
	//$.get(this_domain_ajax+'&c=ajax_add_alerts_zameen&ea_alert_json='+window.ea_alert_pop_json+'&action=view&ea_source=Listings - Phone View');
	if(purpose=="1")
	{
		adconv_contact_btn(userid,'PhoneView','Phone_Buy',selector);
	}
	else if(purpose=="2")
	{
		adconv_contact_btn(userid,'PhoneView','Phone_Rent',selector);
	}
        criteo_call_send_transaction = 0;
	criteo_transaction_call(2); // 1: Email, 2: Phone
	showtooltip(I('bgc'+selector),contact_info_ob);
}

function ls_np_view_click(btn,development_id,userid,contact_info_ob, purpose)
{
	$('#phone_'+development_id).show();
	$(btn).hide();
	$.get(this_domain_ajax+"&c=phone_view_recording&development_id="+development_id);
        if(purpose=="1")
	{
		adconv_contact_btn(userid,'PhoneView','Phone_Buy');
	}
	else if(purpose=="2")
	{
		adconv_contact_btn(userid,'PhoneView','Phone_Rent');
	}
        criteo_call_send_transaction = 0;
	criteo_transaction_call(2); // 1: Email, 2: Phone
	showtooltip(I('icon_i_np'+development_id),contact_info_ob);	
}

function show_inquiry_form(dev_id)
{
	//np_form = $(".enquiry_form");
	np_form = $( "#np_enquiry_form" ).dialog( { title : glang_send_email, width: 470 });
	np_form.find( ".enquiry_fields" ).show();
	np_form.find( "input[name=development_id]" ).val(dev_id);
	np_form.find( "input[name=stepvalue]" ).val( 0 );
	np_form.find( "input[name=email_stats_id]" ).val( "" );
	np_form.find( "input[name=lead_source]" ).val( "" );
	np_form.find( ".message_box" ).hide();
	$(".enquiry_form fieldset").hide();
	$("fieldset.fieldsetMain").show();
	$( "#enquiry_form" ).dialog( { title : glang_send_email, width: 470 });
}

var old_source_span = $();
function source_onchange(obj,pid)
{
	var value = $(obj).val();
//	$("#lead_source").val( value );
	$( "input[name=lead_source]" ).val( value );
	if( pid == 0 )
	{
		old_source_span.hide();
		old_source_span = $("#source_span_"+value).show();	
	}
}

enquiry_send = 0;
$("document").ready(function()
{
	$('.enquiry_form').submit(function(){ 
		if (enquiry_send) return false;
		form = $(this);
		stepvalue = parseInt(form.find("input[name=stepvalue]").val());
		enquiry_send = 1;
		$(".popup_inquiry input[name=view_from]").val("listing");
		form.find(".waiting_image").show();
		form.find(".submit").hide();
		$.post(form.attr("action"), form.serialize(), function (result)
		{
			enquiry_send = 0;
			form.find(".waiting_image").hide();
			form.find(".submit").show();
			form.find(".message_box").show().html(result.html);
			form.find("input[type=text]:visible:first").focus();
			if(result.reload_captcha) reload_captcha( form.find(".captcha_image") );
			form.find("input[name=stepvalue]").val( result.goto_step );
			form.find("fieldset").hide().eq(result.goto_step).show();
			if(result.status=="success")
			{
				form.find("input[name=email_stats_id]").val( result.email_stats_id );
				form.find("input[type=text]").val("");
				dataLayer.push({'event': "Email"});
                                criteo_transaction_call(1);
			}
			$("#np_enquiry_form.ui-dialog-content").dialog("option","position","center");
		});
		return false;
	});
});
// BY Devii for Details in Super
$("document").ready(function(){
	$(".mega_hot_container").mouseenter(function(){	
		$(this).find(".ls_vdet_main").show();
	});
	$(".mega_hot_container").mouseleave(function(){
		$(this).find(".ls_vdet_main").hide();
	});
});

function show_popup_3d_player(video_link,heading)
{
	video_link = $.trim(video_link);
	if(video_link.indexOf('matterport.com') > -1)
		video_link += "&play=1";
	html = '<iframe width="780" height="585" src="'+video_link+'" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
	cdialog = $("<div>").dialog({ width:806,height:650,title:heading}).html(html);
}