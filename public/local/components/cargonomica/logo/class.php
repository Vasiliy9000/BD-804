<?php

use Bitrix\Main\ArgumentException;
use Bitrix\Main\FileTable;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @see https://jira.cargonomica.com/browse/BD-804
 * /
 */
class Logo extends CBitrixComponent
{
    /**
     * @param $arParams
     * @return array
     * @throws Exception
     */
    public function onPrepareComponentParams($arParams): array
    {
        $arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
        if (!$arParams['IBLOCK_ID']) {
            throw new Exception('IBLOCK_ID is empty');
        }

        if (!$arParams['ELEMENT_CODE']) {
            throw new Exception('ELEMENT_CODE is empty');
        }

        $arParams['IS_MAIN'] = (bool)$arParams['IS_MAIN'];

        return $arParams;
    }

    /**
     * @return void
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public function executeComponent(): void
    {
        if ($this->startResultCache()) {
            $this->getData();
            $this->includeComponentTemplate();
        }
    }

    /**
     * @return void
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     * @throws Exception
     */
    protected function getData(): void
    {
        $element = CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'CODE' => $this->arParams['ELEMENT_CODE'],
            ],
            false,
            ['nTopCount' => 1],
            [
                'ID',
                'IBLOCK_ID',
                'PROPERTY_LOGO_HEADER_DESKTOP_SVG',
                'PROPERTY_LOGO_HEADER_TABLET_MOBILE_SVG',
                'PROPERTY_LOGO_FOOTER_DESKTOP_SVG',
                'PROPERTY_LOGO_FOOTER_TABLET_MOBILE_SVG',
            ],
        )->Fetch();

        if (!$element) {
            throw new Exception('Element not found');
        }

        $fileIds = [
            $element['PROPERTY_LOGO_HEADER_DESKTOP_SVG_VALUE'] => 'logoHeaderDesktop',
            $element['PROPERTY_LOGO_HEADER_TABLET_MOBILE_SVG_VALUE'] => 'logoHeaderMobile',
            $element['PROPERTY_LOGO_FOOTER_DESKTOP_SVG_VALUE'] => 'logoFooterDesktop',
            $element['PROPERTY_LOGO_FOOTER_TABLET_MOBILE_SVG_VALUE'] => 'logoFooterMobile',
        ];

        $fileList = FileTable::getList([
            'select' => ['ID', 'SUBDIR', 'FILE_NAME'],
            'filter' => ['=ID' => array_keys($fileIds)],
        ]);

        while ($link = $fileList->fetch()) {
            $key = array_search($fileIds[$link['ID']], $fileIds);
            $this->arResult['logo'][$fileIds[$key]] = CFile::GetFileSRC($link);
        }
    }
}
