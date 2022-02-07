<?php


namespace App\classes;


class Product
{

    Protected $products =[];

    public function getAllProduct()
    {
        return[
            0=>[
                'name'       => 'Shirt',
                'id'         => '01',
                'price'      => '1500 Tk.',
                'brand'      => 'Brand 01',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'shirt.jpg'
            ],
            1=>[
                'name'       => 'Shirt',
                'id'         => '02',
                'price'      => '1800 Tk.',
                'brand'      => 'Brand 02',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'shirt1.jpg'
            ],
            2=>[
                'name'       => 'Shirt',
                'id'         => '03',
                'price'      => '1900 Tk.',
                'brand'      => 'Brand 03',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'shirt2.jpg'
            ],
            3=>[
                'name'       => 'Shirt',
                'id'         => '04',
                'price'      => '1400 Tk.',
                'brand'      => 'Brand 04',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'shirt3.jpg'
            ],
            4=>[
                'name'       => 'Shirt',
                'id'         => '05',
                'price'      => '1300 Tk.',
                'brand'      => 'Brand 05',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'pant.jpg'
            ],
            5=>[
                'name'       => 'Shirt',
                'id'         => '06',
                'price'      => '1200 Tk.',
                'brand'      => 'Brand 06',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'pant1.jpg'
            ],
            6=>[
                'name'       => 'Shirt',
                'id'         => '07',
                'price'      => '1100 Tk.',
                'brand'      => 'Brand 07',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'pant2.jpg'
            ],
            7=>[
                'name'       => 'Smart Watch',
                'id'         => '08',
                'price'      => '2500 Tk.',
                'brand'      => 'Brand 08',
                'category'   => 'Dress',
                'description'=> 'A smart watch',
                'image'      => 'watch.jpg'
            ],
            8=>[
                'name'       => 'Shirt',
                'id'         => '09',
                'price'      => '3500 Tk.',
                'brand'      => 'Brand 09',
                'category'   => 'Dress',
                'description'=> 'A smart shirt',
                'image'      => 'shirt.jpg'
            ],


        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if($product['id']== $id)
            {
                return $product;
            }
        }
    }
}