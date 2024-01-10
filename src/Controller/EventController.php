<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Event;
use App\Form\EventType;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;

class EventController extends AbstractController
{
    // Méthode pour créer un nouvel événement
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        // Création d'une nouvelle instance de l'entité Event
        $event = new Event();

        // Création du formulaire en utilisant le type EventForm
        $form = $this->createForm(EventType::class, $event);

        // Gestion de la soumission du formulaire
        $form->handleRequest($request);

        // Vérification si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Obtention du gestionnaire d'entité
            $entityManager = $doctrine->getManager();

            // Persistance de l'événement dans la base de données
            $entityManager->persist($event);

            // Exécution des modifications dans la base de données
            $entityManager->flush();

            // Redirection vers la page de détails de l'événement nouvellement créé
            return $this->redirectToRoute('event_show', ['id' => $event->getId()]);
        }

        // Rendu du formulaire dans le template de création
        return $this->render('event/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Méthode pour afficher les détails d'un événement
    public function show(int $id, ManagerRegistry $doctrine): Response
    {
        // Recherche de l'événement dans la base de données par son ID
        $event = $doctrine->getRepository(Event::class)->find($id);

        // Vérification si l'événement existe
        if (!$event) {
            // Exception levée si l'événement n'est pas trouvé
            throw $this->createNotFoundException('Nous avons pas trouvé l\'événement demandé.');
        }

        // Rendu des détails de l'événement dans le template de visualisation
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
}