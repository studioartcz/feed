<?php
namespace Mk\Feed\Generators\Google;

use Mk\Feed\Generators\BaseGenerator;

/**
 * Class Generator
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators\Google
 * @see https://support.google.com/merchants/answer/188494 Documentation
 */
abstract class Generator extends BaseGenerator {

    /**
     * Name of template directory
     */
    const TEMPLATE_DIR = 'latte';

    /**
     * @param $name
     * @return string
     */
    protected function getTemplate($name)
    {
        return sprintf(
            '%s/%s/%s.latte',
            __DIR__,
            self::TEMPLATE_DIR,
            $name
        );
    }

}