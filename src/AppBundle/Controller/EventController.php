<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    public function listEventsAction()
    {
        //Show upcoming events
        $events = $this->getDoctrine()
            ->getRepository("AppBundle:Event")
            ->findAll();

        return $this->render('AppBundle:Event:list_events.html.twig', array(
            "events" => $events
        ));
    }

    public function createEventAction()
    {
        return $this->render('AppBundle:Event:create_event.html.twig', array(
            // ...
        ));
    }

    public function showEventAction()
    {
        return $this->render('AppBundle:Event:show_event.html.twig', array(
            // ...
        ));
    }

}
