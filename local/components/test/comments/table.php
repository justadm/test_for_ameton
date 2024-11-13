<?php
use Bitrix\Main\Localization\Loc,
    Bitrix\Main\ORM\Data\DataManager,
    Bitrix\Main\ORM\Fields\DatetimeField,
    Bitrix\Main\ORM\Fields\IntegerField,
    Bitrix\Main\ORM\Fields\StringField,
    Bitrix\Main\ORM\Fields\Relations\Reference,
    Bitrix\Main\ORM\Fields\Validators\LengthValidator,
    Bitrix\Main\ORM\Query\Join,
    Bitrix\Main\Type\DateTime,
    Bitrix\Main\UserTable,
    Ac\Pm\Orm\Tables\ReferenceformzadachirazrabotkaTable as ProjectsTable;

Loc::loadMessages(__FILE__);

/**
 * Class CommentsOnNewsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> NEWS_ID int mandatory
 * <li> DATE datetime optional default current datetime
 * <li> AUTOR string mandatory
 * <li> TEXT text optional
 * <li> PARENT_ID int mandatory
 * </ul>
 *
 * @package Ac\Pm\Orm\Tables\UserRoles
 **/

class CommentsOnNewsTable extends DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'comments_on_news';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
        return [
            new IntegerField(
                'ID',
                [
                    'primary' => true,
                    'autocomplete' => true,
                    'title' => 'ID'
                ]
            ),
            new IntegerField(
                'NEWS_ID',
                [
                    'required' => true,
                    'column_name' => 'UF_NEWS_ID',
                    'title' => 'ID новости'
                ]
            ),
            new DatetimeField(
                'DATE',
                [
                    'default' => function() {
                        return new DateTime();
                    },
                    'column_name' => 'UF_DATE',
                    'title' => 'Дата коммента'
                ]
            ),
            new StringField(
                'AUTOR',
                [
                    'required' => true,
                    'column_name' => 'UF_AUTOR',
                    'title' => 'Автор коммента'
                ]
            ),
            new StringField(
                'TEXT',
                [
                    'default' => 'Текст коммента...',
                    'column_name' => 'UF_TEXT',
                    'title' => 'Текст коммента'
                ]
            ),
            new IntegerField(
                'PARENT_ID',
                [
                    'default' => 0,
                    'column_name' => 'UF_PARENT_ID',
                    'title' => 'Ответ на коммент ID'
                ]
            ),
        ];
    }

    /**
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
        return [
            new LengthValidator(null, 255),
        ];
    }

}