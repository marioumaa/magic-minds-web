<?php

namespace App\Twig\Extension;

use App\Repository\CategorieRepository;
use App\Twig\Runtime\CategoryRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;





class CategoryExtension extends AbstractExtension
{
    private $repo;
    public function __construct(CategorieRepository $repo )
    {
        $this->repo=$repo;
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('cat', [$this, 'getcategories']),
        ];
    }
    public function getcategories()
    {
        return $this->repo->findAll();
    }
}
