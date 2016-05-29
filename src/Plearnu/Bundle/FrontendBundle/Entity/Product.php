<?php

namespace Plearnu\Bundle\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateLastModified;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var integer
     */
    private $clickCount;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var boolean
     */
    private $isCod;

    /**
     * @var boolean
     */
    private $isFreeShipping;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return Product
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Product
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateLastModified
     *
     * @param \DateTime $dateLastModified
     * @return Product
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->dateLastModified = $dateLastModified;

        return $this;
    }

    /**
     * Get dateLastModified
     *
     * @return \DateTime 
     */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set clickCount
     *
     * @param integer $clickCount
     * @return Product
     */
    public function setClickCount($clickCount)
    {
        $this->clickCount = $clickCount;

        return $this;
    }

    /**
     * Get clickCount
     *
     * @return integer 
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Product
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Product
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isCod
     *
     * @param boolean $isCod
     * @return Product
     */
    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;

        return $this;
    }

    /**
     * Get isCod
     *
     * @return boolean 
     */
    public function getIsCod()
    {
        return $this->isCod;
    }

    /**
     * Set isFreeShipping
     *
     * @param boolean $isFreeShipping
     * @return Product
     */
    public function setIsFreeShipping($isFreeShipping)
    {
        $this->isFreeShipping = $isFreeShipping;

        return $this;
    }

    /**
     * Get isFreeShipping
     *
     * @return boolean 
     */
    public function getIsFreeShipping()
    {
        return $this->isFreeShipping;
    }
    /**
     * @var string
     */
    private $youtubeVideoUrl;

    /**
     * @var integer
     */
    private $shippingCategoryId;


    /**
     * Set youtubeVideoUrl
     *
     * @param string $youtubeVideoUrl
     * @return Product
     */
    public function setYoutubeVideoUrl($youtubeVideoUrl)
    {
        $this->youtubeVideoUrl = $youtubeVideoUrl;

        return $this;
    }

    /**
     * Get youtubeVideoUrl
     *
     * @return string 
     */
    public function getYoutubeVideoUrl()
    {
        return $this->youtubeVideoUrl;
    }

    /**
     * Set shippingCategoryId
     *
     * @param integer $shippingCategoryId
     * @return Product
     */
    public function setShippingCategoryId($shippingCategoryId)
    {
        $this->shippingCategoryId = $shippingCategoryId;

        return $this;
    }

    /**
     * Get shippingCategoryId
     *
     * @return integer 
     */
    public function getShippingCategoryId()
    {
        return $this->shippingCategoryId;
    }
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $dateLastEmptied;

    /**
     * @var integer
     */
    private $conditionId;


    /**
     * Set userId
     *
     * @param integer $userId
     * @return Product
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set dateLastEmptied
     *
     * @param \DateTime $dateLastEmptied
     * @return Product
     */
    public function setDateLastEmptied($dateLastEmptied)
    {
        $this->dateLastEmptied = $dateLastEmptied;

        return $this;
    }

    /**
     * Get dateLastEmptied
     *
     * @return \DateTime 
     */
    public function getDateLastEmptied()
    {
        return $this->dateLastEmptied;
    }

    /**
     * Set conditionId
     *
     * @param integer $conditionId
     * @return Product
     */
    public function setConditionId($conditionId)
    {
        $this->conditionId = $conditionId;

        return $this;
    }

    /**
     * Get conditionId
     *
     * @return integer 
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }
    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\ManufacturerProductMap
     */
    private $manufacturerProductMap;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderProducts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $units;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customBrand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customizedCategoryLookup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productVisits;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $productRemarks;

    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\User
     */
    private $user;

    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\Brand
     */
    private $brand;

    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\ProductCategory
     */
    private $productCategory;

    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\ProductCondition
     */
    private $condition;

    /**
     * @var \Plearnu\Bundle\FrontendBundle\Entity\ShippingCategory
     */
    private $shippingCategory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderProducts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->units = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attributes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customBrand = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customizedCategoryLookup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productVisits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productRemarks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set manufacturerProductMap
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ManufacturerProductMap $manufacturerProductMap
     * @return Product
     */
    public function setManufacturerProductMap(\Plearnu\Bundle\FrontendBundle\Entity\ManufacturerProductMap $manufacturerProductMap = null)
    {
        $this->manufacturerProductMap = $manufacturerProductMap;

        return $this;
    }

    /**
     * Get manufacturerProductMap
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\ManufacturerProductMap 
     */
    public function getManufacturerProductMap()
    {
        return $this->manufacturerProductMap;
    }

    /**
     * Add orderProducts
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\OrderProduct $orderProducts
     * @return Product
     */
    public function addOrderProduct(\Plearnu\Bundle\FrontendBundle\Entity\OrderProduct $orderProducts)
    {
        $this->orderProducts[] = $orderProducts;

        return $this;
    }

    /**
     * Remove orderProducts
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\OrderProduct $orderProducts
     */
    public function removeOrderProduct(\Plearnu\Bundle\FrontendBundle\Entity\OrderProduct $orderProducts)
    {
        $this->orderProducts->removeElement($orderProducts);
    }

    /**
     * Get orderProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * Add units
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductUnit $units
     * @return Product
     */
    public function addUnit(\Plearnu\Bundle\FrontendBundle\Entity\ProductUnit $units)
    {
        $this->units[] = $units;

        return $this;
    }

    /**
     * Remove units
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductUnit $units
     */
    public function removeUnit(\Plearnu\Bundle\FrontendBundle\Entity\ProductUnit $units)
    {
        $this->units->removeElement($units);
    }

    /**
     * Get units
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Add attributes
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductAttributeName $attributes
     * @return Product
     */
    public function addAttribute(\Plearnu\Bundle\FrontendBundle\Entity\ProductAttributeName $attributes)
    {
        $this->attributes[] = $attributes;

        return $this;
    }

    /**
     * Remove attributes
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductAttributeName $attributes
     */
    public function removeAttribute(\Plearnu\Bundle\FrontendBundle\Entity\ProductAttributeName $attributes)
    {
        $this->attributes->removeElement($attributes);
    }

    /**
     * Get attributes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Add images
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductImage $images
     * @return Product
     */
    public function addImage(\Plearnu\Bundle\FrontendBundle\Entity\ProductImage $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductImage $images
     */
    public function removeImage(\Plearnu\Bundle\FrontendBundle\Entity\ProductImage $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add reviews
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductReview $reviews
     * @return Product
     */
    public function addReview(\Plearnu\Bundle\FrontendBundle\Entity\ProductReview $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductReview $reviews
     */
    public function removeReview(\Plearnu\Bundle\FrontendBundle\Entity\ProductReview $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add customBrand
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\CustomBrand $customBrand
     * @return Product
     */
    public function addCustomBrand(\Plearnu\Bundle\FrontendBundle\Entity\CustomBrand $customBrand)
    {
        $this->customBrand[] = $customBrand;

        return $this;
    }

    /**
     * Remove customBrand
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\CustomBrand $customBrand
     */
    public function removeCustomBrand(\Plearnu\Bundle\FrontendBundle\Entity\CustomBrand $customBrand)
    {
        $this->customBrand->removeElement($customBrand);
    }

    /**
     * Get customBrand
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomBrand()
    {
        return $this->customBrand;
    }

    /**
     * Add customizedCategoryLookup
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\CustomizedCategoryProductLookup $customizedCategoryLookup
     * @return Product
     */
    public function addCustomizedCategoryLookup(\Plearnu\Bundle\FrontendBundle\Entity\CustomizedCategoryProductLookup $customizedCategoryLookup)
    {
        $this->customizedCategoryLookup[] = $customizedCategoryLookup;

        return $this;
    }

    /**
     * Remove customizedCategoryLookup
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\CustomizedCategoryProductLookup $customizedCategoryLookup
     */
    public function removeCustomizedCategoryLookup(\Plearnu\Bundle\FrontendBundle\Entity\CustomizedCategoryProductLookup $customizedCategoryLookup)
    {
        $this->customizedCategoryLookup->removeElement($customizedCategoryLookup);
    }

    /**
     * Get customizedCategoryLookup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomizedCategoryLookup()
    {
        return $this->customizedCategoryLookup;
    }

    /**
     * Add productVisits
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductVisit $productVisits
     * @return Product
     */
    public function addProductVisit(\Plearnu\Bundle\FrontendBundle\Entity\ProductVisit $productVisits)
    {
        $this->productVisits[] = $productVisits;

        return $this;
    }

    /**
     * Remove productVisits
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductVisit $productVisits
     */
    public function removeProductVisit(\Plearnu\Bundle\FrontendBundle\Entity\ProductVisit $productVisits)
    {
        $this->productVisits->removeElement($productVisits);
    }

    /**
     * Get productVisits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductVisits()
    {
        return $this->productVisits;
    }

    /**
     * Add productRemarks
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductRemarks $productRemarks
     * @return Product
     */
    public function addProductRemark(\Plearnu\Bundle\FrontendBundle\Entity\ProductRemarks $productRemarks)
    {
        $this->productRemarks[] = $productRemarks;

        return $this;
    }

    /**
     * Remove productRemarks
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductRemarks $productRemarks
     */
    public function removeProductRemark(\Plearnu\Bundle\FrontendBundle\Entity\ProductRemarks $productRemarks)
    {
        $this->productRemarks->removeElement($productRemarks);
    }

    /**
     * Get productRemarks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductRemarks()
    {
        return $this->productRemarks;
    }

    /**
     * Set user
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\User $user
     * @return Product
     */
    public function setUser(\Plearnu\Bundle\FrontendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set brand
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\Brand $brand
     * @return Product
     */
    public function setBrand(\Plearnu\Bundle\FrontendBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set productCategory
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductCategory $productCategory
     * @return Product
     */
    public function setProductCategory(\Plearnu\Bundle\FrontendBundle\Entity\ProductCategory $productCategory = null)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\ProductCategory 
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set condition
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ProductCondition $condition
     * @return Product
     */
    public function setCondition(\Plearnu\Bundle\FrontendBundle\Entity\ProductCondition $condition = null)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Get condition
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\ProductCondition 
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set shippingCategory
     *
     * @param \Plearnu\Bundle\FrontendBundle\Entity\ShippingCategory $shippingCategory
     * @return Product
     */
    public function setShippingCategory(\Plearnu\Bundle\FrontendBundle\Entity\ShippingCategory $shippingCategory = null)
    {
        $this->shippingCategory = $shippingCategory;

        return $this;
    }

    /**
     * Get shippingCategory
     *
     * @return \Plearnu\Bundle\FrontendBundle\Entity\ShippingCategory 
     */
    public function getShippingCategory()
    {
        return $this->shippingCategory;
    }
    /**
     * @var integer
     */
    private $productCategoryId;


    /**
     * Set productCategoryId
     *
     * @param integer $productCategoryId
     * @return Product
     */
    public function setProductCategoryId($productCategoryId)
    {
        $this->productCategoryId = $productCategoryId;

        return $this;
    }

    /**
     * Get productCategoryId
     *
     * @return integer 
     */
    public function getProductCategoryId()
    {
        return $this->productCategoryId;
    }
}
