<?php

namespace spec\FormObjects\Elements\Form;

use FormObjects\Elements\Form\Input;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InputSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Input::class);
    }

    function it_has_tag_of_input()
    {
        $this->getTag()->shouldReturn('input');
    }
}
