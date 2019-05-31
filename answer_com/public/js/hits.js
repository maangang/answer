var _hmt = _hmt || [];
// var _trackURL = "{'cate':'表现类别ID全路径','area':'表现地域ID全路径','pagetype':'页面类型','page':'细化页面类型'}";

//获取url里面的参数


(function () {
    var script =getElement('hits.js')
    var code = 'b54f0f8b3b75a8b7486c9adedf28f361'
    if (script) {
        var parms = script.src.split('?');
        if (parms.length > 1) {
            code = parms[1];
        }
    }
   if(!getElement("hm.baidu.com/hm.js")){
    var hm = document.createElement("script");
    hm.src =location.protocol+ "//hm.baidu.com/hm.js?" + code;
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
   }
})();

function  getElement(selector) {
    if (document.querySelector){
       return document.querySelector("script[src*='"+selector+"']")
    }else  if($){
      return  $("script[src*='"+selector+"']")[0]
    }
    else {
        var scripts =document.getElementsByTagName("script");
        for(var index in scripts){
            var src =scripts[index].getAttribute('src');
            if(src.indexOf(selector)){
                return  scripts[index];
            }
        }
    }
}

/**
 * 埋点初始化，主要是为了58埋点初始化用点
 * @param args 58埋点点初始化参数
 */
function inithit(args) {

    var _trackURL_script = document.createElement("script");
    var  code ="var _trackURL = '{\"cate\":\"" + args.cate + "\",\"area\":\"" + args.area + "\",\"pagetype\":\"" + args.pagetype + "\",\"page\":\"" + args.page + "\"}'";
    try {
        _trackURL_script.appendChild(document.createTextNode(code));
    } catch (ex) {
        _trackURL_script.text = code;
    }    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(_trackURL_script, s);
    if(!getElement("tracklog.58.com/referrer_jxedt_pc.js")) {
        var hm = document.createElement("script");
        hm.src = location.protocol + "//tracklog.58.com/referrer_jxedt_pc.js";
        s.parentNode.insertBefore(hm, s);
    }
}

/**
 * 埋点方法
 * @param args   触发事件的埋点点组件点名称或者别名 百度点第三个参数
 */
function hit(args) {
    var temp = JSON.parse(_trackURL)

    // var temp =JSON.parse("{\"cate\":\"NA\",\"area\":\"NA\",\"pagetype\":\"NA\",\"page\":\"NA\"}")
    _hmt.push(['_trackEvent', temp.pagetype, args]);
    typeof(window.clickLog) === 'function' && window.clickLog('from=' + args);
}
