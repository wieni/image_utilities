<?php

namespace Drupal\image_utilities;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Drupal\file\FileInterface;
use Drupal\image\Plugin\Field\FieldType\ImageItem;
use Drupal\media\MediaInterface;

class ImageManager implements ImageManagerInterface
{
    /** @var EntityTypeManagerInterface */
    protected $entityTypeManager;

    public function __construct(
        EntityTypeManagerInterface $entityTypeManager
    ) {
        $this->entityTypeManager = $entityTypeManager;
    }

    public function getImageUrl(FileInterface $file, string $imageStyleId): ?string
    {
        $storage = $this->entityTypeManager->getStorage('image_style');

        if (!$imageStyle = $storage->load($imageStyleId)) {
            return null;
        }

        $path = $file->getFileUri();

        if (!$imageStyle->supportsUri($path)) {
            return null;
        }

        return $imageStyle->buildUrl($path);
    }

    public function getImageUrlByAnyObject($file, string $imageStyleId): ?string
    {
        if ($file instanceof EntityReferenceItem) {
            $file = $file->get('entity')->getValue();
        }

        if ($file instanceof MediaInterface) {
            $source = $file->getSource();
            $field = $source->getConfiguration()['source_field'] ?? null;

            if ($file->get($field)->entity) {
                $file = $file->get($field)->entity;
            }
        }

        if ($file instanceof ImageItem) {
            $file = $file->get('entity')->getValue();
        }

        if (!$file instanceof FileInterface) {
            return null;
        }

        return $this->getImageUrl($file, $imageStyleId);
    }
}
