(window.webpackJsonp = window.webpackJsonp || []).push([
    ["app"], {
        "7QBw": function(t, e, a) {
            var o, n, s;
            a("oVuX"), a("+2oP"), a("DQNa"), a("qePV"), a("07d7"), a("TWNs"), a("rB9j"), a("JfAA"), a("Rm1S"), a("UxlC"), a("EnZy"), a("R5XZ"),
                function(i) {
                    "use strict";
                    n = [a("EVdn")], void 0 === (s = "function" == typeof(o = function(t) {
                        function e(t) {
                            var e = t.toString().replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1");
                            return new RegExp(e)
                        }

                        function a(t) {
                            return function(a) {
                                var n = a.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);
                                if (n)
                                    for (var s = 0, i = n.length; i > s; ++s) {
                                        var c = n[s].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),
                                            u = e(c[0]),
                                            l = c[1] || "",
                                            h = c[3] || "",
                                            p = null;
                                        c = c[2], r.hasOwnProperty(c) && (p = r[c], p = Number(t[p])), null !== p && ("!" === l && (p = o(h, p)), "" === l && 10 > p && (p = "0" + p.toString()), a = a.replace(u, p.toString()))
                                    }
                                return a.replace(/%%/, "%")
                            }
                        }

                        function o(t, e) {
                            var a = "s",
                                o = "";
                            return t && (1 === (t = t.replace(/(:|;|\s)/gi, "").split(/\,/)).length ? a = t[0] : (o = t[0], a = t[1])), 1 === Math.abs(e) ? o : a
                        }
                        var n = [],
                            s = [],
                            i = {
                                precision: 100,
                                elapse: !1
                            };
                        s.push(/^[0-9]*$/.source), s.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), s.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source), s = new RegExp(s.join("|"));
                        var r = {
                                Y: "years",
                                m: "months",
                                n: "daysToMonth",
                                w: "weeks",
                                d: "daysToWeek",
                                D: "totalDays",
                                H: "hours",
                                M: "minutes",
                                S: "seconds"
                            },
                            c = function(e, a, o) {
                                this.el = e, this.$el = t(e), this.interval = null, this.offset = {}, this.options = t.extend({}, i), this.instanceNumber = n.length, n.push(this), this.$el.data("countdown-instance", this.instanceNumber), o && ("function" == typeof o ? (this.$el.on("update.countdown", o), this.$el.on("stoped.countdown", o), this.$el.on("finish.countdown", o)) : this.options = t.extend({}, i, o)), this.setFinalDate(a), this.start()
                            };
                        t.extend(c.prototype, {
                            start: function() {
                                null !== this.interval && clearInterval(this.interval);
                                var t = this;
                                this.update(), this.interval = setInterval((function() {
                                    t.update.call(t)
                                }), this.options.precision)
                            },
                            stop: function() {
                                clearInterval(this.interval), this.interval = null, this.dispatchEvent("stoped")
                            },
                            toggle: function() {
                                this.interval ? this.stop() : this.start()
                            },
                            pause: function() {
                                this.stop()
                            },
                            resume: function() {
                                this.start()
                            },
                            remove: function() {
                                this.stop.call(this), n[this.instanceNumber] = null, delete this.$el.data().countdownInstance
                            },
                            setFinalDate: function(t) {
                                this.finalDate = function(t) {
                                    if (t instanceof Date) return t;
                                    if (String(t).match(s)) return String(t).match(/^[0-9]*$/) && (t = Number(t)), String(t).match(/\-/) && (t = String(t).replace(/\-/g, "/")), new Date(t);
                                    throw new Error("Couldn't cast `" + t + "` to a date object.")
                                }(t)
                            },
                            update: function() {
                                if (0 !== this.$el.closest("html").length) {
                                    var e, a = void 0 !== t._data(this.el, "events"),
                                        o = new Date;
                                    e = this.finalDate.getTime() - o.getTime(), e = Math.ceil(e / 1e3), e = !this.options.elapse && 0 > e ? 0 : Math.abs(e), this.totalSecsLeft !== e && a && (this.totalSecsLeft = e, this.elapsed = o >= this.finalDate, this.offset = {
                                        seconds: this.totalSecsLeft % 60,
                                        minutes: Math.floor(this.totalSecsLeft / 60) % 60,
                                        hours: Math.floor(this.totalSecsLeft / 60 / 60) % 24,
                                        days: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                                        daysToWeek: Math.floor(this.totalSecsLeft / 60 / 60 / 24) % 7,
                                        daysToMonth: Math.floor(this.totalSecsLeft / 60 / 60 / 24 % 30.4368),
                                        totalDays: Math.floor(this.totalSecsLeft / 60 / 60 / 24),
                                        weeks: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 7),
                                        months: Math.floor(this.totalSecsLeft / 60 / 60 / 24 / 30.4368),
                                        years: Math.abs(this.finalDate.getFullYear() - o.getFullYear())
                                    }, this.options.elapse || 0 !== this.totalSecsLeft ? this.dispatchEvent("update") : (this.stop(), this.dispatchEvent("finish")))
                                } else this.remove()
                            },
                            dispatchEvent: function(e) {
                                var o = t.Event(e + ".countdown");
                                o.finalDate = this.finalDate, o.elapsed = this.elapsed, o.offset = t.extend({}, this.offset), o.strftime = a(this.offset), this.$el.trigger(o)
                            }
                        }), t.fn.countdown = function() {
                            var e = Array.prototype.slice.call(arguments, 0);
                            return this.each((function() {
                                var a = t(this).data("countdown-instance");
                                if (void 0 !== a) {
                                    var o = n[a],
                                        s = e[0];
                                    c.prototype.hasOwnProperty(s) ? o[s].apply(o, e.slice(1)) : null === String(s).match(/^[$A-Z_][0-9A-Z_$]*$/i) ? (o.setFinalDate.call(o, s), o.start()) : t.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi, s))
                                } else new c(this, e[0], e[1])
                            }))
                        }
                    }) ? o.apply(e, n) : o) || (t.exports = s)
                }()
        },
        T29d: function(t, e) {
            function a(t) {
                var e = new Error("Cannot find module '" + t + "'");
                throw e.code = "MODULE_NOT_FOUND", e
            }
            a.keys = function() {
                return []
            }, a.resolve = a, t.exports = a, a.id = "T29d"
        },
        aual: function(t, e, a) {
            (function(t, e) {
                a("rB9j"), a("Rm1S"), a("UxlC"), a("hByQ"), a("EnZy"), a("R5XZ");
                var o = 0;
                t(window).scroll((function() {
                        if (t("#counter").offset()) {
                            var e = t("#counter").offset().top - window.innerHeight;
                            0 == o && t(window).scrollTop() > e && (t(".counter-value").each((function() {
                                var e = t(this),
                                    a = e.attr("data-count");
                                t({
                                    countNum: e.text()
                                }).animate({
                                    countNum: a
                                }, {
                                    duration: 2e3,
                                    easing: "swing",
                                    step: function() {
                                        e.text(Math.floor(this.countNum))
                                    },
                                    complete: function() {
                                        e.text(this.countNum)
                                    }
                                })
                            })), o = 1)
                        }
                    })),
                    function(t) {
                        t.fn.YouTubePopUp = function(e) {
                            var a = t.extend({
                                autoplay: 1
                            }, e);
                            t(this).on("click", (function(e) {
                                var o = t(this).attr("href");
                                if (o.match(/(youtube.com)/)) var n = "v=",
                                    s = 1;
                                if (o.match(/(youtu.be)/) || o.match(/(vimeo.com\/)+[0-9]/)) n = "/", s = 3;
                                if (o.match(/(vimeo.com\/)+[a-zA-Z]/)) n = "/", s = 5;
                                var i = o.split(n)[s].replace(/(&)+(.*)/, "");
                                if (o.match(/(youtu.be)/) || o.match(/(youtube.com)/)) var r = "https://www.youtube.com/embed/" + i + "?autoplay=" + a.autoplay;
                                if (o.match(/(vimeo.com\/)+[0-9]/) || o.match(/(vimeo.com\/)+[a-zA-Z]/)) r = "https://player.vimeo.com/video/" + i + "?autoplay=" + a.autoplay;
                                t("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe src="' + r + '" allowfullscreen></iframe></div></div>'), t(".YouTubePopUp-Wrap").hasClass("YouTubePopUp-animation") && setTimeout((function() {
                                    t(".YouTubePopUp-Wrap").removeClass("YouTubePopUp-animation")
                                }), 600), t(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click((function() {
                                    t(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue((function() {
                                        t(this).remove()
                                    }))
                                })), e.preventDefault()
                            })), t(document).keyup((function(e) {
                                27 == e.keyCode && t(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click()
                            }))
                        }
                    }(e), e((function() {
                        e("#share-button").on("click", (function() {
                            var t = document.querySelector("#myLink").value;
                            navigator.share ? (gtag("event", "share", {
                                method: "Navigator Share"
                            }), navigator.share({
                                title: "Doubler.to",
                                text: "Double your Bitcoin at ",
                                url: t
                            }).then((function() {
                                return console.log("Successful share")
                            })).catch((function(t) {
                                return console.log("Error sharing", t)
                            }))) : document.location = "mailto:?body=" + t
                        })), e("a.bla-1").YouTubePopUp(), e("a.bla-2").YouTubePopUp({
                            autoplay: 0
                        })
                    })), t(document).ready((function() {
                        t("ul.tabs li").click((function() {
                            var e = t(this).attr("data-tab");
                            t("ul.tabs li").removeClass("current"), t(".tab-content").removeClass("current"), t(this).addClass("current"), t("#" + e).addClass("current")
                        }))
                    }));
                var n = t("#dtBasicExample").DataTable({
                    paging: !0,
                    searching: !0,
                    orderClasses: !1,
                    ajax: {
                        url: "/getInvestmentData"
                    },
                    columns: [{
                        data: "date"
                    }, {
                        data: "depositWallet"
                    }, {
                        data: "withdrawalWallet"
                    }, {
                        data: "payin"
                    }, {
                        data: "payout"
                    }],
                    lengthMenu: [25, 50, 100],
                    order: [
                        [0, "desc"]
                    ],
                    dom: '<"top"i>rt<"bottom"flp><"clear">',
                    columnDefs: [{
                        targets: 0,
                        createdCell: function(e, a, o, n, s) {
                            t(e).attr("data-countdown", a)
                        }
                    }, {
                        targets: 0,
                        className: "supertruncate"
                    }, {
                        targets: 1,
                        className: "truncate",
                        orderable: !1
                    }, {
                        targets: 2,
                        className: "truncate",
                        orderable: !1
                    }],
                    createdRow: function(e, a, o) {
                        a.payin >= .1 && t(e).addClass("rankedInvestment")
                    }
                });
                t.fn.dataTable.ext.errMode = "throw";
                var s = t("#dtBasicPayout").DataTable({
                    paging: !0,
                    searching: !0,
                    orderClasses: !1,
                    ordering: !1,
                    ajax: {
                        url: "/getPayoutData"
                    },
                    columns: [{
                        data: "payin"
                    }, {
                        data: "payout"
                    }, {
                        data: "reference",
                        render: function(t, e, a, o) {
                            return "display" === e && (t = '<a href="/payout/' + t + '">' + t + "</a>"), t
                        }
                    }],
                    lengthMenu: [25, 50, 100],
                    dom: '<"top"i>rt<"bottom"flp><"clear">',
                    columnDefs: [{
                        targets: 0,
                        orderable: !1
                    }, {
                        targets: 1,
                        orderable: !1
                    }, {
                        targets: 2,
                        orderable: !1
                    }],
                    createdRow: function(e, a, o) {
                        a.payin >= .1 && t(e).addClass("rankedInvestment")
                    }
                });
                n.on("search.dt", (function() {
                    n.search().length > 2 && gtag("event", "search", {
                        search_term: n.search()
                    })
                })), s.on("search.dt", (function() {
                    s.search().length > 2 && gtag("event", "search", {
                        search_term: s.search()
                    })
                })), t("tr > td.payout").parent().each((function() {
                    t(this).clone().appendTo(".payouts-cont")
                })), t("tr > td.deposit").parent().each((function() {
                    t(this).clone().appendTo(".deposits-cont")
                })), t("[data-countdown]").each((function() {
                    var e = t(this);
                    finalDate = t(this).data("countdown"), e.countdown(finalDate, (function(a) {
                        var o = 24 * a.offset.totalDays + a.offset.hours;
                        "0:00:00" == t(this).text() ? t(this).parent().html("thank you") : e.html(a.strftime(o + ":%M:%S"))
                    }))
                }))
            }).call(this, a("EVdn"), a("EVdn"))
        },
        ng4s: function(t, e, a) {
            "use strict";
            a.r(e),
                function(t) {
                    var e = a("EVdn"),
                        o = a.n(e);
                    a("SYky"), a("q4sD"), a("MpTU");
                    o.a, window.$ = o.a, o()(document).ready((function() {
                        console.log("Coinsdoubler successfully connected to Bitcoin Blockchain.")
                    })), a("HkuG"), a("EVdn"), a("FlOX"), a("7QBw"), a("aual"), a("sZ/o")
                }.call(this, a("EVdn"))
        },
        "sZ/o": function(t, e, a) {}
    },
    [
        ["ng4s", "runtime", 0]
    ]
]);
