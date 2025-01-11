<?php

//Bulgarian

$language = new language;

$language->name = "Bulgarian";
$language->author = "Peio Popov";
$language->author_email = "peio@peio.org";
$language->author_web = "http://blog.peio.org/";

$language->charset = "windows-1251";

// uncomment this if you need to increase the font size from 10px
$language->font_size = "12px;"; 

$language->about = array("tagline" => "бъди организиран и върши работа."
                        ,"documentation" => "Документация"
                        ,"read_me" => "Прочети Ме"
                        ,"license" => "Лицензно споразумение"
                        ,"download" => "сваляне"
                        ,"this_version" => "Използвана версия: __0" // number
                        ,"latest_version" => "Последна стабилна версия: __0" // number
                        ,"beta_version" => "Последна тестова версия: __0" // number
                        ,"using_latest" => "Вие използвате последната стабилна версия."
                        ,"using_beta" => "Вие използвате последната тестова версия."
                        ,"feedback" => "Коментари и предложения:"
                        ,"web" => "Сайт:"
                        ,"credits" => "Заслуги"
                        ,"main_credit" => "Tasks Jr. е идея и продукт на <nobr>Alex King</nobr>. Локализирана е на следните езици от:"
                        ,"web_site" => "уебсайт"
                        ,"email" => "ел. поща"
                        );

$language->accesskey = array("calendar" => "c"
                            ,"history" => "y"
                            ,"home" => "h"
                            ,"new_task" => "t"
                            ,"save" => "s"
                            ,"search" => "a"
                            ,"sortable" => "b"
                            ,"title" => "e"
                            ,"upcoming" => "u"
                            );

$language->breadcrumbs = array("history" => "Предишни"
                              ,"home" => "Начало"
                              ,"new_task" => "Нова задача"
                              ,"search" => "Търсене"
                              ,"search_results" => "Резултати от търсенето"
                              ,"sortable" => "Сортиран списък"
                              ,"upcoming" => "Предстоящи задачи"
                              );

$language->confirm = array("complete_instructions" => "Задачата, която маркирате като приключена, има __0 подзадачи. Моля, решете:" // number
                          ,"complete_orphan" => "Приключване на задачата и оставяне на подзадачите като самостоятелни."
                          ,"complete_notes" => "Бележки за приключване:"
                          ,"complete_recursive" => "Приключване на задачата и нейните подзадачи."
                          ,"complete_remove" => "Приключване на задачате и преместване на подзадачите към горния клон задачи."
                          ,"complete_title" => "Изберете"
                          ,"delete_confirm" => "Сигурен ли сте, че искате да изтриете тази задача?"
                          ,"delete_instructions" => "Задачата, която ще изтриете, има  __0 подзадачи. Моля, решете:" // number
                          ,"delete_orphan" => "Изтриване на задачата и оставяне на подзадачите като самостоятелни."
                          ,"delete_recursive" => "Изтриване на задачата и нейните подзадачи."
                          ,"delete_remove" => "Изтриване на задачата и преместване на подзадачите към горния клон задачи."
                          ,"delete_title" => "Изберете"
                          ,"delete_title_m" => "Изтриване"
                          );

$language->data = array("no" => "Не"
                       ,"priority_1" => "Най-нисък"
                       ,"priority_2" => "Нисък"
                       ,"priority_3" => "Нормален"
                       ,"priority_4" => "Висок"
                       ,"priority_5" => "Най-висок"
                       ,"rel_date" => "__0" // date
                       ,"rel_date_days" => "__0 дена" // number
                       ,"rel_date_days_ago" => "преди __0 дена" // number
                       ,"rel_date_today" => "Днес"
                       ,"rel_date_tomorrow" => "Утре"
                       ,"rel_date_week" => "1 седмица"
                       ,"rel_date_week_ago" => "Преди 1 седмица"
                       ,"rel_date_yesterday" => "Вчера"
                       ,"yes" => "Да"
                       );

$language->email_reminders = array("overdue" => "Просрочен"
                                  ,"due" => "За"
                                  ,"upcoming" => "Предстоящи"
                                  ,"high_priority" => "Висок приоритет"
                                  ,"status" => "Състояние"
                                  ,"complete" => "% завършена"
                                  ,"priority" => "Приоритет"
                                  ,"none" => "(без)"
                                  ,"subject" => "подсказка за задачи"
                                  );

