"use strict";

function _classCallCheck(t, i) {
    if (!(t instanceof i)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck(t, i) {
    if (!(t instanceof i)) throw new TypeError("Cannot call a class as a function")
}
var app = angular.module("app", ['ui.router', 'angularUtils.directives.dirPagination']);
app.directive("newsBlock", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/news-block.html"
    }
}), app.directive("social", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/social.html"
    }
}), app.directive("entries", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/entries.html"
    }
}), app.directive("job", function() {
    return {
        restrict: "A",
        templateUrl: "templates/common/job.html"
    }
}), app.directive("contest", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/contest.html"
    }
}), app.directive("actual", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/actual.html"
    }
}), app.directive("horo", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/horo.html"
    }
}), app.directive("widgets", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/widgets.html"
    }
}), app.directive("interview", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/interview.html"
    }
}), app.directive("newsShort", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/news-short.html"
    }
}), app.directive("afishaRight", function() {
    return {
        restrict: "A",
        templateUrl: "templates/common/afisha-right.html"
    }
}), app.directive("newsRight", function() {
    return {
        restrict: "A",
        templateUrl: "templates/common/news-right.html"
    }
}), app.controller("newsBlockController", ["$scope", function(t) {
    t.tab = 0, t.setTab = function(i) {
        t.tab = i
    }, t.items = [{
        title: "Новости",
        main: {
            image: "https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на — «Коммерсант»",
            description: "Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой.",
            link: "javascript:;"
        },
        other: [{
            image: "https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на орах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }]
    }, {
        title: "Интервью",
        main: {
            image: "https://img04.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/f/b3/fb34038eb4b24e10bd09727803b1e9a4.png",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            description: "Кан­ди­дат в гу­бер­на­торы Забай­калья Наталья Жда­нова не вклю­чила се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой.",
            link: "javascript:;"
        },
        other: [{
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }]
    }, {
        title: "Обзоры",
        main: {
            image: "https://img01.rl0.ru/afisha/c500x250/daily.afisha.ru/uploads/images/3/60/360c98b521ee4f7c90f4c04ce320f913.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Ждановнового сенатора при победе на выборах — «Коммерсант»",
            description: "Кан­ди­дат в гу­бер­на­торы Забсе­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции Р",
            link: "javascript:;"
        },
        other: [{
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменобеде на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img01.rl0.ru/afisha/c500x250/daily.afisha.ru/uploads/images/3/60/360c98b521ee4f7c90f4c04ce320f913.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева нвыборах — «Коммерсант»",
            link: "javascript:;"
        }]
    }, {
        title: "Мнения",
        main: {
            image: "https://img08.rl0.ru/afisha/c600x600/daily.afisha.ru/uploads/images/2/b6/2b6ccb9f4f56416885f48ad65ba822c4.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на вы",
            description: "Кан­дай­калья Наталья Жда­нова не вклю­чила се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой.",
            link: "javascript:;"
        },
        other: [{
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова замобеде на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева а выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img08.rl0.ru/afisha/c600x600/daily.afisha.ru/uploads/images/2/b6/2b6ccb9f4f56416885f48ad65ba822c4.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева рсант»",
            link: "javascript:;"
        }]
    }, {
        title: "Репортажи",
        main: {
            image: "https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жабеде на выборах — «Коммерсант»",
            description: "Кан­ди­дат в гу­бер­на­торы Забай­калья Наталила се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой.",
            link: "javascript:;"
        },
        other: [{
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нов",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова замго сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }]
    }, {
        title: "Проекты",
        main: {
            image: "https://img04.rl0.ru/afisha/c500x250/daily.afisha.ru/uploads/images/e/84/e848a2a80fd94a89a707a12e8e5364b8.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуго сенатора при победе на выборах — «Коммерсант»",
            description: "Кан­ди­дат в гу­бер­на­торы Забай­калья Налю­чила се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой.",
            link: "javascript:;"
        },
        other: [{
            image: "https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуесант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }, {
            image: "https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",
            date: "27.06.16",
            rubric: "Политика",
            title: "Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",
            link: "javascript:;"
        }]
    }]
}]), app.controller("peopleController", ["$scope", function(t) {
    t.tab = 0, t.titles = ["Гости и эксперты"]
}]), app.controller("afishaController", ["$scope", function(t) {
    t.tab = 0, t.titles = ["АФИША", "КИНО(15)", "КОНЦЕРТЫ(20)", "ВЫСТАВКИ(15)", "ТЕАТРЫ(17)", "СПОРТ(12)", "РАЗВЛЕЧЕНИЯ(10)", "ДРУГОЕ(5)", "ДЕТЯМ(16)"]
}]), app.controller("catalogController", ["$scope", function(t) {
    t.tab = 0, t.titles = ["Справочник"], t.btnText = "Все организации", t.btn = !0
}]), app.controller("salesController", ["$scope", function(t) {
    t.tab = 0, t.titles = ["Скидки"], t.btnText = "Все скидки", t.btn = !1
}]),
    function() {
        var t = function() {
            var t = document.querySelector(".js-headline");
            t.getBoundingClientRect().bottom <= 35 ? t.classList.add("is-headline-fixed") : t.classList.remove("is-headline-fixed")
        };
        window.addEventListener("scroll", function() {
            t()
        })
    }();
var _createClass = function() {
        function t(t, i) {
            for (var e = 0; e < i.length; e++) {
                var a = i[e];
                a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(t, a.key, a)
            }
        }
        return function(i, e, a) {
            return e && t(i.prototype, e), a && t(i, a), i
        }
    }(),
    Login = function() {
        function t() {
            _classCallCheck(this, t), this.headlineLogin = document.querySelector(".js-headline-login"), this.loginShadow = document.querySelector(".js-login-shadow"), this.regBtn = document.querySelector(".js-login-regestration-btn"), this.regOk = document.querySelector(".js-login-tomain"), this.setEvents()
        }
        return _createClass(t, [{
            key: "bodyFixed",
            value: function(t) {
                var i = void 0 === t ? !1 : t,
                    e = document.body.getBoundingClientRect().top;
                i ? (document.body.classList.add("is-noscroll"), document.body.style.top = e + "px") : (document.body.classList.remove("is-noscroll"), document.body.style.top = null, window.scrollTo(0, -e))
            }
        }, {
            key: "setLoginWindow",
            value: function(t) {
                t ? document.body.classList.add("is-login-active") : document.body.classList.remove("is-login-active", "is-registration"), this.bodyFixed(t)
            }
        }, {
            key: "setRegistration",
            value: function(t) {
                t ? document.body.classList.add("is-registration") : document.body.classList.remove("is-registration")
            }
        }, {
            key: "setEvents",
            value: function() {
                var t = this;
                this.headlineLogin.addEventListener("click", function() {
                    t.setLoginWindow(!0)
                }), this.loginShadow.addEventListener("click", function() {
                    t.setLoginWindow(!1)
                }), this.regBtn.addEventListener("click", function() {
                    t.setRegistration(!0)
                }), this.regOk.addEventListener("click", function() {
                    t.setRegistration(!1)
                })
            }
        }]), t
    }();
app.directive("login", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/login.html",
        link: function() {
            new Login
        }
    }
});
var _createClass = function() {
        function t(t, i) {
            for (var e = 0; e < i.length; e++) {
                var a = i[e];
                a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(t, a.key, a)
            }
        }
        return function(i, e, a) {
            return e && t(i.prototype, e), a && t(i, a), i
        }
    }(),
    ScrollBar = function() {
        function t(i) {
            _classCallCheck(this, t), this.window = i, this.content = this.window.querySelector(".js-scrollbar-body"), this.indicator = this.window.querySelector(".js-scrollbar-pane"), this.state = !1, this.content.offsetHeight > this.window.offsetHeight && (this.setEvents(), this.indicator.style.height = this.window.offsetHeight / this.content.offsetHeight * 100 + "%")
        }
        return _createClass(t, [{
            key: "bodyScroll",
            value: function(t) {
                return this.state ? (t.preventDefault && t.preventDefault(), t.returnValue = !1, !1) : void 0
            }
        }, {
            key: "scroll",
            value: function(t) {
                var i = this.window.offsetHeight,
                    e = this.content.offsetHeight,
                    a = t.wheelDelta,
                    r = +t.currentTarget.style.top.replace("px", "");
                if (!(Math.abs(a) > 80)) {
                    if (this.state = !0, i >= e || 0 === r && a > 0 || -r >= e - i && 0 > a) return void(this.state = !1);
                    r >= -20 && a > 0 || -r >= e - i - 20 && 0 > a ? 0 > a ? r-- : r++ : r += a, this.indicator.style.top = r / (e - i) * -100 + 17 + "px", this.content.style.top = r + "px"
                }
            }
        }, {
            key: "setEvents",
            value: function() {
                var t = this;
                this.content.style.top = "0px", document.body.addEventListener("mousewheel", function(i) {
                    t.bodyScroll(i)
                }), this.content.addEventListener("mousewheel", function(i) {
                    t.scroll(i)
                }), this.content.addEventListener("mouseenter", function() {
                    t.state = !0
                }), this.content.addEventListener("mouseleave", function() {
                    t.state = !1
                })
            }
        }]), t
    }();
app.directive("multiple", function() {
    return {
        restrict: "A",
        templateUrl: "templates/main/multiple.html",
        link: function() {
            for (var t = document.querySelectorAll(".js-scrollbar"), i = 0; i < t.length; i++) new ScrollBar(t[i])
        }
    }
}),
    function() {
        var t = document.querySelector(".js-up"),
            i = function r(t, i, e) {
                if (!(0 >= e)) {
                    var a = i - t.scrollTop,
                        s = a / e * 10;
                    setTimeout(function() {
                        t.scrollTop = t.scrollTop + s, t.scrollTop !== i && r(t, i, e - 10)
                    }, 10)
                }
            },
            e = function() {
                document.querySelector(".js-menu").getBoundingClientRect().bottom <= 0 ? t.classList.remove("is-hidden") : t.classList.add("is-hidden")
            },
            a = function() {
                return i(document.body, 0, 500)
            };
        window.addEventListener("scroll", function() {
            return e()
        }), t.addEventListener("click", function() {
            return a()
        })
    }();

app.config(['$locationProvider', '$stateProvider', function($locationProvider, $stateProvider) {
    $locationProvider.html5Mode(true);
    $stateProvider
        .state('main', {
            url: '/',
            templateUrl: 'templates/main/layout.html'
        })
        .state('news', {
            url: '/news',
            templateUrl: 'templates/news/layout.html',
            title: 'Новости'
        })
        .state('afisha', {
            url: '/afisha',
            templateUrl: 'templates/afisha/layout.html',
            title: 'Афиша'
        })
        .state('companies', {
            url: '/companies',
            templateUrl: 'templates/companies/layout.html',
            title: 'Справочник предприятий'
        });

}]);
app.directive('title', ['$rootScope', '$timeout',
    function($rootScope, $timeout) {
        var defaultTitle = 'Мой Сыктывкар';
        return {
            link: function() {
                var listener = function(event, toState) {
                    $timeout(function() {
                        $rootScope.title = (toState.title) ? toState.title + ' | ' + defaultTitle : defaultTitle;
                    });
                };
                $rootScope.$on('$stateChangeSuccess', listener);
            }
        };
    }
]);
app.directive("news", function() {
    return {
        restrict: "A",
        templateUrl: "templates/news/news.html"
    }
});
app.directive("companies", function() {
    return {
        restrict: "A",
        templateUrl: "templates/companies/companies.html"
    }
});
app.controller("newsController", ["$scope", function(t) {
    t.tab = 0, t.setTab = function(i) {
        t.tab = i;
    }, t.items=[{title:"Новости",news:[{type:"Новость дня!",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на орах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жаого сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",
        rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img06.rl0.ru/afisha/c1000x500/daily.afisha.ru/uploads/images/4/ad/4ad8555c4e324ca881b006d53d412037.jpg",date:"27.06.16",rubric:"Политика",title:"нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатораборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]},{title:"Интервью",news:[{type:"Новость дня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]},{title:"Обзоры",news:[{type:"Новость дня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменобеде на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img01.rl0.ru/afisha/c500x250/daily.afisha.ru/uploads/images/3/60/360c98b521ee4f7c90f4c04ce320f913.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева нвыборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]},{title:"Мнения",news:[{type:"Новость дня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова замобеде на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева а выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img08.rl0.ru/afisha/c600x600/daily.afisha.ru/uploads/images/2/b6/2b6ccb9f4f56416885f48ad65ba822c4.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева рсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]},{title:"Репортажи",news:[{type:"Новость дня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нов",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова замго сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]},{title:"Проекты",news:[{type:"Новость дня!",image:"https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуесант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Актуально!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Сегодня!",image:"https://img07.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/0/47/047d46f966824bf3a6c9d988056a9479.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."},{type:"Интересно",image:"https://img05.rl0.ru/afisha/c500x500/daily.afisha.ru/uploads/images/8/77/8776d63bf7044120bf8848f04e4d19fe.jpg",date:"27.06.16",rubric:"Политика",title:"Жданова заменит Жамсуева на нового сенатора при победе на выборах — «Коммерсант»",link:"javascript:;",description:"Кан­ди­дат в гу­бер­на­торы се­нато­ра Ба­ира Жам­су­ева в трой­ку сво­их кан­ди­датов на пост пред­ста­вите­ля ре­ги­она в Сове­те фе­дера­ции РФ, один из ко­торых ока­жет­ся в се­нате при по­беде Жда­новой."}]}];
    t.typeClass = function(type) {
        var color = 'red';
        if (type == 'Новость дня!' || type == 'Интересно') {
            color = 'green'
        }
        return color == 'red' ? 'news__list-type_red' : 'news__list-type_green';
    }
}]);
app.controller("companiesController", ["$scope", function($scope) {
    $scope.tabs = [{
        title: 'Предприятия'
    }, {
        title: 'Товары'
    }];

    $scope.currentTab = 'Предприятия';

    $scope.tabClick = function (tab) {
        $scope.currentTab = tab.title;
    }

    $scope.tabIsActive = function(title) {
        return title == $scope.currentTab;
    }
}]);