<?php

    $items = [
        [
            'Item' => [
                'id' => 'aaa-aaa-aaa-aaa-aaa',
                'name' => 'wifi router',
                'type' => 'Resource',
            ],
            'Alternatives' => [
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
            ]
        ],
        [
            'Item' => [
                'id' => 'bbb-bbb-bbb-bbb-bbb',
                'name' => 'this is a very long name for a resource',
                'type' => 'Resource',
            ],
            'Alternatives' => [
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
            ]
        ],
        [
            'Item' => [
                'id' => 'ccc-ccc-ccc-ccc-ccc',
                'name' => 'banking password',
                'type' => 'Resource',
            ],
            'Alternatives' => [
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
            ]
        ],
        [
            'Item' => [
                'id' => 'aaa-aaa-aaa-aaa-aaa',
                'name' => 'test',
                'type' => 'Group',
            ],
            'Alternatives' => [
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
                [
                    'User' => [
                        'id' => 'uuu-uuu-uuu-uuu-uuu',
                        'first_name' => 'Ada',
                        'last_name' => 'Lovelace',
                        'email' => 'ada@passbolt.com',
                        'avatar' => 'img/avatar/user.png',
                        'fingerprint' => '3337 88B5 464B 797F DF10  A98F 2FE9 6B47 C7FF 421A'
                    ]
                ],
            ]
        ]
    ];
?>
<div class="form-content permission-edit">
    <ul id="js_permissions_list" class="permissions scroll mad_component_tree mad_view_component_tree ready">
<?php foreach ($items as $item) : ?>
        <?php  ?>
        <li id="<?php echo $item['Item']['id']; ?>" data-view-id="372"
            class="row direct-permission <?php if(isset($item['Permission']['updated'])) echo 'permission-updated'; ?>" >
            <div class="user"> <!-- or class=group -->
                <div class="details">
                    <strong><span class="name">
                        <?php echo $item['Item']['name']; ?>
                    </span></strong>
<!--                    <div href="#" class="more_details tooltip-alt">-->
<!--                        <i class="fa fa-info-circle"></i>-->
<!--                        <div class="tooltip-text right">-->
<!--                            <div class="email">--><?php //echo $user['User']['email']; ?><!--</div>-->
<!--                            <div class="fingerprint">--><?php //echo $user['User']['fingerprint']; ?><!--</div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="permission_changes">
                    <span><?php echo $item['Item']['type']; ?></span>
                </div>
            </div>
            <div class="select rights">
                <form id="js_share_rs_perm_<?php echo $item['Item']['id']; ?>" class="js_perm_edit_form" data-view-id="372">
                    <select id="js_share_perm_type_<?php echo $item['Item']['id']; ?>"
                            class="js_share_rs_perm_type permission mad_form_dropdown form-element mad_view_form_dropdown">
                        <?php foreach($item['Alternatives'] as $user): ?>
                        <option value="<?php echo $user['User']['id']; ?>" data-view-id="376"><?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>
        </li>
<?php endforeach; ?>
    </ul>
</div>
