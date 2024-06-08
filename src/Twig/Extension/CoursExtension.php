<?php

namespace App\Twig\Extension;

use App\Repository\CoursRepository;
use App\Twig\Runtime\CoursRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CoursExtension extends AbstractExtension
{
   
    private $repo;
    public function __construct(CoursRepository $repo )
    {
        $this->repo=$repo;
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('course', [$this, 'getcourses']),
        ];
    }
    public function getcourses($id)
    {
        return $this->repo->findbycategoryprof($id);
    }
}
