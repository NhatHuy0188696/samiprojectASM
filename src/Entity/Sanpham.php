<?php

namespace App\Entity;

use App\Repository\SanphamRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @ORM\Entity(repositoryClass=SanphamRepository::class)
 */
class Sanpham
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=false)
     */
    private $tensp;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $hinhanh;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $chitiet;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $soluong;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $daban;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $gia;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $khuyenmai1;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $khuyenmai2;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $madm;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $ngaycapnhat;

    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    
    private $trangthai;

    public function getId(): ?int
    {
        return $this->id;
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
    

    public function getHinhanh(): ?string
    {
        return $this->hinhanh;
    }

    public function setHinhanh(string $hinhanh): self
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }

    public function getChitiet(): ?string
    {
        return $this->chitiet;
    }

    public function setChitiet(string $chitiet): self
    {
        $this->chitiet = $chitiet;

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

    public function getDaban(): ?int
    {
        return $this->daban;
    }

    public function setDaban(int $daban): self
    {
        $this->daban = $daban;

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

    public function getKhuyenmai1(): ?int
    {
        return $this->khuyenmai1;
    }

    public function setKhuyenmai1(int $khuyenmai1): self
    {
        $this->khuyenmai1 = $khuyenmai1;

        return $this;
    }

    public function getKhuyenmai2(): ?int
    {
        return $this->khuyenmai2;
    }

    public function setKhuyenmai2(int $khuyenmai2): self
    {
        $this->khuyenmai2 = $khuyenmai2;

        return $this;
    }

    public function getMadm(): ?int
    {
        return $this->madm;
    }

    public function setMadm(int $madm): self
    {
        $this->madm = $madm;

        return $this;
    }

    public function getNgaycapnhat(): ?\DateTimeInterface
    {
        return $this->ngaycapnhat;
    }

    public function setNgaycapnhat(\DateTimeInterface $ngaycapnhat): self
    {
        $this->ngaycapnhat = $ngaycapnhat;

        return $this;
    }

    public function getTrangthai(): ?bool
    {
        return $this->trangthai;
    }

    public function setTrangthai(bool $trangthai): self
    {
        $this->trangthai = $trangthai;

        return $this;
    }
    public $path;
    public function getAbsolutePath(){
        return null === $this->path? null:$this->getUploadRootDir().'../uploads/image'.$this->path;
    }
    public function getWebPath(){
        return null === $this->path? null:$this->getUploadRootDir().'../upload/image'.$this->path;
    }
    protected function getUploadRootDir(){
        return __DIR__.'../../../public'.$this->getUploadDir();  
    }
    protected function getUploadDir(){
        return 'uploads/image';
    }
    
}
