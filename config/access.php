<?php

use App\Models\Access\Permission\Permission;
use App\Models\Access\Role\Role;

return [
    /*
     * Users table used to store users
     */
    'users_table' => 'users',

    /*
     * Role model used by Access to create correct relations. Update the role if it is in a different namespace.
    */
    'role' => Role::class,

    /*
     * Roles table used by Access to save roles to the database.
     */
    'roles_table' => 'roles',

    /*
     * Permission model used by Access to create correct relations.
     * Update the permission if it is in a different namespace.
     */
    'permission' => Permission::class,

    /*
     * Permissions table used by Access to save permissions to the database.
     */
    'permissions_table' => 'permissions',

    /*
     * permission_role table used by Access to save relationship between permissions and roles to the database.
     */
    'permission_role_table' => 'permission_role',

    /*
     * permission_user table used by Access to save relationship between permissions and users to the database.
     */
    'permission_user_table' => 'permission_user',

    /*
     * role_user table used by Access to save assigned roles to the database.
     */
    'role_user_table' => 'role_user',

    /*
     * countries table used to store countries
     */
    'countries_table' => 'countries',

    /*
     * states table used to store states
     */
    'states_table' => 'states',

    /*
     * cities table used to store cities
     */
    'cities_table' => 'cities',

    /*
     * Email templates table used to store Email templates
     */
    'settings_table' => 'settings',

    /*
     * History Types table used to store History Type
     */
    'history_types_table' => 'history_types',

    /*
     * Blog Catagories table used to store Blog Catagory
     */
    'blog_categories_table' => 'blog_categories',

    /*
     * Blog Tags table used to store Blog Tag
     */
    'blog_tags_table' => 'blog_tags',

    /*
     * Blog Tags table used to store Blog Tag
     */
    'blogs_table' => 'blogs',

    /*
     * Blog Tags table used to store Blog Tag
     */
    'blog_map_categories_table' => 'blog_map_categories',

    /*
     * Blog Tags table used to store Blog Tag
     */
    'blog_map_tags_table' => 'blog_map_tags',

    /*
     * Notifications table used to store user notification
     */
    'notifications_table' => 'notifications',

    /*
     * Menus table used to store Menu and menu items
     */
    'menus_table'      => 'menus',
    'menu_items_table' => 'menu_items',

    /*
     * Configurations for the user
     */
    'users' => [
        /*
         * Whether or not public registration is on
         */
        'registration' => env('ENABLE_REGISTRATION', 'true'),

        /*
         * The role the user is assigned to when they sign up from the frontend, not namespaced
         */
        'default_role' => 'User',
        //'default_role' => 2,

        /*
         * Whether or not the user has to confirm their email when signing up
         */
        'confirm_email' => true,

        /*
         * Whether or not the users email can be changed on the edit profile screen
         */
        'change_email' => false,
    ],

    /*
     * Configuration for roles
     */
    'roles' => [
        /*
         * Whether a role must contain a permission or can be used standalone as a label
         */
        'role_must_contain_permission' => true,
    ],

    /*
     * Socialite session variable name
     * Contains the name of the currently logged in provider in the users session
     * Makes it so social logins can not change passwords, etc.
     */
    'socialite_session_name' => 'socialite_provider',

    /*
     * Application captcha specific settings
     */
    'captcha' => [
        /*
         * Whether the registration captcha is on or off
         */
        'registration' => env('REGISTRATION_CAPTCHA_STATUS', false),
    ],

    /*
     * System constatnt
     */
    'constants' => [
        'default_country' => 1,
    ],
];
