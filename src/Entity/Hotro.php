<?php

namespace App\Entity;

use App\Repository\HotroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HotroRepository::class)
 */
class Hotro
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
    private $chude;

    /**
     * @ORM\Column(type="text")
     */
    private $noidung;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hoten;

    /**
     * @ORM\Column(type="integer")
     */
    private $dienthoai;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     */
    private $ngaygui;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChude(): ?string
    {
        return $this->chude;
    }

    public function setChude(string $chude): self
    {
        $this->chude = $chude;

        return $this;
    }

    public function getNoidung(): ?string
    {
        return $this->noidung;
    }

    public function setNoidung(string $noidung): self
    {
        $this->noidung = $noidung;

        return $this;
    }

    public function getHoten(): ?string
    {
        return $this->hoten;
    }

    public function setHoten(string $hoten): self
    {
        $this->hoten = $hoten;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNgaygui(): ?\DateTimeInterface
    {
        return $this->ngaygui;
    }

    public function setNgaygui(\DateTimeInterface $ngaygui): self
    {
        $this->ngaygui = $ngaygui;

        return $this;
    }
}
