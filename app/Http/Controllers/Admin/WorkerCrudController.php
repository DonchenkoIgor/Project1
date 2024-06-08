<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WorkerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorkerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Worker::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/worker');
        CRUD::setEntityNameStrings('worker', 'workers');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
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
        CRUD::setValidation(WorkerRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::addField([
            'name' => 'status',
            'label' => 'status',
            'type'  =>  'select_from_array',
            'options' => ['Робітник' => 'Робітник', 'Старший робітник' => 'Старший робітник'],
            'allows_null' => false,
            'default' => $this->crud->getCurrentEntry()->status,
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
        CRUD::setValidation(WorkerRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::addField([
            'name' => 'status',
            'label' => 'status',
            'type'  =>  'select_from_array',
            'options' => ['Робітник' => 'Робітник', 'Старший робітник' => 'Старший робітник'],
            'allows_null' => false,
            'default' => $this->crud->getCurrentEntry()->status,
        ]);
    }
}
