<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class XporterController.
 *
 * @copyright Aquis Grana impex srl (http://www.webnou.ro/)
 * @author    Petronel Malutan <malutanpetronel@gmail.com>
 *
 * @IsGranted("ROLE_ADMIN")
 */
final class XporterController //extends AbstractController
{
    /** @var EngineInterface */
    private $templatingEngine;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * XporterController constructor.
     */
    public function __construct(EngineInterface $templatingEngine, TokenStorageInterface $tokenStorage)
    {
        $this->templatingEngine = $templatingEngine;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * About file.
     */
    public function aboutAction(Request $request, Security $security): Response
    {
        return new Response($this->templatingEngine->render('@SyliusXporterPlugin/Xporter/about.html.twig',
            []));
    }
}
