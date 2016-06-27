(function(jQuery){  
  
    // We override the animation for all of these color styles  
   jQuery.each(['backgroundColor', 'borderBottomColor', 'borderColor', 'borderLeftColor', 'borderRightColor', 'borderTopColor', 'color', 'outlineColor'], function(i,attr){  
        jQuery.fx.step[attr] = function(fx){  
            if ( fx.state == 0 ) {  
                fx.start = getColor( fx.elem, attr );  
                fx.end = getRGB( fx.end );  
            }  
  
           fx.elem.style[attr] = "rgb(" + [  
                Math.max(Math.min( parseInt((fx.pos * (fx.end[0] - fx.start[0])) + fx.start[0]), 255), 0),  
                Math.max(Math.min( parseInt((fx.pos * (fx.end[1] - fx.start[1])) + fx.start[1]), 255), 0),  
                Math.max(Math.min( parseInt((fx.pos * (fx.end[2] - fx.start[2])) + fx.start[2]), 255), 0)  
            ].join(",") + ")";  
        }  
    });  
 
    // Color Conversion functions from highlightFade  
    // By Blair Mitchelmore  
    // http://jquery.offput.ca/highlightFade/  
  
    // Parse strings looking for color tuples [255,255,255]  
    function getRGB(color) {  
        var result;  
  
        // Check if we're already dealing with an array of colors  
        if ( color && color.constructor == Array && color.length == 3 )  
            return color;  
 
        // Look for rgb(num,num,num)  
        if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color))  
            return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];  
  
        // Look for rgb(num%,num%,num%)  
        if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color))  
            return [parseFloat(result[1])*2.55, parseFloat(result[2])*2.55, parseFloat(result[3])*2.55];  
  
        // Look for #a0b1c2  
        if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color))  
            return [parseInt(result[1],16), parseInt(result[2],16), parseInt(result[3],16)];  
 
        // Look for #fff  
        if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color))  
            return [parseInt(result[1]+result[1],16), parseInt(result[2]+result[2],16), parseInt(result[3]+result[3],16)];  
  
        // Otherwise, we're most likely dealing with a named color  
        return colors[jQuery.trim(color).toLowerCase()];  
    }  
      
    function getColor(elem, attr) {  
        var color;  
  
        do {  
            color = jQuery.curCSS(elem, attr);  
  
            // Keep going until we find an element that has color, or we hit the body  
            if ( color != '' && color != 'transparent' || jQuery.nodeName(elem, "body") )  
                break;   
  
            attr = "backgroundColor";  
        } while ( elem = elem.parentNode );  
 
        return getRGB(color);  
    };  
     
    // Some named colors to work with  
    // From Interface by Stefan Petre  
    // http://interface.eyecon.ro/  
  
    var colors = {  
        aqua:[0,255,255],  
        azure:[240,255,255],  
        beige:[245,245,220],  
        black:[0,0,0],  
        blue:[0,0,255],  
        brown:[165,42,42],  
        cyan:[0,255,255],  
        darkblue:[0,0,139],  
        darkcyan:[0,139,139],  
        darkgrey:[169,169,169],  
        darkgreen:[0,100,0],  
        darkkhaki:[189,183,107],  
        darkmagenta:[139,0,139],  
        darkolivegreen:[85,107,47],  
        darkorange:[255,140,0],  
        darkorchid:[153,50,204],  
        darkred:[139,0,0],  
        darksalmon:[233,150,122],  
        darkviolet:[148,0,211],  
        fuchsia:[255,0,255],  
        gold:[255,215,0],  
        green:[0,128,0],  
        indigo:[75,0,130],  
        khaki:[240,230,140],  
        lightblue:[173,216,230],  
        lightcyan:[224,255,255],  
        lightgreen:[144,238,144],  
        lightgrey:[211,211,211],  
        lightpink:[255,182,193],  
        lightyellow:[255,255,224],  
        lime:[0,255,0],  
        magenta:[255,0,255],  
        maroon:[128,0,0],  
        navy:[0,0,128],  
        olive:[128,128,0],  
        orange:[255,165,0],  
        pink:[255,192,203],  
        purple:[128,0,128],  
        violet:[128,0,128],  
        red:[255,0,0],  
        silver:[192,192,192],  
        white:[255,255,255],  
        yellow:[255,255,0]  
    };  
      
})(jQuery);  

