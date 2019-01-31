<?php
/**
 * CorePageViews
 *
 * This is the ActiveQuery class for [[\ommu\core\models\CorePageViews]].
 * @see \ommu\core\models\CorePageViews
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 31 January 2019, 16:07 WIB
 * @link https://github.com/ommu/mod-core
 *
 */

namespace ommu\core\models\query;

class CorePageViews extends \yii\db\ActiveQuery
{
	/*
	public function active()
	{
		return $this->andWhere('[[status]]=1');
	}
	*/

	/**
	 * {@inheritdoc}
	 */
	public function published() 
	{
		return $this->andWhere(['publish' => 1]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function unpublish() 
	{
		return $this->andWhere(['publish' => 0]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function deleted() 
	{
		return $this->andWhere(['publish' => 2]);
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\core\models\CorePageViews[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\core\models\CorePageViews|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
