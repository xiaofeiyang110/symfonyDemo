<?php
namespace  AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
/**
* 
*/
class LuckyController extends Controller
{
	/** 
	* @Route("/lucky/number")
	*/
	public function numberAction()
    {
        $number = mt_rand(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );
         return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route(
     *     "/format/demo.{_format}",
     *     defaults={"_format": "html"}
     * )
     */
    public function formatAction($_format)
    {
    	 return new Response(
            '<html><body>formate demo:'.$_format.'</body></html>'
        );

    }


}
