<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        {include file="$TEMPLATE_DIR/main/util/headerControls.tpl"}
    </head>    
    <body>
        <a style="visibility: hidden;position: fixed" href="https://plus.google.com/104486041980261075638" rel="publisher">Google+</a>
        {include file="$TEMPLATE_DIR/main/util/header.tpl"}       
        {nest ns=content}                        
        {include file="$TEMPLATE_DIR/main/util/footer.tpl"}
        <input type="hidden" id="initialLoad" name="initialLoad" value="main" />
        <input type="hidden" id="contentLoad" value="{$ns.contentLoad}" />	
    </body>


</html>