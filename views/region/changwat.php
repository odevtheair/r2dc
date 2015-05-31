<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\TopicRegion;
?>

<?php
$this->params['breadcrumbs'][] = ['label'=>'รายการตัวชี้วัดระดับเขต','url'=>['index','rep_year'=>$rep_year]];
$this->params['breadcrumbs'][]=['label'=>'รายจังหวัด']
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> 
        <?php
        $topic = TopicRegion::find()->where(['id'=>$kpi_id])->asArray()->one();
        echo $kpi_id; 
        echo "-".$topic['topic'];
        ?>
        </h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>        
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
       
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            ]);
                ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->