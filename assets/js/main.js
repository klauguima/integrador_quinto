/*
# =============================================================================
#   Sparkline Linechart JS
# =============================================================================
*/


(function() {
  

  $(document).ready(function() {

    /*
    # =============================================================================
    #   Masonry
    # =============================================================================
    */
    $container = $("#social-container").masonry();
    $container.imagesLoaded(function() {
      return $container.masonry({
        "isFitWidth": true,
        gutter: 20,
        isFitWidth: true,
        itemSelector: ".item"
      });
    });
  });

}).call(this);
