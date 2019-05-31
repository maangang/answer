/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	"use strict";

	var XueCheTv = {
	    loadRecJx: function loadRecJx() {
	        var pingying = cookie.get("local_city_pingying");
	        //无地区筛选只匹配城市数据
	        // if (pingying == "" || "/" == pingying) {} else {
	        $.ajax({
	            dataType: "json",
	            type: "get",
	            url: "http://tv.jxedt.com/info/getCityRecList.htm",
	            data: {
	                city: pingying.replace("/", "").replace("/", "")
	            },
	            success: function success(D) {
	                alert(D);
	            },
	            error: function error(D) {
	                $(".comment-jx-content").html(D.responseText);
	            }
	        });
	        //}
	    }
	};
	// 拼接城市弹出框开始
	var intHtml = '';

	function cityInit() {
	    intHtml = "<img class='info-close' src='" + "http://j1.58cdn.com.cn/dist/jxedt/pc/products/jxregister/images/close.png" + "' alt=''>" + "</div>" + "<div class='info-city-list'>" + "<div>" + "<div class='info-hot-city'>" + "<span>热门城市：</span>" + "<a href='/bj/' Val='/bj/' name='北京'>北京</a>" + "<a href='/sh/' Val='/sh/' name='上海'>上海</a>" + "<a href='/guangzhou/' Val='/guangzhou/' name='广州'>广州</a>" + "<a href='/shenzhen/' Val='/shenzhen/' name='深圳'>深圳</a>" + "<a href='/tj/' Val='/tj/' name='天津'>天津</a>" + "<a href='/cq/' Val='/cq/' name='重庆'>重庆</a>" + "<a href='/wuhan/' Val='/wuhan/' name='武汉'>武汉</a>" + "<a href='/chengdu/' Val='/chengdu/' name='成都'>成都</a>" + "<a href='/' Val='' name='全国'>全国</a>" + "</div>" + "</div>" + "<div>" + "<div class='info-city-en'>" + "<span>按拼音首字母选择：</span>" + "<a href='javascript:void(0)'>A</a>" + "<a href='javascript:void(0)'>B</a>" + "<a href='javascript:void(0)'>C</a>" + "<a href='javascript:void(0)'>F</a>" + "<a href='javascript:void(0)'>G</a>" + "<a href='javascript:void(0)'>H</a>" + "<a href='javascript:void(0)'>J</a>" + "<a href='javascript:void(0)'>L</a>" + "<a href='javascript:void(0)'>N</a>" + "<a href='javascript:void(0)'>Q</a>" + "<a href='javascript:void(0)'>S</a>" + "<a href='javascript:void(0)'>T</a>" + "<a href='javascript:void(0)'>X</a>" + "<a href='javascript:void(0)'>Y</a>" + "<a href='javascript:void(0)'>Z</a>" + "</div>" + "</div>";
	    if (null != jsonString && "" != jsonString) {
	        intHtml += "<div>" + "<div class='info-initials-city'>";
	        var lastStartPY = "";
	        for (var i = 0; i < jsonString.length; i++) {
	            var simplePro = jsonString[i];
	            intHtml += "<div class='info-initials-item'>";
	            if (lastStartPY != simplePro.startpingying) {
	                intHtml += "<span id='" + simplePro.startpingying + "'>" + simplePro.startpingying + "</span>";
	            } else {
	                intHtml += "<span class='city-span'></span>";
	            }
	            intHtml += "<span>" + simplePro.zhongwen + ":</span>";
	            intHtml += "<div class='info-city-a'>";
	            if (simplePro.zhongwen == '北京市' || simplePro.zhongwen == '天津市' || simplePro.zhongwen == '上海市' || simplePro.zhongwen == '重庆市') {
	                intHtml += "<a href='/" + simplePro.pingying + "/' Val='/" + simplePro.pingying + "/' name='" + simplePro.zhongwen + "'>" + simplePro.zhongwen + "</a>";
	            } else {
	                for (var j = 0; j < simplePro.list.length; j++) {
	                    var simpleCiyt = simplePro.list[j];
	                    intHtml += "<a href='/" + simpleCiyt.pingying + "/' Val='/" + simpleCiyt.pingying + "/' name='" + simpleCiyt.zhongwen + "'>" + simpleCiyt.zhongwen + "</a>";
	                }
	            }
	            intHtml += "</div>" + "</div>";
	            lastStartPY = simplePro.startpingying;
	        }
	        intHtml += "</div>" + "</div>";
	    }
	    intHtml += "</div>" + "<div class='nav nav-border'></div>" + "<div class='nav nav-background'></div>";
	}
	//两种匹配规则 jxedt.com* 或者 xxx.jxedt.com*
	//规则一：全国或者地方
	var regtype1 = /^http:\/\/jxedt.com\/.*$/;
	//规则二：全国或者地方
	var regtyep2 = /^http:\/\/[A-Za-z]{2,}.jxedt.com\/.*$/;
	//规则一：地方
	var regtyep3 = /^http:\/\/jxedt.com\/[a-z]{2,10}\/.*$/;
	//规则二：地方
	var regtyep4 = /^http:\/\/[A-Za-z]{2,}.jxedt.com\/[a-z]{2,10}\/.*$/;
	//规则 视频资源首页
	var regtyep5 = /^http:\/\/tv.jxedt.com\/.*$/;
	//规则 视频资源首页
	var regtyep6 = /^http:\/\/zhinan.jxedt.com\/.*$/;
	//规则三：详情页面(驾校、教练、陪练)
	var regdetail = /^http:\/\/[A-Za-z]{2,}.jxedt.com\/[0-9]{1,}\/.*$/;
	//规则四：详情页面(视频)
	var regdetail2 = /^http:\/\/tv.jxedt.com\/info\/[0-9]{3,}.htm$/;
	var pagetype = "";
	var locationurlnow = window.document.location.href;
	if (regtype1.test(locationurlnow)) {
	    //特殊规则匹配到首页全国或者地方
	    pagetype = "index";
	}

	// search搜索按钮点击事件绑定
	$(".comment-header-search-btn").click(function () {
	    var type = $("#searchType").val();
	    if ("zh" == type) {
	        window.location.href = "http://zhannei.baidu.com/cse/search?s=16040176402735648187&q=" + $(".search-content").val();
	    } else {
	        window.location.href = "http://" + type + ".jxedt.com/?keywords=" + $(".search-content").val();
	    }
	});

	// 页面初始化完毕执行
	$(document).ready(function () {
	    inithit({
	        'cate': 'NA',
	        'area': 'NA',
	        'pagetype': 'header',
	        'page': 'info'
	    });

	    //初始化cookie中题库带数字问题
	    var cookieFlag = cookie.get("local_car_flag");
	    cookieFlag = cookieFlag.replace(/[^a-z]+/ig, "");
	    cookie.set("local_car_flag", cookieFlag);
	    cityInit();
	    var location = window.document.location.href;
	    var pathName = location.split("/");
	    $(".comment-header-menu-ul li>a").each(function (value, item) {
	        $(item).css("color", "#4a4a4a");
	        var newPath = $(item).attr("linkrul");
	        if (pathName[2].indexOf(newPath) == 0) {
	            $(item).css("color", "#00c356");
	        }
	    });
	    /**
	     * 根据链接切换搜索框内容
	     */
	    function searchSwitch() {
	        if (pathName[2].indexOf("www") < 0) {
	            var search_type = pathName[2].split(".")[0];
	            $(".dropdown-menu li a[data-search-type='" + search_type + "']").parent().attr("data-search-type", search_type);
	            $(".dropdown-menu li a[data-search-type='" + search_type + "']").parent().click();
	        } else {
	            $(".commonhead_line").hide();
	        }
	    }
	    //初始化搜索框内容
	    searchSwitch();

	    // 设置默认题库类型
	    var default_car = cookie.get("local_car") == "" ? "小车" : cookie.get("local_car");
	    var default_city = cookie.get("local_city") == "" ? "全国" : cookie.get("local_city");
	    cookie.get("local_car_flag") == "" ? cookie.set("local_car_flag", $(".comment-header-car").attr("topname")) : $(".comment-header-car").attr("topname", cookie.get("local_car_flag"));
	    $(".comment-header-city").text(default_city);
	    $(".comment-header-city").attr("name", default_city);
	    $(".comment-header-car").text(default_car);
	    $(".comment-header-car").attr("name", default_car);
	    // 判断如果是首页
	    if (pathName[2].split(".")[0] == "www") {
	        questionSwitch($(".comment-header-car"), true);
	    }
	});

	var localCity = cookie.get("local_city");
	//无地区筛选只匹配城市数据
	if (localCity == "" || "全国" == localCity) {
	    initMap();
	    var hrefLength = window.location.href.indexOf("jxedt.com/") + 10;
	    if (regdetail2.test(window.location.href) || regtyep6.test(locationurlnow)) {} else if (regtyep4.test(window.location.href) || regtyep3.test(window.location.href)) {
	        //两种规则的全国或者地方,其余详情页面不需要刷新url路径
	        if (hrefLength != window.location.href.length) {
	            window.location.href = window.location.href.substring(0, hrefLength);
	        }
	    }
	} else {
	    var locpy = cookie.get("local_city_pingying");
	    if ("" != locpy) {
	        //敲链接进入进行刷新
	        var docurl = locationurlnow.substr(locationurlnow.indexOf("jxedt.com") + 9);
	        //keywords：搜索条件     判断搜索条件不为空，重新初始化位置
	        if (null != keywords && "" != keywords) {
	            cookie.set("local_city_pingying", "/");
	            cookie.set("local_city", "全国");
	            initMap();
	            //匹配到列表页面而不是详情页面，进行链接进入的页面刷新动作
	        } else if (regtyep5.test(locationurlnow) || regtyep6.test(locationurlnow)) {
	            //匹配到视频页面不做刷新
	            if (regdetail2.test(locationurlnow)) {
	                XueCheTv.loadRecJx();
	            }
	        } else if (docurl.indexOf(locpy) != 0 && !regdetail.test(locationurlnow)) {
	            // console.log(document.location.href.substr(0, document.location.href.indexOf("jxedt.com")) + "jxedt.com" + locpy);
	            window.location.href = document.location.href.substr(0, document.location.href.indexOf("jxedt.com")) + "jxedt.com" + locpy;
	        }
	    }
	}

	/**
	 * 初始化百度与本站信息匹配
	 */
	function initMap() {
	    var geolocation = new BMap.Geolocation();
	    geolocation.getCurrentPosition(function (r) {
	        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
	            var mk = new BMap.Marker(r.point);
	            var point = new BMap.Point(r.point.lng, r.point.lat);
	            var geoc = new BMap.Geocoder();
	            geoc.getLocation(r.point, function (rs) {
	                $(".switch-city").show();
	                $(".switch-city-text a").text(rs.addressComponents.city);
	                window.local_city = rs.addressComponents.city;
	                for (var i = 0; i < alllocation.length; i++) {
	                    var isready = false;
	                    if (alllocation[i].zhongwen.indexOf(rs.addressComponents.province.substr(0, 2)) >= 0) {
	                        if ("bj" == alllocation[i].pingying || "tj" == alllocation[i].pingying || "cq" == alllocation[i].pingying || "sh" == alllocation[i].pingying) {
	                            window.local_city = alllocation[i].shotName + "-/" + alllocation[i].pingying + "/";
	                            isready = true;
	                            break;
	                        } else {
	                            var location = alllocation[i].list;
	                            for (var j = 0; j < location.length; j++) {
	                                if (location[j].zhongwen.indexOf(rs.addressComponents.city.substr(0, 2)) >= 0) {
	                                    window.local_city = location[j].shotName + "-/" + location[j].pingying + "/";
	                                    isready = true;
	                                    break;
	                                }
	                            }
	                        }
	                    }
	                    if (isready) {
	                        break;
	                    }
	                }
	            });
	        }
	    }, {
	        enableHighAccuracy: true
	    });
	}

	/**
	 * 头部地区切换，设置选中地区添加样式
	 */
	$('.comment-header-search-position').click(function (ev) {
	    // 判断地区弹框是否初始化完成
	    if ($('#city_select').html().trim() == "") {
	        $('#city_select').append($(intHtml));
	    }
	    $('#city_select').show();
	    // 添加选中城市样式
	    $('[name=' + $(".comment-header-city").attr("name") + ']').addClass("active");
	    $('[name=' + $(".comment-header-car").attr("name") + ']').addClass("active");

	    // 重新绑定弹框内地区点击事件
	    $("#city_select").off('click').on('click', ".info-initials-city a,.info-hot-city a", function () {
	        changeLocation(this);
	    });
	    //区域滚动条锚点点击
	    $(".info-city-en").on("click", "a", function (ev) {
	        var top = $(".info-initials-item").find("span#" + $(ev.target).text())[0];
	        $("#city_select .info-initials-city").scrollTop($("#city_select .info-initials-city").scrollTop() + top.getBoundingClientRect().top - 220);
	    });
	    $('#city_select .info-close').click(function () {
	        $('#city_select').hide();
	        return false;
	    });
	    ev.stopPropagation();
	});

	/**
	 * 百度定位切换
	 */
	$(".switch-city a").click(function () {
	    var local_city = window.local_city.split("-")[0];
	    var local_city_pingying = window.local_city.split("-")[1];
	    cookie.set("local_city", local_city);
	    cookie.set("local_city_pingying", local_city_pingying);
	    $(".comment-header-city").text(local_city);
	    $(".comment-header-city").attr("name", local_city);
	    $(".switch-city").hide();
	    if (!regtyep5.test(locationurlnow) && !regtyep6.test(locationurlnow)) {
	        this.href = local_city_pingying;
	    } else {
	        $(".info-initials-city a").removeClass("active");
	        $('[name=' + $(".comment-header-city").attr("name") + ']').addClass("active");
	        if (regdetail2.test(locationurlnow)) {
	            XueCheTv.loadRecJx();
	        }
	        return;
	    }
	});

	/**
	 * 头部搜索栏筛选条件框显示与隐藏
	 */
	$('a[data-toggle="dropdown"]').on('show.bs.dropdown', function (e) {
	    $("#dropdownMenuTime")[0].innerHTML = e.target.innerHTML;
	});

	/**
	 * 头部搜索栏筛选条件框根据用户选中进行切换
	 */
	$(".dropdown-menu").delegate("li", "click", function (ev) {
	    $('#tutorial').html($(ev.target).text() + '<div class="down"></div>');
	    if ($(ev.target).attr("data-search-type") == "jl") {
	        $("#searchType").val("jl");
	        $(".search-content").attr("placeholder", "请输入关键字：如教练姓名");
	    } else if ($(ev.target).attr("data-search-type") == "jiaxiao") {
	        $("#searchType").val("jiaxiao");
	        $(".search-content").attr("placeholder", "请输入关键字：如驾校名称");
	    } else if ($(ev.target).attr("data-search-type") == "zh") {
	        $("#searchType").val("zh");
	        $(".search-content").attr("placeholder", "请输入关键字：如驾校名称、教练、陪练");
	    } else {
	        $("#searchType").val("pl");
	        $(".search-content").attr("placeholder", "请输入关键字：如陪练姓名");
	    }
	});

	/**
	 * 点击document时隐藏地区框以及搜索条件框
	 */
	$(document).click(function (ev) {
	    var _con = $('#city_select');
	    if (!_con.is(ev.target) && _con.has(ev.target).length === 0) {
	        $('#city_select').hide();
	    }
	    $(".dropdown-menu").hide();
	});

	/**
	 * 搜索条件框点击选中条件后隐藏
	 */
	$(".dropdown-menu").delegate("li", "click", function () {
	    $(".dropdown-menu").hide();
	    return false;
	});

	/**
	 * 搜索条件框点击后显示
	 */
	$(".search-content-toggle").click(function () {
	    $(".dropdown-menu").show();
	    return false;
	});

	/**
	 * 根据所选的城市跳转页面
	 * @param {*} obj 当前this对象a标签
	 */
	function changeLocation(obj) {
	    var value = $(obj).attr("Val");
	    var chooseName = $(obj).html();
	    var location = window.document.location.href;
	    var pathName = location.split("/");
	    cookie.set("local_city", chooseName);
	    cookie.set("local_city_pingying", value);
	    if (!regtyep5.test(locationurlnow) && !regtyep6.test(locationurlnow)) {
	        obj.href = "http://" + pathName[2] + value;
	    } else {
	        $("span.comment-header-city").text(chooseName);
	        $("span.comment-header-city").attr("name", chooseName);
	        obj.href = "javascript:void(0);";
	        $(".info-city-list a").removeClass("active");
	        $(obj).addClass("active");
	        setTimeout(function () {
	            $('.comment-header-search-position .info').hide();
	        }, 0);
	        if (regdetail2.test(locationurlnow)) {
	            XueCheTv.loadRecJx();
	        }
	        if ($(obj).attr("name") == "全国") {
	            $(".switch-city").show();
	        } else {
	            $(".switch-city").hide();
	        }
	    }
	}
	/**
	 * 暂时注释
	 */
	// $(".info-initials-city a,.info-hot-city a").click(function () {
	//     changeLocation(this);
	// });

	/**
	 * 头部导航栏切换不同地区路径拼接
	 * @param {*} obj 当前元素
	 */
	function linkclick(obj) {
	    if ($(obj).attr("data-track")) {
	        hit($(obj).attr("data-track"));
	    }
	    var baseurl = "";
	    switch (obj.getAttribute("linkrul")) {
	        case "jiaxiao":
	            baseurl = "http://jiaxiao.jxedt.com";
	            break;
	        case "jl":
	            baseurl = "http://jl.jxedt.com";
	            break;
	        case "pl":
	            baseurl = "http://pl.jxedt.com";
	            break;
	        default:
	            baseurl = "http:www.jxedt.com";
	    }
	    var afterurl = cookie.get("local_city_pingying");
	    if (null == afterurl) {
	        afterurl = "";
	    }
	    obj.href = baseurl + afterurl;
	}


	/**
	 * 题库hover事件
	 */
	/*$(".question").hover(function () {
	    $(".question_list").show();
	}, function () {
	    $(".question_list").hide();
	});*/

	/**
	 * 点击题库中的某个车型进行cookie操作
	 */
	/*$(".question .drive_card").on("click", "a", function () {
	    questionSwitch($(this), false);
	});*/
	/**
	 * 设定题库链接
	 * @param {*} _this 题库中的某个车型元素
	 * @param {*} flag 是否是初始化
	 */
	/*function questionSwitch(_this, flag) {
	    if (!flag) {
	        // 变更题库文本内容
	        $(".comment-header-car").text(_this.text());
	        // 将选择的题库类型存放到cookie中
	        cookie.set("local_car", _this.text());
	        // 设置每次点击时改变题库标识
	        $(".comment-header-car").attr("topName", _this.attr("danname"));
	        // 将题库标识存放到cookie中
	        cookie.set("local_car_flag", _this.attr("danname"));
	    }

	    // 添加题库默认选择样式
	    var questionCookie = cookie.get("local_car_flag") || "ckm";
	    $(".question .drive_card a").map(function (i, v) {
	        $(v).removeClass("question-active");
	        if ($(v).attr("danname") == questionCookie) {
	            $(v).addClass("question-active");
	        }
	    });
	    $(".car_s_exam_context .title").text(_this.text() + "理论考试");
	    $(".exam_card_body a,.exam_card_footer a").map(function (i, v) {
	        $(v).attr("href", $(v).attr("href").substring(0, 17) + $(".comment-header-car").attr("topname") + $(v).attr("href").substring(20, 27));
	    });

	    //设置banner中科目一和科目四地址跳转
	    $($(".banner_process ul li")[0]).find("a").attr("href", $($(".banner_process ul li")[0]).find("a").attr("href").substring(0, 17) + $(".comment-header-car").attr("topname") + "1/");
	    $($(".banner_process ul li")[3]).find("a").attr("href", $($(".banner_process ul li")[3]).find("a").attr("href").substring(0, 17) + $(".comment-header-car").attr("topname") + "4/");

	    //设置学车流程中科目一和科目四地址跳转
	    $($(".learn_flow ul li")[1]).find("a").attr("href", $($(".learn_flow ul li")[1]).find("a").attr("href").substring(0, 17) + $(".comment-header-car").attr("topname") + "1/");
	    $($(".learn_flow ul li")[4]).find("a").attr("href", $($(".learn_flow ul li")[4]).find("a").attr("href").substring(0, 17) + $(".comment-header-car").attr("topname") + "4/");
	}
*/
/***/ })
/******/ ]);