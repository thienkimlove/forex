<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Post::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post');
        CRUD::setEntityNameStrings('Bài viết', 'Bài viết');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns

        CRUD::column('title')->label('Tiêu đề');
        CRUD::column('category')->type('relationship')->label('Chuyên mục');
        CRUD::column('views')->type('number')->label('Lượt xem');
        CRUD::column('index_slide')->type('boolean')->label('Trang chủ?');
        CRUD::column('status')->type('boolean')->label('Trạng thái');
        CRUD::column('image')->type('image')->label('Ảnh')->height('30px')->width('30px');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostRequest::class);

        //CRUD::setFromDb(); // fields

        CRUD::field('title')->label('Tiêu đề');
        //CRUD::field('category')->type('relationship')->label('Chuyên mục');

        CRUD::addField([  // Select
            'label'     => "Chuyên mục",
            'type'      => 'select',
            'name'      => 'category_id', // the db column for the foreign key
            'entity'    => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user

            // optional
            'model'     => "App\Models\Category",
            'options'   => (function ($query) {
                return $query->whereNotNull('parent_id')->get();
            }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);


        CRUD::field('desc')->type('textarea')->label('Mô tả');
        CRUD::field('content')->type('ckeditor')->label('Nội dung');
        CRUD::field('image')->type('browse')->label('Ảnh');
        CRUD::field('index_slide')->type('boolean')->label('Xuất hiện tại Slider Trang chủ');
        CRUD::field('status')->type('boolean')->label('Trạng thái');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
