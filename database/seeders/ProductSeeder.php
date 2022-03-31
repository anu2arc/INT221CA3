<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
            [
                'name'=>'realme C11 2021',
                "price"=>"8999",
                "description"=>"1 Year Warranty for Mobile and 6 Months for Accessorie",
                "category"=>"mobile",
                "gallery"=>"https://rukminim2.flixcart.com/image/416/416/kqjtd3k0/mobile/o/4/x/c11-2021-rmx3231-realme-original-imag4j4yrdt7d9cj.jpeg?q=70"
            ],
            [
                'name'=>'ASUS TUF Gaming F15',
                "price"=>"60000",
                "description"=>"(8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650/144 Hz)",
                "category"=>"laptop",
                "gallery"=>"https://rukminim2.flixcart.com/image/416/416/ku4ezrk0/computer/2/z/l/fx506hcb-hn228t-gaming-laptop-asus-original-imag7bhenhg7nqvh.jpeg?q=70"
            ],
            [
                'name'=>'APPLE iPad Air',
                "price"=>"50",
                "description"=>"(4th Gen) 64 GB ROM 10.9 inch with Wi-Fi Only (Sky Blue) on sale hurry up",
                "category"=>"mobile",
                "gallery"=>"https://rukminim2.flixcart.com/image/416/416/kf75fgw0/tablet/n/h/h/apple-myfy2hn-a-original-imafvpqaebw8r7cv.jpeg?q=70"
            ]
        ]);
    }
}
