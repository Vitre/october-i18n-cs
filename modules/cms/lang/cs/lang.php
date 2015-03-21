<?php

return [
    'cms_object' => [
        'invalid_file' => 'Invalid file name: :name. File names can contain only alphanumeric symbols, underscores, dashes and dots. Some examples of correct file names: page.htm, page, subdirectory/page',
        'invalid_property' => "The property ':name' cannot be set",
        'file_already_exists' => "File ':name' already exists.",
        'error_saving' => "Error saving file ':name'. Please check write permissions.",
        'error_creating_directory' => 'Error creating directory :name. Please check write permissions.',
        'invalid_file_extension'=>'Invalid file extension: :invalid. Allowed extensions are: :allowed.',
        'error_deleting' => "Error deleting the template file ':name'. Please check write permissions.",
        'delete_success' => 'Templates were successfully deleted: :count.',
        'file_name_required' => 'The File Name field is required.'
    ],
    'theme' => [
        'active' => [
            'not_set' => 'The active theme is not set.',
            'not_found' => 'The active theme is not found.'
        ],
        'edit' => [
            'not_set' => 'The edit theme is not set.',
            'not_found' => 'The edit theme is not found.',
            'not_match' => "The object you're trying to access doesn't belong to the theme being edited. Please reload the page."
        ],
        'settings_menu' => 'Front-end theme',
        'settings_menu_description' => 'Preview the list of installed themes and select an active theme.',
        'find_more_themes' => 'Find more themes on OctoberCMS Theme Marketplace.',
        'activate_button' => 'Activate',
        'active_button' => 'Activate',
        'customize_button' => 'Customize'
    ],
    'maintenance' => [
        'settings_menu' => 'Režim údržby',
        'settings_menu_description' => 'Configure the maintenance mode page and toggle the setting.',
        'is_enabled' => 'Aktivovat režim údržby',
        'is_enabled_comment' => 'When activated website visitors will see the page chosen below.'
    ],
    'page' => [
        'not_found' => [
            'label' => 'Stránka nenalezena',
            'help' => 'Požadovaná stránka nebyla nalezena.'
        ],
        'custom_error' => [
            'label' => 'Chyba',
            'help' => "We're sorry, but something went wrong and the page cannot be displayed."
        ],
        'menu_label' => 'Stránky',
        'unsaved_label' => 'Neuložené stránky',
        'no_list_records' => 'Stránky nenalezeny',
        'new' => 'Nová stránka',
        'invalid_url' => 'Neplatný URL formát. The URL should start with the forward slash symbol and can contain digits, Latin letters and the following symbols: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Opravdu chcete smazat vybrané stránky?',
        'delete_confirm_single' => 'Opravdu chcete smazat tuto stránku?',
        'no_layout' => '-- žádný layout --'
    ],
    'layout' => [
        'not_found' => "Layout ':name' nebyl nalezen",
        'menu_label' => 'Layouty',
        'unsaved_label' => 'Neuložené layouty',
        'no_list_records' => 'No layouts found',
        'new' => 'Nový layout',
        'delete_confirm_multiple' => 'Opravdu chcete smazat vybrané layouty?',
        'delete_confirm_single' => 'Oprvdu chcete smazat tento layout?'
    ],
    'partial' => [
        'invalid_name' => 'Neplatné jméno části: :name.',
        'not_found' => "Část ':name' nenalezena.",
        'menu_label' => 'Části',
        'unsaved_label' => 'Neuložené části',
        'no_list_records' => 'Nenalezeny žádné části',
        'delete_confirm_multiple' => 'Opravdu chcete smazat vybrané části?',
        'delete_confirm_single' => 'Opravdu chcete smazat tuto část?',
        'new' => 'Nová část'
    ],
    'content' => [
        'not_found' => "Obsahový soubor ':name' nenalezen.",
        'menu_label' => 'Obsah',
        'unsaved_label' => 'Neuložený obsah',
        'no_list_records' => 'Nenalezen žádný obsah',
        'delete_confirm_multiple' => 'Opravdu chcete smazat vybrané obsahy nebo složky?',
        'delete_confirm_single' => 'Opravdu chcete smazat tento obsahový soubor?',
        'new' => 'Nový obsahový soubor'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Invalid AJAX handler name: :name.',
        'not_found' => "AJAX handler ':name' was not found."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Přidat',
        'search' => 'Hledat...'
    ],
    'editor' => [
        'settings' => 'Nastavení',
        'title' => 'Název',
        'new_title' => 'Název nové stránky',
        'url' => 'URL',
        'filename' => 'Jméno souboru',
        'layout' => 'Layout',
        'description' => 'Popis',
        'preview' => 'Náhled',
        'meta' => 'Meta',
        'meta_title' => 'Meta název',
        'meta_description' => 'Meta popis',
        'markup' => 'Markup',
        'code' => 'Kód',
        'content' => 'Obsah',
        'hidden' => 'Skrytý',
        'hidden_comment' => 'Skryté stránky jsou dostupné pouze přihlášeným uživatelům.',
        'enter_fullscreen' => 'Enter fullscreen mode',
        'exit_fullscreen' => 'Exit fullscreen mode'
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Unsaved asset(s)',
        'drop_down_add_title' => 'Přidat...',
        'drop_down_operation_title' => 'Akce...',
        'upload_files' => 'Nahrát soubor(y)',
        'create_file' => 'Vytvořit soubor',
        'create_directory' => 'Vytvořit složku',
        'directory_popup_title' => 'Nová složka',
        'directory_name' => 'Jméno složky',
        'rename' => 'Přejmenovat',
        'delete' => 'Smazat',
        'move' => 'Přesunout',
        'select' => 'Vybrat',
        'new' => 'Nový soubor',
        'rename_popup_title' => 'Přejmenovat',
        'rename_new_name' => 'Nové jméno',
        'invalid_path' => 'Path can contain only digits, Latin letters, spaces and the following symbols: ._-/',
        'error_deleting_file' => 'Error deleting file :name.',
        'error_deleting_dir_not_empty' => 'Error deleting directory :name. The directory is not empty.',
        'error_deleting_dir' => 'Error deleting file :name.',
        'invalid_name' => 'Name can contain only digits, Latin letters, spaces and the following symbols: ._-',
        'original_not_found' => 'Original file or directory not found',
        'already_exists' => 'File or directory with this name already exists',
        'error_renaming' => 'Error renaming the file or directory',
        'name_cant_be_empty' => 'The name cannot be empty',
        'too_large' => 'The uploaded file is too large. The maximum allowed file size is :max_size',
        'type_not_allowed' => 'Only the following file types are allowed: :allowed_types',
        'file_not_valid' => 'File is not valid',
        'error_uploading_file' => "Error uploading file ':name': :error",
        'move_please_select' => 'vyberte prosím',
        'move_destination' => 'Destination directory',
        'move_popup_title' => 'Move assets',
        'move_button' => 'Přesunout',
        'selected_files_not_found' => 'Selected files not found',
        'select_destination_dir' => 'Please select a destination directory',
        'destination_not_found' => 'Destination directory is not found',
        'error_moving_file' => 'Error moving file :file',
        'error_moving_directory' => 'Error moving directory :dir',
        'error_deleting_directory' => 'Error deleting the original directory :dir',
        'path' => 'Cesta'
    ],
    'component' => [
        'menu_label' => 'Components',
        'unnamed' => 'Unnamed',
        'no_description' => 'No description provided',
        'alias' => 'Alias',
        'alias_description' => 'A unique name given to this component when using it in the page or layout code.',
        'validation_message' => 'Component aliases are required and can contain only Latin symbols, digits, and underscores. The aliases should start with a Latin symbol.',
        'invalid_request' => 'The template cannot be saved because of invalid component data.',
        'no_records' => 'No components found',
        'not_found' => "The component ':name' is not found.",
        'method_not_found' => "The component ':name' does not contain a method ':method'."
    ],
    'template' => [
        'invalid_type' => 'Neznámý typ šablony.',
        'not_found' => 'Požadovaná šablona nebyla nalezena.',
        'saved'=> 'Šablona uložena.'
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Správa obsahu',
        'manage_assets' => 'Manage assets',
        'manage_pages' => 'Správa stránek',
        'manage_layouts' => 'Správa layoutů',
        'manage_partials' => 'Správa částí',
        'manage_themes' => 'Správa témat'
    ]
];
