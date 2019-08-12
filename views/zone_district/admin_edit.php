<?php
/**
 * Ommu Zone Districts (ommu-zone-district)
 * @var $this ZonedistrictController
 * @var $model OmmuZoneDistrict
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2015 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/mod-core
 *
 */

	$this->breadcrumbs=array(
		'Ommu Zone Districts'=>array('manage'),
		$model->district_id=>array('view','id'=>$model->district_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('/zone_district/_form', array('model'=>$model)); ?>
</div>
