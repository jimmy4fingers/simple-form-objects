<?php

namespace spec\FormObjects\Elements;

use FormObjects\Elements\Element;
use FormObjects\Elements\HTMLDecorator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HTMLDecoratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(HTMLDecorator::class);
    }

    function it_sets_element()
    {
        $this->setElement(new Element(['tag'=>'li']));
    }

    function it_sets_parent_elements()
    {
        $this->setParentElement(new Element(['tag'=>'div']));
    }

    function it_sets_before_elements()
    {
        $this->setBeforeElement(new Element(['tag'=>'div']));
    }

    function it_sets_after_elements()
    {
        $this->setAfterElement(new Element(['tag'=>'div']));
    }

    function it_renders_all_the_elements()
    {
        // @todo render all elements
    }
}
