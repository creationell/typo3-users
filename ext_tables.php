<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'login',
            '[Users] Login'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'logout',
            '[Users] Logout'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'forgot',
            '[Users] Forgot password'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'register',
            '[Users] Register'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'changeemail',
            '[Users] Change email'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'changeemailconfirm',
            '[Users] Change email (CONFIRM)'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'changepass',
            '[Users] Change password'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'changeprofile',
            '[Users] Change profile'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'deleteaccount',
            '[Users] Delete account'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'deleteaccountconfirm',
            '[Users] Delete account (CONFIRM)'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SaschaEnde.Users',
            'dashboard',
            '[Users] Dashboard'
        );

        // ------------------------------------------------------------------------------
        // Add Backend Module
        // ------------------------------------------------------------------------------

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'SaschaEnde.Users',
                'tools', // Make module a submodule of 'web'
                'users', // Submodule key
                '', // Position
                [
                    'Admin' => 'list,importbanlist,check',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:users/Resources/Public/Icons/Extension.png',
                    'labels' => 'LLL:EXT:users/Resources/Private/Language/locallang_users.xlf',
                ]
            );

        }

        // --------------------------------------------
        // TYPOSCRIPT
        // --------------------------------------------

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('users', 'Configuration/TypoScript', 'Users');

        // --------------------------------------------
        // TABLES
        // --------------------------------------------

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_bannedhosts', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_bannedhosts.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_bannedhosts');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_news', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_news.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_news');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_newscategory', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_newscategory.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_newscategory');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_company', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_company.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_company');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_holding', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_holding.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_holding');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_users_domain_model_newsbookmark', 'EXT:users/Resources/Private/Language/locallang_csh_tx_users_domain_model_newsbookmark.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_users_domain_model_newsbookmark');

        // --------------------------------------------
        // FLEXFORM
        // --------------------------------------------

        \t3h\t3h::Inject()->setExtension('users')->addFlexform('login');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('logout');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('forgot');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('register');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('changeemail');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('changeprofile');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('deleteaccount');
        \t3h\t3h::Inject()->setExtension('users')->addFlexform('dashboard');
    }
);