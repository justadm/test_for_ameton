<?php

namespace Sprint\Migration;


class CommentsOnNews_20240331183702 extends Version
{
    protected $description = "HL Комментарии к новостям";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
    $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'CommentsOnNews',
  'TABLE_NAME' => 'comments_on_news',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Комментарии к новостям',
    ),
    'en' => 
    array (
      'NAME' => 'Comments on news',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_NEWS_ID',
  'USER_TYPE_ID' => 'iblock_element',
  'XML_ID' => 'UF_NEWS_ID',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'I',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 5,
    'IBLOCK_ID' => 'news:News',
    'DEFAULT_VALUE' => '',
    'ACTIVE_FILTER' => 'Y',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'News ID',
    'ru' => 'ID новости',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'News ID',
    'ru' => 'ID новости',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'News ID',
    'ru' => 'ID новости',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'News ID',
    'ru' => 'ID новости',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'News ID',
    'ru' => 'ID новости',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_DATE',
  'USER_TYPE_ID' => 'datetime',
  'XML_ID' => 'UF_DATE',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DEFAULT_VALUE' => 
    array (
      'TYPE' => 'NOW',
      'VALUE' => '',
    ),
    'USE_SECOND' => 'Y',
    'USE_TIMEZONE' => 'N',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Date',
    'ru' => 'Дата',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Date',
    'ru' => 'Дата',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Date',
    'ru' => 'Дата',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Date',
    'ru' => 'Дата',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Date',
    'ru' => 'Дата',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_AUTOR',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_AUTOR',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'Y',
  'SHOW_FILTER' => 'S',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 80,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Autor',
    'ru' => 'Автор',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Autor',
    'ru' => 'Автор',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Autor',
    'ru' => 'Автор',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Autor',
    'ru' => 'Автор',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Autor',
    'ru' => 'Автор',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_TEXT',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_TEXT',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 80,
    'ROWS' => 4,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Text comments',
    'ru' => 'Текст коммента',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Text comments',
    'ru' => 'Текст коммента',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Text comments',
    'ru' => 'Текст коммента',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Text comments',
    'ru' => 'Текст коммента',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Text comments',
    'ru' => 'Текст коммента',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_PARENT_ID',
  'USER_TYPE_ID' => 'hlblock',
  'XML_ID' => 'UF_PARENT_ID',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'DISPLAY' => 'LIST',
    'LIST_HEIGHT' => 5,
    'HLBLOCK_ID' => 'CommentsOnNews',
    'HLFIELD_ID' => 0,
    'DEFAULT_VALUE' => 0,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Reply to a comment',
    'ru' => 'Ответ на коммент',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Reply to a comment',
    'ru' => 'Ответ на коммент',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Reply to a comment',
    'ru' => 'Ответ на коммент',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => 'Reply to a comment',
    'ru' => 'Ответ на коммент',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => 'Reply to a comment',
    'ru' => 'Ответ на коммент',
  ),
));
        }

    public function down()
    {
        //your code ...
    }
}
