<?php

namespace Drupal\gsb_data_index\Plugin\ComputedField;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface;
use Drupal\computed_field\Plugin\ComputedField\ComputedFieldBase;
use Drupal\computed_field\Plugin\ComputedField\SingleValueTrait;

/**
 * TODO: class docs.
 *
 * @ComputedField(
 *   id = "gsb_data_index_available_to_field",
 *   label = @Translation("Available To Computed Field Plugin"),
 *   field_type = "string",
 * )
 */
class AvailableToComputedFieldPlugin extends ComputedFieldBase {

  use SingleValueTrait;
  
  /**
   * {@inheritdoc}
   */
  public function singleComputeValue(EntityInterface $host_entity, ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition): string {
    // Returns the value for a computed field.
    
    
    
    return 'Hello World';
  }
}
