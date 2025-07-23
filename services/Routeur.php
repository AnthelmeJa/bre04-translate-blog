<?php


class Router
{
    private PostsController $pc;
    private CategoriesController $cc;

    public function __construct()
    {
        $this->pc = new PostsController();
        $this->cc = new CategoriesController();
    }
    
    public function handleRequest(array $get) : void
    {   
        if(!isset($get["route"]))
        {
            $this->cc->home();
        }
        else if (isset($get["route"]) && $get["route"] === "posts")
        {
            $this->pc->posts();
        }
        else
        {
             $this->cc->home();
        }
    }
}