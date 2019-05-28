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

	// 需要动态传入信息
	$(document).ready(function () {
	    inithit({
	        'cate': 'NA',
	        'area': 'NA',
	        'pagetype': 'footer',
	        'page': 'info'
	    });

	    var reg = /^http:\/\/[A-Za-z]{2,}.jxedt.com\/[0-9]{3,}\/.*$/;
	    var regInfo = /^http:\/\/zhinan.jxedt.com\/info\/[0-9]{3,}.*$/;
	    var regTv = /^http:\/\/tv.jxedt.com\/info\/[0-9]{3,}.*$/;
	    var regZhinan = /^http:\/\/zhinan.jxedt.com\/target\/.*$/;
	    if (reg.test(document.location.href) || regInfo.test(document.location.href) || regZhinan.test(document.location.href) || regTv.test(document.location.href)) {
	        /*$("a.nh").hide();*/
	        $("#footer").hide();
	    }

	    // $('.right-nav-common').hide(); //隐藏go to top按钮
	    $(window).scroll(function () {
	        if (reg.test(document.location.href) || regInfo.test(document.location.href) || regZhinan.test(document.location.href) || regTv.test(document.location.href)) {
	            /*$("a.nh").hide();*/
	            $(".right-nav-common").hide();
	        } else {
	            if ($(this).scrollTop() > 100) {
	                $('.right-nav-common').fadeIn();
	            } else {
	                $('.right-nav-common').fadeOut();
	            }
	        }
	    });

	    $('.gotop').click(function () {
	        $('html ,body').animate({
	            scrollTop: 0
	        }, 500);
	        return false;
	    });
	});
	var flag = true;
	$('.beginout').on('click', function () {
	    if (isok && flag) {
	        var r_id = window.rid;
	        flag = false;
	        // $("#RangersForm #jlname").val($(".infobox #name").val());
	        // $("#RangersForm #jlmobile").val($(".infobox #phone").val());
	        // $("#RangersForm #jllicensetype").val($(".infobox #type").val());
	        // $("#RangersForm #jlmessageid").val(r_id);
	        // $("#RangersForm #jlvalidcode").val($(".infobox #code").val());
	        // $("#RangersForm #jlsource").val(2);
	        // var t = $('#RangersForm').serializeArray();
	        // $.ajax({
	        //     dataType: "json",
	        //     type: "post",
	        //     url: $("#RangersForm").attr("action"),
	        //     data: t,
	        //     success: function (res) {
	        //         if (res.code == 0) {
	        //             hit("JXEDT_FUCENG_KSJS");
	        //             $(".beginin").html("计算完成");
	        //             $(".allmoney").html(e.priceTotle);
	        //             $(".file").html(e.archivesPrice);
	        //             $(".photo").html(e.photoPrice);
	        //             $(".exam").html(e.examPrice);
	        //             $(".health").html(e.medicalPrice);
	        //             $(".train").html(e.jxPrice);
	        //             $(".papers").html(e.licensePrice);
	        //             $(".make-up").html(e.makeUpExamPrice);
	        //         } else {
	        //             showToast(res.msg);
	        //         }
	        //     }
	        // });
	        $.ajax({
	            dataType: "jsonp",
	            type: "post",
	            url: "http://jiaxiao.jxedt.com/list_1/jxsignup/add/",
	            data: {
	                "username": $(".infobox input[name='username']").val(),
	                "phone": $(".infobox input[name='phone']").val(),
	                "code": $(".infobox input[name='code']").val(),
	                "licensetype": $(".infobox #type").val(),
	                "source": 2,
	                "rid": r_id
	            },
	            jsonpCallback: "callback",
	            success: function success(e) {
	                if (0 == e.code) {
	                    hit("JXEDT_FUCENG_KSJS");
	                    $(".beginin").html("计算完成");
	                    $(".allmoney").html(e.priceTotle);
	                    $(".file").html(e.archivesPrice);
	                    $(".photo").html(e.photoPrice);
	                    $(".exam").html(e.examPrice);
	                    $(".health").html(e.medicalPrice);
	                    $(".train").html(e.jxPrice);
	                    $(".papers").html(e.licensePrice);
	                    $(".make-up").html(e.makeUpExamPrice);
	                } else {
	                    toast(e.message);
	                    flag = true;
	                }
	            }
	        });
	    }
	});

	$('.external-header span').each(function () {
	    $(this).click(function () {
	        $(".external-header").find("a").removeClass("active_footer");
	        $(this).find("a").addClass('active_footer');
	        $('.external-centext').eq($(this).index()).show().siblings(".external-centext").hide();
	    });
	});
	//详情页面不显示底部咨询浮层 不显示友情链接

	// var are = cookie.get("local_city");
	// if ((null == are && "" == are) || "全国" != are) {
	//     $($(".external-header span")[0]).hide();
	//     $($(".external-header span")[1]).click();
	// }

/***/ })
/******/ ]);