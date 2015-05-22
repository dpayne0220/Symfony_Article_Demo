<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Article');
        $articles = $repository->findAll();
        return $this->render('default/index.html.twig', array('articles' => $articles));
    }

    /**
     * @Route("/createArticle")
     */
    public function createArticle()
    {
        return $this->render('default/createArticle.html.twig');

    }
    /**
     * @Route("/postArticle")
     */
    public function postArticle()
    {
        $post = Request::createFromGlobals();
        $article = new Article();
        $article->setHeadline($post->request->get('headline'));
        $article->setContent($post->request->get('content'));
        $article->setCreator($post->request->get('creator'));
        $article->setCreated(new \DateTime("now"));

        $em = $this->getDoctrine()->getManager();

        $em->persist($article);
        $em->flush();

        return $this->redirect('/');

    }
    
    /**
     * @Route("/view/{id}", name="viewArticle")
     */
    public function viewArticle($id)
    {
        // get Article
        $repository = $this->getDoctrine()->getRepository('AppBundle:Article');
        $article = $repository->find($id);
        
        //get Comments
        $commentrepo = $this->getDoctrine()->getRepository('AppBundle:Comment');
        $comments = $commentrepo->findByFrnArticleid($id);
    	return $this->render('default/viewArticle.html.twig', array('article'=>$article,'comments' => $comments));

    }

    /**
     * @Route("/comment/{id}")
     */
    public function postComment($id)
    {
        $post = Request::createFromGlobals();

        $comment = new Comment();
        $comment->setName($post->request->get('name'));
        $comment->setComment($post->request->get('comment'));
        $comment->setFrnArticleid($id);
        $comment->setCreated(new \DateTime("now"));

        $em = $this->getDoctrine()->getManager();

        $em->persist($comment);
        $em->flush();
      
        return $this->redirect('/view/'.$id);
    }

}
