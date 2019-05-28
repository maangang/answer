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

	'use strict';

	window.isok = false;
	$('.noheight').on('click', function () {
	    $("#footer").animate({
	        left: "-3000px"
	    }, 400, function () {
	        $(".left-layer").animate({
	            left: "0px"
	        }, 400);
	    });
	});
	$('.left-layer').on('click', function () {
	    $(".left-layer").animate({
	        left: "-1000px"
	    }, 1000, function () {
	        $("#footer").animate({
	            left: "0px"
	        }, 400);
	    });
	    // $('#footer').addClass('popup-hide')
	});
	// $('.nh').on('click', function () {
	//     $('.hide').addClass('popup-show')
	// })
	// $('.counterclose').on('click', function () {
	//     $('.hide').removeClass('popup-show')
	// })
	$('.nh').on('click', function () {
	    window.open("http://www.jxedt.com/about");
	});

	//普通提示框
	window.toast = function (msg) {
	    var toastbox = $('<div></div>');
	    toastbox.html(msg);
	    toastbox.attr('class', 'toast');
	    $('body').append(toastbox);
	    setTimeout(function () {
	        toastbox.remove();
	    }, 2000);
	};
	//提交成功提示框
	window.succtoast = function (msg) {
	    var toastbox = $('<div></div>');
	    toastbox.attr('class', 'succtoast');
	    var img = $('<img></img>');
	    img.attr('src', 'http://img.58cdn.com.cn/dist/jxedt/pc/products/jxregister/images/tjicon.png');
	    toastbox.append(img);
	    var span = $('<span></span>');
	    span.html(msg);
	    toastbox.append(span);
	    $('body').append(toastbox);
	    setTimeout(function () {
	        toastbox.remove();
	    }, 2000);
	};

	function check_input() {
	    if ($(".infobox input[name='username']").val() == "") {
	        toast("姓名不能为空");
	        return false;
	    }
	    if ($(".infobox input[name='phone']").val() == "") {
	        toast("手机号不能为空");
	        return false;
	    }
	    return true;
	}

	function insert_biz() {
	    var params = {
	        "username": $(".infobox input[name='biz_username']").val(),
	        "phone": $(".infobox input[name='phone']").val(),
	        "city": $(".infobox select:option").val(),
	        "code": $(".infobox input[name='code']").val()
	    };
	    $.post("/list_1/bizsignup/add/", params, function (data) {
	        if (data == 2) {
	            toast("请先校验手机！");
	        } else {
	            toast("报名成功");
	            clear_input();
	        }
	    });
	}

	function clear_input() {
	    $(".infobox input[type!='button']").val("");
	};
	//先暂时放在这里吧
	//发送验证码时添加cookie
	function addCookie(name, value, expiresHours) {
	    var cookieString = name + "=" + escape(value);
	    //判断是否设置过期时间,0代表关闭浏览器时失效
	    if (expiresHours > 0) {
	        var date = new Date();
	        date.setTime(date.getTime() + expiresHours * 1000);
	        cookieString = cookieString + ";expires=" + date.toUTCString();
	    }
	    document.cookie = cookieString;
	}
	//修改cookie的值
	function editCookie(name, value, expiresHours) {
	    var cookieString = name + "=" + escape(value);
	    if (expiresHours > 0) {
	        var date = new Date();
	        date.setTime(date.getTime() + expiresHours * 1000); //单位是毫秒
	        cookieString = cookieString + ";expires=" + date.toGMTString();
	    }
	    document.cookie = cookieString;
	}
	//根据名字获取cookie的值
	function getCookieValue(name) {
	    var strCookie = document.cookie;
	    var arrCookie = strCookie.split("; ");
	    for (var i = 0; i < arrCookie.length; i++) {
	        var arr = arrCookie[i].split("=");
	        if (arr[0] == name) {
	            return unescape(arr[1]);
	            break;
	        }
	    }
	    return "";
	}
	//校验手机号是否合法
	function isPhoneNum() {
	    var phonenum = $(".infobox #phone").val();
	    var myreg = /^1\d{10}$/;
	    if (!myreg.test(phonenum)) {
	        toast('请输入有效的手机号码！');
	        return false;
	    } else {
	        return true;
	    }
	}

	//地图
	// var map = new BMap.Map("allmap");
	// var point = new BMap.Point(116.511862,39.993509);
	// map.centerAndZoom(point,12);
	// var mk = new BMap.Marker(point);
	// 		map.addOverlay(mk);
	// map.enableScrollWheelZoom(true)
	// var geoc = new BMap.Geocoder();    
	// var geolocation = new BMap.Geolocation();
	// var address = {}
	// var lnglat = {}
	// geolocation.getCurrentPosition(function(r){
	// 	if(this.getStatus() == BMAP_STATUS_SUCCESS){
	//         var mk = new BMap.Marker(r.point);
	// 		map.addOverlay(mk);
	// 		map.panTo(r.point);
	//         $('#address').attr({'data-lng':r.point.lng,'data-lat':r.point.lat,'data-province':r.address.province,'data-city':r.address.city,'data-district':r.address.district})
	//         address = r
	// 	}      
	// });
	// map.addEventListener("click", function(e){        
	//     var pt = e.point;
	//     lnglat = pt
	//     var point = new BMap.Point(pt.lng, pt.lat);
	//     map.centerAndZoom(point, 15);    
	//     var marker = new BMap.Marker(point);     
	//     map.addOverlay(marker);
	//     geoc.getLocation(pt, function(rs){
	//         address = rs.addressComponents;
	//     });        
	// });
	window.rid = '';

	$('.sendcode').on('click', function () {
	    // var id58 = '';
	    // id58 = getCookieValue('id58');
	    var d = new Date();
	    var time = d.getTime();
	    if (check_input()) {
	        if (isPhoneNum()) {
	            if ($('.infobox .sendcode').text() == '获取验证码') {
	                $.ajax({
	                    dataType: 'json',
	                    type: 'get',
	                    url: 'http://user.jxedt.com/captcha/get',
	                    // headers: {
	                    //     'id58': id58
	                    // },
	                    crossDomain: true == !document.all,
	                    data: {
	                        t: 1,
	                        m: 2,
	                        p: 1,
	                        mobile: $(".infobox #phone").val(),
	                        _: time
	                    },
	                    // jsonpCallback: 'callback',
	                    success: function success(res) {
	                        console.log("res", res);
	                        if (res.code == 0) {
	                            window.rid = res.result.rid;
	                            var n = 60;
	                            var timer = setInterval(function () {
	                                if (n <= '1') {
	                                    clearInterval(timer);
	                                    $('.infobox .sendcode').html('获取验证码');
	                                } else {
	                                    $('.infobox .sendcode').html(--n);
	                                }
	                            }, 1000);
	                        } else {
	                            toast(res.msg);
	                        }
	                    },
	                    error: function error(_error) {
	                        console.log("error", _error);
	                    }
	                });
	            }
	        }
	    }
	});

	$('#address').focus(function () {
	    $('.maphide').show();
	});
	$('.mapbox').find('.close').on('click', function () {
	    $('.maphide').hide();
	});
	$('.mapbox').find('.sure').on('click', function () {
	    if (lnglat.lng) {
	        $('#address').val(address.province + address.city + address.district + address.street + address.streetNumber);
	        $('#address').attr({
	            'data-lng': lnglat.lng,
	            'data-lat': lnglat.lat,
	            'data-province': address.province,
	            'data-city': address.city,
	            'data-district': address.district
	        });
	        $('.maphide').hide();
	    } else {
	        $('.maphide').hide();
	    }
	});
	$('.beginout').on('click', function () {
	    if (check_input()) {
	        if (isPhoneNum()) {
	            if ($('.infobox #code').val().length <= 1) {
	                toast('请输入正确的验证码');
	            } else {
	                window.isok = true;
	            }
	        }
	    }
	});

/***/ })
/******/ ]);