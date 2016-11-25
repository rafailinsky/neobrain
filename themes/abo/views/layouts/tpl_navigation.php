
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
                             array('label'=>'Entradas', 'url'=>array('/entradas/index')),
                             array('label'=>'Salidas', 'url'=>array('/salidas/index')),
                             array('label'=>'Puestos', 'url'=>array('/puestos/index')),
                             array('label'=>'Empresas', 'url'=>array('/empresas/index')),
                             array('label'=>'Obras', 'url'=>array('/obras/index')),
                             array('label'=>'Usuarios', 'url'=>array('/usuarios/index')), )),

                        

                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'<i class="icon-user"></i> Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                       
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
 <?php /*
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">


<img src="<?php echo $baseUrl ;?>/img/logi.png" width="33" height="33" alt="Open Invoices">


        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav --> */ ?>