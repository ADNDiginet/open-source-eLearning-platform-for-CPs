<?php

class __Mustache_089e0a441151575746adb36b54d2492f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="badge" class="container-fluid">
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '    <div id="badge-image-col" class="col col-auto">
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->find('badgeimage'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" alt="';
        $value = $this->resolveValue($context->find('badgename'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" width="300" class="mx-auto d-block"/>
';
        // 'expireddateformatted' section
        $value = $context->find('expireddateformatted');
        $buffer .= $this->section3ad5051385a32cb3cc38a2a01f0bf8e8($context, $indent, $value);
        // 'downloadurl' section
        $value = $context->find('downloadurl');
        $buffer .= $this->sectionD31c023c2ef853402f347f692bec4d3b($context, $indent, $value);
        // 'addtobackpackurl' section
        $value = $context->find('addtobackpackurl');
        $buffer .= $this->sectionD5ca4442b5b6f6554b0b8e127b998b84($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="badge-details-col" class="col">
';
        $buffer .= $indent . '        <h2>';
        $value = $this->resolveValue($context->find('badgename'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        // 'recipientname' section
        $value = $context->find('recipientname');
        $buffer .= $this->sectionD3bdcff31e37dad6a2527a0d32a35128($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="badge-issued-expire" class="pt-1 pb-2">
';
        $buffer .= $indent . '            <div class="pb-3">
';
        $buffer .= $indent . '            <small>
';
        // 'badgeissuedon' section
        $value = $context->find('badgeissuedon');
        $buffer .= $this->sectionE952cd97bffb0a7e17d6826b9aff9496($context, $indent, $value);
        // 'expiredate' section
        $value = $context->find('expiredate');
        $buffer .= $this->sectionAd160f7c364a9f339499fd1f159a84ca($context, $indent, $value);
        // 'expireddate' section
        $value = $context->find('expireddate');
        $buffer .= $this->section1e81cdb59520c21eb444aea70993233c($context, $indent, $value);
        $buffer .= $indent . '            </small>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        // 'issuedby' section
        $value = $context->find('issuedby');
        $buffer .= $this->section08744eb5b0cf3e89d11f1b5cdf699fc7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hostedurl' section
        $value = $context->find('hostedurl');
        $buffer .= $this->section7258fe2dca560499cc95b2595cf626ba($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'coursefullname' section
        $value = $context->find('coursefullname');
        $buffer .= $this->sectionE61bdbca06bdcbfc758d6d8058981115($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <p class="pb-4">';
        $value = $this->resolveValue($context->find('badgedescription'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="badge-criteria">
';
        $buffer .= $indent . '            <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3711d3952c5114b2cd9e7486d9299156($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('criteria'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'hasotherfields' section
        $value = $context->find('hasotherfields');
        $buffer .= $this->sectionBd557f29ec6751da3c4177bc639bb7d3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE072bc1eb067f26b00ffa5aaaf5294d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expireddate, badges, {{expireddateformatted}} ';
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
                
                $buffer .= ' expireddate, badges, ';
                $value = $this->resolveValue($context->find('expireddateformatted'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8e5aba16c15840894dfe8a1096d8343(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/expired, core, {{# str }} expireddate, badges, {{expireddateformatted}} {{/ str }}';
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
                
                $buffer .= ' i/expired, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE072bc1eb067f26b00ffa5aaaf5294d0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ad5051385a32cb3cc38a2a01f0bf8e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="expireimage">
                {{# pix }} i/expired, core, {{# str }} expireddate, badges, {{expireddateformatted}} {{/ str }}{{/ pix }}
            </span>
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
                
                $buffer .= $indent . '            <span class="expireimage">
';
                $buffer .= $indent . '                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE8e5aba16c15840894dfe8a1096d8343($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95ff3701934939e1eb7bd2c28e3ee1b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'download';
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
                
                $buffer .= 'download';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD31c023c2ef853402f347f692bec4d3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form action="{{downloadurl}}" method="post" id="downloadbadgeform">
                <button type="submit" class="btn btn-secondary m-1 w-100">{{#str}}download{{/str}}</button>
            </form>
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
                
                $buffer .= $indent . '            <form action="';
                $value = $this->resolveValue($context->find('downloadurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="downloadbadgeform">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-secondary m-1 w-100">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section95ff3701934939e1eb7bd2c28e3ee1b9($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa0161a83e904ab7b2776d631bdadbf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addtobackpack, badges';
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
                
                $buffer .= 'addtobackpack, badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5ca4442b5b6f6554b0b8e127b998b84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form action="{{addtobackpackurl}}" method="post" id="addtobackpackform">
                <button type="submit" class="btn btn-secondary m-1 w-100">{{#str}}addtobackpack, badges{{/str}}</button>
            </form>
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
                
                $buffer .= $indent . '            <form action="';
                $value = $this->resolveValue($context->find('addtobackpackurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="addtobackpackform">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-secondary m-1 w-100">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEa0161a83e904ab7b2776d631bdadbf7($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5620e0a654ff14128b1aa135e62d4bf4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/notification_warning}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section475837d2ebe06ee79d71db8e244c611b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'awardedto, core_badges, {{recipientname}}';
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
                
                $buffer .= 'awardedto, core_badges, ';
                $value = $this->resolveValue($context->find('recipientname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3bdcff31e37dad6a2527a0d32a35128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="badge-awardedto" class="pt-1 pb-2">
            {{#recipientnotification}}
                {{> core/notification_warning}}
            {{/recipientnotification}}
            {{#str}}awardedto, core_badges, {{recipientname}}{{/str}}
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
                
                $buffer .= $indent . '        <div id="badge-awardedto" class="pt-1 pb-2">
';
                // 'recipientnotification' section
                $value = $context->find('recipientnotification');
                $buffer .= $this->section5620e0a654ff14128b1aa135e62d4bf4($context, $indent, $value);
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section475837d2ebe06ee79d71db8e244c611b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7fae2b3af50a81df08427250971c1af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetime, langconfig ';
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
                
                $buffer .= ' strftimedatetime, langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78e48670d035d9867813eced18b8fa05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{badgeissuedon}}, {{#str}} strftimedatetime, langconfig {{/str}}';
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
                
                $value = $this->resolveValue($context->find('badgeissuedon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB7fae2b3af50a81df08427250971c1af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b6631b1f1f660204e0020badf4247c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    issuedon,
                    core_badges,
                    {{#userdate}}{{badgeissuedon}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
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
                
                $buffer .= $indent . '                    issuedon,
';
                $buffer .= $indent . '                    core_badges,
';
                $buffer .= $indent . '                    ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section78e48670d035d9867813eced18b8fa05($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE952cd97bffb0a7e17d6826b9aff9496(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}
                    issuedon,
                    core_badges,
                    {{#userdate}}{{badgeissuedon}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
                {{/str}}
                <br/>
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
                $buffer .= $this->section2b6631b1f1f660204e0020badf4247c5($context, $indent, $value);
                $buffer .= $indent . '                <br/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9daf8a027ad7fdda9f347e2a87ee8bfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{expiredate}}, {{#str}} strftimedatetime, langconfig {{/str}}';
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
                
                $value = $this->resolveValue($context->find('expiredate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB7fae2b3af50a81df08427250971c1af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section974caa56bf9db127e614ebce9811e8b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    expiresin,
                    core_badges,
                    {{#userdate}}{{expiredate}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
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
                
                $buffer .= $indent . '                    expiresin,
';
                $buffer .= $indent . '                    core_badges,
';
                $buffer .= $indent . '                    ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section9daf8a027ad7fdda9f347e2a87ee8bfa($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd160f7c364a9f339499fd1f159a84ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}
                    expiresin,
                    core_badges,
                    {{#userdate}}{{expiredate}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
                {{/str}}
                <br/>
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
                $buffer .= $this->section974caa56bf9db127e614ebce9811e8b0($context, $indent, $value);
                $buffer .= $indent . '                <br/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ba570eea1229993d5c8b1ba365215c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{expireddate}}, {{#str}} strftimedatetime, langconfig {{/str}}';
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
                
                $value = $this->resolveValue($context->find('expireddate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB7fae2b3af50a81df08427250971c1af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9fbe38729ee485d4699c3d99557476c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    expiredin,
                    core_badges,
                    {{#userdate}}{{expireddate}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
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
                
                $buffer .= $indent . '                    expiredin,
';
                $buffer .= $indent . '                    core_badges,
';
                $buffer .= $indent . '                    ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section9ba570eea1229993d5c8b1ba365215c3($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e81cdb59520c21eb444aea70993233c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}
                    expiredin,
                    core_badges,
                    {{#userdate}}{{expireddate}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
                {{/str}}
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
                $buffer .= $this->sectionB9fbe38729ee485d4699c3d99557476c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7fb1ab3642d12685765659f6728abe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{issuedbyemailobfuscated}}}
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
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('issuedbyemailobfuscated'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d2335c4d349620318a7704b4ae817a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    issuedby,
                    core_badges,
                    {{#issuedbyemailobfuscated}}
                        {{{issuedbyemailobfuscated}}}
                    {{/issuedbyemailobfuscated}}
                    {{^issuedbyemailobfuscated}}
                        {{issuedby}}
                    {{/issuedbyemailobfuscated}}
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
                
                $buffer .= $indent . '                    issuedby,
';
                $buffer .= $indent . '                    core_badges,
';
                // 'issuedbyemailobfuscated' section
                $value = $context->find('issuedbyemailobfuscated');
                $buffer .= $this->sectionB7fb1ab3642d12685765659f6728abe9($context, $indent, $value);
                // 'issuedbyemailobfuscated' inverted section
                $value = $context->find('issuedbyemailobfuscated');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('issuedby'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08744eb5b0cf3e89d11f1b5cdf699fc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pb-2">
                {{#str}}
                    issuedby,
                    core_badges,
                    {{#issuedbyemailobfuscated}}
                        {{{issuedbyemailobfuscated}}}
                    {{/issuedbyemailobfuscated}}
                    {{^issuedbyemailobfuscated}}
                        {{issuedby}}
                    {{/issuedbyemailobfuscated}}
                {{/str}}
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
                
                $buffer .= $indent . '            <div class="pb-2">
';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d2335c4d349620318a7704b4ae817a7($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85a8b0ea854014246945123e38cbc738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hostedurldescription, core_badges';
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
                
                $buffer .= 'hostedurldescription, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section844a91cfd825dee93182fd471b2c2b1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hostedurl, core_badges';
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
                
                $buffer .= 'hostedurl, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7258fe2dca560499cc95b2595cf626ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pb-2">
                <a href="{{.}}" target="_blank" aria-label="{{#str}}hostedurldescription, core_badges{{/str}}">
                    {{#str}}hostedurl, core_badges{{/str}}
                </a>
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
                
                $buffer .= $indent . '            <div class="pb-2">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section85a8b0ea854014246945123e38cbc738($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section844a91cfd825dee93182fd471b2c2b1c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc43c9c2de8e405f3def8c7b367ce40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    course,
                    core_badges,
                    {{coursefullname}}
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
                
                $buffer .= $indent . '                    course,
';
                $buffer .= $indent . '                    core_badges,
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('coursefullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE61bdbca06bdcbfc758d6d8058981115(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pb-2">
                {{#str}}
                    course,
                    core_badges,
                    {{coursefullname}}
                {{/str}}
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
                
                $buffer .= $indent . '            <div class="pb-2">
';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5fc43c9c2de8e405f3def8c7b367ce40($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3711d3952c5114b2cd9e7486d9299156(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'bcriteria, core_badges';
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
                
                $buffer .= 'bcriteria, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section142fb8773bb498f38aaf90e3c99f7237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moredetails, core_badges';
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
                
                $buffer .= 'moredetails, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf1f48d90e4fbd78ec2bc8b315e03d36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core_badges';
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
                
                $buffer .= 'version, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe50c3f423644e6ca2d57cbcfbdca0a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}version, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{version}}
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBf1f48d90e4fbd78ec2bc8b315e03d36($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('version'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78e6cb525bb8e30c93cdd7af8e0a80ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'language, core_badges';
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
                
                $buffer .= 'language, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ca148750c509efc5bba6fcfe5717edb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}language, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{language}}
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section78e6cb525bb8e30c93cdd7af8e0a80ca($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('language'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d590625f3f50cb667afd25dc744ab0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'imageauthorname, core_badges';
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
                
                $buffer .= 'imageauthorname, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section596ece483ce8a84b0cc91e79151a6beb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}imageauthorname, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{imageauthorname}}
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d590625f3f50cb667afd25dc744ab0a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('imageauthorname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6545a64c9ee9990cfebd6d3a95f7aafc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'imageauthoremail, core_badges';
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
                
                $buffer .= 'imageauthoremail, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA592b8ead73870338392008e244652e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}imageauthoremail, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{{imageauthoremail}}}
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6545a64c9ee9990cfebd6d3a95f7aafc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('imageauthoremail'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f56c110b417b632a27e507f54c990d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'imageauthorurl, core_badges';
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
                
                $buffer .= 'imageauthorurl, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4796538f9b291058b7002cdaf7b12845(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}imageauthorurl, core_badges{{/str}}
                            </dt>
                            <dd>
                                <a href="{{imageauthorurl}}" target="_blank">{{imageauthorurl}}</a>
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5f56c110b417b632a27e507f54c990d1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('imageauthorurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('imageauthorurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe9df1f02f529c3cfcc0b9e81dd178cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'imagecaption, core_badges';
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
                
                $buffer .= 'imagecaption, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b46225f8ded3ac6ee831886b983d9bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <dl>
                            <dt>
                                {{#str}}imagecaption, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{imagecaption}}
                            </dd>
                        </dl>
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
                
                $buffer .= $indent . '                        <dl>
';
                $buffer .= $indent . '                            <dt>
';
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFe9df1f02f529c3cfcc0b9e81dd178cb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dt>
';
                $buffer .= $indent . '                            <dd>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('imagecaption'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </dd>
';
                $buffer .= $indent . '                        </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4a6932fc5f965ef3e2c097d4fb4a648(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'endorsement, core_badges';
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
                
                $buffer .= 'endorsement, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE397a88c0ec5757381f89ccc7293e651(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'issuername, core_badges';
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
                
                $buffer .= 'issuername, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section590bb08ac4438113760d59691efcabc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'issueremail, core_badges';
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
                
                $buffer .= 'issueremail, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2de90cb0a7ac49e1bf14797e08a5a843(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'issuerurl, core_badges';
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
                
                $buffer .= 'issuerurl, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f16c6acec65f0140f2ad1dab49abe03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dateawarded, core_badges';
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
                
                $buffer .= 'dateawarded, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44b273699efde43bf22f1f2a8a70ddcd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{dateissued}}, {{#str}} strftimedatetime, langconfig {{/str}}';
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
                
                $value = $this->resolveValue($context->find('dateissued'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB7fae2b3af50a81df08427250971c1af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bbaff09feb8b7a80ca74cb39a2219e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'claimid, core_badges';
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
                
                $buffer .= 'claimid, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01b3a6ddae97f2eb305150879d9431db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'claimcomment, core_badges';
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
                
                $buffer .= 'claimcomment, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD29e590a1ed0c6145149e1f2f7df624b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h4>{{#str}}endorsement, core_badges{{/str}}</h4>
                <div class="container ml-0">
                    <dl>
                        <dt>
                            {{#str}}issuername, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{issuername}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}issueremail, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{{issueremail}}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}issuerurl, core_badges{{/str}}
                        </dt>
                        <dd>
                            <a href="{{issuerurl}}" target="_blank">{{issuerurl}}</a>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}dateawarded, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{#userdate}}{{dateissued}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}claimid, core_badges{{/str}}
                        </dt>
                        <dd>
                            <a href="{{claimid}}" target="_blank">{{claimid}}</a>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}claimcomment, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{claimcomment}}
                        </dd>
                    </dl>
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
                
                $buffer .= $indent . '                <h4>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB4a6932fc5f965ef3e2c097d4fb4a648($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                <div class="container ml-0">
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE397a88c0ec5757381f89ccc7293e651($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('issuername'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section590bb08ac4438113760d59691efcabc4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('issueremail'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2de90cb0a7ac49e1bf14797e08a5a843($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('issuerurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('issuerurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5f16c6acec65f0140f2ad1dab49abe03($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section44b273699efde43bf22f1f2a8a70ddcd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2bbaff09feb8b7a80ca74cb39a2219e0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('claimid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('claimid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <dl>
';
                $buffer .= $indent . '                        <dt>
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section01b3a6ddae97f2eb305150879d9431db($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dt>
';
                $buffer .= $indent . '                        <dd>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('claimcomment'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </dd>
';
                $buffer .= $indent . '                    </dl>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbdfd6debbe274310c949b371656b13d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'relatedbages, core_badges';
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
                
                $buffer .= 'relatedbages, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA722cb1dee1aee280fba1648d8f92f20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h4>{{#str}}relatedbages, core_badges{{/str}}</h4>
                <ul>
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
                
                $buffer .= $indent . '                <h4>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEbdfd6debbe274310c949b371656b13d($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                <ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2b4de36c79d1ce37860e2b54f545242(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{url}}" target="_blank">';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ae39e3dce9945d5872a2a828daa4528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</a>';
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
                
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section094b0d37552b0d8a84d88a3eb9598171(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                {{#url}}<a href="{{url}}" target="_blank">{{/url}}
                    {{name}}
                {{#url}}</a>{{/url}}
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                ';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionE2b4de36c79d1ce37860e2b54f545242($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->section3ae39e3dce9945d5872a2a828daa4528($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8032c117658c48df3d3f1031c7e8ab6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                </ul>
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
                
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bf6f40d33eb41231ca56fbe48c9a5f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'alignment, core_badges';
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
                
                $buffer .= 'alignment, core_badges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18284731c88ddb246174b520dda773e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <h4>{{#str}}alignment, core_badges{{/str}}</h4>
                <ul>
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
                
                $buffer .= $indent . '                <h4>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0bf6f40d33eb41231ca56fbe48c9a5f7($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                <ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA25aca64b37c4c1f3b7156fe8ea3e606(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    <a href="{{targeturl}}" target="_blank">{{targetname}}</a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('targeturl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('targetname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd557f29ec6751da3c4177bc639bb7d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="badge-other-fields">
            <a data-toggle="collapse" href="#collapseOtherDetails" role="button" aria-expanded="false" aria-controls="collapseOtherDetails">
                {{#str}}moredetails, core_badges{{/str}}
            </a>
            <div class="collapse" id="collapseOtherDetails">
                <div class="container ml-0">
                    {{#version}}
                        <dl>
                            <dt>
                                {{#str}}version, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{version}}
                            </dd>
                        </dl>
                    {{/version}}

                    {{#language}}
                        <dl>
                            <dt>
                                {{#str}}language, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{language}}
                            </dd>
                        </dl>
                    {{/language}}

                    {{#imageauthorname}}
                        <dl>
                            <dt>
                                {{#str}}imageauthorname, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{imageauthorname}}
                            </dd>
                        </dl>
                    {{/imageauthorname}}

                    {{#imageauthoremail}}
                        <dl>
                            <dt>
                                {{#str}}imageauthoremail, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{{imageauthoremail}}}
                            </dd>
                        </dl>
                    {{/imageauthoremail}}

                    {{#imageauthorurl}}
                        <dl>
                            <dt>
                                {{#str}}imageauthorurl, core_badges{{/str}}
                            </dt>
                            <dd>
                                <a href="{{imageauthorurl}}" target="_blank">{{imageauthorurl}}</a>
                            </dd>
                        </dl>
                    {{/imageauthorurl}}
                    {{#imagecaption}}
                        <dl>
                            <dt>
                                {{#str}}imagecaption, core_badges{{/str}}
                            </dt>
                            <dd>
                                {{imagecaption}}
                            </dd>
                        </dl>
                    {{/imagecaption}}
                </div>

            {{#endorsement}}
                <h4>{{#str}}endorsement, core_badges{{/str}}</h4>
                <div class="container ml-0">
                    <dl>
                        <dt>
                            {{#str}}issuername, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{issuername}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}issueremail, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{{issueremail}}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}issuerurl, core_badges{{/str}}
                        </dt>
                        <dd>
                            <a href="{{issuerurl}}" target="_blank">{{issuerurl}}</a>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}dateawarded, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{#userdate}}{{dateissued}}, {{#str}} strftimedatetime, langconfig {{/str}}{{/userdate}}
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}claimid, core_badges{{/str}}
                        </dt>
                        <dd>
                            <a href="{{claimid}}" target="_blank">{{claimid}}</a>
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            {{#str}}claimcomment, core_badges{{/str}}
                        </dt>
                        <dd>
                            {{claimcomment}}
                        </dd>
                    </dl>
                </div>
            {{/endorsement}}

            {{#hasrelatedbadges}}
                <h4>{{#str}}relatedbages, core_badges{{/str}}</h4>
                <ul>
            {{/hasrelatedbadges}}
            {{#relatedbadges}}
                <li>
                {{#url}}<a href="{{url}}" target="_blank">{{/url}}
                    {{name}}
                {{#url}}</a>{{/url}}
                </li>
            {{/relatedbadges}}
            {{#hasrelatedbadges}}
                </ul>
            {{/hasrelatedbadges}}

            {{#hasalignments}}
                <h4>{{#str}}alignment, core_badges{{/str}}</h4>
                <ul>
            {{/hasalignments}}
            {{#alignments}}
                <li>
                    <a href="{{targeturl}}" target="_blank">{{targetname}}</a>
                </li>
            {{/alignments}}
            {{#hasalignments}}
                </ul>
            {{/hasalignments}}
            </div>
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
                
                $buffer .= $indent . '        <div id="badge-other-fields">
';
                $buffer .= $indent . '            <a data-toggle="collapse" href="#collapseOtherDetails" role="button" aria-expanded="false" aria-controls="collapseOtherDetails">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section142fb8773bb498f38aaf90e3c99f7237($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <div class="collapse" id="collapseOtherDetails">
';
                $buffer .= $indent . '                <div class="container ml-0">
';
                // 'version' section
                $value = $context->find('version');
                $buffer .= $this->sectionFe50c3f423644e6ca2d57cbcfbdca0a9($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'language' section
                $value = $context->find('language');
                $buffer .= $this->section4ca148750c509efc5bba6fcfe5717edb($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'imageauthorname' section
                $value = $context->find('imageauthorname');
                $buffer .= $this->section596ece483ce8a84b0cc91e79151a6beb($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'imageauthoremail' section
                $value = $context->find('imageauthoremail');
                $buffer .= $this->sectionA592b8ead73870338392008e244652e6($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'imageauthorurl' section
                $value = $context->find('imageauthorurl');
                $buffer .= $this->section4796538f9b291058b7002cdaf7b12845($context, $indent, $value);
                // 'imagecaption' section
                $value = $context->find('imagecaption');
                $buffer .= $this->section1b46225f8ded3ac6ee831886b983d9bc($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                // 'endorsement' section
                $value = $context->find('endorsement');
                $buffer .= $this->sectionD29e590a1ed0c6145149e1f2f7df624b($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasrelatedbadges' section
                $value = $context->find('hasrelatedbadges');
                $buffer .= $this->sectionA722cb1dee1aee280fba1648d8f92f20($context, $indent, $value);
                // 'relatedbadges' section
                $value = $context->find('relatedbadges');
                $buffer .= $this->section094b0d37552b0d8a84d88a3eb9598171($context, $indent, $value);
                // 'hasrelatedbadges' section
                $value = $context->find('hasrelatedbadges');
                $buffer .= $this->section8032c117658c48df3d3f1031c7e8ab6e($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'hasalignments' section
                $value = $context->find('hasalignments');
                $buffer .= $this->section18284731c88ddb246174b520dda773e5($context, $indent, $value);
                // 'alignments' section
                $value = $context->find('alignments');
                $buffer .= $this->sectionA25aca64b37c4c1f3b7156fe8ea3e606($context, $indent, $value);
                // 'hasalignments' section
                $value = $context->find('hasalignments');
                $buffer .= $this->section8032c117658c48df3d3f1031c7e8ab6e($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
