<?php

use Illuminate\Database\Seeder;

class ProjectImageTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('project_image_tag')->insert([
          [
            'tag_id' => '1',
            'project_id' => '1',
            'project_image_id' => '1',
          ],
          [
            'tag_id' => '2',
            'project_id' => '1',
            'project_image_id' => '1',
          ],
          [
            'tag_id' => '3',
            'project_id' => '1',
            'project_image_id' => '1',
          ],
          [
            'tag_id' => '4',
            'project_id' => '1',
            'project_image_id' => '1',
          ],
          [
            'tag_id' => '5',
            'project_id' => '1',
            'project_image_id' => '2',
          ],
          [
            'tag_id' => '6',
            'project_id' => '1',
            'project_image_id' => '2',
          ],
          [
            'tag_id' => '7',
            'project_id' => '1',
            'project_image_id' => '3',
          ],
          [
            'tag_id' => '8',
            'project_id' => '1',
            'project_image_id' => '4',
          ],
          [
            'tag_id' => '9',
            'project_id' => '1',
            'project_image_id' => '4',
          ],
          [
            'tag_id' => '10',
            'project_id' => '2',
            'project_image_id' => '5',
          ],
          [
            'tag_id' => '11',
            'project_id' => '2',
            'project_image_id' => '6',
          ],
          [
            'tag_id' => '12',
            'project_id' => '2',
            'project_image_id' => '7',
          ],
          [
            'tag_id' => '13',
            'project_id' => '3',
            'project_image_id' => '8',
          ],
          [
            'tag_id' => '14',
            'project_id' => '3',
            'project_image_id' => '9',
          ],          
          [
            'tag_id' => '15',
            'project_id' => '3',
            'project_image_id' => '10',
          ],
          [
            'tag_id' => '16',
            'project_id' => '4',
            'project_image_id' => '11',
          ],
          [
            'tag_id' => '17',
            'project_id' => '5',
            'project_image_id' => '12',
          ],
          [
            'tag_id' => '18',
            'project_id' => '5',
            'project_image_id' => '13',
          ],         
          [
            'tag_id' => '19',
            'project_id' => '5',
            'project_image_id' => '14',
          ],
          [
            'tag_id' => '20',
            'project_id' => '6',
            'project_image_id' => '15',
          ],
          [
            'tag_id' => '21',
            'project_id' => '6',
            'project_image_id' => '16',
          ],
          [
            'tag_id' => '22',
            'project_id' => '6',
            'project_image_id' => '17',
          ],
          [
            'tag_id' => '23',
            'project_id' => '7',
            'project_image_id' => '18',
          ],
          [
            'tag_id' => '24',
            'project_id' => '8',
            'project_image_id' => '19',
          ],
          [
            'tag_id' => '25',
            'project_id' => '9',
            'project_image_id' => '20',
          ],
          [
            'tag_id' => '26',
            'project_id' => '10',
            'project_image_id' => '21',
          ],







        ]);
    }
}