$language->form = array("1_week" => "1 седмица"
                       ,"1_year" => "1 година"
                       ,"30_days" => "30 дена"
                       ,"90_days" => "90 дена"
                       ,"after_save" => "След запазването:"
                       ,"choose_date" => "Изберете дата"
                       ,"clear_date" => "Изчистване"
                       ,"date_due" => "За:"
                       ,"date_entered" => "Въведена на:"
                       ,"date_modified" => "Последно променяна:"
                       ,"form_title_edit" => "Редакция"
                       ,"form_title_new" => "Нова задача"
                       ,"id" => "ID:"
                       ,"new_task" => "Нова задача"
                       ,"notes" => "Бележки:"
                       ,"parent" => "Част от:"
                       ,"priority" => "Приоритет:"
                       ,"return_home" => "Към началото"
                       ,"status" => "Завършена на %:"
                       ,"status_label" => "% завършена"
                       ,"stay_here" => "Тук"
                       ,"sticky" => "Важна задача"
                       ,"sticky_label" => "Важна задача:"
                       ,"title" => "Заглави<u>е</u>:"
                       ,"today" => "Днес"
                       ,"tomorrow" => "Утре"
                       ,"url" => "URL:"
                       ,"urls" => "URLs:"
                       ,"url_1" => "URL 1:"
                       ,"url_2" => "URL 2:"
                       ,"url_3" => "URL 3:"
                       ,"view_parent" => "Вижте главната задача"
                       ,"view_tree" => "Дървовиден изглед"
                       );

$language->home = array("sort_title" => "Подреждане по заглавие"
                       ,"sort_title_rev" => "Обратно подреждане по заглавие"
                       ,"sort_priority" => "Подреждане по важност"
                       ,"sort_priority_rev" => "Обратно подреждане по важност"
                       );

$language->icons = array("completed" => "Изпълнена задача"
                        ,"delete" => "Изтриване"
                        ,"edit" => "Редакция"
                        ,"hide_show" => "Покажи/Скрий"
                        ,"hide_show_tip" => "Покажи или скрий информацията за тази задача"
                        ,"mark_complete" => "Маркирай изпълнена"
                        ,"new_sub_task" => "Нова подзадача"
                        ,"notes_bigger" => "Направи бележките по-големи"
                        ,"notes_smaller" => "Направи бележките по-малки"
                        ,"parent_picker" => "Избери главна задача"
                        ,"priority" => "Приоритет: __0" // result of get_friendly_priority();
                        ,"sticky" => "Важна задача"
                        ,"tree_toggle" => "Покажи/Скрий"
                        ,"tree_toggle_tip" => "Покажи или скрий повече подзадачи за тази задача"
                        );

$language->list = array("banner" => "Показани __0 елемента" // number
                       ,"date_due" => "За (дата)"
                       ,"done" => "(изпълнена)"
                       ,"id" => "ID"
                       ,"no_items" => "Няма елементи"
                       ,"priority" => "Приоритет"
                       ,"status" => "% завършена"
                       ,"title" => "Заглавие"
                       );

$language->list_titles = array("history" => "Последни 25 променяни задачи"
                              ,"overdue" => "Просрочени задачи"
                              ,"sortable" => "Сортиран списък със задачи"
                              ,"upcoming" => "Предстоящи задачи"
                              );

$language->menu = array("calendar" => "Календар"
                       ,"calendar_tip" => "Вижте вашите задачи в календара."
                       ,"history" => "История"
                       ,"history_tip" => "Натиснете тук, за да видите последните 25 променяни задачи."
                       ,"home" => "Начало"
                       ,"home_tip" => "Натиснете тук, за да отидете към списъка със всички задачи."
                       ,"new_task" => "Нова задача"
                       ,"new_task_tip" => "Натиснете тук, за да създадете нова задача."
                       ,"search" => "Търсене"
                       ,"search_tip" => "Натиснете тук, за да търсите в задачите."
                       ,"sortable" => "Сортирани"
                       ,"sortable_tip" => "Натиснете тук, за да видите сортиран списъка със задачи."
                       ,"upcoming" => "Предстоящи"
                       ,"upcoming_tip" => "Натиснете тук, за да видите всички предстоящи и просрочени задачи."
                       );

