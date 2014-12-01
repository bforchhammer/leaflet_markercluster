(function ($) {
  var create_callback = Drupal.Leaflet.prototype.create_feature_group;
  Drupal.Leaflet.prototype.create_feature_group = function (feature) {
    if (feature.group_type == 'markercluster') {
      return new L.MarkerClusterGroup(feature.options);
    }
    return create_callback.apply(this, arguments);
  };
})(jQuery);
