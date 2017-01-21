<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enterprise".
 *
 * @property integer $id
 * @property string $name
 * @property integer $shortName
 * @property string $logo
 * @property string $phone
 * @property integer $category_id
 * @property integer $user_id
 * @property integer $tariff_id
 * @property string $representative
 * @property string $workTime
 * @property string $siteUrl
 * @property string $email
 * @property string $icq
 * @property string $skype
 * @property integer $commentsOn_check
 * @property string $emailAlert
 * @property integer $emailAlert_check
 * @property integer $post_id
 * @property integer $stock_id
 * @property integer $album_id
 * @property string $albumName
 * @property integer $servise_id
 * @property integer $design_id
 * @property integer $socnet_id
 * @property integer $address_id
 * @property integer $block_id
 *
 * @property Vacancy[] $vacancies
 * @property EBrandMn[] $eBrandMns
 * @property Ebrand[] $brands
 * @property EalbumPhotoMn[] $ealbumPhotoMns
 * @property Ephoto[] $ePhotos
 * @property EfileMn[] $efileMns
 * @property Efile[] $eFiles
 * @property Ekeyword[] $ekeywords
 * @property Eservice $servise
 * @property Esocnet $socnet
 * @property EAddress $address
 * @property EBlock $block
 * @property EDesign $design
 * @property EBlock $block0
 * @property Ecategory $category
 * @property Euser $user
 * @property Etariff $tariff
 * @property Ephone[] $ephones
 * @property EpostMn[] $epostMns
 * @property EproductMn[] $eproductMns
 * @property EProduct[] $products
 * @property EstockMn[] $estockMns
 * @property Estock[] $eStocks
 * @property PageMn[] $pageMns
 * @property EPage[] $pages
 */
class Enterprise extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enterprise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'tariff_id', 'commentsOn_check', 'emailAlert_check', 'post_id', 'stock_id', 'album_id', 'servise_id', 'design_id', 'socnet_id', 'address_id', 'block_id'], 'integer'],
            [['name', 'logo', 'phone', 'workTime', 'emailAlert'], 'string', 'max' => 500],
            [['representative'], 'string', 'max' => 150],
            [['shortName', 'siteUrl', 'email', 'icq', 'skype', 'albumName'], 'string', 'max' => 255],
            [['servise_id'], 'exist', 'skipOnError' => true, 'targetClass' => Eservice::className(), 'targetAttribute' => ['servise_id' => 'id']],
            [['socnet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Esocnet::className(), 'targetAttribute' => ['socnet_id' => 'id']],
            [['address_id'], 'exist', 'skipOnError' => true, 'targetClass' => EAddress::className(), 'targetAttribute' => ['address_id' => 'id']],
            [['block_id'], 'exist', 'skipOnError' => true, 'targetClass' => EBlock::className(), 'targetAttribute' => ['block_id' => 'id']],
            [['design_id'], 'exist', 'skipOnError' => true, 'targetClass' => EDesign::className(), 'targetAttribute' => ['design_id' => 'id']],
            [['block_id'], 'exist', 'skipOnError' => true, 'targetClass' => EBlock::className(), 'targetAttribute' => ['block_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ecategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Euser::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['tariff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Etariff::className(), 'targetAttribute' => ['tariff_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'shortName' => 'Short Name',
            'logo' => 'Logo',
            'phone' => 'Phone',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'tariff_id' => 'Tariff ID',
            'representative' => 'Representative',
            'workTime' => 'Work Time',
            'siteUrl' => 'Site Url',
            'email' => 'Email',
            'icq' => 'Icq',
            'skype' => 'Skype',
            'commentsOn_check' => 'Comments On Check',
            'emailAlert' => 'Email Alert',
            'emailAlert_check' => 'Email Alert Check',
            'post_id' => 'Post ID',
            'stock_id' => 'Stock ID',
            'album_id' => 'Album ID',
            'albumName' => 'Album Name',
            'servise_id' => 'Servise ID',
            'design_id' => 'Design ID',
            'socnet_id' => 'Socnet ID',
            'address_id' => 'Address ID',
            'block_id' => 'Block ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasMany(Vacancy::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEBrandMns()
    {
        return $this->hasMany(EBrandMn::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasMany(Ebrand::className(), ['id' => 'brand_id'])->viaTable('eBrand_mn', ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEalbumPhotoMns()
    {
        return $this->hasMany(EalbumPhotoMn::className(), ['album_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEPhotos()
    {
        return $this->hasMany(Ephoto::className(), ['id' => 'ePhoto_id'])->viaTable('ealbum_photo_mn', ['album_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEfileMns()
    {
        return $this->hasMany(EfileMn::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEFiles()
    {
        return $this->hasMany(Efile::className(), ['id' => 'eFile_id'])->viaTable('efile_mn', ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEkeywords()
    {
        return $this->hasMany(Ekeyword::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServise()
    {
        return $this->hasOne(Eservice::className(), ['id' => 'servise_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocnet()
    {
        return $this->hasOne(Esocnet::className(), ['id' => 'socnet_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(EAddress::className(), ['id' => 'address_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlock()
    {
        return $this->hasOne(EBlock::className(), ['id' => 'block_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesign()
    {
        return $this->hasOne(EDesign::className(), ['id' => 'design_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlock0()
    {
        return $this->hasOne(EBlock::className(), ['id' => 'block_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Ecategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Euser::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTariff()
    {
        return $this->hasOne(Etariff::className(), ['id' => 'tariff_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEphones()
    {
        return $this->hasMany(Ephone::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpostMns()
    {
        return $this->hasMany(EpostMn::className(), ['ePost_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEproductMns()
    {
        return $this->hasMany(EproductMn::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(EProduct::className(), ['id' => 'product_id'])->viaTable('eproduct_mn', ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstockMns()
    {
        return $this->hasMany(EstockMn::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEStocks()
    {
        return $this->hasMany(Estock::className(), ['id' => 'eStock_id'])->viaTable('estock_mn', ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPageMns()
    {
        return $this->hasMany(EpageMn::className(), ['enterprise_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(EPage::className(), ['id' => 'page_id'])->viaTable('page_mn', ['enterprise_id' => 'id']);
    }
}
