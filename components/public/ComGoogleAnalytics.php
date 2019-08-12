<?php
/**
 * ComGoogleAnalytics
 * 
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/mod-core
 *
 */
class ComGoogleAnalytics extends CWidget
{

	public function init() {
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		
		$model = OmmuSettings::model()->findByPk(1, array(
			'select' => 'site_url, analytic, analytic_id',
		));

		$this->render('com_google_analytics', array(
			'model' => $model,
		));	
	}
}
