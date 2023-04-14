<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('barang')->truncate();
        DB::table('barang')->insert([
            [
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Food',
            'harga' => '3000',
            'qty' => '100'
            ],
            [
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Drink',
            'harga' => '6000',
            'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Silverqueen',
                'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45'
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Chitato Lite',
                'kategori_barang' => 'Snack',
                'harga' => '1600',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Cadburry',
                'kategori_barang' => 'Snack',
                'harga' => '2100',
                'qty' => '120'
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Oishi Pillows',
                'kategori_barang' => 'Snack',
                'harga' => '1500',
                'qty' => '150'
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Oishi Sponge',
                'kategori_barang' => 'Snack',
                'harga' => '1000',
                'qty' => '250'
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Oishi Makado',
                'kategori_barang' => 'Snack',
                'harga' => '1200',
                'qty' => '100'
            ],[
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Oishi Suky Suky',
                'kategori_barang' => 'Snack',
                'harga' => '1000',
                'qty' => '150'
            ],[
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Chitato',
                'kategori_barang' => 'Snack',
                'harga' => '1700',
                'qty' => '30'
            ],[
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Oishi Poppy Pop',
                'kategori_barang' => 'Snack',
                'harga' => '1600',
                'qty' => '30'
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Super Bubur',
                'kategori_barang' => 'Food',
                'harga' => '5000',
                'qty' => '60'
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Pop Mie',
                'kategori_barang' => 'Food',
                'harga' => '7000',
                'qty' => '50'
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Coca-cola',
                'kategori_barang' => 'Drink',
                'harga' => '5000',
                'qty' => '27'
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Wardah foundation',
                'kategori_barang' => 'Cosmetic',
                'harga' => '25000',
                'qty' => '27'
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Wardah lipstik',
                'kategori_barang' => 'Cosmetic',
                'harga' => '23500',
                'qty' => '26'
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'makeOver Eyeliner',
                'kategori_barang' => 'Cosmetic',
                'harga' => '38000',
                'qty' => '75'
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Maybeline Superstay Matte',
                'kategori_barang' => 'Cosmetic',
                'harga' => '42000',
                'qty' => '15'
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Maybeline fit me',
                'kategori_barang' => 'Cosmetic',
                'harga' => '538000',
                'qty' => '34'
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Nivea lip balm',
                'kategori_barang' => 'Cosmetic',
                'harga' => '21000',
                'qty' => '75'
            ],
            [
                'kode_barang' => 'PRD021',
                'nama_barang' => 'Maybeline Mascara',
                'kategori_barang' => 'Cosmetic',
                'harga' => '38000',
                'qty' => '16'
            ],
            [
                'kode_barang' => 'PRD022',
                'nama_barang' => 'Makeover Multifix Matte Blusher',
                'kategori_barang' => 'Cosmetic',
                'harga' => '56000',
                'qty' => '23'
            ]
        ]);
        //
    }
}
