<?php
/**
 * CoreZoneDistrict
 *
 * This is the ActiveQuery class for [[\ommu\core\models\CoreZoneDistrict]].
 * @see \ommu\core\models\CoreZoneDistrict
 * 
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2018 OMMU (www.ommu.id)
 * @created date 26 April 2018, 20:40 WIB
 * @modified date 30 January 2019, 16:09 WIB
 * @link https://github.com/ommu/mod-core
 *
 */

namespace ommu\core\models\query;

class CoreZoneDistrict extends \yii\db\ActiveQuery
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
		return $this->andWhere(['t.publish' => 1]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function unpublish()
	{
		return $this->andWhere(['t.publish' => 0]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function deleted()
	{
		return $this->andWhere(['t.publish' => 2]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function suggest()
	{
		return $this->select(['district_id', 'city_id', 'district_name'])
			->published();
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\core\models\CoreZoneDistrict[]|array
	 */
	public function all($db = null)
	{
		return parent::all($db);
	}

	/**
	 * {@inheritdoc}
	 * @return \ommu\core\models\CoreZoneDistrict|array|null
	 */
	public function one($db = null)
	{
		return parent::one($db);
	}
}
