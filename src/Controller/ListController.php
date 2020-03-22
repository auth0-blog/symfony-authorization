<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request)
    {
        $characters = [
            'Daenerys Targaryen' => 'Emilia Clarke',
            'Jon Snow'           => 'Kit Harington',
            'Arya Stark'         => 'Maisie Williams',
            'Melisandre'         => 'Carice van Houten',
            'Khal Drogo'         => 'Jason Momoa',
            'Tyrion Lannister'   => 'Peter Dinklage',
            'Ramsay Bolton'      => 'Iwan Rheon',
            'Petyr Baelish'      => 'Aidan Gillen',
            'Brienne of Tarth'   => 'Gwendoline Christie',
            'Lord Varys'         => 'Conleth Hill'
        ];

        return $this->render('list/index.html.twig', [
            'character' => $characters,
        ]);
    }
}