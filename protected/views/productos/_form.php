<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Productoscol'); ?>
		<?php echo $form->textField($model,'Productoscol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Productoscol'); ?>
	</div>






<div class="row">
		<?php echo $form->labelEx($model,'Imagen_Productos'); ?>                
		<?php echo $form->fileField($model,'Imagen_Productos');?>            
                
                    <?php echo !Yii::app()->user->isGuest?'5MB':'2MB'; ?></p>
                
                <?php echo $form->error($model,'imagen'); ?>
	</div>



<?php
$this->widget('ext.coco.CocoWidget'
		,array(
			'id'=>'cocowidget1',
			'onCompleted'=>'function(id,filename,jsoninfo){  }',
			'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
			'onMessage'=>'function(m){ alert(m); }',
			'allowedExtensions'=>array('jpeg','jpg','gif','png'), // server-side mime-type validated
			'sizeLimit'=>2000000, // limit in server-side and in client-side
			'uploadDir' => 'assets/', // coco will @mkdir it
			// this arguments are used to send a notification
			// on a specific class when a new file is uploaded,
			'receptorClassName'=>'application.models.Productos',
			'methodName'=>'onFileUploaded',
			'userdata'=>$model->primaryKey,
			// controls how many files must be uploaded
			'maxUploads'=>3, // defaults to -1 (unlimited)
    		'maxUploadsReachMessage'=>'No more files allowed', // if empty, no message is shown
			// controls how many files the can select (not upload, for uploads see also: maxUploads)
			'multipleFileSelection'=>true, // true or false, defaults: true
		));
   ?>





	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->