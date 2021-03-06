<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
	array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>

<div class="row-fluid">


<div class="span3 ">
      <div class="stat-block">
    <ul>
    <li class="stat-count"><span>ABC</span><span>123</span></li>
    </ul>
    </div>
  </div>

  <div class="span3 ">
      <div class="stat-block">
    <ul>
    <li class="stat-count"><span>ABC</span><span>123</span></li>
    </ul>
    </div>
  </div>

  <div class="span3 ">
      <div class="stat-block">
    <ul>
    <li class="stat-count"><span>ABC</span><span>123</span></li>
    </ul>
    </div>
  </div>

  <div class="span3 ">
      <div class="stat-block">
    <ul>
    <li class="stat-count"><span>ABC</span><span>123</span></li>
    </ul>
    </div>
  </div>
  </div>
       <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

   <div class="row-fluid">
       <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/folder_page.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

   
       <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

    
       <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

    
       <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

    <div class="span2">
        <div class="summary">
          <ul> 
            <li>
                <span class="summary-icon">
                    <img src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36" alt="Active Members">
                </span>
                <span class="summary-number">654,321</span>
                <span class="summary-title"> Active Members</span>
            </li>
          </ul>
        </div>
    </div>

<?php /*
<div class="row-fluid">
    
  <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    
    </div>
  


<div class="row-fluid">
    
  <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    
    </div>


<div class="row-fluid">
    
  <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    <div class="span3 ">
      <div class="stat-block">
	  <ul>
		<li class="stat-count"><span>ABC</span><span>123</span></li>
	  </ul>
	  </div>
  </div>
    
    
    </div> 
    */
 
   
    




            