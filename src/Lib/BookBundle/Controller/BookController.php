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

        if ($form->isValid()) {
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

    public function showCatalogAction(Request $request) {
        $form = $this->createFormBuilder()
                ->add('title', 'text', array('required' => false))
                ->add('author', 'text', array('required' => false))
                ->add('isbn', 'text', array('required' => false))
                ->add('search', 'submit')
                ->getForm();

        $form->handleRequest($request);
        
        $books = null;
        
        if ($form->isValid()) {
            $searching = $form->getData();
            $title = $searching['title'];
            $author = $searching['author'];
            $isbn = $searching['isbn'];

            $repository = $this->getDoctrine()->getRepository('LibBookBundle:Book');
            $qb = $repository->createQueryBuilder('b');
            $query = $qb->leftJoin('b.authors', 'a');

            if ($title) {
                $query = $query->andWhere('b.title like :title')
                        ->setParameter('title', '%' . $title . '%');
            }
            if ($author) {
                $query = $query->andWhere('(a.firstname like :author) '
                                . 'OR (a.lastname like :author) '
                                . 'OR (CONCAT(a.firstname, ' . $qb->expr()->literal(' ') . ', a.lastname) like :author) '
                                . 'OR (CONCAT(a.firstname, ' . $qb->expr()->literal(' ') . ', a.secondname, ' . $qb->expr()->literal(' ') . ', a.lastname) like :author) '
                                . 'OR (CONCAT(a.lastname, ' . $qb->expr()->literal(' ') . ', a.firstname) like :author)')
                        ->setParameter('author', '%' . $author . '%');
            }
            if ($isbn) {
                $query = $query->andWhere('b.isbn like :isbn')
                        ->setParameter('isbn', $isbn);
            }

            $query = $query->getQuery();
            $books = $query->getResult();
        }
        return $this->render('LibBookBundle:User:catalog.html.twig', array(
                    'form' => $form->createView(),
                    'books' => $books
        ));
    }

}
