<?php

class __Mustache_0e6ce255adc48fb3b441ccb75866c534 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '<div data-region="grading-navigation" class="row">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="assignment-info" class="col-md-4">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a><br/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/mod/assign/view.php?id=';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        // 'caneditsettings' section
        $value = $context->find('caneditsettings');
        $buffer .= $this->sectionE789595e5446c81b7f6850f0a479040e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<br/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/mod/assign/view.php?id=';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '&action=';
        $value = $this->resolveValue($context->find('actiongrading'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('viewgrading'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('viewgrading'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div role="tooltip" id="tooltip-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="accesshide">
';
        // 'duedate' section
        $value = $context->find('duedate');
        $buffer .= $this->sectionCff57b5253531a455dd0b0f1fd503542($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'cutoffdate' section
        $value = $context->find('cutoffdate');
        $buffer .= $this->section0ecb54cee1e32ae21ad2a6dac98f4e6e($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'duedate' section
        $value = $context->find('duedate');
        $buffer .= $this->sectionD7bb64d11b6a884becb82501a2aa1a3f($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="user-info" class="col-md-4" data-assignmentid="';
        $value = $this->resolveValue($context->find('assignmentid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_navigation_user_info')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="user-selector" class="col-md-4">
';
        $buffer .= $indent . '    <div class="alignment">
';
        if ($partial = $this->mustache->loadPartial('mod_assign/grading_navigation_user_selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE0bf5b8c46c512e59f01f14173af2418($context, $indent, $value);

        return $buffer;
    }

    private function section0bb349a181ed9d49e19d879da5efd4de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsettings';
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
                
                $buffer .= 'editsettings';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82369141a8c30400ef4727dfad7127d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core,{{#str}}editsettings{{/str}}';
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
                
                $buffer .= 't/edit, core,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0bb349a181ed9d49e19d879da5efd4de($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE789595e5446c81b7f6850f0a479040e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="{{config.wwwroot}}/course/modedit.php?update={{cmid}}&return=1">{{#pix}}t/edit, core,{{#str}}editsettings{{/str}}{{/pix}}</a>
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
                
                $buffer .= $indent . '<a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/modedit.php?update=';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&return=1">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section82369141a8c30400ef4727dfad7127d5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA16bbc9349eec7195a7f2e7ff15cd30c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'duedatecolon, mod_assign, {{duedatestr}}';
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
                
                $buffer .= $indent . 'duedatecolon, mod_assign, ';
                $value = $this->resolveValue($context->find('duedatestr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCff57b5253531a455dd0b0f1fd503542(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#str}}duedatecolon, mod_assign, {{duedatestr}}{{/str}}
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA16bbc9349eec7195a7f2e7ff15cd30c($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ecb54cee1e32ae21ad2a6dac98f4e6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<br>{{cutoffdatestr}}
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
                
                $buffer .= $indent . '<br>';
                $value = $this->resolveValue($context->find('cutoffdatestr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7bb64d11b6a884becb82501a2aa1a3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<br>{{timeremainingstr}}
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
                
                $buffer .= $indent . '<br>';
                $value = $this->resolveValue($context->find('timeremainingstr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0bf5b8c46c512e59f01f14173af2418(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'mod_assign/grading_navigation\', \'core/tooltip\'], function(GradingNavigation, ToolTip) {
    new GradingNavigation(\'[data-region="user-selector"]\');
    new ToolTip(\'[data-region="assignment-tooltip"]\');
});
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
                
                $buffer .= $indent . 'require([\'mod_assign/grading_navigation\', \'core/tooltip\'], function(GradingNavigation, ToolTip) {
';
                $buffer .= $indent . '    new GradingNavigation(\'[data-region="user-selector"]\');
';
                $buffer .= $indent . '    new ToolTip(\'[data-region="assignment-tooltip"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
