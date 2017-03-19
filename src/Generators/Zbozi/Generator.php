<?php
namespace Mk\Feed\Generators\Zbozi;

use Mk\Feed\Generators\BaseGenerator;

/**
 * Class ZboziGenerator
 * @author Martin Knor <martin.knor@gmail.com>
 * @package Mk\Feed\Generators
 * @see http://napoveda.seznam.cz/cz/zbozi/specifikace-xml-pro-obchody/specifikace-xml-feedu/ Documentation
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