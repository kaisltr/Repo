<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\Cabinet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cabinet controller.
 *
 */
class CabinetController extends Controller
{
    /**
     * Lists all cabinet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cabinets = $em->getRepository('SanteBundle:Cabinet')->findAll();

        return $this->render('SanteBundle:cabinet:index.html.twig', array(
            'cabinets' => $cabinets,
        ));
    }

    /**
     * Creates a new cabinet entity.
     *
     */
    public function newAction(Request $request)
    { global $kernel;
        $user = $kernel->getContainer()->get('security.token_storage')->getToken()->getUser();

        if ($user === 'anon.') {
            return $this->redirectToRoute('user_homepage');
        } else {
        $cabinet = new Cabinet();
       // $cabinet->getIdRespCabinet($user);
        $form = $this->createForm('SanteBundle\Form\CabinetType', $cabinet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cabinet);
            $em->flush();

            return $this->redirectToRoute('cabinet_show', array('idCabinet' => $cabinet->getIdcabinet()));
        }

        return $this->render('SanteBundle:cabinet:new.html.twig', array(
            'cabinet' => $cabinet,
            'form' => $form->createView(),
        ));
    }}

    /**
     * Finds and displays a cabinet entity.
     *
     */
    public function showAction(Cabinet $cabinet)
    {
        $deleteForm = $this->createDeleteForm($cabinet);

        return $this->render('SanteBundle:cabinet:show.html.twig', array(
            'cabinet' => $cabinet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cabinet entity.
     *
     */
    public function editAction(Request $request, Cabinet $cabinet)
    {
        //utilisateur connecte
        global $kernel;
        $user = $kernel->getContainer()->get('security.token_storage')->getToken()->getUser();

        if ($user === 'anon.' and $user!==$cabinet->getIdRespCabinet()) {
            return $this->redirectToRoute('user_homepage');
        } else {
        $deleteForm = $this->createDeleteForm($cabinet);
        $editForm = $this->createForm('SanteBundle\Form\CabinetType', $cabinet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cabinet_show', array('idCabinet' => $cabinet->getIdcabinet()));
        }

        return $this->render('SanteBundle:cabinet:edit.html.twig', array(
            'cabinet' => $cabinet,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }}

    /**
     * Deletes a cabinet entity.
     *
     */
    public function deleteAction(Request $request, Cabinet $cabinet)
    { global $kernel;
        $user = $kernel->getContainer()->get('security.token_storage')->getToken()->getUser();

        if ($user === 'anon.' and $user!==$cabinet->getIdRespCabinet()) {
            return $this->redirectToRoute('user_homepage');
        } else {
        $form = $this->createDeleteForm($cabinet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cabinet);
            $em->flush();
        }

        return $this->redirectToRoute('cabinet_index');
    }}

    /**
     * Creates a form to delete a cabinet entity.
     *
     * @param Cabinet $cabinet The cabinet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cabinet $cabinet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cabinet_delete', array('idCabinet' => $cabinet->getIdcabinet())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
