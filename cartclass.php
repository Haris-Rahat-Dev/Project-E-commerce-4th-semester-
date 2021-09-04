<?php


class cart
{
  private $id,$productImage,$productBrand,$productPrice,$product_mid,$p_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * @param mixed $productImage
     */
    public function setProductImage($productImage): void
    {
        $this->productImage = $productImage;
    }

    /**
     * @return mixed
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * @param mixed $productBrand
     */
    public function setProductBrand($productBrand): void
    {
        $this->productBrand = $productBrand;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param mixed $productPrice
     */
    public function setProductPrice($productPrice): void
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return mixed
     */
    public function getProductMid()
    {
        return $this->product_mid;
    }

    /**
     * @param mixed $product_mid
     */
    public function setProductMid($product_mid): void
    {
        $this->product_mid = $product_mid;
    }

    /**
     * @return mixed
     */
    public function getPId()
    {
        return $this->p_id;
    }

    /**
     * @param mixed $p_id
     */
    public function setPId($p_id): void
    {
        $this->p_id = $p_id;
    }

}