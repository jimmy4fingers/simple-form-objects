<?php
/**
 * Created by PhpStorm.
 * User: jamesle
 * Date: 20/08/2018
 * Time: 11:42
 */

namespace FormObjects\Elements;

interface HTMLDecoratorInterface
{
    public function element(ElementInterface $element);
    public function beforeElement(ElementInterface $element);
    public function AfterElement(ElementInterface $element);
    public function parentElement(ElementInterface $element);
    public function render();
}