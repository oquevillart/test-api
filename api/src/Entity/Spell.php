<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource(mercure: true)]
#[ORM\Entity]
class Spell
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column]
    public string $name = '';

    #[ORM\Column(type: 'text')]
    public string $description = '';

    #[ORM\Column]
    public bool $selfTargeting = false;

    #[ORM\Column]
    public int $damage = 0;

    #[ORM\Column]
    public int $heal = 0;

    #[ORM\Column]
    public int $strengthBonus = 0;

    #[ORM\Column]
    public int $strengthMalus = 0;

    #[ORM\Column]
    public int $dexterityBonus = 0;

    #[ORM\Column]
    public int $dexterityMalus = 0;

    #[ORM\Column]
    public int $constitutionBonus = 0;

    #[ORM\Column]
    public int $constitutionMalus = 0;

    #[ORM\Column]
    public int $intelligenceBonus = 0;

    #[ORM\Column]
    public int $intelligenceMalus = 0;

    #[ORM\Column]
    public int $wisdomBonus = 0;

    #[ORM\Column]
    public int $wisdomMalus = 0;

    #[ORM\Column]
    public int $charismaBonus = 0;

    #[ORM\Column]
    public int $charismaMalus = 0;

    public function getId(): ?int
    {
        return $this->id;
    }
}