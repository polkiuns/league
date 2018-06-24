<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = "Todos los blogs";
        $category->description = "Aqui se encuentran todos los blogs de la pagina";
        $category->save();

        $category = new Category;
        $category->name = "Categoria 1";
        $category->description = "Aqui se encuentran los blogs de la categoria 1";
        $category->save();

        $category = new Category;
        $category->name = "Categoria 2";
        $category->description = "Aqui se encuentran los blogs de la categoria 2";
        $category->save();
    }
}
