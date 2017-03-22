<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;

?>
<div class="site-index">
    <div class="body-content">
        <div class="table-responsive col-lg-4">
            <?php
                use miloschuman\highcharts\Highcharts;
                use yii\db\Query;

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
    </div>
</div>
