<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institutions')->delete();
        
        \DB::table('institutions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Western Mindanao State University',
                'acronym' => 'WMSU',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:13:06',
                'updated_at' => '2021-07-07 02:13:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Universidad De Zamboanga',
                'acronym' => 'UZ',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:14:06',
                'updated_at' => '2021-07-07 02:14:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Basilan State College',
                'acronym' => 'BSC',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:15:13',
                'updated_at' => '2021-07-07 02:15:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Zamboanga State College Of Marine Sciences And Technology',
                'acronym' => 'ZSCMST',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:16:03',
                'updated_at' => '2021-07-07 02:16:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Department Of Health Zpchd',
                'acronym' => 'DOH ZPCHD',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:16:35',
                'updated_at' => '2021-07-07 02:16:35',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ateneo De Zamboanga University',
                'acronym' => 'ADZU',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:16:52',
                'updated_at' => '2021-07-07 02:17:02',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'J.H Cerilles State College',
                'acronym' => 'JHCSC',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:18:12',
                'updated_at' => '2021-07-07 02:18:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jose Rizal Memorial State University',
                'acronym' => 'JRMSU',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:19:00',
                'updated_at' => '2021-07-07 02:19:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Bureau Of Fisheries And Aquatic Resources, Regional Office IX',
                'acronym' => 'BFAR-IX',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:19:35',
                'updated_at' => '2021-07-07 02:19:45',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Andres Bonifacio College',
                'acronym' => 'ABC',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:20:00',
                'updated_at' => '2021-07-07 02:20:00',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Ecosystems Research And Development Bureau',
                'acronym' => 'ERDB-FWRDEC',
                'address' => 'n/a',
                'avatar' => 'school.jpg',
                'created_at' => '2021-07-07 02:21:26',
                'updated_at' => '2021-07-07 02:22:19',
            ),
        ));
        
        
    }
}