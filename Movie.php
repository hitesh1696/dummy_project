<?php
include_once ('Categories.php');
class Movie
{
    const CHILDRENS = 2;
    const REGULAR = 0;
    const NEW_RELEASE = 1;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $priceCode;

    /**
     * @var string
     */
    public $category;

    /**
     * @param string $name
     * @param int $priceCode
     */
    
    public function __construct($name, $category)
    {
        $this->name = $name;
        $categories = new Categories();
        $categoryDetail = $categories->getCategory($category);

        if( (!empty($categoryDetail)) && (isset($categoryDetail['name'])) ){
            $this->category = $categoryDetail['name'];
            $this->priceCode = $categoryDetail['price_code'];
        }
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function priceCode()
    {
        return $this->priceCode;
    }
}
