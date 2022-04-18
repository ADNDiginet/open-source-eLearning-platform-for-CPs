<?php

class __Mustache_2ec45d6d9c3408e3eb5154b6142e6ee5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '#';
        $value = $this->resolveValue($context->find('containerid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' input.adaptabletab,
';
        $buffer .= $indent . '#';
        $value = $this->resolveValue($context->find('containerid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' div.adaptable-tab {
';
        $buffer .= $indent . '    display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section0ec9a8f6df09ee19fbe182f0217fa2e8($context, $indent, $value);
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('containerid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="tabcontentcontainer">
';
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section32da732829d496be7fc9bca92e43d626($context, $indent, $value);
        // 'tabs' section
        $value = $context->find('tabs');
        $buffer .= $this->section71ee98137467037b4e2db15a98417d3f($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0ec9a8f6df09ee19fbe182f0217fa2e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
#{{name}}:checked~#adaptable-tab-{{name}} {
    display: block;
}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ':checked~#adaptable-tab-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' {
';
                $buffer .= $indent . '    display: block;
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65d863038bab51e75cebc9b683cb41c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked="checked"';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32da732829d496be7fc9bca92e43d626(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <input id="{{name}}" type="radio" name="tabs" class="adaptabletab"{{#selected}} checked="checked"{{/selected}}>
    <label for="{{name}}" class="adaptabletab">{{displayname}}</label>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <input id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" type="radio" name="tabs" class="adaptabletab"';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section65d863038bab51e75cebc9b683cb41c5($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '    <label for="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="adaptabletab">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71ee98137467037b4e2db15a98417d3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="adaptable-tab-{{name}}" class="adaptable-tab tab-panel py-3">
        {{{content}}}
    </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="adaptable-tab-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="adaptable-tab tab-panel py-3">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
