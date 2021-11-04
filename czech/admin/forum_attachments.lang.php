<?php
/**
 * MyBB 1.8.x Official Czech Language Pack
 * Copyright © 2017-2019 MyBB Group
 * All Rights Reserved
 *
 * Issues and pull request belongs to the https://github.com/Eldenroot/MyBB_CZE-translation-1.8.x/
 */

// Tabs
$l['attachments'] = "Přílohy";
$l['stats'] = "Statistiky";
$l['find_attachments'] = "Přílohy";
$l['find_attachments_desc'] = "Pomocí vyhledávacího systému příloh můžete vyhledávat konkrétní soubory, které uživatelé přidali na vaše fórum. Pro vyhledávání zadejte hledané výrazy níže. Všechna pole jsou volitelná a nebudou zahrnuta do kritérií, pokud neobsahují hodnotu.";
$l['find_orphans'] = "Najít nepřiřazené přílohy";
$l['find_orphans_desc'] = "Nepřiřazené přílohy jsou přílohy, které jsou z nějakého důvodu chybějící v databázi nebo v systému souborů. Tento nástroj Vám je pomůže najít a odstranit.";
$l['attachment_stats'] = "Statistiky příloh";
$l['attachment_stats_desc'] = "Níže jsou uvedeny některé obecné statistiky pro přílohy v současné době na vašem fóru.";

// Errors
$l['error_nothing_selected'] = "Prosím, vyberte jednu nebo více příloh pro smazání.";
$l['error_no_attachments'] = "Na Vašem fórum zatím nejsou žádné přílohy. Jakmile se příloha nahraje, budete mít k této sekci přístup.";
$l['error_not_all_removed'] = "Pouze některé nezařazené přílohy byly úspěšně odstraněny, ostatní nelze odebrat z adresáře odesílání.";
$l['error_count'] = 'Nešlo odebrat {1} příloh.';
$l['error_invalid_username'] = "Zadané uživatelské jméno je neplatné.";
$l['error_invalid_forums'] = "Jedno nebo více vybraných fór je neplatné.";
$l['error_no_results'] = "Nebyly nalezeny žádné přílohy se zadaným vyhledávacím kritériem.";
$l['error_not_found'] = "Soubor přílohy nebyl v adresáři odesílání nalezen.";
$l['error_not_attached'] = "Příloha byla nahrána před 24 hodinami, ale není připojena k příspěvku.";
$l['error_does_not_exist'] = "Téma nebo příspěvek pro tuto přílohu již neexistuje.";

// Success
$l['success_deleted'] = "Zvolené přílohy byly úspěšně vymazány.";
$l['success_orphan_deleted'] = "Vybrané nepřiřazené přílohy byly úspěšně odstraněny.";
$l['success_count'] = '{1} příloh bylo úspěšně odebráno.';
$l['success_no_orphans'] = "Na Vašem fóru nejsou žádné nepřiřazené přílohy.";

// Confirm
$l['confirm_delete'] = "Jsi si opravdu jistý, že chcete zvolené přílohy nenávratně vymazat?";

// == Pages
// = Stats
$l['general_stats'] = "Základní statistiky";
$l['stats_attachment_stats'] = "Přílohy - statistiky příloh";
$l['num_uploaded'] = "<strong>Počet nahraných příloh</strong>";
$l['space_used'] = "<strong>Velikost všech příloh</strong>";
$l['bandwidth_used'] = "<strong>Odhadované využití</strong>";
$l['average_size'] = "<strong>Průměrná velikost příloh</strong>";
$l['size'] = "Velikost";
$l['posted_by'] = "Přiloženo uživatelem";
$l['thread'] = "Vlákno";
$l['downloads'] = "Stažené";
$l['date_uploaded'] = "Datum nahrání";
$l['popular_attachments'] = "Top 5 nejpopulárnějších příloh";
$l['largest_attachments'] = "Top 5 největších příloh";
$l['users_diskspace'] = "Top 5 uživatelů využívajících nejvíce místa na disku";
$l['username'] = "Uživatelské jméno";
$l['total_size'] = "Celková velikost souboru";

// = Orphans
$l['orphan_results'] = "Výsledky vyhledávání nepřiřazených příloh";
$l['orphan_attachments_search'] = "Vyhledávání nepřiřazených příloh";
$l['reason_orphaned'] = "Důvod nepřiřazení";
$l['reason_not_in_table'] = "Není v tabulce příloh";
$l['reason_file_missing'] = "Chybí přiložený soubor";
$l['reason_thread_deleted'] = "Téma bylo vymazáno";
$l['reason_post_never_made'] = "Příspěvek nebyl nikdy vytvořený";
$l['unknown'] = "Neznámé";
$l['results'] = "Výsledky";
$l['step1'] = "Krok 1";
$l['step2'] = "Krok 2";
$l['step1of2'] = "Krok 1 of 2 - Skenování file systému";
$l['step2of2'] = "Krok 2 of 2 - Skenování databáze";
$l['step1of2_line1'] = "Počkejte, prosím, systém souborů se právě prohledává nepřiřazené soubory.";
$l['step2of2_line1'] = "Počkejte, prosím, databáze právě prohledává nepřiřazené soubory";
$l['step_line2'] = "Budete automaticky přesměrováni na další krok, jakmile bude tento proces hotový.";
$l['scanning'] = 'Skenování…';

// = Attachments / Index
$l['index_find_attachments'] = "Najít přílohy";
$l['find_where'] = "Najít přílohu";
$l['name_contains'] = "Jméno přílohy obsahuje";
$l['name_contains_desc'] = "Pro hledání zadejte *.[přípona]. Například: *.zip.";
$l['type_contains'] = "Typ přílohy obsahuje";
$l['forum_is'] = "Forum je";
$l['username_is'] = "Uživatelské jméno uživatele, který přílohu nahrál je";
$l['poster_is'] = "Odesílatem je";
$l['poster_is_either'] = "Uživatel nebo návštěvník";
$l['poster_is_user'] = "Zaregistrovaný uživatel";
$l['poster_is_guest'] = "Návštěvník";
$l['more_than'] = "Více než";
$l['greater_than'] = "Větší než";
$l['is_exactly'] = "Přesně";
$l['less_than'] = "Méně než ";
$l['date_posted_is'] = "Bylo odesláno";
$l['days_ago'] = "před dny";
$l['file_size_is'] = "Velikost souboru je";
$l['kb'] = "KB";
$l['download_count_is'] = "Počet stažení";
$l['display_options'] = "Volba zobrazení";
$l['filename'] = "Název souboru";
$l['filesize'] = "Velikost souboru";
$l['download_count'] = "Počet stažení";
$l['post_username'] = "Příspěvek od uživatele";
$l['asc'] = "Vzestupně";
$l['desc'] = "Sestupně";
$l['sort_results_by'] = "Seřadit podle";
$l['results_per_page'] = "Výsledků na stránku";
$l['in'] = "in";

// Buttons
$l['button_delete_orphans'] = "Vymazat nepřiřazené";
$l['button_delete_attachments'] = "Vymazat zvolené přílohy";
$l['button_find_attachments'] = "Najít přílohy";
