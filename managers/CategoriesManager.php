<?php

    require_once "AbstractManager.php";
    require_once __DIR__ . '/../models/Categories.php';
    
    class CategoriesManager extends AbstractManager{
       
        public function __construct(){
           parent::__construct();
        }
        
        public function findAll() : array {
            
            
            $query = $this->db->prepare('SELECT * FROM categories');
            
            $query->execute();
            
            $categories = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $categoriesAll =[];
            foreach($categories as $category){
                $cat=new Categories(
                    $category['title'],
                    $category['description']
                );
                $cat->setId($category['id']);
                $categoriesAll[] = $cat;
            }
            
            return $categoriesAll;
        }
    }