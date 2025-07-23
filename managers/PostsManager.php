<?php

    require_once "AbstractManager.php";
    require_once __DIR__ . '/../models/Posts.php';
    
    class PostsManager extends AbstractManager{
       
        public function __construct(){
           parent::__construct();
        }
        
        public function findAll() : array {
            
            $categoriesManager = new CategoriesManager();
            
            $query = $this->db->prepare('SELECT * FROM posts');
            
            $query->execute();
            
            $posts = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $postsAll =[];
            foreach($posts as $post){
                $pos=new Posts(
                        $post['title'],
                        $post['excerpt']
                    );
                    
                $pos->setId($post['id']);
                
                if (isset($post['category']) && !is_null($post['category'])) {
                    $cat = $categoriesManager->findOne($post['category']);
                   
                    if ($cat !== null) {
                        $pos->setCategories($cat);
                    }
                }
                
                $postsAll[] = $pos;
            }
            
            return $postsAll;
        }
    }