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

Admin::js('https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/prism.min.js');
Admin::js('https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/components/prism-bash.min.js');
Admin::css('https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism.min.css');

//Editor::resolving(function (Form\Field\Editor $editor) {
//    $editor->options([
//        'setup' => \Dcat\Admin\Support\JavaScript::make(
//            <<<JS
//            function (editor) {
//                tinymce.init({
//                    selector: 'textarea',
//                    plugins: [  'advlist',
//            'autolink',
//            'link',
//            'image',
//            'media',
//            'lists',
//            'preview',
//            'code',
//            'help',
//            'fullscreen',
//            'table',
//            'autoresize',
//            'codesample'],
//                      toolbar:  [
//                            'undo redo | preview fullscreen | styleselect | fontsizeselect bold italic underline strikethrough forecolor backcolor | link image media blockquote removeformat codesample',
//                            'alignleft aligncenter alignright  alignjustify| indent outdent bullist numlist table subscript superscript | code',
//                        ],
//                     codesample_languages: [
//                       {text:'HTML/XML',value:'markup'},
//                        {text:"XML",value:"xml"},
//                        {text:"HTML",value:"html"},
//                        {text:"mathml",value:"mathml"},
//                        {text:"SVG",value:"svg"},
//                        {text:"CSS",value:"css"},
//                        {text:"Clike",value:"clike"},
//                        {text:"Javascript",value:"javascript"},
//                        {text:"ActionScript",value:"actionscript"},
//                        {text:"apacheconf",value:"apacheconf"},
//                        {text:"apl",value:"apl"},
//                        {text:"applescript",value:"applescript"},
//                        {text:"asciidoc",value:"asciidoc"},
//                        {text:"aspnet",value:"aspnet"},
//                        {text:"autoit",value:"autoit"},
//                        {text:"autohotkey",value:"autohotkey"},
//                        {text:"bash",value:"bash"},
//                        {text:"basic",value:"basic"},
//                        {text:"batch",value:"batch"},
//                        {text:"c",value:"c"},
//                        {text:"brainfuck",value:"brainfuck"},
//                        {text:"bro",value:"bro"},
//                        {text:"bison",value:"bison"},
//                        {text:"C#",value:"csharp"},
//                        {text:"C++",value:"cpp"},
//                        {text:"CoffeeScript",value:"coffeescript"},
//                        {text:"ruby",value:"ruby"},
//                        {text:"d",value:"d"},
//                        {text:"dart",value:"dart"},
//                        {text:"diff",value:"diff"},
//                        {text:"docker",value:"docker"},
//                        {text:"eiffel",value:"eiffel"},
//                        {text:"elixir",value:"elixir"},
//                        {text:"erlang",value:"erlang"},
//                        {text:"fsharp",value:"fsharp"},
//                        {text:"fortran",value:"fortran"},
//                        {text:"git",value:"git"},
//                        {text:"glsl",value:"glsl"},
//                        {text:"go",value:"go"},
//                        {text:"groovy",value:"groovy"},
//                        {text:"haml",value:"haml"},
//                        {text:"handlebars",value:"handlebars"},
//                        {text:"haskell",value:"haskell"},
//                        {text:"haxe",value:"haxe"},
//                        {text:"http",value:"http"},
//                        {text:"icon",value:"icon"},
//                        {text:"inform7",value:"inform7"},
//                        {text:"ini",value:"ini"},
//                        {text:"j",value:"j"},
//                        {text:"jade",value:"jade"},
//                        {text:"java",value:"java"},
//                        {text:"JSON",value:"json"},
//                        {text:"jsonp",value:"jsonp"},
//                        {text:"julia",value:"julia"},
//                        {text:"keyman",value:"keyman"},
//                        {text:"kotlin",value:"kotlin"},
//                        {text:"latex",value:"latex"},
//                        {text:"less",value:"less"},
//                        {text:"lolcode",value:"lolcode"},
//                        {text:"lua",value:"lua"},
//                        {text:"makefile",value:"makefile"},
//                        {text:"markdown",value:"markdown"},
//                        {text:"matlab",value:"matlab"},
//                        {text:"mel",value:"mel"},
//                        {text:"mizar",value:"mizar"},
//                        {text:"monkey",value:"monkey"},
//                        {text:"nasm",value:"nasm"},
//                        {text:"nginx",value:"nginx"},
//                        {text:"nim",value:"nim"},
//                        {text:"nix",value:"nix"},
//                        {text:"nsis",value:"nsis"},
//                        {text:"objectivec",value:"objectivec"},
//                        {text:"ocaml",value:"ocaml"},
//                        {text:"oz",value:"oz"},
//                        {text:"parigp",value:"parigp"},
//                        {text:"parser",value:"parser"},
//                        {text:"pascal",value:"pascal"},
//                        {text:"perl",value:"perl"},
//                        {text:"PHP",value:"php"},
//                        {text:"processing",value:"processing"},
//                        {text:"prolog",value:"prolog"},
//                        {text:"protobuf",value:"protobuf"},
//                        {text:"puppet",value:"puppet"},
//                        {text:"pure",value:"pure"},
//                        {text:"python",value:"python"},
//                        {text:"q",value:"q"},
//                        {text:"qore",value:"qore"},
//                        {text:"r",value:"r"},
//                        {text:"jsx",value:"jsx"},
//                        {text:"rest",value:"rest"},
//                        {text:"rip",value:"rip"},
//                        {text:"roboconf",value:"roboconf"},
//                        {text:"crystal",value:"crystal"},
//                        {text:"rust",value:"rust"},
//                        {text:"sas",value:"sas"},
//                        {text:"sass",value:"sass"},
//                        {text:"scss",value:"scss"},
//                        {text:"scala",value:"scala"},
//                        {text:"scheme",value:"scheme"},
//                        {text:"smalltalk",value:"smalltalk"},
//                        {text:"smarty",value:"smarty"},
//                        {text:"SQL",value:"sql"},
//                        {text:"stylus",value:"stylus"},
//                        {text:"swift",value:"swift"},
//                        {text:"tcl",value:"tcl"},
//                        {text:"textile",value:"textile"},
//                        {text:"twig",value:"twig"},
//                        {text:"TypeScript",value:"typescript"},
//                        {text:"verilog",value:"verilog"},
//                        {text:"vhdl",value:"vhdl"},
//                        {text:"wiki",value:"wiki"},
//                        {text:"YAML",value:"yaml"}
//                    ],
//                });
//            }
//            JS
//        ),
//    ]);
//});
