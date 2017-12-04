<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 enfant |{1,1} 1 enfant|{2,*} :count enfants',
    'people_list_last_updated' => 'Last consulted:',
    'people_list_number_reminders' => '{0} 0 rappel |{1,1} 1 rappel |{2,*} :count rappels',
    'people_list_blank_title' => 'Vous n\'avez encore ajouté aucun contact.',
    'people_list_blank_cta' => 'Ajouter quelqu\'un',
    'people_list_stats' => ':count contacts',
    'people_list_sort' => 'Tri',
    'people_list_firstnameAZ' => 'Tri par prénom A → Z',
    'people_list_firstnameZA' => 'Tri par prénom Z → A',
    'people_list_lastnameAZ' => 'Tri par nom de famille A → Z',
    'people_list_lastnameZA' => 'Tri par nom de famille Z → A',
    'people_list_filter_tag' => 'Affichge des contacts avec le tag <span class="pretty-tag">:name</span>',
    'people_list_clear_filter' => 'Enlever le filtre',
    'people_list_contacts_per_tags' => '{0} 0 contact|{1,1} 1 contact|{2,*} :count contacts',
    'people_search' => 'Recherchez dans vos contacts...',
    'people_search_no_results' => 'Aucun contact ne correspond à ce critère',
    'people_list_account_usage' => 'Votre utilisation de compte : :current/:limit contacts',
    'people_list_account_upgrade_title' => 'Passez au plan supérieur pour débloquer votre compte et l\'amener à son plein potentiel.',
    'people_list_account_upgrade_cta' => 'Passez au plan supérieur',

    // people add
    'people_add_title' => 'Ajouter une nouvelle personne',
    'people_add_firstname' => 'Prénom',
    'people_add_middlename' => 'Surnom (optionnel)',
    'people_add_lastname' => 'Nom de famille (optionnel)',
    'people_add_cta' => 'Ajouter',
    'people_save_and_add_another_cta' => 'Submit and add someone else',
    'people_add_success' => ':name has been successfully created',
    'people_add_gender' => 'Sexe',
    'people_delete_success' => 'Le contact a été supprimé',
    'people_delete_message' => 'Si vous devez supprimer ce contact,',
    'people_delete_click_here' => 'cliquez ici',
    'people_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer ce contact ? La suppression est permanente.',
    'people_add_birthday_reminder' => 'Souhaiter un bon anniversaire à :name',
    'people_add_import' => 'Souhaitez-vous <a href="/settings/import">importer vos contacts</a>?',

    // show
    'section_contact_information' => 'Information de contact',
    'section_personal_activities' => 'Activités',
    'section_personal_reminders' => 'Rappels',
    'section_personal_tasks' => 'Tâches',
    'section_personal_gifts' => 'Cadeaux',

    //
    'link_to_list' => 'Retour à la liste',

    // Header
    'edit_contact_information' => 'Mettre à jour les informations',
    'call_button' => 'Enregistrer un appel téléphonique',

    // Calls
    'modal_call_title' => 'Enregistrer un appel téléphonique',
    'modal_call_comment' => 'De quoi avez-vous parler ? (optionnel)',
    'modal_call_date' => 'Cet appel téléphonique s\'est passé plus tôt dans la journée.',
    'modal_call_change' => 'Changer',
    'modal_call_exact_date' => 'L\'appel s\'est passé le',
    'calls_add_success' => 'L\'appel téléphonique a été enregistré.',
    'call_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer cet appel ?',
    'call_delete_success' => 'L\'appel a été supprimé avec succès.',
    'call_title' => 'Appels téléphoniques',
    'call_empty_comment' => 'Aucun details',
    'call_blank_title' => 'Gardez la trace des appels téléphoniques que vous faites avec :name',
    'call_blank_desc' => 'Vous avez appelé :name',

    // age - birthday
    'birthdate_not_set' => 'Non indiqué.',
    'age_approximate_in_years' => 'env. :age ans',
    'age_exact_in_years' => ':age ans',
    'age_exact_birthdate' => 'né le :date',

    // Last called
    'last_called' => 'Dernier appel : :date',
    'last_called_empty' => 'Dernier appel : inconnu',
    'last_activity_date' => 'Dernière activité ensemble : :date',
    'last_activity_date_empty' => 'Dernière activité ensemble : inconnu',

    // additional information
    'information_edit_success' => 'Le profil a été mis à jour avec succès',
    'information_edit_title' => 'Mettre à jour les informations personnelles de :name',
    'information_edit_avatar' => 'Photo/avatar of the contact',
    'information_edit_max_size' => 'Max :size Mb.',
    'information_edit_firstname' => 'Prénom',
    'information_edit_lastname' => 'Nom de famille (optionnel)',
    'information_edit_linkedin' => 'Profil LinkedIn (optionnel)',
    'information_edit_probably' => 'Cette personne a probablement',
    'information_edit_probably_yo' => 'ans',
    'information_edit_exact' => 'Je connais la date de naissance précise, qui est',
    'information_edit_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'information_no_address_defined' => 'Aucune adresse définie',
    'information_no_email_defined' => 'Aucun courriel défini',
    'information_no_phone_defined' => 'Aucun numéro de téléphone défini',
    'information_no_facebook_defined' => 'Aucun Facebook défini',
    'information_no_twitter_defined' => 'Aucun Twitter défini',
    'information_no_linkedin_defined' => 'Aucun LinkedIn défini',
    'information_no_work_defined' => 'Aucune information professionnelle définie',
    'information_work_at' => 'chez :company',
    'work_add_cta' => 'Mettre à jour les informations professionnelles',
    'work_edit_success' => 'Les informations professionnelles ont été mises à jour avec succès',
    'work_edit_title' => 'Mettre à jour les informations professionnelles de :name',
    'work_edit_job' => 'Poste (optionnel)',
    'work_edit_company' => 'Entreprise (optionnel)',

    // food preferencies
    'food_preferencies_add_success' => 'Les préférences alimentaires ont été mises à jour.',
    'food_preferencies_edit_description' => 'Peut-être que :firstname ou quelqu\'un dans la famille :family a une allergie. Ou peut-être qu\'il n\'aime pas un vin spécifique. Indiquez ici ses préférences alimentaires afin que vous vous en rappeliez la prochaine fois que vous l\'inviterez à dîner.',
    'food_preferencies_edit_description_no_last_name' => 'Peut-être que :firstname a une allergie. Ou peut-être qu\'il n\'aime pas un vin spécifique. Indiquez ici ses préférences alimentaires afin que vous vous en rappeliez la prochaine fois que vous l\'inviterez à dîner.',
    'food_preferencies_edit_title' => 'Modification des préférences alimentaires',
    'food_preferencies_edit_cta' => 'Enregistrer les préférences alimentaires',
    'food_preferencies_title' => 'Préférences alimentaires',
    'food_preferencies_cta' => 'Ajouter',

    // reminders
    'reminders_blank_title' => 'De quoi souhaitez-vous être rappelé à propos de :name ?',
    'reminders_blank_add_activity' => 'Ajouter un rappel',
    'reminders_add_title' => 'De quoi souhaitez-vous être rappelé à propos de :name ?',
    'reminders_add_description' => 'Merci de me tenir informer de...',
    'reminders_add_next_time' => 'Prochaine date de ce rappel',
    'reminders_add_once' => 'Rappelez-moi juste une fois',
    'reminders_add_recurrent' => 'Rappelez-moi tous les',
    'reminders_add_starting_from' => 'à compter de la date définie ci-après',
    'reminders_add_cta' => 'Ajouter le rappel',
    'reminders_add_error_custom_text' => 'Vous devez indiquer un texte pour ce rappel.',
    'reminders_create_success' => 'Le rappel a été ajouté avec succès.',
    'reminders_delete_success' => 'Le rappel a été supprimé avec succès.',
    'reminders_type_week' => 'semaine',
    'reminders_type_month' => 'mois',
    'reminders_type_year' => 'année',

    'reminder_frequency_week' => 'chaque semaine|chaque :number semaines',
    'reminder_frequency_month' => 'chaque mois|chaque :number mois',
    'reminder_frequency_year' => 'chaque année|chaque :number années',
    'reminder_frequency_one_time' => 'le :date',
    'reminders_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer ce rappel ?',
    'reminders_delete_cta' => 'Supprimer',
    'reminders_next_expected_date' => 'le',
    'reminders_cta' => 'Ajouter un rappel',
    'reminders_description' => 'Nous vous enverrons un courriel pour chacun des rappels ci-dessous. Les rappels sont envoyés le matin du jour où l\'évènement se passe.',
    'reminders_one_time' => 'Unique',
    'reminders_birthday' => 'Anniversaire de :name',
    'reminders_free_plan_warning' => 'Vous êtes sur le plan gratuit. Aucun courriel ne sera envoyé avec ce plan. Pour recevoir vos rappels par courriel, passez au plan supérieur.',

    // significant other
    'significant_other_sidebar_title' => 'Conjoint',
    'significant_other_cta' => 'Ajouter un conjoint',
    'significant_other_add_title' => 'Quel est le nom du conjoint de :name ?',
    'significant_other_add_firstname' => 'Prénom',
    'significant_other_add_unknown' => 'Je ne connais pas son âge.',
    'significant_other_add_probably' => 'Cette personne a probablement',
    'significant_other_add_probably_yo' => 'ans',
    'significant_other_add_exact' => 'Je connais la date exacte de naissance de cette personne, qui est',
    'significant_other_add_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'significant_other_add_cta' => 'Ajouter le conjoint',
    'significant_other_edit_cta' => 'Mettre à jour le conjoint',
    'significant_other_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer le conjoint ?',
    'significant_other_unlink_confirmation' => 'Are you sure you want to delete this relationship? This significant other will not be deleted - only the relationship between the two.',
    'significant_other_add_success' => 'Le conjoint a été ajouté avec succès.',
    'significant_other_edit_success' => 'Le conjoint a été mis à jour avec succès.',
    'significant_other_delete_success' => 'Le conjoint a été supprimé avec succès.',
    'significant_other_add_birthday_reminder' => 'Souhaiter bon anniversaire à :name, conjoint de :contact_firstname.',
    'significant_other_add_person' => 'Ajouter une nouvelle personne',
    'significant_other_link_existing_contact' => 'Lier un contact existant',
    'significant_other_add_no_existing_contact' => 'Vous n\'avez aucun contact qui puisse être associé comme partenaire de :name pour le moment.',
    'significant_other_add_existing_contact' => 'Choisissez un contact existant pour le designer comme partenaire de :name',
    'contact_add_also_create_contact' => 'Créer une fiche contact pour cette personne.',
    'contact_add_add_description' => 'Ceci vous permettra de traiter ce partenaire comme tous les autres contacts de votre compte.',

    // kids
    'kids_sidebar_title' => 'Enfants',
    'kids_sidebar_cta' => 'Ajouter un autre enfant',
    'kids_blank_cta' => 'Ajouter un enfant',
    'kids_add_title' => 'Ajouter un enfant',
    'kids_add_boy' => 'Garçon',
    'kids_add_girl' => 'Fille',
    'kids_add_gender' => 'Sexe',
    'kids_add_firstname' => 'Prénom',
    'kids_add_lastname' => 'Nom de famille (optionnel)',
    'kids_add_also_create' => 'Also create a Contact entry for this person.',
    'kids_add_also_desc' => 'This will let you treat this kid like any other contact.',
    'kids_add_no_existing_contact' => 'You don\'t have any contacts who can be :name\'s kid at the moment.',
    'kids_add_existing_contact' => 'Select an existing contact as the kid for :name',
    'kids_add_firstname_help' => 'Nous supposons que le nom de famille est :name',
    'kids_add_probably' => 'Cet enfant a probablement',
    'kids_add_probably_yo' => 'ans',
    'kids_add_exact' => 'Je connais la date de naissance précise de cet enfant, qui est',
    'kids_add_help' => 'Si vous indiquez la date de naissance exacte de cette personne, nous allons créer un rappel pour vous - ainsi vous serez informé chaque année que c\'est le moment de célébrer son anniversaire.',
    'kids_add_cta' => 'Ajouter l\'enfant',
    'kids_edit_title' => 'Mettre à jour les informations de :name',
    'kids_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cet enfant ?',
    'kids_add_success' => 'L\'enfant a été ajouté avec succès.',
    'kids_update_success' => 'L\'enfant a été mis à jour avec succès.',
    'kids_delete_success' => 'L\'enfant a été supprimé avec succès.',
    'kids_add_birthday_reminder' => 'Souhaiter bon anniversaire à :name, enfant de :contact_firstname.',
    'kids_unlink_confirmation' => 'Etes-vous sûr de vouloir supprimer cette relation? L\'enfant ne sera pas supprimé - seulement la relation entre les deux.',

    // tasks
    'tasks_blank_title' => 'Vous n\'avez aucune tâche pour le moment.',
    'tasks_form_title' => 'Titre',
    'tasks_form_description' => 'Description (optionnel)',
    'tasks_add_task' => 'Ajouter la tâche',
    'tasks_delete_success' => 'La tâche a été supprimée avec succès.',
    'tasks_complete_success' => 'La tâche a été mise à jour avec succès.',

    // activities
    'activity_title' => 'Activités',
    'activity_type_group_simple_activities' => 'Activités simples',
    'activity_type_group_sport' => 'Sport',
    'activity_type_group_food' => 'Nourriture',
    'activity_type_group_cultural_activities' => 'Activités culturelles',
    'activity_type_just_hung_out' => 'traîner ensemble',
    'activity_type_watched_movie_at_home' => 'regarder un film à la maison ensemble',
    'activity_type_talked_at_home' => 'parler ensemble à la maison',
    'activity_type_did_sport_activities_together' => 'fait du sport ensemble',
    'activity_type_ate_at_his_place' => 'manger chez lui',
    'activity_type_ate_at_her_place' => 'manger chez elle',
    'activity_type_went_bar' => 'aller dans un bar',
    'activity_type_ate_at_home' => 'manger à la maison',
    'activity_type_picknicked' => 'pique-niquer ensemble',
    'activity_type_went_theater' => 'aller au cinéma',
    'activity_type_went_concert' => 'aller à un concert',
    'activity_type_went_play' => 'aller au théâtre',
    'activity_type_went_museum' => 'aller au musée',
    'activity_type_ate_restaurant' => 'aller au restaurant',
    'activities_add_activity' => 'Ajouter activité',
    'activities_more_details' => 'Voir détails',
    'activities_hide_details' => 'Cacher les détails',
    'activities_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer l\'activité ?',
    'activities_item_information' => ':Activity. S\'est passée le :date.',
    'activities_add_title' => 'Qu\'avez-vous fait avec :name?',
    'activities_summary' => 'Décrivez ce que vous avez fait',
    'activities_add_pick_activity' => '(optionnel) Souhaitez-vous catégoriser cette activitié ? Vous n\'avez pas à le faire, mais cela nous permettra de faire des statistiques plus tard.',
    'activities_add_date_occured' => 'Date où l\'activité s\'est passée',
    'activities_add_optional_comment' => 'Commentaire (optionnel)',
    'activities_add_cta' => 'Enregistrer l\'activité',
    'activities_blank_title' => 'Gardez une trace de ce que vous avez fait avec :name par le passé.',
    'activities_blank_add_activity' => 'Ajouter une activité',
    'activities_add_success' => ':L\'activité a été ajoutée avec succès.',
    'activities_update_success' => 'L\'activité a été mise à jour avec succès.',
    'activities_delete_success' => 'L\'activité a été supprimée avec succès.',
    'activities_who_was_involved' => 'Qui était impliqué?',

    // notes
    'notes_create_success' => 'La note a été ajoutée avec succès.',
    'notes_update_success' => 'La note a été modifiée avec succès.',
    'notes_delete_success' => 'La note a été supprimée avec succès.',
    'notes_add_cta' => 'Ajouter la note',
    'notes_favorite' => 'Ajouter/retirer des favoris',
    'notes_delete_title' => 'Supprimer une note',
    'notes_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer cette note ?',

    // gifts
    'gifts_blank_title' => 'Gérez vos idées de cadeaux ou les cadeaux que vous avez offert à :name.',
    'gifts_blank_add_gift' => 'Ajouter un cadeau',
    'gifts_add_success' => 'Le cadeau a été ajouté avec succès.',
    'gifts_delete_success' => 'Le cadeau a été supprimé.',
    'gifts_delete_confirmation' => 'Etes-vous sûr de vouloir supprimer ce cadeau ?',
    'gifts_add_gift' => 'Ajouter un cadeau',
    'gifts_link' => 'Lien',
    'gifts_added_on' => 'Ajouté le :date',
    'gifts_delete_cta' => 'Supprimer',
    'gifts_offered' => 'offert',
    'gifts_add_title' => 'Gestion des cadeaux pour :name',
    'gifts_add_gift_idea' => 'Idée de cadeau',
    'gifts_add_gift_already_offered' => 'Cadeau déjà offert',
    'gifts_add_gift_title' => 'Quel est ce cadeau?',
    'gifts_add_link' => 'Lien de la page web (optionnel)',
    'gifts_add_value' => 'Valeur (optionnel)',
    'gifts_add_comment' => 'Commentaire (optionnel)',
    'gifts_add_someone' => 'Ce cadeau est destiné à quelqu\'un de la famille :name en particulier',
    'gifts_add_cta' => 'Ajouter',
    'gifts_gift_idea' => 'Idée de cadeau',
    'gifts_gift_already_offered' => 'Cadeaux déjà offerts',
    'gifts_table_date_added' => 'Date ajoutée',
    'gifts_table_description' => 'Description',
    'gifts_table_actions' => 'Actions',

    // debts
    'debt_delete_confirmation' => 'Etes-vous sûr de vouloir effacer cette dette ?',
    'debt_delete_success' => 'La dette a été effacée avec succès.',
    'debt_add_success' => 'La dette a été ajoutée avec succès',
    'debt_title' => 'Dettes',
    'debt_add_cta' => 'Ajouter une dette',
    'debt_you_owe' => 'Vous devez :amount',
    'debt_they_owe' => ':name vous doit :amount',
    'debt_add_title' => 'Gestion des dettes',
    'debt_add_you_owe' => 'Vous devez :name',
    'debt_add_they_owe' => ':name vous doit',
    'debt_add_amount' => 'la somme de',
    'debt_add_reason' => 'pour la raison suivante (optionnelle)',
    'debt_add_add_cta' => 'Ajouter la dette',
    'debt_edit_update_cta' => 'Mettre à jour la dette',
    'debt_edit_success' => 'La dette a été modifiée avec succès',
    'debts_blank_title' => 'Gérez les dettes que vous devez à :name ou que :name vous doit',

    // tags
    'tag_edit' => 'Edit tag',

    // Introductions
    'introductions_sidebar_title' => 'Comment vous vous êtes rencontré',
    'introductions_blank_cta' => 'Indiquez comment vous avez rencontré :name',
    'introductions_title_edit' => 'Comment avez-vous rencontré :name ?',
    'introductions_additional_info' => 'Expliquez quand et comment vous vous êtes rencontrés',
    'introductions_edit_met_through' => 'Est-ce que quelqu\'un vous a introduit à cette personne ?',
    'introductions_no_met_through' => 'Personne',
    'introductions_first_met_date' => 'Date de la rencontre',
    'introductions_no_first_met_date' => 'Je ne connais pas la date de cette rencontre',
    'introductions_first_met_date_known' => 'Voici la date de notre rencontre',
    'introductions_add_reminder' => 'Ajouter un rappel pour célébrer la rencontre à la date d\'anniversaire, rappelant chaque année quand cet évènement s\'est passé.',
    'introductions_update_success' => 'Vous avez mis à jour avec succès vos informations de rencontre.',
    'introductions_met_through' => 'Rencontré par <a href="/people/:id">:name</a>',
    'introductions_met_date' => 'Rencontré le :date',
    'introductions_reminder_title' => 'Anniversaire de la date de la première rencontre',

    // Deceased
    'deceased_reminder_title' => 'Anniversaire de la mort de :name',
    'deceased_mark_person_deceased' => 'Indiquez cette personne comme décédée',
    'deceased_know_date' => 'Je connais la date de décès de cette personne',
    'deceased_add_reminder' => 'Ajouter un rappel pour cette date',
    'deceased_label' => 'Décédé',
    'deceased_label_with_date' => 'Décédé le :date',

    // Contact information
    'contact_info_title' => 'Information sur le contact',
    'contact_info_form_content' => 'Contenu',
    'contact_info_form_contact_type' => 'Type de contact',
    'contact_info_form_personalize' => 'Personaliser',
    'contact_info_address' => 'Habite à',

    // Addresses
    'contact_address_title' => 'Adresses',
    'contact_address_form_name' => 'Nom (optionnel)',
    'contact_address_form_street' => 'Rue et numéro (optionnel)',
    'contact_address_form_city' => 'Ville (optionnel)',
    'contact_address_form_province' => 'Province (optionnel)',
    'contact_address_form_postal_code' => 'Code postal (optionnel)',
    'contact_address_form_country' => 'Pays (optionnel)',
];
