<?php 
class Cms5a52331b914d6439468415_032fa373b39ffeb40e3318b72894afa6Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
