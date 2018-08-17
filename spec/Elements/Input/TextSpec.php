<?php

namespace spec\FormObjects\Elements\Input;

use FormObjects\Elements\Input\Text;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TextSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Text::class);
    }
}
