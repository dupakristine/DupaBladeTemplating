<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'brand_name'=>'Nissin',
                'product_name'=>'Lucky Me! Instant Noodles Beef',
                'retail_price'=>'54.00',
                'wholesale_price'=>'13.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'26',
                'unit_id'=>'3',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Nelita',
                'product_name'=>'Nelita Corned Beef',
                'retail_price'=>'28.00',
                'wholesale_price'=>'30.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'63',
                'unit_id'=>'1',
                'category_id'=>'4'
            ],
            [
                'brand_name'=>'Hermano',
                'product_name'=>'Hermano Refined Sugar',
                'retail_price'=>'13.00',
                'wholesale_price'=>'16.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'5'
            ],
            [
                'brand_name'=>'Robina',
                'product_name'=>'Robina Brown Sugar',
                'retail_price'=>'14.00',
                'wholesale_price'=>'17.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'21',
                'unit_id'=>'3',
                'category_id'=>'5'
            ],
            [
                'brand_name'=>'Bioderm',
                'product_name'=>'Bioderm Soap Pristine White 60g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'3'
            ],
            [
                'brand_name'=>'Palmolive',
                'product_name'=>'Palmolive Shampoo 12ml',
                'retail_price'=>'71.00',
                'wholesale_price'=>'7.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'1',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Mega',
                'product_name'=>'Mega Sardines',
                'retail_price'=>'19.00',
                'wholesale_price'=>'23.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'25',
                'unit_id'=>'3',
                'category_id'=>'4'
            ],
            [
                'brand_name'=>'Nongshim',
                'product_name'=>'Shin Ramyun Noodle Soup',
                'retail_price'=>'34.00',
                'wholesale_price'=>'37.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'13',
                'unit_id'=>'3',
                'category_id'=>'1'
            ],
            
        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
