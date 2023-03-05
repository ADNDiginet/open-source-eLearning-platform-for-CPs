<?php

class __Mustache_182d3cdb1aacd6cabf5169093eed8122 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="adaptable-page-header-wrapper"';
        $value = $this->resolveValue($context->find('headerbg'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '    <div id="above-header" class="stickything">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <nav class="navbar navbar-expand btco-hover-menu">
';
        // 'shownavbar' section
        $value = $context->find('shownavbar');
        $buffer .= $this->section48d5461a5d9bbcc77c8a90540e096883($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="collapse navbar-collapse">
';
        // 'menuslinkright' inverted section
        $value = $context->find('menuslinkright');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="my-auto m-1">';
            $value = $this->resolveValue($context->findDot('output.get_top_menus'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '                    <ul class="navbar-nav ml-auto my-auto">
';
        $buffer .= $indent . '                        <li class="pull-left">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '
';
        // 'menuslinkright' section
        $value = $context->find('menuslinkright');
        $buffer .= $this->section63f6924d11bcb8d38c57a44c8e6d61e8($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'searchandsocialnavbar' section
        $value = $context->find('searchandsocialnavbar');
        $buffer .= $this->section929f3b728c46f20fca5f5cba8f27dfda($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'shownavbar' section
        $value = $context->find('shownavbar');
        $buffer .= $this->sectionAe3ef8b39174b4afc76905326f0d6fa2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'langmenu' section
        $value = $context->find('langmenu');
        $buffer .= $this->section15b81551072b68d56b3f6fd93b6abd8a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        <li class="nav-item">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('loginoruser'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page-header" class="container ';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row d-flex justify-content-start align-items-center h-100 ">
';
        // 'pageheaderoriginal' section
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->sectionD67d57dcbc1b71b5dc24960c447c9891($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'pageheaderoriginal' inverted section
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="col-lg-8">
';
            $buffer .= $indent . '                <div class="d-flex justify-content-between align-items-center h-100 bd-highlight">
';
            // 'sitetitle' section
            $value = $context->find('sitetitle');
            $buffer .= $this->section7d32940094487e40666883e4bdfc5210($context, $indent, $value);
            // 'searchandsocialheader' section
            $value = $context->find('searchandsocialheader');
            $buffer .= $this->section8da5df57c08422f87a2429dd5a1303f2($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-lg-4 p-0">
';
            // 'sitelogo' section
            $value = $context->find('sitelogo');
            $buffer .= $this->section7deb9d98a6ac34685c318a85e7cf9d5b($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '        </div>
';
        // 'pageheaderoriginal' inverted section
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="row">
';
            $buffer .= $indent . '            <div class="col-12 p-0 my-auto">
';
            $buffer .= $indent . '                <div id="course-header">
';
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->findDot('output.course_header'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        // 'shownavbar' section
        $value = $context->find('shownavbar');
        $buffer .= $this->section70c1c17e42f50479549b4b618b70076c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section3d134df36358a2641268d6e4fa0990da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel';
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
                
                $buffer .= 'sidepanel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48d5461a5d9bbcc77c8a90540e096883(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
                        <span class="sr-only">{{#str}}sidepanel{{/str}}</span>
                    </button>
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
                
                $buffer .= $indent . '                <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
';
                $buffer .= $indent . '                    <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button" class="nav-link float-sm-left mr-1" data-side="left">
';
                $buffer .= $indent . '                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3d134df36358a2641268d6e4fa0990da($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f6924d11bcb8d38c57a44c8e6d61e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="my-auto m-1">{{{topmenus}}}</li>
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
                
                $buffer .= $indent . '                        <li class="my-auto m-1">';
                $value = $this->resolveValue($context->find('topmenus'), $context);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section929f3b728c46f20fca5f5cba8f27dfda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto{{searchandsocialnavbarextra}}">
                            {{{searchandsocialnavbar}}}
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
                
                $buffer .= $indent . '                        <li class="nav-item navbarsearchsocial mx-md-1 my-auto';
                $value = $this->resolveValue($context->find('searchandsocialnavbarextra'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('searchandsocialnavbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe3ef8b39174b4afc76905326f0d6fa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">{{{output.navbar_plugin_output}}}</li>
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
                
                $buffer .= $indent . '                        <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15b81551072b68d56b3f6fd93b6abd8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item dropdown ml-2 my-auto">{{{output.lang_menu}}}</li>
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
                
                $buffer .= $indent . '                        <li class="nav-item dropdown ml-2 my-auto">';
                $value = $this->resolveValue($context->findDot('output.lang_menu'), $context);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1488a54c808009c944c333573135f64c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{sitelogo}}}';
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
                
                $value = $this->resolveValue($context->find('sitelogo'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38a5c8324740ea3f47b715681bbd251(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{sitetitle}}}';
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
                
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3e2746f763acb58ae993e4fbaaf77b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{searchandsocialheader}}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD67d57dcbc1b71b5dc24960c447c9891(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-8 p-0">
                <div class="bd-highlight">
                    {{#sitelogo}}{{{sitelogo}}}{{/sitelogo}}
                    {{#sitetitle}}{{{sitetitle}}}{{/sitetitle}}
                </div>
                <div id="course-header">
                    {{{output.course_header}}}
                </div>
            </div>
            <div class="col-lg-4">
                {{#searchandsocialheader}}
                    {{{searchandsocialheader}}}
                {{/searchandsocialheader}}
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
                
                $buffer .= $indent . '            <div class="col-lg-8 p-0">
';
                $buffer .= $indent . '                <div class="bd-highlight">
';
                $buffer .= $indent . '                    ';
                // 'sitelogo' section
                $value = $context->find('sitelogo');
                $buffer .= $this->section1488a54c808009c944c333573135f64c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                // 'sitetitle' section
                $value = $context->find('sitetitle');
                $buffer .= $this->sectionF38a5c8324740ea3f47b715681bbd251($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div id="course-header">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.course_header'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="col-lg-4">
';
                // 'searchandsocialheader' section
                $value = $context->find('searchandsocialheader');
                $buffer .= $this->section6c3e2746f763acb58ae993e4fbaaf77b($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d32940094487e40666883e4bdfc5210(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{sitetitle}}}
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
                $value = $this->resolveValue($context->find('sitetitle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8da5df57c08422f87a2429dd5a1303f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{searchandsocialheader}}}
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
                $value = $this->resolveValue($context->find('searchandsocialheader'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7deb9d98a6ac34685c318a85e7cf9d5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex justify-content-end bd-highlight">
                    {{{sitelogo}}}
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
                
                $buffer .= $indent . '                <div class="d-flex justify-content-end bd-highlight">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitelogo'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70c1c17e42f50479549b4b618b70076c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_adaptable/headernavbar}}
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
                
                if ($partial = $this->mustache->loadPartial('theme_adaptable/headernavbar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
