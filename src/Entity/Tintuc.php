<?php

namespace App\Entity;

use App\Repository\TintucRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TintucRepository::class)
 */
class Tintuc
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
    private $tieude;

    /**
     * @ORM\Column(type="text")
     */
    private $ndngan;

    /**
     * @ORM\Column(type="text")
     */
    private $noidung;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hinhanh;

    /**
     * @ORM\Column(type="date")
     */
    private $ngaydangtin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tacgia;

    /**
     * @ORM\Column(type="integer")
     */
    private $trangthai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTieude(): ?string
    {
        return $this->tieude;
    }

    public function setTieude(string $tieude): self
    {
        $this->tieude = $tieude;

        return $this;
    }

    public function getNdngan(): ?string
    {
        return $this->ndngan;
    }

    public function setNdngan(string $ndngan): self
    {
        $this->ndngan = $ndngan;

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

    public function getHinhanh(): ?string
    {
        return $this->hinhanh;
    }

    public function setHinhanh(string $hinhanh): self
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }

    public function getNgaydangtin(): ?\DateTimeInterface
    {
        return $this->ngaydangtin;
    }

    public function setNgaydangtin(\DateTimeInterface $ngaydangtin): self
    {
        $this->ngaydangtin = $ngaydangtin;

        return $this;
    }

    public function getTacgia(): ?string
    {
        return $this->tacgia;
    }

    public function setTacgia(string $tacgia): self
    {
        $this->tacgia = $tacgia;

        return $this;
    }

    public function getTrangthai(): ?int
    {
        return $this->trangthai;
    }

    public function setTrangthai(int $trangthai): self
    {
        $this->trangthai = $trangthai;

        return $this;
    }
}
