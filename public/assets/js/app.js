/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./app/assets/es6/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./app/assets/es6/app.js":
/*!*******************************!*\
  !*** ./app/assets/es6/app.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

      "use strict";
      eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return Enlink; });\n/* harmony import */ var _core_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./core/core */ \"./app/assets/es6/core/core.js\");\n/* harmony import */ var _theme_configurator_theme_configurator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./theme-configurator/theme-configurator */ \"./app/assets/es6/theme-configurator/theme-configurator.js\");\n\r\n\r\n\r\nclass Enlink extends _core_core__WEBPACK_IMPORTED_MODULE_0__[\"default\"] {\r\n\r\n    constructor () {\r\n        super()\r\n        this.initThemeConfig()\r\n    }\r\n\r\n    initThemeConfig() {\r\n        _theme_configurator_theme_configurator__WEBPACK_IMPORTED_MODULE_1__[\"default\"].themeConfigurator()\r\n    }\r\n}\r\n\r\n$(() => {\r\n   window.Enlink = new Enlink();\r\n});\r\n\n\n//# sourceURL=webpack:///./app/assets/es6/app.js?");
      
      /***/ }),
      
      /***/ "./app/assets/es6/core/core.js":
      /*!*************************************!*\
        !*** ./app/assets/es6/core/core.js ***!
        \*************************************/
      /*! exports provided: default */
      /***/ (function(module, __webpack_exports__, __webpack_require__) {
      
      "use strict";
      eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return Core; });\nconst sideNav = '.side-nav'\r\nconst navMenuCollapse = 'nav-menu-collapse'\r\nconst navMenuQuickExpand = 'nav-menu-quick-expand'\r\n\r\nclass Core {\r\n\r\n    constructor() {\r\n\t\tthis.sideNav();\r\n\t\tthis.pfScrollBar();\r\n\t\tthis.tooltipInit();\r\n\t\tthis.popOverInit();\r\n\t\tthis.toastInit();\r\n\t\tthis.headerNav();\r\n\t}\r\n\r\n\tsetLogo() {\r\n\t\tif($(sideNav).hasClass(navMenuCollapse) && !$(sideNav).hasClass(navMenuQuickExpand)) {\r\n\t\t\t$(`${sideNav} .logo img`).attr('src', `/assets/images/logo/${$(sideNav).hasClass('nav-menu-dark') ? 'logo-fold-white' : 'logo-fold'}.png`);\r\n\t\t} else {\r\n\t\t\t$(`${sideNav} .logo img`).attr('src', `/assets/images/logo/${$(sideNav).hasClass('nav-menu-dark') ? 'logo-white' : 'logo'}.png`);\r\n\t\t}\r\n\t}\r\n\r\n\ttoggleNavMenuQuickExpand(action, e) {\r\n\t\tconst $this = $(e.currentTarget);\r\n\t\tif($this.hasClass(navMenuCollapse)) {\r\n\t\t\t$(sideNav)[action]('nav-menu-quick-expand')\r\n\t\t\tthis.setLogo()\r\n\t\t}\r\n\t}\r\n\r\n\theaderNav() {\r\n\t\t$('.header-nav .desktop-toggle').on('click', () => {\r\n\t\t\t$(sideNav).toggleClass(navMenuCollapse)\r\n\t\t\t$('.header-nav').toggleClass('is-collapse')\r\n\t\t\t$('.content').toggleClass('is-collapse')\r\n\t\t\t$('.desktop-toggle .nav-icon').toggleClass('icon-menu')\r\n\t\t\tthis.setLogo()\r\n\t\t});\r\n\r\n\t\t$('.header-nav .mobile-toggle').on('click', () => {\r\n\t\t\t$(sideNav).addClass('is-opened')\r\n\t\t})\r\n\t}\r\n\t\r\n    sideNav() {\r\n\t\tconst active = 'active';\r\n\t\tconst drodpDownItem = '.vertical-menu .nav-menu .nav-submenu .nav-menu .nav-menu-item';\t\r\n\r\n\t\tif ($(drodpDownItem).hasClass(active)) {\r\n\t\t\t$( drodpDownItem + '.' + active).parent().parent().addClass('open') \r\n\t\t}\r\n\r\n        $('.vertical-menu .nav-menu li a').on('click', (e) => {\r\n\t\t\tconst $this = $(e.currentTarget);\r\n\r\n\t\t\tif ($this.parent().hasClass(\"open\")) {\r\n\r\n\t\t\t\t$this.parent().children('.nav-menu').slideUp(200, ()=> {\r\n\t\t\t\t\t$this.parent().removeClass(\"open\");\r\n\t\t\t\t});\r\n\r\n\t\t\t} else {\r\n\t\t\t\t$this.parent().parent().children('li.open').children('.nav-menu').slideUp(200);\r\n\t\t\t\t$this.parent().parent().children('li.open').children('a').removeClass('open');\r\n\t\t\t\t$this.parent().parent().children('li.open').removeClass(\"open\");\r\n\t\t\t\t$this.parent().children('.nav-menu').slideDown(200, ()=> {\r\n\t\t\t\t\t$this.parent().addClass(\"open\");\r\n\t\t\t\t});\r\n\t\t\t}\r\n\t\t});\r\n\r\n\t\t$(`${sideNav} .nav-logo .mobile-close`).on('click', () => {\r\n\t\t\t$(sideNav).removeClass('is-opened')\r\n\t\t})\r\n\r\n\t\t$(`${sideNav}`).on('mouseenter', e => {\r\n\t\t\tthis.toggleNavMenuQuickExpand('addClass', e)\r\n\t\t}).on('mouseleave', e => {\r\n\t\t\tthis.toggleNavMenuQuickExpand('removeClass', e)\r\n\t\t});\r\n\r\n\t} \r\n\r\n\tpfScrollBar() {\r\n\t\t$('.scrollable').perfectScrollbar();\r\n\t}\r\n\t\r\n\ttooltipInit() {\r\n\t\t$('[data-toggle=\"tooltip\"]').tooltip()\r\n\t}\r\n\r\n\tpopOverInit() {\r\n\t\tconst popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"popover\"]'))\r\n\t\tpopoverTriggerList.map(function (popoverTriggerEl) {\r\n\t\t\treturn new bootstrap.Popover(popoverTriggerEl)\r\n\t\t})\r\n\r\n\t}\r\n\r\n\ttoastInit() {\r\n\t\t$('.toast').toast();\r\n\t}\r\n}    \n\n//# sourceURL=webpack:///./app/assets/es6/core/core.js?");
      
      /***/ }),
      
      /***/ "./app/assets/es6/theme-configurator/theme-configurator.js":
      /*!*****************************************************************!*\
        !*** ./app/assets/es6/theme-configurator/theme-configurator.js ***!
        \*****************************************************************/
      /*! exports provided: default */
      /***/ (function(module, __webpack_exports__, __webpack_require__) {
      
      "use strict";
      eval("__webpack_require__.r(__webpack_exports__);\nfunction colorContrast (hex) {\r\n    if(!hex) {\r\n        return 'dark'\r\n    }\r\n    const threshold = 130;\r\n    const hRed = hexToR(hex);\r\n    const hGreen = hexToG(hex);\r\n    const hBlue = hexToB(hex);\r\n    function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}\r\n    function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}\r\n    function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}\r\n    function cutHex(h) {return (h.charAt(0) === '#') ? h.substring(1,7):h}\r\n    const cBrightness = ((hRed * 299) + (hGreen * 587) + (hBlue * 114)) / 1000;\r\n    if (cBrightness > threshold){\r\n        return 'dark'\r\n    } else { \r\n        return 'light'\r\n    }\t\r\n}\r\n\r\nfunction themeConfigurator() {\r\n\r\n    $(document).on('change', 'input[name=\"header-theme\"]', ()=>{\r\n        const context = $('input[name=\"header-theme\"]:checked').val();\r\n        const contrast = colorContrast(context)\r\n        console.log(context, contrast)\r\n        \r\n        $('.header-nav').removeClass (function (index, className) {\r\n            return (className.match (/(^|\\s)header-text-\\S+/g) || []).join(' ');\r\n        }).addClass( 'header-text-'+ contrast ).css('background-color', context);\r\n    });\r\n\r\n    $('#side-nav-theme-toggle').on('change', (e)=> {\r\n        $('.side-nav').toggleClass('nav-menu-dark');\r\n        if(e.target.checked) {\r\n            $('.header-navbar').addClass('nav-menu-dark');\r\n            $('.header-navbar').removeClass('nav-menu-light');\r\n            $('.side-nav .logo img').attr(\"src\", \"/assets/images/logo/logo-white.png\");\r\n        } else {\r\n            $('.header-navbar').addClass('nav-menu-light');\r\n            $('.header-navbar').removeClass('nav-menu-dark');\r\n            $('.side-nav .logo img').attr(\"src\", \"/assets/images/logo/logo.png\");\r\n        }\r\n        e.preventDefault();\r\n    });\r\n    \r\n    $('#side-nav-fold-toogle').on('change', (e)=> {\r\n        $('.side-nav').toggleClass('nav-menu-collapse')\r\n        $('.header-nav').toggleClass('is-collapse');\r\n        $('.content').toggleClass('is-collapse')\r\n        if($('.side-nav').hasClass('nav-menu-collapse')) {\r\n            $('.side-nav .logo img').attr('src', `/assets/images/logo/${$('.side-nav').hasClass('nav-menu-dark') ? 'logo-fold-white' : 'logo-fold'}.png`);\r\n        } else {\r\n            $('.side-nav .logo img').attr('src', `/assets/images/logo/${$('.side-nav').hasClass('nav-menu-dark') ? 'logo-white' : 'logo'}.png`);\r\n        }\r\n        e.preventDefault();\r\n    });\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = ({ themeConfigurator });\n\n//# sourceURL=webpack:///./app/assets/es6/theme-configurator/theme-configurator.js?");
      
      /***/ })
      
      /******/ });