$language->messages = array("completed" => "Задачата &quot;__0&quot; (#__1) бе изпълнена." // title, id
                           ,"completed_reason" => 'Задачата &quot;__0&quot; (#__1) бе изпълнена като:<p style="padding-left: 15px;">__2</p>' // title, id, reason
                           ,"completed_task_link" => "Виж изпълнена задача"
                           ,"completed_task_parent_link" => "Виж главната на тази изпълнена задача"
                           ,"complete_instructions" => "Тази задача #__0 има __1 под-задачи (__2) отворени. Моля, решете." // id, number, number
                           ,"complete_orphan" => "Задачата &quot;__0&quot; (#__1) се маркира като изпълнена и всичките под-задачи са преместени към задача #__2." // title, id, new parent task id
                           ,"complete_orphan" => "Задачата &quot;__0&quot; (#__1) беше маркирана като изпълнена и всички под-задачи бяха изтрити." // title, id
                           ,"complete_recursive" => "Задачата &quot;__0&quot; (#__1) и всички под-задачи бяха маркирани като изпълнени." // title, id
                           ,"confirm_delete" => "Изтриване на задача: __0?"
                           ,"deleted" => "Задачата &quot;__0&quot; (#__1) беше изтрита." // title, id
                           ,"delete_instructions" => "Тази задача #__0 има __1 подзадачи (__2). Моля, решете." // id, number, number
                           ,"delete_orphan" => "Задачата &quot;__0&quot; (#__1) беше изтрита и всичките й подзадачи са вече отделни задачи." // title, id
                           ,"delete_recursive" => "Задачата &quot;__0&quot; (#__1) и всички подзадачи бяха изтрити." // title, id
                           ,"delete_remove" => "Задачата &quot;__0&quot; (#__1) беше изтрита и подзадачите преместени към задача #__2" // title, id, new parent id
                           ,"err_conflict" => "<b>Грешка:</b> Задачата не беше запазена.<br> Тя беше обновена от друг потребител докато вие я редактирахте. Моля, прегледайте разликите и запазете отново. <p>Версията, която вие променяхте беше последно променяна на __0;,<br> настоящата версия в базата беше последно променяна на __1"
                           ,"err_date_format" => "<b>Грешка:</b> Има грешка в формата за дата: <b>\$custom->date_format</b> в 'config.php'. Зададената стойност: '__0' не съдържа валидни стойности 'm', 'd', 'y'. Моля, коригирайте вашия 'config.php'." // date_format
                           ,"err_event_type" => "<b>Грешка:</b> Има грешка в формата <b>\$custom->ical_export_type</b> в 'config.php'. Вашата стойност: '__0' не е 'event' или 'todo'. Моля, коригирайте вашия 'config.php'." // ical_export_type
                           ,"err_invalid_date" => "<b>Грешка:</b> Задачата не беше запазена, защото датата не е валидна. Поправете или изтрийте и запазете отново."
                           ,"err_invalid_parent" => "<b>Грешка:</b> Задача #__0 е определена за главна задача, но тя не съществува. Моля, коригирайте и запазете отново." // id
                           ,"err_loop" => "<b>Грешка:</b> Това би довело до безкраен цикъл."
                           ,"err_no_root" => "Грешка: Не е определена главна задача."
                           ,"err_own_parent" => "<b>Грешка:</b> Задачата не може да е главна на себе си."
                           ,"err_search_date_after" => "<b>Грешка:</b> Това търсене няма да даде резултат защото зададения срок е невалиден. Поправете или изчистете и опитайте отново."
                           ,"err_search_date_before" => "<b>Грешка:</b> Това търсене няма да даде резултат защото зададения срок е невалиден. Поправете или изчистете и опитайте отново."
                           ,"err_search_date_exact" => "<b>Грешка:</b> Това търсене няма да даде резултат защото зададения срок е невалиден. Поправете или изчистете и опитайте отново."
                           ,"js_abandon_changes" => "Изход без запазване на промените?"
                           ,"js_complete_confirm" => "Сигурен ли сте, че искате да приключите\\nтази задача без\\nкоментар?"
                           ,"js_complete_prompt" => "Въведете коментар за приключването на задачата:"
                           ,"js_err_edit_date" => "Въведена е невалидна дата.\\nПроменете или изчистете преди да запазите."
                           ,"js_err_search_date_after" => "Настоящта стойност за дата е невалидна."
                           ,"js_err_search_date_before" => "Настоящта стойност за дата е невалидна."
                           ,"js_err_search_date_exact" => "Настоящта стойност за дата е невалидна."
                           ,"js_err_search_date_range" => "Датата преди, трябва да е преди датата след."
                           ,"js_err_search_errors" => "Предупреждение - Следните проблеми трябва да се оправят\\nпреди вашето търсене да върне резултати: \\n"
                           ,"js_err_search_id_invalid" => "Полето 'ID' трябва да е празно или по-голямо от 0."
                           ,"js_err_search_parent_invalid" => "Полето за главна задача трябва да е празно или да има стойност по-голяма от 0."
                           ,"js_err_search_status_exact" => "Полето за процент завършеност трябва да има стойност между 0 и 100."
                           ,"js_err_search_status_less" => "Полето за процент завършеност трябва да има стойност между 0 и 100."
                           ,"js_err_search_status_more" => "Полето за процент завършеност трябва да има стойност между 0 и 100."
                           ,"js_err_search_status_range" => "Долната граница е по-голяма от горната."
                           ,"js_loading_text" => "Зареждане..."
                           ,"js_nothing_to_save" => "Съжаляваме, няма какво да бъде запазено тук."
                           ,"js_parent_required" => "Трябва да определите главна задача преди\\nда я видите след запазването."
                           ,"mail_sent" => "Дневните напомняния бяха разпратени."
                           ,"mobile_resolve_instructions" => "Датата, която сте въвели, ще бъде показана под версията, която е понастоящем в базата. Направете нужните промени и натиснете 'Запазване'"
                           ,"no_email" => "Моля, добавете валшия email в config.php."
                           ,"parent_changed" => "Главната задача променена от  __0 на __1." // old parent id, new parent id
                           ,"saved" => "Задачата запазена #__0 (__1) на __2." // id, title, timestamp
                           ,"title" => "Съобщения"
                           ,"warn_deleted" => "<b>Предупреждение:</b> Тази задача е вече изтрита."
                           );

