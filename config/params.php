<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'copyright' => [
        'ООО "БКФ" ОГРН: 5177746201221 ИНН: 7720402524, Не является публичной офертой, Copyright &copy; tyteda.ru ' . date('Y') . '.',
        'Сделано <a href="https://wetop.ru"><span>wetop</span> digital agency</a>'
    ],
    'contacts' => [
        [
            'value' => '+7 (495) 139-64-44',
            'protocol' => 'tel',
        ],
        [
            'value' => 'dostavka@tyteda.ru',
            'protocol' => 'mailto',
        ],
        [
            'value' => 'г. Москва, Сталеваров ул., д.14, корпус 1',
            'protocol' => null,
        ],
    ],
    'menuItemActive' => 'page-header__item--active',
    'menuItems' => [
        ['label' => 'Главная', 'url' => ['site/index']],
        ['label' => 'О нас', 'url' => ['site/about']],
        ['label' => 'Оплата и доставка', 'url' => ['site/payment']],
        ['label' => 'Контакты', 'url' => ['site/contacts']],
        ['label' => 'Политика конфиденциальности', 'url' => ['site/policy']],
    ],
    'servicesItems' => [
        ['label' => 'Доставка готовой еды', 'url' => '#'],
        ['label' => 'Корпоративного питание', 'url' => '#'],
        ['label' => 'Везу банкет', 'url' => '#'],
        ['label' => 'Доставка поминальных обедов', 'url' => '#'],
    ],
    'features' => [
        'Зона доставки Москва<br>и Московская область',
        'Фермерское<br>производство',
        'Доставим заказ 24/7<br>в установленное время',
        'Контроль<br>качества',
        '8 лет<br>на рынке',
        'Без ГМО<br>и добавок',
    ],
    'paymentItems' => [
        [
            'title' => 'Доставка',
            'desc' => 'Круглосуточно без выходных и праздников<br>Время и цена доставки зависит от зоны',
            'icons' => null
        ],
        [
            'title' => 'Оплата',
            'desc' => 'Принимается только онлайн оплата<br>К оплате принимаются платежные карты: VISA Inc, MasterCard WorldWide, МИР.',
            'icons' => [
                [
                    'src' => 'visa.svg',
                    'width' => '51'
                ],
                [
                    'src' => 'mir.svg',
                    'width' => '56'
                ],
                [
                    'src' => 'mastercard.svg',
                    'width' => '34'
                ],
                [
                    'src' => 'paykeeper.png',
                    'width' => '99'
                ],
            ]
        ],
        [
            'title' => 'Отказ от услуги',
            'desc' => 'Отказ от доставки регламентируется статьей 32 федерального закона «О защите прав потребителей», но не менее чем за сутки',
            'icons' => null
        ],
    ],
];
