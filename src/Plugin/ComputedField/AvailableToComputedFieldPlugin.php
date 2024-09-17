<?php

namespace Drupal\gsb_data_index\Plugin\ComputedField;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface;
use Drupal\computed_field\Plugin\ComputedField\ComputedFieldBase;

/**
 * TODO: class docs.
 *
 * @AvailableToComputedField(
 *   id = "gsb_data_index_available_to_computed_field_plugin",
 *   label = @Translation("Available To Computed Field Plugin"),
 *   field_type = "string",
 * )
 */
class AvailableToComputedFieldPlugin extends ComputedFieldBase {

  /**
   * {@inheritdoc}
   */
  public function computeValue(EntityInterface $host_entity, ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition): array {
    // Returns the value for a computed field.
    
    
    
    return 'Hello World';
  }
}