$language->misc = array("all_rights_reserved" => "всички права запазени."
                       ,"copyright" => "copyright"
                       ,"count_open" => "__0 Отворени задачи" // number
                       ,"count_total" => "__0 Задачи" // number
                       ,"hide_completed" => "Скриване на изпълнените задачи"
                       ,"jump_to" => "Отиди към..."
                       ,"quick_search" => "Бързо търсене"
                       ,"show_completed" => "Показване на изпълнените задачи"
                       ,"timer" => "страницата бе генерирана за __0 секунди." // seconds
                       ,"version" => "версия __0" // number
                       );

$language->picker = array("date_go" => "Отиване"
                         ,"date_key_selected" => "Настоящо избрана дата"
                         ,"date_key_today" => "Днешна дата"
                         ,"date_next" => "Следващ"
                         ,"date_previous" => "Предишен"
                         ,"date_today" => "Днес"
                         ,"days" => "'Нед.','Пон.','Втор.','Сряда','Четв.','Пет.','Съб.'"
                         ,"months" => "'Януари','Февруави','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември'"
                         ,"parent_title" => "Изберете главна задача"
                         );

$language->resolve = array("append" => "Допълни"
                          ,"current_version" => "Настояща версия"
                          ,"form_title" => "Следните полета се различават"
                          ,"none" => "(none)"
                          ,"save" => "Запазване"
                          ,"use" => "Използване"
                          ,"your_data" => "Вашите данни"
                          );

$language->search = array("after" => "е след:"
                         ,"before" => "е преди:"
                         ,"exactly" => "е точно:"
                         ,"form_title" => "Критерий за търсене"
                         ,"include_completed" => "Включи и изпълените задачи"
                         ,"instructions" => "Въведете думи или части от думи, които се съдържат в заглавието и/или бележките към задачите, в които търсите. По подразбиране търсенето ще открие задачите, които съдържат всички ключови думи. Изберете &quot;Повече възможности за търсене&quot; за да видите допълнителните възможности."
                         ,"less_than" => "е по-малко от:"
                         ,"more_options" => "Повече възможности за търсене"
                         ,"more_than" => "е повече от:"
                         ,"results_title" => "Резултати от търсенето"
                         ,"search_button" => "Търсене"
                         );

$language->toolbar = array("b2_tip" => "Пост към b2"
                          ,"date_time" => "Добавяне на Дата/Час"
                          ,"date_time_tip" => "Добавяне на сегашната Дата/Час в бележките."
                          ,"delete" => "Изтриване"
                          ,"edit" => "Редакция"
                          ,"mark_complete" => "Маркирай изпълнена"
                          ,"mark_complete_m" => "100%"
                          ,"mt_tip" => "Пост към Moveable Type"
                          ,"new_sub" => "Нова под-задача"
                          ,"new_sub_m" => "Нова под-задача"
                          ,"save" => "Запазване"
                          ,"save_alt" => "Запазване"
                          ,"save_as_new" => "Запазване като нова задача"
                          ,"wp_tip" => "Пост към WordPress"
                          );

$language->tree = array("due" => "За:"
                       ,"id" => "ID:"
                       ,"loading" => $language->messages["js_loading_text"] // no need to set this
                       ,"open_sub_task" => '1 отворена под-задача <span style="color: #666;">(__0 Total)</span>' // number
                       ,"open_sub_tasks" => '__0 отворени под-задачи <span style="color: #666;">(__1 Total)</span>' // number, number
                       ,"status" => "Изпълнена на __0%"
                       );

?>