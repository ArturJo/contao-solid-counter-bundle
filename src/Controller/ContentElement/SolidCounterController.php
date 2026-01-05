<?php

declare(strict_types=1);

namespace Solidwork\ContaoSolidCounterBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(
    type: 'solid_counter',
    category: 'solid',
    template: 'content_element/solid_counter'
)]
final class SolidCounterController extends AbstractContentElementController
{
    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        $template->set('counterValue', (int) $model->counterValue);
        $template->set('counterSuffix', (string) $model->counterSuffix);
        $template->set('counterText', (string) $model->counterText);
        $template->set('counterDuration', (int) ($model->counterDuration ?: 3000));
        $template->set('counterRepeat', (bool) $model->counterRepeat);

        return $template->getResponse();
    }
}
