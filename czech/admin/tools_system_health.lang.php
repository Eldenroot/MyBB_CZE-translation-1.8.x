<?php
/**
 * MyBB 1.8 Czech Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['system_health'] = "Stav fóra";
$l['system_health_desc'] = "Zde můžeš najít informace, které Ti mohou zlepšit zdraví fóru.";
$l['utf8_conversion'] = "UTF-8 konverze";
$l['utf8_conversion_desc'] = "Nyní převádíš databázi na formátu UTF-8. Tento proces může trvat až několik hodin, což záleží na velikosti tvého fóra a vybrané tabulky. Jakmile tento proces bude kompletní, tak budeš přesměrovaný na hlavní stránku UTF-8 konverze.";
$l['utf8_conversion_desc2'] = "Tento nástroj zkontroluje, jestli všechny databázové tabulky jsou ve formátu UTF-8 a pokud nejsou, tak ti pomůže je převést formát UTF-8.";

$l['convert_all'] = "Převést vše";
$l['converting_to_utf8'] = "MyBB převádí \"{1}\" tabulku na podporu UTF-8 z {2}.";
$l['convert_to_utf8'] = "Chystáš se převést tabulku \"{1}\" na kódování UTF-8 z {2} kódování.";
$l['convert_all_to_utf'] = "Chystáš se převést VŠECHNY tabulky z kódování UTF-8 na {1} kódování.";
$l['convert_all_to_utf8mb4'] = "Chystáš se převést VŠECHNY tabulky na 4-Byte UTF-8 kódování z {1} kódování.";
$l['converting_to_utf8mb4'] = "MyBB právě převádí tabulku \"{1}\"  na 4-Byte UTF-8 kódování z {2} kódování.";
$l['please_wait'] = "Prosím, počkej.";
$l['converting_table'] = "Převádí se tabulka::";
$l['convert_table'] = "Převést tabulku";
$l['convert_tables'] = "Převeést všechny tabulky";
$l['convert_database_table'] = "Převeést databázovou tabulku";
$l['convert_database_tables'] = "Převést všechny databázové tabulky";
$l['table'] = "Tabulka";
$l['status_utf8'] = "UTF-8 status";
$l['status_utf8mb4'] = "4-Byte UTF-8 podpora <br />(vyžaduje MySQL 5.5.3 a vyšší)";
$l['not_available'] = "Není dostupné";
$l['all_tables'] = "Všechny tabulky";
$l['convert_now'] = "Převést nyní";
$l['totals'] = "Celkové statistiky";
$l['attachments'] = "Přílohy";
$l['total_database_size'] = "Celková velikost databáze";
$l['attachment_space_used'] = "Celková velikost všech příloh";
$l['total_cache_size'] = "Celková velikost mezipaměti";
$l['estimated_attachment_bandwidth_usage'] = "Odhadované využití šířky pásma připojení ";
$l['max_upload_post_size'] = "Maximální velikost pro: nahrávání souborů / nahrání přílohy";
$l['average_attachment_size'] = "Průměrná velikost příloh";
$l['stats'] = "Statistiky";
$l['task'] = "Úloha";
$l['run_time'] = "Čas spuštění";
$l['next_3_tasks'] = "Následující 3 plánované úlohy";
$l['no_tasks'] = "Momentálně neběží žádné úlohy.";
$l['backup_time'] = "Datum a čas vytvoření zálohy";
$l['no_backups'] = "Bohužel, zatím si nevytvořil žádnou zálohu.";
$l['existing_db_backups'] = "Vytvořené zálohy databáze";
$l['writable'] = "Zapisovatelné";
$l['not_writable'] = "Není zapisovatelné";
$l['please_chmod_777'] = "Prosím, nastav oprávnění (CHMOD) na 777.";
$l['chmod_info'] = "Prosím, změň CHMOD nastavení na jedno z uvedených v tabulce níže. Další informace o CHMODingu najdeš v";
$l['file'] = "Soubor";
$l['location'] = "Umístění";
$l['settings_file'] = "Soubor nastavení";
$l['config_file'] = "Soubor konfigurace";
$l['file_upload_dir'] = "Složka pro upload souborů";
$l['avatar_upload_dir'] = "Složka pro upload avatarů";
$l['language_files'] = "Soubory jazyků";
$l['backup_dir'] = "Složka pro zálohy databáze";
$l['cache_dir'] = "Složka pro mezipaměť";
$l['themes_dir'] = "Složka pro vzhledy";
$l['chmod_files_and_dirs'] = "Oprávnění (CHMOD) souborů a složek";

$l['notice_process_long_time'] = "Tento proces může trvat několik hodin v závislosti na velikosti fóra a této tabulky. <strong>Důrazně doporučujeme vytvořit zálohu této databáze, protože tento proces je nevratný.</strong>";
$l['notice_mb4_warning'] = "4 bitová podpora UTF-8 vyžaduje MySQL 5.5.3 a vyšší. Nebudete moci importovat databázi MySQL na jiné verzi.";

$l['check_templates'] = "Zkontrolovat šablony";
$l['check_templates_desc'] = "Zkontroluje všechny nainstalované vzhledy pro znamé bezpečnostní problémy.";
$l['check_templates_title'] = "Kontrola bezpečnosti šablon";
$l['check_templates_info'] = "Tento proces zkontroluje všechny zablony proti bezpečnostním problémům, které by mohly ovlivnit Vaše fórum a také server na kterém fórum běží. Může to chvíli trvat, pokud máš nainstalovano mnoho vzhledů.
<br /><br />Pro zahájení kontroly stiskni tlačítko 'Pokračovat'.";
$l['check_templates_info_desc'] = "Níže uvedené šablony odpovídají známým bezpečnostním problémům. Prosím, zkontroluj je.";
$l['full_edit'] = "Full Edit";

$l['error_chmod'] = "Požadované soubory a adresáře namjí správné CHMOD nastavení.";
$l['error_invalid_table'] = "Zvolená tabulka neexistuje.";
$l['error_db_encoding_not_set'] = "Aktuální nastavení MyBB není uzpůsobené pro další využívání tohoto nástroje. Prosím navštiv <a href=\"https://docs.mybb.com/1.8/administration/utf-8-setup/\">MyBB Docs</a> a zjisti více informací pro správné nastavení.";
$l['error_not_supported'] = "Současná databáze nepodporuje nástroj na převod UTF-8.";
$l['error_invalid_input'] = "Při kontrole šablon došlo k potížím. Zkuste to prosím znovu nebo se obraťte na skupinu MyBB.";
$l['error_master_templates_altered'] = "Hlavní šablony byly změněny. V případě potíží se obraťte na skupinu MyBB.";
$l['error_utf8mb4_version'] = "Tvoje MySQL verze nepodporuje 4-Byte UTF-8 kódování.";


$l['warning_multiple_encodings'] = "Nedoporučuje se v databázi používat jiné kódování. Mohlo by způsobit neočekávané chování či chyby v MySQL.";
$l['warning_utf8mb4_config'] = "Pro plnou 4-Byte UTF-8 podporu je třeba změnit <i>\$config['database']['encoding'] = 'utf8';</i> to <i>\$config['database']['encoding'] = 'utf8mb4';</i> ve složce inc/config.php.";

$l['success_templates_checked'] = "Šablony byly úspěšně zkontrolovány - žádné bezpečnostní problémy nebyly nalezeny!";
$l['success_all_tables_already_converted'] = "Všechny tabulky již byly převedeny nebo jsou ve formátu UTF-8..";
$l['success_table_converted'] = "Zvolená tabulka \"{1}\" byla úspěšně převedena na formát UTF-8.";
$l['success_chmod'] = "Gratuluji! Pro všechny potřebné soubory a složky máš správné oprávnění (CHMOD)!";
