<?php

namespace App\Controller;

use App\Entity\Backups;
use App\Form\BackupsType;
use App\Repository\BackupsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backups")
 */
class BackupsController extends AbstractController
{
    /**
     * @Route("/", name="backups_index", methods={"GET"})
     */
    public function index(BackupsRepository $backupsRepository): Response
    {
        $user = $this->getUser();
        $backups = [];
        if('MJ' === $user->getPlayerType()) {
            $backups = $backupsRepository->findAll();
        } elseif ('PJ' === $user->getPlayerType()) {
            $backups = $backupsRepository->findByPlayer($user);
        }
        return $this->render('backups/index.html.twig', [
            'backups' => $backups,
        ]);
    }

    /**
     * @Route("/new", name="backups_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $backup = new Backups();
        $form = $this->createForm(BackupsType::class, $backup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($backup);
            $entityManager->flush();

            return $this->redirectToRoute('backups_index');
        }

        return $this->render('backups/new.html.twig', [
            'backup' => $backup,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="backups_show", methods={"GET"})
     */
    public function show(Backups $backup): Response
    {
        $this->denyAccessUnlessGranted('view', $backup);
        return $this->render('backups/show.html.twig', [
            'backup' => $backup,
        ]);
    }

    /**
     * @Route("/{id}", name="backups_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Backups $backup): Response
    {
        $this->denyAccessUnlessGranted('delete', $backup);
        if ($this->isCsrfTokenValid('delete'.$backup->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($backup);
            $entityManager->flush();
        }

        return $this->redirectToRoute('backups_index');
    }
}
