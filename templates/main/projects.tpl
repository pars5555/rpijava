{foreach from=$ns.projects item=project key=index}
    <a href="{$SITE_PATH}/project/{$project->getId()}">{$project->getTitle()}</a>
    </br>
{/foreach}