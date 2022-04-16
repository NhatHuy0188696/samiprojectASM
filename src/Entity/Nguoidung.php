<?php

namespace App\Entity;

use App\Repository\NguoidungRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NguoidungRepository::class)
 */
class Nguoidung
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
    private $tennd;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $uername;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;

    /**
     * @ORM\Column(type="date")
     */
    private $ngaysinh;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $gioitinh;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $dienthoai;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diachi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ngaydangky;

    /**
     * @ORM\Column(type="integer")
     */
    private $phanquyen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTennd(): ?string
    {
        return $this->tennd;
    }

    public function setTennd(string $tennd): self
    {
        $this->tennd = $tennd;

        return $this;
    }

    public function getUername(): ?string
    {
        return $this->uername;
    }

    public function setUername(string $uername): self
    {
        $this->uername = $uername;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNgaysinh(): ?\DateTimeInterface
    {
        return $this->ngaysinh;
    }

    public function setNgaysinh(\DateTimeInterface $ngaysinh): self
    {
        $this->ngaysinh = $ngaysinh;

        return $this;
    }

    public function getGioitinh(): ?string
    {
        return $this->gioitinh;
    }

    public function setGioitinh(string $gioitinh): self
    {
        $this->gioitinh = $gioitinh;

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

    public function getDienthoai(): ?int
    {
        return $this->dienthoai;
    }

    public function setDienthoai(int $dienthoai): self
    {
        $this->dienthoai = $dienthoai;

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

    public function getNgaydangky(): ?string
    {
        return $this->ngaydangky;
    }

    public function setNgaydangky(string $ngaydangky): self
    {
        $this->ngaydangky = $ngaydangky;

        return $this;
    }

    public function getPhanquyen(): ?int
    {
        return $this->phanquyen;
    }

    public function setPhanquyen(int $phanquyen): self
    {
        $this->phanquyen = $phanquyen;

        return $this;
    }
}
