function ajax() {
    //<![CDATA[
    this.pURI = null;
    this.pMethod = "GET";
    this.pDate = null;
    this.pAsyn = true;
    //]]>
}
//创建xmlhttp对象,判断浏览器版本是否支持
ajax.prototype.xmlhttp = function () {
    var xmlhttp = null;
    if (window.ActiveXObject) {
        var arrayActive = ["Msxml2.XMLHTTP.6.0", "Msxml2.XMLHTTP.5.0", "Msxml2.XMLHTTP.4.0", "Msxml2.XMLHTTP.3.0", "Msxml2.XMLHTTP", "Microsoft.XMLHTTP"];
        for (var i = 0; i < arrayActive.length; i++) {
            try {
                xmlhttp = new ActiveXObject(arrayActive[i]);
                break;
            } catch (e) {
                continue;
            }
        }
    } else if (window.XMLHttpRequest) {
        try {
            xmlhttp = new XMLHttpRequest();
            if (xmlhttp.overrideMimeType) { xmlhttp.overrideMimeType("text/xml"); }
        } catch (e) {
            xmlhttp = null;
        }
    } else {
        xmlhttp = null;
    }
    return xmlhttp;
}
//发出请求并返回字符串
ajax.prototype.Request = function (callback) {
    try {
        var oXmlhttp = this.xmlhttp();
        if (oXmlhttp == null || this.pURI == null || this.pURI == "") return;
        this.pMethod = this.pMethod.toUpperCase();
        if (this.pMethod == "GET") {
            oXmlhttp.open(this.pMethod, this.pURI + "?" + this.pDate, this.pAsyn);
            oXmlhttp.setRequestHeader("Content-Type", "text/html;charset=utf-8");
        } else {
            oXmlhttp.open(this.pMethod, this.pURI, this.pAsyn);
            oXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        }
        oXmlhttp.onreadystatechange = function () {
            if (oXmlhttp.readyState == 4) {//alert(oXmlhttp.getallresponseheaders);
                if (oXmlhttp.status == 200) {
                    callback(oXmlhttp);
                    oXmlhttp = null;
                }
            }
        }
        oXmlhttp.send(this.pMethod == "POST" ? this.pDate : null);
        //return;
    } catch (e) {
        return;
    }
}

function jsgetCookie(name)//取cookies函数
{
    var res = "";
    var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
    if (arr != null)
        res = unescape(arr[2]);
    return res;
}

