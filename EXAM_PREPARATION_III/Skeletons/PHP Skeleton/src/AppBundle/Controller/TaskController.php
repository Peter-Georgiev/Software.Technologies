<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
       // TODO: Implement me...
        $openTasks = $this->getDoctrine()->getRepository(Task::class)
            ->findBy(array('status' => 'Open'));
        $inProgress = $this->getDoctrine()->getRepository(Task::class)
            ->findBy(array('status' => 'In Progress'));
        $finished = $this->getDoctrine()->getRepository(Task::class)
            ->findBy(array('status' => 'Finished'));

        return $this->render('task/index.html.twig', array(
            'openTasks' => $openTasks,
            'inProgressTasks' => $inProgress,
            'finishedTasks' => $finished
        ));
    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        // TODO: Implement me...
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('task/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
       // TODO: Implement me...
        $task = $this->getDoctrine()->getRepository(Task::class)->find($id);
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('task/edit.html.twig', array(
            'form' => $form->createView(),
            'task' => $task
        ));
    }
}
