<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
use Dcat\Admin\Form\Field\Editor;

Editor::resolving(function (Form\Field\Editor $editor) {
    $editor->options([
        'setup' => JavaScript::make(
            <<<JS
                    function (editor) {
                        tinymce.init({
                             codesample_languages: [
                                {text: 'HTML/XML', value: 'markup'},
                                {text: 'JavaScript', value: 'javascript'},
                                {text: 'CSS', value: 'css'},
                                {text: 'PHP', value: 'php'},
                                {text: 'Ruby', value: 'ruby'},
                                {text: 'Python', value: 'python'},
                                {text: 'Java', value: 'java'},
                                {text: 'C', value: 'c'},
                                {text: 'C#', value: 'csharp'},
                                {text: 'C++', value: 'cpp'}
                                {text: 'BASH', value: 'bash'}
                            ],
                        });
                    }
                    JS
        ),
    ]);
});
