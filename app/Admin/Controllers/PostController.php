<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class PostController extends AdminController
{
    protected $title = '文章列表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Post(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title', '标题');
            $grid->column('image', '图片');
            $grid->column('created_at', '创建日期');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Post(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('content');
            $show->field('is_top');
            $show->field('created_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Post(), function (Form $form) {
            $form->text('title', '文章标题')->required();
            $form->image('image', '文章配图')->uniqueName()->removable()->retainable();
            $form->text('slug', 'SLUG')->required();
            $form->editor('content', '文章内容')->required();
        });
    }
}
