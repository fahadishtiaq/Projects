<?php

interface Product
{
    public function setName($name);
    public function getName();
    public function setarticleNumber($articleNumber);
    public function getarticleNumber();
    public function setSentByPost($bool);
    public function getSentByPost();
    public function setstock($bool);
    public function getstock();
    public function setPrice($price);
    public function getPricec();
    public function pictureURL();
    
}


interface Category
{
    public function setCategoryName($categoryName);
    public function getCategoryName();
    public function categoryProducts();
}


interface user
{
    public function setUserName($userName);
    public function getUserName();
    public function setAddress($address);
    public function getAddress();   
    public function setcanBuyProduct($bool);
    public function getcanBuyProduct(); 
    public function setSubscribe($bool);
    public function getSubscribe(); 
    public function setWhenPriceUpdated($bool);
    public function getWhenPriceUpdated(); 
    public function setInformedProductSold($bool);
    public function getInformedProductSold(); 
    public function setCanCreateProduct($bool);
    public function getCanCreateProduct(); 
}

interface ShoppingCart
{
    public function setQunatity($qunatity);
    public function getQunatity(); 
    public function setCanBuyEntireShop($bool);
    public function getCanBuyEntireShop(); 
    public function TotalPrice();
}


class normal implements Product, Category, ShoppingCart
{
 private $nameOfProduct;
 private $articleNumberOfProduct;
 private $willSentByPOst = true;
 private $stockAreLimited = true;
 private $buyEntireShop = true;
 private $ProductName = ["Clothes", "Drinks", "IceCream", "E-Gifts"];
    private $picture = ["URL1", "URL2", "URL3", "URL4", "URL5"];
 
 public function setName($name)
  { 
    $this -> nameOfProduct = $name; 
  }
  
  public function getName()
  {
    return $this -> nameOfProduct; 
  }
  
 public function setarticleNumber($articleNumber)
  { 
    $this -> articleNumberOfProduct = $name; 
  }
  
  public function getarticleNumber()
  {
    return $this -> articleNumberOfProduct; 
  }
   
      public function setSentByPost($bool)
  { 
    $this -> willSentByPOst = $bool; 
  }
  
  public function getSentByPost()
  {
  return ($this -> willSentByPOst)? "Sent By Post" : "Provided digitaly";
  }
  
  
    public function setstock($bool)
  { 
    $this -> stockAreLimited = $bool; 
  }
  
  public function getstock()
  {
  return ($this -> stockAreLimited)? "Stock are limited" : "Available without limit";
  }
  
  
  
    public function setPrice($price)
  { 
    $this -> priceofProduct = $price; 
  }
  
  public function getPrice()
  {
    return $this -> priceofProduct; 
  }
  

 
    public function setCategoryName($categoryName)
  { 
    $this -> nameOfCategory = $name; 
  }
  
  public function getCategoryName()
  {
    return $this -> nameOfCategory; 
  }
  
    public function categoryProducts()
    {
    return $ProductName[3];
    }
    
     public function pictureURL()
    {
    return $picture[];
    }
 
 
 
     public function setCanBuyEntireShop($bool)
  { 
    $this -> buyEntireShop = $bool; 
  }
  
  public function getCanBuyEntireShop()
  {
  return ($this -> buyEntireShop)? "Buy Entire Shop" : "Cannot Buy Entire";
  }
  
  
    public function setQuantity($quantity)
  { 
    $this -> Quantity = $quantity; 
  }
  
  public function getQuantity()
  {
    return $this -> Quantity; 
  }
}

class digital implements Product, Category, ShoppingCart
{
    
 private $nameOfProduct;
 private $articleNumberOfProduct;
 private $willSentByPOst = false;
 private $stockAreLimited = false;
 private $ProductName = ["Clothes", "Drinks", "IceCream", "E-Gifts"];
 private $picture = ["URL1", "URL2", "URL3", "URL4", "URL5"];
 
 public function setName($name)
  { 
    $this -> nameOfProduct = $name; 
  }
  
  public function getName()
  {
    return $this -> nameOfProduct; 
  }
  
 public function setarticleNumber($articleNumber)
  { 
    $this -> articleNumberOfProduct = $name; 
  }
  
  public function getarticleNumber()
  {
    return $this -> articleNumberOfProduct; 
  }
   
      public function setSentByPost($bool)
  { 
    $this -> willSentByPOst = $bool; 
  }
  
  public function getSentByPost()
  {
  return ($this -> willSentByPOst)? "Sent By Post" : "Provided digitaly";
  }
  
  
    public function setstock($bool)
  { 
    $this -> stockAreLimited = $bool; 
  }
  
  public function getstock()
  {
  return ($this -> stockAreLimited)? "Stock are limited" : "Available without limit";
  }
  
    public function setPrice($price)
  { 
    $this -> priceofProduct = $price; 
  }
  
  public function getPrice()
  {
    return $this -> priceofProduct; 
  }
  
  
  

 
    public function setCategoryName($categoryName)
  { 
    $this -> nameOfCategory = $name; 
  }
  
