<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220415075017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE hoadon');
        $this->addSql('ALTER TABLE danhmuc MODIFY madm INT NOT NULL');
        $this->addSql('ALTER TABLE danhmuc DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE danhmuc CHANGE madm id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE danhmuc ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE hotro MODIFY idht INT NOT NULL');
        $this->addSql('ALTER TABLE hotro DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE hotro CHANGE noidung noidung LONGTEXT NOT NULL, CHANGE hoten hoten VARCHAR(255) NOT NULL, CHANGE idht id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE hotro ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE login CHANGE password password VARCHAR(6) DEFAULT NULL');
        $this->addSql('ALTER TABLE nguoidung MODIFY idnd INT NOT NULL');
        $this->addSql('ALTER TABLE nguoidung DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE nguoidung CHANGE ngaydangky ngaydangky VARCHAR(255) NOT NULL, CHANGE idnd id INT AUTO_INCREMENT NOT NULL, CHANGE username uername VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE nguoidung ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE nhasx MODIFY idnsx INT NOT NULL');
        $this->addSql('ALTER TABLE nhasx DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE nhasx CHANGE idnsx id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE nhasx ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE sanpham DROP mau, CHANGE tensp tensp VARCHAR(255) NOT NULL, CHANGE chitiet chitiet VARCHAR(255) DEFAULT NULL, CHANGE khuyenmai2 khuyenmai2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tintuc MODIFY matt INT NOT NULL');
        $this->addSql('ALTER TABLE tintuc DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE tintuc CHANGE ndngan ndngan LONGTEXT NOT NULL, CHANGE noidung noidung LONGTEXT NOT NULL, CHANGE matt id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE tintuc ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hoadon (mahd INT AUTO_INCREMENT NOT NULL, idnd INT NOT NULL, hoten VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, diachi VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, dienthoai INT NOT NULL, email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ngaydathang DATE NOT NULL, trangthai INT NOT NULL, PRIMARY KEY(mahd)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE chitiethoadon CHANGE mahd mahd VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE tensp tensp VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE danhmuc MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE danhmuc DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE danhmuc CHANGE tendm tendm VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id madm INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE danhmuc ADD PRIMARY KEY (madm)');
        $this->addSql('ALTER TABLE hotro MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE hotro DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE hotro CHANGE chude chude VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE noidung noidung TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE hoten hoten VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id idht INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE hotro ADD PRIMARY KEY (idht)');
        $this->addSql('ALTER TABLE login CHANGE admin admin VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE password password CHAR(6) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE nguoidung MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE nguoidung DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE nguoidung ADD username VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, DROP uername, CHANGE tennd tennd VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE password password VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE gioitinh gioitinh VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE diachi diachi VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE ngaydangky ngaydangky DATE NOT NULL, CHANGE id idnd INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE nguoidung ADD PRIMARY KEY (idnd)');
        $this->addSql('ALTER TABLE nhasx MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE nhasx DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE nhasx CHANGE tennsx tennsx VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE diachi diachi VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id idnsx INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE nhasx ADD PRIMARY KEY (idnsx)');
        $this->addSql('ALTER TABLE sanpham ADD mau VARCHAR(20) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE tensp tensp VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE hinhanh hinhanh VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE chitiet chitiet TEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE khuyenmai2 khuyenmai2 VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE tintuc MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE tintuc DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE tintuc CHANGE tieude tieude VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE ndngan ndngan TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE noidung noidung TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE hinhanh hinhanh VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE tacgia tacgia VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id matt INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE tintuc ADD PRIMARY KEY (matt)');
    }
}
