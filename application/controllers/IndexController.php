<?php
require __DIR__ . '/../models/DroneBeeEntity.php';
require __DIR__ . '/../models/QueenBeeEntity.php';
require __DIR__ . '/../models/WorkerBeeEntity.php';

/**
 * Class IndexController
 */
class IndexController extends Zend_Controller_Action
{

    public function indexAction()
    {
        $session = new Zend_Session_Namespace();

        if (!isset($session->bees)) {
            $this->addBees();
        }

        $this->view->allBees = $session->allBees;
        $this->view->bees = $session->bees;
    }

    protected function addBees()
    {
        $bees = array();
        $session = new Zend_Session_Namespace();

        // Add 3 Queen Bees
        for ($i = 0; $i < 3; $i++) {
            $bees[] = new QueenBeeEntity();
        }

        // Add 5 Worker Bees
        for ($i = 0; $i < 5; $i++) {
            $bees[] = new WorkerBeeEntity();
        }

        // Add 7 Worker Bees
        for ($i = 0; $i < 7; $i++) {
            $bees[] = new DroneBeeEntity();
        }

        $session->bees = $bees;
        $session->allBees = $bees;
        $session->queenCount= 3;
        return $this;
    }

    public function hitAction()
    {
        $session = new Zend_Session_Namespace();

        if (isset($session->bees) && count($session->bees)) {
            $randomBeeIndex = rand(0, count($session->bees) - 1);

            /* @var $bee AbstractBeeEntity */
            $bee = $session->bees[$randomBeeIndex];
            $bee->setHitPoints($bee->getHitPoints() - $bee->getDeductOnHit());

            if ($bee->getHitPoints() <= 0) {
                $bee->setHitPoints(0);
                unset($session->bees[$randomBeeIndex]);
                $session->bees = array_values($session->bees);

                if ($bee instanceof QueenBeeEntity) {
                    $session->queenCount--;
                    if ($session->queenCount == 0) {
                        $session->bees = array();
                    }
                }
            } else {
                $session->bees[$randomBeeIndex] = $bee;
            }
        }

        $this->redirect('/');
    }

    public function resetAction()
    {
        $session = new Zend_Session_Namespace();
        $this->addBees();
        $this->redirect('/');
    }

}