  public function getCategoryName()
  {
    return $this -> nameOfCategory; 
  }
  
    public function categoryProducts()
    {
    return $ProductName[3];
    }
    
     public function pictureURL()
    {
    return $picture[];
    }
 
 
     public function setCanBuyEntireShop($bool)
  { 
    $this -> buyEntireShop = $bool; 
  }
  
  public function getCanBuyEntireShop()
  {
  return ($this -> buyEntireShop)? "Buy Entire Shop" : "Cannot Buy Entire";
  }
  
  
    public function setQuantity($quantity)
  { 
    $this -> Quantity = $quantity; 
  }
  
  public function getQuantity()
  {
    return $this -> Quantity; 
  }   
}


class customer implements User
{
 private $nameOfUser;
 private $addressOfUser;
 private $buyProduct = true;
 private $ProductSubscribe = true;
 private $priceUpdated = true;
 private $productSoldUpdated = false;
 private $createProduct = false;
 
 
  public function setUserName($userName)
  { 
    $this -> nameOfUser = $userName; 
  }
  
  public function getUserName()
  {
    return $this -> nameOfUser; 
  }
  
   public function setAddress($address)
  { 
    $this -> addressOfUser = $address; 
  }
  
  public function getAddress()
  {
    return $this -> addressOfUser; 
  }
  
  
   public function setcanBuyProduct($bool)
  { 
    $this -> buyProduct = $bool; 
  }
  
  public function getcanBuyProduct()
  {
     return ($this -> buyProduct)? "Can Buy Product" : "Can Sell Product";
  }
  
    
   public function setSubscribe($bool)
  { 
    $this -> ProductSubscribe = $bool; 
  }
  
  public function getSubscribe()
  {
     return ($this -> ProductSubscribe)? "Can Subscribe" : "Can not Subscribe";
  }


  
   public function setSubscribe($bool)
  { 
    $this -> ProductSubscribe = $bool; 
  }
  
  public function getSubscribe()
  {
     return ($this -> ProductSubscribe)? "Can Subscribe" : "Can not Subscribe";
  }
  
  public function setWhenPriceUpdated($bool)
  {
       $this -> priceUpdated = $bool; 
  }
   
  public function getWhenPriceUpdated($bool)
  {
    return ($this -> priceUpdated)? "Will inform that price is updated" : "Will not inform that price is updated";
  }
  
  
  public function setInformedProductSold($bool)
  {
       $this -> productSoldUpdated = $bool; 
  }
   
  public function getInformedProductSold($bool)
  {
    return ($this -> productSoldUpdated)? "Will inform that product is sold" : "Will not inform that product is not sold";
  }
  
  public function setCanCreateProduct($bool)
  {
       $this -> createProduct = $bool; 
  }
   
  public function getCanCreateProduct($bool)
  {
    return ($this -> createProduct)? "Can Create Product" : "Cannot Create Product";
  }
  
  
}


class seller implements User
{
 private $nameOfUser;
 private $addressOfUser;
 private $buyProduct = true;
 private $ProductSubscribe = true;
 private $priceUpdated = false;
 private $productSoldUpdated = true;
 private $createProduct = true;
 
 
  public function setUserName($userName)
  { 
    $this -> nameOfUser = $userName; 
  }
  
  public function getUserName()
  {
    return $this -> nameOfUser; 
  }
  
   public function setAddress($address)
  { 
    $this -> addressOfUser = $address; 
  }
  
  public function getAddress()
  {
    return $this -> addressOfUser; 
  }
  
  
   public function setcanBuyProduct($bool)
  { 
    $this -> buyProduct = $bool; 
  }
  
  public function getcanBuyProduct()
  {
     return ($this -> buyProduct)? "Can Buy Product" : "Can Sell Product";
  }
  
    
   public function setSubscribe($bool)
  { 
    $this -> ProductSubscribe = $bool; 
  }
  
  public function getSubscribe()
  {
     return ($this -> ProductSubscribe)? "Can Subscribe" : "Can not Subscribe";
  }


  
   public function setSubscribe($bool)
  { 
    $this -> ProductSubscribe = $bool; 
  }
  
  public function getSubscribe()
  {
     return ($this -> ProductSubscribe)? "Can Subscribe" : "Can not Subscribe";
  }
  
  public function setWhenPriceUpdated($bool)
  {
       $this -> priceUpdated = $bool; 
  }
   
  public function getWhenPriceUpdated($bool)
  {
    return ($this -> priceUpdated)? "Will inform that price is updated" : "Will not inform that price is updated";
  }
  
  
  public function setInformedProductSold($bool)
  {
       $this -> productSoldUpdated = $bool; 
  }
   
  public function getInformedProductSold($bool)
  {
    return ($this -> productSoldUpdated)? "Will inform that product is sold" : "Will not inform that product is not sold";
  }
  
  public function setCanCreateProduct($bool)
  {
       $this -> createProduct = $bool; 
  }
   
  public function getCanCreateProduct($bool)
  {
    return ($this -> createProduct)? "Can Create Product" : "Cannot Create Product";
  }
}
?>