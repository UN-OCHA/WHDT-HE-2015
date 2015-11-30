var Popup =(function($) {
  return function(id, content, events) {
    this.id = id;
    this.content = $.extend({
      className: "",
      image: "",
      header: "",
      subheader: "",
      tagline: "",
      content: "",
      fbLink: null,
      twLink: null,
      closeText: "close"
    }, content);

    this.events = $.extend(true, {
      onClose: function() {
        console.log("XXXX", this);
        var that = this;
        console.log(that);
        that.close();
      }
    }, events);

    this.rendered = null;
    this.close = function() {
      var that = this;
      console.log(that);
      that.rendered.hide();
    };

    this.open = function() {
      var that = this;
      that.rendered.show();
    }

    this.initialize = function() {
      var that = this;

      //produce popup
      that.rendered = function() {
        console.log(that.content.image);
          var rendered = $("<div class='popup "+ that.content.className +"'/>").attr("id", that.id).attr("data-id", that.id)
						  .append("<div class='popup-close' />")
                          .append(
                            $("<div class='popup-content'/>")
                              .css("backgroundImage", that.content.image ? "url("+ that.content.image + ")" : "none")
                              .append(
                              $("<div class='text-area' />")
                                .append($("<h1 />").text(that.content.header))
                                .append($("<h2 />").text(that.content.subheader))
                                .append($("<h5 />").text(that.content.tagline))
                                .append(that.content.content)
                                .append($("<p class='social-area'/>")
                                  .append(
                                          $("<ul class='nav' />")
                                          .append($("<li class='flipbook-popup-link'/>").append(
                                        $("<a href='javascript: void(null);' target='_blank' class='pop-change link-icon'/>")
                                        .attr("data-target", "flipbook-" + that.id)
                                        .html("<i class='spr spr-social-view icon'></i>")
                                      ))
                                    .append($("<li />").append(
                                        $("<a href='" + that.content.downloadLink + "' target='_blank' class='link-icon'/>").html("<i class='spr spr-social-dl icon'></i>")
                                      ))
                                      .append(
                                          $("<li />").append(
                                            $("<a href='javascript: void(null);' class='facebook-share-button'/>").html("<i class='spr spr-social-fb'></i>")
                                              .attr("data-fb",that.content.fbLink)
                                              .attr("data-title", that.content.subheader)
                                              .attr("data-desc", that.content.tagline)
                                              .attr("data-image", that.content.image)
                                          )
                                      )
                                      .append($("<li/>").append(
                                        $("<a href='javascript: void(null);' class='twitter-share-button'/>")
                                          .attr("data-tweet", that.content.tweet)
                                          .attr("data-twLink", that.content.twLink)
                                          .html("<i class='spr spr-social-tw'></i>"))
                                      )
                                    )
                                )
                                .append($("<p class='close-area'/>")
                                      .append(
                                            $("<a href='javascript: void(null);' class='close-popup'/>").text(that.content.closeText))
                                )
                            )
                     );
          return rendered;
        }();

      that.rendered.on("popup-close", function() { that.events.onClose.call(that); });
      that.rendered.find(".close-popup, .popup-close").on("click", function() { that.rendered.trigger("popup-close"); });
      $("body").append(that.rendered);
    };

    this.initialize();
  };
}(jQuery));

Popup.helper = function(id, className, image, header, subheader, tagline, content, fbLink, twLink) {
  return new Popup(id, {image: image, className: className, header: header, subheader: subheader, tagline: tagline, content: content, fbLink: fbLink, twLink: twLink});
}

var Section = (function($) {
  return function(target, options) {
    this.id = target;
    this.container = $(target);
    this.options = $.extend({
                    isShowing: false,
                    hide: { opacity: 0},
                    show: { opacity: 1 },
                    duration: 1000,
                    onHide: null,
                    onShow: null
                   }, options);

    this.show = function() {
      var that = this;
      that.container.animate(that.options.show, that.options.duration);

      that.container.trigger("section-mod-show");
    };

    this.hide = function() {
      var that = this;
      that.container.animate(that.options.hide, that.options.duration);

      that.container.trigger("section-mod-hide");
    };

    this.initialize = function() {
      var that = this;
      if (that.options.isShowing) {
        that.container.css(that.options.show);
      } else {
        that.container.css(that.options.hide);
      }

      // if (that.options.onHide && typeof that.options.onHide == "function") {
        that.container.on("section-mod-hide", function(event) {

          if (that.options.onHide && typeof that.options.onHide == "function") {
            that.options.onHide();
          }

          event.stopPropagation();

        });
      // }

      // if (that.options.onShow && typeof that.options.onShow == "function") {
        that.container.on("section-mod-show", function(event) {
          if (that.options.onShow && typeof that.options.onShow == "function") {
            that.options.onShow();
          }
          event.stopPropagation(); });
      // }
    };

    this.initialize();
  };

})(jQuery);


var SectionManager = function(sectionArray) {
  /***
    sections: array of sections
  */
  var sections = sectionArray;

  return {
    show: function(selector) {
      sections
        .filter(function(d) { return selector != d.id })
        .forEach(function(d) { d.hide(); });

      var targ = sections.filter(function(d) { return selector == d.id })[0];
      targ.show();
    },

    showAll: function() {
      sections.forEach(function(d) { d.show(); });
    },
    hideAll: function() {
      sections.forEach(function(d) { d.hide(); });
    }

  }
};

var PopupManager = function(popupArray) {
  var popups = popupArray;
  var currentPopup = null;

  return {
    currentPopup: function() { return currentPopup; },
    show: function(id) {
      if(currentPopup) { currentPopup.close(); }

      if (id != "") {
        currentPopup = popups.filter(function(d){ return d.id == id; })[0];
        currentPopup.open();
      }
    },
    hide: function() {
      currentPopup.close();
      currentPopup = null;
    }
  }
}
