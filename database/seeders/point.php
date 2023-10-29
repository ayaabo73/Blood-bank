<?php

namespace Database\Seeders;

use App\Models\point as ModelsPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class point extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsPoint::create([
            'name'=>'تحاليل',
            'point'=>'30',
    
            ]);
            ModelsPoint::create([
              'name'=>'دم مجاني',
             'point'=>'30',
                          
              ]);
         ModelsPoint::create([
           'name'=>'أدوية',
            'point'=>'40',
         ]);
            
         ModelsPoint::create([
             'name'=>'فحص عام',
            'point'=>'50',
            
           ]);
           ModelsPoint::create([
            'name'=>'زيارة طبيب',
            'point'=>'70',
    
            ]);
           
          ModelsPoint::create([
           'name'=>'جرعات كيماوية',
           'point'=>'80',
            
            ]);
        
      
        ModelsPoint::create([
          'name'=>'تصوير إشعاعي',
         'point'=>'100',
                        
          ]);
         ModelsPoint::create([
            'name'=> 'عمل جراحي',
           'point'=>'200',
                            

         ]);
                                                                                                     
              
    }
}
