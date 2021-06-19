 /*
 * AutoSuggest
 * Copyright 2009-2010 Drew Wilson
 * www.drewwilson.com
 * code.drewwilson.com/entry/autosuggest-jquery-plugin
 *
 * Version 1.4   -   Updated: Mar. 23, 2010
 *
 * This Plug-In will auto-complete or auto-suggest completed search queries
 * for you as you type. You can add multiple selections and remove them on
 * the fly. It supports keybord navigation (UP + DOWN + RETURN), as well
 * as multiple AutoSuggest fields on the same page.
 *
 * Inspied by the Autocomplete plugin by: Jšrn Zaefferer
 * and the Facelist plugin by: Ian Tearle (iantearle.com)
 *
 * This AutoSuggest jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

function get_custom_alg_filters(alg_params)
{
	var nFilters = [ alg_params.numericFilters ];

	if( window.EXCLUDE_CATIDS )
	{
		for( key in EXCLUDE_CATIDS ) 
		{
			cat_ids = EXCLUDE_CATIDS[key].split(",");
			for( i in cat_ids ) 
			{
				cat_id = cat_ids[i];
				if( cat_id )
				{
					nFilters.push( key + "!=" + cat_id );
				}
			}
		}
	}
	return nFilters;
}

(function($){
	$.fn.autoSuggest = function(data, options) 
	{
		var defaults = { 
			asHtmlID: false,
			startText: "Enter Name Here",
			emptyText: glang_autoSuggest_emptyText,
			showEmptyText: 1,
			preFill: {},
			limitText: glang_autoSuggest_limitText,
			selectedItemProp: "1", //name of object property
			selectedValuesProp: "0", //name of object property
			searchObjProps: "1", //comma separated list of object property names
			queryParam: "q",
			retrieveLimit: false, //number for 'limit' param on ajax request
			extraParams: "",
			matchCase: false,
			minChars: 2,
			keyDelay: 400,
			resultsHighlight: true,
			neverSubmit: false,
			selectionLimit:false,
			showResultList: true,
		  	start: function(){},
		  	selectionClick: function(elem){},
		  	selectionAdded: function(elem){},
		  	onChange: function(elem){},
		  	selectionRemoved: function(elem){ elem.remove(); },
		  	formatList: false, //callback function
		  	beforeRetrieve: function(string){ return string; },
		  	retrieveComplete: function(data){ return data; },
		  	resultClick: function(data){},
		  	resultsComplete: function(){},
			datasource : "category" //custom property
	  	};  
	 	var opts = $.extend(defaults, options);	 	
		
		//var d_type = "object";
		var d_type = typeof data;
		var d_count = 0;
		if(d_type == "string") 
		{
			d_type = "string";
			var req_string = data;
		}
		else if(d_type == "object") 
		{
			var org_data = data;
			for (k in data) if (data.hasOwnProperty(k)) d_count++;
		}
		var useAlgolia = 0;
		if(data === "algolia") 
			useAlgolia = 1;
		
		if((d_type == "object" && d_count > 0) || d_type == "string" || d_type == "function" ){
			return this.each(function(x){
				x = this.id.replace("_input","");
				opts.start.call(this);
				var input = $(this);
				input.attr("autocomplete","off").addClass("as-input");
				var input_focus = false;
				
				// Setup basic elements and render them to the DOM
				input.wrap('<ul class="as-selections" id="as-selections-'+x+'"></ul>').wrap('<li class="as-original" id="as-original-'+x+'"></li>');
				var selections_holder = $("#as-selections-"+x);
				var org_li = $("#as-original-"+x);				
				var results_holder = $('<div class="as-results" id="as-results-'+x+'"></div>').hide();
				var results_ul =  $('<ul class="as-list"></ul>');
				var values_input = $('<input type="hidden" name="'+x+'" id="'+x+'" />');
				var prefill_value = "";
				
				var data_value = input.attr("data-value") || "";
				var data_text = input.attr("data-text") || "";
				
				if( data_value == "" && data_text != "" )
				{
					input.val( data_text );
				}
				else if( data_value == "" && data_text == "" )
				{
					input.val(opts.startText);
				}
					
				
				if( useAlgolia == 1 && input.attr("data-value"))//automatically from algolia
				{
					window.algolia_client = window.algolia_client || algoliasearch(algolia_applicationID, algolia_apiKey);
					var index = algolia_client.initIndex( opts.indexName );
					var sel_vals = input.attr("data-value").split(",");
					for( arr_index in sel_vals )
					{
						var single_val = sel_vals[arr_index];
						if( single_val == "" || typeof single_val == "function" ) continue;
						var numericFilters = opts.selectedValuesProp + "=" + single_val;
						index.search( { "numericFilters" : numericFilters}
						).then(function search_Success(response)
						{
							data = response.hits[0];
							if( data != undefined && input.attr("data-value") )
							{
								add_selected_item(data, "000"+arr_index,1);	
							}
						}).catch(function searchError(err) { });
					}
				}
				else if(typeof opts.preFill.length == "undefined" && input.attr("data-value"))//automatically use data-value to autofill
				{
					data_handler(data);
				}
				else if( typeof opts.preFill == "function" && typeof input.attr("data-value") != 'undefined' )
				{
					opts.preFill.call(input,data_handler,opts);
				}
				else if(typeof opts.preFill == "string")
				{
					var vals = opts.preFill.split(",");					
					for(var i=0; i < vals.length; i++){
						var v_data = {};
						v_data[opts.selectedValuesProp] = vals[i];
						if(vals[i] != ""){
							add_selected_item(v_data, "000"+i,0);	
						}		
					}
					prefill_value = opts.preFill;
				} 
				else 
				{
					prefill_value = "";
					var prefill_count = 0;
					for (k in opts.preFill) if (opts.preFill.hasOwnProperty(k)) prefill_count++;
					if(prefill_count > 0){
						for(var i=0; i < prefill_count; i++){
							var new_v = opts.preFill[i][opts.selectedValuesProp];
							if(new_v == undefined){ new_v = ""; }
							prefill_value = prefill_value+new_v+",";
							if(new_v != ""){
								add_selected_item(opts.preFill[i], "000"+i,0);	
							}		
						}
					}
				}
				if(prefill_value != ""){
					input.val("");
					var lastChar = prefill_value.substring(prefill_value.length-1);
					if(lastChar != ","){ prefill_value = prefill_value+","; }
					values_input.val(","+prefill_value);
					$("li.as-selection-item", selections_holder).addClass("blur").removeClass("selected");
				}
				input.after(values_input);
				selections_holder.click(function(){
					if(input.is(":disabled"))return;
					input_focus = true;
					input.focus();
				}).mousedown(function(){ input_focus = false; }).after(results_holder);	

				var timeout = null;
				var prev = "";
				var totalSelections = 0;
				var tab_press = false;
				
				var blur_origional = function(){
					if($(this).val() == "" && values_input.val() == "" && prefill_value == ""){
						$(this).val(opts.startText);
					} else if(input_focus){
						$("li.as-selection-item", selections_holder).addClass("blur").removeClass("selected");
						results_holder.hide();
					}
				};
				var mouseOverMenu = 0;
				results_holder.hover(
					function(){ mouseOverMenu = 1; },
					function(){ mouseOverMenu = 0; }
				);
				
				// Handle input field events
				input.focus(function(){
					if($(this).val() == opts.startText && values_input.val() == ""){
						$(this).val("");
					} else if(input_focus){
						$("li.as-selection-item", selections_holder).removeClass("blur");
						if($(this).val() != ""){
							results_ul.css("width",selections_holder.outerWidth());
							//results_holder.show();
						}
					}
					input_focus = true;
					return true;
				})
				.blur(function(){
					if( input_focus && mouseOverMenu && results_holder.is(":visible") )
					{
						setTimeout(function(){ input.focus(); }, 300);
						return;
					}
					blur_origional.call(this);
				})
				.keydown(function(e) {
					// track last key pressed
					lastKeyPressCode = e.keyCode;
					first_focus = false;
					switch(e.keyCode) {
						case 38: // up
							e.preventDefault();
							moveSelection("up");
							break;
						case 40: // down
							e.preventDefault();
							moveSelection("down");
							break;
						case 8:  // delete
							if(input.val() == ""){							
								var last = values_input.val().split(",");
								last = last[last.length - 2];
								selections_holder.children().not(org_li.prev()).removeClass("selected");
								if(org_li.prev().hasClass("selected")){
									values_input.val(values_input.val().replace(","+last+",",","));
									opts.selectionRemoved.call(this, org_li.prev());
									opts.onChange.call(this, values_input.val());
								} else {
									opts.selectionClick.call(this, org_li.prev());
									org_li.prev().addClass("selected");		
								}
							}
							if(input.val().length == 1){
								results_holder.hide();
								 prev = "";
							}
							if($(":visible",results_holder).length > 0){
								if (timeout){ clearTimeout(timeout); }
								timeout = setTimeout(function(){ keyChange(); }, opts.keyDelay);
							}
							break;

						case 13: // return
							tab_press = false;
							var active = $("li.active:first", results_holder);
							if(active.length > 0){
								active.click();
								results_holder.hide();
							}
							if(opts.neverSubmit || active.length > 0){
								e.preventDefault();
							}
							break;
						default:
							if(opts.showResultList){
								if(opts.selectionLimit && $("li.as-selection-item", selections_holder).length >= opts.selectionLimit){
									results_ul.html('<li class="as-message">'+opts.limitText+'</li>');
									results_holder.show();
								} else {
									if (timeout){ clearTimeout(timeout); }
									timeout = setTimeout(function(){ keyChange(); }, opts.keyDelay);
								}
							}
							break;
					}
				});
				
				function data_handler(data_array)
				{
					vals = input.attr("data-value").split(",");
					for(r = 0; r < vals.length; r++)
					{
						for(var i = 0; i < data_array.length; i++)
						{
							if(vals[r] == data_array[i][opts.selectedValuesProp])
							{
								add_selected_item(data_array[i], "000"+i,0);
								break;
							}
						}
					}
					prefill_count = data.length;
				}
				function keyChange() {
					// ignore if the following keys are pressed: [del] [shift] [capslock]
					if( lastKeyPressCode == 46 || (lastKeyPressCode > 8 && lastKeyPressCode < 32) ){ return results_holder.hide(); }
					var string = input.val().replace(/[\\]+|[\/]+/g,"");
					if (string == prev) return;
					prev = string;

					if (string.length >= opts.minChars) 
					{
						selections_holder.addClass("loading");
						if(d_type == "function")
						{
							new_data = data.call(this,opts);
							d_count = new_data.length;
							processData(new_data, string); 
						}
						else if(useAlgolia)
						{
							window.algolia_client = window.algolia_client || algoliasearch(algolia_applicationID, algolia_apiKey);
							var index = algolia_client.initIndex( opts.indexName );
							var alg_params = {};
							alg_params.query = string;
							if( opts.numericFilters )
								alg_params.numericFilters = opts.numericFilters();
							alg_params.hitsPerPage = opts.hitsPerPage || 12;

							alg_params.numericFilters = get_custom_alg_filters( alg_params );
							index.search( alg_params ).then(function search_Success(response) 
							{
								//if( response.nbHits > 0 )
								{
									d_count = response.hits.length;
									processData(response.hits, string); 
								}
							}).catch(function searchError(err) { });
						} 
						else if(d_type == "string")
						{
							var limit = "";
							if(opts.retrieveLimit){
								limit = "&limit="+encodeURIComponent(opts.retrieveLimit);
							}
							if(opts.beforeRetrieve){
								string = opts.beforeRetrieve.call(this, string);
							}
							$.getJSON(req_string+"?"+opts.queryParam+"="+encodeURIComponent(string)+limit+opts.extraParams, function(data){ 
								d_count = 0;
								var new_data = opts.retrieveComplete.call(this, data);
								for (k in new_data) if (new_data.hasOwnProperty(k)) d_count++;
								processData(new_data, string); 
							});
						} 
						else //object param
						{
							if(opts.beforeRetrieve){
								string = opts.beforeRetrieve.call(this, string);
							}
							processData(org_data, string);
						}
					} else {
						selections_holder.removeClass("loading");
						results_holder.hide();
					}
				}
				var num_count = 0;
				function processData(data, query)
				{
					if (!opts.matchCase){ query = query.toLowerCase(); }
					var matchCount = 0;
					results_holder.html(results_ul.html("")).hide();
					for(var i=0;i<d_count;i++)
					{
						var num = i;
						num_count++;
						var forward = false;
						
						if( useAlgolia )//if algolia do not match and search
						{
							forward = true;
						}
						else
						{
							if(opts.searchObjProps == "value") {
								var str = data[num].value;
							} else {	
								var str = "";
								var names = opts.searchObjProps.split(",");
								for(var y=0;y<names.length;y++){
									var name = $.trim(names[y]);
									str = str+data[num][name]+" ";
								}
							}
							if(str){
								if (!opts.matchCase){ str = str.toLowerCase(); }
								if(str.search(query) != -1 && values_input.val().search(","+data[num][opts.selectedValuesProp]+",") == -1){
									forward = true;
								}	
							}
						}
						

						if(forward)
						{
							var formatted = $('<li class="as-result-item '+window.typing_lang+'" id="as-result-item-'+num+'"></li>').click(function(){
									var raw_data = $(this).data("data");
									var number = raw_data.num;
									
									
									
									if($("#as-selection-"+number, selections_holder).length <= 0 && !tab_press){
										var data = raw_data.attributes;
										
										results_holder.hide();
										
										input.val("").focus();
										prev = "";
										add_selected_item(data, number,0);
										opts.resultClick.call(this, raw_data);
										//results_holder.hide();
									}
									tab_press = false;
								}).mousedown(function(){ input_focus = false; }).mouseover(function(){
									$("li", results_ul).removeClass("active");
									$(this).addClass("active");
								}).data("data",{attributes: data[num], num: num_count});
							
							var this_data = $.extend({},data[num]);
							
							if( opts.template )
							{
								_html = opts.template(this_data);
								formatted = formatted.html( _html );
							}
							else if( useAlgolia )
							{
								var _lang = window.typing_lang || window.gbl_lang;
								//pick up dictionary value if found ie title => { en : "" , ur : "" }
								var obj = this_data['_highlightResult'][opts.selectedItemProp][_lang];
								if( typeof obj == "object" )
									_html = obj['value'];
								else
									_html = this_data['_highlightResult'][opts.selectedItemProp]['value'];
								formatted = formatted.html( _html );
							}
							else
							{
								if (!opts.matchCase){ 
									var regx = new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + query + ")(?![^<>]*>)(?![^&;]+;)", "gi");
								} else {
									var regx = new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + query + ")(?![^<>]*>)(?![^&;]+;)", "g");
								}
								if(opts.resultsHighlight){
									this_data[opts.selectedItemProp] = this_data[opts.selectedItemProp].replace(regx,"<em>$1</em>");
								}
								
								if(!opts.formatList){
									formatted = formatted.html(this_data[opts.selectedItemProp]);
								} else {
									formatted = opts.formatList.call(this, this_data, formatted);	
								}
							}
							results_ul.append(formatted);
							delete this_data;
							matchCount++;
							if(opts.retrieveLimit && opts.retrieveLimit == matchCount ){ break; }
						}
					}
					selections_holder.removeClass("loading");
					if(matchCount <= 0 && opts.showEmptyText){
						results_ul.html('<li class="as-message">'+opts.emptyText+'</li>');
					}
					
					results_ul.css("width", opts.ListWidth || selections_holder.outerWidth() );
					results_holder.show();
					opts.resultsComplete.call(this);
				}
				
				function add_selected_item(data, num,flagInline){
					values_input.val(values_input.val()+data[opts.selectedValuesProp]+",");
					var item = $('<li class="as-selection-item '+window.typing_lang+'" id="as-selection-'+num+'"></li>').click(function(){
							opts.selectionClick.call(this, $(this));
							selections_holder.children().removeClass("selected");
							$(this).addClass("selected");
						}).mousedown(function(){ input_focus = false; });
						
					var _html = "";
					if( useAlgolia )
					{
						//pick up dictionary value if found ie title => { en : "" , ur : "" }
						var _lang = window.typing_lang || window.gbl_lang;
						var _html = data[opts.selectedItemProp][_lang];
						if( typeof _html != "string" || _html == "" )
							_html = data[opts.selectedItemProp];
					}
					else
					{
						_html = data[opts.selectedItemProp];
					}
						
						
					var close = $('<a class="as-close">&times;</a>').click(function()
						{
							values_input.val(values_input.val().replace(data[opts.selectedValuesProp]+",",""));
							opts.selectionRemoved.call(this, item);
							if(opts.selectionLimit==1)
								selections_holder.removeClass("single_sel");
							opts.onChange.call( this , data,data[opts.selectedValuesProp],data[opts.selectedItemProp],0 );
							input_focus = true;
							input.focus();
							return false;
						});

					
					org_li.before(item.html(_html).prepend(close));
					opts.selectionAdded.call(this, org_li.prev());	

					if(opts.selectionLimit==1)
						selections_holder.addClass("single_sel");
					
					opts.onChange.call( this , data,data[opts.selectedValuesProp],data[opts.selectedItemProp],flagInline );
				}
				
				function moveSelection(direction){
					if($(":visible",results_holder).length > 0){
						var lis = $("li", results_holder);
						if(direction == "down"){
							var start = lis.eq(0);
						} else {
							var start = lis.filter(":last");
						}					
						var active = $("li.active:first", results_holder);
						if(active.length > 0){
							if(direction == "down"){
							start = active.next();
							} else {
								start = active.prev();
							}	
						}
						lis.removeClass("active");
						start.addClass("active");
						
						scrl_top = results_ul.scrollTop() + start.offset().top - results_ul.offset().top;
						results_ul.scrollTop(scrl_top-(start.height()*5));
						
					}
				}
									
			});
		}
	}
})(jQuery);  	

var algolia_applicationID = "YF15UW5HUZ";
var algolia_apiKey = "c5d93c4c6a161bd875932f8f719a5b61";