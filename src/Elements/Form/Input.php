<?php

namespace FormObjects\Elements\Form;

use FormObjects\Elements\Element;
use FormObjects\Elements\ElementInterface;

/**
 * @usage
 *
 * $wrapper = new Element();
 * $wrapper->setTag('div');
 * $wrapper->setAttribute('class', 'uk-form-row');
 *
 * $eleBefore = new Element();
 * $eleBefore->setTag('div');
 * $eleBefore->setAttribute('class', 'uk-form-label');
 * $eleBefore->setHTML('Input label:');
 *
 * $eleAfter = new Element();
 * $eleAfter->setTag('div');
 * $eleAfter->setAttribute('class', 'uk-form-error uk-hidden');
 *
 * $input = new Input();
 * $input->getDecorator()
 *     ->setParentElement($wrapper);
 *     ->setBeforeElement($eleBefore);
 *     ->setAfterElement($eleAfter);
 *
 * $input->render();
 *
 * Class Input
 * @package FormObjects\Elements\Form
 */
class Input extends Element implements ElementInterface
{
    public function __construct(array $settings = [])
    {
        // override settings to define input element
        $settings['tag'] = 'input';
        $settings['endTag'] = false;
        $settings['attributes']['type'] = 'text';

        parent::__construct($settings);
    }
}
