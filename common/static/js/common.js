/*!
 * Transport v1.0.0 (http://buy.ems.com.cn)
 * @author kevin
 * @email askyiwang@gamil.com
 * Copyright 2011-2015 EMS, Inc.
 * Licensed under the MIT license
 * base common js
 * ----------------------------------------------------------------------------------------------
 */
if(!window.C) {window.C = {};}
(function(c){
    // 配置基础URL
    c.webRouter = {
        'host':'',
        'baseUrl':'',
        'homeUrl':'',
        'currentUrl':''
    },
    // 工具类
    c.tools = {
        /*
         * 加法函数
         * @params string or number or int or float arg1
         * @params string or number or int or float arg2
         * return number
         */
        add: function (arg1, arg2) {
            arg1 = arg1.toString(), arg2 = arg2.toString();
            var arg1Arr = arg1.split("."), arg2Arr = arg2.split("."), d1 = arg1Arr.length == 2 ? arg1Arr[1] : "", d2 = arg2Arr.length == 2 ? arg2Arr[1] : "";
            var maxLen = Math.max(d1.length, d2.length);
            var m = Math.pow(10, maxLen);
            var result = Number(((arg1 * m + arg2 * m) / m).toFixed(maxLen));
            var d = arguments[2];
            return typeof d === "number" ? Number((result).toFixed(d)) : result;
        },
        /*
         * 减法函数
         * @params string or number or int or float arg1
         * @params string or number or int or float arg2
         * return number
         */
        sub: function (arg1, arg2) {
            return t.tools.Add(arg1, -Number(arg2), arguments[2]);
        },
        /*
         * 乘法函数
         */
        mul: function (arg1, arg2) {
            var r1 = arg1.toString(), r2 = arg2.toString(), m, resultVal, d = arguments[2];
            m = (r1.split(".")[1] ? r1.split(".")[1].length : 0) + (r2.split(".")[1] ? r2.split(".")[1].length : 0);
            resultVal = Number(r1.replace(".", "")) * Number(r2.replace(".", "")) / Math.pow(10, m);
            return typeof d !== "number" ? Number(resultVal) : Number(resultVal.toFixed(parseInt(d)));
        },
        /*
         * 除法函数
         * @params string or number or int or float arg1
         * @params string or number or int or float arg2
         * return number
         */
        div: function (arg1, arg2) {
            var r1 = arg1.toString(), r2 = arg2.toString(), m, resultVal, d = arguments[2];
            m = (r2.split(".")[1] ? r2.split(".")[1].length : 0) - (r1.split(".")[1] ? r1.split(".")[1].length : 0);
            resultVal = Number(r1.replace(".", "")) / Number(r2.replace(".", "")) * Math.pow(10, m);
            return typeof d !== "number" ? Number(resultVal) : Number(resultVal.toFixed(parseInt(d)));
        },
        /*
         * 比较函数
         * @params string or number or int or float arg1
         * @params string or number or int or float arg2
         * return number -1 小于   0 相等   1 大于 -2 出错
         *
         */
        compare: function (arg1, arg2) {
            arg1 = arg1.toString(), arg2 = arg2.toString();
            var arg1Arr = arg1.split("."), arg2Arr = arg2.split("."), d1 = arg1Arr.length == 2 ? arg1Arr[1] : "", d2 = arg2Arr.length == 2 ? arg2Arr[1] : "";
            var maxLen = Math.max(d1.length, d2.length);
            var m = Math.pow(10, maxLen);
            if(Number(arg1 * m) == Number(arg2 * m)) {
                return 0;
            } else if(Number(arg1 * m) < Number(arg2 * m)) {
                return -1;
            } else if(Number(arg1 * m) > Number(arg2 * m)) {
                return 1;
            }
        },
        /*
         * tofixed
         * @params string or number or int or float arg1
         * return number
         */
        tofixed: function (arg1) {
            arg1 = arg1.toString();
            var arg1Arr = arg1.split("."), d1 = arg1Arr.length == 2 ? arg1Arr[1] : "";
            var m = Math.pow(10, d1.length);
            var result = Number(((arg1 * m) / m).toFixed(d1.length));
            var d = arguments[1];
            return typeof d === "number" ? Number((result).toFixed(d)) : result;
        },
        trim: function(str) {
             return str.replace(/(^\s*)|(\s*$)/g, "");
        },
        ltrim: function(str) {
            return str.replace(/(^\s*)/g,"");
        },
        rtrim: function(str) {
            return str.replace(/(\s*$)/g,"");
        },
        isEmpty: function(exp) {
            if(exp === null || typeof exp == "undefined" || exp === "") {
                return true;
            } else {
                return false;
            }
        }
},
    //  cookie 类封装
    c.cookie = {
        /*
         * 获取 cookie 对象
         */
        getCookieObj : function() {
            var cookies = {};
            if(document.cookie) {
                var objs = document.cookie.split('; ');
                for(var i in objs) {
                    var index = objs[i].indexOf('='),
                    name = objs[i].substr(0, index),
                    value = objs[i].substr(index + 1, objs[i].length);
                    cookies[name] = value;
                }
            }
            return cookies;
        },
        /*
         * 设置 cookie
         * @params string name cookie name
         * @params string value cookie value
         * @params obj {} opts maxAge, path, domain, secure
         * example c.cookie.set('age', 18, {path:'www.domain.com'})
         */
         set : function(name, value, opts) {
            if(name && value){
                var cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value);
                //可选参数
                if(opts){
                    if(opts.maxAge){
                        cookie += '; max-age=' + opts.maxAge;
                    }
                    if(opts.path){
                        cookie += '; path=' + opts.path;
                    }
                    if(opts.domain){
                        cookie += '; domain=' + opts.domain;
                    }
                    if(opts.secure){
                        cookie += '; secure';
                    }
                }
                document.cookie = cookie;
                return cookie;
            } else {
                return '';
            }
        },
        /*
         *  获取cookie
         *  @params string name cookie name
         *  @return string cookie value
         */
        get : function(name){
            return decodeURIComponent(c.cookie.getCookiesObj()[name]) || null;
        },
        /*
         *  清除某个cookie 根据 cookie name
         *  @params string name cookie name
         */
        remove : function(name){
            var cookies = c.cookie.getCookiesObj();
            for(var key in cookies){
                document.cookie = key + '=; max-age=0';
            }
        },
        /*
         *  清除所有cookie
         *
         */
        clear : function(){
            var cookies = c.cookie.getCookiesObj();
            for(var key in cookies){
                document.cookie = key + '=; max-age=0';
            }
        },
        /*
         * 获取所有cookies
         *
         */
        getCookies : function(){
            return c.cookie.getCookieObj();
        },
    },
    // layer 弹窗类
    c.layer = {
        alert: function(s) {
            alert(s);

        }
    }
})(window.C);
/*
 * 扩展下原生的js
 * @包含 in_array() indexOf() remove() 方法
 */
Array.prototype.in_array = function(e)
{
    for (i = 0; i < this.length; i++) {
        if (this[i] == e) {
            return true;
        }
    }
    return false;
}
Array.prototype.indexOf = function(val) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] == val) return i;
    }
    return -1;
};
Array.prototype.remove = function(val) {
    var index = this.indexOf(val);
    if (index > -1) {
        this.splice(index, 1);
    }
};