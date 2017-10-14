/*!
* Broetchen-Bringer Combined JS Code
*
* Arguments:  ?debug=true  - regenerate cache file
*             ?compress=1  - minify js code
* Generation Date: Wed, 22 Feb 2017 21:46:17 +0100
**/

/*! jQuery v3.1.1 | (c) jQuery Foundation | jquery.org/license */
!function(a, b) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function(a) {
        if (!a.document)
            throw new Error("jQuery requires a window with a document");
        return b(a)
    } : b(a)
}("undefined" != typeof window ? window : this, function(a, b) {
    "use strict";
    var c = [],
        d = a.document,
        e = Object.getPrototypeOf,
        f = c.slice,
        g = c.concat,
        h = c.push,
        i = c.indexOf,
        j = {},
        k = j.toString,
        l = j.hasOwnProperty,
        m = l.toString,
        n = m.call(Object),
        o = {};
    function p(a, b) {
        b = b || d;
        var c = b.createElement("script");
        c.text = a, b.head.appendChild(c).parentNode.removeChild(c)
    }
    var q = "3.1.1",
        r = function(a, b) {
            return new r.fn.init(a, b)
        },
        s = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        t = /^-ms-/,
        u = /-([a-z])/g,
        v = function(a, b) {
            return b.toUpperCase()
        };
    r.fn = r.prototype = {
        jquery: q,
        constructor: r,
        length: 0,
        toArray: function() {
            return f.call(this)
        },
        get: function(a) {
            return null == a ? f.call(this) : a < 0 ? this[a + this.length] : this[a]
        },
        pushStack: function(a) {
            var b = r.merge(this.constructor(), a);
            return b.prevObject = this, b
        },
        each: function(a) {
            return r.each(this, a)
        },
        map: function(a) {
            return this.pushStack(r.map(this, function(b, c) {
                return a.call(b, c, b)
            }))
        },
        slice: function() {
            return this.pushStack(f.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(a) {
            var b = this.length,
                c = +a + (a < 0 ? b : 0);
            return this.pushStack(c >= 0 && c < b ? [this[c]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: h,
        sort: c.sort,
        splice: c.splice
    }, r.extend = r.fn.extend = function() {
        var a,
            b,
            c,
            d,
            e,
            f,
            g = arguments[0] || {},
            h = 1,
            i = arguments.length,
            j = !1;
        for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || r.isFunction(g) || (g = {}), h === i && (g = this, h--); h < i; h++)
            if (null != (a = arguments[h]))
                for (b in a)
                    c = g[b], d = a[b], g !== d && (j && d && (r.isPlainObject(d) || (e = r.isArray(d))) ? (e ? (e = !1, f = c && r.isArray(c) ? c : []) : f = c && r.isPlainObject(c) ? c : {}, g[b] = r.extend(j, f, d)) : void 0 !== d && (g[b] = d));
        return g
    }, r.extend({
        expando: "jQuery" + (q + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(a) {
            throw new Error(a)
        },
        noop: function() {},
        isFunction: function(a) {
            return "function" === r.type(a)
        },
        isArray: Array.isArray,
        isWindow: function(a) {
            return null != a && a === a.window
        },
        isNumeric: function(a) {
            var b = r.type(a);
            return ("number" === b || "string" === b) && !isNaN(a - parseFloat(a))
        },
        isPlainObject: function(a) {
            var b,
                c;
            return !(!a || "[object Object]" !== k.call(a)) && (!(b = e(a)) || (c = l.call(b, "constructor") && b.constructor, "function" == typeof c && m.call(c) === n))
        },
        isEmptyObject: function(a) {
            var b;
            for (b in a)
                return !1;
            return !0
        },
        type: function(a) {
            return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? j[k.call(a)] || "object" : typeof a
        },
        globalEval: function(a) {
            p(a)
        },
        camelCase: function(a) {
            return a.replace(t, "ms-").replace(u, v)
        },
        nodeName: function(a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        },
        each: function(a, b) {
            var c,
                d = 0;
            if (w(a)) {
                for (c = a.length; d < c; d++)
                    if (b.call(a[d], d, a[d]) === !1)
                        break
            } else
                for (d in a)
                    if (b.call(a[d], d, a[d]) === !1)
                        break;
            return a
        },
        trim: function(a) {
            return null == a ? "" : (a + "").replace(s, "")
        },
        makeArray: function(a, b) {
            var c = b || [];
            return null != a && (w(Object(a)) ? r.merge(c, "string" == typeof a ? [a] : a) : h.call(c, a)), c
        },
        inArray: function(a, b, c) {
            return null == b ? -1 : i.call(b, a, c)
        },
        merge: function(a, b) {
            for (var c = +b.length, d = 0, e = a.length; d < c; d++)
                a[e++] = b[d];
            return a.length = e, a
        },
        grep: function(a, b, c) {
            for (var d, e = [], f = 0, g = a.length, h = !c; f < g; f++)
                d = !b(a[f], f), d !== h && e.push(a[f]);
            return e
        },
        map: function(a, b, c) {
            var d,
                e,
                f = 0,
                h = [];
            if (w(a))
                for (d = a.length; f < d; f++)
                    e = b(a[f], f, c), null != e && h.push(e);
            else
                for (f in a)
                    e = b(a[f], f, c), null != e && h.push(e);
            return g.apply([], h)
        },
        guid: 1,
        proxy: function(a, b) {
            var c,
                d,
                e;
            if ("string" == typeof b && (c = a[b], b = a, a = c), r.isFunction(a))
                return d = f.call(arguments, 2), e = function() {
                    return a.apply(b || this, d.concat(f.call(arguments)))
                }, e.guid = a.guid = a.guid || r.guid++, e
        },
        now: Date.now,
        support: o
    }), "function" == typeof Symbol && (r.fn[Symbol.iterator] = c[Symbol.iterator]), r.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(a, b) {
        j["[object " + b + "]"] = b.toLowerCase()
    });
    function w(a) {
        var b = !!a && "length" in a && a.length,
            c = r.type(a);
        return "function" !== c && !r.isWindow(a) && ("array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a)
    }
    var x = function(a) {
        var b,
            c,
            d,
            e,
            f,
            g,
            h,
            i,
            j,
            k,
            l,
            m,
            n,
            o,
            p,
            q,
            r,
            s,
            t,
            u = "sizzle" + 1 * new Date,
            v = a.document,
            w = 0,
            x = 0,
            y = ha(),
            z = ha(),
            A = ha(),
            B = function(a, b) {
                return a === b && (l = !0), 0
            },
            C = {}.hasOwnProperty,
            D = [],
            E = D.pop,
            F = D.push,
            G = D.push,
            H = D.slice,
            I = function(a, b) {
                for (var c = 0, d = a.length; c < d; c++)
                    if (a[c] === b)
                        return c;
                return -1
            },
            J = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            K = "[\\x20\\t\\r\\n\\f]",
            L = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            M = "\\[" + K + "*(" + L + ")(?:" + K + "*([*^$|!~]?=)" + K + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + L + "))|)" + K + "*\\]",
            N = ":(" + L + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + M + ")*)|.*)\\)|)",
            O = new RegExp(K + "+", "g"),
            P = new RegExp("^" + K + "+|((?:^|[^\\\\])(?:\\\\.)*)" + K + "+$", "g"),
            Q = new RegExp("^" + K + "*," + K + "*"),
            R = new RegExp("^" + K + "*([>+~]|" + K + ")" + K + "*"),
            S = new RegExp("=" + K + "*([^\\]'\"]*?)" + K + "*\\]", "g"),
            T = new RegExp(N),
            U = new RegExp("^" + L + "$"),
            V = {
                ID: new RegExp("^#(" + L + ")"),
                CLASS: new RegExp("^\\.(" + L + ")"),
                TAG: new RegExp("^(" + L + "|[*])"),
                ATTR: new RegExp("^" + M),
                PSEUDO: new RegExp("^" + N),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + K + "*(even|odd|(([+-]|)(\\d*)n|)" + K + "*(?:([+-]|)" + K + "*(\\d+)|))" + K + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + J + ")$", "i"),
                needsContext: new RegExp("^" + K + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + K + "*((?:-\\d)?\\d*)" + K + "*\\)|)(?=[^-]|$)", "i")
            },
            W = /^(?:input|select|textarea|button)$/i,
            X = /^h\d$/i,
            Y = /^[^{]+\{\s*\[native \w/,
            Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            $ = /[+~]/,
            _ = new RegExp("\\\\([\\da-f]{1,6}" + K + "?|(" + K + ")|.)", "ig"),
            aa = function(a, b, c) {
                var d = "0x" + b - 65536;
                return d !== d || c ? b : d < 0 ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
            },
            ba = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            ca = function(a, b) {
                return b ? "\0" === a ? "\ufffd" : a.slice(0, -1) + "\\" + a.charCodeAt(a.length - 1).toString(16) + " " : "\\" + a
            },
            da = function() {
                m()
            },
            ea = ta(function(a) {
                return a.disabled === !0 && ("form" in a || "label" in a)
            }, {
                dir: "parentNode",
                next: "legend"
            });
        try {
            G.apply(D = H.call(v.childNodes), v.childNodes), D[v.childNodes.length].nodeType
        } catch (fa) {
            G = {
                apply: D.length ? function(a, b) {
                    F.apply(a, H.call(b))
                } : function(a, b) {
                    var c = a.length,
                        d = 0;
                    while (a[c++] = b[d++])
                        ;
                    a.length = c - 1
                }
            }
        }
        function ga(a, b, d, e) {
            var f,
                h,
                j,
                k,
                l,
                o,
                r,
                s = b && b.ownerDocument,
                w = b ? b.nodeType : 9;
            if (d = d || [], "string" != typeof a || !a || 1 !== w && 9 !== w && 11 !== w)
                return d;
            if (!e && ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, p)) {
                if (11 !== w && (l = Z.exec(a)))
                    if (f = l[1]) {
                        if (9 === w) {
                            if (!(j = b.getElementById(f)))
                                return d;
                            if (j.id === f)
                                return d.push(j), d
                        } else if (s && (j = s.getElementById(f)) && t(b, j) && j.id === f)
                            return d.push(j), d
                    } else {
                        if (l[2])
                            return G.apply(d, b.getElementsByTagName(a)), d;
                        if ((f = l[3]) && c.getElementsByClassName && b.getElementsByClassName)
                            return G.apply(d, b.getElementsByClassName(f)), d
                    }
                if (c.qsa && !A[a + " "] && (!q || !q.test(a))) {
                    if (1 !== w)
                        s = b, r = a;
                    else if ("object" !== b.nodeName.toLowerCase()) {
                        (k = b.getAttribute("id")) ? k = k.replace(ba, ca) : b.setAttribute("id", k = u), o = g(a), h = o.length;
                        while (h--)
                            o[h] = "#" + k + " " + sa(o[h]);
                        r = o.join(","), s = $.test(a) && qa(b.parentNode) || b
                    }
                    if (r)
                        try {
                            return G.apply(d, s.querySelectorAll(r)), d
                        } catch (x) {} finally {
                            k === u && b.removeAttribute("id")
                        }
                }
            }
            return i(a.replace(P, "$1"), b, d, e)
        }
        function ha() {
            var a = [];
            function b(c, e) {
                return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
            }
            return b
        }
        function ia(a) {
            return a[u] = !0, a
        }
        function ja(a) {
            var b = n.createElement("fieldset");
            try {
                return !!a(b)
            } catch (c) {
                return !1
            } finally {
                b.parentNode && b.parentNode.removeChild(b), b = null
            }
        }
        function ka(a, b) {
            var c = a.split("|"),
                e = c.length;
            while (e--)
                d.attrHandle[c[e]] = b
        }
        function la(a, b) {
            var c = b && a,
                d = c && 1 === a.nodeType && 1 === b.nodeType && a.sourceIndex - b.sourceIndex;
            if (d)
                return d;
            if (c)
                while (c = c.nextSibling)
                    if (c === b)
                        return -1;
            return a ? 1 : -1
        }
        function ma(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return "input" === c && b.type === a
            }
        }
        function na(a) {
            return function(b) {
                var c = b.nodeName.toLowerCase();
                return ("input" === c || "button" === c) && b.type === a
            }
        }
        function oa(a) {
            return function(b) {
                return "form" in b ? b.parentNode && b.disabled === !1 ? "label" in b ? "label" in b.parentNode ? b.parentNode.disabled === a : b.disabled === a : b.isDisabled === a || b.isDisabled !== !a && ea(b) === a : b.disabled === a : "label" in b && b.disabled === a
            }
        }
        function pa(a) {
            return ia(function(b) {
                return b = +b, ia(function(c, d) {
                    var e,
                        f = a([], c.length, b),
                        g = f.length;
                    while (g--)
                        c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                })
            })
        }
        function qa(a) {
            return a && "undefined" != typeof a.getElementsByTagName && a
        }
        c = ga.support = {}, f = ga.isXML = function(a) {
            var b = a && (a.ownerDocument || a).documentElement;
            return !!b && "HTML" !== b.nodeName
        }, m = ga.setDocument = function(a) {
            var b,
                e,
                g = a ? a.ownerDocument || a : v;
            return g !== n && 9 === g.nodeType && g.documentElement ? (n = g, o = n.documentElement, p = !f(n), v !== n && (e = n.defaultView) && e.top !== e && (e.addEventListener ? e.addEventListener("unload", da, !1) : e.attachEvent && e.attachEvent("onunload", da)), c.attributes = ja(function(a) {
                return a.className = "i", !a.getAttribute("className")
            }), c.getElementsByTagName = ja(function(a) {
                return a.appendChild(n.createComment("")), !a.getElementsByTagName("*").length
            }), c.getElementsByClassName = Y.test(n.getElementsByClassName), c.getById = ja(function(a) {
                return o.appendChild(a).id = u, !n.getElementsByName || !n.getElementsByName(u).length
            }), c.getById ? (d.filter.ID = function(a) {
                var b = a.replace(_, aa);
                return function(a) {
                    return a.getAttribute("id") === b
                }
            }, d.find.ID = function(a, b) {
                if ("undefined" != typeof b.getElementById && p) {
                    var c = b.getElementById(a);
                    return c ? [c] : []
                }
            }) : (d.filter.ID = function(a) {
                var b = a.replace(_, aa);
                return function(a) {
                    var c = "undefined" != typeof a.getAttributeNode && a.getAttributeNode("id");
                    return c && c.value === b
                }
            }, d.find.ID = function(a, b) {
                if ("undefined" != typeof b.getElementById && p) {
                    var c,
                        d,
                        e,
                        f = b.getElementById(a);
                    if (f) {
                        if (c = f.getAttributeNode("id"), c && c.value === a)
                            return [f];
                        e = b.getElementsByName(a), d = 0;
                        while (f = e[d++])
                            if (c = f.getAttributeNode("id"), c && c.value === a)
                                return [f]
                    }
                    return []
                }
            }), d.find.TAG = c.getElementsByTagName ? function(a, b) {
                return "undefined" != typeof b.getElementsByTagName ? b.getElementsByTagName(a) : c.qsa ? b.querySelectorAll(a) : void 0
            } : function(a, b) {
                var c,
                    d = [],
                    e = 0,
                    f = b.getElementsByTagName(a);
                if ("*" === a) {
                    while (c = f[e++])
                        1 === c.nodeType && d.push(c);
                    return d
                }
                return f
            }, d.find.CLASS = c.getElementsByClassName && function(a, b) {
                if ("undefined" != typeof b.getElementsByClassName && p)
                    return b.getElementsByClassName(a)
            }, r = [], q = [], (c.qsa = Y.test(n.querySelectorAll)) && (ja(function(a) {
                o.appendChild(a).innerHTML = "<a id='" + u + "'></a><select id='" + u + "-\r\\' msallowcapture=''><option selected=''></option></select>", a.querySelectorAll("[msallowcapture^='']").length && q.push("[*^$]=" + K + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + K + "*(?:value|" + J + ")"), a.querySelectorAll("[id~=" + u + "-]").length || q.push("~="), a.querySelectorAll(":checked").length || q.push(":checked"), a.querySelectorAll("a#" + u + "+*").length || q.push(".#.+[+~]")
            }), ja(function(a) {
                a.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                var b = n.createElement("input");
                b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + K + "*[*^$|!~]?="), 2 !== a.querySelectorAll(":enabled").length && q.push(":enabled", ":disabled"), o.appendChild(a).disabled = !0, 2 !== a.querySelectorAll(":disabled").length && q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
            })), (c.matchesSelector = Y.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ja(function(a) {
                c.disconnectedMatch = s.call(a, "*"), s.call(a, "[s!='']:x"), r.push("!=", N)
            }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = Y.test(o.compareDocumentPosition), t = b || Y.test(o.contains) ? function(a, b) {
                var c = 9 === a.nodeType ? a.documentElement : a,
                    d = b && b.parentNode;
                return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
            } : function(a, b) {
                if (b)
                    while (b = b.parentNode)
                        if (b === a)
                            return !0;
                return !1
            }, B = b ? function(a, b) {
                if (a === b)
                    return l = !0, 0;
                var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === n || a.ownerDocument === v && t(v, a) ? -1 : b === n || b.ownerDocument === v && t(v, b) ? 1 : k ? I(k, a) - I(k, b) : 0 : 4 & d ? -1 : 1)
            } : function(a, b) {
                if (a === b)
                    return l = !0, 0;
                var c,
                    d = 0,
                    e = a.parentNode,
                    f = b.parentNode,
                    g = [a],
                    h = [b];
                if (!e || !f)
                    return a === n ? -1 : b === n ? 1 : e ? -1 : f ? 1 : k ? I(k, a) - I(k, b) : 0;
                if (e === f)
                    return la(a, b);
                c = a;
                while (c = c.parentNode)
                    g.unshift(c);
                c = b;
                while (c = c.parentNode)
                    h.unshift(c);
                while (g[d] === h[d])
                    d++;
                return d ? la(g[d], h[d]) : g[d] === v ? -1 : h[d] === v ? 1 : 0
            }, n) : n
        }, ga.matches = function(a, b) {
            return ga(a, null, null, b)
        }, ga.matchesSelector = function(a, b) {
            if ((a.ownerDocument || a) !== n && m(a), b = b.replace(S, "='$1']"), c.matchesSelector && p && !A[b + " "] && (!r || !r.test(b)) && (!q || !q.test(b)))
                try {
                    var d = s.call(a, b);
                    if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType)
                        return d
                } catch (e) {}
            return ga(b, n, null, [a]).length > 0
        }, ga.contains = function(a, b) {
            return (a.ownerDocument || a) !== n && m(a), t(a, b)
        }, ga.attr = function(a, b) {
            (a.ownerDocument || a) !== n && m(a);
            var e = d.attrHandle[b.toLowerCase()],
                f = e && C.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
            return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
        }, ga.escape = function(a) {
            return (a + "").replace(ba, ca)
        }, ga.error = function(a) {
            throw new Error("Syntax error, unrecognized expression: " + a)
        }, ga.uniqueSort = function(a) {
            var b,
                d = [],
                e = 0,
                f = 0;
            if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                while (b = a[f++])
                    b === a[f] && (e = d.push(f));
                while (e--)
                    a.splice(d[e], 1)
            }
            return k = null, a
        }, e = ga.getText = function(a) {
            var b,
                c = "",
                d = 0,
                f = a.nodeType;
            if (f) {
                if (1 === f || 9 === f || 11 === f) {
                    if ("string" == typeof a.textContent)
                        return a.textContent;
                    for (a = a.firstChild; a; a = a.nextSibling)
                        c += e(a)
                } else if (3 === f || 4 === f)
                    return a.nodeValue
            } else
                while (b = a[d++])
                    c += e(b);
            return c
        }, d = ga.selectors = {
            cacheLength: 50,
            createPseudo: ia,
            match: V,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(a) {
                    return a[1] = a[1].replace(_, aa), a[3] = (a[3] || a[4] || a[5] || "").replace(_, aa), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                },
                CHILD: function(a) {
                    return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || ga.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && ga.error(a[0]), a
                },
                PSEUDO: function(a) {
                    var b,
                        c = !a[6] && a[2];
                    return V.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && T.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                }
            },
            filter: {
                TAG: function(a) {
                    var b = a.replace(_, aa).toLowerCase();
                    return "*" === a ? function() {
                        return !0
                    } : function(a) {
                        return a.nodeName && a.nodeName.toLowerCase() === b
                    }
                },
                CLASS: function(a) {
                    var b = y[a + " "];
                    return b || (b = new RegExp("(^|" + K + ")" + a + "(" + K + "|$)")) && y(a, function(a) {
                            return b.test("string" == typeof a.className && a.className || "undefined" != typeof a.getAttribute && a.getAttribute("class") || "")
                        })
                },
                ATTR: function(a, b, c) {
                    return function(d) {
                        var e = ga.attr(d, a);
                        return null == e ? "!=" === b : !b || (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e.replace(O, " ") + " ").indexOf(c) > -1 : "|=" === b && (e === c || e.slice(0, c.length + 1) === c + "-"))
                    }
                },
                CHILD: function(a, b, c, d, e) {
                    var f = "nth" !== a.slice(0, 3),
                        g = "last" !== a.slice(-4),
                        h = "of-type" === b;
                    return 1 === d && 0 === e ? function(a) {
                        return !!a.parentNode
                    } : function(b, c, i) {
                        var j,
                            k,
                            l,
                            m,
                            n,
                            o,
                            p = f !== g ? "nextSibling" : "previousSibling",
                            q = b.parentNode,
                            r = h && b.nodeName.toLowerCase(),
                            s = !i && !h,
                            t = !1;
                        if (q) {
                            if (f) {
                                while (p) {
                                    m = b;
                                    while (m = m[p])
                                        if (h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType)
                                            return !1;
                                    o = p = "only" === a && !o && "nextSibling"
                                }
                                return !0
                            }
                            if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                m = q, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n && j[2], m = n && q.childNodes[n];
                                while (m = ++n && m && m[p] || (t = n = 0) || o.pop())
                                    if (1 === m.nodeType && ++t && m === b) {
                                        k[a] = [w, n, t];
                                        break
                                    }
                            } else if (s && (m = b, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n), t === !1)
                                while (m = ++n && m && m[p] || (t = n = 0) || o.pop())
                                    if ((h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType) && ++t && (s && (l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), k[a] = [w, t]), m === b))
                                        break;
                            return t -= e, t === d || t % d === 0 && t / d >= 0
                        }
                    }
                },
                PSEUDO: function(a, b) {
                    var c,
                        e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || ga.error("unsupported pseudo: " + a);
                    return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ia(function(a, c) {
                        var d,
                            f = e(a, b),
                            g = f.length;
                        while (g--)
                            d = I(a, f[g]), a[d] = !(c[d] = f[g])
                    }) : function(a) {
                        return e(a, 0, c)
                    }) : e
                }
            },
            pseudos: {
                not: ia(function(a) {
                    var b = [],
                        c = [],
                        d = h(a.replace(P, "$1"));
                    return d[u] ? ia(function(a, b, c, e) {
                        var f,
                            g = d(a, null, e, []),
                            h = a.length;
                        while (h--)
                            (f = g[h]) && (a[h] = !(b[h] = f))
                    }) : function(a, e, f) {
                        return b[0] = a, d(b, null, f, c), b[0] = null, !c.pop()
                    }
                }),
                has: ia(function(a) {
                    return function(b) {
                        return ga(a, b).length > 0
                    }
                }),
                contains: ia(function(a) {
                    return a = a.replace(_, aa), function(b) {
                        return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                    }
                }),
                lang: ia(function(a) {
                    return U.test(a || "") || ga.error("unsupported lang: " + a), a = a.replace(_, aa).toLowerCase(), function(b) {
                        var c;
                        do if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang"))
                            return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-");
                        while ((b = b.parentNode) && 1 === b.nodeType);
                        return !1
                    }
                }),
                target: function(b) {
                    var c = a.location && a.location.hash;
                    return c && c.slice(1) === b.id
                },
                root: function(a) {
                    return a === o
                },
                focus: function(a) {
                    return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                },
                enabled: oa(!1),
                disabled: oa(!0),
                checked: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && !!a.checked || "option" === b && !!a.selected
                },
                selected: function(a) {
                    return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                },
                empty: function(a) {
                    for (a = a.firstChild; a; a = a.nextSibling)
                        if (a.nodeType < 6)
                            return !1;
                    return !0
                },
                parent: function(a) {
                    return !d.pseudos.empty(a)
                },
                header: function(a) {
                    return X.test(a.nodeName)
                },
                input: function(a) {
                    return W.test(a.nodeName)
                },
                button: function(a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && "button" === a.type || "button" === b
                },
                text: function(a) {
                    var b;
                    return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                },
                first: pa(function() {
                    return [0]
                }),
                last: pa(function(a, b) {
                    return [b - 1]
                }),
                eq: pa(function(a, b, c) {
                    return [c < 0 ? c + b : c]
                }),
                even: pa(function(a, b) {
                    for (var c = 0; c < b; c += 2)
                        a.push(c);
                    return a
                }),
                odd: pa(function(a, b) {
                    for (var c = 1; c < b; c += 2)
                        a.push(c);
                    return a
                }),
                lt: pa(function(a, b, c) {
                    for (var d = c < 0 ? c + b : c; --d >= 0;)
                        a.push(d);
                    return a
                }),
                gt: pa(function(a, b, c) {
                    for (var d = c < 0 ? c + b : c; ++d < b;)
                        a.push(d);
                    return a
                })
            }
        }, d.pseudos.nth = d.pseudos.eq;
        for (b in {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        })
            d.pseudos[b] = ma(b);
        for (b in {
            submit: !0,
            reset: !0
        })
            d.pseudos[b] = na(b);
        function ra() {}
        ra.prototype = d.filters = d.pseudos, d.setFilters = new ra, g = ga.tokenize = function(a, b) {
            var c,
                e,
                f,
                g,
                h,
                i,
                j,
                k = z[a + " "];
            if (k)
                return b ? 0 : k.slice(0);
            h = a, i = [], j = d.preFilter;
            while (h) {
                c && !(e = Q.exec(h)) || (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = R.exec(h)) && (c = e.shift(), f.push({
                    value: c,
                    type: e[0].replace(P, " ")
                }), h = h.slice(c.length));
                for (g in d.filter)
                    !(e = V[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                        value: c,
                        type: g,
                        matches: e
                    }), h = h.slice(c.length));
                if (!c)
                    break
            }
            return b ? h.length : h ? ga.error(a) : z(a, i).slice(0)
        };
        function sa(a) {
            for (var b = 0, c = a.length, d = ""; b < c; b++)
                d += a[b].value;
            return d
        }
        function ta(a, b, c) {
            var d = b.dir,
                e = b.next,
                f = e || d,
                g = c && "parentNode" === f,
                h = x++;
            return b.first ? function(b, c, e) {
                while (b = b[d])
                    if (1 === b.nodeType || g)
                        return a(b, c, e);
                return !1
            } : function(b, c, i) {
                var j,
                    k,
                    l,
                    m = [w, h];
                if (i) {
                    while (b = b[d])
                        if ((1 === b.nodeType || g) && a(b, c, i))
                            return !0
                } else
                    while (b = b[d])
                        if (1 === b.nodeType || g)
                            if (l = b[u] || (b[u] = {}), k = l[b.uniqueID] || (l[b.uniqueID] = {}), e && e === b.nodeName.toLowerCase())
                                b = b[d] || b;
                            else {
                                if ((j = k[f]) && j[0] === w && j[1] === h)
                                    return m[2] = j[2];
                                if (k[f] = m, m[2] = a(b, c, i))
                                    return !0
                            }
                return !1
            }
        }
        function ua(a) {
            return a.length > 1 ? function(b, c, d) {
                var e = a.length;
                while (e--)
                    if (!a[e](b, c, d))
                        return !1;
                return !0
            } : a[0]
        }
        function va(a, b, c) {
            for (var d = 0, e = b.length; d < e; d++)
                ga(a, b[d], c);
            return c
        }
        function wa(a, b, c, d, e) {
            for (var f, g = [], h = 0, i = a.length, j = null != b; h < i; h++)
                (f = a[h]) && (c && !c(f, d, e) || (g.push(f), j && b.push(h)));
            return g
        }
        function xa(a, b, c, d, e, f) {
            return d && !d[u] && (d = xa(d)), e && !e[u] && (e = xa(e, f)), ia(function(f, g, h, i) {
                var j,
                    k,
                    l,
                    m = [],
                    n = [],
                    o = g.length,
                    p = f || va(b || "*", h.nodeType ? [h] : h, []),
                    q = !a || !f && b ? p : wa(p, m, a, h, i),
                    r = c ? e || (f ? a : o || d) ? [] : g : q;
                if (c && c(q, r, h, i), d) {
                    j = wa(r, n), d(j, [], h, i), k = j.length;
                    while (k--)
                        (l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                }
                if (f) {
                    if (e || a) {
                        if (e) {
                            j = [], k = r.length;
                            while (k--)
                                (l = r[k]) && j.push(q[k] = l);
                            e(null, r = [], j, i)
                        }
                        k = r.length;
                        while (k--)
                            (l = r[k]) && (j = e ? I(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                    }
                } else
                    r = wa(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : G.apply(g, r)
            })
        }
        function ya(a) {
            for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = ta(function(a) {
                    return a === b
                }, h, !0), l = ta(function(a) {
                    return I(b, a) > -1
                }, h, !0), m = [function(a, c, d) {
                    var e = !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d));
                    return b = null, e
                }]; i < f; i++)
                if (c = d.relative[a[i].type])
                    m = [ta(ua(m), c)];
                else {
                    if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                        for (e = ++i; e < f; e++)
                            if (d.relative[a[e].type])
                                break;
                        return xa(i > 1 && ua(m), i > 1 && sa(a.slice(0, i - 1).concat({
                            value: " " === a[i - 2].type ? "*" : ""
                        })).replace(P, "$1"), c, i < e && ya(a.slice(i, e)), e < f && ya(a = a.slice(e)), e < f && sa(a))
                    }
                    m.push(c)
                }
            return ua(m)
        }
        function za(a, b) {
            var c = b.length > 0,
                e = a.length > 0,
                f = function(f, g, h, i, k) {
                    var l,
                        o,
                        q,
                        r = 0,
                        s = "0",
                        t = f && [],
                        u = [],
                        v = j,
                        x = f || e && d.find.TAG("*", k),
                        y = w += null == v ? 1 : Math.random() || .1,
                        z = x.length;
                    for (k && (j = g === n || g || k); s !== z && null != (l = x[s]); s++) {
                        if (e && l) {
                            o = 0, g || l.ownerDocument === n || (m(l), h = !p);
                            while (q = a[o++])
                                if (q(l, g || n, h)) {
                                    i.push(l);
                                    break
                                }
                            k && (w = y)
                        }
                        c && ((l = !q && l) && r--, f && t.push(l))
                    }
                    if (r += s, c && s !== r) {
                        o = 0;
                        while (q = b[o++])
                            q(t, u, g, h);
                        if (f) {
                            if (r > 0)
                                while (s--)
                                    t[s] || u[s] || (u[s] = E.call(i));
                            u = wa(u)
                        }
                        G.apply(i, u), k && !f && u.length > 0 && r + b.length > 1 && ga.uniqueSort(i)
                    }
                    return k && (w = y, j = v), t
                };
            return c ? ia(f) : f
        }
        return h = ga.compile = function(a, b) {
            var c,
                d = [],
                e = [],
                f = A[a + " "];
            if (!f) {
                b || (b = g(a)), c = b.length;
                while (c--)
                    f = ya(b[c]), f[u] ? d.push(f) : e.push(f);
                f = A(a, za(e, d)), f.selector = a
            }
            return f
        }, i = ga.select = function(a, b, c, e) {
            var f,
                i,
                j,
                k,
                l,
                m = "function" == typeof a && a,
                n = !e && g(a = m.selector || a);
            if (c = c || [], 1 === n.length) {
                if (i = n[0] = n[0].slice(0), i.length > 2 && "ID" === (j = i[0]).type && 9 === b.nodeType && p && d.relative[i[1].type]) {
                    if (b = (d.find.ID(j.matches[0].replace(_, aa), b) || [])[0], !b)
                        return c;
                    m && (b = b.parentNode), a = a.slice(i.shift().value.length)
                }
                f = V.needsContext.test(a) ? 0 : i.length;
                while (f--) {
                    if (j = i[f], d.relative[k = j.type])
                        break;
                    if ((l = d.find[k]) && (e = l(j.matches[0].replace(_, aa), $.test(i[0].type) && qa(b.parentNode) || b))) {
                        if (i.splice(f, 1), a = e.length && sa(i), !a)
                            return G.apply(c, e), c;
                        break
                    }
                }
            }
            return (m || h(a, n))(e, b, !p, c, !b || $.test(a) && qa(b.parentNode) || b), c
        }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ja(function(a) {
            return 1 & a.compareDocumentPosition(n.createElement("fieldset"))
        }), ja(function(a) {
            return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
        }) || ka("type|href|height|width", function(a, b, c) {
            if (!c)
                return a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
        }), c.attributes && ja(function(a) {
            return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
        }) || ka("value", function(a, b, c) {
            if (!c && "input" === a.nodeName.toLowerCase())
                return a.defaultValue
        }), ja(function(a) {
            return null == a.getAttribute("disabled")
        }) || ka(J, function(a, b, c) {
            var d;
            if (!c)
                return a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
        }), ga
    }(a);
    r.find = x, r.expr = x.selectors, r.expr[":"] = r.expr.pseudos, r.uniqueSort = r.unique = x.uniqueSort, r.text = x.getText, r.isXMLDoc = x.isXML, r.contains = x.contains, r.escapeSelector = x.escape;
    var y = function(a, b, c) {
            var d = [],
                e = void 0 !== c;
            while ((a = a[b]) && 9 !== a.nodeType)
                if (1 === a.nodeType) {
                    if (e && r(a).is(c))
                        break;
                    d.push(a)
                }
            return d
        },
        z = function(a, b) {
            for (var c = []; a; a = a.nextSibling)
                1 === a.nodeType && a !== b && c.push(a);
            return c
        },
        A = r.expr.match.needsContext,
        B = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,
        C = /^.[^:#\[\.,]*$/;
    function D(a, b, c) {
        return r.isFunction(b) ? r.grep(a, function(a, d) {
            return !!b.call(a, d, a) !== c
        }) : b.nodeType ? r.grep(a, function(a) {
            return a === b !== c
        }) : "string" != typeof b ? r.grep(a, function(a) {
            return i.call(b, a) > -1 !== c
        }) : C.test(b) ? r.filter(b, a, c) : (b = r.filter(b, a), r.grep(a, function(a) {
            return i.call(b, a) > -1 !== c && 1 === a.nodeType
        }))
    }
    r.filter = function(a, b, c) {
        var d = b[0];
        return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? r.find.matchesSelector(d, a) ? [d] : [] : r.find.matches(a, r.grep(b, function(a) {
            return 1 === a.nodeType
        }))
    }, r.fn.extend({
        find: function(a) {
            var b,
                c,
                d = this.length,
                e = this;
            if ("string" != typeof a)
                return this.pushStack(r(a).filter(function() {
                    for (b = 0; b < d; b++)
                        if (r.contains(e[b], this))
                            return !0
                }));
            for (c = this.pushStack([]), b = 0; b < d; b++)
                r.find(a, e[b], c);
            return d > 1 ? r.uniqueSort(c) : c
        },
        filter: function(a) {
            return this.pushStack(D(this, a || [], !1))
        },
        not: function(a) {
            return this.pushStack(D(this, a || [], !0))
        },
        is: function(a) {
            return !!D(this, "string" == typeof a && A.test(a) ? r(a) : a || [], !1).length
        }
    });
    var E,
        F = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,
        G = r.fn.init = function(a, b, c) {
            var e,
                f;
            if (!a)
                return this;
            if (c = c || E, "string" == typeof a) {
                if (e = "<" === a[0] && ">" === a[a.length - 1] && a.length >= 3 ? [null, a, null] : F.exec(a), !e || !e[1] && b)
                    return !b || b.jquery ? (b || c).find(a) : this.constructor(b).find(a);
                if (e[1]) {
                    if (b = b instanceof r ? b[0] : b, r.merge(this, r.parseHTML(e[1], b && b.nodeType ? b.ownerDocument || b : d, !0)), B.test(e[1]) && r.isPlainObject(b))
                        for (e in b)
                            r.isFunction(this[e]) ? this[e](b[e]) : this.attr(e, b[e]);
                    return this
                }
                return f = d.getElementById(e[2]), f && (this[0] = f, this.length = 1), this
            }
            return a.nodeType ? (this[0] = a, this.length = 1, this) : r.isFunction(a) ? void 0 !== c.ready ? c.ready(a) : a(r) : r.makeArray(a, this)
        };
    G.prototype = r.fn, E = r(d);
    var H = /^(?:parents|prev(?:Until|All))/,
        I = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    r.fn.extend({
        has: function(a) {
            var b = r(a, this),
                c = b.length;
            return this.filter(function() {
                for (var a = 0; a < c; a++)
                    if (r.contains(this, b[a]))
                        return !0
            })
        },
        closest: function(a, b) {
            var c,
                d = 0,
                e = this.length,
                f = [],
                g = "string" != typeof a && r(a);
            if (!A.test(a))
                for (; d < e; d++)
                    for (c = this[d]; c && c !== b; c = c.parentNode)
                        if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && r.find.matchesSelector(c, a))) {
                            f.push(c);
                            break
                        }
            return this.pushStack(f.length > 1 ? r.uniqueSort(f) : f)
        },
        index: function(a) {
            return a ? "string" == typeof a ? i.call(r(a), this[0]) : i.call(this, a.jquery ? a[0] : a) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(a, b) {
            return this.pushStack(r.uniqueSort(r.merge(this.get(), r(a, b))))
        },
        addBack: function(a) {
            return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
        }
    });
    function J(a, b) {
        while ((a = a[b]) && 1 !== a.nodeType)
            ;
        return a
    }
    r.each({
        parent: function(a) {
            var b = a.parentNode;
            return b && 11 !== b.nodeType ? b : null
        },
        parents: function(a) {
            return y(a, "parentNode")
        },
        parentsUntil: function(a, b, c) {
            return y(a, "parentNode", c)
        },
        next: function(a) {
            return J(a, "nextSibling")
        },
        prev: function(a) {
            return J(a, "previousSibling")
        },
        nextAll: function(a) {
            return y(a, "nextSibling")
        },
        prevAll: function(a) {
            return y(a, "previousSibling")
        },
        nextUntil: function(a, b, c) {
            return y(a, "nextSibling", c)
        },
        prevUntil: function(a, b, c) {
            return y(a, "previousSibling", c)
        },
        siblings: function(a) {
            return z((a.parentNode || {}).firstChild, a)
        },
        children: function(a) {
            return z(a.firstChild)
        },
        contents: function(a) {
            return a.contentDocument || r.merge([], a.childNodes)
        }
    }, function(a, b) {
        r.fn[a] = function(c, d) {
            var e = r.map(this, b, c);
            return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = r.filter(d, e)), this.length > 1 && (I[a] || r.uniqueSort(e), H.test(a) && e.reverse()), this.pushStack(e)
        }
    });
    var K = /[^\x20\t\r\n\f]+/g;
    function L(a) {
        var b = {};
        return r.each(a.match(K) || [], function(a, c) {
            b[c] = !0
        }), b
    }
    r.Callbacks = function(a) {
        a = "string" == typeof a ? L(a) : r.extend({}, a);
        var b,
            c,
            d,
            e,
            f = [],
            g = [],
            h = -1,
            i = function() {
                for (e = a.once, d = b = !0; g.length; h = -1) {
                    c = g.shift();
                    while (++h < f.length)
                        f[h].apply(c[0], c[1]) === !1 && a.stopOnFalse && (h = f.length, c = !1)
                }
                a.memory || (c = !1), b = !1, e && (f = c ? [] : "")
            },
            j = {
                add: function() {
                    return f && (c && !b && (h = f.length - 1, g.push(c)), function d(b) {
                        r.each(b, function(b, c) {
                            r.isFunction(c) ? a.unique && j.has(c) || f.push(c) : c && c.length && "string" !== r.type(c) && d(c)
                        })
                    }(arguments), c && !b && i()), this
                },
                remove: function() {
                    return r.each(arguments, function(a, b) {
                        var c;
                        while ((c = r.inArray(b, f, c)) > -1)
                            f.splice(c, 1), c <= h && h--
                    }), this
                },
                has: function(a) {
                    return a ? r.inArray(a, f) > -1 : f.length > 0
                },
                empty: function() {
                    return f && (f = []), this
                },
                disable: function() {
                    return e = g = [], f = c = "", this
                },
                disabled: function() {
                    return !f
                },
                lock: function() {
                    return e = g = [], c || b || (f = c = ""), this
                },
                locked: function() {
                    return !!e
                },
                fireWith: function(a, c) {
                    return e || (c = c || [], c = [a, c.slice ? c.slice() : c], g.push(c), b || i()), this
                },
                fire: function() {
                    return j.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!d
                }
            };
        return j
    };
    function M(a) {
        return a
    }
    function N(a) {
        throw a
    }
    function O(a, b, c) {
        var d;
        try {
            a && r.isFunction(d = a.promise) ? d.call(a).done(b).fail(c) : a && r.isFunction(d = a.then) ? d.call(a, b, c) : b.call(void 0, a)
        } catch (a) {
            c.call(void 0, a)
        }
    }
    r.extend({
        Deferred: function(b) {
            var c = [["notify", "progress", r.Callbacks("memory"), r.Callbacks("memory"), 2], ["resolve", "done", r.Callbacks("once memory"), r.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", r.Callbacks("once memory"), r.Callbacks("once memory"), 1, "rejected"]],
                d = "pending",
                e = {
                    state: function() {
                        return d
                    },
                    always: function() {
                        return f.done(arguments).fail(arguments), this
                    },
                    "catch": function(a) {
                        return e.then(null, a)
                    },
                    pipe: function() {
                        var a = arguments;
                        return r.Deferred(function(b) {
                            r.each(c, function(c, d) {
                                var e = r.isFunction(a[d[4]]) && a[d[4]];
                                f[d[1]](function() {
                                    var a = e && e.apply(this, arguments);
                                    a && r.isFunction(a.promise) ? a.promise().progress(b.notify).done(b.resolve).fail(b.reject) : b[d[0] + "With"](this, e ? [a] : arguments)
                                })
                            }), a = null
                        }).promise()
                    },
                    then: function(b, d, e) {
                        var f = 0;
                        function g(b, c, d, e) {
                            return function() {
                                var h = this,
                                    i = arguments,
                                    j = function() {
                                        var a,
                                            j;
                                        if (!(b < f)) {
                                            if (a = d.apply(h, i), a === c.promise())
                                                throw new TypeError("Thenable self-resolution");
                                            j = a && ("object" == typeof a || "function" == typeof a) && a.then, r.isFunction(j) ? e ? j.call(a, g(f, c, M, e), g(f, c, N, e)) : (f++, j.call(a, g(f, c, M, e), g(f, c, N, e), g(f, c, M, c.notifyWith))) : (d !== M && (h = void 0, i = [a]), (e || c.resolveWith)(h, i))
                                        }
                                    },
                                    k = e ? j : function() {
                                        try {
                                            j()
                                        } catch (a) {
                                            r.Deferred.exceptionHook && r.Deferred.exceptionHook(a, k.stackTrace), b + 1 >= f && (d !== N && (h = void 0, i = [a]), c.rejectWith(h, i))
                                        }
                                    };
                                b ? k() : (r.Deferred.getStackHook && (k.stackTrace = r.Deferred.getStackHook()), a.setTimeout(k))
                            }
                        }
                        return r.Deferred(function(a) {
                            c[0][3].add(g(0, a, r.isFunction(e) ? e : M, a.notifyWith)), c[1][3].add(g(0, a, r.isFunction(b) ? b : M)), c[2][3].add(g(0, a, r.isFunction(d) ? d : N))
                        }).promise()
                    },
                    promise: function(a) {
                        return null != a ? r.extend(a, e) : e
                    }
                },
                f = {};
            return r.each(c, function(a, b) {
                var g = b[2],
                    h = b[5];
                e[b[1]] = g.add, h && g.add(function() {
                    d = h
                }, c[3 - a][2].disable, c[0][2].lock), g.add(b[3].fire), f[b[0]] = function() {
                    return f[b[0] + "With"](this === f ? void 0 : this, arguments), this
                }, f[b[0] + "With"] = g.fireWith
            }), e.promise(f), b && b.call(f, f), f
        },
        when: function(a) {
            var b = arguments.length,
                c = b,
                d = Array(c),
                e = f.call(arguments),
                g = r.Deferred(),
                h = function(a) {
                    return function(c) {
                        d[a] = this, e[a] = arguments.length > 1 ? f.call(arguments) : c, --b || g.resolveWith(d, e)
                    }
                };
            if (b <= 1 && (O(a, g.done(h(c)).resolve, g.reject), "pending" === g.state() || r.isFunction(e[c] && e[c].then)))
                return g.then();
            while (c--)
                O(e[c], h(c), g.reject);
            return g.promise()
        }
    });
    var P = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    r.Deferred.exceptionHook = function(b, c) {
        a.console && a.console.warn && b && P.test(b.name) && a.console.warn("jQuery.Deferred exception: " + b.message, b.stack, c)
    }, r.readyException = function(b) {
        a.setTimeout(function() {
            throw b
        })
    };
    var Q = r.Deferred();
    r.fn.ready = function(a) {
        return Q.then(a)["catch"](function(a) {
            r.readyException(a)
        }), this
    }, r.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function(a) {
            a ? r.readyWait++ : r.ready(!0)
        },
        ready: function(a) {
            (a === !0 ? --r.readyWait : r.isReady) || (r.isReady = !0, a !== !0 && --r.readyWait > 0 || Q.resolveWith(d, [r]))
        }
    }), r.ready.then = Q.then;
    function R() {
        d.removeEventListener("DOMContentLoaded", R), a.removeEventListener("load", R), r.ready()
    }
    "complete" === d.readyState || "loading" !== d.readyState && !d.documentElement.doScroll ? a.setTimeout(r.ready) : (d.addEventListener("DOMContentLoaded", R), a.addEventListener("load", R));
    var S = function(a, b, c, d, e, f, g) {
            var h = 0,
                i = a.length,
                j = null == c;
            if ("object" === r.type(c)) {
                e = !0;
                for (h in c)
                    S(a, b, h, c[h], !0, f, g)
            } else if (void 0 !== d && (e = !0, r.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function(a, b, c) {
                return j.call(r(a), c)
            })), b))
                for (; h < i; h++)
                    b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
            return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
        },
        T = function(a) {
            return 1 === a.nodeType || 9 === a.nodeType || !+a.nodeType
        };
    function U() {
        this.expando = r.expando + U.uid++
    }
    U.uid = 1, U.prototype = {
        cache: function(a) {
            var b = a[this.expando];
            return b || (b = {}, T(a) && (a.nodeType ? a[this.expando] = b : Object.defineProperty(a, this.expando, {
                value: b,
                configurable: !0
            }))), b
        },
        set: function(a, b, c) {
            var d,
                e = this.cache(a);
            if ("string" == typeof b)
                e[r.camelCase(b)] = c;
            else
                for (d in b)
                    e[r.camelCase(d)] = b[d];
            return e
        },
        get: function(a, b) {
            return void 0 === b ? this.cache(a) : a[this.expando] && a[this.expando][r.camelCase(b)]
        },
        access: function(a, b, c) {
            return void 0 === b || b && "string" == typeof b && void 0 === c ? this.get(a, b) : (this.set(a, b, c), void 0 !== c ? c : b)
        },
        remove: function(a, b) {
            var c,
                d = a[this.expando];
            if (void 0 !== d) {
                if (void 0 !== b) {
                    r.isArray(b) ? b = b.map(r.camelCase) : (b = r.camelCase(b), b = b in d ? [b] : b.match(K) || []), c = b.length;
                    while (c--)
                        delete d[b[c]]
                }
                (void 0 === b || r.isEmptyObject(d)) && (a.nodeType ? a[this.expando] = void 0 : delete a[this.expando])
            }
        },
        hasData: function(a) {
            var b = a[this.expando];
            return void 0 !== b && !r.isEmptyObject(b)
        }
    };
    var V = new U,
        W = new U,
        X = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        Y = /[A-Z]/g;
    function Z(a) {
        return "true" === a || "false" !== a && ("null" === a ? null : a === +a + "" ? +a : X.test(a) ? JSON.parse(a) : a)
    }
    function $(a, b, c) {
        var d;
        if (void 0 === c && 1 === a.nodeType)
            if (d = "data-" + b.replace(Y, "-$&").toLowerCase(), c = a.getAttribute(d), "string" == typeof c) {
                try {
                    c = Z(c)
                } catch (e) {}
                W.set(a, b, c)
            } else
                c = void 0;
        return c
    }
    r.extend({
        hasData: function(a) {
            return W.hasData(a) || V.hasData(a)
        },
        data: function(a, b, c) {
            return W.access(a, b, c)
        },
        removeData: function(a, b) {
            W.remove(a, b)
        },
        _data: function(a, b, c) {
            return V.access(a, b, c)
        },
        _removeData: function(a, b) {
            V.remove(a, b)
        }
    }), r.fn.extend({
        data: function(a, b) {
            var c,
                d,
                e,
                f = this[0],
                g = f && f.attributes;
            if (void 0 === a) {
                if (this.length && (e = W.get(f), 1 === f.nodeType && !V.get(f, "hasDataAttrs"))) {
                    c = g.length;
                    while (c--)
                        g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = r.camelCase(d.slice(5)), $(f, d, e[d])));
                    V.set(f, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof a ? this.each(function() {
                W.set(this, a)
            }) : S(this, function(b) {
                var c;
                if (f && void 0 === b) {
                    if (c = W.get(f, a), void 0 !== c)
                        return c;
                    if (c = $(f, a), void 0 !== c)
                        return c
                } else
                    this.each(function() {
                        W.set(this, a, b)
                    })
            }, null, b, arguments.length > 1, null, !0)
        },
        removeData: function(a) {
            return this.each(function() {
                W.remove(this, a)
            })
        }
    }), r.extend({
        queue: function(a, b, c) {
            var d;
            if (a)
                return b = (b || "fx") + "queue", d = V.get(a, b), c && (!d || r.isArray(c) ? d = V.access(a, b, r.makeArray(c)) : d.push(c)), d || []
        },
        dequeue: function(a, b) {
            b = b || "fx";
            var c = r.queue(a, b),
                d = c.length,
                e = c.shift(),
                f = r._queueHooks(a, b),
                g = function() {
                    r.dequeue(a, b)
                };
            "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
        },
        _queueHooks: function(a, b) {
            var c = b + "queueHooks";
            return V.get(a, c) || V.access(a, c, {
                    empty: r.Callbacks("once memory").add(function() {
                        V.remove(a, [b + "queue", c])
                    })
                })
        }
    }), r.fn.extend({
        queue: function(a, b) {
            var c = 2;
            return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? r.queue(this[0], a) : void 0 === b ? this : this.each(function() {
                var c = r.queue(this, a, b);
                r._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && r.dequeue(this, a)
            })
        },
        dequeue: function(a) {
            return this.each(function() {
                r.dequeue(this, a)
            })
        },
        clearQueue: function(a) {
            return this.queue(a || "fx", [])
        },
        promise: function(a, b) {
            var c,
                d = 1,
                e = r.Deferred(),
                f = this,
                g = this.length,
                h = function() {
                    --d || e.resolveWith(f, [f])
                };
            "string" != typeof a && (b = a, a = void 0), a = a || "fx";
            while (g--)
                c = V.get(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
            return h(), e.promise(b)
        }
    });
    var _ = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        aa = new RegExp("^(?:([+-])=|)(" + _ + ")([a-z%]*)$", "i"),
        ba = ["Top", "Right", "Bottom", "Left"],
        ca = function(a, b) {
            return a = b || a, "none" === a.style.display || "" === a.style.display && r.contains(a.ownerDocument, a) && "none" === r.css(a, "display")
        },
        da = function(a, b, c, d) {
            var e,
                f,
                g = {};
            for (f in b)
                g[f] = a.style[f], a.style[f] = b[f];
            e = c.apply(a, d || []);
            for (f in b)
                a.style[f] = g[f];
            return e
        };
    function ea(a, b, c, d) {
        var e,
            f = 1,
            g = 20,
            h = d ? function() {
                return d.cur()
            } : function() {
                return r.css(a, b, "")
            },
            i = h(),
            j = c && c[3] || (r.cssNumber[b] ? "" : "px"),
            k = (r.cssNumber[b] || "px" !== j && +i) && aa.exec(r.css(a, b));
        if (k && k[3] !== j) {
            j = j || k[3], c = c || [], k = +i || 1;
            do f = f || ".5", k /= f, r.style(a, b, k + j);
            while (f !== (f = h() / i) && 1 !== f && --g)
        }
        return c && (k = +k || +i || 0, e = c[1] ? k + (c[1] + 1) * c[2] : +c[2], d && (d.unit = j, d.start = k, d.end = e)), e
    }
    var fa = {};
    function ga(a) {
        var b,
            c = a.ownerDocument,
            d = a.nodeName,
            e = fa[d];
        return e ? e : (b = c.body.appendChild(c.createElement(d)), e = r.css(b, "display"), b.parentNode.removeChild(b), "none" === e && (e = "block"), fa[d] = e, e)
    }
    function ha(a, b) {
        for (var c, d, e = [], f = 0, g = a.length; f < g; f++)
            d = a[f], d.style && (c = d.style.display, b ? ("none" === c && (e[f] = V.get(d, "display") || null, e[f] || (d.style.display = "")), "" === d.style.display && ca(d) && (e[f] = ga(d))) : "none" !== c && (e[f] = "none", V.set(d, "display", c)));
        for (f = 0; f < g; f++)
            null != e[f] && (a[f].style.display = e[f]);
        return a
    }
    r.fn.extend({
        show: function() {
            return ha(this, !0)
        },
        hide: function() {
            return ha(this)
        },
        toggle: function(a) {
            return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function() {
                ca(this) ? r(this).show() : r(this).hide()
            })
        }
    });
    var ia = /^(?:checkbox|radio)$/i,
        ja = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
        ka = /^$|\/(?:java|ecma)script/i,
        la = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    la.optgroup = la.option, la.tbody = la.tfoot = la.colgroup = la.caption = la.thead, la.th = la.td;
    function ma(a, b) {
        var c;
        return c = "undefined" != typeof a.getElementsByTagName ? a.getElementsByTagName(b || "*") : "undefined" != typeof a.querySelectorAll ? a.querySelectorAll(b || "*") : [], void 0 === b || b && r.nodeName(a, b) ? r.merge([a], c) : c
    }
    function na(a, b) {
        for (var c = 0, d = a.length; c < d; c++)
            V.set(a[c], "globalEval", !b || V.get(b[c], "globalEval"))
    }
    var oa = /<|&#?\w+;/;
    function pa(a, b, c, d, e) {
        for (var f, g, h, i, j, k, l = b.createDocumentFragment(), m = [], n = 0, o = a.length; n < o; n++)
            if (f = a[n], f || 0 === f)
                if ("object" === r.type(f))
                    r.merge(m, f.nodeType ? [f] : f);
                else if (oa.test(f)) {
                    g = g || l.appendChild(b.createElement("div")), h = (ja.exec(f) || ["", ""])[1].toLowerCase(), i = la[h] || la._default, g.innerHTML = i[1] + r.htmlPrefilter(f) + i[2], k = i[0];
                    while (k--)
                        g = g.lastChild;
                    r.merge(m, g.childNodes), g = l.firstChild, g.textContent = ""
                } else
                    m.push(b.createTextNode(f));
        l.textContent = "", n = 0;
        while (f = m[n++])
            if (d && r.inArray(f, d) > -1)
                e && e.push(f);
            else if (j = r.contains(f.ownerDocument, f), g = ma(l.appendChild(f), "script"), j && na(g), c) {
                k = 0;
                while (f = g[k++])
                    ka.test(f.type || "") && c.push(f)
            }
        return l
    }
    !function() {
        var a = d.createDocumentFragment(),
            b = a.appendChild(d.createElement("div")),
            c = d.createElement("input");
        c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), b.appendChild(c), o.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, b.innerHTML = "<textarea>x</textarea>", o.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue
    }();
    var qa = d.documentElement,
        ra = /^key/,
        sa = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        ta = /^([^.]*)(?:\.(.+)|)/;
    function ua() {
        return !0
    }
    function va() {
        return !1
    }
    function wa() {
        try {
            return d.activeElement
        } catch (a) {}
    }
    function xa(a, b, c, d, e, f) {
        var g,
            h;
        if ("object" == typeof b) {
            "string" != typeof c && (d = d || c, c = void 0);
            for (h in b)
                xa(a, h, c, d, b[h], f);
            return a
        }
        if (null == d && null == e ? (e = c, d = c = void 0) : null == e && ("string" == typeof c ? (e = d, d = void 0) : (e = d, d = c, c = void 0)), e === !1)
            e = va;
        else if (!e)
            return a;
        return 1 === f && (g = e, e = function(a) {
            return r().off(a), g.apply(this, arguments)
        }, e.guid = g.guid || (g.guid = r.guid++)), a.each(function() {
            r.event.add(this, b, e, d, c)
        })
    }
    r.event = {
        global: {},
        add: function(a, b, c, d, e) {
            var f,
                g,
                h,
                i,
                j,
                k,
                l,
                m,
                n,
                o,
                p,
                q = V.get(a);
            if (q) {
                c.handler && (f = c, c = f.handler, e = f.selector), e && r.find.matchesSelector(qa, e), c.guid || (c.guid = r.guid++), (i = q.events) || (i = q.events = {}), (g = q.handle) || (g = q.handle = function(b) {
                    return "undefined" != typeof r && r.event.triggered !== b.type ? r.event.dispatch.apply(a, arguments) : void 0
                }), b = (b || "").match(K) || [""], j = b.length;
                while (j--)
                    h = ta.exec(b[j]) || [], n = p = h[1], o = (h[2] || "").split(".").sort(), n && (l = r.event.special[n] || {}, n = (e ? l.delegateType : l.bindType) || n, l = r.event.special[n] || {}, k = r.extend({
                        type: n,
                        origType: p,
                        data: d,
                        handler: c,
                        guid: c.guid,
                        selector: e,
                        needsContext: e && r.expr.match.needsContext.test(e),
                        namespace: o.join(".")
                    }, f), (m = i[n]) || (m = i[n] = [], m.delegateCount = 0, l.setup && l.setup.call(a, d, o, g) !== !1 || a.addEventListener && a.addEventListener(n, g)), l.add && (l.add.call(a, k), k.handler.guid || (k.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, k) : m.push(k), r.event.global[n] = !0)
            }
        },
        remove: function(a, b, c, d, e) {
            var f,
                g,
                h,
                i,
                j,
                k,
                l,
                m,
                n,
                o,
                p,
                q = V.hasData(a) && V.get(a);
            if (q && (i = q.events)) {
                b = (b || "").match(K) || [""], j = b.length;
                while (j--)
                    if (h = ta.exec(b[j]) || [], n = p = h[1], o = (h[2] || "").split(".").sort(), n) {
                        l = r.event.special[n] || {}, n = (d ? l.delegateType : l.bindType) || n, m = i[n] || [], h = h[2] && new RegExp("(^|\\.)" + o.join("\\.(?:.*\\.|)") + "(\\.|$)"), g = f = m.length;
                        while (f--)
                            k = m[f], !e && p !== k.origType || c && c.guid !== k.guid || h && !h.test(k.namespace) || d && d !== k.selector && ("**" !== d || !k.selector) || (m.splice(f, 1), k.selector && m.delegateCount--, l.remove && l.remove.call(a, k));
                        g && !m.length && (l.teardown && l.teardown.call(a, o, q.handle) !== !1 || r.removeEvent(a, n, q.handle), delete i[n])
                    } else
                        for (n in i)
                            r.event.remove(a, n + b[j], c, d, !0);
                r.isEmptyObject(i) && V.remove(a, "handle events")
            }
        },
        dispatch: function(a) {
            var b = r.event.fix(a),
                c,
                d,
                e,
                f,
                g,
                h,
                i = new Array(arguments.length),
                j = (V.get(this, "events") || {})[b.type] || [],
                k = r.event.special[b.type] || {};
            for (i[0] = b, c = 1; c < arguments.length; c++)
                i[c] = arguments[c];
            if (b.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, b) !== !1) {
                h = r.event.handlers.call(this, b, j), c = 0;
                while ((f = h[c++]) && !b.isPropagationStopped()) {
                    b.currentTarget = f.elem, d = 0;
                    while ((g = f.handlers[d++]) && !b.isImmediatePropagationStopped())
                        b.rnamespace && !b.rnamespace.test(g.namespace) || (b.handleObj = g, b.data = g.data, e = ((r.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== e && (b.result = e) === !1 && (b.preventDefault(), b.stopPropagation()))
                }
                return k.postDispatch && k.postDispatch.call(this, b), b.result
            }
        },
        handlers: function(a, b) {
            var c,
                d,
                e,
                f,
                g,
                h = [],
                i = b.delegateCount,
                j = a.target;
            if (i && j.nodeType && !("click" === a.type && a.button >= 1))
                for (; j !== this; j = j.parentNode || this)
                    if (1 === j.nodeType && ("click" !== a.type || j.disabled !== !0)) {
                        for (f = [], g = {}, c = 0; c < i; c++)
                            d = b[c], e = d.selector + " ", void 0 === g[e] && (g[e] = d.needsContext ? r(e, this).index(j) > -1 : r.find(e, this, null, [j]).length), g[e] && f.push(d);
                        f.length && h.push({
                            elem: j,
                            handlers: f
                        })
                    }
            return j = this, i < b.length && h.push({
                elem: j,
                handlers: b.slice(i)
            }), h
        },
        addProp: function(a, b) {
            Object.defineProperty(r.Event.prototype, a, {
                enumerable: !0,
                configurable: !0,
                get: r.isFunction(b) ? function() {
                    if (this.originalEvent)
                        return b(this.originalEvent)
                } : function() {
                    if (this.originalEvent)
                        return this.originalEvent[a]
                },
                set: function(b) {
                    Object.defineProperty(this, a, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: b
                    })
                }
            })
        },
        fix: function(a) {
            return a[r.expando] ? a : new r.Event(a)
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== wa() && this.focus)
                        return this.focus(), !1
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    if (this === wa() && this.blur)
                        return this.blur(), !1
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    if ("checkbox" === this.type && this.click && r.nodeName(this, "input"))
                        return this.click(), !1
                },
                _default: function(a) {
                    return r.nodeName(a.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(a) {
                    void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                }
            }
        }
    }, r.removeEvent = function(a, b, c) {
        a.removeEventListener && a.removeEventListener(b, c)
    }, r.Event = function(a, b) {
        return this instanceof r.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? ua : va, this.target = a.target && 3 === a.target.nodeType ? a.target.parentNode : a.target, this.currentTarget = a.currentTarget, this.relatedTarget = a.relatedTarget) : this.type = a, b && r.extend(this, b), this.timeStamp = a && a.timeStamp || r.now(), void (this[r.expando] = !0)) : new r.Event(a, b)
    }, r.Event.prototype = {
        constructor: r.Event,
        isDefaultPrevented: va,
        isPropagationStopped: va,
        isImmediatePropagationStopped: va,
        isSimulated: !1,
        preventDefault: function() {
            var a = this.originalEvent;
            this.isDefaultPrevented = ua, a && !this.isSimulated && a.preventDefault()
        },
        stopPropagation: function() {
            var a = this.originalEvent;
            this.isPropagationStopped = ua, a && !this.isSimulated && a.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var a = this.originalEvent;
            this.isImmediatePropagationStopped = ua, a && !this.isSimulated && a.stopImmediatePropagation(), this.stopPropagation()
        }
    }, r.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function(a) {
            var b = a.button;
            return null == a.which && ra.test(a.type) ? null != a.charCode ? a.charCode : a.keyCode : !a.which && void 0 !== b && sa.test(a.type) ? 1 & b ? 1 : 2 & b ? 3 : 4 & b ? 2 : 0 : a.which
        }
    }, r.event.addProp), r.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(a, b) {
        r.event.special[a] = {
            delegateType: b,
            bindType: b,
            handle: function(a) {
                var c,
                    d = this,
                    e = a.relatedTarget,
                    f = a.handleObj;
                return e && (e === d || r.contains(d, e)) || (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
            }
        }
    }), r.fn.extend({
        on: function(a, b, c, d) {
            return xa(this, a, b, c, d)
        },
        one: function(a, b, c, d) {
            return xa(this, a, b, c, d, 1)
        },
        off: function(a, b, c) {
            var d,
                e;
            if (a && a.preventDefault && a.handleObj)
                return d = a.handleObj, r(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
            if ("object" == typeof a) {
                for (e in a)
                    this.off(e, b, a[e]);
                return this
            }
            return b !== !1 && "function" != typeof b || (c = b, b = void 0), c === !1 && (c = va), this.each(function() {
                r.event.remove(this, a, c, b)
            })
        }
    });
    var ya = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        za = /<script|<style|<link/i,
        Aa = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Ba = /^true\/(.*)/,
        Ca = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    function Da(a, b) {
        return r.nodeName(a, "table") && r.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a : a
    }
    function Ea(a) {
        return a.type = (null !== a.getAttribute("type")) + "/" + a.type, a
    }
    function Fa(a) {
        var b = Ba.exec(a.type);
        return b ? a.type = b[1] : a.removeAttribute("type"), a
    }
    function Ga(a, b) {
        var c,
            d,
            e,
            f,
            g,
            h,
            i,
            j;
        if (1 === b.nodeType) {
            if (V.hasData(a) && (f = V.access(a), g = V.set(b, f), j = f.events)) {
                delete g.handle, g.events = {};
                for (e in j)
                    for (c = 0, d = j[e].length; c < d; c++)
                        r.event.add(b, e, j[e][c])
            }
            W.hasData(a) && (h = W.access(a), i = r.extend({}, h), W.set(b, i))
        }
    }
    function Ha(a, b) {
        var c = b.nodeName.toLowerCase();
        "input" === c && ia.test(a.type) ? b.checked = a.checked : "input" !== c && "textarea" !== c || (b.defaultValue = a.defaultValue)
    }
    function Ia(a, b, c, d) {
        b = g.apply([], b);
        var e,
            f,
            h,
            i,
            j,
            k,
            l = 0,
            m = a.length,
            n = m - 1,
            q = b[0],
            s = r.isFunction(q);
        if (s || m > 1 && "string" == typeof q && !o.checkClone && Aa.test(q))
            return a.each(function(e) {
                var f = a.eq(e);
                s && (b[0] = q.call(this, e, f.html())), Ia(f, b, c, d)
            });
        if (m && (e = pa(b, a[0].ownerDocument, !1, a, d), f = e.firstChild, 1 === e.childNodes.length && (e = f), f || d)) {
            for (h = r.map(ma(e, "script"), Ea), i = h.length; l < m; l++)
                j = e, l !== n && (j = r.clone(j, !0, !0), i && r.merge(h, ma(j, "script"))), c.call(a[l], j, l);
            if (i)
                for (k = h[h.length - 1].ownerDocument, r.map(h, Fa), l = 0; l < i; l++)
                    j = h[l], ka.test(j.type || "") && !V.access(j, "globalEval") && r.contains(k, j) && (j.src ? r._evalUrl && r._evalUrl(j.src) : p(j.textContent.replace(Ca, ""), k))
        }
        return a
    }
    function Ja(a, b, c) {
        for (var d, e = b ? r.filter(b, a) : a, f = 0; null != (d = e[f]); f++)
            c || 1 !== d.nodeType || r.cleanData(ma(d)), d.parentNode && (c && r.contains(d.ownerDocument, d) && na(ma(d, "script")), d.parentNode.removeChild(d));
        return a
    }
    r.extend({
        htmlPrefilter: function(a) {
            return a.replace(ya, "<$1></$2>")
        },
        clone: function(a, b, c) {
            var d,
                e,
                f,
                g,
                h = a.cloneNode(!0),
                i = r.contains(a.ownerDocument, a);
            if (!(o.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || r.isXMLDoc(a)))
                for (g = ma(h), f = ma(a), d = 0, e = f.length; d < e; d++)
                    Ha(f[d], g[d]);
            if (b)
                if (c)
                    for (f = f || ma(a), g = g || ma(h), d = 0, e = f.length; d < e; d++)
                        Ga(f[d], g[d]);
                else
                    Ga(a, h);
            return g = ma(h, "script"), g.length > 0 && na(g, !i && ma(a, "script")), h
        },
        cleanData: function(a) {
            for (var b, c, d, e = r.event.special, f = 0; void 0 !== (c = a[f]); f++)
                if (T(c)) {
                    if (b = c[V.expando]) {
                        if (b.events)
                            for (d in b.events)
                                e[d] ? r.event.remove(c, d) : r.removeEvent(c, d, b.handle);
                        c[V.expando] = void 0
                    }
                    c[W.expando] && (c[W.expando] = void 0)
                }
        }
    }), r.fn.extend({
        detach: function(a) {
            return Ja(this, a, !0)
        },
        remove: function(a) {
            return Ja(this, a)
        },
        text: function(a) {
            return S(this, function(a) {
                return void 0 === a ? r.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = a)
                })
            }, null, a, arguments.length)
        },
        append: function() {
            return Ia(this, arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = Da(this, a);
                    b.appendChild(a)
                }
            })
        },
        prepend: function() {
            return Ia(this, arguments, function(a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = Da(this, a);
                    b.insertBefore(a, b.firstChild)
                }
            })
        },
        before: function() {
            return Ia(this, arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this)
            })
        },
        after: function() {
            return Ia(this, arguments, function(a) {
                this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
            })
        },
        empty: function() {
            for (var a, b = 0; null != (a = this[b]); b++)
                1 === a.nodeType && (r.cleanData(ma(a, !1)), a.textContent = "");
            return this
        },
        clone: function(a, b) {
            return a = null != a && a, b = null == b ? a : b, this.map(function() {
                return r.clone(this, a, b)
            })
        },
        html: function(a) {
            return S(this, function(a) {
                var b = this[0] || {},
                    c = 0,
                    d = this.length;
                if (void 0 === a && 1 === b.nodeType)
                    return b.innerHTML;
                if ("string" == typeof a && !za.test(a) && !la[(ja.exec(a) || ["", ""])[1].toLowerCase()]) {
                    a = r.htmlPrefilter(a);
                    try {
                        for (; c < d; c++)
                            b = this[c] || {}, 1 === b.nodeType && (r.cleanData(ma(b, !1)), b.innerHTML = a);
                        b = 0
                    } catch (e) {}
                }
                b && this.empty().append(a)
            }, null, a, arguments.length)
        },
        replaceWith: function() {
            var a = [];
            return Ia(this, arguments, function(b) {
                var c = this.parentNode;
                r.inArray(this, a) < 0 && (r.cleanData(ma(this)), c && c.replaceChild(b, this))
            }, a)
        }
    }), r.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(a, b) {
        r.fn[a] = function(a) {
            for (var c, d = [], e = r(a), f = e.length - 1, g = 0; g <= f; g++)
                c = g === f ? this : this.clone(!0), r(e[g])[b](c), h.apply(d, c.get());
            return this.pushStack(d)
        }
    });
    var Ka = /^margin/,
        La = new RegExp("^(" + _ + ")(?!px)[a-z%]+$", "i"),
        Ma = function(b) {
            var c = b.ownerDocument.defaultView;
            return c && c.opener || (c = a), c.getComputedStyle(b)
        };
    !function() {
        function b() {
            if (i) {
                i.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", i.innerHTML = "", qa.appendChild(h);
                var b = a.getComputedStyle(i);
                c = "1%" !== b.top, g = "2px" === b.marginLeft, e = "4px" === b.width, i.style.marginRight = "50%", f = "4px" === b.marginRight, qa.removeChild(h), i = null
            }
        }
        var c,
            e,
            f,
            g,
            h = d.createElement("div"),
            i = d.createElement("div");
        i.style && (i.style.backgroundClip = "content-box", i.cloneNode(!0).style.backgroundClip = "", o.clearCloneStyle = "content-box" === i.style.backgroundClip, h.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", h.appendChild(i), r.extend(o, {
            pixelPosition: function() {
                return b(), c
            },
            boxSizingReliable: function() {
                return b(), e
            },
            pixelMarginRight: function() {
                return b(), f
            },
            reliableMarginLeft: function() {
                return b(), g
            }
        }))
    }();
    function Na(a, b, c) {
        var d,
            e,
            f,
            g,
            h = a.style;
        return c = c || Ma(a), c && (g = c.getPropertyValue(b) || c[b], "" !== g || r.contains(a.ownerDocument, a) || (g = r.style(a, b)), !o.pixelMarginRight() && La.test(g) && Ka.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 !== g ? g + "" : g
    }
    function Oa(a, b) {
        return {
            get: function() {
                return a() ? void delete this.get : (this.get = b).apply(this, arguments)
            }
        }
    }
    var Pa = /^(none|table(?!-c[ea]).+)/,
        Qa = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        Ra = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        Sa = ["Webkit", "Moz", "ms"],
        Ta = d.createElement("div").style;
    function Ua(a) {
        if (a in Ta)
            return a;
        var b = a[0].toUpperCase() + a.slice(1),
            c = Sa.length;
        while (c--)
            if (a = Sa[c] + b, a in Ta)
                return a
    }
    function Va(a, b, c) {
        var d = aa.exec(b);
        return d ? Math.max(0, d[2] - (c || 0)) + (d[3] || "px") : b
    }
    function Wa(a, b, c, d, e) {
        var f,
            g = 0;
        for (f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0; f < 4; f += 2)
            "margin" === c && (g += r.css(a, c + ba[f], !0, e)), d ? ("content" === c && (g -= r.css(a, "padding" + ba[f], !0, e)), "margin" !== c && (g -= r.css(a, "border" + ba[f] + "Width", !0, e))) : (g += r.css(a, "padding" + ba[f], !0, e), "padding" !== c && (g += r.css(a, "border" + ba[f] + "Width", !0, e)));
        return g
    }
    function Xa(a, b, c) {
        var d,
            e = !0,
            f = Ma(a),
            g = "border-box" === r.css(a, "boxSizing", !1, f);
        if (a.getClientRects().length && (d = a.getBoundingClientRect()[b]), d <= 0 || null == d) {
            if (d = Na(a, b, f), (d < 0 || null == d) && (d = a.style[b]), La.test(d))
                return d;
            e = g && (o.boxSizingReliable() || d === a.style[b]), d = parseFloat(d) || 0
        }
        return d + Wa(a, b, c || (g ? "border" : "content"), e, f) + "px"
    }
    r.extend({
        cssHooks: {
            opacity: {
                get: function(a, b) {
                    if (b) {
                        var c = Na(a, "opacity");
                        return "" === c ? "1" : c
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": "cssFloat"
        },
        style: function(a, b, c, d) {
            if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                var e,
                    f,
                    g,
                    h = r.camelCase(b),
                    i = a.style;
                return b = r.cssProps[h] || (r.cssProps[h] = Ua(h) || h), g = r.cssHooks[b] || r.cssHooks[h], void 0 === c ? g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b] : (f = typeof c, "string" === f && (e = aa.exec(c)) && e[1] && (c = ea(a, b, e), f = "number"), null != c && c === c && ("number" === f && (c += e && e[3] || (r.cssNumber[h] ? "" : "px")), o.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), g && "set" in g && void 0 === (c = g.set(a, c, d)) || (i[b] = c)), void 0)
            }
        },
        css: function(a, b, c, d) {
            var e,
                f,
                g,
                h = r.camelCase(b);
            return b = r.cssProps[h] || (r.cssProps[h] = Ua(h) || h), g = r.cssHooks[b] || r.cssHooks[h], g && "get" in g && (e = g.get(a, !0, c)), void 0 === e && (e = Na(a, b, d)), "normal" === e && b in Ra && (e = Ra[b]), "" === c || c ? (f = parseFloat(e), c === !0 || isFinite(f) ? f || 0 : e) : e
        }
    }), r.each(["height", "width"], function(a, b) {
        r.cssHooks[b] = {
            get: function(a, c, d) {
                if (c)
                    return !Pa.test(r.css(a, "display")) || a.getClientRects().length && a.getBoundingClientRect().width ? Xa(a, b, d) : da(a, Qa, function() {
                        return Xa(a, b, d)
                    })
            },
            set: function(a, c, d) {
                var e,
                    f = d && Ma(a),
                    g = d && Wa(a, b, d, "border-box" === r.css(a, "boxSizing", !1, f), f);
                return g && (e = aa.exec(c)) && "px" !== (e[3] || "px") && (a.style[b] = c, c = r.css(a, b)), Va(a, c, g)
            }
        }
    }), r.cssHooks.marginLeft = Oa(o.reliableMarginLeft, function(a, b) {
        if (b)
            return (parseFloat(Na(a, "marginLeft")) || a.getBoundingClientRect().left - da(a, {
                marginLeft: 0
            }, function() {
                return a.getBoundingClientRect().left
            })) + "px"
    }), r.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(a, b) {
        r.cssHooks[a + b] = {
            expand: function(c) {
                for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; d < 4; d++)
                    e[a + ba[d] + b] = f[d] || f[d - 2] || f[0];
                return e
            }
        }, Ka.test(a) || (r.cssHooks[a + b].set = Va)
    }), r.fn.extend({
        css: function(a, b) {
            return S(this, function(a, b, c) {
                var d,
                    e,
                    f = {},
                    g = 0;
                if (r.isArray(b)) {
                    for (d = Ma(a), e = b.length; g < e; g++)
                        f[b[g]] = r.css(a, b[g], !1, d);
                    return f
                }
                return void 0 !== c ? r.style(a, b, c) : r.css(a, b)
            }, a, b, arguments.length > 1)
        }
    });
    function Ya(a, b, c, d, e) {
        return new Ya.prototype.init(a, b, c, d, e)
    }
    r.Tween = Ya, Ya.prototype = {
        constructor: Ya,
        init: function(a, b, c, d, e, f) {
            this.elem = a, this.prop = c, this.easing = e || r.easing._default, this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (r.cssNumber[c] ? "" : "px")
        },
        cur: function() {
            var a = Ya.propHooks[this.prop];
            return a && a.get ? a.get(this) : Ya.propHooks._default.get(this)
        },
        run: function(a) {
            var b,
                c = Ya.propHooks[this.prop];
            return this.options.duration ? this.pos = b = r.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : this.pos = b = a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Ya.propHooks._default.set(this), this
        }
    }, Ya.prototype.init.prototype = Ya.prototype, Ya.propHooks = {
        _default: {
            get: function(a) {
                var b;
                return 1 !== a.elem.nodeType || null != a.elem[a.prop] && null == a.elem.style[a.prop] ? a.elem[a.prop] : (b = r.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0)
            },
            set: function(a) {
                r.fx.step[a.prop] ? r.fx.step[a.prop](a) : 1 !== a.elem.nodeType || null == a.elem.style[r.cssProps[a.prop]] && !r.cssHooks[a.prop] ? a.elem[a.prop] = a.now : r.style(a.elem, a.prop, a.now + a.unit)
            }
        }
    }, Ya.propHooks.scrollTop = Ya.propHooks.scrollLeft = {
        set: function(a) {
            a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
        }
    }, r.easing = {
        linear: function(a) {
            return a
        },
        swing: function(a) {
            return .5 - Math.cos(a * Math.PI) / 2
        },
        _default: "swing"
    }, r.fx = Ya.prototype.init, r.fx.step = {};
    var Za,
        $a,
        _a = /^(?:toggle|show|hide)$/,
        ab = /queueHooks$/;
    function bb() {
        $a && (a.requestAnimationFrame(bb), r.fx.tick())
    }
    function cb() {
        return a.setTimeout(function() {
            Za = void 0
        }), Za = r.now()
    }
    function db(a, b) {
        var c,
            d = 0,
            e = {
                height: a
            };
        for (b = b ? 1 : 0; d < 4; d += 2 - b)
            c = ba[d], e["margin" + c] = e["padding" + c] = a;
        return b && (e.opacity = e.width = a), e
    }
    function eb(a, b, c) {
        for (var d, e = (hb.tweeners[b] || []).concat(hb.tweeners["*"]), f = 0, g = e.length; f < g; f++)
            if (d = e[f].call(c, b, a))
                return d
    }
    function fb(a, b, c) {
        var d,
            e,
            f,
            g,
            h,
            i,
            j,
            k,
            l = "width" in b || "height" in b,
            m = this,
            n = {},
            o = a.style,
            p = a.nodeType && ca(a),
            q = V.get(a, "fxshow");
        c.queue || (g = r._queueHooks(a, "fx"), null == g.unqueued && (g.unqueued = 0, h = g.empty.fire, g.empty.fire = function() {
            g.unqueued || h()
        }), g.unqueued++, m.always(function() {
            m.always(function() {
                g.unqueued--, r.queue(a, "fx").length || g.empty.fire()
            })
        }));
        for (d in b)
            if (e = b[d], _a.test(e)) {
                if (delete b[d], f = f || "toggle" === e, e === (p ? "hide" : "show")) {
                    if ("show" !== e || !q || void 0 === q[d])
                        continue;
                    p = !0
                }
                n[d] = q && q[d] || r.style(a, d)
            }
        if (i = !r.isEmptyObject(b), i || !r.isEmptyObject(n)) {
            l && 1 === a.nodeType && (c.overflow = [o.overflow, o.overflowX, o.overflowY], j = q && q.display, null == j && (j = V.get(a, "display")), k = r.css(a, "display"), "none" === k && (j ? k = j : (ha([a], !0), j = a.style.display || j, k = r.css(a, "display"), ha([a]))), ("inline" === k || "inline-block" === k && null != j) && "none" === r.css(a, "float") && (i || (m.done(function() {
                o.display = j
            }), null == j && (k = o.display, j = "none" === k ? "" : k)), o.display = "inline-block")), c.overflow && (o.overflow = "hidden", m.always(function() {
                o.overflow = c.overflow[0], o.overflowX = c.overflow[1], o.overflowY = c.overflow[2]
            })), i = !1;
            for (d in n)
                i || (q ? "hidden" in q && (p = q.hidden) : q = V.access(a, "fxshow", {
                    display: j
                }), f && (q.hidden = !p), p && ha([a], !0), m.done(function() {
                    p || ha([a]), V.remove(a, "fxshow");
                    for (d in n)
                        r.style(a, d, n[d])
                })), i = eb(p ? q[d] : 0, d, m), d in q || (q[d] = i.start, p && (i.end = i.start, i.start = 0))
        }
    }
    function gb(a, b) {
        var c,
            d,
            e,
            f,
            g;
        for (c in a)
            if (d = r.camelCase(c), e = b[d], f = a[c], r.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = r.cssHooks[d], g && "expand" in g) {
                f = g.expand(f), delete a[d];
                for (c in f)
                    c in a || (a[c] = f[c], b[c] = e)
            } else
                b[d] = e
    }
    function hb(a, b, c) {
        var d,
            e,
            f = 0,
            g = hb.prefilters.length,
            h = r.Deferred().always(function() {
                delete i.elem
            }),
            i = function() {
                if (e)
                    return !1;
                for (var b = Za || cb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; g < i; g++)
                    j.tweens[g].run(f);
                return h.notifyWith(a, [j, f, c]), f < 1 && i ? c : (h.resolveWith(a, [j]), !1)
            },
            j = h.promise({
                elem: a,
                props: r.extend({}, b),
                opts: r.extend(!0, {
                    specialEasing: {},
                    easing: r.easing._default
                }, c),
                originalProperties: b,
                originalOptions: c,
                startTime: Za || cb(),
                duration: c.duration,
                tweens: [],
                createTween: function(b, c) {
                    var d = r.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                    return j.tweens.push(d), d
                },
                stop: function(b) {
                    var c = 0,
                        d = b ? j.tweens.length : 0;
                    if (e)
                        return this;
                    for (e = !0; c < d; c++)
                        j.tweens[c].run(1);
                    return b ? (h.notifyWith(a, [j, 1, 0]), h.resolveWith(a, [j, b])) : h.rejectWith(a, [j, b]), this
                }
            }),
            k = j.props;
        for (gb(k, j.opts.specialEasing); f < g; f++)
            if (d = hb.prefilters[f].call(j, a, k, j.opts))
                return r.isFunction(d.stop) && (r._queueHooks(j.elem, j.opts.queue).stop = r.proxy(d.stop, d)), d;
        return r.map(k, eb, j), r.isFunction(j.opts.start) && j.opts.start.call(a, j), r.fx.timer(r.extend(i, {
            elem: a,
            anim: j,
            queue: j.opts.queue
        })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
    }
    r.Animation = r.extend(hb, {
        tweeners: {
            "*": [function(a, b) {
                var c = this.createTween(a, b);
                return ea(c.elem, a, aa.exec(b), c), c
            }]
        },
        tweener: function(a, b) {
            r.isFunction(a) ? (b = a, a = ["*"]) : a = a.match(K);
            for (var c, d = 0, e = a.length; d < e; d++)
                c = a[d], hb.tweeners[c] = hb.tweeners[c] || [], hb.tweeners[c].unshift(b)
        },
        prefilters: [fb],
        prefilter: function(a, b) {
            b ? hb.prefilters.unshift(a) : hb.prefilters.push(a)
        }
    }), r.speed = function(a, b, c) {
        var e = a && "object" == typeof a ? r.extend({}, a) : {
            complete: c || !c && b || r.isFunction(a) && a,
            duration: a,
            easing: c && b || b && !r.isFunction(b) && b
        };
        return r.fx.off || d.hidden ? e.duration = 0 : "number" != typeof e.duration && (e.duration in r.fx.speeds ? e.duration = r.fx.speeds[e.duration] : e.duration = r.fx.speeds._default), null != e.queue && e.queue !== !0 || (e.queue = "fx"), e.old = e.complete, e.complete = function() {
            r.isFunction(e.old) && e.old.call(this), e.queue && r.dequeue(this, e.queue)
        }, e
    }, r.fn.extend({
        fadeTo: function(a, b, c, d) {
            return this.filter(ca).css("opacity", 0).show().end().animate({
                opacity: b
            }, a, c, d)
        },
        animate: function(a, b, c, d) {
            var e = r.isEmptyObject(a),
                f = r.speed(b, c, d),
                g = function() {
                    var b = hb(this, r.extend({}, a), f);
                    (e || V.get(this, "finish")) && b.stop(!0)
                };
            return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
        },
        stop: function(a, b, c) {
            var d = function(a) {
                var b = a.stop;
                delete a.stop, b(c)
            };
            return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function() {
                var b = !0,
                    e = null != a && a + "queueHooks",
                    f = r.timers,
                    g = V.get(this);
                if (e)
                    g[e] && g[e].stop && d(g[e]);
                else
                    for (e in g)
                        g[e] && g[e].stop && ab.test(e) && d(g[e]);
                for (e = f.length; e--;)
                    f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                !b && c || r.dequeue(this, a)
            })
        },
        finish: function(a) {
            return a !== !1 && (a = a || "fx"), this.each(function() {
                var b,
                    c = V.get(this),
                    d = c[a + "queue"],
                    e = c[a + "queueHooks"],
                    f = r.timers,
                    g = d ? d.length : 0;
                for (c.finish = !0, r.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;)
                    f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                for (b = 0; b < g; b++)
                    d[b] && d[b].finish && d[b].finish.call(this);
                delete c.finish
            })
        }
    }), r.each(["toggle", "show", "hide"], function(a, b) {
        var c = r.fn[b];
        r.fn[b] = function(a, d, e) {
            return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(db(b, !0), a, d, e)
        }
    }), r.each({
        slideDown: db("show"),
        slideUp: db("hide"),
        slideToggle: db("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(a, b) {
        r.fn[a] = function(a, c, d) {
            return this.animate(b, a, c, d)
        }
    }), r.timers = [], r.fx.tick = function() {
        var a,
            b = 0,
            c = r.timers;
        for (Za = r.now(); b < c.length; b++)
            a = c[b], a() || c[b] !== a || c.splice(b--, 1);
        c.length || r.fx.stop(), Za = void 0
    }, r.fx.timer = function(a) {
        r.timers.push(a), a() ? r.fx.start() : r.timers.pop()
    }, r.fx.interval = 13, r.fx.start = function() {
        $a || ($a = a.requestAnimationFrame ? a.requestAnimationFrame(bb) : a.setInterval(r.fx.tick, r.fx.interval))
    }, r.fx.stop = function() {
        a.cancelAnimationFrame ? a.cancelAnimationFrame($a) : a.clearInterval($a), $a = null
    }, r.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    }, r.fn.delay = function(b, c) {
        return b = r.fx ? r.fx.speeds[b] || b : b, c = c || "fx", this.queue(c, function(c, d) {
            var e = a.setTimeout(c, b);
            d.stop = function() {
                a.clearTimeout(e)
            }
        })
    }, function() {
        var a = d.createElement("input"),
            b = d.createElement("select"),
            c = b.appendChild(d.createElement("option"));
        a.type = "checkbox", o.checkOn = "" !== a.value, o.optSelected = c.selected, a = d.createElement("input"), a.value = "t", a.type = "radio", o.radioValue = "t" === a.value
    }();
    var ib,
        jb = r.expr.attrHandle;
    r.fn.extend({
        attr: function(a, b) {
            return S(this, r.attr, a, b, arguments.length > 1)
        },
        removeAttr: function(a) {
            return this.each(function() {
                r.removeAttr(this, a)
            })
        }
    }), r.extend({
        attr: function(a, b, c) {
            var d,
                e,
                f = a.nodeType;
            if (3 !== f && 8 !== f && 2 !== f)
                return "undefined" == typeof a.getAttribute ? r.prop(a, b, c) : (1 === f && r.isXMLDoc(a) || (e = r.attrHooks[b.toLowerCase()] || (r.expr.match.bool.test(b) ? ib : void 0)), void 0 !== c ? null === c ? void r.removeAttr(a, b) : e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : (a.setAttribute(b, c + ""), c) : e && "get" in e && null !== (d = e.get(a, b)) ? d : (d = r.find.attr(a, b), null == d ? void 0 : d))
        },
        attrHooks: {
            type: {
                set: function(a, b) {
                    if (!o.radioValue && "radio" === b && r.nodeName(a, "input")) {
                        var c = a.value;
                        return a.setAttribute("type", b), c && (a.value = c), b
                    }
                }
            }
        },
        removeAttr: function(a, b) {
            var c,
                d = 0,
                e = b && b.match(K);
            if (e && 1 === a.nodeType)
                while (c = e[d++])
                    a.removeAttribute(c)
        }
    }), ib = {
        set: function(a, b, c) {
            return b === !1 ? r.removeAttr(a, c) : a.setAttribute(c, c), c
        }
    }, r.each(r.expr.match.bool.source.match(/\w+/g), function(a, b) {
        var c = jb[b] || r.find.attr;
        jb[b] = function(a, b, d) {
            var e,
                f,
                g = b.toLowerCase();
            return d || (f = jb[g], jb[g] = e, e = null != c(a, b, d) ? g : null, jb[g] = f), e
        }
    });
    var kb = /^(?:input|select|textarea|button)$/i,
        lb = /^(?:a|area)$/i;
    r.fn.extend({
        prop: function(a, b) {
            return S(this, r.prop, a, b, arguments.length > 1)
        },
        removeProp: function(a) {
            return this.each(function() {
                delete this[r.propFix[a] || a]
            })
        }
    }), r.extend({
        prop: function(a, b, c) {
            var d,
                e,
                f = a.nodeType;
            if (3 !== f && 8 !== f && 2 !== f)
                return 1 === f && r.isXMLDoc(a) || (b = r.propFix[b] || b, e = r.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
        },
        propHooks: {
            tabIndex: {
                get: function(a) {
                    var b = r.find.attr(a, "tabindex");
                    return b ? parseInt(b, 10) : kb.test(a.nodeName) || lb.test(a.nodeName) && a.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    }), o.optSelected || (r.propHooks.selected = {
        get: function(a) {
            var b = a.parentNode;
            return b && b.parentNode && b.parentNode.selectedIndex, null
        },
        set: function(a) {
            var b = a.parentNode;
            b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex)
        }
    }), r.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        r.propFix[this.toLowerCase()] = this
    });
    function mb(a) {
        var b = a.match(K) || [];
        return b.join(" ")
    }
    function nb(a) {
        return a.getAttribute && a.getAttribute("class") || ""
    }
    r.fn.extend({
        addClass: function(a) {
            var b,
                c,
                d,
                e,
                f,
                g,
                h,
                i = 0;
            if (r.isFunction(a))
                return this.each(function(b) {
                    r(this).addClass(a.call(this, b, nb(this)))
                });
            if ("string" == typeof a && a) {
                b = a.match(K) || [];
                while (c = this[i++])
                    if (e = nb(c), d = 1 === c.nodeType && " " + mb(e) + " ") {
                        g = 0;
                        while (f = b[g++])
                            d.indexOf(" " + f + " ") < 0 && (d += f + " ");
                        h = mb(d), e !== h && c.setAttribute("class", h)
                    }
            }
            return this
        },
        removeClass: function(a) {
            var b,
                c,
                d,
                e,
                f,
                g,
                h,
                i = 0;
            if (r.isFunction(a))
                return this.each(function(b) {
                    r(this).removeClass(a.call(this, b, nb(this)))
                });
            if (!arguments.length)
                return this.attr("class", "");
            if ("string" == typeof a && a) {
                b = a.match(K) || [];
                while (c = this[i++])
                    if (e = nb(c), d = 1 === c.nodeType && " " + mb(e) + " ") {
                        g = 0;
                        while (f = b[g++])
                            while (d.indexOf(" " + f + " ") > -1)
                                d = d.replace(" " + f + " ", " ");
                        h = mb(d), e !== h && c.setAttribute("class", h)
                    }
            }
            return this
        },
        toggleClass: function(a, b) {
            var c = typeof a;
            return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : r.isFunction(a) ? this.each(function(c) {
                r(this).toggleClass(a.call(this, c, nb(this), b), b)
            }) : this.each(function() {
                var b,
                    d,
                    e,
                    f;
                if ("string" === c) {
                    d = 0, e = r(this), f = a.match(K) || [];
                    while (b = f[d++])
                        e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                } else
                    void 0 !== a && "boolean" !== c || (b = nb(this), b && V.set(this, "__className__", b), this.setAttribute && this.setAttribute("class", b || a === !1 ? "" : V.get(this, "__className__") || ""))
            })
        },
        hasClass: function(a) {
            var b,
                c,
                d = 0;
            b = " " + a + " ";
            while (c = this[d++])
                if (1 === c.nodeType && (" " + mb(nb(c)) + " ").indexOf(b) > -1)
                    return !0;
            return !1
        }
    });
    var ob = /\r/g;
    r.fn.extend({
        val: function(a) {
            var b,
                c,
                d,
                e = this[0];
            {
                if (arguments.length)
                    return d = r.isFunction(a), this.each(function(c) {
                        var e;
                        1 === this.nodeType && (e = d ? a.call(this, c, r(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : r.isArray(e) && (e = r.map(e, function(a) {
                            return null == a ? "" : a + ""
                        })), b = r.valHooks[this.type] || r.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                    });
                if (e)
                    return b = r.valHooks[e.type] || r.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(ob, "") : null == c ? "" : c)
            }
        }
    }), r.extend({
        valHooks: {
            option: {
                get: function(a) {
                    var b = r.find.attr(a, "value");
                    return null != b ? b : mb(r.text(a))
                }
            },
            select: {
                get: function(a) {
                    var b,
                        c,
                        d,
                        e = a.options,
                        f = a.selectedIndex,
                        g = "select-one" === a.type,
                        h = g ? null : [],
                        i = g ? f + 1 : e.length;
                    for (d = f < 0 ? i : g ? f : 0; d < i; d++)
                        if (c = e[d], (c.selected || d === f) && !c.disabled && (!c.parentNode.disabled || !r.nodeName(c.parentNode, "optgroup"))) {
                            if (b = r(c).val(), g)
                                return b;
                            h.push(b)
                        }
                    return h
                },
                set: function(a, b) {
                    var c,
                        d,
                        e = a.options,
                        f = r.makeArray(b),
                        g = e.length;
                    while (g--)
                        d = e[g], (d.selected = r.inArray(r.valHooks.option.get(d), f) > -1) && (c = !0);
                    return c || (a.selectedIndex = -1), f
                }
            }
        }
    }), r.each(["radio", "checkbox"], function() {
        r.valHooks[this] = {
            set: function(a, b) {
                if (r.isArray(b))
                    return a.checked = r.inArray(r(a).val(), b) > -1
            }
        }, o.checkOn || (r.valHooks[this].get = function(a) {
            return null === a.getAttribute("value") ? "on" : a.value
        })
    });
    var pb = /^(?:focusinfocus|focusoutblur)$/;
    r.extend(r.event, {
        trigger: function(b, c, e, f) {
            var g,
                h,
                i,
                j,
                k,
                m,
                n,
                o = [e || d],
                p = l.call(b, "type") ? b.type : b,
                q = l.call(b, "namespace") ? b.namespace.split(".") : [];
            if (h = i = e = e || d, 3 !== e.nodeType && 8 !== e.nodeType && !pb.test(p + r.event.triggered) && (p.indexOf(".") > -1 && (q = p.split("."), p = q.shift(), q.sort()), k = p.indexOf(":") < 0 && "on" + p, b = b[r.expando] ? b : new r.Event(p, "object" == typeof b && b), b.isTrigger = f ? 2 : 3, b.namespace = q.join("."), b.rnamespace = b.namespace ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = e), c = null == c ? [b] : r.makeArray(c, [b]), n = r.event.special[p] || {}, f || !n.trigger || n.trigger.apply(e, c) !== !1)) {
                if (!f && !n.noBubble && !r.isWindow(e)) {
                    for (j = n.delegateType || p, pb.test(j + p) || (h = h.parentNode); h; h = h.parentNode)
                        o.push(h), i = h;
                    i === (e.ownerDocument || d) && o.push(i.defaultView || i.parentWindow || a)
                }
                g = 0;
                while ((h = o[g++]) && !b.isPropagationStopped())
                    b.type = g > 1 ? j : n.bindType || p, m = (V.get(h, "events") || {})[b.type] && V.get(h, "handle"), m && m.apply(h, c), m = k && h[k], m && m.apply && T(h) && (b.result = m.apply(h, c), b.result === !1 && b.preventDefault());
                return b.type = p, f || b.isDefaultPrevented() || n._default && n._default.apply(o.pop(), c) !== !1 || !T(e) || k && r.isFunction(e[p]) && !r.isWindow(e) && (i = e[k], i && (e[k] = null), r.event.triggered = p, e[p](), r.event.triggered = void 0, i && (e[k] = i)), b.result
            }
        },
        simulate: function(a, b, c) {
            var d = r.extend(new r.Event, c, {
                type: a,
                isSimulated: !0
            });
            r.event.trigger(d, null, b)
        }
    }), r.fn.extend({
        trigger: function(a, b) {
            return this.each(function() {
                r.event.trigger(a, b, this)
            })
        },
        triggerHandler: function(a, b) {
            var c = this[0];
            if (c)
                return r.event.trigger(a, b, c, !0)
        }
    }), r.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(a, b) {
        r.fn[b] = function(a, c) {
            return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
        }
    }), r.fn.extend({
        hover: function(a, b) {
            return this.mouseenter(a).mouseleave(b || a)
        }
    }), o.focusin = "onfocusin" in a, o.focusin || r.each({
        focus: "focusin",
        blur: "focusout"
    }, function(a, b) {
        var c = function(a) {
            r.event.simulate(b, a.target, r.event.fix(a))
        };
        r.event.special[b] = {
            setup: function() {
                var d = this.ownerDocument || this,
                    e = V.access(d, b);
                e || d.addEventListener(a, c, !0), V.access(d, b, (e || 0) + 1)
            },
            teardown: function() {
                var d = this.ownerDocument || this,
                    e = V.access(d, b) - 1;
                e ? V.access(d, b, e) : (d.removeEventListener(a, c, !0), V.remove(d, b))
            }
        }
    });
    var qb = a.location,
        rb = r.now(),
        sb = /\?/;
    r.parseXML = function(b) {
        var c;
        if (!b || "string" != typeof b)
            return null;
        try {
            c = (new a.DOMParser).parseFromString(b, "text/xml")
        } catch (d) {
            c = void 0
        }
        return c && !c.getElementsByTagName("parsererror").length || r.error("Invalid XML: " + b), c
    };
    var tb = /\[\]$/,
        ub = /\r?\n/g,
        vb = /^(?:submit|button|image|reset|file)$/i,
        wb = /^(?:input|select|textarea|keygen)/i;
    function xb(a, b, c, d) {
        var e;
        if (r.isArray(b))
            r.each(b, function(b, e) {
                c || tb.test(a) ? d(a, e) : xb(a + "[" + ("object" == typeof e && null != e ? b : "") + "]", e, c, d)
            });
        else if (c || "object" !== r.type(b))
            d(a, b);
        else
            for (e in b)
                xb(a + "[" + e + "]", b[e], c, d)
    }
    r.param = function(a, b) {
        var c,
            d = [],
            e = function(a, b) {
                var c = r.isFunction(b) ? b() : b;
                d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(null == c ? "" : c)
            };
        if (r.isArray(a) || a.jquery && !r.isPlainObject(a))
            r.each(a, function() {
                e(this.name, this.value)
            });
        else
            for (c in a)
                xb(c, a[c], b, e);
        return d.join("&")
    }, r.fn.extend({
        serialize: function() {
            return r.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var a = r.prop(this, "elements");
                return a ? r.makeArray(a) : this
            }).filter(function() {
                var a = this.type;
                return this.name && !r(this).is(":disabled") && wb.test(this.nodeName) && !vb.test(a) && (this.checked || !ia.test(a))
            }).map(function(a, b) {
                var c = r(this).val();
                return null == c ? null : r.isArray(c) ? r.map(c, function(a) {
                    return {
                        name: b.name,
                        value: a.replace(ub, "\r\n")
                    }
                }) : {
                    name: b.name,
                    value: c.replace(ub, "\r\n")
                }
            }).get()
        }
    });
    var yb = /%20/g,
        zb = /#.*$/,
        Ab = /([?&])_=[^&]*/,
        Bb = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Cb = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        Db = /^(?:GET|HEAD)$/,
        Eb = /^\/\//,
        Fb = {},
        Gb = {},
        Hb = "*/".concat("*"),
        Ib = d.createElement("a");
    Ib.href = qb.href;
    function Jb(a) {
        return function(b, c) {
            "string" != typeof b && (c = b, b = "*");
            var d,
                e = 0,
                f = b.toLowerCase().match(K) || [];
            if (r.isFunction(c))
                while (d = f[e++])
                    "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
        }
    }
    function Kb(a, b, c, d) {
        var e = {},
            f = a === Gb;
        function g(h) {
            var i;
            return e[h] = !0, r.each(a[h] || [], function(a, h) {
                var j = h(b, c, d);
                return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
            }), i
        }
        return g(b.dataTypes[0]) || !e["*"] && g("*")
    }
    function Lb(a, b) {
        var c,
            d,
            e = r.ajaxSettings.flatOptions || {};
        for (c in b)
            void 0 !== b[c] && ((e[c] ? a : d || (d = {}))[c] = b[c]);
        return d && r.extend(!0, a, d), a
    }
    function Mb(a, b, c) {
        var d,
            e,
            f,
            g,
            h = a.contents,
            i = a.dataTypes;
        while ("*" === i[0])
            i.shift(), void 0 === d && (d = a.mimeType || b.getResponseHeader("Content-Type"));
        if (d)
            for (e in h)
                if (h[e] && h[e].test(d)) {
                    i.unshift(e);
                    break
                }
        if (i[0] in c)
            f = i[0];
        else {
            for (e in c) {
                if (!i[0] || a.converters[e + " " + i[0]]) {
                    f = e;
                    break
                }
                g || (g = e)
            }
            f = f || g
        }
        if (f)
            return f !== i[0] && i.unshift(f), c[f]
    }
    function Nb(a, b, c, d) {
        var e,
            f,
            g,
            h,
            i,
            j = {},
            k = a.dataTypes.slice();
        if (k[1])
            for (g in a.converters)
                j[g.toLowerCase()] = a.converters[g];
        f = k.shift();
        while (f)
            if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift())
                if ("*" === f)
                    f = i;
                else if ("*" !== i && i !== f) {
                    if (g = j[i + " " + f] || j["* " + f], !g)
                        for (e in j)
                            if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                                g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                                break
                            }
                    if (g !== !0)
                        if (g && a["throws"])
                            b = g(b);
                        else
                            try {
                                b = g(b)
                            } catch (l) {
                                return {
                                    state: "parsererror",
                                    error: g ? l : "No conversion from " + i + " to " + f
                                }
                            }
                }
        return {
            state: "success",
            data: b
        }
    }
    r.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: qb.href,
            type: "GET",
            isLocal: Cb.test(qb.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Hb,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": r.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(a, b) {
            return b ? Lb(Lb(a, r.ajaxSettings), b) : Lb(r.ajaxSettings, a)
        },
        ajaxPrefilter: Jb(Fb),
        ajaxTransport: Jb(Gb),
        ajax: function(b, c) {
            "object" == typeof b && (c = b, b = void 0), c = c || {};
            var e,
                f,
                g,
                h,
                i,
                j,
                k,
                l,
                m,
                n,
                o = r.ajaxSetup({}, c),
                p = o.context || o,
                q = o.context && (p.nodeType || p.jquery) ? r(p) : r.event,
                s = r.Deferred(),
                t = r.Callbacks("once memory"),
                u = o.statusCode || {},
                v = {},
                w = {},
                x = "canceled",
                y = {
                    readyState: 0,
                    getResponseHeader: function(a) {
                        var b;
                        if (k) {
                            if (!h) {
                                h = {};
                                while (b = Bb.exec(g))
                                    h[b[1].toLowerCase()] = b[2]
                            }
                            b = h[a.toLowerCase()]
                        }
                        return null == b ? null : b
                    },
                    getAllResponseHeaders: function() {
                        return k ? g : null
                    },
                    setRequestHeader: function(a, b) {
                        return null == k && (a = w[a.toLowerCase()] = w[a.toLowerCase()] || a, v[a] = b), this
                    },
                    overrideMimeType: function(a) {
                        return null == k && (o.mimeType = a), this
                    },
                    statusCode: function(a) {
                        var b;
                        if (a)
                            if (k)
                                y.always(a[y.status]);
                            else
                                for (b in a)
                                    u[b] = [u[b], a[b]];
                        return this
                    },
                    abort: function(a) {
                        var b = a || x;
                        return e && e.abort(b), A(0, b), this
                    }
                };
            if (s.promise(y), o.url = ((b || o.url || qb.href) + "").replace(Eb, qb.protocol + "//"), o.type = c.method || c.type || o.method || o.type, o.dataTypes = (o.dataType || "*").toLowerCase().match(K) || [""], null == o.crossDomain) {
                j = d.createElement("a");
                try {
                    j.href = o.url, j.href = j.href, o.crossDomain = Ib.protocol + "//" + Ib.host != j.protocol + "//" + j.host
                } catch (z) {
                    o.crossDomain = !0
                }
            }
            if (o.data && o.processData && "string" != typeof o.data && (o.data = r.param(o.data, o.traditional)), Kb(Fb, o, c, y), k)
                return y;
            l = r.event && o.global, l && 0 === r.active++ && r.event.trigger("ajaxStart"), o.type = o.type.toUpperCase(), o.hasContent = !Db.test(o.type), f = o.url.replace(zb, ""), o.hasContent ? o.data && o.processData && 0 === (o.contentType || "").indexOf("application/x-www-form-urlencoded") && (o.data = o.data.replace(yb, "+")) : (n = o.url.slice(f.length), o.data && (f += (sb.test(f) ? "&" : "?") + o.data, delete o.data), o.cache === !1 && (f = f.replace(Ab, "$1"), n = (sb.test(f) ? "&" : "?") + "_=" + rb++ + n), o.url = f + n), o.ifModified && (r.lastModified[f] && y.setRequestHeader("If-Modified-Since", r.lastModified[f]), r.etag[f] && y.setRequestHeader("If-None-Match", r.etag[f])), (o.data && o.hasContent && o.contentType !== !1 || c.contentType) && y.setRequestHeader("Content-Type", o.contentType), y.setRequestHeader("Accept", o.dataTypes[0] && o.accepts[o.dataTypes[0]] ? o.accepts[o.dataTypes[0]] + ("*" !== o.dataTypes[0] ? ", " + Hb + "; q=0.01" : "") : o.accepts["*"]);
            for (m in o.headers)
                y.setRequestHeader(m, o.headers[m]);
            if (o.beforeSend && (o.beforeSend.call(p, y, o) === !1 || k))
                return y.abort();
            if (x = "abort", t.add(o.complete), y.done(o.success), y.fail(o.error), e = Kb(Gb, o, c, y)) {
                if (y.readyState = 1, l && q.trigger("ajaxSend", [y, o]), k)
                    return y;
                o.async && o.timeout > 0 && (i = a.setTimeout(function() {
                    y.abort("timeout")
                }, o.timeout));
                try {
                    k = !1, e.send(v, A)
                } catch (z) {
                    if (k)
                        throw z;
                    A(-1, z)
                }
            } else
                A(-1, "No Transport");
            function A(b, c, d, h) {
                var j,
                    m,
                    n,
                    v,
                    w,
                    x = c;
                k || (k = !0, i && a.clearTimeout(i), e = void 0, g = h || "", y.readyState = b > 0 ? 4 : 0, j = b >= 200 && b < 300 || 304 === b, d && (v = Mb(o, y, d)), v = Nb(o, v, y, j), j ? (o.ifModified && (w = y.getResponseHeader("Last-Modified"), w && (r.lastModified[f] = w), w = y.getResponseHeader("etag"), w && (r.etag[f] = w)), 204 === b || "HEAD" === o.type ? x = "nocontent" : 304 === b ? x = "notmodified" : (x = v.state, m = v.data, n = v.error, j = !n)) : (n = x, !b && x || (x = "error", b < 0 && (b = 0))), y.status = b, y.statusText = (c || x) + "", j ? s.resolveWith(p, [m, x, y]) : s.rejectWith(p, [y, x, n]), y.statusCode(u), u = void 0, l && q.trigger(j ? "ajaxSuccess" : "ajaxError", [y, o, j ? m : n]), t.fireWith(p, [y, x]), l && (q.trigger("ajaxComplete", [y, o]), --r.active || r.event.trigger("ajaxStop")))
            }
            return y
        },
        getJSON: function(a, b, c) {
            return r.get(a, b, c, "json")
        },
        getScript: function(a, b) {
            return r.get(a, void 0, b, "script")
        }
    }), r.each(["get", "post"], function(a, b) {
        r[b] = function(a, c, d, e) {
            return r.isFunction(c) && (e = e || d, d = c, c = void 0), r.ajax(r.extend({
                url: a,
                type: b,
                dataType: e,
                data: c,
                success: d
            }, r.isPlainObject(a) && a))
        }
    }), r._evalUrl = function(a) {
        return r.ajax({
            url: a,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            "throws": !0
        })
    }, r.fn.extend({
        wrapAll: function(a) {
            var b;
            return this[0] && (r.isFunction(a) && (a = a.call(this[0])), b = r(a, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && b.insertBefore(this[0]), b.map(function() {
                var a = this;
                while (a.firstElementChild)
                    a = a.firstElementChild;
                return a
            }).append(this)), this
        },
        wrapInner: function(a) {
            return r.isFunction(a) ? this.each(function(b) {
                r(this).wrapInner(a.call(this, b))
            }) : this.each(function() {
                var b = r(this),
                    c = b.contents();
                c.length ? c.wrapAll(a) : b.append(a)
            })
        },
        wrap: function(a) {
            var b = r.isFunction(a);
            return this.each(function(c) {
                r(this).wrapAll(b ? a.call(this, c) : a)
            })
        },
        unwrap: function(a) {
            return this.parent(a).not("body").each(function() {
                r(this).replaceWith(this.childNodes)
            }), this
        }
    }), r.expr.pseudos.hidden = function(a) {
        return !r.expr.pseudos.visible(a)
    }, r.expr.pseudos.visible = function(a) {
        return !!(a.offsetWidth || a.offsetHeight || a.getClientRects().length)
    }, r.ajaxSettings.xhr = function() {
        try {
            return new a.XMLHttpRequest
        } catch (b) {}
    };
    var Ob = {
            0: 200,
            1223: 204
        },
        Pb = r.ajaxSettings.xhr();
    o.cors = !!Pb && "withCredentials" in Pb, o.ajax = Pb = !!Pb, r.ajaxTransport(function(b) {
        var c,
            d;
        if (o.cors || Pb && !b.crossDomain)
            return {
                send: function(e, f) {
                    var g,
                        h = b.xhr();
                    if (h.open(b.type, b.url, b.async, b.username, b.password), b.xhrFields)
                        for (g in b.xhrFields)
                            h[g] = b.xhrFields[g];
                    b.mimeType && h.overrideMimeType && h.overrideMimeType(b.mimeType), b.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest");
                    for (g in e)
                        h.setRequestHeader(g, e[g]);
                    c = function(a) {
                        return function() {
                            c && (c = d = h.onload = h.onerror = h.onabort = h.onreadystatechange = null, "abort" === a ? h.abort() : "error" === a ? "number" != typeof h.status ? f(0, "error") : f(h.status, h.statusText) : f(Ob[h.status] || h.status, h.statusText, "text" !== (h.responseType || "text") || "string" != typeof h.responseText ? {
                                binary: h.response
                            } : {
                                text: h.responseText
                            }, h.getAllResponseHeaders()))
                        }
                    }, h.onload = c(), d = h.onerror = c("error"), void 0 !== h.onabort ? h.onabort = d : h.onreadystatechange = function() {
                        4 === h.readyState && a.setTimeout(function() {
                            c && d()
                        })
                    }, c = c("abort");
                    try {
                        h.send(b.hasContent && b.data || null)
                    } catch (i) {
                        if (c)
                            throw i
                    }
                },
                abort: function() {
                    c && c()
                }
            }
    }), r.ajaxPrefilter(function(a) {
        a.crossDomain && (a.contents.script = !1)
    }), r.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(a) {
                return r.globalEval(a), a
            }
        }
    }), r.ajaxPrefilter("script", function(a) {
        void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET")
    }), r.ajaxTransport("script", function(a) {
        if (a.crossDomain) {
            var b,
                c;
            return {
                send: function(e, f) {
                    b = r("<script>").prop({
                        charset: a.scriptCharset,
                        src: a.url
                    }).on("load error", c = function(a) {
                        b.remove(), c = null, a && f("error" === a.type ? 404 : 200, a.type)
                    }), d.head.appendChild(b[0])
                },
                abort: function() {
                    c && c()
                }
            }
        }
    });
    var Qb = [],
        Rb = /(=)\?(?=&|$)|\?\?/;
    r.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var a = Qb.pop() || r.expando + "_" + rb++;
            return this[a] = !0, a
        }
    }), r.ajaxPrefilter("json jsonp", function(b, c, d) {
        var e,
            f,
            g,
            h = b.jsonp !== !1 && (Rb.test(b.url) ? "url" : "string" == typeof b.data && 0 === (b.contentType || "").indexOf("application/x-www-form-urlencoded") && Rb.test(b.data) && "data");
        if (h || "jsonp" === b.dataTypes[0])
            return e = b.jsonpCallback = r.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(Rb, "$1" + e) : b.jsonp !== !1 && (b.url += (sb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function() {
                return g || r.error(e + " was not called"), g[0]
            }, b.dataTypes[0] = "json", f = a[e], a[e] = function() {
                g = arguments
            }, d.always(function() {
                void 0 === f ? r(a).removeProp(e) : a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, Qb.push(e)), g && r.isFunction(f) && f(g[0]), g = f = void 0
            }), "script"
    }), o.createHTMLDocument = function() {
        var a = d.implementation.createHTMLDocument("").body;
        return a.innerHTML = "<form></form><form></form>", 2 === a.childNodes.length
    }(), r.parseHTML = function(a, b, c) {
        if ("string" != typeof a)
            return [];
        "boolean" == typeof b && (c = b, b = !1);
        var e,
            f,
            g;
        return b || (o.createHTMLDocument ? (b = d.implementation.createHTMLDocument(""), e = b.createElement("base"), e.href = d.location.href, b.head.appendChild(e)) : b = d), f = B.exec(a), g = !c && [], f ? [b.createElement(f[1])] : (f = pa([a], b, g), g && g.length && r(g).remove(), r.merge([], f.childNodes))
    }, r.fn.load = function(a, b, c) {
        var d,
            e,
            f,
            g = this,
            h = a.indexOf(" ");
        return h > -1 && (d = mb(a.slice(h)), a = a.slice(0, h)), r.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (e = "POST"), g.length > 0 && r.ajax({
            url: a,
            type: e || "GET",
            dataType: "html",
            data: b
        }).done(function(a) {
            f = arguments, g.html(d ? r("<div>").append(r.parseHTML(a)).find(d) : a)
        }).always(c && function(a, b) {
            g.each(function() {
                c.apply(this, f || [a.responseText, b, a])
            })
        }), this
    }, r.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(a, b) {
        r.fn[b] = function(a) {
            return this.on(b, a)
        }
    }), r.expr.pseudos.animated = function(a) {
        return r.grep(r.timers, function(b) {
            return a === b.elem
        }).length
    };
    function Sb(a) {
        return r.isWindow(a) ? a : 9 === a.nodeType && a.defaultView
    }
    r.offset = {
        setOffset: function(a, b, c) {
            var d,
                e,
                f,
                g,
                h,
                i,
                j,
                k = r.css(a, "position"),
                l = r(a),
                m = {};
            "static" === k && (a.style.position = "relative"), h = l.offset(), f = r.css(a, "top"), i = r.css(a, "left"), j = ("absolute" === k || "fixed" === k) && (f + i).indexOf("auto") > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), r.isFunction(b) && (b = b.call(a, c, r.extend({}, h))), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m)
        }
    }, r.fn.extend({
        offset: function(a) {
            if (arguments.length)
                return void 0 === a ? this : this.each(function(b) {
                    r.offset.setOffset(this, a, b)
                });
            var b,
                c,
                d,
                e,
                f = this[0];
            if (f)
                return f.getClientRects().length ? (d = f.getBoundingClientRect(), d.width || d.height ? (e = f.ownerDocument, c = Sb(e), b = e.documentElement, {
                    top: d.top + c.pageYOffset - b.clientTop,
                    left: d.left + c.pageXOffset - b.clientLeft
                }) : d) : {
                    top: 0,
                    left: 0
                }
        },
        position: function() {
            if (this[0]) {
                var a,
                    b,
                    c = this[0],
                    d = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === r.css(c, "position") ? b = c.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), r.nodeName(a[0], "html") || (d = a.offset()), d = {
                    top: d.top + r.css(a[0], "borderTopWidth", !0),
                    left: d.left + r.css(a[0], "borderLeftWidth", !0)
                }), {
                    top: b.top - d.top - r.css(c, "marginTop", !0),
                    left: b.left - d.left - r.css(c, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                var a = this.offsetParent;
                while (a && "static" === r.css(a, "position"))
                    a = a.offsetParent;
                return a || qa
            })
        }
    }), r.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(a, b) {
        var c = "pageYOffset" === b;
        r.fn[a] = function(d) {
            return S(this, function(a, d, e) {
                var f = Sb(a);
                return void 0 === e ? f ? f[b] : a[d] : void (f ? f.scrollTo(c ? f.pageXOffset : e, c ? e : f.pageYOffset) : a[d] = e)
            }, a, d, arguments.length)
        }
    }), r.each(["top", "left"], function(a, b) {
        r.cssHooks[b] = Oa(o.pixelPosition, function(a, c) {
            if (c)
                return c = Na(a, b), La.test(c) ? r(a).position()[b] + "px" : c
        })
    }), r.each({
        Height: "height",
        Width: "width"
    }, function(a, b) {
        r.each({
            padding: "inner" + a,
            content: b,
            "": "outer" + a
        }, function(c, d) {
            r.fn[d] = function(e, f) {
                var g = arguments.length && (c || "boolean" != typeof e),
                    h = c || (e === !0 || f === !0 ? "margin" : "border");
                return S(this, function(b, c, e) {
                    var f;
                    return r.isWindow(b) ? 0 === d.indexOf("outer") ? b["inner" + a] : b.document.documentElement["client" + a] : 9 === b.nodeType ? (f = b.documentElement, Math.max(b.body["scroll" + a], f["scroll" + a], b.body["offset" + a], f["offset" + a], f["client" + a])) : void 0 === e ? r.css(b, c, h) : r.style(b, c, e, h)
                }, b, g ? e : void 0, g)
            }
        })
    }), r.fn.extend({
        bind: function(a, b, c) {
            return this.on(a, null, b, c)
        },
        unbind: function(a, b) {
            return this.off(a, null, b)
        },
        delegate: function(a, b, c, d) {
            return this.on(b, a, c, d)
        },
        undelegate: function(a, b, c) {
            return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
        }
    }), r.parseJSON = JSON.parse, "function" == typeof define && define.amd && define("jquery", [], function() {
        return r
    });
    var Tb = a.jQuery,
        Ub = a.$;
    return r.noConflict = function(b) {
        return a.$ === r && (a.$ = Ub), b && a.jQuery === r && (a.jQuery = Tb), r
    }, b || (a.jQuery = a.$ = r), r
});
!function(a, b) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], b) : "object" == typeof exports ? module.exports = b(require("jquery")) : a.bootbox = b(a.jQuery)
}(this, function a(b, c) {
    "use strict";
    function d(a) {
        var b = q[o.locale];
        return b ? b[a] : q.en[a]
    }
    function e(a, c, d) {
        a.stopPropagation(), a.preventDefault();
        var e = b.isFunction(d) && d.call(c, a) === !1;
        e || c.modal("hide")
    }
    function f(a) {
        var b,
            c = 0;
        for (b in a)
            c++;
        return c
    }
    function g(a, c) {
        var d = 0;
        b.each(a, function(a, b) {
            c(a, b, d++)
        })
    }
    function h(a) {
        var c,
            d;
        if ("object" != typeof a)
            throw new Error("Please supply an object of options");
        if (!a.message)
            throw new Error("Please specify a message");
        return a = b.extend({}, o, a), a.buttons || (a.buttons = {}), c = a.buttons, d = f(c), g(c, function(a, e, f) {
            if (b.isFunction(e) && (e = c[a] = {
                callback: e
            }), "object" !== b.type(e))
                throw new Error("button with key " + a + " must be an object");
            e.label || (e.label = a), e.className || (e.className = 2 >= d && f === d - 1 ? "btn-primary" : "btn-default")
        }), a
    }
    function i(a, b) {
        var c = a.length,
            d = {};
        if (1 > c || c > 2)
            throw new Error("Invalid argument length");
        return 2 === c || "string" == typeof a[0] ? (d[b[0]] = a[0], d[b[1]] = a[1]) : d = a[0], d
    }
    function j(a, c, d) {
        return b.extend(!0, {}, a, i(c, d))
    }
    function k(a, b, c, d) {
        var e = {
            className: "bootbox-" + a,
            buttons: l.apply(null, b)
        };
        return m(j(e, d, c), b)
    }
    function l() {
        for (var a = {}, b = 0, c = arguments.length; c > b; b++) {
            var e = arguments[b],
                f = e.toLowerCase(),
                g = e.toUpperCase();
            a[f] = {
                label: d(g)
            }
        }
        return a
    }
    function m(a, b) {
        var d = {};
        return g(b, function(a, b) {
            d[b] = !0
        }), g(a.buttons, function(a) {
            if (d[a] === c)
                throw new Error("button key " + a + " is not allowed (options are " + b.join("\n") + ")")
        }), a
    }
    var n = {
            dialog: "<div class='bootbox modal' tabindex='-1' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><div class='bootbox-body'></div></div></div></div></div>",
            header: "<div class='modal-header'><h4 class='modal-title'></h4></div>",
            footer: "<div class='modal-footer'></div>",
            closeButton: "<button type='button' class='bootbox-close-button close' data-dismiss='modal' aria-hidden='true'>&times;</button>",
            form: "<form class='bootbox-form'></form>",
            inputs: {
                text: "<input class='bootbox-input bootbox-input-text form-control' autocomplete=off type=text />",
                textarea: "<textarea class='bootbox-input bootbox-input-textarea form-control'></textarea>",
                email: "<input class='bootbox-input bootbox-input-email form-control' autocomplete='off' type='email' />",
                select: "<select class='bootbox-input bootbox-input-select form-control'></select>",
                checkbox: "<div class='checkbox'><label><input class='bootbox-input bootbox-input-checkbox' type='checkbox' /></label></div>",
                date: "<input class='bootbox-input bootbox-input-date form-control' autocomplete=off type='date' />",
                time: "<input class='bootbox-input bootbox-input-time form-control' autocomplete=off type='time' />",
                number: "<input class='bootbox-input bootbox-input-number form-control' autocomplete=off type='number' />",
                password: "<input class='bootbox-input bootbox-input-password form-control' autocomplete='off' type='password' />"
            }
        },
        o = {
            locale: "en",
            backdrop: "static",
            animate: !0,
            className: null,
            closeButton: !0,
            show: !0,
            container: "body"
        },
        p = {};
    p.alert = function() {
        var a;
        if (a = k("alert", ["ok"], ["message", "callback"], arguments), a.callback && !b.isFunction(a.callback))
            throw new Error("alert requires callback property to be a function when provided");
        return a.buttons.ok.callback = a.onEscape = function() {
            return b.isFunction(a.callback) ? a.callback.call(this) : !0
        }, p.dialog(a)
    }, p.confirm = function() {
        var a;
        if (a = k("confirm", ["cancel", "confirm"], ["message", "callback"], arguments), a.buttons.cancel.callback = a.onEscape = function() {
            return a.callback.call(this, !1)
        }, a.buttons.confirm.callback = function() {
            return a.callback.call(this, !0)
        }, !b.isFunction(a.callback))
            throw new Error("confirm requires a callback");
        return p.dialog(a)
    }, p.prompt = function() {
        var a,
            d,
            e,
            f,
            h,
            i,
            k;
        if (f = b(n.form), d = {
            className: "bootbox-prompt",
            buttons: l("cancel", "confirm"),
            value: "",
            inputType: "text"
        }, a = m(j(d, arguments, ["title", "callback"]), ["cancel", "confirm"]), i = a.show === c ? !0 : a.show, a.message = f, a.buttons.cancel.callback = a.onEscape = function() {
            return a.callback.call(this, null)
        }, a.buttons.confirm.callback = function() {
            var c;
            switch (a.inputType) {
            case "text":
            case "textarea":
            case "email":
            case "select":
            case "date":
            case "time":
            case "number":
            case "password":
                c = h.val();
                break;
            case "checkbox":
                var d = h.find("input:checked");
                c = [], g(d, function(a, d) {
                    c.push(b(d).val())
                })
            }
            return a.callback.call(this, c)
        }, a.show = !1, !a.title)
            throw new Error("prompt requires a title");
        if (!b.isFunction(a.callback))
            throw new Error("prompt requires a callback");
        if (!n.inputs[a.inputType])
            throw new Error("invalid prompt type");
        switch (h = b(n.inputs[a.inputType]), a.inputType) {
        case "text":
        case "textarea":
        case "email":
        case "date":
        case "time":
        case "number":
        case "password":
            h.val(a.value);
            break;
        case "select":
            var o = {};
            if (k = a.inputOptions || [], !b.isArray(k))
                throw new Error("Please pass an array of input options");
            if (!k.length)
                throw new Error("prompt with select requires options");
            g(k, function(a, d) {
                var e = h;
                if (d.value === c || d.text === c)
                    throw new Error("given options in wrong format");
                d.group && (o[d.group] || (o[d.group] = b("<optgroup/>").attr("label", d.group)), e = o[d.group]), e.append("<option value='" + d.value + "'>" + d.text + "</option>")
            }), g(o, function(a, b) {
                h.append(b)
            }), h.val(a.value);
            break;
        case "checkbox":
            var q = b.isArray(a.value) ? a.value : [a.value];
            if (k = a.inputOptions || [], !k.length)
                throw new Error("prompt with checkbox requires options");
            if (!k[0].value || !k[0].text)
                throw new Error("given options in wrong format");
            h = b("<div/>"), g(k, function(c, d) {
                var e = b(n.inputs[a.inputType]);
                e.find("input").attr("value", d.value), e.find("label").append(d.text), g(q, function(a, b) {
                    b === d.value && e.find("input").prop("checked", !0)
                }), h.append(e)
            })
        }
        return a.placeholder && h.attr("placeholder", a.placeholder), a.pattern && h.attr("pattern", a.pattern), a.maxlength && h.attr("maxlength", a.maxlength), f.append(h), f.on("submit", function(a) {
            a.preventDefault(), a.stopPropagation(), e.find(".btn-primary").click()
        }), e = p.dialog(a), e.off("shown.bs.modal"), e.on("shown.bs.modal", function() {
            h.focus()
        }), i === !0 && e.modal("show"), e
    }, p.dialog = function(a) {
        a = h(a);
        var d = b(n.dialog),
            f = d.find(".modal-dialog"),
            i = d.find(".modal-body"),
            j = a.buttons,
            k = "",
            l = {
                onEscape: a.onEscape
            };
        if (b.fn.modal === c)
            throw new Error("$.fn.modal is not defined; please double check you have included the Bootstrap JavaScript library. See http://getbootstrap.com/javascript/ for more details.");
        if (g(j, function(a, b) {
            k += "<button data-bb-handler='" + a + "' type='button' class='btn " + b.className + "'>" + b.label + "</button>", l[a] = b.callback
        }), i.find(".bootbox-body").html(a.message), a.animate === !0 && d.addClass("fade"), a.className && d.addClass(a.className), "large" === a.size ? f.addClass("modal-lg") : "small" === a.size && f.addClass("modal-sm"), a.title && i.before(n.header), a.closeButton) {
            var m = b(n.closeButton);
            a.title ? d.find(".modal-header").prepend(m) : m.css("margin-top", "-10px").prependTo(i)
        }
        return a.title && d.find(".modal-title").html(a.title), k.length && (i.after(n.footer), d.find(".modal-footer").html(k)), d.on("hidden.bs.modal", function(a) {
            a.target === this && d.remove()
        }), d.on("shown.bs.modal", function() {
            d.find(".btn-primary:first").focus()
        }), "static" !== a.backdrop && d.on("click.dismiss.bs.modal", function(a) {
            d.children(".modal-backdrop").length && (a.currentTarget = d.children(".modal-backdrop").get(0)), a.target === a.currentTarget && d.trigger("escape.close.bb")
        }), d.on("escape.close.bb", function(a) {
            l.onEscape && e(a, d, l.onEscape)
        }), d.on("click", ".modal-footer button", function(a) {
            var c = b(this).data("bb-handler");
            e(a, d, l[c])
        }), d.on("click", ".bootbox-close-button", function(a) {
            e(a, d, l.onEscape)
        }), d.on("keyup", function(a) {
            27 === a.which && d.trigger("escape.close.bb")
        }), b(a.container).append(d), d.modal({
            backdrop: a.backdrop ? "static" : !1,
            keyboard: !1,
            show: !1
        }), a.show && d.modal("show"), d
    }, p.setDefaults = function() {
        var a = {};
        2 === arguments.length ? a[arguments[0]] = arguments[1] : a = arguments[0], b.extend(o, a)
    }, p.hideAll = function() {
        return b(".bootbox").modal("hide"), p
    };
    var q = {
        bg_BG: {
            OK: "??",
            CANCEL: "?????",
            CONFIRM: "????????????"
        },
        br: {
            OK: "OK",
            CANCEL: "Cancelar",
            CONFIRM: "Sim"
        },
        cs: {
            OK: "OK",
            CANCEL: "Zruit",
            CONFIRM: "Potvrdit"
        },
        da: {
            OK: "OK",
            CANCEL: "Annuller",
            CONFIRM: "Accepter"
        },
        de: {
            OK: "OK",
            CANCEL: "Abbrechen",
            CONFIRM: "Akzeptieren"
        },
        el: {
            OK: "??t??e?",
            CANCEL: "?????s?",
            CONFIRM: "?p?ßeßa??s?"
        },
        en: {
            OK: "OK",
            CANCEL: "Cancel",
            CONFIRM: "OK"
        },
        es: {
            OK: "OK",
            CANCEL: "Cancelar",
            CONFIRM: "Aceptar"
        },
        et: {
            OK: "OK",
            CANCEL: "Katkesta",
            CONFIRM: "OK"
        },
        fa: {
            OK: "????",
            CANCEL: "???",
            CONFIRM: "?????"
        },
        fi: {
            OK: "OK",
            CANCEL: "Peruuta",
            CONFIRM: "OK"
        },
        fr: {
            OK: "OK",
            CANCEL: "Annuler",
            CONFIRM: "D'accord"
        },
        he: {
            OK: "?????",
            CANCEL: "?????",
            CONFIRM: "?????"
        },
        hu: {
            OK: "OK",
            CANCEL: "Mégsem",
            CONFIRM: "Megerosít"
        },
        hr: {
            OK: "OK",
            CANCEL: "Odustani",
            CONFIRM: "Potvrdi"
        },
        id: {
            OK: "OK",
            CANCEL: "Batal",
            CONFIRM: "OK"
        },
        it: {
            OK: "OK",
            CANCEL: "Annulla",
            CONFIRM: "Conferma"
        },
        ja: {
            OK: "OK",
            CANCEL: "?????",
            CONFIRM: "??"
        },
        lt: {
            OK: "Gerai",
            CANCEL: "Ataukti",
            CONFIRM: "Patvirtinti"
        },
        lv: {
            OK: "Labi",
            CANCEL: "Atcelt",
            CONFIRM: "Apstiprinat"
        },
        nl: {
            OK: "OK",
            CANCEL: "Annuleren",
            CONFIRM: "Accepteren"
        },
        no: {
            OK: "OK",
            CANCEL: "Avbryt",
            CONFIRM: "OK"
        },
        pl: {
            OK: "OK",
            CANCEL: "Anuluj",
            CONFIRM: "Potwierdz"
        },
        pt: {
            OK: "OK",
            CANCEL: "Cancelar",
            CONFIRM: "Confirmar"
        },
        ru: {
            OK: "OK",
            CANCEL: "??????",
            CONFIRM: "?????????"
        },
        sq: {
            OK: "OK",
            CANCEL: "Anulo",
            CONFIRM: "Prano"
        },
        sv: {
            OK: "OK",
            CANCEL: "Avbryt",
            CONFIRM: "OK"
        },
        th: {
            OK: "????",
            CANCEL: "??????",
            CONFIRM: "??????"
        },
        tr: {
            OK: "Tamam",
            CANCEL: "Iptal",
            CONFIRM: "Onayla"
        },
        zh_CN: {
            OK: "OK",
            CANCEL: "??",
            CONFIRM: "??"
        },
        zh_TW: {
            OK: "OK",
            CANCEL: "??",
            CONFIRM: "??"
        }
    };
    return p.addLocale = function(a, c) {
        return b.each(["OK", "CANCEL", "CONFIRM"], function(a, b) {
            if (!c[b])
                throw new Error("Please supply a translation for '" + b + "'")
        }), q[a] = {
            OK: c.OK,
            CANCEL: c.CANCEL,
            CONFIRM: c.CONFIRM
        }, p
    }, p.removeLocale = function(a) {
        return delete q[a], p
    }, p.setLocale = function(a) {
        return p.setDefaults("locale", a)
    }, p.init = function(c) {
        return a(c || b)
    }, p
});
/*!
 * Datepicker for Bootstrap v1.6.4 (https://github.com/eternicode/bootstrap-datepicker)
 *
 * Copyright 2012 Stefan Petre
 * Improvements by Andrew Rowls
 * Licensed under the Apache License v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 */
