<?php

namespace App\Entity;

use App\Repository\NhasxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NhasxRepository::class)
 */
class Nhasx
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tennsx;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diachi;

    /**
     * @ORM\Column(type="integer")
     */
    private $dienthoai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTennsx(): ?string
    {
        return $this->tennsx;
    }

    public function setTennsx(string $tennsx): self
    {
        $this->tennsx = $tennsx;

        return $this;
    }

    public function getDiachi(): ?string
    {
        return $this->diachi;
    }

    public function setDiachi(string $diachi): self
    {
        $this->diachi = $diachi;

        return $this;
    }

    public function getDienthoai(): ?int
    {
        return $this->dienthoai;
    }

    public function setDienthoai(int $dienthoai): self
    {
        $this->dienthoai = $dienthoai;

        return $this;
    }
}
