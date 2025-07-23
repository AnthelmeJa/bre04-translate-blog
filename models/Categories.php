<?php

class Categories
{
    private ?int $id = null;
    private string $title;
    private string $descritpion;
    
    public function __construct(string $title, string $descritpion) {
        $this->title = $title;
        $this->descritpion = $descritpion;
    }
    
    //get
    
    public function getId(): ?int {
        return $this->id;
    }
    
    public function getTitle(): string {
        return $this->title;
    }
    
    public function getDescription(): string {
        return $this->descritpion;
    }
    
    
    //set
    
    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function setTitle_en(string $title): void {
        $this->title = $title;
    }
    
    public function setDescritpion(string $descritpion): void {
        $this->descritpion = $descritpion;
    }
}
