<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_68c83e6130d55763f8d9b3e1278adfdbc2e1ff8c3e8208ffef631f269de4f260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  19 => 1,  330 => 127,  326 => 126,  321 => 125,  318 => 124,  313 => 119,  306 => 118,  292 => 117,  288 => 115,  286 => 114,  280 => 113,  277 => 112,  260 => 111,  252 => 105,  249 => 103,  247 => 102,  241 => 99,  234 => 95,  230 => 93,  224 => 90,  221 => 89,  219 => 88,  213 => 85,  205 => 82,  200 => 80,  197 => 79,  192 => 78,  189 => 77,  183 => 121,  181 => 77,  177 => 75,  175 => 63,  165 => 59,  160 => 57,  157 => 56,  154 => 55,  152 => 54,  147 => 53,  145 => 52,  142 => 51,  139 => 50,  137 => 49,  132 => 48,  129 => 47,  124 => 46,  121 => 45,  119 => 44,  109 => 37,  99 => 30,  95 => 29,  90 => 26,  87 => 25,  77 => 16,  72 => 14,  67 => 13,  64 => 12,  58 => 11,  53 => 139,  50 => 15,  48 => 25,  41 => 22,  39 => 12,  34 => 11,  24 => 2,);
    }
}
