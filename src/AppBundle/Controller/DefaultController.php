<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Form\AdvertType;
use AppBundle\Entity\Adverts;


class DefaultController extends Controller
{

    /**
     * Main action which creates the view and gets
     * required information from the database, etc
     * @param mxied $request
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request)
    {
        $marks      = $this->getDoctrine()->getRepository('AppBundle:Marks')->findAll();
        $models     = $this->getDoctrine()->getRepository('AppBundle:Models')->findAll();
        $attributes = $this->getDoctrine()->getRepository('AppBundle:Attributes')->findAll();

        $form = $this->createForm(new AdvertType($marks, $models, $attributes));
        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            if($form->isValid())
            {
                $this->processForm($form->getData());
                return $this->redirectToRoute('success');
            }
        }

        
        return $this->render('AppBundle:home:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * Form processing and database insertion method
     * @param array $data
     */
    private function processForm(array $data)
    {
        if(!is_array($data) OR empty($data))
            throw new \Exception('Error processing form');

        $input['comment']    = stripslashes(strip_tags(trim(htmlentities($data['comment']))));
        $input['model']      = stripslashes(strip_tags(trim($data['model'])));
        $input['mark']       = stripslashes(strip_tags(trim($data['mark'])));
        $input['attributes'] = json_encode($data['attr']);
        $input['markName']   = $this->getValue($input['mark'], 'Marks');
        $input['modelName']  = $this->getValue($input['model'], 'Models');

        $adverts = new Adverts;
        $adverts->setComment($input['comment']);
        $adverts->setModelId($input['model']);
        $adverts->setModel($input['modelName']);
        $adverts->setMarkId($input['mark']);
        $adverts->setMark($input['markName']);
        $adverts->setAttributes($input['attributes']);

        $em = $this->getDoctrine()->getManager();

        $em->persist($adverts);
        $em->flush();

        $this->generateFlashData($input, 'Search parameters saved.');
    }

    /**
     * Retrieves a value (name) from the database
     * @param int $id
     * @param string $repo
     */
    private function getValue($id, $repo)
    {
        $method = 'get' . ucwords($repo) . 'Name';
        $repo   = $this->getDoctrine()->getRepository("AppBundle:{$repo}")->findOneById($id);
        
        return call_user_func_array(array($repo, $method), array());
    }

    /**
     * Generates a success flash message
     * @param array $input
     * @param optional $message
     */
    private function generateFlashData(array $input, $message = null)
    {
        $session = new Session;
        foreach($input as $key => $value) {
            $session->getFlashBag()->add($key, $value);
        }

        $session->getFlashBag()->add("success", is_null($message) ? "Success" : $message);
    }

   /**
    * @Route("models", name="models")
    */
    public function modelsAction(Request $request)
    {
        $markID = $request->query->get('id');
        $models = $this->getDoctrine()->getManager()->getRepository('AppBundle:Models')->findAllIDs($markID);
        $select = '<select id="advert_mark" name="advert[mark]">';

        foreach($models as $model) {
            $select .= "<option value='" . $model['id'] . "'>" . $model['modelsName'] . "</option>";
        }

        $select .= '</select>';

        $response = new JsonResponse();
        $response->setData(array(
            'options' => $select
        ));

        return $response;
    }

   /**
    * @Route("/success", name="success")
    */
    public function success()
    {   
        return $this->render('AppBundle:success:index.html.twig');
    }

}
