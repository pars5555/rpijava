{foreach from=$ns.all_projects item=projectDto key=index}
    <a href="{$SITE_PATH}/project/{$projectDto->getId()}">{$projectDto->getTitle()}</a>
    </br>
{/foreach}