<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.design/demo/quantic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 17:33:30 GMT -->
<head>
    <meta charset="utf-8"/>
{{--    <script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>var __ez = __ez || {};--}}
{{--        __ez.stms = Date.now();--}}
{{--        __ez.evt = {};--}}
{{--        __ez.script = {};--}}
{{--        __ez.ck = __ez.ck || {};--}}
{{--        __ez.template = {};--}}
{{--        __ez.template.isOrig = true;--}}
{{--        __ez.queue = (function () {--}}
{{--            var count = 0, incr = 0, items = [], timeDelayFired = false, hpItems = [], lpItems = [], allowLoad = true;--}}
{{--            var obj = {--}}
{{--                func: function (name, funcName, parameters, isBlock, blockedBy, deleteWhenComplete, proceedIfError) {--}}
{{--                    var self = this;--}}
{{--                    this.name = name;--}}
{{--                    this.funcName = funcName;--}}
{{--                    this.parameters = parameters === null ? null : (parameters instanceof Array) ? parameters : [parameters];--}}
{{--                    this.isBlock = isBlock;--}}
{{--                    this.blockedBy = blockedBy;--}}
{{--                    this.deleteWhenComplete = deleteWhenComplete;--}}
{{--                    this.isError = false;--}}
{{--                    this.isComplete = false;--}}
{{--                    this.isInitialized = false;--}}
{{--                    this.proceedIfError = proceedIfError;--}}
{{--                    this.isTimeDelay = false;--}}
{{--                    this.process = function () {--}}
{{--                        log("... func = " + name);--}}
{{--                        self.isInitialized = true;--}}
{{--                        self.isComplete = true;--}}
{{--                        log("... func.apply: " + name);--}}
{{--                        var funcs = self.funcName.split('.');--}}
{{--                        var func = null;--}}
{{--                        if (funcs.length > 3) {--}}
{{--                        } else if (funcs.length === 3) {--}}
{{--                            func = window[funcs[0]][funcs[1]][funcs[2]];--}}
{{--                        } else if (funcs.length === 2) {--}}
{{--                            func = window[funcs[0]][funcs[1]];--}}
{{--                        } else {--}}
{{--                            func = window[self.funcName];--}}
{{--                        }--}}
{{--                        if (typeof func !== 'undefined' && func !== null) {--}}
{{--                            func.apply(null, this.parameters);--}}
{{--                        }--}}
{{--                        if (self.deleteWhenComplete === true) delete items[name];--}}
{{--                        if (self.isBlock === true) {--}}
{{--                            log("----- F'D: " + self.name);--}}
{{--                            processAll();--}}
{{--                        }--}}
{{--                    }--}}
{{--                }, file: function (name, path, isBlock, blockedBy, async, defer, proceedIfError) {--}}
{{--                    var self = this;--}}
{{--                    this.name = name;--}}
{{--                    this.path = path;--}}
{{--                    this.async = async;--}}
{{--                    this.defer = defer;--}}
{{--                    this.isBlock = isBlock;--}}
{{--                    this.blockedBy = blockedBy;--}}
{{--                    this.isInitialized = false;--}}
{{--                    this.isError = false;--}}
{{--                    this.isComplete = false;--}}
{{--                    this.proceedIfError = proceedIfError;--}}
{{--                    this.isTimeDelay = false;--}}
{{--                    this.process = function () {--}}
{{--                        self.isInitialized = true;--}}
{{--                        log("... file = " + name);--}}
{{--                        var scr = document.createElement('script');--}}
{{--                        scr.src = path;--}}
{{--                        if (async === true) scr.async = true; else if (defer === true) scr.defer = true;--}}
{{--                        scr.onerror = function () {--}}
{{--                            log("----- ERR'D: " + self.name);--}}
{{--                            self.isError = true;--}}
{{--                            if (self.isBlock === true) {--}}
{{--                                processAll();--}}
{{--                            }--}}
{{--                        };--}}
{{--                        scr.onreadystatechange = scr.onload = function () {--}}
{{--                            var state = scr.readyState;--}}
{{--                            log("----- F'D: " + self.name);--}}
{{--                            if ((!state || /loaded|complete/.test(state))) {--}}
{{--                                self.isComplete = true;--}}
{{--                                if (self.isBlock === true) {--}}
{{--                                    processAll();--}}
{{--                                }--}}
{{--                            }--}}
{{--                        };--}}
{{--                        document.getElementsByTagName('head')[0].appendChild(scr);--}}
{{--                    }--}}
{{--                }, fileLoaded: function (name, isComplete) {--}}
{{--                    this.name = name;--}}
{{--                    this.path = "";--}}
{{--                    this.async = false;--}}
{{--                    this.defer = false;--}}
{{--                    this.isBlock = false;--}}
{{--                    this.blockedBy = [];--}}
{{--                    this.isInitialized = true;--}}
{{--                    this.isError = false;--}}
{{--                    this.isComplete = isComplete;--}}
{{--                    this.proceedIfError = false;--}}
{{--                    this.isTimeDelay = false;--}}
{{--                    this.process = function () {--}}
{{--                    };--}}
{{--                }--}}
{{--            };--}}

{{--            function init() {--}}
{{--                window.addEventListener("load", function () {--}}
{{--                    setTimeout(function () {--}}
{{--                        timeDelayFired = true;--}}
{{--                        log('TDELAY -----');--}}
{{--                        processAll();--}}
{{--                    }, 5000);--}}
{{--                }, false);--}}
{{--            }--}}

{{--            function addFile(name, path, isBlock, blockedBy, async, defer, proceedIfError, priority) {--}}
{{--                var item = new obj.file(name, path, isBlock, blockedBy, async, defer, proceedIfError);--}}
{{--                if (priority === true) {--}}
{{--                    hpItems[name] = item--}}
{{--                } else {--}}
{{--                    lpItems[name] = item--}}
{{--                }--}}
{{--                items[name] = item;--}}
{{--                checkIfBlocked(item);--}}
{{--            }--}}

{{--            function setallowLoad(settobool) {--}}
{{--                allowLoad = settobool--}}
{{--            }--}}

{{--            function addFunc(name, func, parameters, isBlock, blockedBy, autoInc, deleteWhenComplete, proceedIfError, priority) {--}}
{{--                if (autoInc === true) name = name + "_" + incr++;--}}
{{--                var item = new obj.func(name, func, parameters, isBlock, blockedBy, deleteWhenComplete, proceedIfError);--}}
{{--                if (priority === true) {--}}
{{--                    hpItems[name] = item--}}
{{--                } else {--}}
{{--                    lpItems[name] = item--}}
{{--                }--}}
{{--                items[name] = item;--}}
{{--                checkIfBlocked(item);--}}
{{--            }--}}

{{--            function addTimeDelayFile(name, path) {--}}
{{--                var item = new obj.file(name, path, false, [], false, false, true);--}}
{{--                item.isTimeDelay = true;--}}
{{--                log(name + ' ... ' + ' FILE! TDELAY');--}}
{{--                lpItems[name] = item;--}}
{{--                items[name] = item;--}}
{{--                checkIfBlocked(item);--}}
{{--            }--}}

{{--            function addTimeDelayFunc(name, func, parameters) {--}}
{{--                var item = new obj.func(name, func, parameters, false, [], true, true);--}}
{{--                item.isTimeDelay = true;--}}
{{--                log(name + ' ... ' + ' FUNCTION! TDELAY');--}}
{{--                lpItems[name] = item;--}}
{{--                items[name] = item;--}}
{{--                checkIfBlocked(item);--}}
{{--            }--}}

{{--            function checkIfBlocked(item) {--}}
{{--                if (isBlocked(item) === true || allowLoad == false) return;--}}
{{--                item.process();--}}
{{--            }--}}

{{--            function isBlocked(item) {--}}
{{--                if (item.isTimeDelay === true && timeDelayFired === false) {--}}
{{--                    log(item.name + " blocked = TIME DELAY!");--}}
{{--                    return true;--}}
{{--                }--}}
{{--                if (item.blockedBy instanceof Array) {--}}
{{--                    for (var i = 0; i < item.blockedBy.length; i++) {--}}
{{--                        var block = item.blockedBy[i];--}}
{{--                        if (items.hasOwnProperty(block) === false) {--}}
{{--                            log(item.name + " blocked = " + block);--}}
{{--                            return true;--}}
{{--                        } else if (item.proceedIfError === true && items[block].isError === true) {--}}
{{--                            return false;--}}
{{--                        } else if (items[block].isComplete === false) {--}}
{{--                            log(item.name + " blocked = " + block);--}}
{{--                            return true;--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}
{{--                return false;--}}
{{--            }--}}

{{--            function markLoaded(filename) {--}}
{{--                if (!filename || 0 === filename.length) {--}}
{{--                    return;--}}
{{--                }--}}
{{--                if (filename in items) {--}}
{{--                    var item = items[filename];--}}
{{--                    if (item.isComplete === true) {--}}
{{--                        log(item.name + ' ' + filename + ': error loaded duplicate')--}}
{{--                    } else {--}}
{{--                        item.isComplete = true;--}}
{{--                        item.isInitialized = true;--}}
{{--                    }--}}
{{--                } else {--}}
{{--                    items[filename] = new obj.fileLoaded(filename, true);--}}
{{--                }--}}
{{--                log("markLoaded dummyfile: " + items[filename].name);--}}
{{--            }--}}

{{--            function logWhatsBlocked() {--}}
{{--                for (var i in items) {--}}
{{--                    if (items.hasOwnProperty(i) === false) continue;--}}
{{--                    var item = items[i];--}}
{{--                    isBlocked(item)--}}
{{--                }--}}
{{--            }--}}

{{--            function log(msg) {--}}
{{--                var href = window.location.href;--}}
{{--                var reg = new RegExp('[?&]ezq=([^&#]*)', 'i');--}}
{{--                var string = reg.exec(href);--}}
{{--                var res = string ? string[1] : null;--}}
{{--                if (res === "1") console.debug(msg);--}}
{{--            }--}}

{{--            function processAll() {--}}
{{--                count++;--}}
{{--                if (count > 200) return;--}}
{{--                log("let's go");--}}
{{--                processItems(hpItems);--}}
{{--                processItems(lpItems);--}}
{{--            }--}}

{{--            function processItems(list) {--}}
{{--                for (var i in list) {--}}
{{--                    if (list.hasOwnProperty(i) === false) continue;--}}
{{--                    var item = list[i];--}}
{{--                    if (item.isComplete === true || isBlocked(item) || item.isInitialized === true || item.isError === true) {--}}
{{--                        if (item.isError === true) {--}}
{{--                            log(item.name + ': error')--}}
{{--                        } else if (item.isComplete === true) {--}}
{{--                            log(item.name + ': complete already')--}}
{{--                        } else if (item.isInitialized === true) {--}}
{{--                            log(item.name + ': initialized already')--}}
{{--                        }--}}
{{--                    } else {--}}
{{--                        item.process();--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}

{{--            init();--}}
{{--            return {--}}
{{--                addFile: addFile,--}}
{{--                addDelayFile: addTimeDelayFile,--}}
{{--                addFunc: addFunc,--}}
{{--                addDelayFunc: addTimeDelayFunc,--}}
{{--                items: items,--}}
{{--                processAll: processAll,--}}
{{--                setallowLoad: setallowLoad,--}}
{{--                markLoaded: markLoaded,--}}
{{--                logWhatsBlocked: logWhatsBlocked,--}}
{{--            };--}}
{{--        })();--}}
{{--        __ez.evt.add = function (e, t, n) {--}}
{{--            e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent ? e.attachEvent("on" + t, n) : e["on" + t] = n()--}}
{{--        }, __ez.evt.remove = function (e, t, n) {--}}
{{--            e.removeEventListener ? e.removeEventListener(t, n, !1) : e.detachEvent ? e.detachEvent("on" + t, n) : delete e["on" + t]--}}
{{--        };--}}
{{--        __ez.script.add = function (e) {--}}
{{--            var t = document.createElement("script");--}}
{{--            t.src = e, t.async = !0, t.type = "text/javascript", document.getElementsByTagName("head")[0].appendChild(t)--}}
{{--        };--}}
{{--        __ez.dot = {};--}}
{{--        __ez.queue.addFile('../../detroitchicago/boise.js', '../../detroitchicago/boise7697.js?gcb=195-0&amp;cb=1', true, [], true, false, true, false);--}}
{{--        __ez.queue.addFile('../../detroitchicago/memphis.js', '../../detroitchicago/memphis1dcc.js?gcb=195-0&amp;cb=14', true, [], true, false, true, false);--}}
{{--        __ez.queue.addFile('../../detroitchicago/minneapolis.js', '../../detroitchicago/minneapolis42b7.js?gcb=195-0&amp;cb=3', true, [], true, false, true, false);--}}
{{--        __ez.queue.addFile('../../detroitchicago/rochester.js', '../../detroitchicago/rochester0d65.js?gcb=195-0&amp;cb=12', false, ['/detroitchicago/memphis.js', '/detroitchicago/minneapolis.js'], true, false, true, false);--}}
{{--        __ez.vep = (function () {--}}
{{--            var pixels = [], pxURL = "../../detroitchicago/grapefruit.gif";--}}

{{--            function AddPixel(vID, pixelData) {--}}
{{--                if (__ez.dot.isDefined(vID) && __ez.dot.isValid(pixelData)) {--}}
{{--                    pixels.push({--}}
{{--                        type: 'video',--}}
{{--                        video_impression_id: vID,--}}
{{--                        domain_id: __ez.dot.getDID(),--}}
{{--                        t_epoch: __ez.dot.getEpoch(0),--}}
{{--                        data: __ez.dot.dataToStr(pixelData)--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}

{{--            function Fire() {--}}
{{--                if (typeof document.visibilityState !== 'undefined' && document.visibilityState === "prerender") {--}}
{{--                    return;--}}
{{--                }--}}
{{--                if (__ez.dot.isDefined(pixels) && pixels.length > 0) {--}}
{{--                    while (pixels.length > 0) {--}}
{{--                        var j = 5;--}}
{{--                        if (j > pixels.length) {--}}
{{--                            j = pixels.length;--}}
{{--                        }--}}
{{--                        var pushPixels = pixels.splice(0, j);--}}
{{--                        var pixelURL = __ez.dot.getURL(pxURL) + "?orig=" + (__ez.template.isOrig === true ? 1 : 0) + "&v=" + btoa(JSON.stringify(pushPixels));--}}
{{--                        __ez.dot.Fire(pixelURL);--}}
{{--                    }--}}
{{--                }--}}
{{--                pixels = [];--}}
{{--            }--}}

{{--            return {Add: AddPixel, Fire: Fire};--}}
{{--        })();</script>--}}
{{--    <script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>__ez.pel = (function () {--}}
{{--            var pixels = [], pxURL = "../../porpoiseant/army.gif";--}}

{{--            function AddAndFirePixel(adSlot, pixelData) {--}}
{{--                AddPixel(adSlot, pixelData, 0, 0, 0, 0, 0);--}}
{{--                Fire();--}}
{{--            }--}}

{{--            function AddAndFireOrigPixel(adSlot, pixelData) {--}}
{{--                AddPixel(adSlot, pixelData, 0, 0, 0, 0, 0, true);--}}
{{--                Fire();--}}
{{--            }--}}

{{--            function GetCurrentPixels() {--}}
{{--                return pixels;--}}
{{--            }--}}

{{--            function AddPixel(adSlot, pixelData, revenue, est_revenue, bid_floor_filled, bid_floor_prev, stat_source_id, isOrig) {--}}
{{--                if (!__ez.dot.isDefined(adSlot) || __ez.dot.isAnyDefined(adSlot.getSlotElementId, adSlot.ElementId) == false) {--}}
{{--                    return;--}}
{{--                }--}}
{{--                var ad_position_id = parseInt(__ez.dot.getTargeting(adSlot, 'ap'));--}}
{{--                var impId = __ez.dot.getSlotIID(adSlot), adUnit = __ez.dot.getAdUnit(adSlot, isOrig);--}}
{{--                var compId = parseInt(__ez.dot.getTargeting(adSlot, "compid"));--}}
{{--                var lineItemId = 0;--}}
{{--                var creativeId = 0;--}}
{{--                var ezimData = getEzimData(adSlot);--}}
{{--                if (typeof ezimData == 'object') {--}}
{{--                    if (ezimData.creative_id !== undefined) {--}}
{{--                        creativeId = ezimData.creative_id;--}}
{{--                    }--}}
{{--                    if (ezimData.line_item_id !== undefined) {--}}
{{--                        lineItemId = ezimData.line_item_id;--}}
{{--                    }--}}
{{--                }--}}
{{--                if (__ez.dot.isDefined(impId, adUnit) && __ez.dot.isValid(pixelData)) {--}}
{{--                    if (impId !== "0" && adUnit !== "") {--}}
{{--                        pixels.push({--}}
{{--                            type: "impression",--}}
{{--                            impression_id: impId,--}}
{{--                            domain_id: __ez.dot.getDID(),--}}
{{--                            unit: adUnit,--}}
{{--                            t_epoch: __ez.dot.getEpoch(0),--}}
{{--                            revenue: revenue,--}}
{{--                            est_revenue: est_revenue,--}}
{{--                            ad_position: ad_position_id,--}}
{{--                            ad_size: "",--}}
{{--                            bid_floor_filled: bid_floor_filled,--}}
{{--                            bid_floor_prev: bid_floor_prev,--}}
{{--                            stat_source_id: stat_source_id,--}}
{{--                            country_code: __ez.dot.getCC(),--}}
{{--                            pageview_id: __ez.dot.getPageviewId(),--}}
{{--                            comp_id: compId,--}}
{{--                            line_item_id: lineItemId,--}}
{{--                            creative_id: creativeId,--}}
{{--                            data: __ez.dot.dataToStr(pixelData),--}}
{{--                            is_orig: isOrig || __ez.template.isOrig,--}}
{{--                        });--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}

{{--            function AddPixelById(impFullId, pixelData, isOrig) {--}}
{{--                var vals = impFullId.split('https://html.design/');--}}
{{--                if (__ez.dot.isDefined(impFullId) && vals.length === 3 && __ez.dot.isValid(pixelData)) {--}}
{{--                    var adUnit = vals[0], impId = vals[2];--}}
{{--                    pixels.push({--}}
{{--                        type: "impression",--}}
{{--                        impression_id: impId,--}}
{{--                        domain_id: __ez.dot.getDID(),--}}
{{--                        unit: adUnit,--}}
{{--                        t_epoch: __ez.dot.getEpoch(0),--}}
{{--                        pageview_id: __ez.dot.getPageviewId(),--}}
{{--                        data: __ez.dot.dataToStr(pixelData),--}}
{{--                        is_orig: isOrig || __ez.template.isOrig--}}
{{--                    });--}}
{{--                }--}}
{{--            }--}}

{{--            function Fire() {--}}
{{--                if (typeof document.visibilityState !== 'undefined' && document.visibilityState === "prerender") return;--}}
{{--                if (__ez.dot.isDefined(pixels) && pixels.length > 0) {--}}
{{--                    var allPixels = [pixels.filter(function (pixel) {--}}
{{--                        return pixel.is_orig--}}
{{--                    }), pixels.filter(function (pixel) {--}}
{{--                        return !pixel.is_orig--}}
{{--                    })];--}}
{{--                    allPixels.forEach(function (pixels) {--}}
{{--                        while (pixels.length > 0) {--}}
{{--                            var isOrig = pixels[0].is_orig || false;--}}
{{--                            var j = 5;--}}
{{--                            if (j > pixels.length) {--}}
{{--                                j = pixels.length;--}}
{{--                            }--}}
{{--                            var pushPixels = pixels.splice(0, j);--}}
{{--                            var pixelURL = __ez.dot.getURL(pxURL) + "?orig=" + (isOrig === true ? 1 : 0) + "&sts=" + btoa(JSON.stringify(pushPixels));--}}
{{--                            if (typeof window.isAmp !== 'undefined' && isAmp && typeof window._ezaq !== 'undefined' && _ezaq.hasOwnProperty("domain_id")) {--}}
{{--                                pixelURL += "&visit_uuid=" + _ezaq['visit_uuid'];--}}
{{--                            }--}}
{{--                            __ez.dot.Fire(pixelURL);--}}
{{--                        }--}}
{{--                    })--}}
{{--                }--}}
{{--                pixels = [];--}}
{{--            }--}}

{{--            function getEzimData(adSlot) {--}}
{{--                if (typeof _ezim_d == "undefined") {--}}
{{--                    return false--}}
{{--                }--}}
{{--                var adUnitName = __ez.dot.getAdUnitPath(adSlot).split('https://html.design/').pop();--}}
{{--                if (typeof _ezim_d === 'object' && _ezim_d.hasOwnProperty(adUnitName)) {--}}
{{--                    return _ezim_d[adUnitName];--}}
{{--                }--}}
{{--                for (var ezimKey in _ezim_d) {--}}
{{--                    if (ezimKey.split('https://html.design/').pop() === adUnitName) {--}}
{{--                        return _ezim_d[ezimKey];--}}
{{--                    }--}}
{{--                }--}}
{{--                return false;--}}
{{--            }--}}

{{--            return {--}}
{{--                Add: AddPixel,--}}
{{--                AddAndFire: AddAndFirePixel,--}}
{{--                AddAndFireOrig: AddAndFireOrigPixel,--}}
{{--                AddById: AddPixelById,--}}
{{--                Fire: Fire,--}}
{{--                GetPixels: GetCurrentPixels,--}}
{{--            };--}}
{{--        })();--}}
{{--        __ez.queue.addFile('../../detroitchicago/raleigh.js', '../../detroitchicago/raleigh45f7.js?gcb=195-0&amp;cb=5', false, [], true, false, true, false);--}}
{{--        __ez.queue.addFile('../../detroitchicago/tampa.js', '../../detroitchicago/tampa453e.js?gcb=195-0&amp;cb=4', false, [], true, false, true, false);</script>--}}
{{--    <script data-ezscrex="false" data-cfasync="false">(function () {--}}
{{--            if ("function" === typeof window.CustomEvent) return !1;--}}
{{--            window.CustomEvent = function (c, a) {--}}
{{--                a = a || {bubbles: !1, cancelable: !1, detail: null};--}}
{{--                var b = document.createEvent("CustomEvent");--}}
{{--                b.initCustomEvent(c, a.bubbles, a.cancelable, a.detail);--}}
{{--                return b--}}
{{--            }--}}
{{--        })();</script>--}}
{{--    <script data-ezscrex="false"--}}
{{--            data-cfasync="false">__ez.queue.addFile('../../detroitchicago/tulsa.js', '../../detroitchicago/tulsa45f7.js?gcb=195-0&amp;cb=5', false, [], true, false, true, false);</script>--}}
{{--    --}}
<!-- basic -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
    <!-- site metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <!-- title -->
    <title>POS{{-- -title--}}</title>
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('/home_page/asset/images/pos-logo-icon.png') }}" type="image/png"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/bootstrap.min.css') }}"/>
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/owl.theme.default.min.css') }}"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/style.css') }}"/>
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/responsive.css') }}"/>
    <!-- colors -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/default_color.html') }}"/>
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/custom.css') }}"/>
    <!-- wow animation css -->
    <link rel="stylesheet" href="{{ asset('/home_page/asset/css/animate.css') }}"/>
    <!-- font awesome link -->
    <link href="{{ asset('/home_page/asset/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = {
            "csrfToken": "MMKpGxLDbskcrGWgSc6ok5v1NiASdKvaiFqKTtlK",
            "userData": {
                "mobile_number": null,
                "activeUserId": 0,
                "business": null
            }
        };
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-184907363-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-184907363-1');
    </script>
    {{--    <link rel='canonical' href=''/>--}}
    {{--    <script type="text/javascript">var ezouid = "1";</script>--}}
    {{--    <base>--}}
    {{--    <script type='text/javascript'>--}}
    {{--        var ezoTemplate = 'old_site_noads';--}}
    {{--        if (typeof ezouid == 'undefined') {--}}
    {{--            var ezouid = 'none';--}}
    {{--        }--}}
    {{--        var ezoFormfactor = '1';--}}
    {{--        var ezo_elements_to_check = Array();--}}
    {{--    </script><!-- START EZHEAD -->--}}
    {{--    <script data-ezscrex="false" type='text/javascript'>--}}
    {{--        var soc_app_id = '0';--}}
    {{--        var did = 317139;--}}
    {{--        var ezdomain = 'html.design';--}}
    {{--        var ezoicSearchable = 1;--}}
    {{--    </script>--}}
    {{--    <!--{jquery}-->--}}
    {{--    <!-- END EZHEAD -->--}}
    {{--    <script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {--}}
    {{--            "ad_cache_level": 0,--}}
    {{--            "ad_lazyload_version": 0,--}}
    {{--            "ad_load_version": 0,--}}
    {{--            "city": "Karachi",--}}
    {{--            "country": "PK",--}}
    {{--            "days_since_last_visit": -1,--}}
    {{--            "domain_id": 317139,--}}
    {{--            "engaged_time_visit": 0,--}}
    {{--            "ezcache_level": 2,--}}
    {{--            "ezcache_skip_code": 0,--}}
    {{--            "form_factor_id": 1,--}}
    {{--            "framework_id": 1,--}}
    {{--            "is_return_visitor": false,--}}
    {{--            "is_sitespeed": 0,--}}
    {{--            "last_page_load": "",--}}
    {{--            "last_pageview_id": "",--}}
    {{--            "lt_cache_level": 0,--}}
    {{--            "metro_code": 0,--}}
    {{--            "page_ad_positions": "",--}}
    {{--            "page_view_count": 0,--}}
    {{--            "page_view_id": "361fb5ae-edb0-4580-6b63-f7824af1f0d4",--}}
    {{--            "position_selection_id": 0,--}}
    {{--            "postal_code": "75300",--}}
    {{--            "pv_event_count": 0,--}}
    {{--            "response_size_orig": 35269,--}}
    {{--            "response_time_orig": 3,--}}
    {{--            "serverid": "3.71.99.32:30248",--}}
    {{--            "state": "SD",--}}
    {{--            "t_epoch": 1645292007,--}}
    {{--            "template_id": 120,--}}
    {{--            "time_on_site_visit": 0,--}}
    {{--            "url": "https://html.design/demo/quantic/index.html",--}}
    {{--            "user_id": 0,--}}
    {{--            "weather_precipitation": 0,--}}
    {{--            "weather_summary": "",--}}
    {{--            "weather_temperature": 0,--}}
    {{--            "word_count": 656,--}}
    {{--            "worst_bad_word_level": 0--}}
    {{--        };--}}
    {{--        var _ezExtraQueries = "&ez_orig=1";</script>--}}
    {{--    <script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false'>--}}
    {{--        function create_ezolpl(pvID, rv) {--}}
    {{--            var d = new Date();--}}
    {{--            d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));--}}
    {{--            var expires = "expires=" + d.toUTCString();--}}
    {{--            __ez.ck.setByCat("ezux_lpl_317139=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);--}}
    {{--        }--}}

    {{--        function attach_ezolpl(pvID, rv) {--}}
    {{--            if (document.readyState === "complete") {--}}
    {{--                create_ezolpl(pvID, rv);--}}
    {{--            }--}}
    {{--            if (window.attachEvent) {--}}
    {{--                window.attachEvent("onload", create_ezolpl, pvID, rv);--}}
    {{--            } else {--}}
    {{--                if (window.onload) {--}}
    {{--                    var curronload = window.onload;--}}
    {{--                    var newonload = function (evt) {--}}
    {{--                        curronload(evt);--}}
    {{--                        create_ezolpl(pvID, rv);--}}
    {{--                    };--}}
    {{--                    window.onload = newonload;--}}
    {{--                } else {--}}
    {{--                    window.onload = create_ezolpl.bind(null, pvID, rv);--}}
    {{--                }--}}
    {{--            }--}}
    {{--        }--}}

    {{--        __ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["361fb5ae-edb0-4580-6b63-f7824af1f0d4", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);--}}
    {{--    </script>--}}
</head>
<body id="default_theme" class="home_1 default_theme">
<div id="preloader">
    <div class="spinner-sm spinner-sm-1" id="status">
        <img src="{{ asset('/home_page/asset/images/pos-logo-hr.png') }}" alt="#"/>
    </div>
</div>
<!-- header -->
<header id="default_header" class="header_1 fix_header">
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <!-- logo section -->
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('/home_page/asset/images/pos-logo-hr.png') }}"
                                         class="w-50 mt-4" alt="#"/></a>
                        <!-- <a href="index.html">
                           <svg width="200" height="56.238804148204295" viewBox="0 0 260 56.238804148204295" class="css-1j8o68f mt-3"><defs id="SvgjsDefs8073"></defs><g id="SvgjsG8074" featurekey="UFHKJ9-0" transform="matrix(1.1940298507462688,0,0,1.1940298507462688,-8.716418138190882,-0.5970149253731344)" fill="#da293b" class=""><g xmlns="http://www.w3.org/2000/svg"><path d="M40.6,30.2V2.5c0-1.1-0.9-2-2-2H9.3c-1.1,0-2,0.9-2,2v27.7H40.6z M28.5,14.6c0-1.1,0.9-2,2-2s2,0.9,2,2v1.3   c0,1.1-0.9,2-2,2s-2-0.9-2-2V14.6z M22,14.6c0-1.1,0.9-2,2-2s2,0.9,2,2v1.3c0,1.1-0.9,2-2,2s-2-0.9-2-2V14.6z M15.6,14.6   c0-1.1,0.9-2,2-2s2,0.9,2,2v1.3c0,1.1-0.9,2-2,2s-2-0.9-2-2V14.6z"></path><path d="M7.4,34.1v11.5c0,1.1,0.9,2,2,2h29.4c1.1,0,2-0.9,2-2V34.1H7.4z M24,42.7c-1.1,0-2-0.8-2-1.9v-0.1c0-1.1,0.9-2,2-2   s2,0.9,2,2S25.1,42.7,24,42.7z"></path></g></g><g id="SvgjsG8075" featurekey="XAPJzK-0" transform="matrix(2.1626298576962757,0,0,2.1626298576962757,56.28027812972248,0.802768922557517)" fill="white"><path d="M12.32 18.28 l0 1.72 l-10.6 0 l0 -14.36 l10.46 0 l0 1.72 l-8.52 0 l0 4.4 l7.86 0 l0 1.72 l-7.86 0 l0 4.8 l8.66 0 z M19.12 13.559999999999999 l0 1.8 l-4.9 0 l0 -1.8 l4.9 0 z M26.7 17.88 l4.06 -12.24 l2.18 0 l-5.24 14.36 l-2.06 0 l-5.24 -14.36 l2.16 0 l4.1 12.24 l0.04 0 z M42.88 15.82 l-5.76 0 l-1.5 4.18 l-2 0 l5.4 -14.36 l2.2 0 l5.2 14.36 l-2.12 0 z M37.720000000000006 14.1 l4.46 0 l-2.12 -6.32 l-0.04 0 z M50.14000000000001 5.640000000000001 l0 12.64 l7.28 0 l0 1.72 l-9.22 0 l0 -14.36 l1.94 0 z M61.26000000000001 5.640000000000001 l0 12.64 l7.28 0 l0 1.72 l-9.22 0 l0 -14.36 l1.94 0 z M81.24000000000001 18.28 l0 1.72 l-10.6 0 l0 -14.36 l10.46 0 l0 1.72 l-8.52 0 l0 4.4 l7.86 0 l0 1.72 l-7.86 0 l0 4.8 l8.66 0 z M82.54000000000002 7.359999999999999 l0 -1.72 l11.66 0 l0 1.72 l-4.86 0 l0 12.64 l-1.94 0 l0 -12.64 l-4.86 0 z"></path></g></svg>

                        </a> -->
                    </div>
                </div>
                <!-- end logo section -->
                <div class="col-lg-9 responsive_setting_section">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                {{--                                <li>--}}
                                {{--                                    <a href="#">Pages</a>--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li><a href="services.html">Services</a></li>--}}
                                {{--                                        <li><a href="team.html">Our Team</a></li>--}}
                                {{--                                        <li><a href="clients.html">Clients</a></li>--}}
                                {{--                                        <li><a href="screenshot.html">Screenshot</a></li>--}}
                                {{--                                        <li><a href="faq.html">Faq</a></li>--}}
                                {{--                                        <li><a href="login.html">Login</a></li>--}}
                                {{--                                        <li><a href="register.html">Register</a></li>--}}
                                {{--                                        <li><a href="pricing.html">Pricing</a></li>--}}
                                {{--                                        <li><a href="error_404.html">404 Page</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li>--}}
                                {{--                                    <a href="features.html">Features</a>--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li><a href="designer.html">For Designers</a></li>--}}
                                {{--                                        <li><a href="developer.html">For Developers</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                {{--                                <li>--}}
                                {{--                                    <a href="blog.html">Blog</a>--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li><a href="blog.html">Blog (Default)</a></li>--}}
                                {{--                                        <li><a href="blog_list.html">Blog List</a></li>--}}
                                {{--                                        <li><a href="blog_detail.html">Blog Detail</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                                <li><a href="#">Contact</a></li>

                                @guest
                                    @if (Route::has('login'))
                                        <li><a href="{{ asset('/login') }}">Login</a></li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li><a href="{{ asset('/login') }}">Login</a></li>
                                    @endif
                                @else
                                    <li><a href="{{ asset('/dashboard') }}">Dashboard</a></li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                    <div class="right_top_section">
                        <ul class="top_links">
                            <li class="social-links"><a href="#"><i class="fa fa-apple"></i></a></li>
                            <li class="social-links"><a href="#"><i class="fa fa-android"></i></a></li>
                            <li class="social-links"><a href="#"><i class="fa fa-windows"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
{{--Body Content Start--}}
@yield('content')
{{--Body Content End--}}
<!--- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full brand_iconlist">
                    <ul>
                        <li><img src="{{ asset('/home_page/asset/images/br1.png') }}" alt="#"/></li>
                        <li><img src="{{ asset('/home_page/asset/images/br2.png') }}" alt="#"/></li>
                        <li><img src="{{ asset('/home_page/asset/images/br3.png') }}" alt="#"/></li>
                        <li><img src="{{ asset('/home_page/asset/images/br4.png') }}" alt="#"/></li>
                        <li><img src="{{ asset('/home_page/asset/images/br5.png') }}" alt="#"/></li>
                        <li><img src="{{ asset('/home_page/asset/images/br6.png') }}" alt="#"/></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="full footer_blog_information">
                    <div class="footer_icon">
                        <img src="{{ asset('/home_page/asset/images/footer_icon1.png') }}" alt="#"/>
                    </div>
                    <div class="head_info">
                        <p>Mail</p>
                    </div>
                    <div class="cont_info">
                        <p>
                            <a href="https://html.design/cdn-cgi/l/email-protection#10797e767f5074757d7f7d71797c3e737f7d"><span
                                    class="__cf_email__" data-cfemail="abe2c5cdc4ebcfcec6c4c6cac2c785c8c4c6">[email&#160;protected]</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full footer_blog_information">
                    <div class="footer_icon">
                        <img src="{{ asset('/home_page/asset/images/footer_icon2.png') }}" alt="#"/>
                    </div>
                    <div class="head_info">
                        <p>Call</p>
                    </div>
                    <div class="cont_info">
                        <p><a href="tel:+919876543210">+91 987 654 3210</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full footer_blog_information">
                    <div class="footer_icon">
                        <img src="{{ asset('/home_page/asset/images/footer_icon3.png') }}" alt="#"/>
                    </div>
                    <div class="head_info">
                        <p>Our Location</p>
                    </div>
                    <div class="cont_info">
                        <p>427 Schoen Circles Suite 124</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->
<!-- copyright section -->
<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    {{--                    <li><a href="services.html">Services</a></li>--}}
                    {{--                    <li><a href="team.html">Our Team</a></li>--}}
                    {{--                    <li><a href="clients.html">Clients</a></li>--}}
                    <li><a href="#">Contact</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ asset('/login') }}">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ asset('/login') }}">Login</a></li>
                        @endif
                    @else
                        <li><a href="{{ asset('/dashboard') }}">Dashboard</a></li>
                    @endguest
                </ul>
            </div>
            <div class="footer-right">
                <form method="get" action="#">
                    <input placeholder="Subscribe our newsletter.." name="search"/>
                    <i class="fa fa-envelope-o"></i>
                </form>
            </div>
        </div>
        <p class="footer-company-name">Copyright © 2019. All rights reserved.</p>
    </div>
</div>
<!-- end copyright section -->
<!-- jQuery Bootstrap -->
<script data-cfasync="false" src="{{ asset('/home_page/asset/js/email-decode.min.js') }}"></script>
<script src="{{ asset('/home_page/asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('/home_page/asset/js/popper.min.js') }}"></script>
<script src="{{ asset('/home_page/asset/js/bootstrap.min.js') }}"></script>
<!-- menu js -->
<script src="{{ asset('/home_page/asset/js/menumaker.js') }}"></script>
<!-- javascript -->
<script src="{{ asset('/home_page/asset/js/owl.carousel.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('/home_page/asset/js/wow.js') }}"></script>
<!-- custom jss -->
<script src="{{ asset('/home_page/asset/js/custom.js') }}"></script>


{{--<script type='text/javascript' style='display:none;' async>--}}
{{--    __ez.queue.addFile('/detroitchicago/edmonton.webp', '/detroitchicago/edmonton.webp?a=a&cb=0&shcb=34', true, ['/detroitchicago/minneapolis.js'], true, false, false, false);--}}
{{--    __ez.queue.addFile('/porpoiseant/jellyfish.webp', '/porpoiseant/jellyfish.webp?a=a&cb=0&shcb=34', false, [], true, false, false, false);--}}
{{--</script>--}}

{{--<script>var _audins_dom = "html_design", _audins_did = 317139;--}}
{{--    __ez.queue.addDelayFunc("audins.html", "__ez.script.add", "../../../go.ezoic.net/detroitchicago/audins0d9f.js?cb=195-0");</script>--}}
{{--<noscript>--}}
{{--    <div style="display:none;"><img--}}
{{--            src="../../../pixel.quantserve.com/pixel/p-31iz6hfFutd16d537.gif?labels=Domain.html_design,DomainId.317139"--}}
{{--            border="0" height="1" width="1" alt="Quantcast"/></div>--}}
{{--</noscript>--}}
{{--<script type="text/javascript" data-cfasync="false"></script>--}}
{{--<script>__ez.queue.addFile('../../tardisrocinante/vitals.js', '../../tardisrocinante/vitals5038.js?gcb=0&amp;cb=3', false, ['/detroitchicago/minneapolis.js'], true, false, true, false);</script>--}}
</body>
<!-- Mirrored from html.design/demo/quantic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Feb 2022 17:34:15 GMT -->
</html>
