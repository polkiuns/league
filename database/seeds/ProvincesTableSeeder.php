<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(1, 'alava', 'Álava'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(2, 'albacete', 'Albacete'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(3, 'alicante', 'Alicante'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(4, 'almeria', 'Almería'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(5, 'vila', 'Ávila'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(6, 'badajoz', 'Badajoz'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(7, 'illes-balears', 'Illes Balears'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(8, 'barcelona', 'Barcelona'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(9, 'burgos', 'Burgos'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(10, 'caceres', 'Cáceres'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(11, 'cadiz', 'Cádiz'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(12, 'castellon', 'Castellón'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(13, 'ciudad-real', 'Ciudad Real'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(14, 'cordoba', 'Córdoba'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(15, 'a-coruna', 'A Coruña'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(16, 'cuenca', 'Cuenca'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(17, 'girona', 'Girona'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(18, 'granada', 'Granada'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(19, 'guadalajara', 'Guadalajara'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(20, 'guipuzcoa', 'Guipúzcoa'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(21, 'huelva', 'Huelva'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(22, 'huesca', 'Huesca'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(23, 'jaen', 'Jaén'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(24, 'leon', 'León'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(25, 'lleida', 'Lleida'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(26, 'la-rioja', 'La Rioja'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(27, 'lugo', 'Lugo'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(28, 'madrid', 'Madrid'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(29, 'malaga', 'Málaga'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(30, 'murcia', 'Murcia'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(31, 'navarra', 'Navarra'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(32, 'ourense', 'Ourense'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(33, 'asturias', 'Asturias'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(34, 'palencia', 'Palencia'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(35, 'las-palmas', 'Las Palmas'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(36, 'pontevedra', 'Pontevedra'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(37, 'salamanca', 'Salamanca'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(38, 'santa-cruz-de-tenerife', 'Santa Cruz de Tenerife'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(39, 'cantabria', 'Cantabria'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(40, 'segovia', 'Segovia'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(41, 'sevilla', 'Sevilla'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(42, 'soria', 'Soria'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(43, 'tarragona', 'Tarragona'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(44, 'teruel', 'Teruel'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(45, 'toledo', 'Toledo'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(46, 'valencia', 'Valencia'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(47, 'valladolid', 'Valladolid'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(48, 'vizcaya', 'Vizcaya'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(49, 'zamora', 'Zamora'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(50, 'zaragoza', 'Zaragoza'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(51, 'ceuta', 'Ceuta'));
        DB::insert('insert into provinces (id, name , url) values (? , ?, ?)', array(52, 'melilla', 'Melilla'));
    }
}
