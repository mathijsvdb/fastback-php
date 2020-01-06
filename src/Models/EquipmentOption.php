<?php

namespace Fastback\Models;

class EquipmentOption extends FastbackModel
{
    const VALUES = [
        'LIGHTSENSOR' => [
            'nl' => 'Koplampontsteking',
            'fr' => 'Senseur lumière',
            'en' => 'Light sensors',
        ],
        'RAINSENSOR' => [
            'nl' => 'Regensensor',
            'fr' => 'Senseur pluie',
            'en' => 'Rain sensors',
        ],
        'BLUETOOTH' => [
            'nl' => 'Bluetooth',
            'fr' => 'Bluetooth',
            'en' => 'Bluetooth',
        ],
        'WINTERKIT' => [
            'nl' => 'Winter kit',
            'fr' => 'Kit hiver',
            'en' => 'Winter kit',
        ],
        'NAVIGATION' => [
            'nl' => 'Navigatiesysteem',
            'fr' => 'Système GPS',
            'en' => 'Navigation system',
        ],
        'ESP' => [
            'nl' => 'Stabiliteitscontrole',
            'fr' => 'Contrôle de stabilité',
            'en' => 'ESP',
        ],
        'PANOROOF' => [
            'nl' => 'Panoramisch dak',
            'fr' => 'Toit panoramique',
            'en' => 'Panoramic roof',
        ],
        'OPENROOF' => [
            'nl' => 'Open dak',
            'fr' => 'Toit ouvrant',
            'en' => 'Open roof',
        ],
        'MULTIMEDIA' => [
            'nl' => 'Multimediasysteem',
            'fr' => 'Système multimédia',
            'en' => 'Multimedia system',
        ],
        'HEATSEATS' => [
            'nl' => 'Verwarmde voorzetels',
            'fr' => 'Sièges avant chauffants',
            'en' => 'Heated front seats',
        ],
        'ELECSEATS' => [
            'nl' => 'Elektrisch verstelbare voorzetels',
            'fr' => 'Sièges électriques',
            'en' => 'Electric seats',
        ],
        'ELECMIRROR' => [
            'nl' => 'Elektrische achteruitkijkspiegels',
            'fr' => 'Rétroviseurs électriques',
            'en' => 'Electric mirrors',
        ],
        'CRUISECONTROL' => [
            'nl' => 'Snelheidsregelaar',
            'fr' => 'Régulateur de vitesse',
            'en' => 'Cruise control',
        ],
        'MP3' => [
            'nl' => 'Radio/CD/MP3',
            'fr' => 'Radio/CD/MP3',
            'en' => 'Radio/CD/MP3',
        ],
        'XENON' => [
            'nl' => 'Xenonlichten',
            'fr' => 'Phare Xénon',
            'en' => 'Xenon lamps',
        ],
        'FOGLAMP' => [
            'nl' => 'Mistlampen',
            'fr' => 'Phare anti brouillard',
            'en' => 'Fog lamps',
        ],
        'BOARDCOMP' => [
            'nl' => 'Boordcomputer',
            'fr' => 'Ordinateur de bord',
            'en' => 'Board computer',
        ],
        '7SEATS' => [
            'nl' => '7 zitplaatsen',
            'fr' => '7 sièges',
            'en' => '7 seats',
        ],
        'FRONTELECW' => [
            'nl' => 'Elektrische voorruiten',
            'fr' => 'Lève vitre avant électrique',
            'en' => 'Front electric windows',
        ],
        'REARELECW' => [
            'nl' => 'Elektrische achterruiten',
            'fr' => 'Lève vitre arrière électrique',
            'en' => 'Rear electric windows',
        ],
        'POWERSTEER' => [
            'nl' => 'Stuurbekrachtiging',
            'fr' => 'Direction assistée',
            'en' => 'Power steering',
        ],
        'TOWBAR' => [
            'nl' => 'Trekhaak',
            'fr' => 'Crochet de remorquage',
            'en' => 'Towbar',
        ],
        'REARVIEW' => [
            'nl' => 'Achteruitrijcamera',
            'fr' => 'Caméra de recul',
            'en' => 'Rear view camera',
        ],
        'AIRCOMAN' => [
            'nl' => 'Klimaatregeling',
            'fr' => 'Airco manuelle',
            'en' => 'Manual air conditioning',
        ],
        'AIRCOAUTO' => [
            'nl' => 'Automatische klimaatregeling',
            'fr' => 'Airco  automatique',
            'en' => 'Automatic air conditioning',
        ],
        'FRONTPARKASSIST' => [
            'nl' => 'Parkeersensoren vooraan',
            'fr' => 'Assistance parking avant',
            'en' => 'Front park assist',
        ],
        'REARPARKASSIST' => [
            'nl' => 'Parkeersensoren achteraan',
            'fr' => 'Assistance parking arrière',
            'en' => 'Rear park assist',
        ],
        '14W' => [
            'nl' => '14″ Velgen',
            'fr' => 'Jantes 14 pouces',
            'en' => '14″ Wheels',
        ],
        '15W' => [
            'nl' => '15″ Velgen',
            'fr' => 'Jantes 15 pouces',
            'en' => '15″ Wheels',
        ],
        '16W' => [
            'nl' => '16″ Velgen',
            'fr' => 'Jantes 16 pouces',
            'en' => '16″ Wheels',
        ],
        '17W' => [
            'nl' => '17″ Velgen',
            'fr' => 'Jantes 17 pouces',
            'en' => '17″ Wheels',
        ],
        '18W' => [
            'nl' => '18″ Velgen',
            'fr' => 'Jantes 18 pouces',
            'en' => '18″ Wheels',
        ],
        '19W' => [
            'nl' => '19″ Velgen',
            'fr' => 'Jantes 19 pouces',
            'en' => '19″ Wheels',
        ],
        '20W' => [
            'nl' => '20″ Velgen',
            'fr' => 'Jantes 20 pouces',
            'en' => '20″ Wheels',
        ],
        '21W' => [
            'nl' => '21″ Velgen',
            'fr' => 'Jantes 21 pouces',
            'en' => '21″ Wheels',
        ],
        '22W' => [
            'nl' => '22″ Velgen',
            'fr' => 'Jantes 22 pouces',
            'en' => '22″ Wheels',
        ],
        'COLLISIONWARNING' => [
            'nl' => 'Botswaarschuwing',
            'fr' => 'Avertisseur de collision',
            'en' => 'Collision warning',
        ],
        'TINTEDWINDOWS' => [
            'nl' => 'Donker getinte ramen',
            'fr' => 'Vitres arrière teintées',
            'en' => 'Tinted windows / privacy glass',
        ],
        'LEDDAYTIME' => [
            'nl' => 'LED dagrijverlichting',
            'fr' => 'Feux de jour à LED',
            'en' => 'LED Daytime Running Lights',
        ],
        'FOLDINGREARSEAT' => [
            'nl' => 'Neerklapbare achterbank',
            'fr' => 'Banquette arrière rabattable',
            'en' => 'Folding rear seat',
        ],
        'TRACTIONCONTROL' => [
            'nl' => 'Tractiecontrole',
            'fr' => 'Contrôle de traction',
            'en' => 'Traction control',
        ],
        'HILLHOLD' => [
            'nl' => 'Hill-Hold Assist',
            'fr' => 'Hill-Hold Assist',
            'en' => 'Hill-Hold Assist',
        ],
        'LEATHERSTEER' => [
            'nl' => 'Lederen stuurwiel',
            'fr' => 'Volant en cuir',
            'en' => 'Leather steeringwheel',
        ],
        'ANDROIDAUTO' => [
            'nl' => 'Android Auto',
            'fr' => 'Android Auto',
            'en' => 'Android Auto',
        ],
        'APPLECARPLAY' => [
            'nl' => 'Apple CarPlay',
            'fr' => 'Apple CarPlay',
            'en' => 'Apple CarPlay',
        ],
        'ISOFIX' => [
            'nl' => 'Isofix',
            'fr' => 'Isofix',
            'en' => 'Isofix',
        ],
        'CURTAINAIRBAGS' => [
            'nl' => 'Gordijnairbags',
            'fr' => 'Airbag rideaux',
            'en' => 'Curtain airbags',
        ],
        'SPLITBACKSEAT' => [
            'nl' => 'Gescheiden achterbank',
            'fr' => 'Siège arrière séparé',
            'en' => 'Split backseat',
        ],
        'TOUCHSCREEN' => [
            'nl' => 'Touchscreen',
            'fr' => 'Écran tactile',
            'en' => 'Touchscreen',
        ],
        'FRONTAIRBAG' => [
            'nl' => 'Airbags vooraan',
            'fr' => 'Airbags frontaux',
            'en' => 'Front airbags',
        ],
        'ABS' => [
            'nl' => 'ABS',
            'fr' => 'ABS',
            'en' => 'ABS',
        ],
        'ALUW' => [
            'nl' => 'Alu velgen',
            'fr' => 'Jantes en alliage',
            'en' => 'Alloy wheels',
        ],
        'TPMS' => [
            'nl' => 'Bandenspanningscontrolesysteem',
            'fr' => 'Système de surveillance de la pression des pneus',
            'en' => 'Tire Pressure Monitoring System',
        ],
        'CENTRALLOCK' => [
            'nl' => 'Centrale vergrendeling',
            'fr' => 'Verrouillage central électrique',
            'en' => 'Central lock',
        ],
        'SPAREW' => [
            'nl' => 'Reservewiel',
            'fr' => 'Roue de secours',
            'en' => 'Spare wheel',
        ],
        'PANOROOF' => [
            'nl' => 'Panoramisch dak',
            'fr' => 'Toit panoramique',
            'en' => 'Panoramic roof',
        ],
        'SOFTTOP' => [
            'nl' => 'Softtop',
            'fr' => 'Softtop',
            'en' => 'Softtop',
        ],
        'SPORTSEATS' => [
            'nl' => 'Sportzetels',
            'fr' => 'Sièges sport',
            'en' => 'Sport seats',
        ],
        'LED' => [
            'nl' => 'LED koplampen',
            'fr' => 'phares LED',
            'en' => 'LED headlights',
        ],
        'MPACKBMW' => [
            'nl' => 'M Pack (BMW)',
            'fr' => 'M Pack (BMW)',
            'en' => 'M Pack (BMW)',
        ],
        'ADAPTLIGHTS' => [
            'nl' => 'Adaptieve lichten',
            'fr' => 'Adaptive lights',
            'en' => 'Adaptive lights',
        ],
        'CENTRALARMREST' => [
            'nl' => 'Centrale armsteun',
            'fr' => 'Accoudoir central',
            'en' => 'Central armrest',
        ],
        'LANEKEEP' => [
            'nl' => 'Lane Departure Warning',
            'fr' => 'Lane Departure Warning',
            'en' => 'Lane Departure Warning',
        ],
        'LEATHERSEETS' => [
            'nl' => 'Lederen zetels',
            'fr' => 'Siege en cuir',
            'en' => 'Leather seats',
        ],
        'ELECTAILGATE' => [
            'nl' => 'Elektrische achterklep',
            'fr' => 'Hayon électrique',
            'en' => 'Electric tailgate',
        ],
        'AUTOPARK' => [
            'nl' => 'Auto Park Assist',
            'fr' => 'Auto Park Assist',
            'en' => 'Auto Park Assist',
        ],
        'BLINDSPOT' => [
            'nl' => 'Dodehoekwaarschuwing',
            'fr' => 'Avertissement angle mort',
            'en' => 'Blindspot detection',
        ],
        'HEATEDSW' => [
            'nl' => 'Verwarmd stuurwiel',
            'fr' => 'Volant chauffant',
            'en' => 'Heated steering wheel',
        ],
        'LENDSTEUN' => [
            'nl' => 'Lendensteun',
            'fr' => 'Soutien lombaire',
            'en' => 'Lumbar support',
        ],
        'DAB' => [
            'nl' => 'DAB / DAB+',
            'fr' => 'DAB / DAB+',
            'en' => 'DAB / DAB+',
        ],
        'SHIFTPADDLES' => [
            'nl' => 'Schakelpaddles',
            'fr' => 'Palettes au volant',
            'en' => 'Shiftpaddles',
        ],
        'PREMIUMSOUND' => [
            'nl' => 'Premium sound system',
            'fr' => 'Premium sound system',
            'en' => 'Premium sound system',
        ],
        'TRAFFICSIGNRECOGNITION' => [
            'nl' => 'Verkeersbordherkenning',
            'fr' => 'Reconnaissance des panneaux',
            'en' => 'Traffic sign recognition',
        ],
        'SCHUIFDAK' => [
            'nl' => 'Schuifdak',
            'fr' => 'Toit ouvrant',
            'en' => 'Sunroof',
        ],
        '4SEASONTIRES' => [
            'nl' => '4-seizoenenbanden',
            'fr' => 'Pneus 4 saisons',
            'en' => '4 season tires',
        ],
        'ALARM' => [
            'nl' => 'Alarm',
            'fr' => 'Alarme',
            'en' => 'Alarm',
        ],
        'HEADUP' => [
            'nl' => 'Head-up display',
            'fr' => 'Head-up display',
            'en' => 'Head-up display',
        ],
        '360CAMERA' => [
            'nl' => '360° camera',
            'fr' => '360° camera',
            'en' => '360° camera',
        ],
        'COOLINGSEATS' => [
            'nl' => 'Zetelventilatie',
            'fr' => 'Ventilation du siège',
            'en' => 'Cooling seats',
        ],
        'MASSCHAIR' => [
            'nl' => 'Massagestoelen',
            'fr' => 'Fauteuils de massage',
            'en' => 'Massage chairs',
        ],
    ];
}