!function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery)
}(function(a, b) {
    function c() {
        return new Date(Date.UTC.apply(Date, arguments))
    }
    function d() {
        var a = new Date;
        return c(a.getFullYear(), a.getMonth(), a.getDate())
    }
    function e(a, b) {
        return a.getUTCFullYear() === b.getUTCFullYear() && a.getUTCMonth() === b.getUTCMonth() && a.getUTCDate() === b.getUTCDate()
    }
    function f(a) {
        return function() {
            return this[a].apply(this, arguments)
        }
    }
    function g(a) {
        return a && !isNaN(a.getTime())
    }
    function h(b, c) {
        function d(a, b) {
            return b.toLowerCase()
        }
        var e,
            f = a(b).data(),
            g = {},
            h = new RegExp("^" + c.toLowerCase() + "([A-Z])");
        c = new RegExp("^" + c.toLowerCase());
        for (var i in f)
            c.test(i) && (e = i.replace(h, d), g[e] = f[i]);
        return g
    }
    function i(b) {
        var c = {};
        if (q[b] || (b = b.split("-")[0], q[b])) {
            var d = q[b];
            return a.each(p, function(a, b) {
                b in d && (c[b] = d[b])
            }), c
        }
    }
    var j = function() {
            var b = {
                get: function(a) {
                    return this.slice(a)[0]
                },
                contains: function(a) {
                    for (var b = a && a.valueOf(), c = 0, d = this.length; d > c; c++)
                        if (this[c].valueOf() === b)
                            return c;
                    return -1
                },
                remove: function(a) {
                    this.splice(a, 1)
                },
                replace: function(b) {
                    b && (a.isArray(b) || (b = [b]), this.clear(), this.push.apply(this, b))
                },
                clear: function() {
                    this.length = 0
                },
                copy: function() {
                    var a = new j;
                    return a.replace(this), a
                }
            };
            return function() {
                var c = [];
                return c.push.apply(c, arguments), a.extend(c, b), c
            }
        }(),
        k = function(b, c) {
            a(b).data("datepicker", this), this._process_options(c), this.dates = new j, this.viewDate = this.o.defaultViewDate, this.focusDate = null, this.element = a(b), this.isInput = this.element.is("input"), this.inputField = this.isInput ? this.element : this.element.find("input"), this.component = this.element.hasClass("date") ? this.element.find(".add-on, .input-group-addon, .btn") : !1, this.hasInput = this.component && this.inputField.length, this.component && 0 === this.component.length && (this.component = !1), this.isInline = !this.component && this.element.is("div"), this.picker = a(r.template), this._check_template(this.o.templates.leftArrow) && this.picker.find(".prev").html(this.o.templates.leftArrow), this._check_template(this.o.templates.rightArrow) && this.picker.find(".next").html(this.o.templates.rightArrow), this._buildEvents(), this._attachEvents(), this.isInline ? this.picker.addClass("datepicker-inline").appendTo(this.element) : this.picker.addClass("datepicker-dropdown dropdown-menu"), this.o.rtl && this.picker.addClass("datepicker-rtl"), this.viewMode = this.o.startView, this.o.calendarWeeks && this.picker.find("thead .datepicker-title, tfoot .today, tfoot .clear").attr("colspan", function(a, b) {
                return parseInt(b) + 1
            }), this._allow_update = !1, this.setStartDate(this._o.startDate), this.setEndDate(this._o.endDate), this.setDaysOfWeekDisabled(this.o.daysOfWeekDisabled), this.setDaysOfWeekHighlighted(this.o.daysOfWeekHighlighted), this.setDatesDisabled(this.o.datesDisabled), this.fillDow(), this.fillMonths(), this._allow_update = !0, this.update(), this.showMode(), this.isInline && this.show()
        };
    k.prototype = {
        constructor: k,
        _resolveViewName: function(a, c) {
            return 0 === a || "days" === a || "month" === a ? 0 : 1 === a || "months" === a || "year" === a ? 1 : 2 === a || "years" === a || "decade" === a ? 2 : 3 === a || "decades" === a || "century" === a ? 3 : 4 === a || "centuries" === a || "millennium" === a ? 4 : c === b ? !1 : c
        },
        _check_template: function(c) {
            try {
                if (c === b || "" === c)
                    return !1;
                if ((c.match(/[<>]/g) || []).length <= 0)
                    return !0;
                var d = a(c);
                return d.length > 0
            } catch (e) {
                return !1
            }
        },
        _process_options: function(b) {
            this._o = a.extend({}, this._o, b);
            var e = this.o = a.extend({}, this._o),
                f = e.language;
            q[f] || (f = f.split("-")[0], q[f] || (f = o.language)), e.language = f, e.startView = this._resolveViewName(e.startView, 0), e.minViewMode = this._resolveViewName(e.minViewMode, 0), e.maxViewMode = this._resolveViewName(e.maxViewMode, 4), e.startView = Math.min(e.startView, e.maxViewMode), e.startView = Math.max(e.startView, e.minViewMode), e.multidate !== !0 && (e.multidate = Number(e.multidate) || !1, e.multidate !== !1 && (e.multidate = Math.max(0, e.multidate))), e.multidateSeparator = String(e.multidateSeparator), e.weekStart %= 7, e.weekEnd = (e.weekStart + 6) % 7;
            var g = r.parseFormat(e.format);
            e.startDate !== -(1 / 0) && (e.startDate ? e.startDate instanceof Date ? e.startDate = this._local_to_utc(this._zero_time(e.startDate)) : e.startDate = r.parseDate(e.startDate, g, e.language, e.assumeNearbyYear) : e.startDate = -(1 / 0)), e.endDate !== 1 / 0 && (e.endDate ? e.endDate instanceof Date ? e.endDate = this._local_to_utc(this._zero_time(e.endDate)) : e.endDate = r.parseDate(e.endDate, g, e.language, e.assumeNearbyYear) : e.endDate = 1 / 0), e.daysOfWeekDisabled = e.daysOfWeekDisabled || [], a.isArray(e.daysOfWeekDisabled) || (e.daysOfWeekDisabled = e.daysOfWeekDisabled.split(/[,\s]*/)), e.daysOfWeekDisabled = a.map(e.daysOfWeekDisabled, function(a) {
                return parseInt(a, 10)
            }), e.daysOfWeekHighlighted = e.daysOfWeekHighlighted || [], a.isArray(e.daysOfWeekHighlighted) || (e.daysOfWeekHighlighted = e.daysOfWeekHighlighted.split(/[,\s]*/)), e.daysOfWeekHighlighted = a.map(e.daysOfWeekHighlighted, function(a) {
                return parseInt(a, 10)
            }), e.datesDisabled = e.datesDisabled || [], a.isArray(e.datesDisabled) || (e.datesDisabled = [e.datesDisabled]), e.datesDisabled = a.map(e.datesDisabled, function(a) {
                return r.parseDate(a, g, e.language, e.assumeNearbyYear)
            });
            var h = String(e.orientation).toLowerCase().split(/\s+/g),
                i = e.orientation.toLowerCase();
            if (h = a.grep(h, function(a) {
                return /^auto|left|right|top|bottom$/.test(a)
            }), e.orientation = {
                x: "auto",
                y: "auto"
            }, i && "auto" !== i)
                if (1 === h.length)
                    switch (h[0]) {
                    case "top":
                    case "bottom":
                        e.orientation.y = h[0];
                        break;
                    case "left":
                    case "right":
                        e.orientation.x = h[0]
                    }
                else
                    i = a.grep(h, function(a) {
                        return /^left|right$/.test(a)
                    }), e.orientation.x = i[0] || "auto", i = a.grep(h, function(a) {
                        return /^top|bottom$/.test(a)
                    }), e.orientation.y = i[0] || "auto";
            else
                ;
            if (e.defaultViewDate) {
                var j = e.defaultViewDate.year || (new Date).getFullYear(),
                    k = e.defaultViewDate.month || 0,
                    l = e.defaultViewDate.day || 1;
                e.defaultViewDate = c(j, k, l)
            } else
                e.defaultViewDate = d()
        },
        _events: [],
        _secondaryEvents: [],
        _applyEvents: function(a) {
            for (var c, d, e, f = 0; f < a.length; f++)
                c = a[f][0], 2 === a[f].length ? (d = b, e = a[f][1]) : 3 === a[f].length && (d = a[f][1], e = a[f][2]), c.on(e, d)
        },
        _unapplyEvents: function(a) {
            for (var c, d, e, f = 0; f < a.length; f++)
                c = a[f][0], 2 === a[f].length ? (e = b, d = a[f][1]) : 3 === a[f].length && (e = a[f][1], d = a[f][2]), c.off(d, e)
        },
        _buildEvents: function() {
            var b = {
                keyup: a.proxy(function(b) {
                    -1 === a.inArray(b.keyCode, [27, 37, 39, 38, 40, 32, 13, 9]) && this.update()
                }, this),
                keydown: a.proxy(this.keydown, this),
                paste: a.proxy(this.paste, this)
            };
            this.o.showOnFocus === !0 && (b.focus = a.proxy(this.show, this)), this.isInput ? this._events = [[this.element, b]] : this.component && this.hasInput ? this._events = [[this.inputField, b], [this.component, {
                click: a.proxy(this.show, this)
            }]] : this._events = [[this.element, {
                click: a.proxy(this.show, this),
                keydown: a.proxy(this.keydown, this)
            }]], this._events.push([this.element, "*", {
                blur: a.proxy(function(a) {
                    this._focused_from = a.target
                }, this)
            }], [this.element, {
                blur: a.proxy(function(a) {
                    this._focused_from = a.target
                }, this)
            }]), this.o.immediateUpdates && this._events.push([this.element, {
                "changeYear changeMonth": a.proxy(function(a) {
                    this.update(a.date)
                }, this)
            }]), this._secondaryEvents = [[this.picker, {
                click: a.proxy(this.click, this)
            }], [a(window), {
                resize: a.proxy(this.place, this)
            }], [a(document), {
                mousedown: a.proxy(function(a) {
                    this.element.is(a.target) || this.element.find(a.target).length || this.picker.is(a.target) || this.picker.find(a.target).length || this.isInline || this.hide()
                }, this)
            }]]
        },
        _attachEvents: function() {
            this._detachEvents(), this._applyEvents(this._events)
        },
        _detachEvents: function() {
            this._unapplyEvents(this._events)
        },
        _attachSecondaryEvents: function() {
            this._detachSecondaryEvents(), this._applyEvents(this._secondaryEvents)
        },
        _detachSecondaryEvents: function() {
            this._unapplyEvents(this._secondaryEvents)
        },
        _trigger: function(b, c) {
            var d = c || this.dates.get(-1),
                e = this._utc_to_local(d);
            this.element.trigger({
                type: b,
                date: e,
                dates: a.map(this.dates, this._utc_to_local),
                format: a.proxy(function(a, b) {
                    0 === arguments.length ? (a = this.dates.length - 1, b = this.o.format) : "string" == typeof a && (b = a, a = this.dates.length - 1), b = b || this.o.format;
                    var c = this.dates.get(a);
                    return r.formatDate(c, b, this.o.language)
                }, this)
            })
        },
        show: function() {
            return this.inputField.prop("disabled") || this.inputField.prop("readonly") && this.o.enableOnReadonly === !1 ? void 0 : (this.isInline || this.picker.appendTo(this.o.container), this.place(), this.picker.show(), this._attachSecondaryEvents(), this._trigger("show"), (window.navigator.msMaxTouchPoints || "ontouchstart" in document) && this.o.disableTouchKeyboard && a(this.element).blur(), this)
        },
        hide: function() {
            return this.isInline || !this.picker.is(":visible") ? this : (this.focusDate = null, this.picker.hide().detach(), this._detachSecondaryEvents(), this.viewMode = this.o.startView, this.showMode(), this.o.forceParse && this.inputField.val() && this.setValue(), this._trigger("hide"), this)
        },
        destroy: function() {
            return this.hide(), this._detachEvents(), this._detachSecondaryEvents(), this.picker.remove(), delete this.element.data().datepicker, this.isInput || delete this.element.data().date, this
        },
        paste: function(b) {
            var c;
            if (b.originalEvent.clipboardData && b.originalEvent.clipboardData.types && -1 !== a.inArray("text/plain", b.originalEvent.clipboardData.types))
                c = b.originalEvent.clipboardData.getData("text/plain");
            else {
                if (!window.clipboardData)
                    return;
                c = window.clipboardData.getData("Text")
            }
            this.setDate(c), this.update(), b.preventDefault()
        },
        _utc_to_local: function(a) {
            return a && new Date(a.getTime() + 6e4 * a.getTimezoneOffset())
        },
        _local_to_utc: function(a) {
            return a && new Date(a.getTime() - 6e4 * a.getTimezoneOffset())
        },
        _zero_time: function(a) {
            return a && new Date(a.getFullYear(), a.getMonth(), a.getDate())
        },
        _zero_utc_time: function(a) {
            return a && new Date(Date.UTC(a.getUTCFullYear(), a.getUTCMonth(), a.getUTCDate()))
        },
        getDates: function() {
            return a.map(this.dates, this._utc_to_local)
        },
        getUTCDates: function() {
            return a.map(this.dates, function(a) {
                return new Date(a)
            })
        },
        getDate: function() {
            return this._utc_to_local(this.getUTCDate())
        },
        getUTCDate: function() {
            var a = this.dates.get(-1);
            return "undefined" != typeof a ? new Date(a) : null
        },
        clearDates: function() {
            this.inputField && this.inputField.val(""), this.update(), this._trigger("changeDate"), this.o.autoclose && this.hide()
        },
        setDates: function() {
            var b = a.isArray(arguments[0]) ? arguments[0] : arguments;
            return this.update.apply(this, b), this._trigger("changeDate"), this.setValue(), this
        },
        setUTCDates: function() {
            var b = a.isArray(arguments[0]) ? arguments[0] : arguments;
            return this.update.apply(this, a.map(b, this._utc_to_local)), this._trigger("changeDate"), this.setValue(), this
        },
        setDate: f("setDates"),
        setUTCDate: f("setUTCDates"),
        remove: f("destroy"),
        setValue: function() {
            var a = this.getFormattedDate();
            return this.inputField.val(a), this
        },
        getFormattedDate: function(c) {
            c === b && (c = this.o.format);
            var d = this.o.language;
            return a.map(this.dates, function(a) {
                return r.formatDate(a, c, d)
            }).join(this.o.multidateSeparator)
        },
        getStartDate: function() {
            return this.o.startDate
        },
        setStartDate: function(a) {
            return this._process_options({
                startDate: a
            }), this.update(), this.updateNavArrows(), this
        },
        getEndDate: function() {
            return this.o.endDate
        },
        setEndDate: function(a) {
            return this._process_options({
                endDate: a
            }), this.update(), this.updateNavArrows(), this
        },
        setDaysOfWeekDisabled: function(a) {
            return this._process_options({
                daysOfWeekDisabled: a
            }), this.update(), this.updateNavArrows(), this
        },
        setDaysOfWeekHighlighted: function(a) {
            return this._process_options({
                daysOfWeekHighlighted: a
            }), this.update(), this
        },
        setDatesDisabled: function(a) {
            this._process_options({
                datesDisabled: a
            }), this.update(), this.updateNavArrows()
        },
        place: function() {
            if (this.isInline)
                return this;
            var b = this.picker.outerWidth(),
                c = this.picker.outerHeight(),
                d = 10,
                e = a(this.o.container),
                f = e.width(),
                g = "body" === this.o.container ? a(document).scrollTop() : e.scrollTop(),
                h = e.offset(),
                i = [];
            this.element.parents().each(function() {
                var b = a(this).css("z-index");
                "auto" !== b && 0 !== b && i.push(parseInt(b))
            });
            var j = Math.max.apply(Math, i) + this.o.zIndexOffset,
                k = this.component ? this.component.parent().offset() : this.element.offset(),
                l = this.component ? this.component.outerHeight(!0) : this.element.outerHeight(!1),
                m = this.component ? this.component.outerWidth(!0) : this.element.outerWidth(!1),
                n = k.left - h.left,
                o = k.top - h.top;
            "body" !== this.o.container && (o += g), this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"), "auto" !== this.o.orientation.x ? (this.picker.addClass("datepicker-orient-" + this.o.orientation.x), "right" === this.o.orientation.x && (n -= b - m)) : k.left < 0 ? (this.picker.addClass("datepicker-orient-left"), n -= k.left - d) : n + b > f ? (this.picker.addClass("datepicker-orient-right"), n += m - b) : this.picker.addClass("datepicker-orient-left");
            var p,
                q = this.o.orientation.y;
            if ("auto" === q && (p = -g + o - c, q = 0 > p ? "bottom" : "top"), this.picker.addClass("datepicker-orient-" + q), "top" === q ? o -= c + parseInt(this.picker.css("padding-top")) : o += l, this.o.rtl) {
                var r = f - (n + m);
                this.picker.css({
                    top: o,
                    right: r,
                    zIndex: j
                })
            } else
                this.picker.css({
                    top: o,
                    left: n,
                    zIndex: j
                });
            return this
        },
        _allow_update: !0,
        update: function() {
            if (!this._allow_update)
                return this;
            var b = this.dates.copy(),
                c = [],
                d = !1;
            return arguments.length ? (a.each(arguments, a.proxy(function(a, b) {
                b instanceof Date && (b = this._local_to_utc(b)), c.push(b)
            }, this)), d = !0) : (c = this.isInput ? this.element.val() : this.element.data("date") || this.inputField.val(), c = c && this.o.multidate ? c.split(this.o.multidateSeparator) : [c], delete this.element.data().date), c = a.map(c, a.proxy(function(a) {
                return r.parseDate(a, this.o.format, this.o.language, this.o.assumeNearbyYear)
            }, this)), c = a.grep(c, a.proxy(function(a) {
                return !this.dateWithinRange(a) || !a
            }, this), !0), this.dates.replace(c), this.dates.length ? this.viewDate = new Date(this.dates.get(-1)) : this.viewDate < this.o.startDate ? this.viewDate = new Date(this.o.startDate) : this.viewDate > this.o.endDate ? this.viewDate = new Date(this.o.endDate) : this.viewDate = this.o.defaultViewDate, d ? this.setValue() : c.length && String(b) !== String(this.dates) && this._trigger("changeDate"), !this.dates.length && b.length && this._trigger("clearDate"), this.fill(), this.element.change(), this
        },
        fillDow: function() {
            var b = this.o.weekStart,
                c = "<tr>";
            for (this.o.calendarWeeks && (this.picker.find(".datepicker-days .datepicker-switch").attr("colspan", function(a, b) {
                return parseInt(b) + 1
            }), c += '<th class="cw">&#160;</th>'); b < this.o.weekStart + 7;)
                c += '<th class="dow', a.inArray(b, this.o.daysOfWeekDisabled) > -1 && (c += " disabled"), c += '">' + q[this.o.language].daysMin[b++ % 7] + "</th>";
            c += "</tr>", this.picker.find(".datepicker-days thead").append(c)
        },
        fillMonths: function() {
            for (var a = this._utc_to_local(this.viewDate), b = "", c = 0; 12 > c;) {
                var d = a && a.getMonth() === c ? " focused" : "";
                b += '<span class="month' + d + '">' + q[this.o.language].monthsShort[c++] + "</span>"
            }
            this.picker.find(".datepicker-months td").html(b)
        },
        setRange: function(b) {
            b && b.length ? this.range = a.map(b, function(a) {
                return a.valueOf()
            }) : delete this.range, this.fill()
        },
        getClassNames: function(b) {
            var c = [],
                d = this.viewDate.getUTCFullYear(),
                e = this.viewDate.getUTCMonth(),
                f = new Date;
            return b.getUTCFullYear() < d || b.getUTCFullYear() === d && b.getUTCMonth() < e ? c.push("old") : (b.getUTCFullYear() > d || b.getUTCFullYear() === d && b.getUTCMonth() > e) && c.push("new"), this.focusDate && b.valueOf() === this.focusDate.valueOf() && c.push("focused"), this.o.todayHighlight && b.getUTCFullYear() === f.getFullYear() && b.getUTCMonth() === f.getMonth() && b.getUTCDate() === f.getDate() && c.push("today"), -1 !== this.dates.contains(b) && c.push("active"), this.dateWithinRange(b) || c.push("disabled"), this.dateIsDisabled(b) && c.push("disabled", "disabled-date"), -1 !== a.inArray(b.getUTCDay(), this.o.daysOfWeekHighlighted) && c.push("highlighted"), this.range && (b > this.range[0] && b < this.range[this.range.length - 1] && c.push("range"), -1 !== a.inArray(b.valueOf(), this.range) && c.push("selected"), b.valueOf() === this.range[0] && c.push("range-start"), b.valueOf() === this.range[this.range.length - 1] && c.push("range-end")), c
        },
        _fill_yearsView: function(c, d, e, f, g, h, i, j) {
            var k,
                l,
                m,
                n,
                o,
                p,
                q,
                r,
                s,
                t,
                u;
            for (k = "", l = this.picker.find(c), m = parseInt(g / e, 10) * e, o = parseInt(h / f, 10) * f, p = parseInt(i / f, 10) * f, n = a.map(this.dates, function(a) {
                return parseInt(a.getUTCFullYear() / f, 10) * f
            }), l.find(".datepicker-switch").text(m + "-" + (m + 9 * f)), q = m - f, r = -1; 11 > r; r += 1)
                s = [d], t = null, -1 === r ? s.push("old") : 10 === r && s.push("new"), -1 !== a.inArray(q, n) && s.push("active"), (o > q || q > p) && s.push("disabled"), q === this.viewDate.getFullYear() && s.push("focused"), j !== a.noop && (u = j(new Date(q, 0, 1)), u === b ? u = {} : "boolean" == typeof u ? u = {
                    enabled: u
                } : "string" == typeof u && (u = {
                    classes: u
                }), u.enabled === !1 && s.push("disabled"), u.classes && (s = s.concat(u.classes.split(/\s+/))), u.tooltip && (t = u.tooltip)), k += '<span class="' + s.join(" ") + '"' + (t ? ' title="' + t + '"' : "") + ">" + q + "</span>", q += f;
            l.find("td").html(k)
        },
        fill: function() {
            var d,
                e,
                f = new Date(this.viewDate),
                g = f.getUTCFullYear(),
                h = f.getUTCMonth(),
                i = this.o.startDate !== -(1 / 0) ? this.o.startDate.getUTCFullYear() : -(1 / 0),
                j = this.o.startDate !== -(1 / 0) ? this.o.startDate.getUTCMonth() : -(1 / 0),
                k = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCFullYear() : 1 / 0,
                l = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCMonth() : 1 / 0,
                m = q[this.o.language].today || q.en.today || "",
                n = q[this.o.language].clear || q.en.clear || "",
                o = q[this.o.language].titleFormat || q.en.titleFormat;
            if (!isNaN(g) && !isNaN(h)) {
                this.picker.find(".datepicker-days .datepicker-switch").text(r.formatDate(f, o, this.o.language)), this.picker.find("tfoot .today").text(m).toggle(this.o.todayBtn !== !1), this.picker.find("tfoot .clear").text(n).toggle(this.o.clearBtn !== !1), this.picker.find("thead .datepicker-title").text(this.o.title).toggle("" !== this.o.title), this.updateNavArrows(), this.fillMonths();
                var p = c(g, h - 1, 28),
                    s = r.getDaysInMonth(p.getUTCFullYear(), p.getUTCMonth());
                p.setUTCDate(s), p.setUTCDate(s - (p.getUTCDay() - this.o.weekStart + 7) % 7);
                var t = new Date(p);
                p.getUTCFullYear() < 100 && t.setUTCFullYear(p.getUTCFullYear()), t.setUTCDate(t.getUTCDate() + 42), t = t.valueOf();
                for (var u, v = []; p.valueOf() < t;) {
                    if (p.getUTCDay() === this.o.weekStart && (v.push("<tr>"), this.o.calendarWeeks)) {
                        var w = new Date(+p + (this.o.weekStart - p.getUTCDay() - 7) % 7 * 864e5),
                            x = new Date(Number(w) + (11 - w.getUTCDay()) % 7 * 864e5),
                            y = new Date(Number(y = c(x.getUTCFullYear(), 0, 1)) + (11 - y.getUTCDay()) % 7 * 864e5),
                            z = (x - y) / 864e5 / 7 + 1;
                        v.push('<td class="cw">' + z + "</td>")
                    }
                    u = this.getClassNames(p), u.push("day"), this.o.beforeShowDay !== a.noop && (e = this.o.beforeShowDay(this._utc_to_local(p)), e === b ? e = {} : "boolean" == typeof e ? e = {
                        enabled: e
                    } : "string" == typeof e && (e = {
                        classes: e
                    }), e.enabled === !1 && u.push("disabled"), e.classes && (u = u.concat(e.classes.split(/\s+/))), e.tooltip && (d = e.tooltip)), u = a.isFunction(a.uniqueSort) ? a.uniqueSort(u) : a.unique(u), v.push('<td class="' + u.join(" ") + '"' + (d ? ' title="' + d + '"' : "") + ">" + p.getUTCDate() + "</td>"), d = null, p.getUTCDay() === this.o.weekEnd && v.push("</tr>"), p.setUTCDate(p.getUTCDate() + 1)
                }
                this.picker.find(".datepicker-days tbody").empty().append(v.join(""));
                var A = q[this.o.language].monthsTitle || q.en.monthsTitle || "Months",
                    B = this.picker.find(".datepicker-months").find(".datepicker-switch").text(this.o.maxViewMode < 2 ? A : g).end().find("span").removeClass("active");
                if (a.each(this.dates, function(a, b) {
                    b.getUTCFullYear() === g && B.eq(b.getUTCMonth()).addClass("active")
                }), (i > g || g > k) && B.addClass("disabled"), g === i && B.slice(0, j).addClass("disabled"), g === k && B.slice(l + 1).addClass("disabled"), this.o.beforeShowMonth !== a.noop) {
                    var C = this;
                    a.each(B, function(c, d) {
                        var e = new Date(g, c, 1),
                            f = C.o.beforeShowMonth(e);
                        f === b ? f = {} : "boolean" == typeof f ? f = {
                            enabled: f
                        } : "string" == typeof f && (f = {
                            classes: f
                        }), f.enabled !== !1 || a(d).hasClass("disabled") || a(d).addClass("disabled"), f.classes && a(d).addClass(f.classes), f.tooltip && a(d).prop("title", f.tooltip)
                    })
                }
                this._fill_yearsView(".datepicker-years", "year", 10, 1, g, i, k, this.o.beforeShowYear), this._fill_yearsView(".datepicker-decades", "decade", 100, 10, g, i, k, this.o.beforeShowDecade), this._fill_yearsView(".datepicker-centuries", "century", 1e3, 100, g, i, k, this.o.beforeShowCentury)
            }
        },
        updateNavArrows: function() {
            if (this._allow_update) {
                var a = new Date(this.viewDate),
                    b = a.getUTCFullYear(),
                    c = a.getUTCMonth();
                switch (this.viewMode) {
                case 0:
                    this.o.startDate !== -(1 / 0) && b <= this.o.startDate.getUTCFullYear() && c <= this.o.startDate.getUTCMonth() ? this.picker.find(".prev").css({
                        visibility: "hidden"
                    }) : this.picker.find(".prev").css({
                        visibility: "visible"
                    }), this.o.endDate !== 1 / 0 && b >= this.o.endDate.getUTCFullYear() && c >= this.o.endDate.getUTCMonth() ? this.picker.find(".next").css({
                        visibility: "hidden"
                    }) : this.picker.find(".next").css({
                        visibility: "visible"
                    });
                    break;
                case 1:
                case 2:
                case 3:
                case 4:
                    this.o.startDate !== -(1 / 0) && b <= this.o.startDate.getUTCFullYear() || this.o.maxViewMode < 2 ? this.picker.find(".prev").css({
                        visibility: "hidden"
                    }) : this.picker.find(".prev").css({
                        visibility: "visible"
                    }), this.o.endDate !== 1 / 0 && b >= this.o.endDate.getUTCFullYear() || this.o.maxViewMode < 2 ? this.picker.find(".next").css({
                        visibility: "hidden"
                    }) : this.picker.find(".next").css({
                        visibility: "visible"
                    })
                }
            }
        },
        click: function(b) {
            b.preventDefault(), b.stopPropagation();
            var e,
                f,
                g,
                h,
                i,
                j,
                k;
            e = a(b.target), e.hasClass("datepicker-switch") && this.showMode(1);
            var l = e.closest(".prev, .next");
            l.length > 0 && (f = r.modes[this.viewMode].navStep * (l.hasClass("prev") ? -1 : 1), 0 === this.viewMode ? (this.viewDate = this.moveMonth(this.viewDate, f), this._trigger("changeMonth", this.viewDate)) : (this.viewDate = this.moveYear(this.viewDate, f), 1 === this.viewMode && this._trigger("changeYear", this.viewDate)), this.fill()), e.hasClass("today") && !e.hasClass("day") && (this.showMode(-2), this._setDate(d(), "linked" === this.o.todayBtn ? null : "view")), e.hasClass("clear") && this.clearDates(), e.hasClass("disabled") || (e.hasClass("day") && (g = parseInt(e.text(), 10) || 1, h = this.viewDate.getUTCFullYear(), i = this.viewDate.getUTCMonth(), e.hasClass("old") && (0 === i ? (i = 11, h -= 1, j = !0, k = !0) : (i -= 1, j = !0)), e.hasClass("new") && (11 === i ? (i = 0, h += 1, j = !0, k = !0) : (i += 1, j = !0)), this._setDate(c(h, i, g)), k && this._trigger("changeYear", this.viewDate), j && this._trigger("changeMonth", this.viewDate)), e.hasClass("month") && (this.viewDate.setUTCDate(1), g = 1, i = e.parent().find("span").index(e), h = this.viewDate.getUTCFullYear(), this.viewDate.setUTCMonth(i), this._trigger("changeMonth", this.viewDate), 1 === this.o.minViewMode ? (this._setDate(c(h, i, g)), this.showMode()) : this.showMode(-1), this.fill()), (e.hasClass("year") || e.hasClass("decade") || e.hasClass("century")) && (this.viewDate.setUTCDate(1), g = 1, i = 0, h = parseInt(e.text(), 10) || 0, this.viewDate.setUTCFullYear(h), e.hasClass("year") && (this._trigger("changeYear", this.viewDate), 2 === this.o.minViewMode && this._setDate(c(h, i, g))), e.hasClass("decade") && (this._trigger("changeDecade", this.viewDate), 3 === this.o.minViewMode && this._setDate(c(h, i, g))), e.hasClass("century") && (this._trigger("changeCentury", this.viewDate), 4 === this.o.minViewMode && this._setDate(c(h, i, g))), this.showMode(-1), this.fill())), this.picker.is(":visible") && this._focused_from && a(this._focused_from).focus(), delete this._focused_from
        },
        _toggle_multidate: function(a) {
            var b = this.dates.contains(a);
            if (a || this.dates.clear(), -1 !== b ? (this.o.multidate === !0 || this.o.multidate > 1 || this.o.toggleActive) && this.dates.remove(b) : this.o.multidate === !1 ? (this.dates.clear(), this.dates.push(a)) : this.dates.push(a), "number" == typeof this.o.multidate)
                for (; this.dates.length > this.o.multidate;)
                    this.dates.remove(0)
        },
        _setDate: function(a, b) {
            b && "date" !== b || this._toggle_multidate(a && new Date(a)), b && "view" !== b || (this.viewDate = a && new Date(a)), this.fill(), this.setValue(), b && "view" === b || this._trigger("changeDate"), this.inputField && this.inputField.change(), !this.o.autoclose || b && "date" !== b || this.hide()
        },
        moveDay: function(a, b) {
            var c = new Date(a);
            return c.setUTCDate(a.getUTCDate() + b), c
        },
        moveWeek: function(a, b) {
            return this.moveDay(a, 7 * b)
        },
        moveMonth: function(a, b) {
            if (!g(a))
                return this.o.defaultViewDate;
            if (!b)
                return a;
            var c,
                d,
                e = new Date(a.valueOf()),
                f = e.getUTCDate(),
                h = e.getUTCMonth(),
                i = Math.abs(b);
            if (b = b > 0 ? 1 : -1, 1 === i)
                d = -1 === b ? function() {
                    return e.getUTCMonth() === h
                } : function() {
                    return e.getUTCMonth() !== c
                }, c = h + b, e.setUTCMonth(c), (0 > c || c > 11) && (c = (c + 12) % 12);
            else {
                for (var j = 0; i > j; j++)
                    e = this.moveMonth(e, b);
                c = e.getUTCMonth(), e.setUTCDate(f), d = function() {
                    return c !== e.getUTCMonth()
                }
            }
            for (; d();)
                e.setUTCDate(--f), e.setUTCMonth(c);
            return e
        },
        moveYear: function(a, b) {
            return this.moveMonth(a, 12 * b)
        },
        moveAvailableDate: function(a, b, c) {
            do {
                if (a = this[c](a, b), !this.dateWithinRange(a))
                    return !1;
                c = "moveDay"
            } while (this.dateIsDisabled(a));
            return a
        },
        weekOfDateIsDisabled: function(b) {
            return -1 !== a.inArray(b.getUTCDay(), this.o.daysOfWeekDisabled)
        },
        dateIsDisabled: function(b) {
            return this.weekOfDateIsDisabled(b) || a.grep(this.o.datesDisabled, function(a) {
                    return e(b, a)
                }).length > 0
        },
        dateWithinRange: function(a) {
            return a >= this.o.startDate && a <= this.o.endDate
        },
        keydown: function(a) {
            if (!this.picker.is(":visible"))
                return void ((40 === a.keyCode || 27 === a.keyCode) && (this.show(), a.stopPropagation()));
            var b,
                c,
                d = !1,
                e = this.focusDate || this.viewDate;
            switch (a.keyCode) {
            case 27:
                this.focusDate ? (this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill()) : this.hide(), a.preventDefault(), a.stopPropagation();
                break;
            case 37:
            case 38:
            case 39:
            case 40:
                if (!this.o.keyboardNavigation || 7 === this.o.daysOfWeekDisabled.length)
                    break;
                b = 37 === a.keyCode || 38 === a.keyCode ? -1 : 1, 0 === this.viewMode ? a.ctrlKey ? (c = this.moveAvailableDate(e, b, "moveYear"), c && this._trigger("changeYear", this.viewDate)) : a.shiftKey ? (c = this.moveAvailableDate(e, b, "moveMonth"), c && this._trigger("changeMonth", this.viewDate)) : 37 === a.keyCode || 39 === a.keyCode ? c = this.moveAvailableDate(e, b, "moveDay") : this.weekOfDateIsDisabled(e) || (c = this.moveAvailableDate(e, b, "moveWeek")) : 1 === this.viewMode ? ((38 === a.keyCode || 40 === a.keyCode) && (b = 4 * b), c = this.moveAvailableDate(e, b, "moveMonth")) : 2 === this.viewMode && ((38 === a.keyCode || 40 === a.keyCode) && (b = 4 * b), c = this.moveAvailableDate(e, b, "moveYear")), c && (this.focusDate = this.viewDate = c, this.setValue(), this.fill(), a.preventDefault());
                break;
            case 13:
                if (!this.o.forceParse)
                    break;
                e = this.focusDate || this.dates.get(-1) || this.viewDate, this.o.keyboardNavigation && (this._toggle_multidate(e), d = !0), this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.setValue(), this.fill(), this.picker.is(":visible") && (a.preventDefault(), a.stopPropagation(), this.o.autoclose && this.hide());
                break;
            case 9:
                this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill(), this.hide()
            }
            d && (this.dates.length ? this._trigger("changeDate") : this._trigger("clearDate"), this.inputField && this.inputField.change())
        },
        showMode: function(a) {
            a && (this.viewMode = Math.max(this.o.minViewMode, Math.min(this.o.maxViewMode, this.viewMode + a))), this.picker.children("div").hide().filter(".datepicker-" + r.modes[this.viewMode].clsName).show(), this.updateNavArrows()
        }
    };
    var l = function(b, c) {
        a(b).data("datepicker", this), this.element = a(b), this.inputs = a.map(c.inputs, function(a) {
            return a.jquery ? a[0] : a
        }), delete c.inputs, n.call(a(this.inputs), c).on("changeDate", a.proxy(this.dateUpdated, this)), this.pickers = a.map(this.inputs, function(b) {
            return a(b).data("datepicker")
        }), this.updateDates()
    };
    l.prototype = {
        updateDates: function() {
            this.dates = a.map(this.pickers, function(a) {
                return a.getUTCDate()
            }), this.updateRanges()
        },
        updateRanges: function() {
            var b = a.map(this.dates, function(a) {
                return a.valueOf()
            });
            a.each(this.pickers, function(a, c) {
                c.setRange(b)
            })
        },
        dateUpdated: function(b) {
            if (!this.updating) {
                this.updating = !0;
                var c = a(b.target).data("datepicker");
                if ("undefined" != typeof c) {
                    var d = c.getUTCDate(),
                        e = a.inArray(b.target, this.inputs),
                        f = e - 1,
                        g = e + 1,
                        h = this.inputs.length;
                    if (-1 !== e) {
                        if (a.each(this.pickers, function(a, b) {
                            b.getUTCDate() || b.setUTCDate(d)
                        }), d < this.dates[f])
                            for (; f >= 0 && d < this.dates[f];)
                                this.pickers[f--].setUTCDate(d);
                        else if (d > this.dates[g])
                            for (; h > g && d > this.dates[g];)
                                this.pickers[g++].setUTCDate(d);
                        this.updateDates(), delete this.updating
                    }
                }
            }
        },
        remove: function() {
            a.map(this.pickers, function(a) {
                a.remove()
            }), delete this.element.data().datepicker
        }
    };
    var m = a.fn.datepicker,
        n = function(c) {
            var d = Array.apply(null, arguments);
            d.shift();
            var e;
            if (this.each(function() {
                var b = a(this),
                    f = b.data("datepicker"),
                    g = "object" == typeof c && c;
                if (!f) {
                    var j = h(this, "date"),
                        m = a.extend({}, o, j, g),
                        n = i(m.language),
                        p = a.extend({}, o, n, j, g);
                    b.hasClass("input-daterange") || p.inputs ? (a.extend(p, {
                        inputs: p.inputs || b.find("input").toArray()
                    }), f = new l(this, p)) : f = new k(this, p), b.data("datepicker", f)
                }
                "string" == typeof c && "function" == typeof f[c] && (e = f[c].apply(f, d))
            }), e === b || e instanceof k || e instanceof l)
                return this;
            if (this.length > 1)
                throw new Error("Using only allowed for the collection of a single element (" + c + " function)");
            return e
        };
    a.fn.datepicker = n;
    var o = a.fn.datepicker.defaults = {
            assumeNearbyYear: !1,
            autoclose: !1,
            beforeShowDay: a.noop,
            beforeShowMonth: a.noop,
            beforeShowYear: a.noop,
            beforeShowDecade: a.noop,
            beforeShowCentury: a.noop,
            calendarWeeks: !1,
            clearBtn: !1,
            toggleActive: !1,
            daysOfWeekDisabled: [],
            daysOfWeekHighlighted: [],
            datesDisabled: [],
            endDate: 1 / 0,
            forceParse: !0,
            format: "mm/dd/yyyy",
            keyboardNavigation: !0,
            language: "en",
            minViewMode: 0,
            maxViewMode: 4,
            multidate: !1,
            multidateSeparator: ",",
            orientation: "auto",
            rtl: !1,
            startDate: -(1 / 0),
            startView: 0,
            todayBtn: !1,
            todayHighlight: !1,
            weekStart: 0,
            disableTouchKeyboard: !1,
            enableOnReadonly: !0,
            showOnFocus: !0,
            zIndexOffset: 10,
            container: "body",
            immediateUpdates: !1,
            title: "",
            templates: {
                leftArrow: "&laquo;",
                rightArrow: "&raquo;"
            }
        },
        p = a.fn.datepicker.locale_opts = ["format", "rtl", "weekStart"];
    a.fn.datepicker.Constructor = k;
    var q = a.fn.datepicker.dates = {
            en: {
                days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                today: "Today",
                clear: "Clear",
                titleFormat: "MM yyyy"
            }
        },
        r = {
            modes: [{
                clsName: "days",
                navFnc: "Month",
                navStep: 1
            }, {
                clsName: "months",
                navFnc: "FullYear",
                navStep: 1
            }, {
                clsName: "years",
                navFnc: "FullYear",
                navStep: 10
            }, {
                clsName: "decades",
                navFnc: "FullDecade",
                navStep: 100
            }, {
                clsName: "centuries",
                navFnc: "FullCentury",
                navStep: 1e3
            }],
            isLeapYear: function(a) {
                return a % 4 === 0 && a % 100 !== 0 || a % 400 === 0
            },
            getDaysInMonth: function(a, b) {
                return [31, r.isLeapYear(a) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][b]
            },
            validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
            nonpunctuation: /[^ -\/:-@\u5e74\u6708\u65e5\[-`{-~\t\n\r]+/g,
            parseFormat: function(a) {
                if ("function" == typeof a.toValue && "function" == typeof a.toDisplay)
                    return a;
                var b = a.replace(this.validParts, "\x00").split("\x00"),
                    c = a.match(this.validParts);
                if (!b || !b.length || !c || 0 === c.length)
                    throw new Error("Invalid date format.");
                return {
                    separators: b,
                    parts: c
                }
            },
            parseDate: function(e, f, g, h) {
                function i(a, b) {
                    return b === !0 && (b = 10), 100 > a && (a += 2e3, a > (new Date).getFullYear() + b && (a -= 100)), a
                }
                function j() {
                    var a = this.slice(0, s[n].length),
                        b = s[n].slice(0, a.length);
                    return a.toLowerCase() === b.toLowerCase()
                }
                if (!e)
                    return b;
                if (e instanceof Date)
                    return e;
                if ("string" == typeof f && (f = r.parseFormat(f)), f.toValue)
                    return f.toValue(e, f, g);
                var l,
                    m,
                    n,
                    o,
                    p = /([\-+]\d+)([dmwy])/,
                    s = e.match(/([\-+]\d+)([dmwy])/g),
                    t = {
                        d: "moveDay",
                        m: "moveMonth",
                        w: "moveWeek",
                        y: "moveYear"
                    },
                    u = {
                        yesterday: "-1d",
                        today: "+0d",
                        tomorrow: "+1d"
                    };
                if (/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(e)) {
                    for (e = new Date, n = 0; n < s.length; n++)
                        l = p.exec(s[n]), m = parseInt(l[1]), o = t[l[2]], e = k.prototype[o](e, m);
                    return c(e.getUTCFullYear(), e.getUTCMonth(), e.getUTCDate())
                }
                if ("undefined" != typeof u[e] && (e = u[e], s = e.match(/([\-+]\d+)([dmwy])/g), /^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(e))) {
                    for (e = new Date, n = 0; n < s.length; n++)
                        l = p.exec(s[n]), m = parseInt(l[1]), o = t[l[2]], e = k.prototype[o](e, m);
                    return c(e.getUTCFullYear(), e.getUTCMonth(), e.getUTCDate())
                }
                s = e && e.match(this.nonpunctuation) || [], e = new Date;
                var v,
                    w,
                    x = {},
                    y = ["yyyy", "yy", "M", "MM", "m", "mm", "d", "dd"],
                    z = {
                        yyyy: function(a, b) {
                            return a.setUTCFullYear(h ? i(b, h) : b)
                        },
                        yy: function(a, b) {
                            return a.setUTCFullYear(h ? i(b, h) : b)
                        },
                        m: function(a, b) {
                            if (isNaN(a))
                                return a;
                            for (b -= 1; 0 > b;)
                                b += 12;
                            for (b %= 12, a.setUTCMonth(b); a.getUTCMonth() !== b;)
                                a.setUTCDate(a.getUTCDate() - 1);
                            return a
                        },
                        d: function(a, b) {
                            return a.setUTCDate(b)
                        }
                    };
                z.M = z.MM = z.mm = z.m, z.dd = z.d, e = d();
                var A = f.parts.slice();
                if (s.length !== A.length && (A = a(A).filter(function(b, c) {
                    return -1 !== a.inArray(c, y)
                }).toArray()), s.length === A.length) {
                    var B;
                    for (n = 0, B = A.length; B > n; n++) {
                        if (v = parseInt(s[n], 10), l = A[n], isNaN(v))
                            switch (l) {
                            case "MM":
                                w = a(q[g].months).filter(j), v = a.inArray(w[0], q[g].months) + 1;
                                break;
                            case "M":
                                w = a(q[g].monthsShort).filter(j), v = a.inArray(w[0], q[g].monthsShort) + 1
                            }
                        x[l] = v
                    }
                    var C,
                        D;
                    for (n = 0; n < y.length; n++)
                        D = y[n], D in x && !isNaN(x[D]) && (C = new Date(e), z[D](C, x[D]), isNaN(C) || (e = C))
                }
                return e
            },
            formatDate: function(b, c, d) {
                if (!b)
                    return "";
                if ("string" == typeof c && (c = r.parseFormat(c)), c.toDisplay)
                    return c.toDisplay(b, c, d);
                var e = {
                    d: b.getUTCDate(),
                    D: q[d].daysShort[b.getUTCDay()],
                    DD: q[d].days[b.getUTCDay()],
                    m: b.getUTCMonth() + 1,
                    M: q[d].monthsShort[b.getUTCMonth()],
                    MM: q[d].months[b.getUTCMonth()],
                    yy: b.getUTCFullYear().toString().substring(2),
                    yyyy: b.getUTCFullYear()
                };
                e.dd = (e.d < 10 ? "0" : "") + e.d, e.mm = (e.m < 10 ? "0" : "") + e.m, b = [];
                for (var f = a.extend([], c.separators), g = 0, h = c.parts.length; h >= g; g++)
                    f.length && b.push(f.shift()), b.push(e[c.parts[g]]);
                return b.join("")
            },
            headTemplate: '<thead><tr><th colspan="7" class="datepicker-title"></th></tr><tr><th class="prev">&laquo;</th><th colspan="5" class="datepicker-switch"></th><th class="next">&raquo;</th></tr></thead>',
            contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>',
            footTemplate: '<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'
        };
    r.template = '<div class="datepicker"><div class="datepicker-days"><table class="table-condensed">' + r.headTemplate + "<tbody></tbody>" + r.footTemplate + '</table></div><div class="datepicker-months"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-years"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-decades"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-centuries"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + "</table></div></div>", a.fn.datepicker.DPGlobal = r, a.fn.datepicker.noConflict = function() {
        return a.fn.datepicker = m, this
    }, a.fn.datepicker.version = "1.6.4", a(document).on("focus.datepicker.data-api click.datepicker.data-api", '[data-provide="datepicker"]', function(b) {
        var c = a(this);
        c.data("datepicker") || (b.preventDefault(), n.call(c, "show"))
    }), a(function() {
        n.call(a('[data-provide="datepicker-inline"]'))
    })
});
!function(a) {
    a.fn.datepicker.dates.de = {
        days: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"],
        daysShort: ["Son", "Mon", "Die", "Mit", "Don", "Fre", "Sam"],
        daysMin: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
        months: ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
        monthsShort: ["Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"],
        today: "Heute",
        monthsTitle: "Monate",
        clear: "Löschen",
        weekStart: 1,
        format: "dd.mm.yyyy"
    }
}(jQuery);
/*!
 * Bootstrap v3.1.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
+function(a) {
    "use strict";
    var b = '[data-dismiss="alert"]',
        c = function(c) {
            a(c).on("click", b, this.close)
        };
    c.prototype.close = function(b) {
        function f() {
            e.trigger("closed.bs.alert").remove()
        }
        var c = a(this),
            d = c.attr("data-target");
        d || (d = c.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, ""));
        var e = a(d);
        b && b.preventDefault(), e.length || (e = c.hasClass("alert") ? c : c.parent()), e.trigger(b = a.Event("close.bs.alert"));
        if (b.isDefaultPrevented())
            return;
        e.removeClass("in"), a.support.transition && e.hasClass("fade") ? e.one(a.support.transition.end, f).emulateTransitionEnd(150) : f()
    };
    var d = a.fn.alert;
    a.fn.alert = function(b) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.alert");
            e || d.data("bs.alert", e = new c(this)), typeof b == "string" && e[b].call(d)
        })
    }, a.fn.alert.Constructor = c, a.fn.alert.noConflict = function() {
        return a.fn.alert = d, this
    }, a(document).on("click.bs.alert.data-api", b, c.prototype.close)
}(jQuery), +function(a) {
    "use strict";
    var b = function(c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.isLoading = !1
    };
    b.DEFAULTS = {
        loadingText: "loading..."
    }, b.prototype.setState = function(b) {
        var c = "disabled",
            d = this.$element,
            e = d.is("input") ? "val" : "html",
            f = d.data();
        b += "Text", f.resetText || d.data("resetText", d[e]()), d[e](f[b] || this.options[b]), setTimeout(a.proxy(function() {
            b == "loadingText" ? (this.isLoading = !0, d.addClass(c).attr(c, c)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c))
        }, this), 0)
    }, b.prototype.toggle = function() {
        var a = !0,
            b = this.$element.closest('[data-toggle="buttons"]');
        if (b.length) {
            var c = this.$element.find("input");
            c.prop("type") == "radio" && (c.prop("checked") && this.$element.hasClass("active") ? a = !1 : b.find(".active").removeClass("active")), a && c.prop("checked", !this.$element.hasClass("active")).trigger("change")
        }
        a && this.$element.toggleClass("active")
    };
    var c = a.fn.button;
    a.fn.button = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.button"),
                f = typeof c == "object" && c;
            e || d.data("bs.button", e = new b(this, f)), c == "toggle" ? e.toggle() : c && e.setState(c)
        })
    }, a.fn.button.Constructor = b, a.fn.button.noConflict = function() {
        return a.fn.button = c, this
    }, a(document).on("click.bs.button.data-api", "[data-toggle^=button]", function(b) {
        var c = a(b.target);
        c.hasClass("btn") || (c = c.closest(".btn")), c.button("toggle"), b.preventDefault()
    })
}(jQuery), +function(a) {
    function e(d) {
        a(b).remove(), a(c).each(function() {
            var b = f(a(this)),
                c = {
                    relatedTarget: this
                };
            if (!b.hasClass("open"))
                return;
            b.trigger(d = a.Event("hide.bs.dropdown", c));
            if (d.isDefaultPrevented())
                return;
            b.removeClass("open").trigger("hidden.bs.dropdown", c)
        })
    }
    function f(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }
    "use strict";
    var b = ".dropdown-backdrop",
        c = "[data-toggle=dropdown]",
        d = function(b) {
            a(b).on("click.bs.dropdown", this.toggle)
        };
    d.prototype.toggle = function(b) {
        var c = a(this);
        if (c.is(".disabled, :disabled"))
            return;
        var d = f(c),
            g = d.hasClass("open");
        e();
        if (!g) {
            "ontouchstart" in document.documentElement && !d.closest(".navbar-nav").length && a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click", e);
            var h = {
                relatedTarget: this
            };
            d.trigger(b = a.Event("show.bs.dropdown", h));
            if (b.isDefaultPrevented())
                return;
            d.toggleClass("open").trigger("shown.bs.dropdown", h), c.focus()
        }
        return !1
    }, d.prototype.keydown = function(b) {
        if (!/(38|40|27)/.test(b.keyCode))
            return;
        var d = a(this);
        b.preventDefault(), b.stopPropagation();
        if (d.is(".disabled, :disabled"))
            return;
        var e = f(d),
            g = e.hasClass("open");
        if (!g || g && b.keyCode == 27)
            return b.which == 27 && e.find(c).focus(), d.click();
        var h = " li:not(.divider):visible a",
            i = e.find("[role=menu]" + h + ", [role=listbox]" + h);
        if (!i.length)
            return;
        var j = i.index(i.filter(":focus"));
        b.keyCode == 38 && j > 0 && j--, b.keyCode == 40 && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).focus()
    };
    var g = a.fn.dropdown;
    a.fn.dropdown = function(b) {
        return this.each(function() {
            var c = a(this),
                e = c.data("bs.dropdown");
            e || c.data("bs.dropdown", e = new d(this)), typeof b == "string" && e[b].call(c)
        })
    }, a.fn.dropdown.Constructor = d, a.fn.dropdown.noConflict = function() {
        return a.fn.dropdown = g, this
    }, a(document).on("click.bs.dropdown.data-api", e).on("click.bs.dropdown.data-api", ".dropdown form", function(a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", c, d.prototype.toggle).on("keydown.bs.dropdown.data-api", c + ", [role=menu], [role=listbox]", d.prototype.keydown)
}(jQuery), +function(a) {
    "use strict";
    var b = function(b, c) {
        this.options = c, this.$element = a(b), this.$backdrop = this.isShown = null, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function() {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    b.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, b.prototype.toggle = function(a) {
        return this[this.isShown ? "hide" : "show"](a)
    }, b.prototype.show = function(b) {
        var c = this,
            d = a.Event("show.bs.modal", {
                relatedTarget: b
            });
        this.$element.trigger(d);
        if (this.isShown || d.isDefaultPrevented())
            return;
        this.isShown = !0, this.escape(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.backdrop(function() {
            var d = a.support.transition && c.$element.hasClass("fade");
            c.$element.parent().length || c.$element.appendTo(document.body), c.$element.show().scrollTop(0), d && c.$element[0].offsetWidth, c.$element.addClass("in").attr("aria-hidden", !1), c.enforceFocus();
            var e = a.Event("shown.bs.modal", {
                relatedTarget: b
            });
            d ? c.$element.find(".modal-dialog").one(a.support.transition.end, function() {
                c.$element.focus().trigger(e)
            }).emulateTransitionEnd(300) : c.$element.focus().trigger(e)
        })
    }, b.prototype.hide = function(b) {
        b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b);
        if (!this.isShown || b.isDefaultPrevented())
            return;
        this.isShown = !1, this.escape(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one(a.support.transition.end, a.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal()
    }, b.prototype.enforceFocus = function() {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function(a) {
            this.$element[0] !== a.target && !this.$element.has(a.target).length && this.$element.focus()
        }, this))
    }, b.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", a.proxy(function(a) {
            a.which == 27 && this.hide()
        }, this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal")
    }, b.prototype.hideModal = function() {
        var a = this;
        this.$element.hide(), this.backdrop(function() {
            a.removeBackdrop(), a.$element.trigger("hidden.bs.modal")
        })
    }, b.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, b.prototype.backdrop = function(b) {
        var c = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var d = a.support.transition && c;
            this.$backdrop = a('<div class="modal-backdrop ' + c + '" />').appendTo(document.body), this.$element.on("click.dismiss.bs.modal", a.proxy(function(a) {
                if (a.target !== a.currentTarget)
                    return;
                this.options.backdrop == "static" ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this)
            }, this)), d && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in");
            if (!b)
                return;
            d ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b()
        } else
            !this.isShown && this.$backdrop ? (this.$backdrop.removeClass("in"), a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b()) : b && b()
    };
    var c = a.fn.modal;
    a.fn.modal = function(c, d) {
        return this.each(function() {
            var e = a(this),
                f = e.data("bs.modal"),
                g = a.extend({}, b.DEFAULTS, e.data(), typeof c == "object" && c);
            f || e.data("bs.modal", f = new b(this, g)), typeof c == "string" ? f[c](d) : g.show && f.show(d)
        })
    }, a.fn.modal.Constructor = b, a.fn.modal.noConflict = function() {
        return a.fn.modal = c, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(b) {
        var c = a(this),
            d = c.attr("href"),
            e = a(c.attr("data-target") || d && d.replace(/.*(?=#[^\s]+$)/, "")),
            f = e.data("bs.modal") ? "toggle" : a.extend({
                remote: !/#/.test(d) && d
            }, e.data(), c.data());
        c.is("a") && b.preventDefault(), e.modal(f, this).one("hide", function() {
            c.is(":visible") && c.focus()
        })
    }), a(document).on("show.bs.modal", ".modal", function() {
        a(document.body).addClass("modal-open")
    }).on("hidden.bs.modal", ".modal", function() {
        a(document.body).removeClass("modal-open")
    })
}(jQuery), +function(a) {
    "use strict";
    var b = function(a, b) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null, this.init("tooltip", a, b)
    };
    b.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1
    }, b.prototype.init = function(b, c, d) {
        this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d);
        var e = this.options.trigger.split(" ");
        for (var f = e.length; f--;) {
            var g = e[f];
            if (g == "click")
                this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this));
            else if (g != "manual") {
                var h = g == "hover" ? "mouseenter" : "focusin",
                    i = g == "hover" ? "mouseleave" : "focusout";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, b.prototype.getDefaults = function() {
        return b.DEFAULTS
    }, b.prototype.getOptions = function(b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && typeof b.delay == "number" && (b.delay = {
            show: b.delay,
            hide: b.delay
        }), b
    }, b.prototype.getDelegateOptions = function() {
        var b = {},
            c = this.getDefaults();
        return this._options && a.each(this._options, function(a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, b.prototype.enter = function(b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        clearTimeout(c.timeout), c.hoverState = "in";
        if (!c.options.delay || !c.options.delay.show)
            return c.show();
        c.timeout = setTimeout(function() {
            c.hoverState == "in" && c.show()
        }, c.options.delay.show)
    }, b.prototype.leave = function(b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        clearTimeout(c.timeout), c.hoverState = "out";
        if (!c.options.delay || !c.options.delay.hide)
            return c.hide();
        c.timeout = setTimeout(function() {
            c.hoverState == "out" && c.hide()
        }, c.options.delay.hide)
    }, b.prototype.show = function() {
        var b = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(b);
            if (b.isDefaultPrevented())
                return;
            var c = this,
                d = this.tip();
            this.setContent(), this.options.animation && d.addClass("fade");
            var e = typeof this.options.placement == "function" ? this.options.placement.call(this, d[0], this.$element[0]) : this.options.placement,
                f = /\s?auto?\s?/i,
                g = f.test(e);
            g && (e = e.replace(f, "") || "top"), d.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(e), this.options.container ? d.appendTo(this.options.container) : d.insertAfter(this.$element);
            var h = this.getPosition(),
                i = d[0].offsetWidth,
                j = d[0].offsetHeight;
            if (g) {
                var k = this.$element.parent(),
                    l = e,
                    m = document.documentElement.scrollTop || document.body.scrollTop,
                    n = this.options.container == "body" ? window.innerWidth : k.outerWidth(),
                    o = this.options.container == "body" ? window.innerHeight : k.outerHeight(),
                    p = this.options.container == "body" ? 0 : k.offset().left;
                e = e == "bottom" && h.top + h.height + j - m > o ? "top" : e == "top" && h.top - m - j < 0 ? "bottom" : e == "right" && h.right + i > n ? "left" : e == "left" && h.left - i < p ? "right" : e, d.removeClass(l).addClass(e)
            }
            var q = this.getCalculatedOffset(e, h, i, j);
            this.applyPlacement(q, e), this.hoverState = null;
            var r = function() {
                c.$element.trigger("shown.bs." + c.type)
            };
            a.support.transition && this.$tip.hasClass("fade") ? d.one(a.support.transition.end, r).emulateTransitionEnd(150) : r()
        }
    }, b.prototype.applyPlacement = function(b, c) {
        var d,
            e = this.tip(),
            f = e[0].offsetWidth,
            g = e[0].offsetHeight,
            h = parseInt(e.css("margin-top"), 10),
            i = parseInt(e.css("margin-left"), 10);
        isNaN(h) && (h = 0), isNaN(i) && (i = 0), b.top = b.top + h, b.left = b.left + i, a.offset.setOffset(e[0], a.extend({
            using: function(a) {
                e.css({
                    top: Math.round(a.top),
                    left: Math.round(a.left)
                })
            }
        }, b), 0), e.addClass("in");
        var j = e[0].offsetWidth,
            k = e[0].offsetHeight;
        c == "top" && k != g && (d = !0, b.top = b.top + g - k);
        if (/bottom|top/.test(c)) {
            var l = 0;
            b.left < 0 && (l = b.left * -2, b.left = 0, e.offset(b), j = e[0].offsetWidth, k = e[0].offsetHeight), this.replaceArrow(l - f + j, j, "left")
        } else
            this.replaceArrow(k - g, k, "top");
        d && e.offset(b)
    }, b.prototype.replaceArrow = function(a, b, c) {
        this.arrow().css(c, a ? 50 * (1 - a / b) + "%" : "")
    }, b.prototype.setContent = function() {
        var a = this.tip(),
            b = this.getTitle();
        a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, b.prototype.hide = function() {
        function e() {
            b.hoverState != "in" && c.detach(), b.$element.trigger("hidden.bs." + b.type)
        }
        var b = this,
            c = this.tip(),
            d = a.Event("hide.bs." + this.type);
        this.$element.trigger(d);
        if (d.isDefaultPrevented())
            return;
        return c.removeClass("in"), a.support.transition && this.$tip.hasClass("fade") ? c.one(a.support.transition.end, e).emulateTransitionEnd(150) : e(), this.hoverState = null, this
    }, b.prototype.fixTitle = function() {
        var a = this.$element;
        (a.attr("title") || typeof a.attr("data-original-title") != "string") && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, b.prototype.hasContent = function() {
        return this.getTitle()
    }, b.prototype.getPosition = function() {
        var b = this.$element[0];
        return a.extend({}, typeof b.getBoundingClientRect == "function" ? b.getBoundingClientRect() : {
            width: b.offsetWidth,
            height: b.offsetHeight
        }, this.$element.offset())
    }, b.prototype.getCalculatedOffset = function(a, b, c, d) {
        return a == "bottom" ? {
            top: b.top + b.height,
            left: b.left + b.width / 2 - c / 2
        } : a == "top" ? {
            top: b.top - d,
            left: b.left + b.width / 2 - c / 2
        } : a == "left" ? {
            top: b.top + b.height / 2 - d / 2,
            left: b.left - c
        } : {
            top: b.top + b.height / 2 - d / 2,
            left: b.left + b.width
        }
    }, b.prototype.getTitle = function() {
        var a,
            b = this.$element,
            c = this.options;
        return a = b.attr("data-original-title") || (typeof c.title == "function" ? c.title.call(b[0]) : c.title), a
    }, b.prototype.tip = function() {
        return this.$tip = this.$tip || a(this.options.template)
    }, b.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, b.prototype.validate = function() {
        this.$element[0].parentNode || (this.hide(), this.$element = null, this.options = null)
    }, b.prototype.enable = function() {
        this.enabled = !0
    }, b.prototype.disable = function() {
        this.enabled = !1
    }, b.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    }, b.prototype.toggle = function(b) {
        var c = b ? a(b.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type) : this;
        c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, b.prototype.destroy = function() {
        clearTimeout(this.timeout), this.hide().$element.off("." + this.type).removeData("bs." + this.type)
    };
    var c = a.fn.tooltip;
    a.fn.tooltip = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.tooltip"),
                f = typeof c == "object" && c;
            if (!e && c == "destroy")
                return;
            e || d.data("bs.tooltip", e = new b(this, f)), typeof c == "string" && e[c]()
        })
    }, a.fn.tooltip.Constructor = b, a.fn.tooltip.noConflict = function() {
        return a.fn.tooltip = c, this
    }
}(jQuery), +function(a) {
    "use strict";
    var b = function(a, b) {
        this.init("popover", a, b)
    };
    if (!a.fn.tooltip)
        throw new Error("Popover requires tooltip.js");
    b.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), b.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), b.prototype.constructor = b, b.prototype.getDefaults = function() {
        return b.DEFAULTS
    }, b.prototype.setContent = function() {
        var a = this.tip(),
            b = this.getTitle(),
            c = this.getContent();
        a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content")[this.options.html ? typeof c == "string" ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
    }, b.prototype.hasContent = function() {
        return this.getTitle() || this.getContent()
    }, b.prototype.getContent = function() {
        var a = this.$element,
            b = this.options;
        return a.attr("data-content") || (typeof b.content == "function" ? b.content.call(a[0]) : b.content)
    }, b.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    }, b.prototype.tip = function() {
        return this.$tip || (this.$tip = a(this.options.template)), this.$tip
    };
    var c = a.fn.popover;
    a.fn.popover = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.popover"),
                f = typeof c == "object" && c;
            if (!e && c == "destroy")
                return;
            e || d.data("bs.popover", e = new b(this, f)), typeof c == "string" && e[c]()
        })
    }, a.fn.popover.Constructor = b, a.fn.popover.noConflict = function() {
        return a.fn.popover = c, this
    }
}(jQuery), +function(a) {
    "use strict";
    var b = function(b) {
        this.element = a(b)
    };
    b.prototype.show = function() {
        var b = this.element,
            c = b.closest("ul:not(.dropdown-menu)"),
            d = b.data("target");
        d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, ""));
        if (b.parent("li").hasClass("active"))
            return;
        var e = c.find(".active:last a")[0],
            f = a.Event("show.bs.tab", {
                relatedTarget: e
            });
        b.trigger(f);
        if (f.isDefaultPrevented())
            return;
        var g = a(d);
        this.activate(b.parent("li"), c), this.activate(g, g.parent(), function() {
            b.trigger({
                type: "shown.bs.tab",
                relatedTarget: e
            })
        })
    }, b.prototype.activate = function(b, c, d) {
        function g() {
            e.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"), b.addClass("active"), f ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu") && b.closest("li.dropdown").addClass("active"), d && d()
        }
        var e = c.find("> .active"),
            f = d && a.support.transition && e.hasClass("fade");
        f ? e.one(a.support.transition.end, g).emulateTransitionEnd(150) : g(), e.removeClass("in")
    };
    var c = a.fn.tab;
    a.fn.tab = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.tab");
            e || d.data("bs.tab", e = new b(this)), typeof c == "string" && e[c]()
        })
    }, a.fn.tab.Constructor = b, a.fn.tab.noConflict = function() {
        return a.fn.tab = c, this
    }, a(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function(b) {
        b.preventDefault(), a(this).tab("show")
    })
}(jQuery), +function(a) {
    "use strict";
    var b = function(c, d) {
        this.options = a.extend({}, b.DEFAULTS, d), this.$window = a(window).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(c), this.affixed = this.unpin = this.pinnedOffset = null, this.checkPosition()
    };
    b.RESET = "affix affix-top affix-bottom", b.DEFAULTS = {
        offset: 0
    }, b.prototype.getPinnedOffset = function() {
        if (this.pinnedOffset)
            return this.pinnedOffset;
        this.$element.removeClass(b.RESET).addClass("affix");
        var a = this.$window.scrollTop(),
            c = this.$element.offset();
        return this.pinnedOffset = c.top - a
    }, b.prototype.checkPositionWithEventLoop = function() {
        setTimeout(a.proxy(this.checkPosition, this), 1)
    }, b.prototype.checkPosition = function() {
        if (!this.$element.is(":visible"))
            return;
        var c = a(document).height(),
            d = this.$window.scrollTop(),
            e = this.$element.offset(),
            f = this.options.offset,
            g = f.top,
            h = f.bottom;
        this.affixed == "top" && (e.top += d), typeof f != "object" && (h = g = f), typeof g == "function" && (g = f.top(this.$element)), typeof h == "function" && (h = f.bottom(this.$element));
        var i = this.unpin != null && d + this.unpin <= e.top ? !1 : h != null && e.top + this.$element.height() >= c - h ? "bottom" : g != null && d <= g ? "top" : !1;
        if (this.affixed === i)
            return;
        this.unpin && this.$element.css("top", "");
        var j = "affix" + (i ? "-" + i : ""),
            k = a.Event(j + ".bs.affix");
        this.$element.trigger(k);
        if (k.isDefaultPrevented())
            return;
        this.affixed = i, this.unpin = i == "bottom" ? this.getPinnedOffset() : null, this.$element.removeClass(b.RESET).addClass(j).trigger(a.Event(j.replace("affix", "affixed"))), i == "bottom" && this.$element.offset({
            top: c - h - this.$element.height()
        })
    };
    var c = a.fn.affix;
    a.fn.affix = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.affix"),
                f = typeof c == "object" && c;
            e || d.data("bs.affix", e = new b(this, f)), typeof c == "string" && e[c]()
        })
    }, a.fn.affix.Constructor = b, a.fn.affix.noConflict = function() {
        return a.fn.affix = c, this
    }, a(window).on("load", function() {
        a('[data-spy="affix"]').each(function() {
            var b = a(this),
                c = b.data();
            c.offset = c.offset || {}, c.offsetBottom && (c.offset.bottom = c.offsetBottom), c.offsetTop && (c.offset.top = c.offsetTop), b.affix(c)
        })
    })
}(jQuery), +function(a) {
    "use strict";
    var b = function(c, d) {
        this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.transitioning = null, this.options.parent && (this.$parent = a(this.options.parent)), this.options.toggle && this.toggle()
    };
    b.DEFAULTS = {
        toggle: !0
    }, b.prototype.dimension = function() {
        var a = this.$element.hasClass("width");
        return a ? "width" : "height"
    }, b.prototype.show = function() {
        if (this.transitioning || this.$element.hasClass("in"))
            return;
        var b = a.Event("show.bs.collapse");
        this.$element.trigger(b);
        if (b.isDefaultPrevented())
            return;
        var c = this.$parent && this.$parent.find("> .panel > .in");
        if (c && c.length) {
            var d = c.data("bs.collapse");
            if (d && d.transitioning)
                return;
            c.collapse("hide"), d || c.data("bs.collapse", null)
        }
        var e = this.dimension();
        this.$element.removeClass("collapse").addClass("collapsing")[e](0), this.transitioning = 1;
        var f = function() {
            this.$element.removeClass("collapsing").addClass("collapse in")[e]("auto"), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
        };
        if (!a.support.transition)
            return f.call(this);
        var g = a.camelCase(["scroll", e].join("-"));
        this.$element.one(a.support.transition.end, a.proxy(f, this)).emulateTransitionEnd(350)[e](this.$element[0][g])
    }, b.prototype.hide = function() {
        if (this.transitioning || !this.$element.hasClass("in"))
            return;
        var b = a.Event("hide.bs.collapse");
        this.$element.trigger(b);
        if (b.isDefaultPrevented())
            return;
        var c = this.dimension();
        this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"), this.transitioning = 1;
        var d = function() {
            this.transitioning = 0, this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")
        };
        if (!a.support.transition)
            return d.call(this);
        this.$element[c](0).one(a.support.transition.end, a.proxy(d, this)).emulateTransitionEnd(350)
    }, b.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    };
    var c = a.fn.collapse;
    a.fn.collapse = function(c) {
        return this.each(function() {
            var d = a(this),
                e = d.data("bs.collapse"),
                f = a.extend({}, b.DEFAULTS, d.data(), typeof c == "object" && c);
            !e && f.toggle && c == "show" && (c = !c), e || d.data("bs.collapse", e = new b(this, f)), typeof c == "string" && e[c]()
        })
    }, a.fn.collapse.Constructor = b, a.fn.collapse.noConflict = function() {
        return a.fn.collapse = c, this
    }, a(document).on("click.bs.collapse.data-api", "[data-toggle=collapse]", function(b) {
        var c = a(this),
            d,
            e = c.attr("data-target") || b.preventDefault() || (d = c.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""),
            f = a(e),
            g = f.data("bs.collapse"),
            h = g ? "toggle" : c.data(),
            i = c.attr("data-parent"),
            j = i && a(i);
        if (!g || !g.transitioning)
            j && j.find('[data-toggle=collapse][data-parent="' + i + '"]').not(c).addClass("collapsed"), c[f.hasClass("in") ? "addClass" : "removeClass"]("collapsed");
        f.collapse(h)
    })
}(jQuery), +function(a) {
    function b() {
        var a = document.createElement("bootstrap"),
            b = {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd otransitionend",
                transition: "transitionend"
            };
        for (var c in b)
            if (a.style[c] !== undefined)
                return {
                    end: b[c]
                };
        return !1
    }
    "use strict", a.fn.emulateTransitionEnd = function(b) {
        var c = !1,
            d = this;
        a(this).one(a.support.transition.end, function() {
            c = !0
        });
        var e = function() {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function() {
        a.support.transition = b()
    })
}(jQuery);
(function($) {
    $.log = function() {
        if ('console' in window)
            console.log.apply(null, arguments)
    };
    $.fn.smoothFade = function(speed, callback) {
        if (this.is(":hidden"))
            return this.slideDown(speed).fadeTo(speed, 1, callback);
        else
            return this.fadeTo(speed, 0).slideUp(speed, callback);
    }
    $.fn.softRemove = function(speed) {
        this.fadeTo(speed, 0).slideUp(speed, function() {
            this.remove()
        });
    };
    $.fn.toggleDisabled = function() {
        return this.each(function() {
            this.disabled = !this.disabled;
        });
    };
    $.fn.popup = function(options) {
        var tpl = {
            error: '<div class="alert alert-danger"><h3>Entschuldigung!</h3><span style="padding: 20px 0">Beim Laden der Ressource ist leider ein Fehler aufgetreten.</span></div>',
            error404: '<div class="alert alert-danger"><h3>Seite nicht gefunden!</h3><div style="margin: 20px 0" class="progress progress-striped"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">Inhalt konnten leider nicht geladen werden.</div></div></div>',
            loading: '<div class="alert alert-info"><h3>Bitte warten...</h3><div style="margin: 20px 0" class="progress progress-striped active"> <div class="progress-bar progress-bar-info"   role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">Inhalt wird geladen ...</div></div></div>',
        }
        var common_settings = {
            autostart: false,
            content: tpl.loading,
            delay: 0,
            title: undefined,
            url: undefined,
        };
        return this.each(function() {
            var that = $(this);
            var data = {};
            $.each(common_settings, function(key, item) {
                var attr = that.attr('data-' + key);
                if (attr)
                    data[key] = attr;
            });
            var settings = $.extend({}, common_settings, {
                url: (that.attr('href') || undefined)
            }, data, options);
            that.click(function(event) {
                event.preventDefault();
                event.stopPropagation();
                var modal = bootbox.dialog({
                    locale: 'de',
                    className: 'brbrpopup',
                    title: settings.title,
                    message: settings.content,
                    buttons: {},
                });
                if (settings.url && settings.url.length) {
                    $.get(settings.url).done(function(data, textstatus, jqxhr) {
                        $(modal).find('.bootbox-body').html(data);
                    }).fail(function(jqxhr, textstatus, errorname) {
                        $(modal).find('.bootbox-body').html((jqxhr.status == 404) ? tpl.error404 : error);
                    });
                }
            });
            if (settings.autostart == true) {
                if (settings.delay > 0)
                    setTimeout(function() {
                        that.click()
                    });
                else
                    that.click();
            }
        });
    };
})(window.jQuery);
(function($) {
    var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
    function fnFormatResult(value, data, currentValue) {
        var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
        return value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
    }
    function Autocomplete(el, options) {
        this.el = $(el);
        this.el.attr('autocomplete', 'off');
        this.suggestions = [];
        this.data = [];
        this.badQueries = [];
        this.selectedIndex = -1;
        this.currentValue = this.el.val();
        this.intervalId = 0;
        this.cachedResponse = [];
        this.onChangeInterval = null;
        this.onChange = null;
        this.ignoreValueChange = false;
        this.serviceUrl = options.serviceUrl;
        this.isLocal = false;
        this.options = {
            autoSubmit: false,
            minChars: 1,
            maxHeight: 300,
            deferRequestBy: 0,
            width: 0,
            highlight: true,
            params: {},
            fnFormatResult: fnFormatResult,
            delimiter: null,
            zIndex: 9999
        };
        this.initialize();
        this.setOptions(options);
        this.el.data('autocomplete', this);
    }
    $.fn.autocomplete = function(options, optionName) {
        var autocompleteControl;
        if (typeof options == 'string') {
            autocompleteControl = this.data('autocomplete');
            if (typeof autocompleteControl[options] == 'function') {
                autocompleteControl[options](optionName);
            }
        } else {
            autocompleteControl = new Autocomplete(this.get(0) || $('<input />'), options);
        }
        return autocompleteControl;
    };
    Autocomplete.prototype = {
        killerFn: null,
        initialize: function() {
            var me,
                uid,
                autocompleteElId;
            me = this;
            uid = Math.floor(Math.random() * 0x100000).toString(16);
            autocompleteElId = 'Autocomplete_' + uid;
            this.killerFn = function(e) {
                if ($(e.target).parents('.autocomplete').length === 0) {
                    me.killSuggestions();
                    me.disableKillerFn();
                }
            };
            if (!this.options.width) {
                this.options.width = this.el.width();
            }
            this.mainContainerId = 'AutocompleteContainter_' + uid;
            $('<div id="' + this.mainContainerId + '" style="position:absolute;z-index:9999;"><div class="autocomplete-w1"><div class="autocomplete" id="' + autocompleteElId + '" style="display:none; width:300px;"></div></div></div>').appendTo('body');
            this.container = $('#' + autocompleteElId);
            this.fixPosition();
            if (window.opera) {
                this.el.keypress(function(e) {
                    me.onKeyPress(e);
                });
            } else {
                this.el.keydown(function(e) {
                    me.onKeyPress(e);
                });
            }
            this.el.keyup(function(e) {
                me.onKeyUp(e);
            });
            this.el.blur(function() {
                me.enableKillerFn();
            });
            this.el.focus(function() {
                me.fixPosition();
            });
            this.el.change(function() {
                me.onValueChanged();
            });
        },
        extendOptions: function(options) {
            $.extend(this.options, options);
        },
        setOptions: function(options) {
            var o = this.options;
            this.extendOptions(options);
            if (o.lookup || o.isLocal) {
                this.isLocal = true;
                if ($.isArray(o.lookup)) {
                    o.lookup = {
                        suggestions: o.lookup,
                        data: []
                    };
                }
            }
            $('#' + this.mainContainerId).css({
                zIndex: o.zIndex
            });
            this.container.css({
                maxHeight: o.maxHeight + 'px',
                width: o.width
            });
        },
        clearCache: function() {
            this.cachedResponse = [];
            this.badQueries = [];
        },
        disable: function() {
            this.disabled = true;
        },
        enable: function() {
            this.disabled = false;
        },
        fixPosition: function() {
            var offset = this.el.offset();
            $('#' + this.mainContainerId).css({
                top: (offset.top + this.el.innerHeight()) + 'px',
                left: offset.left + 'px'
            });
        },
        enableKillerFn: function() {
            var me = this;
            $(document).bind('click', me.killerFn);
        },
        disableKillerFn: function() {
            var me = this;
            $(document).unbind('click', me.killerFn);
        },
        killSuggestions: function() {
            var me = this;
            this.stopKillSuggestions();
            this.intervalId = window.setInterval(function() {
                me.hide();
                me.stopKillSuggestions();
            }, 300);
        },
        stopKillSuggestions: function() {
            window.clearInterval(this.intervalId);
        },
        onValueChanged: function() {
            this.change(this.selectedIndex);
        },
        onKeyPress: function(e) {
            if (this.disabled || !this.enabled) {
                return;
            }
            switch (e.keyCode) {
            case 27:
                this.el.val(this.currentValue);
                this.hide();
                break;
            case 9:
            case 13:
                if (this.selectedIndex === -1) {
                    this.hide();
                    return;
                }
                this.select(this.selectedIndex);
                if (e.keyCode === 9) {
                    return;
                }
                break;
            case 38:
                this.moveUp();
                break;
            case 40:
                this.moveDown();
                break;
            default:
                return;
            }
            e.stopImmediatePropagation();
            e.preventDefault();
        },
        onKeyUp: function(e) {
            if (this.disabled) {
                return;
            }
            switch (e.keyCode) {
            case 38:
            case 40:
                return;
            }
            clearInterval(this.onChangeInterval);
            if (this.currentValue !== this.el.val()) {
                if (this.options.deferRequestBy > 0) {
                    var me = this;
                    this.onChangeInterval = setInterval(function() {
                        me.onValueChange();
                    }, this.options.deferRequestBy);
                } else {
                    this.onValueChange();
                }
            }
        },
        onValueChange: function() {
            clearInterval(this.onChangeInterval);
            this.currentValue = this.el.val();
            var q = this.getQuery(this.currentValue);
            this.selectedIndex = -1;
            if (this.ignoreValueChange) {
                this.ignoreValueChange = false;
                return;
            }
            if (q === '' || q.length < this.options.minChars) {
                this.hide();
            } else {
                this.getSuggestions(q);
            }
        },
        getQuery: function(val) {
            var d,
                arr;
            d = this.options.delimiter;
            if (!d) {
                return $.trim(val);
            }
            arr = val.split(d);
            return $.trim(arr[arr.length - 1]);
        },
        getSuggestionsLocal: function(q) {
            var ret,
                arr,
                len,
                val,
                i;
            arr = this.options.lookup;
            len = arr.suggestions.length;
            ret = {
                suggestions: [],
                data: []
            };
            q = q.toLowerCase();
            for (i = 0; i < len; i++) {
                val = arr.suggestions[i];
                if (val.toLowerCase().indexOf(q) === 0) {
                    ret.suggestions.push(val);
                    ret.data.push(arr.data[i]);
                }
            }
            return ret;
        },
        getSuggestions: function(q) {
            var cr,
                me;
            cr = this.isLocal ? this.getSuggestionsLocal(q) : this.cachedResponse[q];
            if (cr && $.isArray(cr.suggestions)) {
                this.suggestions = cr.suggestions;
                this.data = cr.data;
                this.suggest();
            } else if (!this.isBadQuery(q)) {
                me = this;
                me.options.params.query = q;
                $.get(this.serviceUrl, me.options.params, function(txt) {
                    me.processResponse(txt);
                }, 'text');
            }
        },
        isBadQuery: function(q) {
            var i = this.badQueries.length;
            while (i--) {
                if (q.indexOf(this.badQueries[i]) === 0) {
                    return true;
                }
            }
            return false;
        },
        hide: function() {
            this.enabled = false;
            this.selectedIndex = -1;
            this.container.hide();
        },
        suggest: function() {
            if (this.suggestions.length === 0) {
                this.hide();
                return;
            }
            var me,
                len,
                div,
                f,
                v,
                i,
                s,
                mOver,
                mClick;
            me = this;
            len = this.suggestions.length;
            f = this.options.fnFormatResult;
            v = this.getQuery(this.currentValue);
            mOver = function(xi) {
                return function() {
                    me.activate(xi);
                };
            };
            mClick = function(xi) {
                return function() {
                    me.select(xi);
                };
            };
            this.container.hide().empty();
            for (i = 0; i < len; i++) {
                s = this.suggestions[i];
                div = $((me.selectedIndex === i ? '<div class="selected"' : '<div') + ' title="' + s + '">' + f(s, this.data[i], v) + '</div>');
                div.mouseover(mOver(i));
                div.click(mClick(i));
                this.container.append(div);
            }
            this.enabled = true;
            this.container.show();
        },
        processResponse: function(text) {
            var response;
            try {
                response = eval('(' + text + ')');
            } catch (err) {
                return;
            }
            if (!$.isArray(response.data)) {
                response.data = [];
            }
            if (!this.options.noCache) {
                this.cachedResponse[response.query] = response;
                if (response.suggestions.length === 0) {
                    this.badQueries.push(response.query);
                }
            }
            if (response.query === this.getQuery(this.currentValue)) {
                this.suggestions = response.suggestions;
                this.data = response.data;
                this.suggest();
            }
        },
        activate: function(index) {
            var divs,
                activeItem;
            divs = this.container.children();
            if (this.selectedIndex !== -1 && divs.length > this.selectedIndex) {
                $(divs.get(this.selectedIndex)).removeClass();
            }
            this.selectedIndex = index;
            if (this.selectedIndex !== -1 && divs.length > this.selectedIndex) {
                activeItem = divs.get(this.selectedIndex);
                $(activeItem).addClass('selected');
            }
            return activeItem;
        },
        deactivate: function(div, index) {
            div.className = '';
            if (this.selectedIndex === index) {
                this.selectedIndex = -1;
            }
        },
        select: function(i) {
            var selectedValue,
                f;
            selectedValue = this.suggestions[i];
            if (selectedValue) {
                this.el.val(selectedValue);
                if (this.options.autoSubmit) {
                    f = this.el.parents('form');
                    if (f.length > 0) {
                        f.get(0).submit();
                    }
                }
                this.ignoreValueChange = true;
                this.hide();
                this.onSelect(i);
            }
        },
        change: function(i) {
            var selectedValue,
                fn,
                me;
            me = this;
            selectedValue = this.suggestions[i];
            if (selectedValue) {
                var s,
                    d;
                s = me.suggestions[i];
                d = me.data[i];
                me.el.val(me.getValue(s));
            }
            else {
                s = '';
                d = -1;
            }
            fn = me.options.onChange;
            if ($.isFunction(fn)) {
                fn(s, d, me.el);
            }
        },
        moveUp: function() {
            if (this.selectedIndex === -1) {
                return;
            }
            if (this.selectedIndex === 0) {
                this.container.children().get(0).className = '';
                this.selectedIndex = -1;
                this.el.val(this.currentValue);
                return;
            }
            this.adjustScroll(this.selectedIndex - 1);
        },
        moveDown: function() {
            if (this.selectedIndex === (this.suggestions.length - 1)) {
                return;
            }
            this.adjustScroll(this.selectedIndex + 1);
        },
        adjustScroll: function(i) {
            var activeItem,
                offsetTop,
                upperBound,
                lowerBound;
            activeItem = this.activate(i);
            offsetTop = activeItem.offsetTop;
            upperBound = this.container.scrollTop();
            lowerBound = upperBound + this.options.maxHeight - 25;
            if (offsetTop < upperBound) {
                this.container.scrollTop(offsetTop);
            } else if (offsetTop > lowerBound) {
                this.container.scrollTop(offsetTop - this.options.maxHeight + 25);
            }
            this.el.val(this.getValue(this.suggestions[i]));
        },
        onSelect: function(i) {
            var me,
                fn,
                s,
                d;
            me = this;
            fn = me.options.onSelect;
            s = me.suggestions[i];
            d = me.data[i];
            me.el.val(me.getValue(s));
            if ($.isFunction(fn)) {
                fn(s, d, me.el);
            }
        },
        getValue: function(value) {
            var del,
                currVal,
                arr,
                me;
            me = this;
            del = me.options.delimiter;
            if (!del) {
                return value;
            }
            currVal = me.currentValue;
            arr = currVal.split(del);
            if (arr.length === 1) {
                return value;
            }
            return currVal.substr(0, currVal.length - arr[arr.length - 1].length) + value;
        }
    };
}(jQuery));
/*! maphilight 12-06-2016 */
!function(a, b) {
    "function" == typeof define && define.amd ? define(["jquery"], b) : b(a.jQuery)
}(this, function(a) {
    var b,
        c,
        d,
        e,
        f,
        g,
        h,
        j,
        k,
        l,
        m;
    if (c = !!document.createElement("canvas").getContext, b = function() {
        var a = document.createElement("div");
        a.innerHTML = '<v:shape id="vml_flag1" adj="1" />';
        var b = a.firstChild;
        return b.style.behavior = "url(#default#VML)", b ? "object" == typeof b.adj : !0
    }(), !c && !b)
        return void (a.fn.maphilight = function() {
            return this
        });
    if (c) {
        j = function(a) {
            return Math.max(0, Math.min(parseInt(a, 16), 255))
        }, k = function(a, b) {
            return "rgba(" + j(a.substr(0, 2)) + "," + j(a.substr(2, 2)) + "," + j(a.substr(4, 2)) + "," + b + ")"
        }, d = function(b) {
            var c = a('<canvas style="width:' + a(b).width() + "px;height:" + a(b).height() + 'px;"></canvas>').get(0);
            return c.getContext("2d").clearRect(0, 0, a(b).width(), a(b).height()), c
        };
        var n = function(a, b, c, d, e) {
            if (d = d || 0, e = e || 0, a.beginPath(), "rect" == b)
                a.rect(c[0] + d, c[1] + e, c[2] - c[0], c[3] - c[1]);
            else if ("poly" == b)
                for (a.moveTo(c[0] + d, c[1] + e), i = 2; i < c.length; i += 2)
                    a.lineTo(c[i] + d, c[i + 1] + e);
            else
                "circ" == b && a.arc(c[0] + d, c[1] + e, c[2], 0, 2 * Math.PI, !1);
            a.closePath()
        };
        e = function(b, c, d, e, f) {
            var g = b.getContext("2d");
            if (e.shadow) {
                g.save(), "inside" == e.shadowPosition && (n(g, c, d), g.clip());
                var h = 100 * b.width,
                    i = 100 * b.height;
                n(g, c, d, h, i), g.shadowOffsetX = e.shadowX - h, g.shadowOffsetY = e.shadowY - i, g.shadowBlur = e.shadowRadius, g.shadowColor = k(e.shadowColor, e.shadowOpacity);
                var j = e.shadowFrom;
                j || (j = "outside" == e.shadowPosition ? "fill" : "stroke"), "stroke" == j ? (g.strokeStyle = "rgba(0,0,0,1)", g.stroke()) : "fill" == j && (g.fillStyle = "rgba(0,0,0,1)", g.fill()), g.restore(), "outside" == e.shadowPosition && (g.save(), n(g, c, d), g.globalCompositeOperation = "destination-out", g.fillStyle = "rgba(0,0,0,1);", g.fill(), g.restore())
            }
            g.save(), n(g, c, d), e.fill && (g.fillStyle = k(e.fillColor, e.fillOpacity), g.fill()), e.stroke && (g.strokeStyle = k(e.strokeColor, e.strokeOpacity), g.lineWidth = e.strokeWidth, g.stroke()), g.restore(), e.fade && a(b).css("opacity", 0).animate({
                opacity: 1
            }, 100)
        }, f = function(a) {
            a.getContext("2d").clearRect(0, 0, a.width, a.height)
        }
    } else
        d = function(b) {
            return a('<var style="zoom:1;overflow:hidden;display:block;width:' + b.width + "px;height:" + b.height + 'px;"></var>').get(0)
        }, e = function(b, c, d, e, f) {
            var g,
                h,
                i,
                j;
            for (var k in d)
                d[k] = parseInt(d[k], 10);
            g = '<v:fill color="#' + e.fillColor + '" opacity="' + (e.fill ? e.fillOpacity : 0) + '" />', h = e.stroke ? 'strokeweight="' + e.strokeWidth + '" stroked="t" strokecolor="#' + e.strokeColor + '"' : 'stroked="f"', i = '<v:stroke opacity="' + e.strokeOpacity + '"/>', "rect" == c ? j = a('<v:rect name="' + f + '" filled="t" ' + h + ' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:' + d[0] + "px;top:" + d[1] + "px;width:" + (d[2] - d[0]) + "px;height:" + (d[3] - d[1]) + 'px;"></v:rect>') : "poly" == c ? j = a('<v:shape name="' + f + '" filled="t" ' + h + ' coordorigin="0,0" coordsize="' + b.width + "," + b.height + '" path="m ' + d[0] + "," + d[1] + " l " + d.join(",") + ' x e" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:' + b.width + "px;height:" + b.height + 'px;"></v:shape>') : "circ" == c && (j = a('<v:oval name="' + f + '" filled="t" ' + h + ' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:' + (d[0] - d[2]) + "px;top:" + (d[1] - d[2]) + "px;width:" + 2 * d[2] + "px;height:" + 2 * d[2] + 'px;"></v:oval>')), j.get(0).innerHTML = g + i, a(b).append(j)
        }, f = function(b) {
            var c = a("<div>" + b.innerHTML + "</div>");
            c.children("[name=highlighted]").remove(), b.innerHTML = c.html()
        };
    g = function(a) {
        var b,
            c = a.getAttribute("coords").split(",");
        for (b = 0; b < c.length; b++)
            c[b] = parseFloat(c[b]);
        return [a.getAttribute("shape").toLowerCase().substr(0, 4), c]
    }, m = function(b, c) {
        var d = a(b);
        return a.extend({}, c, a.metadata ? d.metadata() : !1, d.data("maphilight"))
    }, l = function(a) {
        return a.complete ? "undefined" == typeof a.naturalWidth || 0 !== a.naturalWidth : !1
    }, h = {
        position: "absolute",
        left: 0,
        top: 0,
        padding: 0,
        border: 0
    };
    var o = !1;
    a.fn.maphilight = function(i) {
        return i = a.extend({}, a.fn.maphilight.defaults, i), c || o || (a(window).ready(function() {
            document.namespaces.add("v", "urn:schemas-microsoft-com:vml");
            var b = document.createStyleSheet(),
                c = ["shape", "rect", "oval", "circ", "fill", "stroke", "imagedata", "group", "textbox"];
            a.each(c, function() {
                b.addRule("v\\:" + this, "behavior: url(#default#VML); antialias:true")
            })
        }), o = !0), this.each(function() {
            var j,
                k,
                n,
                o,
                p,
                q,
                r;
            if (j = a(this), !l(this))
                return window.setTimeout(function() {
                    j.maphilight(i)
                }, 200);
            if (n = a.extend({}, i, a.metadata ? j.metadata() : !1, j.data("maphilight")), r = j.get(0).getAttribute("usemap"), r && (o = a('map[name="' + r.substr(1) + '"]'), j.is('img,input[type="image"]') && r && o.length > 0)) {
                if (j.hasClass("maphilighted")) {
                    var s = j.parent();
                    j.insertBefore(s), s.remove(), a(o).unbind(".maphilight")
                }
                k = a("<div></div>").css({
                    display: "block",
                    backgroundImage: 'url("' + this.src + '")',
                    backgroundSize: "contain",
                    position: "relative",
                    padding: 0,
                    width: this.width,
                    height: this.height
                }), n.wrapClass && (n.wrapClass === !0 ? k.addClass(a(this).attr("class")) : k.addClass(n.wrapClass)), j.before(k).css("opacity", 0).css(h).remove(), b && j.css("filter", "Alpha(opacity=0)"), k.append(j), p = d(this), a(p).css(h), p.height = this.height, p.width = this.width, a(o).bind("alwaysOn.maphilight", function() {
                    q && f(q), c || a(p).empty(), a(o).find("area[coords]").each(function() {
                        var b,
                            f;
                        f = m(this, n), f.alwaysOn && (!q && c && (q = d(j[0]), a(q).css(h), q.width = j[0].width, q.height = j[0].height, j.before(q)), f.fade = f.alwaysOnFade, b = g(this), c ? e(q, b[0], b[1], f, "") : e(p, b[0], b[1], f, ""))
                    })
                }).trigger("alwaysOn.maphilight").bind("mouseover.maphilight, focus.maphilight", function(b) {
                    var d,
                        f,
                        h = b.target;
                    if (f = m(h, n), !f.neverOn && !f.alwaysOn) {
                        if (d = g(h), e(p, d[0], d[1], f, "highlighted"), f.groupBy) {
                            var i;
                            i = /^[a-zA-Z][\-a-zA-Z]+$/.test(f.groupBy) ? o.find("area[" + f.groupBy + '="' + a(h).attr(f.groupBy) + '"]') : o.find(f.groupBy);
                            var j = h;
                            i.each(function() {
                                if (this != j) {
                                    var a = m(this, n);
                                    if (!a.neverOn && !a.alwaysOn) {
                                        var b = g(this);
                                        e(p, b[0], b[1], a, "highlighted")
                                    }
                                }
                            })
                        }
                        c || a(p).append("<v:rect></v:rect>")
                    }
                }).bind("mouseout.maphilight, blur.maphilight", function(a) {
                    f(p)
                }), j.before(p), j.addClass("maphilighted")
            }
        })
    }, a.fn.maphilight.defaults = {
        fill: !0,
        fillColor: "000000",
        fillOpacity: .2,
        stroke: !0,
        strokeColor: "ff0000",
        strokeOpacity: 1,
        strokeWidth: 1,
        fade: !0,
        alwaysOn: !1,
        neverOn: !1,
        groupBy: !1,
        wrapClass: !0,
        shadow: !1,
        shadowX: 0,
        shadowY: 0,
        shadowRadius: 6,
        shadowColor: "000000",
        shadowOpacity: .8,
        shadowPosition: "outside",
        shadowFrom: !1
    }
});
jQuery('<div class="quantity-nav"><button type="button" class="btn quantity-button quantity-up" tabindex="-1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button><button type="button" class="btn quantity-button quantity-down" tabindex="-1"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');
    btnUp.click(function() {
        var oldVal = (parseFloat(input.val()) || 0);
        if (oldVal >= max) {
            var newVal = oldVal;
        } else {
            var newVal = oldVal + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });
    btnDown.click(function() {
        var oldVal = parseFloat(input.val());
        if (oldVal <= min) {
            var newVal = oldVal;
        } else {
            var newVal = oldVal - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });
    input.change(function() {
        var oldVal = (parseFloat(input.val()) || 0);
        if (oldVal > max) {
            input.val(max);
        }
        else if (oldVal < min) {
            input.val(min);
        }
    }).focus(function() {
        input.select();
    });
});
/*!
 * jQuery Validation Plugin v1.16.0
 *
 * http://jqueryvalidation.org/
 *
 * Copyright (c) 2016 JÃ¶rn Zaefferer
 * Released under the MIT license
 */
(function(factory) {
    if (typeof define === "function" && define.amd) {
        define(["jquery"], factory);
    } else if (typeof module === "object" && module.exports) {
        module.exports = factory(require("jquery"));
    } else {
        factory(jQuery);
    }
}(function($) {
    $.extend($.fn, {
        validate: function(options) {
            if (!this.length) {
                if (options && options.debug && window.console) {
                    console.warn("Nothing selected, can't validate, returning nothing.");
                }
                return;
            }
            var validator = $.data(this[0], "validator");
            if (validator) {
                return validator;
            }
            this.attr("novalidate", "novalidate");
            validator = new $.validator(options, this[0]);
            $.data(this[0], "validator", validator);
            if (validator.settings.onsubmit) {
                this.on("click.validate", ":submit", function(event) {
                    if (validator.settings.submitHandler) {
                        validator.submitButton = event.target;
                    }
                    if ($(this).hasClass("cancel")) {
                        validator.cancelSubmit = true;
                    }
                    if ($(this).attr("formnovalidate") !== undefined) {
                        validator.cancelSubmit = true;
                    }
                });
                this.on("submit.validate", function(event) {
                    if (validator.settings.debug) {
                        event.preventDefault();
                    }
                    function handle() {
                        var hidden,
                            result;
                        if (validator.settings.submitHandler) {
                            if (validator.submitButton) {
                                hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val($(validator.submitButton).val()).appendTo(validator.currentForm);
                            }
                            result = validator.settings.submitHandler.call(validator, validator.currentForm, event);
                            if (validator.submitButton) {
                                hidden.remove();
                            }
                            if (result !== undefined) {
                                return result;
                            }
                            return false;
                        }
                        return true;
                    }
                    if (validator.cancelSubmit) {
                        validator.cancelSubmit = false;
                        return handle();
                    }
                    if (validator.form()) {
                        if (validator.pendingRequest) {
                            validator.formSubmitted = true;
                            return false;
                        }
                        return handle();
                    } else {
                        validator.focusInvalid();
                        return false;
                    }
                });
            }
            return validator;
        },
        valid: function() {
            var valid,
                validator,
                errorList;
            if ($(this[0]).is("form")) {
                valid = this.validate().form();
            } else {
                errorList = [];
                valid = true;
                validator = $(this[0].form).validate();
                this.each(function() {
                    valid = validator.element(this) && valid;
                    if (!valid) {
                        errorList = errorList.concat(validator.errorList);
                    }
                });
                validator.errorList = errorList;
            }
            return valid;
        },
        rules: function(command, argument) {
            var element = this[0],
                settings,
                staticRules,
                existingRules,
                data,
                param,
                filtered;
            if (element == null || element.form == null) {
                return;
            }
            if (command) {
                settings = $.data(element.form, "validator").settings;
                staticRules = settings.rules;
                existingRules = $.validator.staticRules(element);
                switch (command) {
                case "add":
                    $.extend(existingRules, $.validator.normalizeRule(argument));
                    delete existingRules.messages;
                    staticRules[element.name] = existingRules;
                    if (argument.messages) {
                        settings.messages[element.name] = $.extend(settings.messages[element.name], argument.messages);
                    }
                    break;
                case "remove":
                    if (!argument) {
                        delete staticRules[element.name];
                        return existingRules;
                    }
                    filtered = {};
                    $.each(argument.split(/\s/), function(index, method) {
                        filtered[method] = existingRules[method];
                        delete existingRules[method];
                        if (method === "required") {
                            $(element).removeAttr("aria-required");
                        }
                    });
                    return filtered;
                }
            }
            data = $.validator.normalizeRules($.extend({}, $.validator.classRules(element), $.validator.attributeRules(element), $.validator.dataRules(element), $.validator.staticRules(element)), element);
            if (data.required) {
                param = data.required;
                delete data.required;
                data = $.extend({
                    required: param
                }, data);
                $(element).attr("aria-required", "true");
            }
            if (data.remote) {
                param = data.remote;
                delete data.remote;
                data = $.extend(data, {
                    remote: param
                });
            }
            return data;
        }
    });
    $.extend($.expr.pseudos || $.expr[":"], {
        blank: function(a) {
            return !$.trim("" + $(a).val());
        },
        filled: function(a) {
            var val = $(a).val();
            return val !== null && !!$.trim("" + val);
        },
        unchecked: function(a) {
            return !$(a).prop("checked");
        }
    });
    $.validator = function(options, form) {
        this.settings = $.extend(true, {}, $.validator.defaults, options);
        this.currentForm = form;
        this.init();
    };
    $.validator.format = function(source, params) {
        if (arguments.length === 1) {
            return function() {
                var args = $.makeArray(arguments);
                args.unshift(source);
                return $.validator.format.apply(this, args);
            };
        }
        if (params === undefined) {
            return source;
        }
        if (arguments.length > 2 && params.constructor !== Array) {
            params = $.makeArray(arguments).slice(1);
        }
        if (params.constructor !== Array) {
            params = [params];
        }
        $.each(params, function(i, n) {
            source = source.replace(new RegExp("\\{" + i + "\\}", "g"), function() {
                return n;
            });
        });
        return source;
    };
    $.extend($.validator, {
        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            pendingClass: "pending",
            validClass: "valid",
            errorElement: "label",
            focusCleanup: false,
            focusInvalid: true,
            errorContainer: $([]),
            errorLabelContainer: $([]),
            onsubmit: true,
            ignore: ":hidden",
            ignoreTitle: false,
            onfocusin: function(element) {
                this.lastActive = element;
                if (this.settings.focusCleanup) {
                    if (this.settings.unhighlight) {
                        this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
                    }
                    this.hideThese(this.errorsFor(element));
                }
            },
            onfocusout: function(element) {
                if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element))) {
                    this.element(element);
                }
            },
            onkeyup: function(element, event) {
                var excludedKeys = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225];
                if (event.which === 9 && this.elementValue(element) === "" || $.inArray(event.keyCode, excludedKeys) !== -1) {
                    return;
                } else if (element.name in this.submitted || element.name in this.invalid) {
                    this.element(element);
                }
            },
            onclick: function(element) {
                if (element.name in this.submitted) {
                    this.element(element);
                } else if (element.parentNode.name in this.submitted) {
                    this.element(element.parentNode);
                }
            },
            highlight: function(element, errorClass, validClass) {
                if (element.type === "radio") {
                    this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                } else {
                    $(element).addClass(errorClass).removeClass(validClass);
                }
            },
            unhighlight: function(element, errorClass, validClass) {
                if (element.type === "radio") {
                    this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                } else {
                    $(element).removeClass(errorClass).addClass(validClass);
                }
            }
        },
        setDefaults: function(settings) {
            $.extend($.validator.defaults, settings);
        },
        messages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            equalTo: "Please enter the same value again.",
            maxlength: $.validator.format("Please enter no more than {0} characters."),
            minlength: $.validator.format("Please enter at least {0} characters."),
            rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
            range: $.validator.format("Please enter a value between {0} and {1}."),
            max: $.validator.format("Please enter a value less than or equal to {0}."),
            min: $.validator.format("Please enter a value greater than or equal to {0}."),
            step: $.validator.format("Please enter a multiple of {0}.")
        },
        autoCreateRanges: false,
        prototype: {
            init: function() {
                this.labelContainer = $(this.settings.errorLabelContainer);
                this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
                this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer);
                this.submitted = {};
                this.valueCache = {};
                this.pendingRequest = 0;
                this.pending = {};
                this.invalid = {};
                this.reset();
                var groups = (this.groups = {}),
                    rules;
                $.each(this.settings.groups, function(key, value) {
                    if (typeof value === "string") {
                        value = value.split(/\s/);
                    }
                    $.each(value, function(index, name) {
                        groups[name] = key;
                    });
                });
                rules = this.settings.rules;
                $.each(rules, function(key, value) {
                    rules[key] = $.validator.normalizeRule(value);
                });
                function delegate(event) {
                    if (!this.form && this.hasAttribute("contenteditable")) {
                        this.form = $(this).closest("form")[0];
                    }
                    var validator = $.data(this.form, "validator"),
                        eventType = "on" + event.type.replace(/^validate/, ""),
                        settings = validator.settings;
                    if (settings[eventType] && !$(this).is(settings.ignore)) {
                        settings[eventType].call(validator, this, event);
                    }
                }
                $(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], " + "[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], " + "[type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], " + "[type='radio'], [type='checkbox'], [contenteditable], [type='button']", delegate).on("click.validate", "select, option, [type='radio'], [type='checkbox']", delegate);
                if (this.settings.invalidHandler) {
                    $(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler);
                }
                $(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required", "true");
            },
            form: function() {
                this.checkForm();
                $.extend(this.submitted, this.errorMap);
                this.invalid = $.extend({}, this.errorMap);
                if (!this.valid()) {
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                }
                this.showErrors();
                return this.valid();
            },
            checkForm: function() {
                this.prepareForm();
                for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
                    this.check(elements[i]);
                }
                return this.valid();
            },
            element: function(element) {
                var cleanElement = this.clean(element),
                    checkElement = this.validationTargetFor(cleanElement),
                    v = this,
                    result = true,
                    rs,
                    group;
                if (checkElement === undefined) {
                    delete this.invalid[cleanElement.name];
                } else {
                    this.prepareElement(checkElement);
                    this.currentElements = $(checkElement);
                    group = this.groups[checkElement.name];
                    if (group) {
                        $.each(this.groups, function(name, testgroup) {
                            if (testgroup === group && name !== checkElement.name) {
                                cleanElement = v.validationTargetFor(v.clean(v.findByName(name)));
                                if (cleanElement && cleanElement.name in v.invalid) {
                                    v.currentElements.push(cleanElement);
                                    result = v.check(cleanElement) && result;
                                }
                            }
                        });
                    }
                    rs = this.check(checkElement) !== false;
                    result = result && rs;
                    if (rs) {
                        this.invalid[checkElement.name] = false;
                    } else {
                        this.invalid[checkElement.name] = true;
                    }
                    if (!this.numberOfInvalids()) {
                        this.toHide = this.toHide.add(this.containers);
                    }
                    this.showErrors();
                    $(element).attr("aria-invalid", !rs);
                }
                return result;
            },
            showErrors: function(errors) {
                if (errors) {
                    var validator = this;
                    $.extend(this.errorMap, errors);
                    this.errorList = $.map(this.errorMap, function(message, name) {
                        return {
                            message: message,
                            element: validator.findByName(name)[0]
                        };
                    });
                    this.successList = $.grep(this.successList, function(element) {
                        return !(element.name in errors);
                    });
                }
                if (this.settings.showErrors) {
                    this.settings.showErrors.call(this, this.errorMap, this.errorList);
                } else {
                    this.defaultShowErrors();
                }
            },
            resetForm: function() {
                if ($.fn.resetForm) {
                    $(this.currentForm).resetForm();
                }
                this.invalid = {};
                this.submitted = {};
                this.prepareForm();
                this.hideErrors();
                var elements = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                this.resetElements(elements);
            },
            resetElements: function(elements) {
                var i;
                if (this.settings.unhighlight) {
                    for (i = 0; elements[i]; i++) {
                        this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, "");
                        this.findByName(elements[i].name).removeClass(this.settings.validClass);
                    }
                } else {
                    elements.removeClass(this.settings.errorClass).removeClass(this.settings.validClass);
                }
            },
            numberOfInvalids: function() {
                return this.objectLength(this.invalid);
            },
            objectLength: function(obj) {
                var count = 0,
                    i;
                for (i in obj) {
                    if (obj[i]) {
                        count++;
                    }
                }
                return count;
            },
            hideErrors: function() {
                this.hideThese(this.toHide);
            },
            hideThese: function(errors) {
                errors.not(this.containers).text("");
                this.addWrapper(errors).hide();
            },
            valid: function() {
                return this.size() === 0;
            },
            size: function() {
                return this.errorList.length;
            },
            focusInvalid: function() {
                if (this.settings.focusInvalid) {
                    try {
                        $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin");
                    } catch (e) {}
                }
            },
            findLastActive: function() {
                var lastActive = this.lastActive;
                return lastActive && $.grep(this.errorList, function(n) {
                        return n.element.name === lastActive.name;
                    }).length === 1 && lastActive;
            },
            elements: function() {
                var validator = this,
                    rulesCache = {};
                return $(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function() {
                    var name = this.name || $(this).attr("name");
                    if (!name && validator.settings.debug && window.console) {
                        console.error("%o has no name assigned", this);
                    }
                    if (this.hasAttribute("contenteditable")) {
                        this.form = $(this).closest("form")[0];
                    }
                    if (name in rulesCache || !validator.objectLength($(this).rules())) {
                        return false;
                    }
                    rulesCache[name] = true;
                    return true;
                });
            },
            clean: function(selector) {
                return $(selector)[0];
            },
            errors: function() {
                var errorClass = this.settings.errorClass.split(" ").join(".");
                return $(this.settings.errorElement + "." + errorClass, this.errorContext);
            },
            resetInternals: function() {
                this.successList = [];
                this.errorList = [];
                this.errorMap = {};
                this.toShow = $([]);
                this.toHide = $([]);
            },
            reset: function() {
                this.resetInternals();
                this.currentElements = $([]);
            },
            prepareForm: function() {
                this.reset();
                this.toHide = this.errors().add(this.containers);
            },
            prepareElement: function(element) {
                this.reset();
                this.toHide = this.errorsFor(element);
            },
            elementValue: function(element) {
                var $element = $(element),
                    type = element.type,
                    val,
                    idx;
                if (type === "radio" || type === "checkbox") {
                    return this.findByName(element.name).filter(":checked").val();
                } else if (type === "number" && typeof element.validity !== "undefined") {
                    return element.validity.badInput ? "NaN" : $element.val();
                }
                if (element.hasAttribute("contenteditable")) {
                    val = $element.text();
                } else {
                    val = $element.val();
                }
                if (type === "file") {
                    if (val.substr(0, 12) === "C:\\fakepath\\") {
                        return val.substr(12);
                    }
                    idx = val.lastIndexOf("/");
                    if (idx >= 0) {
                        return val.substr(idx + 1);
                    }
                    idx = val.lastIndexOf("\\");
                    if (idx >= 0) {
                        return val.substr(idx + 1);
                    }
                    return val;
                }
                if (typeof val === "string") {
                    return val.replace(/\r/g, "");
                }
                return val;
            },
            check: function(element) {
                element = this.validationTargetFor(this.clean(element));
                var rules = $(element).rules(),
                    rulesCount = $.map(rules, function(n, i) {
                        return i;
                    }).length,
                    dependencyMismatch = false,
                    val = this.elementValue(element),
                    result,
                    method,
                    rule;
                if (typeof rules.normalizer === "function") {
                    val = rules.normalizer.call(element, val);
                    if (typeof val !== "string") {
                        throw new TypeError("The normalizer should return a string value.");
                    }
                    delete rules.normalizer;
                }
                for (method in rules) {
                    rule = {
                        method: method,
                        parameters: rules[method]
                    };
                    try {
                        result = $.validator.methods[method].call(this, val, element, rule.parameters);
                        if (result === "dependency-mismatch" && rulesCount === 1) {
                            dependencyMismatch = true;
                            continue;
                        }
                        dependencyMismatch = false;
                        if (result === "pending") {
                            this.toHide = this.toHide.not(this.errorsFor(element));
                            return;
                        }
                        if (!result) {
                            this.formatAndAdd(element, rule);
                            return false;
                        }
                    } catch (e) {
                        if (this.settings.debug && window.console) {
                            console.log("Exception occurred when checking element " + element.id + ", check the '" + rule.method + "' method.", e);
                        }
                        if (e instanceof TypeError) {
                            e.message += ".  Exception occurred when checking element " + element.id + ", check the '" + rule.method + "' method.";
                        }
                        throw e;
                    }
                }
                if (dependencyMismatch) {
                    return;
                }
                if (this.objectLength(rules)) {
                    this.successList.push(element);
                }
                return true;
            },
            customDataMessage: function(element, method) {
                return $(element).data("msg" + method.charAt(0).toUpperCase() +
                    method.substring(1).toLowerCase()) || $(element).data("msg");
            },
            customMessage: function(name, method) {
                var m = this.settings.messages[name];
                return m && (m.constructor === String ? m : m[method]);
            },
            findDefined: function() {
                for (var i = 0; i < arguments.length; i++) {
                    if (arguments[i] !== undefined) {
                        return arguments[i];
                    }
                }
                return undefined;
            },
            defaultMessage: function(element, rule) {
                if (typeof rule === "string") {
                    rule = {
                        method: rule
                    };
                }
                var message = this.findDefined(this.customMessage(element.name, rule.method), this.customDataMessage(element, rule.method), !this.settings.ignoreTitle && element.title || undefined, $.validator.messages[rule.method], "<strong>Warning: No message defined for " + element.name + "</strong>"),
                    theregex = /\$?\{(\d+)\}/g;
                if (typeof message === "function") {
                    message = message.call(this, rule.parameters, element);
                } else if (theregex.test(message)) {
                    message = $.validator.format(message.replace(theregex, "{$1}"), rule.parameters);
                }
                return message;
            },
            formatAndAdd: function(element, rule) {
                var message = this.defaultMessage(element, rule);
                this.errorList.push({
                    message: message,
                    element: element,
                    method: rule.method
                });
                this.errorMap[element.name] = message;
                this.submitted[element.name] = message;
            },
            addWrapper: function(toToggle) {
                if (this.settings.wrapper) {
                    toToggle = toToggle.add(toToggle.parent(this.settings.wrapper));
                }
                return toToggle;
            },
            defaultShowErrors: function() {
                var i,
                    elements,
                    error;
                for (i = 0; this.errorList[i]; i++) {
                    error = this.errorList[i];
                    if (this.settings.highlight) {
                        this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
                    }
                    this.showLabel(error.element, error.message);
                }
                if (this.errorList.length) {
                    this.toShow = this.toShow.add(this.containers);
                }
                if (this.settings.success) {
                    for (i = 0; this.successList[i]; i++) {
                        this.showLabel(this.successList[i]);
                    }
                }
                if (this.settings.unhighlight) {
                    for (i = 0, elements = this.validElements(); elements[i]; i++) {
                        this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
                    }
                }
                this.toHide = this.toHide.not(this.toShow);
                this.hideErrors();
                this.addWrapper(this.toShow).show();
            },
            validElements: function() {
                return this.currentElements.not(this.invalidElements());
            },
            invalidElements: function() {
                return $(this.errorList).map(function() {
                    return this.element;
                });
            },
            showLabel: function(element, message) {
                var place,
                    group,
                    errorID,
                    v,
                    error = this.errorsFor(element),
                    elementID = this.idOrName(element),
                    describedBy = $(element).attr("aria-describedby");
                if (error.length) {
                    error.removeClass(this.settings.validClass).addClass(this.settings.errorClass);
                    error.html(message);
                } else {
                    error = $("<" + this.settings.errorElement + ">").attr("id", elementID + "-error").addClass(this.settings.errorClass).html(message || "");
                    place = error;
                    if (this.settings.wrapper) {
                        place = error.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
                    }
                    if (this.labelContainer.length) {
                        this.labelContainer.append(place);
                    } else if (this.settings.errorPlacement) {
                        this.settings.errorPlacement.call(this, place, $(element));
                    } else {
                        place.insertAfter(element);
                    }
                    if (error.is("label")) {
                        error.attr("for", elementID);
                    } else if (error.parents("label[for='" + this.escapeCssMeta(elementID) + "']").length === 0) {
                        errorID = error.attr("id");
                        if (!describedBy) {
                            describedBy = errorID;
                        } else if (!describedBy.match(new RegExp("\\b" + this.escapeCssMeta(errorID) + "\\b"))) {
                            describedBy += " " + errorID;
                        }
                        $(element).attr("aria-describedby", describedBy);
                        group = this.groups[element.name];
                        if (group) {
                            v = this;
                            $.each(v.groups, function(name, testgroup) {
                                if (testgroup === group) {
                                    $("[name='" + v.escapeCssMeta(name) + "']", v.currentForm).attr("aria-describedby", error.attr("id"));
                                }
                            });
                        }
                    }
                }
                if (!message && this.settings.success) {
                    error.text("");
                    if (typeof this.settings.success === "string") {
                        error.addClass(this.settings.success);
                    } else {
                        this.settings.success(error, element);
                    }
                }
                this.toShow = this.toShow.add(error);
            },
            errorsFor: function(element) {
                var name = this.escapeCssMeta(this.idOrName(element)),
                    describer = $(element).attr("aria-describedby"),
                    selector = "label[for='" + name + "'], label[for='" + name + "'] *";
                if (describer) {
                    selector = selector + ", #" + this.escapeCssMeta(describer).replace(/\s+/g, ", #");
                }
                return this.errors().filter(selector);
            },
            escapeCssMeta: function(string) {
                return string.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1");
            },
            idOrName: function(element) {
                return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
            },
            validationTargetFor: function(element) {
                if (this.checkable(element)) {
                    element = this.findByName(element.name);
                }
                return $(element).not(this.settings.ignore)[0];
            },
            checkable: function(element) {
                return (/radio|checkbox/i).test(element.type);
            },
            findByName: function(name) {
                return $(this.currentForm).find("[name='" + this.escapeCssMeta(name) + "']");
            },
            getLength: function(value, element) {
                switch (element.nodeName.toLowerCase()) {
                case "select":
                    return $("option:selected", element).length;
                case "input":
                    if (this.checkable(element)) {
                        return this.findByName(element.name).filter(":checked").length;
                    }
                }
                return value.length;
            },
            depend: function(param, element) {
                return this.dependTypes[typeof param] ? this.dependTypes[typeof param](param, element) : true;
            },
            dependTypes: {
                "boolean": function(param) {
                    return param;
                },
                "string": function(param, element) {
                    return !!$(param, element.form).length;
                },
                "function": function(param, element) {
                    return param(element);
                }
            },
            optional: function(element) {
                var val = this.elementValue(element);
                return !$.validator.methods.required.call(this, val, element) && "dependency-mismatch";
            },
            startRequest: function(element) {
                if (!this.pending[element.name]) {
                    this.pendingRequest++;
                    $(element).addClass(this.settings.pendingClass);
                    this.pending[element.name] = true;
                }
            },
            stopRequest: function(element, valid) {
                this.pendingRequest--;
                if (this.pendingRequest < 0) {
                    this.pendingRequest = 0;
                }
                delete this.pending[element.name];
                $(element).removeClass(this.settings.pendingClass);
                if (valid && this.pendingRequest === 0 && this.formSubmitted && this.form()) {
                    $(this.currentForm).submit();
                    this.formSubmitted = false;
                } else if (!valid && this.pendingRequest === 0 && this.formSubmitted) {
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                    this.formSubmitted = false;
                }
            },
            previousValue: function(element, method) {
                method = typeof method === "string" && method || "remote";
                return $.data(element, "previousValue") || $.data(element, "previousValue", {
                        old: null,
                        valid: true,
                        message: this.defaultMessage(element, {
                            method: method
                        })
                    });
            },
            destroy: function() {
                this.resetForm();
                $(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur");
            }
        },
        classRuleSettings: {
            required: {
                required: true
            },
            email: {
                email: true
            },
            url: {
                url: true
            },
            date: {
                date: true
            },
            dateISO: {
                dateISO: true
            },
            number: {
                number: true
            },
            digits: {
                digits: true
            },
            creditcard: {
                creditcard: true
            }
        },
        addClassRules: function(className, rules) {
            if (className.constructor === String) {
                this.classRuleSettings[className] = rules;
            } else {
                $.extend(this.classRuleSettings, className);
            }
        },
        classRules: function(element) {
            var rules = {},
                classes = $(element).attr("class");
            if (classes) {
                $.each(classes.split(" "), function() {
                    if (this in $.validator.classRuleSettings) {
                        $.extend(rules, $.validator.classRuleSettings[this]);
                    }
                });
            }
            return rules;
        },
        normalizeAttributeRule: function(rules, type, method, value) {
            if (/min|max|step/.test(method) && (type === null || /number|range|text/.test(type))) {
                value = Number(value);
                if (isNaN(value)) {
                    value = undefined;
                }
            }
            if (value || value === 0) {
                rules[method] = value;
            } else if (type === method && type !== "range") {
                rules[method] = true;
            }
        },
        attributeRules: function(element) {
            var rules = {},
                $element = $(element),
                type = element.getAttribute("type"),
                method,
                value;
            for (method in $.validator.methods) {
                if (method === "required") {
                    value = element.getAttribute(method);
                    if (value === "") {
                        value = true;
                    }
                    value = !!value;
                } else {
                    value = $element.attr(method);
                }
                this.normalizeAttributeRule(rules, type, method, value);
            }
            if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
                delete rules.maxlength;
            }
            return rules;
        },
        dataRules: function(element) {
            var rules = {},
                $element = $(element),
                type = element.getAttribute("type"),
                method,
                value;
            for (method in $.validator.methods) {
                value = $element.data("rule" + method.charAt(0).toUpperCase() + method.substring(1).toLowerCase());
                this.normalizeAttributeRule(rules, type, method, value);
            }
            return rules;
        },
        staticRules: function(element) {
            var rules = {},
                validator = $.data(element.form, "validator");
            if (validator.settings.rules) {
                rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
            }
            return rules;
        },
        normalizeRules: function(rules, element) {
            $.each(rules, function(prop, val) {
                if (val === false) {
                    delete rules[prop];
                    return;
                }
                if (val.param || val.depends) {
                    var keepRule = true;
                    switch (typeof val.depends) {
                    case "string":
                        keepRule = !!$(val.depends, element.form).length;
                        break;
                    case "function":
                        keepRule = val.depends.call(element, element);
                        break;
                    }
                    if (keepRule) {
                        rules[prop] = val.param !== undefined ? val.param : true;
                    } else {
                        $.data(element.form, "validator").resetElements($(element));
                        delete rules[prop];
                    }
                }
            });
            $.each(rules, function(rule, parameter) {
                rules[rule] = $.isFunction(parameter) && rule !== "normalizer" ? parameter(element) : parameter;
            });
            $.each(["minlength", "maxlength"], function() {
                if (rules[this]) {
                    rules[this] = Number(rules[this]);
                }
            });
            $.each(["rangelength", "range"], function() {
                var parts;
                if (rules[this]) {
                    if ($.isArray(rules[this])) {
                        rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
                    } else if (typeof rules[this] === "string") {
                        parts = rules[this].replace(/[\[\]]/g, "").split(/[\s,]+/);
                        rules[this] = [Number(parts[0]), Number(parts[1])];
                    }
                }
            });
            if ($.validator.autoCreateRanges) {
                if (rules.min != null && rules.max != null) {
                    rules.range = [rules.min, rules.max];
                    delete rules.min;
                    delete rules.max;
                }
                if (rules.minlength != null && rules.maxlength != null) {
                    rules.rangelength = [rules.minlength, rules.maxlength];
                    delete rules.minlength;
                    delete rules.maxlength;
                }
            }
            return rules;
        },
        normalizeRule: function(data) {
            if (typeof data === "string") {
                var transformed = {};
                $.each(data.split(/\s/), function() {
                    transformed[this] = true;
                });
                data = transformed;
            }
            return data;
        },
        addMethod: function(name, method, message) {
            $.validator.methods[name] = method;
            $.validator.messages[name] = message !== undefined ? message : $.validator.messages[name];
            if (method.length < 3) {
                $.validator.addClassRules(name, $.validator.normalizeRule(name));
            }
        },
        methods: {
            required: function(value, element, param) {
                if (!this.depend(param, element)) {
                    return "dependency-mismatch";
                }
                if (element.nodeName.toLowerCase() === "select") {
                    var val = $(element).val();
                    return val && val.length > 0;
                }
                if (this.checkable(element)) {
                    return this.getLength(value, element) > 0;
                }
                return value.length > 0;
            },
            email: function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(value);
            },
            url: function(value, element) {
                return this.optional(element) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(value);
            },
            date: function(value, element) {
                return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());
            },
            dateISO: function(value, element) {
                return this.optional(element) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(value);
            },
            number: function(value, element) {
                return this.optional(element) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(value);
            },
            digits: function(value, element) {
                return this.optional(element) || /^\d+$/.test(value);
            },
            minlength: function(value, element, param) {
                var length = $.isArray(value) ? value.length : this.getLength(value, element);
                return this.optional(element) || length >= param;
            },
            maxlength: function(value, element, param) {
                var length = $.isArray(value) ? value.length : this.getLength(value, element);
                return this.optional(element) || length <= param;
            },
            rangelength: function(value, element, param) {
                var length = $.isArray(value) ? value.length : this.getLength(value, element);
                return this.optional(element) || (length >= param[0] && length <= param[1]);
            },
            min: function(value, element, param) {
                return this.optional(element) || value >= param;
            },
            max: function(value, element, param) {
                return this.optional(element) || value <= param;
            },
            range: function(value, element, param) {
                return this.optional(element) || (value >= param[0] && value <= param[1]);
            },
            step: function(value, element, param) {
                var type = $(element).attr("type"),
                    errorMessage = "Step attribute on input type " + type + " is not supported.",
                    supportedTypes = ["text", "number", "range"],
                    re = new RegExp("\\b" + type + "\\b"),
                    notSupported = type && !re.test(supportedTypes.join()),
                    decimalPlaces = function(num) {
                        var match = ("" + num).match(/(?:\.(\d+))?$/);
                        if (!match) {
                            return 0;
                        }
                        return match[1] ? match[1].length : 0;
                    },
                    toInt = function(num) {
                        return Math.round(num * Math.pow(10, decimals));
                    },
                    valid = true,
                    decimals;
                if (notSupported) {
                    throw new Error(errorMessage);
                }
                decimals = decimalPlaces(param);
                if (decimalPlaces(value) > decimals || toInt(value) % toInt(param) !== 0) {
                    valid = false;
                }
                return this.optional(element) || valid;
            },
            equalTo: function(value, element, param) {
                var target = $(param);
                if (this.settings.onfocusout && target.not(".validate-equalTo-blur").length) {
                    target.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function() {
                        $(element).valid();
                    });
                }
                return value === target.val();
            },
            remote: function(value, element, param, method) {
                if (this.optional(element)) {
                    return "dependency-mismatch";
                }
                method = typeof method === "string" && method || "remote";
                var previous = this.previousValue(element, method),
                    validator,
                    data,
                    optionDataString;
                if (!this.settings.messages[element.name]) {
                    this.settings.messages[element.name] = {};
                }
                previous.originalMessage = previous.originalMessage || this.settings.messages[element.name][method];
                this.settings.messages[element.name][method] = previous.message;
                param = typeof param === "string" && {
                    url: param
                } || param;
                optionDataString = $.param($.extend({
                    data: value
                }, param.data));
                if (previous.old === optionDataString) {
                    return previous.valid;
                }
                previous.old = optionDataString;
                validator = this;
                this.startRequest(element);
                data = {};
                data[element.name] = value;
                $.ajax($.extend(true, {
                    mode: "abort",
                    port: "validate" + element.name,
                    dataType: "json",
                    data: data,
                    context: validator.currentForm,
                    success: function(response) {
                        var valid = response === true || response === "true",
                            errors,
                            message,
                            submitted;
                        validator.settings.messages[element.name][method] = previous.originalMessage;
                        if (valid) {
                            submitted = validator.formSubmitted;
                            validator.resetInternals();
                            validator.toHide = validator.errorsFor(element);
                            validator.formSubmitted = submitted;
                            validator.successList.push(element);
                            validator.invalid[element.name] = false;
                            validator.showErrors();
                        } else {
                            errors = {};
                            message = response || validator.defaultMessage(element, {
                                method: method,
                                parameters: value
                            });
                            errors[element.name] = previous.message = message;
                            validator.invalid[element.name] = true;
                            validator.showErrors(errors);
                        }
                        previous.valid = valid;
                        validator.stopRequest(element, valid);
                    }
                }, param));
                return "pending";
            }
        }
    });
    var pendingRequests = {},
        ajax;
    if ($.ajaxPrefilter) {
        $.ajaxPrefilter(function(settings, _, xhr) {
            var port = settings.port;
            if (settings.mode === "abort") {
                if (pendingRequests[port]) {
                    pendingRequests[port].abort();
                }
                pendingRequests[port] = xhr;
            }
        });
    } else {
        ajax = $.ajax;
        $.ajax = function(settings) {
            var mode = ("mode" in settings ? settings : $.ajaxSettings).mode,
                port = ("port" in settings ? settings : $.ajaxSettings).port;
            if (mode === "abort") {
                if (pendingRequests[port]) {
                    pendingRequests[port].abort();
                }
                pendingRequests[port] = ajax.apply(this, arguments);
                return pendingRequests[port];
            }
            return ajax.apply(this, arguments);
        };
    }
    return $;
}));
/*!
 * jQuery Validation Plugin 1.11.1
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright 2013 Jörn Zaefferer
 * Released under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */
(function($) {
    function stripHtml(value) {
        return value.replace(/<.[^<>]*?>/g, ' ').replace(/&nbsp;|&#160;/gi, ' ').replace(/[.(),;:!?%#$'"_+=\/\-]*/g, '');
    }
    jQuery.validator.addMethod("maxWords", function(value, element, params) {
        return this.optional(element) || stripHtml(value).match(/\b\w+\b/g).length <= params;
    }, jQuery.validator.format("Bitten geben Sie maximal {0} Wörter ein."));
    jQuery.validator.addMethod("minWords", function(value, element, params) {
        return this.optional(element) || stripHtml(value).match(/\b\w+\b/g).length >= params;
    }, jQuery.validator.format("Bitten geben Sie mindestens {0} Wörter ein."));
    jQuery.validator.addMethod("rangeWords", function(value, element, params) {
        var valueStripped = stripHtml(value);
        var regex = /\b\w+\b/g;
        return this.optional(element) || valueStripped.match(regex).length >= params[0] && valueStripped.match(regex).length <= params[1];
    }, jQuery.validator.format("Bitte geben Sie zwischen {0} und {1} Wörter ein."));
    jQuery.validator.addMethod("exactlength", function(value, element, params) {
        return this.optional(element) || value.length == params;
    }, jQuery.validator.format("Bitten geben Sie genau {0} Zeichen ein."));
    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zäüöß]+$/i.test(value);
    }, "Geben Sie bitte nur Buchstaben ein.");
    jQuery.validator.addMethod("letterswithdot", function(value, element) {
        return this.optional(element) || /^[a-zäüöß\-.\s]+$/i.test(value);
    }, "Bitte verwenden Sie nur Buchstaben, Bindestrich und Punkt.");
    jQuery.validator.addMethod("letterswithbasicpunc", function(value, element) {
        return this.optional(element) || /^[a-zäüöß\-.,()'"\s]+$/i.test(value);
    }, "Geben Sie bitte nur Buchstaben und Punktionszeichen ein.");
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[äüöß\w]+$/i.test(value);
    }, "Verwenden Sie bitte nur Buchstaben, Ziffern und Unterstriche.");
    jQuery.validator.addMethod("alphanumericwithdot", function(value, element) {
        return this.optional(element) || /^[äüöß\w\-.()\s]+$/i.test(value);
    }, "Bitte verwenden Sie nur Buchstaben, Zahlen und den Punkt.");
    jQuery.validator.addMethod("alphanumericwithbasicpunc", function(value, element) {
        return this.optional(element) || /^[äüöß\w\-.,()'"\s]+$/i.test(value);
    }, "Bitte verwenden Sie nur Buchstaben, Zahlen und Punktionszeichen ein.");
    jQuery.validator.addMethod("nowhitespace", function(value, element) {
        return this.optional(element) || /^\S+$/i.test(value);
    }, "Leerzeichen sind nicht erlaubt.");
    jQuery.validator.addMethod("integer", function(value, element) {
        return this.optional(element) || /^-?\d+$/.test(value);
    }, "Nur positive und negative ganze Zahlen sind erlaubt.");
    jQuery.validator.addMethod("iban", function(value, element) {
        if (this.optional(element)) {
            return true;
        }
        var iban = value.replace(/ /g, "").toUpperCase(),
            ibancheckdigits = "",
            leadingZeroes = true,
            cRest = "",
            cOperator = "",
            countrycode,
            ibancheck,
            charAt,
            cChar,
            bbanpattern,
            bbancountrypatterns,
            ibanregexp,
            i,
            p;
        countrycode = iban.substring(0, 2);
        bbancountrypatterns = {
            "AL": "\\d{8}[\\dA-Z]{16}",
            "AD": "\\d{8}[\\dA-Z]{12}",
            "AT": "\\d{16}",
            "AZ": "[\\dA-Z]{4}\\d{20}",
            "BE": "\\d{12}",
            "BH": "[A-Z]{4}[\\dA-Z]{14}",
            "BA": "\\d{16}",
            "BR": "\\d{23}[A-Z][\\dA-Z]",
            "BG": "[A-Z]{4}\\d{6}[\\dA-Z]{8}",
            "CR": "\\d{17}",
            "HR": "\\d{17}",
            "CY": "\\d{8}[\\dA-Z]{16}",
            "CZ": "\\d{20}",
            "DK": "\\d{14}",
            "DO": "[A-Z]{4}\\d{20}",
            "EE": "\\d{16}",
            "FO": "\\d{14}",
            "FI": "\\d{14}",
            "FR": "\\d{10}[\\dA-Z]{11}\\d{2}",
            "GE": "[\\dA-Z]{2}\\d{16}",
            "DE": "\\d{18}",
            "GI": "[A-Z]{4}[\\dA-Z]{15}",
            "GR": "\\d{7}[\\dA-Z]{16}",
            "GL": "\\d{14}",
            "GT": "[\\dA-Z]{4}[\\dA-Z]{20}",
            "HU": "\\d{24}",
            "IS": "\\d{22}",
            "IE": "[\\dA-Z]{4}\\d{14}",
            "IL": "\\d{19}",
            "IT": "[A-Z]\\d{10}[\\dA-Z]{12}",
            "KZ": "\\d{3}[\\dA-Z]{13}",
            "KW": "[A-Z]{4}[\\dA-Z]{22}",
            "LV": "[A-Z]{4}[\\dA-Z]{13}",
            "LB": "\\d{4}[\\dA-Z]{20}",
            "LI": "\\d{5}[\\dA-Z]{12}",
            "LT": "\\d{16}",
            "LU": "\\d{3}[\\dA-Z]{13}",
            "MK": "\\d{3}[\\dA-Z]{10}\\d{2}",
            "MT": "[A-Z]{4}\\d{5}[\\dA-Z]{18}",
            "MR": "\\d{23}",
            "MU": "[A-Z]{4}\\d{19}[A-Z]{3}",
            "MC": "\\d{10}[\\dA-Z]{11}\\d{2}",
            "MD": "[\\dA-Z]{2}\\d{18}",
            "ME": "\\d{18}",
            "NL": "[A-Z]{4}\\d{10}",
            "NO": "\\d{11}",
            "PK": "[\\dA-Z]{4}\\d{16}",
            "PS": "[\\dA-Z]{4}\\d{21}",
            "PL": "\\d{24}",
            "PT": "\\d{21}",
            "RO": "[A-Z]{4}[\\dA-Z]{16}",
            "SM": "[A-Z]\\d{10}[\\dA-Z]{12}",
            "SA": "\\d{2}[\\dA-Z]{18}",
            "RS": "\\d{18}",
            "SK": "\\d{20}",
            "SI": "\\d{15}",
            "ES": "\\d{20}",
            "SE": "\\d{20}",
            "CH": "\\d{5}[\\dA-Z]{12}",
            "TN": "\\d{20}",
            "TR": "\\d{5}[\\dA-Z]{17}",
            "AE": "\\d{3}\\d{16}",
            "GB": "[A-Z]{4}\\d{14}",
            "VG": "[\\dA-Z]{4}\\d{16}"
        };
        bbanpattern = bbancountrypatterns[countrycode];
        if (typeof bbanpattern !== "undefined") {
            ibanregexp = new RegExp("^[A-Z]{2}\\d{2}" + bbanpattern + "$", "");
            if (!(ibanregexp.test(iban))) {
                return false;
            }
        }
        ibancheck = iban.substring(4, iban.length) + iban.substring(0, 4);
        for (i = 0; i < ibancheck.length; i++) {
            charAt = ibancheck.charAt(i);
            if (charAt !== "0") {
                leadingZeroes = false;
            }
            if (!leadingZeroes) {
                ibancheckdigits += "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(charAt);
            }
        }
        for (p = 0; p < ibancheckdigits.length; p++) {
            cChar = ibancheckdigits.charAt(p);
            cOperator = "" + cRest + "" + cChar;
            cRest = cOperator % 97;
        }
        return cRest === 1;
    }, "Geben Sie bitte eine gültige IBAN an.");
    jQuery.validator.addMethod("bic", function(value, element) {
        return this.optional(element) || /^([A-Z]{6}[A-Z2-9][A-NP-Z1-9])(X{3}|[A-WY-Z0-9][A-Z0-9]{2})?$/.test(value.toUpperCase());
    }, "Geben Sie bitte eine gültige BIC an.");
    jQuery.validator.addMethod("email2", function(value, element, param) {
        return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(value);
    }, jQuery.validator.messages.email);
    jQuery.validator.addMethod("url2", function(value, element, param) {
        return this.optional(element) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
    }, jQuery.validator.messages.url);
    jQuery.validator.addMethod("pattern", function(value, element, param) {
        if (this.optional(element)) {
            return true;
        }
        if (typeof param === 'string') {
            param = new RegExp('^(?:' + param + ')$');
        }
        return param.test(value);
    }, "Ungültiges Format.");
    $.extend($.validator.messages, {
        required: "Dieses Feld ist ein Pflichtfeld.",
        maxlength: $.validator.format("Geben Sie bitte maximal {0} Zeichen ein."),
        minlength: $.validator.format("Geben Sie bitte mindestens {0} Zeichen ein."),
        rangelength: $.validator.format("Geben Sie bitte mindestens {0} und maximal {1} Zeichen ein."),
        email: "Geben Sie bitte eine gültige E-Mail Adresse ein.",
        url: "Geben Sie bitte eine gültige URL ein.",
        date: "Bitte geben Sie ein gültiges Datum ein.",
        number: "Geben Sie bitte eine Nummer ein.",
        digits: "Geben Sie bitte nur Ziffern ein.",
        equalTo: "Bitte denselben Wert wiederholen.",
        range: $.validator.format("Geben Sie bitte einen Wert zwischen {0} und {1} ein."),
        max: $.validator.format("Geben Sie bitte einen Wert kleiner oder gleich {0} ein."),
        min: $.validator.format("Geben Sie bitte einen Wert größer oder gleich {0} ein."),
        creditcard: "Geben Sie bitte eine gültige Kreditkarten-Nummer ein."
    });
}(jQuery));
if (!brbr)
    var brbr = {};
brbr.bestellung = {
    init: function() {
        $(".artikel-input input").keypress(function(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        }).on('keyup change', function(e) {
            brbr.bestellung.updateCosts();
        });
        brbr.bestellung.updateCosts();
        brbr.bestellung.pagination.init();
        $('#message').css("height", 38);
        $("#message").focus(function() {
            $(this).animate({
                "height": "+=54px"
            }, "slow");
        });
        $("#message").blur(function() {
            $(this).animate({
                "height": "-=54px"
            }, "slow");
        });
    },
    updateCosts: function() {
        brbr.ajax(URL_BASE + 'ajax/KostenBestellung.php', function(textstatus, data) {
            if (textstatus == "success" && data.kosten) {
                var summe = parseFloat(data.kosten.artikel) + parseFloat(data.kosten.liefergebuehr);
                $('span#kosten').html(summe.toFixed(2).replace('.', ',') + '&nbsp;&euro;');
            }
        }, $('#content form').serialize());
    },
    pagination: {
        options: {
            'display': [{
                'widthMax': 400,
                'cols': 1
            }, {
                'widthMax': 470,
                'cols': 2
            }, {
                'widthMax': 530,
                'cols': 3
            }, {
                'widthMax': 600,
                'cols': 4
            }, {
                'widthMax': 670,
                'cols': 5
            }, {
                'widthMax': 767,
                'cols': 6
            }, {
                'widthMax': 790,
                'cols': 4
            }, {
                'widthMax': 870,
                'cols': 5
            }, {
                'widthMax': 940,
                'cols': 6
            }, ],
            'index2colName': ['wochentag-mo', 'wochentag-di', 'wochentag-mi', 'wochentag-do', 'wochentag-fr', 'wochentag-sa', 'wochentag-so'],
        },
        numCols: 1,
        currDay: 0,
        isScreenSmall: false,
        init: function() {
            var screenWidth = window.resizeEvtRememberWidth = $(document).width(),
                displays = brbr.bestellung.pagination.options.display;
            brbr.bestellung.pagination.numCols = 1;
            brbr.bestellung.pagination.isScreenSmall = false;
            for (var i = 0; i < displays.length; i++) {
                if (screenWidth <= displays[i].widthMax) {
                    brbr.bestellung.pagination.numCols = displays[i].cols;
                    brbr.bestellung.pagination.isScreenSmall = true;
                    brbr.bestellung.pagination.pageBtnUp();
                    break;
                }
            }
            $(window).bind('resize', function(e) {
                window.resizeEvt;
                window.resizeEvtRememberWidth;
                $(window).resize(function() {
                    clearTimeout(window.resizeEvt);
                    window.resizeEvt = setTimeout(function() {
                        if (window.resizeEvtRememberWidth != $(document).width()) {
                            brbr.bestellung.pagination.init();
                        }
                    }, 220);
                });
            });
            brbr.bestellung.pagination.changeWeekdayView();
        },
        changeWeekdayView: function() {
            var cssClass = 'bestellung-nav',
                i2col = brbr.bestellung.pagination.options.index2colName,
                currDay = brbr.bestellung.pagination.currDay;
            if (brbr.bestellung.pagination.isScreenSmall) {
                $('table#bestellung [class*="wochentag-"]').hide();
                for (var i = currDay; i < (currDay + brbr.bestellung.pagination.numCols); i++) {
                    $('table#bestellung .' + i2col[i]).show();
                }
                if (!$('table#bestellung .' + cssClass).length) {
                    $('<div class="' + cssClass + ' pull-right">' + '<div class="input-group input-group-sm"><div class="input-group-btn">' + '<a href="#" class="btn btn-sm btn-info ' + cssClass + '-button ' + cssClass + '-down" tabindex="-1" title="Wochentag zurück"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>' + '<span class="input-group-addon" style="display:inline; padding: 6px;">Tag</span>' + '<a href="#" class="btn btn-sm btn-info ' + cssClass + '-button ' + cssClass + '-up"  tabindex="-1" title="Wochentag vor"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>' + '</div></div>' + '</div>').prependTo('#artikel-th');
                    $('.' + cssClass + '-up').click(brbr.bestellung.pagination.pageBtnUp);
                    $('.' + cssClass + '-down').click(brbr.bestellung.pagination.pageBtnDown);
                }
            } else {
                $('table#bestellung [class*="wochentag-"]').show();
                $('.' + cssClass).remove();
            }
        },
        pageBtnUp: function(event) {
            if (event) {
                event.preventDefault();
            }
            var limitUpper = 7 - brbr.bestellung.pagination.numCols,
                nextDay = brbr.bestellung.pagination.currDay + 1;
            if (nextDay <= limitUpper) {
                brbr.bestellung.pagination.currDay = nextDay;
                brbr.bestellung.pagination.changeWeekdayView();
            } else {
                brbr.bestellung.pagination.currDay = limitUpper;
            }
        },
        pageBtnDown: function(event) {
            if (event) {
                event.preventDefault();
            }
            var nextDay = brbr.bestellung.pagination.currDay - 1;
            if (nextDay >= 0) {
                brbr.bestellung.pagination.currDay = nextDay;
                brbr.bestellung.pagination.changeWeekdayView();
            }
        },
    },
};
var URL_BASE = '/';
jQuery(document).ready(function() {
    brbr.init();
});
if (!brbr)
    var brbr = {};
brbr.init = function() {
    if (brbr[brbr.module] && $.isFunction(brbr[brbr.module].init)) {
        brbr[brbr.module].init();
    }
    brbr.initValidationPlugin('form:last');
    $('.popup').popup();
};
brbr.initValidationPlugin = function(selector) {
    $((selector)).validate({
        debug: false,
        rules: {
            "betreff": {
                required: true,
                maxlength: 80,
            },
            "nachricht": {
                required: true,
                minWords: 3,
            },
            "message": {
                minWords: 3,
            },
            "vorname": {
                required: true,
                maxlength: 30,
                letterswithdot: true,
            },
            "nachname": {
                required: true,
                maxlength: 30,
                letterswithdot: true,
            },
            "strasse": {
                required: true,
                maxlength: 50,
                alphanumericwithdot: true,
            },
            "hausnr": {
                required: true,
                maxlength: 5,
                alphanumericwithdot: true,
            },
            "plz": {
                required: true,
                exactlength: 5,
                digits: true,
            },
            "ort": {
                required: true,
                maxlength: 30,
                letterswithdot: true,
            },
            "ortsteil": {
                maxlength: 30,
                letterswithbasicpunc: true,
            },
            "telefon": {
                required: true,
                maxlength: 20,
                digits: true,
            },
            "telvw": {
                required: true,
                minlength: 3,
                maxlength: 10,
                digits: true,
            },
            "telrn": {
                required: true,
                minlength: 3,
                maxlength: 13,
                digits: true,
            },
            "email": {
                required: true,
                email: true,
            },
            "inhaber": {
                required: true,
                maxlength: 27,
                letterswithdot: true,
            },
            "bankname": {
                required: true,
                maxlength: 35,
                letterswithdot: true,
            },
            "ktonr": {
                required: true,
                maxlength: 10,
                digits: true,
            },
            "blz": {
                required: true,
                exactlength: 8,
                digits: true,
            },
            "iban": {
                required: true,
                iban: true,
            },
            "bic": {
                required: true,
                bic: true,
            },
            "passwort": {
                required: true,
            },
            "passwort_alt": {
                required: true,
            },
            "passwort_neu1": {
                required: true,
            },
            "passwort_neu2": {
                required: true,
                equalTo: "#passwort_neu1",
            },
            "agb": {
                required: true,
            },
        },
        highlight: function(element) {
            if ($(element).parent('.input-group').length || $(element).prop('type') === 'checkbox' || $(element).prop('type') === 'radio')
                $(element).closest('.form-group').addClass('has-error');
            else
                $(element).addClass('has-error');
        },
        unhighlight: function(element) {
            if ($(element).parent('.input-group').length || $(element).prop('type') === 'checkbox' || $(element).prop('type') === 'radio')
                $(element).closest('.form-group').removeClass('has-error');
            else
                $(element).removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block has-error',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio')
                error.insertAfter(element.parent());
            else
                $(element.parent()).append(error);
        }
    });
};
brbr.onlyDigits = function(selector) {
    $(selector).keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (!e.ctrlKey && (e.which < 48 || e.which > 57))) {
            return false;
        }
    });
}
brbr.bool = brbr.boolean = function(text) {
    text = (text === undefined) ? '' : text;
    switch (text.toLowerCase()) {
    case "true":
    case "yes":
    case "y":
    case "ja":
    case "j":
    case "on":
    case "1":
    case 1:
        return true;
    case "false":
    case "no":
    case "n":
    case "nein":
    case "off":
    case "0":
    case 0:
    case null:
        return false;
    default:
        return Boolean(text);
    }
};
brbr.ajax = function(url, callback, postvars, options) {
    var settings = {
        url: url,
        async: true,
        cache: true,
        dataType: "json",
    };
    settings = $.extend({}, settings, options);
    settings.error = function(XMLHttpRequest, textStatus, errorThrown) {
        if ($.isFunction(callback)) {
            callback("failure", errorThrown);
        }
        brbr.message({
            title: "Verbindungsfehler",
            message: textStatus + " : " + errorThrown
        });
    };
    settings.success = function(data, textStatus) {
        if ($.isFunction(callback)) {
            callback("success", data);
        }
        if (data && ("message" in data)) {
            brbr.message(data.message);
        }
    };
    if (postvars) {
        settings.type = "POST";
        settings.data = postvars;
    } else {
        settings.type = "GET";
    }
    $.ajax(settings);
};
brbr.message = function(msgObj) {
    var box;
    if ($('.alert-container').length)
        box = $('.alert-container').first();
    else {
        box = $('<div>').addClass('.alert-container').prependTo('#content');
    }
    var mclass;
    if (!msgObj.type)
        msgObj.type = 'undefined';
    switch (msgObj.type.toLowerCase()) {
    case 'info':
        mclass = 'alert-warning';
        break;
    case 'success':
        mclass = 'alert-success';
        break;
    case 'error':
        mclass = 'alert-danger';
        break;
    default:
        mclass = 'alert-info';
        break;
    }
    ;
    var message = $('<div>').addClass('alert alert-dismissable').addClass(mclass);
    var button = $('<button type="button" class="close">').html('&times;').click(function() {
        message.softRemove()
    });
    var title = $('<h4>').addClass('alert-heading').html(msgObj.title);
    var text = $('<span>').html(msgObj.message);
    if (msgObj.data) {
        var list = $('<ul>');
        $.each(msgObj.data, function(i, item) {
            $('<li>').html(item).appendTo(list);
        });
        list.appendTo(text);
    }
    var closable = (msgObj.closable !== undefined) ? brbr.bool(msgObj.closable) : true;
    message.hide();
    message.append(((closable) ? button : null)).append(title).append(text).prependTo(box);
    $('html').scrollTop();
    message.slideDown();
    if (closable) {
        if (msgObj.type == 'success')
            setTimeout(autoDismiss, 10000);
        else if (msgObj.type == 'info')
            setTimeout(autoDismiss, 20000);
        else if (msgObj.type == 'error')
            setTimeout(autoDismiss, 60000);
        else
            setTimeout(autoDismiss, 30000);
    }
    function autoDismiss() {
        if ($(message).is(":hover")) {
            message.mouseleave(function() {
                setTimeout(autoDismiss, 5000);
            });
        }
        else
            button.click();
    }
};
brbr.delete = function(url, callback, text) {
    var _title = text.title || "Löschen";
    var _message = text.message || "Sind Sie sicher?";
    bootbox.dialog({
        locale: 'de',
        message: _message,
        title: _title,
        buttons: {
            cancel: {
                label: "Abbruch",
                className: "btn-default",
                callback: function() {}
            },
            delete: {
                label: "<span class=\"glyphicon glyphicon-trash\"></span> <span>Löschen</span>",
                className: "btn-danger",
                callback: function() {
                    brbr.ajax(url, callback);
                }
            }
        }
    });
};
if (!brbr)
    var brbr = {};
brbr.kontakt = {
    init: function() {
        $("#betreff").focus();
        $('#nachricht').css("height", 38);
        $("#nachricht").focus(function() {
            if ($("#nachricht").val().trim().length == 0) {
                $("#nachricht").animate({
                    "height": "+=64px"
                }, "slow");
            }
        });
        $("#nachricht").blur(function() {
            if ($("#nachricht").val().trim().length == 0) {
                $("#nachricht").animate({
                    "height": "-=64px"
                }, "slow");
                $("#nachricht").val("");
            }
        });
        $('#plz').autocomplete({
            serviceUrl: URL_BASE + 'ajax/OrtByPlz.php',
            minChars: 3,
            maxHeight: 160,
            width: 304,
            onSelect: function(value, data) {
                $("#ort").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                return '<strong>' + value.substr(0, currentValue.length) + '</strong>' + value.substr(currentValue.length) + ' - ' + data;
            },
        });
        $('#ort').autocomplete({
            serviceUrl: URL_BASE + 'ajax/PlzByOrt.php',
            minChars: 3,
            maxHeight: 160,
            width: 304,
            onSelect: function(value, data) {
                $("#plz").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                var exp = new RegExp(currentValue, "i");
                var n = value.search(exp);
                return data + ' - ' + value.substr(0, n) + '<strong>' + value.substr(n, currentValue.length) + '</strong>' + value.substr(n + currentValue.length);
            },
        });
    },
};
if (!brbr)
    var brbr = {};
brbr.kundendaten = {
    init: function() {
        brbr.onlyDigits("#plz, #telvw, #telrn");
        $("#vorname").focus();
        $('#vorwahl').autocomplete({
            serviceUrl: URL_BASE + 'ajax/Vorwahl.php',
            minChars: 2,
            width: 60,
        });
        $('#strasse').autocomplete({
            serviceUrl: URL_BASE + 'ajax/Strasse.php',
            minChars: 3,
        });
        $('#plz').autocomplete({
            serviceUrl: URL_BASE + 'ajax/OrtByPlz.php',
            minChars: 3,
            maxHeight: 160,
            width: 304,
            onSelect: function(value, data) {
                $("#ort").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                return '<strong>' + value.substr(0, currentValue.length) + '</strong>' + value.substr(currentValue.length) + ' - ' + data;
            },
        });
        $('#ort').autocomplete({
            serviceUrl: URL_BASE + 'ajax/PlzByOrt.php',
            minChars: 3,
            maxHeight: 160,
            width: 304,
            onSelect: function(value, data) {
                $("#plz").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                var exp = new RegExp(currentValue, "i");
                var n = value.search(exp);
                return data + ' - ' + value.substr(0, n) + '<strong>' + value.substr(n, currentValue.length) + '</strong>' + value.substr(n + currentValue.length);
            },
        });
        $('#bic').autocomplete({
            serviceUrl: URL_BASE + 'ajax/BankByBIC.php',
            minChars: 3,
            maxHeight: 160,
            width: 400,
            onSelect: function(value, data) {
                $("#bankname").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                return '<strong>' + value.substr(0, currentValue.length) + '</strong>' + value.substr(currentValue.length) + ' - ' + data;
            },
        });
        $('#bankname').autocomplete({
            serviceUrl: URL_BASE + 'ajax/BICByBank.php',
            minChars: 3,
            maxHeight: 160,
            width: 400,
            onSelect: function(value, data) {
                $("#bic").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                var exp = new RegExp(currentValue, "i");
                var n = value.search(exp);
                return data + ' - ' + value.substr(0, n) + '<strong>' + value.substr(n, currentValue.length) + '</strong>' + value.substr(n + currentValue.length);
            },
        });
    },
};
if (!brbr)
    var brbr = {};
brbr.liefergebiet = {
    init: function() {
        $('img[usemap]').maphilight({
            fillColor: 'df0028',
            fillOpacity: 0.3,
            strokeColor: '93001a',
            strokeOpacity: 0.6,
            strokeWidth: 2,
            shadow: true,
        });
    },
};
if (!brbr)
    var brbr = {};
brbr.lieferpause = {
    init: function() {
        var firstValidDate = new Date($('#firstValidDateTimestamp').val() * 1000);
        $('#datepicker.input-daterange').datepicker({
            format: "dd.mm.yyyy",
            weekStart: 1,
            startDate: firstValidDate,
            defaultViewDate: firstValidDate,
            maxViewMode: 1,
            language: "de",
            calendarWeeks: true,
            todayHighlight: true,
            disableTouchKeyboard: true,
            orientation: "top auto",
        }).on('changeDate', function(e) {
            $(this).datepicker('hide');
        });
    },
};
if (!brbr)
    var brbr = {};
brbr.login = {
    init: function() {
        brbr.onlyDigits("#telefon");
        $("#telefon").focus();
    },
};
if (!brbr)
    var brbr = {};
brbr['meine-daten'] = {
    init: function() {
        brbr.onlyDigits("#plz, #telvw, #telrn");
        $('#tabs a[href="#' + location.hash.replace('#', '') + '"]').tab('show');
        brbr.initValidationPlugin('#lieferanschrift form, #bankverbindung form, #onlinezugang form');
        $('#strasse').autocomplete({
            serviceUrl: URL_BASE + 'ajax/Strasse.php',
            minChars: 3,
        });
        $('#plz').autocomplete({
            serviceUrl: URL_BASE + 'ajax/OrtByPlz.php',
            minChars: 3,
            width: 340,
            onSelect: function(value, data) {
                $("#ort").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                return '<strong>' + value.substr(0, currentValue.length) + '</strong>' + value.substr(currentValue.length) + ' - ' + data;
            },
        });
        $('#ort').autocomplete({
            serviceUrl: URL_BASE + 'ajax/PlzByOrt.php',
            minChars: 3,
            width: 340,
            onSelect: function(value, data) {
                $("#plz").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                var exp = new RegExp(currentValue, "i");
                var n = value.search(exp);
                return data + ' - ' + value.substr(0, n) + '<strong>' + value.substr(n, currentValue.length) + '</strong>' + value.substr(n + currentValue.length);
            },
        });
        $('#bic').autocomplete({
            serviceUrl: URL_BASE + 'ajax/BankByBIC.php',
            minChars: 3,
            width: 380,
            onSelect: function(value, data) {
                $("#bank").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                return '<strong>' + value.substr(0, currentValue.length) + '</strong>' + value.substr(currentValue.length) + ' - ' + data;
            },
        });
        $('#bank').autocomplete({
            serviceUrl: URL_BASE + 'ajax/BICByBank.php',
            minChars: 4,
            width: 380,
            onSelect: function(value, data) {
                $("#bic").val(data);
            },
            fnFormatResult: function(value, data, currentValue) {
                var exp = new RegExp(currentValue, "i");
                var n = value.search(exp);
                return data + ' - ' + value.substr(0, n) + '<strong>' + value.substr(n, currentValue.length) + '</strong>' + value.substr(n + currentValue.length);
            },
        });
    },
};
if (!brbr)
    var brbr = {};
brbr.sonderbestellung = {
    init: function() {
        var firstValidDate = new Date($('#firstValidDateTimestamp').val() * 1000);
        var selectedDate = new Date($('#selectedDateTimestamp').val() * 1000);
        $('#datepicker').datepicker({
            format: "dd.mm.yyyy",
            weekStart: 1,
            startDate: firstValidDate,
            endDate: "+6m",
            defaultViewDate: selectedDate,
            maxViewMode: 1,
            language: "de",
            calendarWeeks: true,
            todayHighlight: true,
        }).on('changeDate', function(e) {
            var selected_unixtimestamp = Math.round(e.date.getTime() / 1000);
            $('#selectedDateTimestamp').val(selected_unixtimestamp);
            $('form#aedate').submit();
        });
        $(".artikel-input input").keypress(function(e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        }).on('keyup change', function(e) {
            brbr.sonderbestellung.updateCosts();
        });
        brbr.sonderbestellung.updateCosts();
    },
    updateCosts: function() {
        var selectedDate = new Date($('#selectedDateTimestamp').val() * 1000);
        brbr.ajax(URL_BASE + 'ajax/KostenSonderbestellung.php?date=' + selectedDate.getTime(), function(textstatus, data) {
            if (textstatus == "success" && data.kosten) {
                var summe = parseFloat(data.kosten.artikel) + parseFloat(data.kosten.liefergebuehr);
                $('span#kosten').html(summe.toFixed(2).replace('.', ',') + '&nbsp;&euro;');
            }
        }, $('form#aebestellung').serialize());
    },
};
