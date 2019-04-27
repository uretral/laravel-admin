<?php


namespace Encore\Admin\Form\Field;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/vendor/laravel-admin/ckeditor/ckeditor.js',
        '/vendor/laravel-admin/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";
        return parent::render();
    }
}
