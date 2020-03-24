<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ProjectsController extends AbstractController
{
     /**
      * @Route("/projects", name="show_projects")
      */
    public function ShowProjects()
    {
        $projects = $this->getDoctrine()
            ->getRepository(Project::class)
            ->findAll();

        return $this->render('projects.html.twig', [
            'projects' => $projects
        ]);
    }

     /**
      * @Route("/projects/create", name="create_project")
      */

      public function new(Request $request)
      {
          $project = new Project();
  
          $form = $this->createFormBuilder($project)
              ->add('project_name', TextType::class)
              ->add('save', SubmitType::class, ['label' => 'Create Project'])
              ->getForm();
  
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $project = $form->getData();
  
              $entityManager = $this->getDoctrine()->getManager();
              $entityManager->persist($project);
              $entityManager->flush();
  
              return $this->redirectToRoute('show_projects');
          }
  
          return $this->render('create_project.html.twig', [
              'form' => $form->createView(),
          ]);
      }

    /**
     * @Route("/project/edit/{id}", name="edit_project")
     */

    public function update(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $project = $entityManager->getRepository(Project::class)->find($id);

        if (!$project) {
            throw $this->createNotFoundException(
                'No project found for id '.$id
            );
        }

        $form = $this->createFormBuilder($project)
        ->add('project_name', TextType::class)
        ->add('save', SubmitType::class, ['label' => 'Edit Project'])
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $project = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('show_projects');
        }
            
        return $this->render('create_project.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/project/delete/{id}", name="delete_project")
     */

    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $project = $entityManager->getRepository(Project::class)->find($id);

        if (!$project) {
            throw $this->createNotFoundException(
                'No project found for id '.$id
            );
        }
        
        $entityManager->remove($project);
        $entityManager->flush();

        return $this->redirectToRoute('show_projects');
    }
}
