<?php
/**
 * @file
 * Contains Drupal\leaflet_markercluster\Plugin\views\style\MarkerClusterGroup.
 */

namespace Drupal\leaflet_markercluster\Plugin\views\style;

use Drupal\leaflet_views\Plugin\views\style\MarkerLayerGroup;


/**
 * Style plugin to render leaflet features in layer clusters.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "leaflet_marker_cluster",
 *   title = @Translation("Clustered Markers"),
 *   help = @Translation("Render data as leaflet marker clusters."),
 *   display_types = {"leaflet"}
 * )
 */
class MarkerClusterGroup extends MarkerLayerGroup {

  /**
   * {@inheritdoc}
   */
  protected function renderLeafletGroup(array $features = array(), $title = '', $level = 0) {
    if (!in_array('leaflet_markercluster/wrapper', $this->view->element['#attached']['library'])) {
      $this->view->element['#attached']['library'][] = 'leaflet_markercluster/wrapper';
    }
    return array(
      'group' => TRUE,
      'group_type' => 'markercluster',
      'label' => $title,
      'features' => $features,
    );
  }

}
