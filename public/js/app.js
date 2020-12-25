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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Pushbar = /*#__PURE__*/function () {
  function Pushbar() {
    var config = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {
      overlay: true,
      blur: false
    };

    _classCallCheck(this, Pushbar);

    this.activeId;
    this.activeElement;
    this.overlayElement;

    if (config.overlay) {
      this.overlayElement = document.createElement('div');
      this.overlayElement.classList.add('pushbar_overlay');
      document.querySelector('body').appendChild(this.overlayElement);
    }

    if (config.blur) {
      var mainContent = document.querySelector('.pushbar_main_content');

      if (mainContent) {
        mainContent.classList.add('pushbar_blur');
      }
    }

    this.bindEvents();
  }

  _createClass(Pushbar, [{
    key: "emitOpening",
    value: function emitOpening() {
      var event = new CustomEvent('pushbar_opening', {
        bubbles: true,
        detail: {
          element: this.activeElement,
          id: this.activeId
        }
      });
      this.activeElement.dispatchEvent(event);
    }
  }, {
    key: "emitClosing",
    value: function emitClosing() {
      var event = new CustomEvent('pushbar_closing', {
        bubbles: true,
        detail: {
          element: this.activeElement,
          id: this.activeId
        }
      });
      this.activeElement.dispatchEvent(event);
    }
  }, {
    key: "handleOpenEvent",
    value: function handleOpenEvent(e) {
      e.preventDefault();
      var pushbarId = e.currentTarget.getAttribute('data-pushbar-target');
      this.open(pushbarId);
    }
  }, {
    key: "handleCloseEvent",
    value: function handleCloseEvent(e) {
      e.preventDefault();
      this.close();
    }
  }, {
    key: "handleKeyEvent",
    value: function handleKeyEvent(e) {
      if (e.keyCode === 27) this.close();
    }
  }, {
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      var triggers = document.querySelectorAll('[data-pushbar-target]');
      var closers = document.querySelectorAll('[data-pushbar-close]');
      triggers.forEach(function (trigger) {
        return trigger.addEventListener('click', function (e) {
          return _this.handleOpenEvent(e);
        }, false);
      });
      closers.forEach(function (closer) {
        return closer.addEventListener('click', function (e) {
          return _this.handleCloseEvent(e);
        }, false);
      });

      if (this.overlayElement) {
        this.overlayElement.addEventListener('click', function (e) {
          return _this.handleCloseEvent(e);
        }, false);
      }

      document.addEventListener('keyup', function (e) {
        return _this.handleKeyEvent(e);
      });
    }
  }, {
    key: "open",
    value: function open(pushbarId) {
      if (this.activeId === String(pushbarId) || !pushbarId) return;
      if (this.activeId && this.activeId !== String(pushbarId)) this.close();
      this.activeId = pushbarId;
      this.activeElement = document.querySelector("[data-pushbar-id=\"".concat(this.activeId, "\"]"));
      if (!this.activeElement) return;
      this.emitOpening();
      this.activeElement.classList.add('opened');
      var pageRootElement = document.querySelector('html');
      pageRootElement.classList.add('pushbar_locked');
      pageRootElement.setAttribute('pushbar', pushbarId);
    }
  }, {
    key: "close",
    value: function close() {
      if (!this.activeId) return;
      this.emitClosing();
      this.activeElement.classList.remove('opened');
      var pageRootElement = document.querySelector('html');
      pageRootElement.classList.remove('pushbar_locked');
      pageRootElement.removeAttribute('pushbar');
      this.activeId = null;
      this.activeElement = null;
    }
  }]);

  return Pushbar;
}();

var pushbar = new Pushbar({
  blur: true,
  overlay: true
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/franciscojavierninomiralles/wa/proyect-laravel/agenciaseobeca/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/franciscojavierninomiralles/wa/proyect-laravel/agenciaseobeca/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });