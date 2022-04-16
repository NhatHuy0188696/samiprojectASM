<?php

namespace App\Entity;

use App\Repository\DanhmucRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DanhmucRepository::class)
 */
class Danhmuc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $madm;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dequi;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tendm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMadm(): ?int
    {
        return $this->madm;
    }

    public function setMadm(?int $madm): self
    {
        $this->madm = $madm;

        return $this;
    }

    public function getDequi(): ?int
    {
        return $this->dequi;
    }

    public function setDequi(?int $dequi): self
    {
        $this->dequi = $dequi;

        return $this;
    }

    public function getTendm(): ?string
    {
        return $this->tendm;
    }

    public function setTendm(?string $tendm): self
    {
        $this->tendm = $tendm;

        return $this;
    }
}
