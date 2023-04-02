{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Main Page</h1>

        <div>
            {if isset($questionnaires)}
                {foreach $questionnaires as $key => $questionnaire}
                    {foreach $questionnaire[1] as $k => $answer}
                        {if ($k == 0)}
                            <form action="{$conf->action_url}Vote" method="post">
                                <h2>{$answer}</h2>
                            {else}
                                <label>{$answer}</label>
                                <input type="radio" name="title" value="{$answer}" />
                            {/if}
                        {/foreach}
                        <input name="id" value="{$questionnaire[0]}" hidden="true" />
                        <input type="submit" value="zagłosuj" />
                    </form>
                {/foreach}
            {/if}
        </div>
    </div>

    {include file='messages.tpl'}
{/block}