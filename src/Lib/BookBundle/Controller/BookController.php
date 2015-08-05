<?php

namespace Lib\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Lib\BookBundle\Entity\Book;
use Lib\BookBundle\Form\Type\GenreType;
use Lib\BookBundle\Entity\Genre;

class BookController extends Controller {

    public function addBookAction(Request $request) {

        $book = new Book();

        $form = $this->createFormBuilder($book)
                ->add($child);

        return $this->render('LibBookBundle:Librarian:addBook.html.twig');
    }

    public function addGenreAction(Request $request) {
        $genre = new Genre();

        $form = $this->createForm(new GenreType(), $genre);

        $form->handleRequest($request);
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($genre);
            $em->flush();
        }

        return $this->render('LibBookBundle:Librarian:addGenre.html.twig', array(
                    'form' => $form->createView()
        ));
    }

public function showBookCardAction($bookId) {
        $book = $this->getDoctrine()->getRepository('LibBookBundle:Book')
                ->find($bookId);

        if (!$book) {
            throw $this->createNotFoundException('Wskazana książka nie istnieje');
        } else {
            return $this->render('LibBookBundle:User:bookCard.html.twig', array('book' => $book));
        }
    }

}
