<?php

namespace Drupal\image_utilities\Twig\Extension;

use Drupal\image_utilities\ImageManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ImageStyleExtension extends AbstractExtension
{
    /** @var ImageManagerInterface */
    protected $imageManager;

    public function __construct(
        ImageManagerInterface $imageManager
    ) {
        $this->imageManager = $imageManager;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('image_style', [$this, 'applyImageStyle']),
        ];
    }

    public function applyImageStyle($file, string $style = 'default', bool $directUrlIfNotSupported = false): ?string
    {
        // TODO: Dispatch cache metadata

        $url = $this->imageManager->getImageUrlByAnyObject($file, $style, $directUrlIfNotSupported);

        return file_url_transform_relative($url);
    }
}
