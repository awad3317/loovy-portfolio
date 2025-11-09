<?php

return [

    'calmy_baby' => [
        'title' => 'حفاضات كالمي بيبي',
        'description' => 'راحة استثنائية وحماية فائقة لطفلك مع تقنيات متطورة وخامات عالية الجودة',
        'features' => [
            ['icon' => 'fa-regular fa-face-smile', 'color' => '#d10a6a', 'title' => 'راحة فائقة', 'text' => 'تصميم مرن ومبطن بخامات فائقة النعومة، مزود بطبقة تنفس ذكية تسمح بمرور الهواء وتحافظ على بشرة طفلك ناعمة وصحية مع حرية الحركة طوال اليوم.'],
            ['icon' => 'fa-solid fa-shield', 'color' => '#E77A27', 'title' => 'حماية مضاعفة من التسرب', 'text' => 'حواف مرنة + طبقة مزدوجة للحماية بتقنية محكمة الإغلاق تمنع التسرب حتى في أصعب الحركات، لتمنحي طفلك جفافًا وأمانًا كاملًا.'],
            ['icon' => 'fa-solid fa-droplet', 'color' => '#024BE5', 'title' => 'امتصاص فائق التطور', 'text' => 'نظام امتصاص متعدد الطبقات يعمل بتقنية القنوات الموزعة لانتشار السائل بسرعة، يحافظ على جفاف طفلك لمدة تصل إلى 12 ساعة من الراحة الليلية والنهارية.'],
        ],
        'sizes' => [
            'مقاس 1 (حديث الولادة)',
            'مقاس 2 (صغير)',
            'مقاس 3 (وسط)',
            'مقاس 4 (كبير)',
            'مقاس 5 (كبير جداً)',
            'مقاس 6 (كبير جداً جداً)'
        ],
        'products' => [

            [
                'id' => 1,
                'name' => 'حفاضات حديثي الولادة',
                'image' => 'images/calmy_p1.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'حفاضات فائقة النعومة صُممت خصيصًا لبشرة الأطفال حديثي الولادة، بامتصاص عالي يحافظ على جفاف وراحة طفلك.',
                'size' => 'مقاس 1 (حديث الولادة)',
                'type' => 'calmy_baby',
                'weight' => '2-4 كغ',
            ],
            [
                'id' => 2,
                'name' => 'حفاضات حجم كبير',
                'image' => 'images/calmy_p2.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'تصميم عملي للأطفال الأكثر نشاطًا، يوفر ثباتًا مثاليًا وراحة مستمرة حتى مع الحركة الكثيرة.',
                'size' => 'مقاس 4 (كبير)',
                'type' => 'calmy_baby',
                'weight' => '7-10 كغ',
            ],
            [
                'id' => 3,
                'name' => 'حفاضات حجم صغير',
                'image' => 'images/calmy_p3.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'حماية مريحة للأطفال في بداية النمو، مع مرونة تناسب الحركة وراحة تدوم لساعات طويلة.',
                'size' => 'مقاس 2 (صغير)',
                'type' => 'calmy_baby',
                'weight' => '3-6 كغ',
            ],
            [
                'id' => 4,
                'name' => 'حفاضات حجم وسط',
                'image' => 'images/calmy_p4.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'حفاضات عالية الجودة تمنح طفلك حرية الحركة مع امتصاص موثوق يمنع التسرب ويوفر راحة طوال اليوم.',
                'size' => 'مقاس 3 (وسط)',
                'type' => 'calmy_baby',
                'weight' => '5-8 كغ',
            ],
            [
                'id' => 5,
                'name' => 'حفاضات حجم كبير جداً',
                'image' => 'images/calmy_p2.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'راحة وأمان في كل لحظة، حفاضات تناسب الأطفال في مراحل النمو المتقدمة بامتصاص قوي وملمس لطيف.',
                'size' => 'مقاس 5 (كبير جداً)',
                'type' => 'calmy_baby',
                'weight' => '9-12 كغ',
            ],
            [
                'id' => 6,
                'name' => 'حفاضات حجم كبير جداً جداً',
                'image' => 'images/calmy_p2.jpg',
                'images' => [
                    'images/calmy_p1.jpg',
                    'images/calmy_p2.jpg',
                    'images/calmy_p3.jpg',
                    'images/calmy_p4.jpg'
                ],
                'description' => 'حل مثالي للأطفال الأكبر سنًا أو ذوي الاحتياجات الخاصة، يوفر حماية فائقة وراحة استثنائية طوال اليوم.',
                'size' => 'مقاس 6 (كبير جداً جداً)',
                'type' => 'calmy_baby',
                'weight' => '12-15 كغ',
            ],


        ],

    ],

    'lofy_baby' => [
        'title' => 'حفاضات لوفي بيبي',
        'description' => 'راحة استثنائية وحماية فائقة لطفلك مع تقنيات متطورة وخامات عالية الجودة',
        'features' => [
            ['icon' => 'fa-regular fa-face-smile', 'color' => '#d10a6a', 'title' => 'راحة فائقة', 'text' => 'تصميم مريح يتكيف مع حركة الطفل الطبيعية'],
            ['icon' => 'fa-solid fa-shield', 'color' => '#E77A27', 'title' => 'مانع للتسرب', 'text' => 'حواف مرنة وتصميم محكم يمنع التسرب نهائياً'],
            ['icon' => 'fa-solid fa-droplet', 'color' => '#024BE5', 'title' => 'امتصاص فائق', 'text' => 'تقنية امتصاص متطورة تحافظ على جفاف الطفل لمدة 12 ساعة'],
        ],
        'sizes' => [
            'مقاس 1 (حديث الولادة)',
            'مقاس 2 (صغير)',
            'مقاس 3 (وسط)',
            'مقاس 4 (كبير)',
            'مقاس 5 (كبير جداً)',
            'مقاس 6 (كبير جداً جداً)'
        ],
        'products' => [
            [
                'id' => 1,
                'name' => 'حفاضات حديثي الولادة',
                'image' => 'images/lofy_p1.jpg',

                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
                'description' => 'حفاضات فائقة النعومة صُممت خصيصًا لبشرة الأطفال حديثي الولادة، بامتصاص عالي يحافظ على جفاف وراحة طفلك.',
                'size' => 'مقاس 1 (حديث الولادة)',
                'type' => 'lofy_baby',
                'weight' => '2-4 كغ',

            ],
            [
                'id' => 2,
                'name' => 'حفاضات مقاس صغير',
                'image' => 'images/lofy_p2.jpg',

                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
               'description' => 'حماية مريحة للأطفال في بداية النمو، مع مرونة تناسب الحركة وراحة تدوم لساعات طويلة.',
                'size' => 'مقاس 2 (صغير)',
                'type' => 'lofy_baby',
                'weight' => '7-10 كغ',
            ],
            [
                'id' => 3,
                'name' => 'حفاضات مقاس وسط',
                'image' => 'images/lofy_p3.jpg',
                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
                'description' => 'حفاضات عالية الجودة تمنح طفلك حرية الحركة مع امتصاص موثوق يمنع التسرب ويوفر راحة طوال اليوم.',
                'size' => 'مقاس 3 (وسط)',
                'type' => 'lofy_baby',
                'weight' => '5-8 كغ',

            ],
            [
                'id' => 4,
                'name' => 'حفاضات مقاس كبير',
                'image' => 'images/lofy_p4.jpg',
                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
                'description' => 'تصميم عملي للأطفال الأكثر نشاطًا، يوفر ثباتًا مثاليًا وراحة مستمرة حتى مع الحركة الكثيرة.',
                'size' => 'مقاس 4 (كبير)',
                'type' => 'lofy_baby',
                'weight' => '9-12 كغ',

            ],
            [
                'id' => 5,
                'name' => 'حفاضات مقاس كبيرا جدا',
                'image' => 'images/lofy_p5.jpg',
                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
                'description' => 'راحة وأمان في كل لحظة، حفاضات تناسب الأطفال في مراحل النمو المتقدمة بامتصاص قوي وملمس لطيف.',
                'size' => 'مقاس 5 (كبير جداً)',
                'type' => 'lofy_baby',
                'weight' => '12-15 كغ',
            ],
            [
                'id' => 6,
                'name' => 'حفاضات مقاس كبير جدا جدا',
                'image' => 'images/lofy_p6.jpg',
                'images' => [
                    'images/lofy_p1.jpg',
                    'images/lofy_p2.jpg',
                    'images/lofy_p3.jpg',
                    'images/lofy_p4.jpg'
                ],
                 'description' => 'حل مثالي للأطفال الأكبر سنًا أو ذوي الاحتياجات الخاصة، يوفر حماية فائقة وراحة استثنائية طوال اليوم.',
                'size' => 'مقاس 6 (كبير جداً جداً)',
                'type' => 'lofy_baby',
                'weight' => '18-15 كغ',
            ],

        ]
    ],

];