<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('zip', [$this, 'zip']),
        ];
    }

    public function zip(array $keys, array $values): array
    {
        return array_combine($keys, $values);
    }
}