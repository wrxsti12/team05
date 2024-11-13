<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            ['name' => '伸縮膜(LLDPE)', 'coe' => 3.69, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '苯乙烯-乙烯/丁烯-苯乙烯熱塑性彈性體', 'coe' => 4.74, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '標籤紙(PET)', 'coe' => 0.0135, 'unit' => '張', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '高密度聚乙烯(HDPE)', 'coe' => 2.21, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '聚丙烯(PP)', 'coe' => 1.95, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '紙棧板', 'coe' => 1.01, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '角紙', 'coe' => 1.02, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '裱面紙板', 'coe' => 1.6, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞芯紙', 'coe' => 0.988, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '牛皮紙', 'coe' => 1.22, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(B楞)', 'coe' => 0.813, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(A楞)', 'coe' => 1.06, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(AB楞)', 'coe' => 1.3, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '單層瓦楞紙箱(加權平均)', 'coe' => 1.1, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            
        ];

        
        
        // Insert data into the 'materials' table
        DB::table('materials')->insert($materials);
    }
}
