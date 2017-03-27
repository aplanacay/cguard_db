<?php

use miloschuman\highcharts\Highcharts;
use yii\db\Query;
/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <div class="body-content">
        <div class="table-responsive col-lg-10 col-lg-offset-1">
            <?php

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

        <div class="table-responive col-lg-4">
          <?php

            /*$dataQuery = new Query;

            $dataQuery->select('count(*), region_name')
                        ->from('cguard_passport')
                        ->groupby('region_name');

            $dataArray = $dataQuery->all();

            $data = array();

            foreach($dataArray as $value){
                array_push($data, $value['count']);
            }
            print_r($data);
            $name = array();

             foreach($dataArray as $value){
                array_push($name, $value['region_name']);
            }
            print_r($name);

            echo Highcharts::widget([
              'options' => [
                  'chart' => [
                    'type' => 'pie',
                  ],
                  'title' => [
                    'text' => 'Distribution of Collections per Island Group',
                  ],
                  'series' => [
                      'name' => 'Brands',
                      'colorByPoint' => true,
                      'data' => [[
                          'name' => 'Microsoft Internet Explorer',
                          'y' => 56.33
                      ], 
                      [
                          'name' => 'Chrome',
                          'y' => 24.03,
                          'sliced' => true,
                          'selected' => true
                      ], 
                      [
                          'name' => 'Firefox',
                          'y' => 10.38
                      ], 
                      [
                          'name' => 'Safari',
                          'y' => 4.77
                      ], 
                      [
                          'name' => 'Opera',
                          'y' => 0.91
                      ], 
                      [
                          'name' => 'Proprietary or Undetectable',
                          'y' => 0.2
                      ]],
                  ],
                  'series' => [
                    'name' => 'Collections',
                    'data' => [
                      'name' => $name,
                      'y' => $data,
                    ],                    
                  ],
                  'series' => 
              ],
            ]);*/
          ?>
        </div>
    </div>
</div>
