<?php
/**
 * MyBB 1.8.x Czech Language Pack
 * Copyright 2017 MyBB Group & Czech translators (See: https://github.com/Cu8eeeR/MyBB_CZE-translation-1.8.x); All Rights Reserved (Všechna práva vyhrazena)
 *
 */

$l['task_manager'] = "Správce úloh";
$l['add_new_task'] = "Přidat novou úlohu";
$l['add_new_task_desc'] = "Zde můžeš naplánovat úlohu, která se automaticky spustí ve tvém fóru.";
$l['edit_task'] = "Upravit úlohu";
$l['edit_task_desc'] = "Níže můžeš upravit různé nastavení pro tuhle naplánovanou úlohu. ";
$l['task_logs'] = "Záznamy úloh";
$l['view_task_logs'] = "Ukázat záznamy úloh.";
$l['view_task_logs_desc'] = "Pokud je úloha spuštěna, tak její protokol je zaznamenám a jakýkoliv výsledek či chyba bude níže vypsána. Záznamy starší než 30 dní jsou automaticky vymazány.";
$l['scheduled_tasks'] = "Naplánované úlohy";
$l['scheduled_tasks_desc'] = "Zde můžeš spravovat úlohy, které se automaticky spustí ve zvolený čas ve tvém fóru. Pokud chceš spustit úlohu, hned teď, tak klikni na ikonku vpravo od úlohy.";

$l['title'] = "Název";
$l['short_description'] = "Krátký popis";
$l['task_file'] = "Soubor úlohy";
$l['task_file_desc'] = "Select the task file you wish this task to run.";
$l['time_minutes'] = "Čas: Minuty";
$l['time_minutes_desc'] = "Enter a comma separated list of minutes (0-59) for which this task should run on. Enter '*' if this task should run on every minute.";
$l['time_hours'] = "Čas: Hodiny";
$l['time_hours_desc'] = "Enter a comma separated list of hours (0-23) for which this task should run on. Enter '*' if this task should run on every hour.";
$l['time_days_of_month'] = "Čas: Dny v měsíci";
$l['time_days_of_month_desc'] = "Enter a comma separated list of days (1-31) for which this task should run on. Enter '*' if this task should run on every day or you wish to specify a weekday below.";
$l['every_weekday'] = "Každý všední den";
$l['sunday'] = "Neděle";
$l['monday'] = "Pondělí";
$l['tuesday'] = "Úterý";
$l['wednesday'] = "Středa";
$l['thursday'] = "Čtvrtek";
$l['friday'] = "Pátek";
$l['saturday'] = "Sobota";
$l['time_weekdays'] = "Time: Weekdays";
$l['time_weekdays_desc'] = "Select which weekdays this task should run on. Holding down CTRL selects multiple weekdays. Select 'Every weekday' if you want this task to run each weekday or you have entered a predefined day above.";
$l['every_month'] = "Every Month";
$l['time_months'] = "Time: Months";
$l['time_months_desc'] = "Select which months this task should run on. Holding down CTRL selects multiple months. Select 'Every month' if you want this task to run each month.";
$l['enabled'] = "Task enabled?";
$l['enable_logging'] = "Enable Logging?";
$l['save_task'] = "Save Task";
$l['task'] = "Task";
$l['date'] = "Date";
$l['data'] = "Data";
$l['no_task_logs'] = "There are currently no log entries for any of the scheduled tasks.";
$l['next_run'] = "Next Run";
$l['run_task_now'] = "Run this task now";
$l['disable_task'] = "Disable Task";
$l['run_task'] = "Run Task";
$l['enable_task'] = "Enable Task";
$l['delete_task'] = "Delete Task";

$l['error_invalid_task'] = "The specified task does not exist.";
$l['error_missing_title'] = "You did not enter a title for this scheduled task";
$l['error_missing_description'] = "You did not enter a description for this scheduled task";
$l['error_invalid_task_file'] = "The task file you selected does not exist.";
$l['error_invalid_minute'] = "The minute you've entered is invalid.";
$l['error_invalid_hour'] = "The hour you've entered is invalid.";
$l['error_invalid_day'] = "The day you've entered is invalid.";
$l['error_invalid_weekday'] = "The weekday you've selected is invalid.";
$l['error_invalid_month'] = "The month you've selected is invalid.";

$l['success_task_created'] = "The task has been created successfully.";
$l['success_task_updated'] = "The selected task has been updated successfully.";
$l['success_task_deleted'] = "The selected task has been deleted successfully.";
$l['success_task_enabled'] = "The selected task has been enabled successfully.";
$l['success_task_disabled'] = "The selected task has been disabled successfully.";
$l['success_task_run'] = "The selected task has been run successfully.";

$l['confirm_task_deletion'] = "Are you sure you wish to delete this scheduled task?";
$l['confirm_task_enable'] = "<strong>WARNING:</strong> You are about to enable a task that is only meant to be run via cron (Please see the <a href=\"https://docs.mybb.com/1.8/administration/task-manager\" target=\"_blank\">MyBB Docs</a> for more information). Continue?";
$l['no_tasks'] = "There are no tasks on your forum at this time.";

