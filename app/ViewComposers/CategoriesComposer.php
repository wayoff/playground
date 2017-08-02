<?php 
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class CategoriesComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $model;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $model
     * @return void
     */
    public function __construct(Category $model)
    {
        // Dependencies automatically resolved by service container...
        $this->model = $model;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->model->all());
    }
}