<?php

namespace TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class CommandController extends Controller
{

    /**
     * @Route("/command/getList", name="commandlist")
     */
    public function getListAction(Request $request)
    {
	$commands = array('command1','command2');
        return new JsonResponse(array('commands' => $commands));
    }
}
