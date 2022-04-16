<?php

namespace App\Entity;

use App\Repository\ChitiethoadonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChitiethoadonRepository::class)
 */
class Chitiethoadon
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $mahd;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tensp;

    /**
     * @ORM\Column(type="integer")
     */
    private $soluong;

    /**
     * @ORM\Column(type="integer")
     */
    private $gia;

    /**
     * @ORM\Column(type="integer")
     */
    private $phuongthucthanhtoan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMahd(): ?string
    {
        return $this->mahd;
    }

    public function setMahd(string $mahd): self
    {
        $this->mahd = $mahd;

        return $this;
    }

    public function getTensp(): ?string
    {
        return $this->tensp;
    }

    public function setTensp(string $tensp): self
    {
        $this->tensp = $tensp;

        return $this;
    }

    public function getSoluong(): ?int
    {
        return $this->soluong;
    }

    public function setSoluong(int $soluong): self
    {
        $this->soluong = $soluong;

        return $this;
    }

    public function getGia(): ?int
    {
        return $this->gia;
    }

    public function setGia(int $gia): self
    {
        $this->gia = $gia;

        return $this;
    }

    public function getPhuongthucthanhtoan(): ?int
    {
        return $this->phuongthucthanhtoan;
    }

    public function setPhuongthucthanhtoan(int $phuongthucthanhtoan): self
    {
        $this->phuongthucthanhtoan = $phuongthucthanhtoan;

        return $this;
    }
}
