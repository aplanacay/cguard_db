<?php

use miloschuman\highcharts\Highcharts;
use miloschuman\highcharts\Highmaps;
use yii\db\Query;
use lo\widgets\SlimScroll;
use yii\web\JsExpression;

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>

<?= SlimScroll::widget([
  'options'=>[
    'height'=>'500px'
  ]
]); 
?>

<?php
  //get data from database
 $xQuery = new Query;

  $xQuery->select('region_name')
          ->from('cguard_passport')
          ->groupby('region_name');

  $xAxisArray = $xQuery->all();

  $xAxis = array();
  
  foreach($xAxisArray as $value){
      array_push($xAxis, $value['region_name']);
  }
  
  $dataQuery = new Query;

  $dataQuery->select('count(*)')
              ->from('cguard_passport')
              ->groupby('region_name');

  $dataArray = $dataQuery->all();

  $data = array();

  foreach($dataArray as $value){
      array_push($data, $value['count']);
  }      
?>

    <div class="body-content">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?php    
                echo Highcharts::widget([
                   'options' => [
                      'chart' => [
                        'type' => 'column',
                      ],
                      'title' => ['text' => 'Collections per Region'],
                      'xAxis' => [
                         'categories' => $xAxis,
                      ],
                      'yAxis' => [
                         'title' => ['text' => 'Collections']
                      ],
                      'series' => [
                         [
                            'name' => 'Collections',
                            'data' => $data,                            
                         ],
                      ],
                      'responsive' => [
                            'rules' => [
                            'condition' => [
                                'maxWidth' => 500,
                            ],
                            'chartOptions' => [
                                'legend' => [
                                    'align' => 'center',
                                    'verticalAlign' => 'bottom',
                                    'layout' => 'horizontal',
                                ],
                            ],
                            'yAxis' => [
                                'labels' => [
                                    'align' => 'left',
                                    'x' => 0,
                                    'y' => -5,
                                ],
                            ],
                            'title' => [
                                'text' => 'null',
                            ],                    
                            ],
                            'subtitle' => [
                                'text' => 'null',
                            ],
                            'credits' => [
                                'enabled' => 'false',
                            ],
                        ],                        
                      ]
                ]);
            ?>
        </div>    

         <div class="col-lg-4 col-md-4 col-sm-12">
            <?php

              $this->registerJsFile('http://code.highcharts.com/mapdata/countries/ph/ph-all.js', [
                  'depends' => 'miloschuman\highcharts\HighchartsAsset'
              ]);

              echo Highmaps::widget([
                'options' => [  
                  'chart' => [
                    'spacingBottom' => 20
                  ],              
                  'title' => [
                    'text' => 'Native Corn Collections Map'
                  ],
                  'subtitle' => [
                    'text' => 'Source map: <a href="http://code.highcharts.com/mapdata/countries/ph/ph-all.js">Philippines</a>'
                  ],
                  'legend' => [
                    'enabled' => false,
                  ],
                  'credits' => [
                    'enabled' => false,
                  ],
                  'mapNavigation' => [
                        'enabled' => true,
                        'buttonOptions' => [
                            'verticalAlign' => 'bottom',
                        ]
                    ],
                    /*'colorAxis' => [
                        'min' => 0,
                    ],*/                  

                  'series' => 
                  [

                    [                      
                      'name' => 'Number of Collections',
                      'data' => [
                              //BICOL
                              ['hc-key' => 'ph-al', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'                                
                              ],
                              ['hc-key' => 'ph-cs', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],                                                              
                              ['hc-key' => 'ph-6999', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],                                                              
                              ['hc-key' => 'ph-ct', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],                 
                              ['hc-key' => 'ph-mb', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],                                                              
                              ['hc-key' => 'ph-cn', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],                                                              
                              ['hc-key' => 'ph-sr', 'value' => $data[0], 'region' => $xAxis[0], 'color' => '#e63900'
                              ],       

                              //EASTERN VISAYAS
                              ['hc-key' => 'ph-es', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                               
                              ],
                              ['hc-key' => 'ph-le', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                           
                              ],
                              ['hc-key' => 'ph-sm', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                                
                              ],
                              ['hc-key' => 'ph-ns', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                                
                              ],
                              ['hc-key' => 'ph-6997', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                               
                              ],                   
                              ['hc-key' => 'ph-6998', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                                
                              ],
                              ['hc-key' => 'ph-bi', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                                
                              ],
                              ['hc-key' => 'ph-sl', 'value' => $data[1], 'region' => $xAxis[1], 'color' => '#00b300'                                
                              ], 

                              //DAVAO
                              ['hc-key' => 'ph-ds', 'value' => $data[2], 'region' => $xAxis[2], 'color' => '#ff3333'                                
                              ],
                              ['hc-key' => 'ph-do', 'value' => $data[2], 'region' => $xAxis[2], 'color' => '#ff3333'                               
                              ],
                              ['hc-key' => 'ph-dv', 'value' => $data[2], 'region' => $xAxis[2], 'color' => '#ff3333'                               
                              ],
                              ['hc-key' => 'ph-cl', 'value' => $data[2], 'region' => $xAxis[2], 'color' => '#ff3333'                               
                              ],
                              ['hc-key' => 'ph-6989', 'value' => $data[2], 'region' => $xAxis[2], 'color' => '#ff3333'                               
                              ],   

                              //SOCCSKSARGEN
                              ['hc-key' => 'ph-nc', 'value' => $data[3], 'region' => $xAxis[3], 'color' => '#660066'                              
                              ],
                              ['hc-key' => 'ph-sk', 'value' => $data[3], 'region' => $xAxis[3], 'color' => '#660066'                                                              
                              ],
                              ['hc-key' => 'ph-sc', 'value' => $data[3], 'region' => $xAxis[3], 'color' => '#660066'                                                             
                              ],
                              ['hc-key' => 'ph-sg', 'value' => $data[3], 'region' => $xAxis[3], 'color' => '#660066'                                                              
                              ],
                              ['hc-key' => 'ph-6990', 'value' => $data[3], 'region' => $xAxis[3], 'color' => '#660066'                                                              
                              ], 

                              //WESTERN VISAYAS
                              ['hc-key' => 'ph-aq', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                                              
                              ],
                              ['hc-key' => 'ph-ii', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-6987', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-6986', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-nd', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-gu', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-ak', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],
                              ['hc-key' => 'ph-cp', 'value' => $data[4], 'region' => $xAxis[4], 'color' => '#e6e600'                                
                              ],   

                              //CENTRAL VISAYAS
                              ['hc-key' => 'ph-bo', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                
                              ],
                              ['hc-key' => 'ph-cb', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                
                              ],
                              ['hc-key' => 'ph-6985', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                  
                              ],
                              ['hc-key' => 'ph-6983', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                  
                              ],
                              ['hc-key' => 'ph-6984', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                 
                              ],
                              ['hc-key' => 'ph-sq', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                 
                              ],
                              ['hc-key' => 'ph-nr', 'value' => $data[5], 'region' => $xAxis[5], 'color' => '#ac7339'                                  
                              ], 

                              //MIMAROPA
                              ['hc-key' => 'ph-pl', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                  
                              ],
                              ['hc-key' => 'ph-ro', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                    
                              ],
                              ['hc-key' => 'ph-mc', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                    
                              ],
                              ['hc-key' => 'ph-6996', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                    
                              ],
                              ['hc-key' => 'ph-mr', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                    
                              ],
                              ['hc-key' => 'ph-mq', 'value' => $data[6], 'region' => $xAxis[6], 'color' => '#0039e6'                                   
                              ],   

                              //ZAMBOANGA PENINSULA
                              ['hc-key' => 'ph-2603', 'value' => $data[7], 'region' => $xAxis[7], 'color' => '#ff9900'                                    
                              ],
                              ['hc-key' => 'ph-6457', 'value' => $data[7], 'region' => $xAxis[7], 'color' => '#ff9900'                                
                              ],
                              ['hc-key' => 'ph-6456', 'value' => $data[7], 'region' => $xAxis[7], 'color' => '#ff9900'                                
                              ],
                              ['hc-key' => 'ph-zs', 'value' => $data[7], 'region' => $xAxis[7], 'color' => '#ff9900'                                
                              ],                          
                              ['hc-key' => 'ph-zn', 'value' => $data[7], 'region' => $xAxis[7], 'color' => '#ff9900'                               
                              ],  

                              //CALABARZON
                              ['hc-key' => 'ph-bt', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                                
                              ],
                              ['hc-key' => 'ph-qz', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                                
                              ],
                              ['hc-key' => 'ph-lg', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                                
                              ],
                              ['hc-key' => 'ph-ri', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                                
                              ],
                              ['hc-key' => 'ph-lu', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                               
                              ],
                              ['hc-key' => 'ph-cv', 'value' => $data[8], 'region' => $xAxis[8], 'color' => '#00e6ac'                               
                              ], 

                              //CARAGA
                              ['hc-key' => 'ph-di', 'value' => $data[9], 'region' => $xAxis[9], 'color' => '#cc0066'                                
                              ],
                              ['hc-key' => 'ph-an', 'value' => $data[9], 'region' => $xAxis[9], 'color' => '#cc0066'                                
                              ],
                              ['hc-key' => 'ph-ss', 'value' => $data[9], 'region' => $xAxis[9], 'color' => '#cc0066'                                
                              ],
                              ['hc-key' => 'ph-as', 'value' => $data[9], 'region' => $xAxis[9], 'color' => '#cc0066'                                
                              ],
                              ['hc-key' => 'ph-6995', 'value' => $data[9], 'region' => $xAxis[9], 'color' => '#cc0066'                               
                              ],  

                              //ILOCOS
                              ['hc-key' => 'ph-pn', 'value' => $data[10], 'region' => $xAxis[10], 'color' => '#33ff33'                                
                              ],
                              ['hc-key' => 'ph-7022', 'value' => $data[10], 'region' => $xAxis[10], 'color' => '#33ff33'                                   
                              ],
                              ['hc-key' => 'ph-in', 'value' => $data[10], 'region' => $xAxis[10], 'color' => '#33ff33'                                     
                              ],
                              ['hc-key' => 'ph-is', 'value' => $data[10], 'region' => $xAxis[10], 'color' => '#33ff33'                                     
                              ],
                              ['hc-key' => 'ph-lu', 'value' => $data[10], 'region' => $xAxis[10], 'color' => '#33ff33'                                     
                              ],                                                             
                      ],                      
                      'mapData' => new JsExpression('Highcharts.maps["countries/ph/ph-all"]'),
                      'tooltip' => [
                        'pointFormat' => '{point.region}:{point.value}',                        
                      ],                    
                      'joinBy' => 'hc-key',
                            
                      'states' => [
                          'hover' => [
                              'color' => '#737373',
                          ]
                      ],
                      'dataLabels' => [
                          'enabled' => false,
                          'format' => '{point.name}',
                      ]
                    ],                     
                  ],
                ],
              ]);              
            ?>
         </div>  
        
<?= SlimScroll::end(); ?>