$.fn.imgURLToggleInit = function(){
	var me = this,
	length = $(me).children().length,
	index = $(me).children("a:visible").index(),
	firIndex = $(me).children("a").index();
	if(length <= 1){
		return;
	}
	var toggleInterval = setInterval(function(){
	if(index >= length - 1){
		index = firIndex;
	} else {
		index++;
	}
	$(me).children(":eq("+index+")").show().siblings("a").hide();
	},3500);
}; 
$(function(){
	$(".widthFull").each(function(index, element) {
	var me = this;
	$(me).children("a").ready(function(e) {
		$(me).imgURLToggleInit();
		});
	}); 	
});

if(!AFed){ var AFed = {};}
$.extend(AFed, {
searchInit : function(element){
					var $self = $(element),
						$inputObj=$self.find(".sInput"),
						flag=false,
						keyHeight = parseInt($self.find(".key").height()),
						classHeight = parseInt($self.find(".classify").height());
						
						if(""!=$inputObj.val())
							{
								$inputObj.addClass("nobg");
						}
						$self.find(".sRadius").hover(function(){
								if(flag){
									return;
								}
								$(this).stop().css("border-color","#0f820c").animate({
									"borderColor" : "#0f820c"
								},200,function(){
									$(this).closest("#sForm").addClass("on");
									$(this).css("borderColor", "#0f820c");
								});		
								$(this).closest(".tabs").find(".current").addClass("hover")					
							}, function(){
							 	if(!flag){
									$(this).stop().css("border-color","#0f820c").animate({
										"borderColor" : "#0f820c"
									},200,function(){
										$(this).closest("#sForm").removeClass("on");
										$(this).css("borderColor", "");
									});	
									$(this).closest(".tabs").find(".current").removeClass("hover")	
							 	}
							});
							
						$inputObj.focusin(function(){
						   var $sForm = $(this).closest("#sForm");		
						   $(this).addClass("nobg");
						  $sForm.next(".key").css({"height":"0","visibility":"visible"}).animate({"height":keyHeight},200);									
						   flag=true;
							$(this).prev(".class").css("visibility","visible");	
						}).focusout(function(){
						  if(""==$(this).val())
							{
							  $(this).removeClass("nobg").parent().stop().css("border-color","#0f820c").animate({
										"borderColor" : "#0f820c"
									},200,function(){
										$(this).css("borderColor", "#0f820c");
									});
							}
						   flag=false;
						}).blur(function(){	
							var $sForm = $(this).closest("#sForm");		
							if(""==$(this).val())
							{  	
							$sForm.removeClass("on");
							$(this).closest(".tabs").find(".current").removeClass("hover");
							$(this).parent().stop().css("border-color","#0f820c").animate({
										"borderColor" : "#0f820c"
									},200,function(){
										$(this).css("borderColor", "");
									});
							//$(this).prev(".class").css("visibility","hidden");
							}		
							$sForm.next(".key").animate({"height":0},200,function(){$(this).css("visibility","hidden")});	 
						});
					/*下拉选择*/
					$self.find(".class").hover(
						function(){
							if("hidden"!=$(this).css("visibility"))
							{
								$(this).addClass("hover").children(".classify").css({"height":"0","visibility":"visible"}).stop().animate({"height":classHeight},200);
							}
						},
						function(){
							if("hidden"!=$(this).css("visibility"))
							{	
								$(this).removeClass("hover").children(".classify").stop().animate({"height":0},200,function(){$(this).css("visibility","hidden")});
							}
						}
					);
					$self.find(".classify").children("li").click(function(){
						$(this).closest(".class").find("em").html($(this).html());
						$(this).closest(".classify").animate({"height":0},200,function(){$(this).css("visibility","hidden")});		
						
					});
					$self.find(".key").children("li").click(function(){
						$(this).closest(".search").find(".sInput").val($(this).html()).addClass("nobg");
						 $(this).closest(".key").animate({"height":"0"},200,function(){
							 $(this).css({"visibility":"hidden","height":keyHeight});
							 }
						);	   	
						
					});	
				},
/*锚点处理函数*/
	toTopInit : function(){
					var pageHeight = document.documentElement.clientHeight||document.body.clientHeight,
						scrollTop =  document.documentElement.scrollTop||document.body.scrollTop ,
						offsetHeight = document.body.offsetHeight,
						$anchorObj = $("#anchor"),
					ftAdvHeight = $("#ftAdv").outerHeight(true),
					ftAdvTags = $("#ftAdv").is(":hidden"),
					footTop = $(".bNav").offset().top - 13;
						if(navigator.userAgent.indexOf("MSIE 6.0")>0)
						{						 
						   if((pageHeight+scrollTop)>=footTop){
						  
							ftAdvTags == false? $anchorObj.css("top",footTop-$anchorObj.outerHeight(true)-ftAdvHeight):$anchorObj.css("top",footTop-$anchorObj.outerHeight(true));   
							  } else {
							 ftAdvTags == false? $anchorObj.css("top",pageHeight+scrollTop-$anchorObj.outerHeight(true)-ftAdvHeight-40): $anchorObj.css("top",pageHeight+scrollTop-$anchorObj.outerHeight(true)-40);
							 }
						   $("#topFix").css("top",scrollTop);
						} else {  
							if((pageHeight+scrollTop)>=footTop+40){
								$anchorObj.css("bottom", pageHeight+scrollTop-footTop + "px"); 
							}else{
								$anchorObj.css("bottom","40px"); 
							}	
						}
						scrollTop > 0?$("#toTop").slideDown(250):$("#toTop").slideUp(250);		
						return false;
	
				},
	toTop : function() {
            	$("html, body").animate({ scrollTop: 0 }, 300);
			},
	/*文字广告无缝滚动*/
	projectorInit : function(element,animateTime,intervalTime){
var $self = $(element),
		animateTime = animateTime || 400,
		intervalTime = intervalTime || 4000,
	index = 1,
		ulEle = $self.children("ul"),
		ulHeight = ulEle.outerHeight(true),
		liHeight = ulEle.children("li").outerHeight(true),
		num = Math.floor(ulHeight/liHeight),
		interval,
	intervalFunc = function(){
			$self.children("ul:eq(0)").animate({
				"margin-top" : liHeight * (-1) * index - ($.browser.msie && $.browser.version <= 7 ? 2 : 0 )+ "px"
			},animateTime,function(){
				if(index == num){
				index = 1;
			$(this).appendTo($(this).parent()).css("margin-top","");
				} else {
					index++;
				}
			});
		};
	ulEle.clone(true).appendTo($self);
	interval = setInterval(intervalFunc,intervalTime);
	
	$self.hover(function(){
		clearInterval(interval);
	},function(){
		interval = setInterval(intervalFunc,intervalTime);
	});
	$self.closest(".first").find(".navSelect").hover(function(){
		clearInterval(interval);
	},function(){
		interval = setInterval(intervalFunc,intervalTime);
		$(this).find("ul").stop().animate({
			"height" : "0px"
		}, 199, function(){
			$(this).closest(".navSelect").css({
				"visibility": "",
				"display" : "",
				"height" : ""        
			}).children(".navSite").removeClass("hover");
		});
	});
	},
	/*图片轮播*/
	imgScrollInit : function(element,animeteTime,intervalTime){
						var $self = $(element),
							animateTime = animateTime || 500,
							intervalTime = intervalTime || 3000,
							index = 1,
							ulEle = $self.children("div").children("ul"),
							ulChild = $self.children("ul"),
							liLength = ulEle.children("li").length,
							liWidth = ulEle.children("li").outerWidth(true),
							interval,
							intervalFunc = function(){
								ulChild.find("li:eq(" + index + ")").addClass("hover").siblings().removeClass("hover");
								$self.find("ul:eq(0)").animate({
									"margin-left" : liWidth * (-1) * index + "px"
								},animateTime,function(){
									if(index == liLength - 1){
										index = 0;
									} else {
										index++;
									}
								});
							};
					
						if(liLength <= 1){
							return;
						}
						ulEle.css("width",liWidth *	liLength + "px");
						ulChild.find("li:eq(0)").addClass("hover").siblings().removeClass("hover");
						interval = setInterval(intervalFunc,intervalTime);
						
						ulEle.find("li").hover(function(){
							clearInterval(interval);
							$self.find("ul:eq(0)").stop();
							$(this).siblings().removeClass("hover");
							index = $(this).index();
							intervalFunc();
						},function(){
							interval = setInterval(intervalFunc,intervalTime);
						});
						
						ulChild.find("li").hover(function(){
							clearInterval(interval);
							$self.find("ul:eq(0)").stop();
							$(this).siblings().removeClass("hover");
							index = $(this).index();
							intervalFunc();
						},function(){
							interval = setInterval(intervalFunc,intervalTime);
						});
				},

/*日历处理*/
	calendar : function(element){
		 		var $self = $(element);
				if($self.has("a").length!="0")
				{
					var $parentTr = $self.closest("tr"),
						$contObj = $parentTr.next(".calCont"),
						$a = $self.children("a"),
						contIndex="cont"+$a.text();
					$(".calendar .bg").removeClass("current");
					$(element).addClass("current");
			$("tr.calCont").hide();
					$contObj.show();
				if($contObj.has("."+contIndex).length=="0")
					{
					$(".calCont").find("div").hide();
					}
				else
				{
						$contObj.find("."+contIndex).show().siblings("div").hide();
					}
				}	
				return false;
		
},	
	
	/*tab页签显隐切换*/
	tabsAlt : function(element){
				var $self = $(element),
					tabsIndex=parseInt($self.index()),
					$conDiv=$self.closest(".tabs");
				$self.addClass("current").siblings().removeClass("current");						
				$conDiv.children(".tabsCon").eq(tabsIndex).show().siblings(".tabsCon").hide();
				$conDiv.children(".tabsCon").eq(tabsIndex).find("img").each(function(){
					if($(this).attr("src").indexOf('imgsNew/space.gif') >= 0){
						$(this).attr("src", $(this).attr("data-src"));
					}
				});
			},
/*页签滚动切换*/
tabsScroll : function(element){
					var $self =$(element),
						tabsIndex=$self.index(),
						sum =$self.siblings("b").length+1,
						$conDiv=$self.closest(".tabs"),
						$firstCon=$conDiv.find(".tabsCon").eq(0),
						conHeight = $firstCon.outerHeight();
						$self.addClass("current").siblings().removeClass("current");
						tabsIndex<sum?$firstCon.animate({"margin-top":(-1)*conHeight*(tabsIndex)},600,function(){}):$firstCon.animate({"margin-top":(-1)*conHeight*(tabsIndex-1)},600,function(){});	
				}			
});
$(function(){
	
	var slideTimeout = setTimeout(function(){
			$(".zhankai").trigger("click");
	},3000);
	
	$(".zhankai").bind("click",function(){
	var self = this,
		parentEle = $(self).parent();
		
		if(slideTimeout){
			clearTimeout(slideTimeout);	
		}
		
		if(parentEle.outerHeight(true)>100){
			parentEle.animate({
		"height" : "30px"	
			},500,function(){
				parentEle.children("a").toggle();
				$(self).children().toggle();
			});
		} else {
			parentEle.children("a").toggle();
			parentEle.animate({
				"height" : "400px"	
		},500,function(){
			$(self).children().toggle();
			});
		}
		
	});
/*初始化1024*768内容*/
if(document.documentElement.clientWidth<1024)
	{
	 $("#anchor").css("margin-left","460px");  
	}
//为class为ah的元素追加class接口hover;
	$(".ah").hover(
		function(){
		$(this).addClass("hover");
			},
	function(){
			$(this).removeClass("hover");		
			}
	);
	/*li hover事件追加*/
	$(".lih li").hover(
		function(){
			$(this).addClass("hover");
		},
	function(){
			$(this).removeClass("hover");		
			}
	);
	$("#anchor .close").click(function(){
		$(this).closest("#anchor").hide();
	});
	
	$("#toTop").hover(function(){
		$(this).stop().css("background-color","#D4D4D4").animate({
			"backgroundColor" : "#0F820c"	
		},200,function(){
			$(this).css({
				"backgroundColor": "#0F820c",	
			"height" : ""
			});
		});	
	},function(){
		if($(document).scrollTop() <= 0){
			$(this).css("backgroundColor", "");
			return;	
		}
		$(this).stop().animate({
			"backgroundColor" : "#D4D4D4"	
		},200,function(){
			$(this).css("backgroundColor", "");
		});	
});
$("#message").hover(function(){
		$(this).stop().css("background-color","#D4D4D4").animate({
			"backgroundColor" : "#0F820c"	
		},200,function(){
			$(this).css({
				"backgroundColor": "#0F820c",	
			"height" : ""
			});
		});	
	},function(){
		if($(document).scrollTop() <= 0){
			$(this).stop().css("backgroundColor", "");
			return;	
		}
		$(this).stop().animate({
			"backgroundColor" : "#D4D4D4"	
		},200,function(){
			$(this).css("backgroundColor", "");
		});	
});
		
	
	/*站点切换*/
	$(".site").hover(function(){
			var $dropObj=$(this).find(".dropdown"),
				slideEle = $dropObj.next("ul");
				
			slideEle.css({
				"visibility": "hidden",
				"display" : "block"	
			});
			var	liLength = slideEle.children().length,
				liHeight = slideEle.children().outerHeight(true);
			slideEle.css({
				"visibility": "visible",
				"height" : "0px"	
			}).stop().animate({"height":liLength*liHeight + "px"},500);	
			
			$dropObj.addClass("hover");
		}, function(){	
			$(this).children(".dropdown").stop().animate({
				"backgroundColor": "#FFF",
				"color" : "#000"
			},200,function(){
				$(this).css({
					"backgroundColor": "",
					"color" : ""
				}).removeClass("hover");		
			});
					
			$(this).find("ul").stop().animate({"height":"0px"},200,function(){
				$(this).css({
					"visibility": "hidden",
					"display" : "block",
					"height" : ""		
				});
			});
		}
	);	
	
AFed.searchInit("#topSearch");				  
	/*返回顶部锚点开始*/
	 AFed.toTopInit();
	  $(window).bind("resize",function(){
		  if($(window).width() <= 1024){
		  	$("#anchor").css("marginLeft","450px");
		  } else {
		  	$("#anchor").css("marginLeft","510px");
		  }
		  AFed.toTopInit();
	  }); 
  	$(window).bind('scroll',AFed.toTopInit); 
	$("#toTop").bind('click',AFed.toTop);
	AFed.projectorInit("#txtAdv3");
	AFed.projectorInit("#txtAdvYZ");
	AFed.projectorInit("#txtAdvYZ2");
	AFed.projectorInit("#txtAdv_rongbao");
	AFed.projectorInit("#txtNav");
	/*AFed.projectorInit("#txtAdv2");*/
	/*广告图片轮播*/
	AFed.imgScrollInit(".imgScroll");	
	AFed.imgScrollInit(".imgScrollTrade",500,5000);	
	/*页签切换*/
$("ul.tabsTag li").hover(function(){AFed.tabsAlt(this);},function(){ });
	
	/**  展览推荐  */
	var tabsConIndex = 1,
		tabsConInterval = setInterval(function(){
			tabsConIndex++;	
			AFed.tabsScroll(".bTabs b:eq(" + tabsConIndex%2 + ")");
		},10000);
	
$(".bTabs b").bind("click",function(){
		tabsConIndex++;		
		clearInterval(tabsConInterval);
		tabsConInterval = setInterval(function(){
			tabsConIndex++;	
			AFed.tabsScroll(".bTabs b:eq(" + tabsConIndex%2 + ")");
		},10000);
		AFed.tabsScroll(this);
}).hover(function(){
		$(this).addClass("hover");
},function(){
$(this).removeClass("hover");		
	});	
	
$(".tabsCon li").hover(function(){
		clearInterval(tabsConInterval);
	},function(){
		tabsConInterval = setInterval(function(){
			tabsConIndex++;	
			AFed.tabsScroll(".bTabs b:eq(" + tabsConIndex%2 + ")");
		},10000);
	});
	
	/*无规则图片列表*/
	//$(".irreCont").hover(function(){AFed.irreIn(this);},function(){AFed.irreOut(this)});
	/*展览日历切换*/
	$(".calendar .bg").hover(function(){AFed.calendar(this)},function(){}); 
	/*艺术家*/
	$(".artList").each(function() {
        $("li:eq(0),li:eq(10)",$(this)).css("background-image","none");
    });
	$(".bNav a:first").css("background-image","none");
	/** 易搜 */
	var advSearchNum = 1, advSearchDirection = 1;
	$(".advSearch").hover(function(){
		$(this).stop().animate({
			"width" : "588px"
		},199,'linear');	
	},function(){
		$(this).stop().animate({
			"width" : "43px"
		},199,'linear');	
	});
	/*银座广告*/
	$(".yzAdv").hover(function(){
		$(this).stop().animate({
			"width":"680px"
		},199,'linear');
	},function(){
		$(this).stop().animate({
			"width":"140px"
		},199,'linear');
	})
	
/*二维码*/
var codeW = $("#code li").size() * 140;
	
	$(".qr").css("width",codeW + 9 + "px");
	$("#code").css("width",codeW+6+"px");
	$("#code ul").css({
		"width":codeW - 20 + "px"
	});
	$(".qrCode .qr").css("left",-codeW -9 +"px");
	
$(".qrCode").hover(function() {
	$(this).addClass("qrHover");
	$(this).children("b").stop().css("background-color", "#D4D4D4").animate({
			"backgroundColor": "#000000"
		},
		100,
		function() {
			$(this).css({
				"backgroundColor": "#000000"
			});
		});
	$(this).closest(".qrCode").find(".qr").show();
},function() {
	$(this).removeClass("qrHover");
	$(this).children("b").stop().css("background-color", "#000000").animate({
			"backgroundColor": "#D4D4D4"
		},
		100,
		function() {
			$(this).css({
				"backgroundColor": "#D4D4D4"
			});
		});
	$(this).closest(".qrCode").find(".qr").hide();
}); 
});
