<?php
/**
 * @copyright Copyright(c) 2016 Webtools Ltd
 * @copyright Copyright(c) 2018 Thamtech, LLC
 * @link https://github.com/thamtech/yii2-scheduler
 * @license https://opensource.org/licenses/MIT
 *
 *
 * Log Entry view
 *
 * @var yii\web\View $this
 * @var thamtech\scheduler\models\SchedulerLog $model
 */

use yii\helpers\Html;
use thamtech\scheduler\models\SchedulerTask;


$this->title = $model->__toString();
$this->params['breadcrumbs'][] = ['label' => SchedulerTask::label(2), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->schedulerTask->__toString(), 'url' => ['view', 'id' => $model->scheduler_task_id]];
$this->params['breadcrumbs'][] = $model->__toString();
?>

<div class="">

    <h1><?=$this->title ?></h1>

    <div class="well">
        <dl class="dl-horizontal">
            <dt>Description</dt>
            <dd><?= Html::encode($model->schedulerTask->description) ?></dd>

            <dt><?= $model->getAttributeLabel('started_at') ?></dt>
            <dd><?= Yii::$app->formatter->asDatetime($model->started_at) ?></dd>

            <dt><?= $model->getAttributeLabel('ended_at') ?></dt>
            <dd><?= Yii::$app->formatter->asDatetime($model->ended_at) ?></dd>

            <dt>Duration</dt>
            <dd><?= $model->getDuration() ?></dd>

            <dt>Result</dt>
            <dd>
                <?php if ($model->error): ?>
                    <span class="text-danger glyphicon glyphicon-remove-circle"></span> Error
                <?php else: ?>
                    <span class="text-success glyphicon glyphicon-ok-circle"></span> Success
                <?php endif ?>
            </dd>
        </dl>

        <h3>Output</h3>
        <textarea class="form-control" rows="7"><?= $model->output ?></textarea>
    </div>
</div>
