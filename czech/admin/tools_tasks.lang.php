<?php
/**
 * MyBB 1.8.x Official Czech Language Pack
 * Copyright © 2017-2019 MyBB Group
 * All Rights Reserved
 *
 * Issues and pull request belongs to the https://github.com/Eldenroot/MyBB_CZE-translation-1.8.x/
 */

$l['task_manager'] = "Naplánované úlohy";
$l['add_new_task'] = "Přidat novou úlohu";
$l['add_new_task_desc'] = "Zde můžete naplánovat úlohu, která se automaticky spustí ve Vašem fóru.";
$l['edit_task'] = "Upravit úlohu";
$l['edit_task_desc'] = "Níže můžete upravit různé nastavení pro tuhle naplánovanou úlohu. ";
$l['task_logs'] = "Záznamy úloh";
$l['view_task_logs'] = "Zobrazit záznamy úloh";
$l['view_task_logs_desc'] = "Pokud je úloha spuštěna, tak její protokol je zaznamenám a jakýkoliv výsledek či chyba bude níže vypsána. Záznamy starší než 30 dní jsou automaticky vymazány.";
$l['scheduled_tasks'] = "Naplánované úlohy";
$l['scheduled_tasks_desc'] = "Zde můžete spravovat úlohy, které se automaticky spustí ve zvolený čas. Chcete-li spustit úlohu, hned teď, je nutné kliknout na ikonku vpravo od úlohy.";

$l['title'] = "Název";
$l['short_description'] = "Krátký popis";
$l['task_file'] = "Soubor úlohy";
$l['task_file_desc'] = "Vyberte soubor ve kterém se má úloha spustit.";
$l['time_minutes'] = "Čas: Minuty";
$l['time_minutes_desc'] = "Zadejte minuty (0-59), které budou odděleny ',' (čárkou) a ve kterých minutách bude tato úloha spuštěna. Zadejte '*', pokud chcete, aby úloha běžela každou minutu.";
$l['time_hours'] = "Čas: Hodiny";
$l['time_hours_desc'] = "Zadejte hodiny (0-23), které budou odděleny ',' (čárkou) ve kterých bude tato úloha spuštěna. Zadejte '*', pokud chcete, aby úloha běžela každou hodinu.";
$l['time_days_of_month'] = "Čas: Dny v měsíci";
$l['time_days_of_month_desc'] = "Zadejte dny, které budou odděleny ',' (čárkou) ve kterých chcete provést tuto úlohu. Zadejte '*', pokud chcete, aby úloha běžela každý den nebo vyber z nabídky den, která se nachází níže.";
$l['every_weekday'] = "Každý všední den";
$l['sunday'] = "Neděle";
$l['monday'] = "Pondělí";
$l['tuesday'] = "Úterý";
$l['wednesday'] = "Středa";
$l['thursday'] = "Čtvrtek";
$l['friday'] = "Pátek";
$l['saturday'] = "Sobota";
$l['time_weekdays'] = "Čas: Všední dny";
$l['time_weekdays_desc'] = "Vyberte ve kterých všedních dnech chcete, aby tato úloha běžela. Podržením klávesy CTRL zvolíte více všedních dní. Vyberte 'Každý všední den' pokud chcete, aby úloha běžela každý všední den nebo jste nastavil přesný den výše.";
$l['every_month'] = "Každý měsíc";
$l['time_months'] = "Čas: Měsíce";
$l['time_months_desc'] = "Vyberte měsíce ve kterých chcete, aby se úloha spustila. Podržením klávesy CTRL zvolíte více měsíců. Vyber 'Každý měsíc' pokud chcete, aby úloha běžela každý měsíc.";
$l['enabled'] = "Povolit úlohu?";
$l['enable_logging'] = "Zapnout loggování?";
$l['save_task'] = "Uložit úlohu";
$l['task'] = "Úloha";
$l['date'] = "Datum a čas";
$l['data'] = "Data";
$l['no_task_logs'] = "Nejsou zde momentálně žádné záznamy z naplánovaných úloh.";
$l['next_run'] = "Další spuštění";
$l['run_task_now'] = "Spustit úlohu hned teď";
$l['disable_task'] = "Zákazat úlohu";
$l['run_task'] = "Spustit úlohu";
$l['enable_task'] = "Povolit úlohu";
$l['delete_task'] = "Smazat úlohu";

$l['error_invalid_task'] = "Zvolená úloha neexistuje.";
$l['error_missing_title'] = "Nezadal jste název pro naplánovanou úlohu.";
$l['error_missing_description'] = "Nezadal jste popis pro naplánovanou úlohu.";
$l['error_invalid_task_file'] = "Soubor úlohy, který jste vybral neexistuje.";
$l['error_invalid_minute'] = "Minuty, které jste zadal jsou ve špatném formátu.";
$l['error_invalid_hour'] = "Hodiny, které jste zadal jsou ve špatném formátu.";
$l['error_invalid_day'] = "Dny, které jste zadal jsou ve špatném formátu.";
$l['error_invalid_weekday'] = "Všechny dny, které jste vybral jsou neplatné.";
$l['error_invalid_month'] = "Měsíc, který jste vybral je neplatný.";

$l['success_task_created'] = "Úloha byla úspěšně vytvořena.";
$l['success_task_updated'] = "Vybraná úloha byla úspěšně aktualizována.";
$l['success_task_deleted'] = "Vybraná úloha byla úspěšně vymazána.";
$l['success_task_enabled'] = "Vybraná úloha byla úspěšně povolena.";
$l['success_task_disabled'] = "Vybraná úloha byla úspěšně zakázána.";
$l['success_task_run'] = "Vybraná úloha se úspěšně spustila.";

$l['confirm_task_deletion'] = "Jste si jistý, že opravdu chcete vymazat tuto naplánovanou úlohu?";
$l['confirm_task_enable'] = "<strong>Upozornění:</strong> Nyní se chystát spustit úlohu, která je určená primárně pro spuštění přes cron (Podívejte se, prosím, do <a href=\"https://docs.mybb.com/1.8/administration/task-manager\" target=\"_blank\">MyBB dokumentaci (v angličtině)</a> pro více informací. Pokračovat?";
$l['no_tasks'] = "V tuto chvíli zde nejsou žádné naplánované úlohy.";
