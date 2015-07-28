<?php

namespace X\BlogBundle\Controller;

use X\BlogBundle\Repository\Memory\InMemoryBlogRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new InMemoryBlogRepository();
    }

    public function indexAction()
    {
        $blogs = $this->repository->findAll();

        return new Response('<pre>'.print_r($blogs, true).'</pre>');
    }

    public function showAction($name)
    {
        $blog = $this->repository->find($name);
        if (!$blog) {
            throw $this->createNotFoundException();
        }

        return new Response('<pre>'.print_r($blog, true).'</pre>');
    }

    public function showPostAction()
    {
        // widok posta + lista komentarzy
    }

    public function editAction()
    {
        // edycja bloga
    }

    public function addPostAction()
    {
        // dodawanie posta
    }

    public function addCommentAction()
    {
        // dodawanie komentarzy
    }

}
