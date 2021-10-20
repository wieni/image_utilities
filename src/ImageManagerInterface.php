<?php

namespace Drupal\image_utilities;

use Drupal\file\FileInterface;
use Drupal\image_utilities\Exception\ImageStyleNotFoundException;

interface ImageManagerInterface
{
    /** @throws ImageStyleNotFoundException */
    public function getImageUrl(FileInterface $file, string $imageStyleId, bool $directUrlIfNotSupported = false): ?string;

    /** @throws ImageStyleNotFoundException */
    public function getImageUrlByAnyObject($file, string $imageStyleId, bool $directUrlIfNotSupported = false): ?string;
}
