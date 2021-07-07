<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dropdowns')->delete();
        
        \DB::table('dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'type' => 'n/a',
                'classification' => 'n/a',
                'color' => 'n/a',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ongoing',
                'type' => 'Research Status',
                'classification' => 'Status',
                'color' => 'blue',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Completed',
                'type' => 'Research Status',
                'classification' => 'Status',
                'color' => 'green',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Operational',
                'type' => 'Research Status',
                'classification' => 'Status',
                'color' => 'yellow',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'With IPR',
                'type' => 'IPR Status',
                'classification' => 'Status',
                'color' => 'green',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Without IPR',
                'type' => 'IPR Status',
                'classification' => 'Status',
                'color' => 'green',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'On Process IPR',
                'type' => 'IPR Status',
                'classification' => 'Status',
                'color' => 'green',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Capacities',
                'type' => 'Research Status',
                'classification' => 'Classifications',
                'color' => 'n/a',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Knowledge-based',
                'type' => 'Research Status',
                'classification' => 'Classifications',
                'color' => 'n/a',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Technology',
                'type' => 'Research Status',
                'classification' => 'Classifications',
                'color' => 'n/a',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Engineering And Technology',
                'type' => 'Research Status',
                'classification' => 'Specialties',
                'color' => 'n/a',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Social Sciences',
                'type' => 'Research Status',
                'classification' => 'Specialties',
                'color' => 'n/a',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Medical And Health Sciences',
                'type' => 'Research Status',
                'classification' => 'Specialties',
                'color' => 'n/a',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Agricultural Sciences',
                'type' => 'Research Status',
                'classification' => 'Specialties',
                'color' => 'n/a',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Natural Sciences',
                'type' => 'Research Status',
                'classification' => 'Specialties',
                'color' => 'n/a',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Intructor I',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Instructor II',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Instructor III',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Professor I',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Professor II',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Professor III',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Professor IV',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Professor V',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Associate Professor I',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Associate Professor II',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Associate Professor III',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Associate Professor IV',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Associate Professor V',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Assistant Professor I',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Assistant Professor II',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Assistant Professor III',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Assistant Professor IV',
                'type' => 'Research Status',
                'classification' => 'Designations',
                'color' => 'n/a',
            ),
        ));
        
        
    }
}