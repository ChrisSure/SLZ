<?php
/**
 * Created by PhpStorm.
 * User: ktv911
 * Date: 24.06.18
 * Time: 20:01
 */

namespace Framework;

use Symfony\Component\HttpFoundation\Response;


class ErrorHandler
{

    /**
     * Метод запускає клас виводу повідомлення або стеку повідомлень
     *
     * @param \Exception $error
     *
     * @return void
     */
    public function run(\Exception $error): void
    {
        $response = new Response();
        $twig = $this->setTemplate(true);
        $response->setContent($twig->render('errors/500.html', [
            'error' => $error->getTrace(),
            'message' => $error->getMessage(),
            'code' => $error->getCode(),
            'file' => $error->getFile(),
            'line' => $error->getLine()
        ]));
        $response->send();
    }


    /**
     * Метод ініціалізує шаблонізатор і повертає його
     * @param bool $debug
     *
     * @return \Twig_Environment
     */
    private function setTemplate(bool $debug): \Twig_Environment
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader, array(
            'cache' => $debug ? false : 'runtime/compilation_twig',
        ));
        return $twig;
    }

}
