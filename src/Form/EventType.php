<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $circuits = [
            'Alsace - Village',
            'Alsace - Village - Inversé',
            'Alsace - Site d\'essais',
            'Alsace - Site d\'essais - Inversé',
            'Autodrome Lago Maggiore',
            'Autodrome Lago Maggiore - Inversé',
            'Autodrome Lago Maggiore - Centre',
            'Autodrome Lago Maggiore - Centre - Inversé',
            'Autodrome Lago Maggiore - Est',
            'Autodrome Lago Maggiore - Est - Inversé',
            'Autodrome Lago Maggiore - Ouest',
            'Autodrome Lago Maggiore - Ouest - Inversé',
            'Autodrome Lago Maggiore - Extrémité est',
            'Autodrome Lago Maggiore - Extrémité est - Inversé',
            'Autodrome Lago Maggiore - Extrémité ouest',
            'Autodrome Lago Maggiore - Extrémité ouest - Inversé',
            'Autódromo de Interlagos',
            'Autodromo Nazionale Monza',
            'Autodromo Nazionale Monza - Sans chicane',
            'Autopolis International Racing Course',
            'Autopolis International Racing Course - Parcours court',
            'Blue Moon Bay Speedway',
            'Blue Moon Bay Speedway - Inversé',
            'Blue Moon Bay Speedway - Central A',
            'Blue Moon Bay Speedway - Central A - Inversé',
            'Blue Moon Bay Speedway - Central B',
            'Blue Moon Bay Speedway - Central B - Inversé',
            'Brands Hatch Grand Prix Circuit',
            'Brands Hatch Indy Circuit',
            'BB Raceway',
            'BB Raceway - Inversé',
            'Circuit de Barcelona-Catalunya - Version Grand Prix',
            'Circuit de Barcelona-Catalunya - Version Grand Prix sans chicane',
            'Circuit de Barcelona-Catalunya - Tracé national',
            'Circuit de Barcelona-Catalunya - Tracé Rallycross',
            'Circuit de Sainte-Croix - A',
            'Circuit de Sainte-Croix - A - Inversé',
            'Circuit de Sainte-Croix - B',
            'Circuit de Sainte-Croix - B - Inversé',
            'Circuit de Sainte-Croix - C',
            'Circuit de Sainte-Croix - C - Inversé',
            'Circuit de Spa-Francorchamps',
            'Circuit de Spa-Francorchamps - 24 Heures',
            'Circuit des 24 Heures du Mans',
            'Circuit des 24 Heures du Mans - Pas de chicane',
            'Colorado Springs - Lac',
            'Colorado Springs - Lac - Inversé',
            'Daytona International Speedway - Tri-ovale',
            'Daytona International Speedway - Circuit routier',
            'Deep Forest Raceway',
            'Deep Forest Raceway - Inversé',
            'Dragon Trail - Bord de mer',
            'Dragon Trail - Bord de mer - Inversé',
            'Dragon Trail - Jardins',
            'Dragon Trail - Jardins - Inversé',
            'Fishermans Ranch',
            'Fishermans Ranch - Inversé',
            'Fuji International Speedway',
            'Fuji International Speedway - Court',
            'Goodwood Motor Circuit',
            'Grand Valley - Route 1',
            'Grand Valley - Route 1 - Inversé',
            'Grand Valley - Sud',
            'Grand Valley - Sud - Inversé',
            'High Speed Ring',
            'High Speed Ring - Inversé',
            'Kyoto Driving Park - Miyabi',
            'Kyoto Driving Park - Yamagiwa',
            'Kyoto Driving Park - Yamagiwa - Inversé',
            'Kyoto Driving Park - Yamagiwa+Miyabi',
            'Kyoto Driving Park - Yamagiwa+Miyabi - Inversé',
            'Lake Louise - Tri-ovale',
            'Lake Louise - Tri-ovale inversé',
            'Lake Louise - Circuit court',
            'Lake Louise - Circuit court inversé',
            'Lake Louise - Circuit long',
            'Lake Louise - Circuit long inversé',
            'Michelin Raceway Road Atlanta',
            'Mount Panorama',
            'Northern Isle Speedway',
            'Nürburgring - 24 Heures',
            'Nürburgring - Piste Grand Prix',
            'Nürburgring - Nordschleife',
            'Nürburgring - Endurance',
            'Nürburgring - Sprint',
            'Red Bull Ring',
            'Red Bull Ring - Piste courte',
            'Sardegna - Éoliennes',
            'Sardegna - Éoliennes - Inversé',
            'Sardegna - Tracé A',
            'Sardegna - Tracé A - Inversé',
            'Sardegna - Tracé B',
            'Sardegna - Tracé B - Inversé',
            'Sardegna - Tracé C',
            'Sardegna - Tracé C - Inversé',
            'Special Stage Route X',
            'Suzuka Circuit',
            'Suzuka Circuit - Parcours est',
            'Tokyo Expressway - Centrale dans le sens antihoraire',
            'Tokyo Expressway - Est dans le sens horaire',
            'Tokyo Expressway - Est dans le sens antihoraire',
            'Tokyo Expressway - Centrale dans le sens horaire',
            'Tokyo Expressway - Sud dans le sens horaire',
            'Tokyo Expressway - Sud dans le sens antihoraire',
            'Trial Mountain Circuit',
            'Trial Mountain Circuit - Inversé',
            'Tsukuba Circuit',
            'Watkins Glen - Parcours long',
            'Watkins Glen - Parcours court',
            'WeatherTech Raceway Laguna Seca',
            'Willow Springs International Raceway - Big Willow',
            'Willow Springs International Raceway - Horse Thief Mile',
            'Willow Springs International Raceway - Horse Thief Mile - Inversé',
            'Willow Springs International Raceway - Streets of Willow Springs',
            'Willow Springs International Raceway - Streets of Willow Springs - Inversé',
        ];

        $builder
            ->add('Nom')
            //->add('Description')
            ->add('Dateheure')
            ->add('Circuit', ChoiceType::class, [
                'choices' => array_combine($circuits, $circuits),
                'attr' => ['class' => 'form-control'],
            ])
            //->add('Organisateur')
            ->add('Participants')
            //->add('Statut')
            //->add('TypeCourse')
            //->add('Duree')
            //->add('LimiteParticipant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}