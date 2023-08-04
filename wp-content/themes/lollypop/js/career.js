! function n(i, u, o) {
    function f(t, e) {
        if (!u[t]) {
            if (!i[t]) {
                var r = "function" == typeof require && require;
                if (!e && r) return r(t, !0);
                if (a) return a(t, !0);
                throw new Error("Cannot find module '" + t + "'")
            }
            e = u[t] = {
                exports: {}
            };
            i[t][0].call(e.exports, function(e) {
                var r = i[t][1][e];
                return f(r || e)
            }, e, e.exports, n, i, u, o)
        }
        return u[t].exports
    }
    for (var a = "function" == typeof require && require, e = 0; e < o.length; e++) f(o[e]);
    return f
}({
    1: [function(require, e, exports) {
        "use strict";
        $(document).ready(function() {
            $("header").addClass("lp-mainheader--white");
            $(function() {
                var e = ["artists", "architects", "writers", "engineers"],
                    r = 0;
                setInterval(function() {
                    $(".quote-career").fadeOut(function() {
                        $(this).html(e[r = (r + 1) % e.length]).fadeIn()
                    })
                }, 2500)
            });
            r = $(".quotes"), t = -1,
                function e() {
                    ++t;
                    r.eq(t % r.length).fadeIn(500).delay(500).fadeOut(500, e)
                }();
            var r, t
        })
    }, {}]
}, {}, [1]);