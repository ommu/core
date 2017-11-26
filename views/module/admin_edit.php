<?php
/**
 * Ommu Plugins (ommu-plugins)
 * @var $this ModuleController
 * @var $model OmmuPlugins
 * @var $form CActiveForm
 * version: 1.3.0
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-core
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Ommu Plugins'=>array('manage'),
		$model->name=>array('view','id'=>$model->plugin_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>