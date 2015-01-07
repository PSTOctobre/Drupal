<?php

/**
 * @file
 * Contains \Drupal\search_api\Annotation\SearchApiTracker.
 */

namespace Drupal\search_api\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Search API tracker annotation object.
 *
 * @Annotation
 */
class SearchApiTracker extends Plugin {

  /**
   * The tracker plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the tracker plugin.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The description of the tracker.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $description;

}