{extends file="main.tpl"}

{block name=content}

    {include file='header.tpl'}
    <div>
        <label>Title of questionnaire</label>
        <form action="{$conf->action_url}VotesSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="id" value="{$form->id}" hidden="true" />
            <input name="title" value="{$form->title}" />
            <div>
                <label for="description">Description (seperate description and each answers with "|")</label>
            </div>
            <textarea id="description" name="description" value="2" rows="20" cols="50">{$form->description}</textarea>

            <div>
                <input type="submit" onclick="" value="Add answer">
            </div>
        </form>
    </div>

    {include file='messages.tpl'}
{/block}