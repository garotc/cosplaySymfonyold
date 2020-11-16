<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\EditAccountUserFormType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/admin", name="admin_admin")
     */
    public function index(): Response
    {
        return $this->render('admin/admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_aff_user")
     */
    public function affUser(UserRepository $repo): Response
    {
        $user = $this->getUser();
        $users = $repo->findAll();
        return $this->render('admin/userAccount.html.twig', compact('users','user'));
    }

    /**
     * @Route("/admin/user/{id}", name="admin_user_edit")
     */

     public function editUser(User $user, Request $request, EntityManager $em)
     {
         $form = $this->createForm(EditAccountUserFormType::class);

         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
             /** @var user $user */
             $user = $form->getData();

             $em->persist($user);
             $em->flush();

             $this->addFlash ('success', 'Article créé');
             return $this->redirectToRoute('admin_aff_user');
            
         }

         return $this->render('admin/userAccount.html.twig', ['userForm'=> $form->createView()]);
     }

    /**
     * @Route("/admin/user/{id}", name="admin_user_delete", methods="SUP")
     */
    public function deleteUser(User $user = null, Request $request, EntityManagerInterface $em)
    {
        //  dd($request->get('_token'));
        if ($this->isCsrfTokenValid('SUP'.$user->getId(), $request->get('_token'))) {
            $em->remove($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur supprimé avec succès');

            return $this->redirectToRoute('admin_aff_user');
        }
    }

}
