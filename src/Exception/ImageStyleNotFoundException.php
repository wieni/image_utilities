<?php

namespace Drupal\image_utilities\Exception;

/**
 * Plugin exception class to be thrown when an image style ID could not be found.
 */
class ImageStyleNotFoundException extends \Exception
{
    public function __construct($imageStyleId, $message = '', $code = 0, \Exception $previous = NULL)
    {
        if (empty($message)) {
            $message = sprintf("Image style ID '%s' was not found.", $imageStyleId);
        }

        parent::__construct($message, $code, $previous);
    }
}
