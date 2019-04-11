<?php declare(strict_types=1);

namespace Shopware\Core\Content\Cms\Aggregate\CmsPageTranslation;

use Shopware\Core\Content\Cms\CmsPageDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CustomFields;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CmsPageTranslationDefinition extends EntityTranslationDefinition
{
    public function getEntityName(): string
    {
        return 'cms_page_translation';
    }

    public static function getEntityClass(): string
    {
        return CmsPageTranslationEntity::class;
    }

    public static function getParentDefinitionClass(): string
    {
        return CmsPageDefinition::class;
    }

    protected static function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name', 'name'))->setFlags(new Required()),
            new CustomFields(),
        ]);
    }
}
