<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);
$this->pageTitle=$model->title;
?>

<?php $this->renderPartial('_view', array(
	'data'=>$model,
)); ?>

<div id="comments">
		<h3>
			<?php echo Utilities::pluralize($model->commentCount, 'comment', 'comments'); ?>
		</h3>

		<?php // $this->renderPartial('_comments',array(
		// 			'post'=>$model,
		// 			'comments'=>$model->comments)); ?>

	<h3>Leave a Comment</h3>

	<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
		</div>
	<?php else: ?>
		<?php // $this->renderPartial('/comment/_form',array(
			// 'model'=>$comment)); ?>
	<?php endif; ?>

</div><!-- comments -->
