<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\HighchartsAsset;
HighchartsAsset::register($this)->withScripts(['highcharts-more', 'modules/exporting', 'modules/drilldown']);



$this->title = 'Analisis Stakeholder';
?>
<style>

</style>
<div class="site-index">
  <div class= "col-md-8">>


<?= Highcharts::widget([
   'options' => [
       'scripts' => [
       'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
       'modules/exporting', // adds Exporting button/menu to chart
       'themes/grid'        // applies global 'grid' theme to all charts
    ],
      'chart' => [
              'type' => 'scatter', 
              'height'=> 600,
              'width'=> 600,
              ],
      'credits'=> [
            'enabled'=> false
        ],
      'title' => ['text' => 'Analisis Stakeholder'],

      'plotOptions'=> [
            'series'=> [
                'marker'=> [
                    'radius'=> 5
                ]
            ]
        ],


      'xAxis' => [
         'plotLines'=> [[
                'color'=> 'blue',
                'dashStyle'=> 'dot',
                'width'=> 2,
                'value'=> 3,
                'label'=> [
                    'rotation'=> 0,
                    'y'=> 15,
                    'style'=> [
                        'fontStyle'=> 'italic'
                    ],
                    'text'=> ''
                ],
                'zIndex'=> 2
            ]],
            'allowDecimals'=> false,
            'max' => 5,
            'min'=>1
      ],
      'labels' => [
      'items'=> ['x','y','z', 'name']
      ],

      
      'yAxis' => [
         'plotLines'=> [[
                'color'=> 'black',
                'dashStyle'=> 'dot',
                'width'=> 2,
                'value'=> 3,
                'label'=> [
                    'align'=> 'right',
                    'style'=> [
                        'fontStyle'=> 'italic'
                    ],
                    'text'=> '',
                    'x'=> 10
                ],
                'zIndex'=> 2
            ]],
          'allowDecimals'=> false,
          'max' => 5,
          'min'=>1
      ],


        'series'=> [[
            'name'=> 'Stakeholder',
            'data'=> [
                [ 'x'=> 3.03, 'y'=> 3.00, 'z'=> 1, 'name'=> 'BE', 'country'=> 'Belgium' ],
                [ 'x'=> 3.18, 'y'=> 3.29, 'z'=> 1, 'name'=> 'DE', 'country'=> 'Germany' ],
                [ 'x'=> 3.24, 'y'=> 3.21, 'z'=> 1, 'name'=> 'FI', 'country'=> 'Finland' ],
                [ 'x'=> 3.09, 'y'=> 3.08, 'z'=> 1, 'name'=> 'NL', 'country'=> 'Netherlands' ],
                [ 'x'=> 2.30, 'y'=> 2.61, 'z'=> 1, 'name'=> 'SE', 'country'=> 'Sweden' ],
                [ 'x'=> 2.52, 'y'=> 2.45, 'z'=> 1, 'name'=> 'ES', 'country'=> 'Spain' ],
                [ 'x'=> 2.61, 'y'=> 2.95, 'z'=> 1, 'name'=> 'FR', 'country'=> 'France' ],
                [ 'x'=> 2.33, 'y'=> 2.50, 'z'=> 1, 'name'=> 'NO', 'country'=> 'Norway' ],
                [ 'x'=> 3.24, 'y'=> 3.08, 'z'=> 1, 'name'=> 'UK', 'country'=> 'United Kingdom' ],
                [ 'x'=> 2.91, 'y'=> 2.82, 'z'=> 1, 'name'=> 'IT', 'country'=> 'Italy' ],
               
            ]
        ]]
   ]
]);
?>


</div>
<div class= "col-md-4">

<h1 style="text-align:center;">
  Analisis Stakeholder
</h1>

  <p style="text-align:justify;">

Analisis stakeholder ini merupakan instrumen yang sangat penting untuk memahami konteks sosial dan kelembagaan dari satu kegiatan program / proyek.  Hal-hal yang diungkap dari tools ini bisa memberikan informasi sangat penting seawal mungkin tentang : 
</br>
</br>        i.            siapa saja yang akan dipengaruhi oleh program / proyek baik positif ataupun negatif;
</br>      ii.            siapa saja yang mungkin memberikan pengaruh terhadap program / proyek baik positif ataupun negatif;
</br>    iii.            individu, kelompok, dan lembaga apa saja yang perlu dilibatkan dalam program / proyek serta bagaimana caranya; dan siapa saja yang perlu dibangun kapasitasnya agar turut berpartisipasi aktif di dalamnya.
</p>
  </div>
</div>








