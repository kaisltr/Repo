<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 13/03/2018
 * Time: 19:50
 */

namespace UserBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('age')
            ->add('num_tel')
            ->add('adresse')
            ->add('fonction',ChoiceType::class,
                array('choices'=>
                    array(
                        ''=>'',
                        'Medecin'=>'Medecin',
                        'Resp Pharma'=>'Resp Pharma',
                        'Resp Para-Pharma'=>'Resp Para-Pharma',
                        'Resp Salle De Sport'=>'Resp Salle De Sport',
                        'Resp Centre Esthetique'=>'Resp Centre Esthetique',
                    )
                ))
            ->add('specialite')
        ->add('ajouter',SubmitType::class);
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}