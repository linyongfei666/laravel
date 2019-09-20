<?php

namespace App\Admin\Controllers;

use App\Model\GoodsModel;
use App\Model\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel);

        $grid->column('g_id', __('G id'));
        $grid->column('g_name', __('G name'));
        $grid->column('g_price0', __('G price0'));
        $grid->column('price', __('Price'));
        $grid->column('cid', __('Cid'));
        $grid->column('g_number', __('G number'));
        $grid->column('img', __('Img'))->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('g_id', __('G id'));
        $show->field('g_name', __('G name'));
        $show->field('g_price0', __('G price0'));
        $show->field('price', __('Price'));
        $show->field('cid', __('Cid'));
        $show->field('g_number', __('G number'));
        $show->field('img', __('Img'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel);

        $form->text('g_name', __('G name'));
        $form->decimal('g_price0', __('G price0'));
        $form->decimal('price', __('Price'));
        $form->select('cid', __('父级分类'))->options(CategoryModel::selectOptions());
        $form->text('g_number', __('G number'));
        $form->image('img', __('Img'));

        return $form;
    }
}
