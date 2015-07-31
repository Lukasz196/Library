<?php

namespace Lib\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookController extends Controller {

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
