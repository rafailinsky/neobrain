<?php /* @var $this Controller */ ?>
<!-- <link rel="shortcut icon" href="img/favicon.png"> -->
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid" id="content">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('NEOBRAIN', array('site/index')),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>


    <?php
/*Yii::app()->user->setFlash('notice', "<strong>Warning!</strong> Best check yo self, you're not looking too good.");
Yii::app()->user->setFlash('error', "<strong>Oh snap!</strong> Change a few things up and try submitting again.");
Yii::app()->user->setFlash('success', "<strong>Well done!</strong> You successfully read this important alert message.");
Yii::app()->user->setFlash('info', "<strong>Heads up!</strong> This alert needs your attention, but it's not super important.");
*/
foreach(Yii::app()->user->getFlashes() as $key => $message) {
  echo 
       '<div class="alert alert-' . $key . '">'
      .'<button type="button" class="close" data-dismiss="alert">×</button>'
      . $message . "</div>\n";
}
?>


    <div class='info' style'text-align:left;'>

  <?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    echo '<ul class="flashes">';
    foreach($flashMessages as $key => $message) {
        echo '<li><div class="flash-' . $key . '">' . $message . "</div></li>\n";
    }
    echo '</ul>';
}
?>
</div>
    
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>


<?php
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.5}, 1500).fadeOut("slow");',
   CClientScript::POS_READY
);
?>