<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   'name'=>'Samsung Galaxy S20 Ultra 5G',
                'category'=>'Handphone',
                'description'=> 'RAM 12GB & Storage 128GB, warna Cosmic Black',
                'price'=>'16145000',
                'image'=>'handphone1.jpg'
            ],
            [   'name'=>'Apple iPhone 11 Pro Max 256GB',
                'category'=>'Handphone',
                'description'=> 'Garansi 1 tahun, barang resmi iBox',
                'price'=>'24200000',
                'image'=>'handphone2.jpg'
            ],
            [   'name'=>'Samsung Galaxy Note20 Ultra 5G',
                'category'=>'Handphone',
                'description'=> 'RAM 8GB & Storage 256GB, warna Mystic Bronze',
                'price'=>'14450000',
                'image'=>'handphone3.jpg'
            ],
            [   'name'=>'Apple iPhone 12 Pro Max 128GB',
                'category'=>'Handphone',
                'description'=> 'Warna Pacific Blue, varian Single Nano',
                'price'=>'23499000',
                'image'=>'handphone4.jpg'
            ],
            [   'name'=>'Xiaomi Mi 10 Pro 5G',
                'category'=>'Handphone',
                'description'=> 'RAM 8GB & Storage 256GB, warna Solstice Grey',
                'price'=>'13500000',
                'image'=>'handphone5.jpg'
            ],
            [   'name'=>'Oppo Find X2 Pro',
                'category'=>'Handphone',
                'description'=> 'RAM 12GB & Storage 512GB, warna Orange (bahan kulit)',
                'price'=>'16499000',
                'image'=>'handphone6.jpg'
            ],
            [   'name'=>'Macbook Pro 16" 2020',
                'category'=>'Laptop',
                'description'=> 'Storage SSD 512GB, Original Apple 100%',
                'price'=>'42500000',
                'image'=>'laptop1.png'
            ],
            [   'name'=>'Dell XPS 15 9500',
                'category'=>'Laptop',
                'description'=> 'Intel Core i7 10750H, RAM 16GB, SSD 512GB, NVIDIA GeForce GTX 1650Ti',
                'price'=>'41999000',
                'image'=>'laptop2.jpg'
            ],
            [   'name'=>'HP Spectre x360',
                'category'=>'Laptop',
                'description'=> 'Intel Core i7 1065G7, RAM 16GB, SSD 1TB, Intel Iris Plus Graphics',
                'price'=>'25499000',
                'image'=>'laptop3.jpg'
            ],
            [   'name'=>'Dell XPS 13 7390',
                'category'=>'Laptop',
                'description'=> 'Intel Core i7 1065G7, RAM 16GB, SSD 512GB, Intel Iris Plus Graphics',
                'price'=>'19999000',
                'image'=>'laptop4.jpg'
            ],
            [   'name'=>'LG Gram 17',
                'category'=>'Laptop',
                'description'=> 'Intel Core i7 1065G7, RAM 8GB, SSD 512GB, Intel Iris Plus Graphics',
                'price'=>'30800000',
                'image'=>'laptop5.jpg'
            ],
            [   'name'=>'Acer Swift 3',
                'category'=>'Laptop',
                'description'=> 'Intel Core i5 8265u, RAM 4GB, HDD 1TB, NVIDIA GeForce MX250',
                'price'=>'8899000',
                'image'=>'laptop6.jpg'
            ],
            [   'name'=>'Xiaomi Mi TV 55" 4K',
                'category'=>'TV',
                'description'=> 'Ready kirim hari ini, FREE ONGKIR!',
                'price'=>'5699000',
                'image'=>'tv1.jpg'
            ],
            [   'name'=>'Samsung 40J5250 FHD Smart TV',
                'category'=>'TV',
                'description'=> 'Layar 40 inci, 2 Port HDMI, 1 Port USB, Wireless/LAN Built-In',
                'price'=>'3979000',
                'image'=>'tv2.png'
            ],
            [   'name'=>'LG 43UN7100PTC UHD 4K Smart TV',
                'category'=>'TV',
                'description'=> 'Layar 43 inci, Quad Core Processor 4K, HDR 10 Pro & HLG Pro, webOS',
                'price'=>'4450000',
                'image'=>'tv3.jpg'
            ],
            [   'name'=>'Philips 49PFT6100S/70 FHD Smart Slim LED TV',
                'category'=>'TV',
                'description'=> 'Layar 49 inci, Ultra Narrow Bezel, 200Hz PMR (Perfect Motion Rate)',
                'price'=>'7999000',
                'image'=>'tv4.jpg'
            ],
            [   'name'=>'Coocaa 32S6G Smart HD LED TV',
                'category'=>'TV',
                'description'=> 'Layar 32 inci, Android 9.0, 2 Port USB 2.0, 2 Port HDMI 1.4',
                'price'=>'2029000',
                'image'=>'tv5.jpg'
            ],
            [   'name'=>'Samsung 43TU8000 Crystal UHD 4K Smart TV',
                'category'=>'TV',
                'description'=> 'Layar 43 inci, 3-side Boundless, Crystal Processore 4K',
                'price'=>'4950000',
                'image'=>'tv6.png'
            ]
        ]);
    }
}
