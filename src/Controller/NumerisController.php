<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class NumerisController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('numeris/index.html.twig', [
            'home' => 'home',
        ]);
    }


    /**
     * @Route("/messagerie-colaborative", name="messagerie-colaborative")
     */
    public function showmessageriecollaborative() {
    	return $this->render('numeris/mescol.html.twig');
    }

    /**
     * @Route("/service-dingenierie-informatique", name="service-dingenierie-informatique")
     */
    public function showserviceingenierieinformatique() {
        return $this->render('numeris/seringinf.html.twig');
    }


    /**
     * @Route("/audit-et-securite", name="audit-et-securite")
     */
    public function showauditsecurite() {
        return $this->render('numeris/audsec.html.twig');
    }

    /**
     * @Route("/equipement-mikrotik", name="equipement-mikrotik")
     */
    public function showequipementmikrotik() {
        return $this->render('numeris/equmik.html.twig');
    }

    /**
     * @Route("/centre-dexamens", name="centre-dexamens")
     */
    public function showexamens() {
    	return $this->render('numeris/examens.html.twig');
    }

    /**
     * @Route("/rejoindre-lequipe", name="rejoindre-lequipe")
     */
    public function showcarriere() {
    	return $this->render('numeris/carriere.html.twig');
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function showformations() {
    	return $this->render('numeris/formations.html.twig');
    }

    /**
     * @Route("/lentreprise", name="lentreprise")
     */
    public function showentreprise() {
        return $this->render('numeris/entreprise.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function showcontact(Request $request, \Swift_Mailer $mailer) {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();
            /*dump($contactFormData);*/
            $message = (new \Swift_Message($contactFormData['objet']))
            ->setFrom($contactFormData['email'], $contactFormData['nom'])
            ->setTo('infos@numeris.bj')
            //->setFrom('infos@numeris.bj')
            //->setTo($contactFormData['Email'])
            ->setBody($contactFormData['message'],'text/html');
            $res = $mailer->send($message);
            //dd($res);
            return $this->redirectToRoute('contact');
        }  


    return $this->render('numeris/contact.html.twig',['form' => $form->CreateView(),]);
}

}
