<?php

class Article
{
  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->title = $content;
  }

  public $title;
  public $content;
  private $published = false;

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article('Major Headline', 'Dynamic and shocking news here');
$article2 = new Article('Second Headline', 'Spicy and stunning news here');
echo $article1->isPublished();
echo $article2->isPublished();