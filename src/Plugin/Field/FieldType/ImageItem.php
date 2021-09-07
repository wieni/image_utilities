<?php

namespace Drupal\image_utilities\Plugin\Field\FieldType;

use Drupal\file\FileInterface;
use Drupal\image\Plugin\Field\FieldType\ImageItem as ImageItemBase;

class ImageItem extends ImageItemBase
{
    public function getFile(): ?FileInterface
    {
        return $this->get('entity')->getValue();
    }

    public function getAlt(): ?string
    {
        return $this->get('alt')->getValue();
    }

    public function getTitle(): ?string
    {
        return $this->get('title')->getValue();
    }
}