function jsSetCookie(name, value, second)//三个参数  cookie名， cookie值， cookie过期时间（秒） 
{
    var exp = new Date();    //new Date("December 31, 9998");
    exp.setTime(exp.getTime() + second * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
var tsetTimeout;
var isshowbg = true;
function ShowDialog() {
    this.msgobjname = "";
    this.show = function (title, height, width, msg, isshowbg) {
        var htmlstr = "";
        var mmmid = "append_parent";
        if (document.getElementById(mmmid) != null) { return; };
        var div = document.createElement("div");
        div.id = mmmid;
        div.style.cssText = "position: absolute;z-index:999";
        var htmlstr = "";
        htmlstr += "<table cellspacing=\"0\" cellpadding=\"0\" class=\"fwin\" canmove=\"true\" style=\"empty-cells: show;border-collapse: collapse;\">"
            + "<tbody><tr><td class=\"t_l\"  style=\"cursor: move\" canmove=\"true\"></td><td><div style=\"cursor: move\" class=\"t_c\" canmove=\"true\"></div></td><td class=\"t_r\"  style=\"cursor: move\" canmove=\"true\"></td></tr>"
            + "<tr><td style=\"cursor: move\" class=\"m_l\" canmove=\"true\"> </td>"
            + "<td id=\"fwin_content_login\" class=\"m_c\" style=\"background:#fff\" fwin=\"login\">"
            + "<div id=\"main_messaqge_LLapc\" fwin=\"login\">"
            + "<div id=\"layer_lostpw_LLapc\" fwin=\"login\">"
            + "<h3 class=\"flb\" ><em id=\"returnmessage3_LLapc\" fwin=\"login\">" + title + "</em><span>";
        htmlstr += "<a title=\"关闭\" href=\"javascript:void(0)\" onclick=\"hideshowlogindiv('append_parent')\" class=\"flbc\"></a></span></h3>";
        htmlstr += "<div class='line'></div>"
        htmlstr += "<div class=\"c cl\" style=\"height:" + height + "; width:" + width + "; overflow:hidden\" id=\"showdialog_maindiv\">";
        htmlstr += "<div class=\"bw0\"><table width='100%'><tbody><tr><td align='center'>"
            + msg
            + "</td></tr></tbody></table></div>";
        htmlstr += "</div></div>";
        htmlstr += "</div></td><td style=\"cursor: move\" canmove=\"true\" class=\"m_r\"></td></tr><tr><td class=\"b_l\"  style=\"cursor: move\" canmove=\"true\" ></td><td style=\"cursor: move\" canmove=\"true\" class=\"b_c\"></td><td class=\"b_r\"  style=\"cursor: move\" canmove=\"true\"></td></tr></tbody></table>";
        htmlstr += "</div>";
        div.innerHTML = htmlstr;
        document.body.appendChild(div);
        div.style.left = String(((document.documentElement.clientWidth - div.offsetWidth) / 2)+8) + "px";
        //div.style.top = String(document.documentElement.scrollTop + 40 + (document.getElementById("main_M").clientHeight - div.offsetHeight) / 2) + "px";
	var scrollTop = document.body.scrollTop || document.documentElement.scrollTop || 0;

        div.style.top = String(scrollTop + (document.documentElement.clientHeight - div.offsetHeight) / 2) + "px";
        var md = false, mobj, ox, oy;
        document.onmousedown = function (ev) {
            var ev = ev || window.event;
            var evt = ev.srcElement || ev.target;
            if (typeof (evt.getAttribute("canmove")) == "undefined") {
                return;
            }
            if (evt.getAttribute("canmove")) {
                md = true;
                mobj = document.getElementById("append_parent");
                ox = mobj.offsetLeft - ev.clientX;
                oy = mobj.offsetTop - ev.clientY;
            }
        }
        document.onmouseup = function () {
            md = false;
        }
        document.onmousemove = function (ev) {
            var ev = ev || window.event;
            if (md) {
                mobj.style.left = (ev.clientX + ox) + "px";
                mobj.style.top = (ev.clientY + oy) + "px";
            }
        }
        if (isshowbg) createBgshowlogindiv('#000000', 'fathershowlogindiv');

    }

}
// 创建背景层
function createBgshowlogindiv(color, id) {

    var width = document.body.scrollWidth;
    var height = document.body.scrollHeight;
    if (document.documentElement) {
        width = Math.max(width, document.documentElement.scrollWidth);
        height = Math.max(height, document.documentElement.scrollHeight);
    }
    var div = document.createElement("div");
    div.id = id;
    div.style.position = "absolute";
    div.style.top = "0px";
    div.style.left = "0px";
    div.style.width = width + "px";
    div.style.height = height + "px";
    div.style.zIndex = "998";
    div.style.background = color;

//window.ActiveXObject
    if (document.body.filters)
        div.style.filter = "alpha(opacity=20)";
    else
        div.style.opacity = "0.2";

    document.getElementsByTagName("body")[0].appendChild(div);
}


function hideshowlogindiv(id) {
    var obj1 = document.getElementById(id);
    if (obj1) obj1.parentNode.removeChild(obj1);
    var obj = document.getElementById("fathershowlogindiv");
    if (obj) obj.parentNode.removeChild(obj);
}

var ShowDialogo = new ShowDialog(); //设置对象名,供内部引用 
ShowDialogo.msgobjname = "ShowDialogo"; //定义回调函数
var title = "驾校一点通解释：";
var height = "auto";
var width = "340px";

// 去空格
function removeSpace(v) {
    return v.replace(/(^\s*)|(\s*)|(\s*$)/g, "");
}
function $$(id) {
    return document.getElementById(id);
}


//返回
function goback() {
    window.open("http://mnks.jxedt.com/");
    this.window.opener = null;
    this.window.open('', '_self');
    this.window.close();
}
function checkfindfrm(obj) {
    if (removeSpace(obj.key.value) == "") {
        alert("请输入关键字！")
        return false;
    } else if (removeSpace(obj.key.value) == "请输入关键字") {
        alert("请输入关键字！")
        return false;
    }
    return true;
}
function focuskey(obj) {
    if (removeSpace(obj.value) == "请输入关键字") {
        obj.value = "";
    }
}
function blurkey(obj) {
    if (removeSpace(obj.value) == "") {
        obj.value = "请输入关键字";
    }
}
function dofind() {
    var finddivid = "topbarfinddiv";
    $$(finddivid).style.display = "block";
    if(typeof(_bestanswerstatus)!='undefined'){_bestanswerstatus = -1}
    document.onclick = function (e) {
        if (!e) var e = window.event;
        if (e.srcElement) {
            var a = e.srcElement; //.getAttribute("id")
        } else {
            var a = e.target; //.getAttribute("id")
        }
        var showid = "topbarbtns_find";
        if (a.id) {
            if (a.id != showid && a.id != finddivid) {
                $$(finddivid).style.display = "none"; _bestanswerstatus = 0;
            }
        } else {
            if (!a.parentNode || a.parentNode.id != finddivid) {
                $$(finddivid).style.display = "none"; _bestanswerstatus = 0;
            }
        }
    }
}

function mobilereurl(url,types){
	var jxedtmobile = /android/i.test(navigator.userAgent) || /iphone/i.test(navigator.userAgent);
	if(jxedtmobile){
		if(url=="chapter"){mobileurl="http://m.jxedt.com/mnks/chapter.asp?type="+types;}
		if(url=="sxlx"){mobileurl="http://m.jxedt.com/mnks/sxlx.asp?type="+types;}
		if(url=="sjlx"){mobileurl="http://m.jxedt.com/mnks/sjlx.asp?type="+types;}
		if(url=="exam"){mobileurl="http://m.jxedt.com/mnks/exam.asp?type="+types;}
		if(url=="error"){mobileurl="http://m.jxedt.com/mnks/error.asp?type="+types;}
		if(url=="chap"){mobileurl="http://m.jxedt.com/mnks/chap.asp?type="+types;}
		mobileurl="http://m.jxedt.com/";
		window.location.href=mobileurl;
	}
}


function playflash(o,id,w,h,pl){
	//alert($$("d_"+id).innerHTML)
	o.parentNode.removeChild(o);
	var _mw = 50;
	var _nw = w+_mw,_nh = parseInt(h*_nw/w,10);
	var _mo = $$("d_"+id);
	
	var _remove = $$("remove_"+id);
	_remove.innerHTML = "<img src=\"./images/loading.gif\" style=\"margin-top:50px\"/>";
	_remove.style.cssText = "left:"+(pl-_mw)+"px;width:"+_nw+"px;height:"+_nh+"px;z-index: 990;background:#ffffff;position: absolute;top: 0;text-align: center;";
	
	_mo.style.left=(pl-_mw)+"px";
	_mo.style.width = _nw+"px";
	_mo.style.height = _nh+"px";
	var flashurl = $$("hidden_"+id).value;
	var htmlstrswf="<object wmode='transparent' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0' width='"+_nw+"' height='"+_nh+"'><param name='allowScriptAccess' value='sameDomain'><param name='movie' value='"+flashurl+"'><param name='quality' value='high'><param name='wmode' value='transparent'><param name='bgcolor' value='#ffffff'><embed src='"+flashurl+"' quality='high' bgcolor='#ffffff' width='"+_nw+"' height='"+_nh+"' allowScriptAccess='sameDomain' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' /></object>";
	_mo.innerHTML = htmlstrswf;
	
	setTimeout(function(){
		_remove.parentNode.removeChild(_remove);	
	},1000)
}


