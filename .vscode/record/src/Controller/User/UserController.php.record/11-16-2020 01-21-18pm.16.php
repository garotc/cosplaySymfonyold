<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\EditAccountUserFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("profile/mon-compte", name="_app_user_account")
     */
    public function getInfosUser(UserRepository $repo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $infos = $repo->findOneBy(['id'=>$user]);
        //dd($infos);
        return $this->render('home/user/compte.html.twig', compact('user', 'infos'));
    }

    /**
     * @Route("/admin/user/{id}", name="admin_user_edit")
    */

    public function editUser(User $user=null, Request $request, EntityManagerInterface $em) : Response
    {
        $modif = $user->getId() !==null;

        $form = $this->createForm(EditAccountUserFormType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $em->persist($user);
            $em->flush();

            $this->addFlash ('success', $modif? 'modification effectuées' : 'user ajouté');
            return $this->redirectToRoute('admin_aff_user');
           
        }

        return $this->render('admin/editUserAccount.html.twig', ['userForm'=> $form->createView()]);
    }
}
