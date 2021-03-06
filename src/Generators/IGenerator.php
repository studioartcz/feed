<?php
namespace Mk\Feed\Generators;

/**
 * Interface IGenerator
 * @package Mk\Feed\Generators
 */
interface IGenerator {

    /**
     * Generate file
     * @return mixed
     */
    public function generate();

    /**
     * Save file
     * @param $filename
     * @return mixed
     */
    public function save($filename);
}