
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->

        <a class="brand" href=" ">  <img src="<?php echo $baseUrl ;?>/img/logi3.png" width="80" height="80" alt="Open Invoices">  <small> Construcciones</small>  </a>
    
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(

                         
                         array('label'=>'<i class="icon icon-home"></i> Inicio', 'url'=>array('/site/index')),
                         
                         

                         array('label'=>'<i class="icon icon-folder-open"></i> Registros <span class="caret"></span>', 'url'=>'#','itemOptions'=>array
                            ('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        'items'=>array(
                             array('label'=>'Empleados', 'url'=>array('/empleados/index')),
                             array('label'=>'Entradas', 'url'=>array('/asistencias/index')),
                             array('label'=>'Salidas', 'url'=>array('/salidas/index')),
                             array('label'=>'Puestos', 'url'=>array('/puestos/index')),
                             array('label'=>'Empresas', 'url'=>array('/empresas/index')),
                             array('label'=>'Obras', 'url'=>array('/obras/index')),
                             array('label'=>'Usuarios', 'url'=>array('/usuarios/index')), )),

                        

                        array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="icon-user"></i> Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                       
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
 <?php /*
