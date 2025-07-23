<?php

class Posts
{
    
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private ?Categories $categories = null;
    
    public function __construct(string $title, string $excerpt) {
        $this->title = $title;
        $this->excerpt = $excerpt;
    }
    
    //get
    public function getId(): ?int {
        return $this->id;
    }
    
    public function getTitle(): string {
        return $this->title;
    }
    
    public function getExcerpt(): string {
        return $this->excerpt;
    }
    
    public function getCategories(): ?Categories {
        return $this->categories;
    }
    
    //set
    
    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function setTitle(string $title): void {
        $this->title = $title;
    }
    
    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt;
    }
    
    public function setCategories(Categories $categories): void {
        $this->categories = $categories;
    }
    
}