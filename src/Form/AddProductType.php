<?php

namespace App\Form;

use App\Entity\Sanpham;
use Doctrine\ORM\Mapping\Id;
use PhpParser\Node\Scalar\MagicConst\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\PropertyInfo\Type;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
     
        $builder
            ->add('tensp',TextType::class,[
                'required'=>false,
            ])
            ->add('hinhanh',FileType::class,[
                'label'=>'chọn hình ảnh',
                'mapped'=>false,
                'required'=>false,
            ])
            ->add('chitiet',TextType::class,[
                'required'=>false,
            ])
            ->add('soluong',TextType::class,[
                'required'=>false,
            ])
            ->add('daban',TextType::class,[
                'required'=>false,
            ])
            ->add('gia',TextType::class,[
                'required'=>false,
            ])
            ->add('ngaycapnhat',DateType::class,[
                'required'=>false,
            ])
            ->add('khuyenmai1',TextType::class,[
                'required'=>false,
            ])
          
            ->add('madm',TextType::class,[
                'required'=>false,
            ])
            ->add('ngaycapnhat',DateType::class,[
                'required'=>false,
            ])
            ->add('trangthai',RadioType::class,[
                'required'=>false,
            ])
      
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sanpham::class,
        ]);
    }
    

    
}
