<?php

namespace HookBundle\Twig;

use HookBundle\Entity\Hook;
use HookBundle\Entity\HookModule;
use ModuleBundle\Entity\Module;
use Twig_Extension;
use Twig_Environment;
use Twig_SimpleFunction;
use Doctrine\ORM\EntityManager;
use ModuleBundle\Service\ModuleManager;

class HookExtension extends Twig_Extension
{
    private $em;
    private $mm;

    // @Todo Inject the entity manager from the services.yml file
    public function __construct(EntityManager $em, ModuleManager $mm)
    {
        $this->em = $em;
        $this->mm = $mm;
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('hook', array($this, 'hookFunction'), array(
                "is_safe" => array("html"),     // Allow HTML to be returned and displayed
                'needs_environment' => true,    // Inject the Twig environment into the function
            )),
        );
    }

    /**
     * Hook from template
     * @param  Twig_Environment $env       Twig service for rendering
     * @param  String           $hook_name
     * @param  String           $page_name
     * @return String                      The HTML to display
     */
    public function hookFunction(Twig_Environment $env, $hook_name, $page_name)
    {
        // @todo Make the hook function
        //       1. Load hook from DB
        /** @var Hook $hook */
        $hook = $this->em->getRepository(Hook::class)->findOneBy(array('name' => $hook_name));
        //       2. Load modules ID registered with the hook

        /** @var HookModule $hookmodule */
        $hookmodules = $this->em->getRepository(HookModule::class)->findBy(array('idHook' => $hook->getId()),array('position' => 'ASC'));
        //       3. Load modules

        $modules = [];
        foreach ($hookmodules as $hookmodule) {
            $module = $this->em->getRepository(Module::class)->find($hookmodule->getIdModule());
            $modules[] = $module;
        }

      /*  $this->em->getRepository(Module::class)->createQueryBuilder('module')
            ->innerJoin(HookModule::class, 'hookmodule', 'ON', 'hookmodule.idModule = module.id')
            ->where('hookmodule.idHook = :id')
            ->setParameter('id', $hook->getId())
            ->addOrderBy('hookmodule.position', 'ASC')
            ->getQuery()->getResult();
      */


        //       4. Sort them using hook modules position
        //Already sorted


        //       5. Render each module view
        //$load = $this->mm->load($modules);
        //$functionrender = "hook_" . $hook_name; //fonction contenue dans le php des templates pour appeler le twig
        $render = '';   //string contenant le html des module du hook concerné
        foreach ($modules as $module) {
            /** @var Module $module */
            $this->mm->activate($module->getName());
            //$render .= $env->render($load->$functionrender()); //retourne un array avec template et parametre


            //on récupère le twig directe
            //$file = '@Template/default/modules/' . $module->getName() . '/' . $module->getName() . '.html.twig';
            //$render.= $env->render($file); //render -> erreur: reconnait pas les variables

            $file = '../templates/default/modules/' . $module->getName() . '/' . $module->getName() . '.html.twig';
            $render.= file_get_contents($file); //affichage pur -> affiche les focntions en clair

        }

        //       6. Return HTML
        return $render;
    }

    public function getName()
    {
        return "hook_extension";
    }
}
