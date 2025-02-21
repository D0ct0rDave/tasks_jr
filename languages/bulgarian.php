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

$language->about = array("tagline" => "���� ����������� � ����� ������."
                        ,"documentation" => "������������"
                        ,"read_me" => "������� ��"
                        ,"license" => "�������� ������������"
                        ,"download" => "�������"
                        ,"this_version" => "���������� ������: __0" // number
                        ,"latest_version" => "�������� �������� ������: __0" // number
                        ,"beta_version" => "�������� ������� ������: __0" // number
                        ,"using_latest" => "��� ���������� ���������� �������� ������."
                        ,"using_beta" => "��� ���������� ���������� ������� ������."
                        ,"feedback" => "��������� � �����������:"
                        ,"web" => "����:"
                        ,"credits" => "�������"
                        ,"main_credit" => "Tasks Jr. � ���� � ������� �� <nobr>Alex King</nobr>. ������������ � �� �������� ����� ��:"
                        ,"web_site" => "�������"
                        ,"email" => "��. ����"
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

$language->breadcrumbs = array("history" => "��������"
                              ,"home" => "������"
                              ,"new_task" => "���� ������"
                              ,"search" => "�������"
                              ,"search_results" => "��������� �� ���������"
                              ,"sortable" => "�������� ������"
                              ,"upcoming" => "���������� ������"
                              );

$language->confirm = array("complete_instructions" => "��������, ����� ��������� ���� ����������, ��� __0 ���������. ����, ������:" // number
                          ,"complete_orphan" => "����������� �� �������� � �������� �� ����������� ���� �������������."
                          ,"complete_notes" => "������� �� �����������:"
                          ,"complete_recursive" => "����������� �� �������� � ������� ���������."
                          ,"complete_remove" => "����������� �� �������� � ����������� �� ����������� ��� ������ ���� ������."
                          ,"complete_title" => "��������"
                          ,"delete_confirm" => "������� �� ���, �� ������ �� �������� ���� ������?"
                          ,"delete_instructions" => "��������, ����� �� ��������, ���  __0 ���������. ����, ������:" // number
                          ,"delete_orphan" => "��������� �� �������� � �������� �� ����������� ���� �������������."
                          ,"delete_recursive" => "��������� �� �������� � ������� ���������."
                          ,"delete_remove" => "��������� �� �������� � ����������� �� ����������� ��� ������ ���� ������."
                          ,"delete_title" => "��������"
                          ,"delete_title_m" => "���������"
                          );

$language->data = array("no" => "��"
                       ,"priority_1" => "���-�����"
                       ,"priority_2" => "�����"
                       ,"priority_3" => "��������"
                       ,"priority_4" => "�����"
                       ,"priority_5" => "���-�����"
                       ,"rel_date" => "__0" // date
                       ,"rel_date_days" => "__0 ����" // number
                       ,"rel_date_days_ago" => "����� __0 ����" // number
                       ,"rel_date_today" => "����"
                       ,"rel_date_tomorrow" => "����"
                       ,"rel_date_week" => "1 �������"
                       ,"rel_date_week_ago" => "����� 1 �������"
                       ,"rel_date_yesterday" => "�����"
                       ,"yes" => "��"
                       );

$language->email_reminders = array("overdue" => "���������"
                                  ,"due" => "��"
                                  ,"upcoming" => "����������"
                                  ,"high_priority" => "����� ���������"
                                  ,"status" => "���������"
                                  ,"complete" => "% ���������"
                                  ,"priority" => "���������"
                                  ,"none" => "(���)"
                                  ,"subject" => "��������� �� ������"
                                  );

$language->form = array("1_week" => "1 �������"
                       ,"1_year" => "1 ������"
                       ,"30_days" => "30 ����"
                       ,"90_days" => "90 ����"
                       ,"after_save" => "���� �����������:"
                       ,"choose_date" => "�������� ����"
                       ,"clear_date" => "����������"
                       ,"date_due" => "��:"
                       ,"date_entered" => "�������� ��:"
                       ,"date_modified" => "�������� ���������:"
                       ,"form_title_edit" => "��������"
                       ,"form_title_new" => "���� ������"
                       ,"id" => "ID:"
                       ,"new_task" => "���� ������"
                       ,"notes" => "�������:"
                       ,"parent" => "���� ��:"
                       ,"priority" => "���������:"
                       ,"return_home" => "��� ��������"
                       ,"status" => "��������� �� %:"
                       ,"status_label" => "% ���������"
                       ,"stay_here" => "���"
                       ,"sticky" => "����� ������"
                       ,"sticky_label" => "����� ������:"
                       ,"title" => "�������<u>�</u>:"
                       ,"today" => "����"
                       ,"tomorrow" => "����"
                       ,"url" => "URL:"
                       ,"urls" => "URLs:"
                       ,"url_1" => "URL 1:"
                       ,"url_2" => "URL 2:"
                       ,"url_3" => "URL 3:"
                       ,"view_parent" => "����� �������� ������"
                       ,"view_tree" => "���������� ������"
                       );

$language->home = array("sort_title" => "���������� �� ��������"
                       ,"sort_title_rev" => "������� ���������� �� ��������"
                       ,"sort_priority" => "���������� �� �������"
                       ,"sort_priority_rev" => "������� ���������� �� �������"
                       );

$language->icons = array("completed" => "��������� ������"
                        ,"delete" => "���������"
                        ,"edit" => "��������"
                        ,"hide_show" => "������/�����"
                        ,"hide_show_tip" => "������ ��� ����� ������������ �� ���� ������"
                        ,"mark_complete" => "�������� ���������"
                        ,"new_sub_task" => "���� ���������"
                        ,"notes_bigger" => "������� ��������� ��-������"
                        ,"notes_smaller" => "������� ��������� ��-�����"
                        ,"parent_picker" => "������ ������ ������"
                        ,"priority" => "���������: __0" // result of get_friendly_priority();
                        ,"sticky" => "����� ������"
                        ,"tree_toggle" => "������/�����"
                        ,"tree_toggle_tip" => "������ ��� ����� ������ ��������� �� ���� ������"
                        );

$language->list = array("banner" => "�������� __0 ��������" // number
                       ,"date_due" => "�� (����)"
                       ,"done" => "(���������)"
                       ,"id" => "ID"
                       ,"no_items" => "���� ��������"
                       ,"priority" => "���������"
                       ,"status" => "% ���������"
                       ,"title" => "��������"
                       );

$language->list_titles = array("history" => "�������� 25 ��������� ������"
                              ,"overdue" => "���������� ������"
                              ,"sortable" => "�������� ������ ��� ������"
                              ,"upcoming" => "���������� ������"
                              );

$language->menu = array("calendar" => "��������"
                       ,"calendar_tip" => "����� ������ ������ � ���������."
                       ,"history" => "�������"
                       ,"history_tip" => "��������� ���, �� �� ������ ���������� 25 ��������� ������."
                       ,"home" => "������"
                       ,"home_tip" => "��������� ���, �� �� ������� ��� ������� ��� ������ ������."
                       ,"new_task" => "���� ������"
                       ,"new_task_tip" => "��������� ���, �� �� ��������� ���� ������."
                       ,"search" => "�������"
                       ,"search_tip" => "��������� ���, �� �� ������� � ��������."
                       ,"sortable" => "���������"
                       ,"sortable_tip" => "��������� ���, �� �� ������ �������� ������� ��� ������."
                       ,"upcoming" => "����������"
                       ,"upcoming_tip" => "��������� ���, �� �� ������ ������ ���������� � ���������� ������."
                       );

$language->messages = array("completed" => "�������� &quot;__0&quot; (#__1) �� ���������." // title, id
                           ,"completed_reason" => '�������� &quot;__0&quot; (#__1) �� ��������� ����:<p style="padding-left: 15px;">__2</p>' // title, id, reason
                           ,"completed_task_link" => "��� ��������� ������"
                           ,"completed_task_parent_link" => "��� �������� �� ���� ��������� ������"
                           ,"complete_instructions" => "���� ������ #__0 ��� __1 ���-������ (__2) ��������. ����, ������." // id, number, number
                           ,"complete_orphan" => "�������� &quot;__0&quot; (#__1) �� ������� ���� ��������� � �������� ���-������ �� ���������� ��� ������ #__2." // title, id, new parent task id
                           ,"complete_orphan" => "�������� &quot;__0&quot; (#__1) ���� ��������� ���� ��������� � ������ ���-������ ���� �������." // title, id
                           ,"complete_recursive" => "�������� &quot;__0&quot; (#__1) � ������ ���-������ ���� ��������� ���� ���������." // title, id
                           ,"confirm_delete" => "��������� �� ������: __0?"
                           ,"deleted" => "�������� &quot;__0&quot; (#__1) ���� �������." // title, id
                           ,"delete_instructions" => "���� ������ #__0 ��� __1 ��������� (__2). ����, ������." // id, number, number
                           ,"delete_orphan" => "�������� &quot;__0&quot; (#__1) ���� ������� � �������� � ��������� �� ���� ������� ������." // title, id
                           ,"delete_recursive" => "�������� &quot;__0&quot; (#__1) � ������ ��������� ���� �������." // title, id
                           ,"delete_remove" => "�������� &quot;__0&quot; (#__1) ���� ������� � ����������� ���������� ��� ������ #__2" // title, id, new parent id
                           ,"err_conflict" => "<b>������:</b> �������� �� ���� ��������.<br> �� ���� �������� �� ���� ���������� ������ ��� � ������������. ����, ����������� ��������� � �������� ������. <p>��������, ����� ��� ���������� ���� �������� ��������� �� __0;,<br> ���������� ������ � ������ ���� �������� ��������� �� __1"
                           ,"err_date_format" => "<b>������:</b> ��� ������ � ������� �� ����: <b>\$custom->date_format</b> � 'config.php'. ���������� ��������: '__0' �� ������� ������� ��������� 'm', 'd', 'y'. ����, ����������� ����� 'config.php'." // date_format
                           ,"err_event_type" => "<b>������:</b> ��� ������ � ������� <b>\$custom->ical_export_type</b> � 'config.php'. ������ ��������: '__0' �� � 'event' ��� 'todo'. ����, ����������� ����� 'config.php'." // ical_export_type
                           ,"err_invalid_date" => "<b>������:</b> �������� �� ���� ��������, ������ ������ �� � �������. ��������� ��� �������� � �������� ������."
                           ,"err_invalid_parent" => "<b>������:</b> ������ #__0 � ���������� �� ������ ������, �� �� �� ����������. ����, ����������� � �������� ������." // id
                           ,"err_loop" => "<b>������:</b> ���� �� ������ �� �������� �����."
                           ,"err_no_root" => "������: �� � ���������� ������ ������."
                           ,"err_own_parent" => "<b>������:</b> �������� �� ���� �� � ������ �� ���� ��."
                           ,"err_search_date_after" => "<b>������:</b> ���� ������� ���� �� ���� �������� ������ ��������� ���� � ���������. ��������� ��� ��������� � �������� ������."
                           ,"err_search_date_before" => "<b>������:</b> ���� ������� ���� �� ���� �������� ������ ��������� ���� � ���������. ��������� ��� ��������� � �������� ������."
                           ,"err_search_date_exact" => "<b>������:</b> ���� ������� ���� �� ���� �������� ������ ��������� ���� � ���������. ��������� ��� ��������� � �������� ������."
                           ,"js_abandon_changes" => "����� ��� ��������� �� ���������?"
                           ,"js_complete_confirm" => "������� �� ���, �� ������ �� ����������\\n���� ������ ���\\n��������?"
                           ,"js_complete_prompt" => "�������� �������� �� ������������� �� ��������:"
                           ,"js_err_edit_date" => "�������� � ��������� ����.\\n��������� ��� ��������� ����� �� ��������."
                           ,"js_err_search_date_after" => "��������� �������� �� ���� � ���������."
                           ,"js_err_search_date_before" => "��������� �������� �� ���� � ���������."
                           ,"js_err_search_date_exact" => "��������� �������� �� ���� � ���������."
                           ,"js_err_search_date_range" => "������ �����, ������ �� � ����� ������ ����."
                           ,"js_err_search_errors" => "�������������� - �������� �������� ������ �� �� �������\\n����� ������ ������� �� ����� ���������: \\n"
                           ,"js_err_search_id_invalid" => "������ 'ID' ������ �� � ������ ��� ��-������ �� 0."
                           ,"js_err_search_parent_invalid" => "������ �� ������ ������ ������ �� � ������ ��� �� ��� �������� ��-������ �� 0."
                           ,"js_err_search_status_exact" => "������ �� ������� ����������� ������ �� ��� �������� ����� 0 � 100."
                           ,"js_err_search_status_less" => "������ �� ������� ����������� ������ �� ��� �������� ����� 0 � 100."
                           ,"js_err_search_status_more" => "������ �� ������� ����������� ������ �� ��� �������� ����� 0 � 100."
                           ,"js_err_search_status_range" => "������� ������� � ��-������ �� �������."
                           ,"js_loading_text" => "���������..."
                           ,"js_nothing_to_save" => "����������, ���� ����� �� ���� �������� ���."
                           ,"js_parent_required" => "������ �� ���������� ������ ������ �����\\n�� � ������ ���� �����������."
                           ,"mail_sent" => "�������� ���������� ���� ����������."
                           ,"mobile_resolve_instructions" => "������, ����� ��� ������, �� ���� �������� ��� ��������, ����� � ����������� � ������. ��������� ������� ������� � ��������� '���������'"
                           ,"no_email" => "����, �������� ������ email � config.php."
                           ,"parent_changed" => "�������� ������ ��������� ��  __0 �� __1." // old parent id, new parent id
                           ,"saved" => "�������� �������� #__0 (__1) �� __2." // id, title, timestamp
                           ,"title" => "���������"
                           ,"warn_deleted" => "<b>��������������:</b> ���� ������ � ���� �������."
                           );

$language->misc = array("all_rights_reserved" => "������ ����� ��������."
                       ,"copyright" => "copyright"
                       ,"count_open" => "__0 �������� ������" // number
                       ,"count_total" => "__0 ������" // number
                       ,"hide_completed" => "�������� �� ����������� ������"
                       ,"jump_to" => "����� ���..."
                       ,"quick_search" => "����� �������"
                       ,"show_completed" => "��������� �� ����������� ������"
                       ,"timer" => "���������� �� ���������� �� __0 �������." // seconds
                       ,"version" => "������ __0" // number
                       );

$language->picker = array("date_go" => "�������"
                         ,"date_key_selected" => "�������� ������� ����"
                         ,"date_key_today" => "������ ����"
                         ,"date_next" => "�������"
                         ,"date_previous" => "��������"
                         ,"date_today" => "����"
                         ,"days" => "'���.','���.','����.','�����','����.','���.','���.'"
                         ,"months" => "'������','��������','����','�����','���','���','���','������','���������','��������','�������','��������'"
                         ,"parent_title" => "�������� ������ ������"
                         );

$language->resolve = array("append" => "�������"
                          ,"current_version" => "�������� ������"
                          ,"form_title" => "�������� ������ �� ����������"
                          ,"none" => "(none)"
                          ,"save" => "���������"
                          ,"use" => "����������"
                          ,"your_data" => "������ �����"
                          );

$language->search = array("after" => "� ����:"
                         ,"before" => "� �����:"
                         ,"exactly" => "� �����:"
                         ,"form_title" => "�������� �� �������"
                         ,"include_completed" => "������ � ���������� ������"
                         ,"instructions" => "�������� ���� ��� ����� �� ����, ����� �� �������� � ���������� �/��� ��������� ��� ��������, � ����� �������. �� ������������ ��������� �� ������ ��������, ����� �������� ������ ������� ����. �������� &quot;������ ����������� �� �������&quot; �� �� ������ �������������� �����������."
                         ,"less_than" => "� ��-����� ��:"
                         ,"more_options" => "������ ����������� �� �������"
                         ,"more_than" => "� ������ ��:"
                         ,"results_title" => "��������� �� ���������"
                         ,"search_button" => "�������"
                         );

$language->toolbar = array("b2_tip" => "���� ��� b2"
                          ,"date_time" => "�������� �� ����/���"
                          ,"date_time_tip" => "�������� �� ��������� ����/��� � ���������."
                          ,"delete" => "���������"
                          ,"edit" => "��������"
                          ,"mark_complete" => "�������� ���������"
                          ,"mark_complete_m" => "100%"
                          ,"mt_tip" => "���� ��� Moveable Type"
                          ,"new_sub" => "���� ���-������"
                          ,"new_sub_m" => "���� ���-������"
                          ,"save" => "���������"
                          ,"save_alt" => "���������"
                          ,"save_as_new" => "��������� ���� ���� ������"
                          ,"wp_tip" => "���� ��� WordPress"
                          );

$language->tree = array("due" => "��:"
                       ,"id" => "ID:"
                       ,"loading" => $language->messages["js_loading_text"] // no need to set this
                       ,"open_sub_task" => '1 �������� ���-������ <span style="color: #666;">(__0 Total)</span>' // number
                       ,"open_sub_tasks" => '__0 �������� ���-������ <span style="color: #666;">(__1 Total)</span>' // number, number
                       ,"status" => "��������� �� __0%"
                       );

?>