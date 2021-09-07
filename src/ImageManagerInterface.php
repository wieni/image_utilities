<?php

namespace Drupal\image_utilities;

use Drupal\file\FileInterface;

interface ImageManagerInterface
{
    public function getImageUrl(FileInterface $file, string $imageStyleId): ?string;

    public function getImageUrlByAnyObject($file, string $imageStyleId): ?string;
}
