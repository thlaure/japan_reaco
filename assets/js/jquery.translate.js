/**
 * @file jquery.translate.js
 * @brief jQuery plugin to translate text in the client side.
 * @author Manuel Fernandes
 * @site
 * @version 0.9
 * @license MIT license <http://www.opensource.org/licenses/MIT>
 *
 * translate.js is a jQuery plugin to translate text in the client side.
 *
 */

(function ($) {
  $.fn.translate = function (options) {
    var that = this; //a reference to ourselves

    var settings = {
      css: "trn",
      lang:
        "en" /*,
      t: {
        "translate": {
          pt: "tradução",
          br: "tradução"
        }
      }*/,
    };
    settings = $.extend(settings, options || {});
    if (settings.css.lastIndexOf(".", 0) !== 0)
      //doesn't start with '.'
      settings.css = "." + settings.css;

    var t = settings.t;

    //public methods
    this.lang = function (l) {
      if (l) {
        settings.lang = l;
        this.translate(settings); //translate everything
      }

      return settings.lang;
    };

    this.get = function (index) {
      var res = index;

      try {
        res = t[index][settings.lang];
      } catch (err) {
        //not found, return index
        return index;
      }

      if (res) return res;
      else return index;
    };

    this.g = this.get;

    //main
    this.find(settings.css).each(function (i) {
      var $this = $(this);

      var trn_key = $this.attr("data-trn-key");
      if (!trn_key) {
        trn_key = $this.html();
        $this.attr("data-trn-key", trn_key); //store key for next time
      }

      $this.html(that.get(trn_key));
    });

    return this;
  };
})(jQuery);

var dict = {
  "to be translated text 1": {
    en: "to be fefefefefef text 1",
    fr: "texte à traduire 1",
    jp: "texte à qsdf 1",
  },
  "to be translated text 2": {
    en: "to be translated text 2",
    fr: "texte à traduire 2",
    jp: "texte qsdf traduire 2",
  },
  "to be translated text 3": {
    en: "to be translated text 3",
    fr: "texte à traduire 3",
    jp: "texte qsdf traduire 3",
  },
};

var translator = $(".lang-wrapper").translate({
  lang: "en",
  t: dict,
});

$(".lang_selector").on("click", function (e) {
  e.preventDefault();
  var elLanguage = $(this).attr("data-value");
  translator.lang(elLanguage);
});
