(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

{
    // helper functions
    var MathUtils = {
        // map number x from range [a, b] to [c, d]
        map: function map(x, a, b, c, d) {
            return (x - a) * (d - c) / (b - a) + c;
        },
        // linear interpolation
        lerp: function lerp(a, b, n) {
            return (1 - n) * a + n * b;
        }
    };

    // body element
    var body = document.body;

    // calculate the viewport size
    var winsize = void 0;
    var calcWinsize = function calcWinsize() {
        return winsize = { width: window.innerWidth, height: window.innerHeight };
    };
    calcWinsize();
    // and recalculate on resize
    window.addEventListener('resize', calcWinsize);

    // scroll position and update function
    var docScroll = void 0;
    var getPageYScroll = function getPageYScroll() {
        return docScroll = window.pageYOffset || document.documentElement.scrollTop;
    };
    window.addEventListener('scroll', getPageYScroll);

    // Item

    var Item = function () {
        function Item(el) {
            var _this = this;

            _classCallCheck(this, Item);

            // the .item element
            this.DOM = { el: el };
            // the inner image
            this.DOM.image = this.DOM.el.querySelector('.item__img');
            this.renderedStyles = {
                // here we define which property will change as we scroll the page and the items is inside the viewport
                // in this case we will be translating the image on the y-axis
                // we interpolate between the previous and current value to achieve a smooth effect
                innerTranslationY: {
                    // interpolated value
                    previous: 0,
                    // current value
                    current: 0,
                    // amount to interpolate
                    ease: 0.1,
                    // the maximum value to translate the image is set in a CSS variable (--overflow)
                    maxValue: parseInt(getComputedStyle(this.DOM.image).getPropertyValue('--overflow'), 10),
                    // current value setter
                    // the value of the translation will be:
                    // when the item's top value (relative to the viewport) equals the window's height (items just came into the viewport) the translation = minimum value (- maximum value)
                    // when the item's top value (relative to the viewport) equals "-item's height" (item just exited the viewport) the translation = maximum value
                    setValue: function setValue() {
                        var maxValue = _this.renderedStyles.innerTranslationY.maxValue;
                        var minValue = -1 * maxValue;
                        return Math.max(Math.min(MathUtils.map(_this.props.top - docScroll, winsize.height, -1 * _this.props.height, minValue, maxValue), maxValue), minValue);
                    }
                }
            };
            // set the initial values
            this.update();
            // use the IntersectionObserver API to check when the element is inside the viewport
            // only then the element translation will be updated
            this.observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    return _this.isVisible = entry.intersectionRatio > 0;
                });
            });
            this.observer.observe(this.DOM.el);
            // init/bind events
            this.initEvents();
        }

        _createClass(Item, [{
            key: 'update',
            value: function update() {
                // gets the item's height and top (relative to the document)
                this.getSize();
                // sets the initial value (no interpolation)
                for (var key in this.renderedStyles) {
                    this.renderedStyles[key].current = this.renderedStyles[key].previous = this.renderedStyles[key].setValue();
                }
                // translate the image
                this.layout();
            }
        }, {
            key: 'getSize',
            value: function getSize() {
                var rect = this.DOM.el.getBoundingClientRect();
                this.props = {
                    // item's height
                    height: rect.height,
                    // offset top relative to the document
                    top: docScroll + rect.top
                };
            }
        }, {
            key: 'initEvents',
            value: function initEvents() {
                var _this2 = this;

                window.addEventListener('resize', function () {
                    return _this2.resize();
                });
            }
        }, {
            key: 'resize',
            value: function resize() {
                // on resize rest sizes and update the translation value
                this.update();
            }
        }, {
            key: 'render',
            value: function render() {
                // update the current and interpolated values
                for (var key in this.renderedStyles) {
                    this.renderedStyles[key].current = this.renderedStyles[key].setValue();
                    this.renderedStyles[key].previous = MathUtils.lerp(this.renderedStyles[key].previous, this.renderedStyles[key].current, this.renderedStyles[key].ease);
                }
                // and translates the image
                this.layout();
            }
        }, {
            key: 'layout',
            value: function layout() {
                // translates the image
                this.DOM.image.style.transform = 'translate3d(0,' + this.renderedStyles.innerTranslationY.previous + 'px,0)';
            }
        }]);

        return Item;
    }();

    // SmoothScroll


    var SmoothScroll = function () {
        function SmoothScroll() {
            var _this3 = this;

            _classCallCheck(this, SmoothScroll);

            // the <main> element
            this.DOM = { main: document.querySelector('main') };
            // the scrollable element
            // we translate this element when scrolling (y-axis)
            this.DOM.scrollable = this.DOM.main.querySelector('div[data-scroll]');
            // the items on the page
            this.items = [];
            [].concat(_toConsumableArray(this.DOM.main.querySelectorAll('.content > .item'))).forEach(function (item) {
                return _this3.items.push(new Item(item));
            });
            // here we define which property will change as we scroll the page
            // in this case we will be translating on the y-axis
            // we interpolate between the previous and current value to achieve the smooth scrolling effect
            this.renderedStyles = {
                translationY: {
                    // interpolated value
                    previous: 0,
                    // current value
                    current: 0,
                    // amount to interpolate
                    ease: 0.1,
                    // current value setter
                    // in this case the value of the translation will be the same like the document scroll
                    setValue: function setValue() {
                        return docScroll;
                    }
                }
            };
            // set the body's height
            this.setSize();
            // set the initial values
            this.update();
            // the <main> element's style needs to be modified
            this.style();
            // init/bind events
            this.initEvents();
            // start the render loop
            requestAnimationFrame(function () {
                return _this3.render();
            });
        }

        _createClass(SmoothScroll, [{
            key: 'update',
            value: function update() {
                // sets the initial value (no interpolation) - translate the scroll value
                for (var key in this.renderedStyles) {
                    this.renderedStyles[key].current = this.renderedStyles[key].previous = this.renderedStyles[key].setValue();
                }
                // translate the scrollable element
                this.layout();
            }
        }, {
            key: 'layout',
            value: function layout() {
                // translates the scrollable element
                this.DOM.scrollable.style.transform = 'translate3d(0,' + -1 * this.renderedStyles.translationY.previous + 'px,0)';
            }
        }, {
            key: 'setSize',
            value: function setSize() {
                // set the heigh of the body in order to keep the scrollbar on the page
                body.style.height = this.DOM.scrollable.scrollHeight + 'px';
            }
        }, {
            key: 'style',
            value: function style() {
                // the <main> needs to "stick" to the screen and not scroll
                // for that we set it to position fixed and overflow hidden 
                this.DOM.main.style.position = 'fixed';
                this.DOM.main.style.width = this.DOM.main.style.height = '100%';
                this.DOM.main.style.top = this.DOM.main.style.left = 0;
                this.DOM.main.style.overflow = 'hidden';
            }
        }, {
            key: 'initEvents',
            value: function initEvents() {
                var _this4 = this;

                // on resize reset the body's height
                window.addEventListener('resize', function () {
                    return _this4.setSize();
                });
            }
        }, {
            key: 'render',
            value: function render() {
                var _this5 = this;

                // update the current and interpolated values
                for (var key in this.renderedStyles) {
                    this.renderedStyles[key].current = this.renderedStyles[key].setValue();
                    this.renderedStyles[key].previous = MathUtils.lerp(this.renderedStyles[key].previous, this.renderedStyles[key].current, this.renderedStyles[key].ease);
                }
                // and translate the scrollable element
                this.layout();

                // for every item
                var _iteratorNormalCompletion = true;
                var _didIteratorError = false;
                var _iteratorError = undefined;

                try {
                    for (var _iterator = this.items[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                        var item = _step.value;

                        // if the item is inside the viewport call it's render function
                        // this will update the item's inner image translation, based on the document scroll value and the item's position on the viewport
                        if (item.isVisible) {
                            item.render();
                        }
                    }

                    // loop..
                } catch (err) {
                    _didIteratorError = true;
                    _iteratorError = err;
                } finally {
                    try {
                        if (!_iteratorNormalCompletion && _iterator.return) {
                            _iterator.return();
                        }
                    } finally {
                        if (_didIteratorError) {
                            throw _iteratorError;
                        }
                    }
                }

                requestAnimationFrame(function () {
                    return _this5.render();
                });
            }
        }]);

        return SmoothScroll;
    }();

    /***********************************/
    /********** Preload stuff **********/

    // Preload images


    var preloadImages = function preloadImages() {
        return new Promise(function (resolve, reject) {
            imagesLoaded(document.querySelectorAll('.item__img'), { background: true }, resolve);
        });
    };

    // And then..
    preloadImages().then(function () {
        // Remove the loader
        document.body.classList.remove('loading');
        // Get the scroll position
        getPageYScroll();
        // Initialize the Smooth Scrolling
        new SmoothScroll();
    });
}

$(window).on('load', function () {
    $('footer').addClass('fixed');

    var bdH = parseInt($('body').outerHeight() + 500) + "px";
    console.log(bdH);
    $('body').css({
        "height": bdH
    });
});

},{}]},{},[1])//# sourceMappingURL=portfolio.js.map
