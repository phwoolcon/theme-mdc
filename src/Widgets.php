<?php

namespace Phwoolcon\ThemeMdc;

use Phalcon\Di;
use Phwoolcon\View\Widget;

class Widgets extends Widget
{
    /**
     * @var Di
     */
    protected static $di;

    public static function register(Di $di)
    {
        static::$di = $di;
        Widget::define('mdcCheckbox', [static::class, 'mdcCheckbox']);
    }

    public static function mdcCheckbox($id, $label, array $htmlAttributes = [])
    {
        $value = isset($htmlAttributes['value']) ?: '';
        $checked = empty($htmlAttributes['checked']) ? '' : 'checked';
        $name = empty($htmlAttributes['name']) ? '' : 'name="' . $htmlAttributes['name'] . '"';
        $required = empty($htmlAttributes['required']) ? '' : 'required';
        return <<<HTML
<div class="mdc-form-field">
    <div class="mdc-checkbox">
        <input type="checkbox" id="{$id}" {$name} class="mdc-checkbox__native-control" value="{$value}" {$checked} {$required}>
        <div class="mdc-checkbox__background">
            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                <path class="mdc-checkbox__checkmark__path" fill="none" stroke="white"
                    d="M1.73,12.91 8.1,19.28 22.79,4.59">
            </svg>
            <div class="mdc-checkbox__mixedmark"></div>
        </div>
    </div>
    <label for="{$id}" id="{$id}-label">{$label}</label>
</div>
HTML;
    }
}
