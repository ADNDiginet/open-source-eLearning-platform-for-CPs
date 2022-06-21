<?php

class __Mustache_970d12f01e2bcdb9a0c55f59ead64738 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('mod_assign/loading')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
