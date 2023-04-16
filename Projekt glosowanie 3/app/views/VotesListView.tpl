{extends file="main.tpl"}

{block name=content}
    {include file="header.tpl"}
    <div>
        <h1>Main Page</h1>
        <h3>pages</h3>
        <div style="display:flex">  
            {for $foo=1 to $counter/5}
                <div>
                <form action="{$conf->action_url}VotesShowAll" method="post" class="pure-form pure-form-aligned bottom-margin">
                    <input type="number" value="{$foo-1}" name="page" hidden/>
                    <input type="submit" value="{$foo}" />
                </form>
                </div>
            {/for}
        </div>

        <div>
            {if isset($questionnaires)}
                {foreach $questionnaires as $key => $questionnaire}
                    <form action="{$conf->action_url}Vote" method="post">
                        <h2>{$questionnaire[1]}</h2>
                    {foreach $questionnaire[2] as $k => $answer}
                                <label>{$answer}</label>
                                <input type="radio" name="title" value="{$answer}" />
                                </br>
                        {/foreach}
                        <input name="id" value="{$questionnaire[0]}" hidden="true" />
                        <input type="submit" value="zagłosuj" />
                    </form>
                {/foreach}
            {/if}
        </div>
        </br>
        <h3>pages</h3>
        <div style="display:flex">  
        {for $foo=1 to $counter/5}
            <div>
            <form action="{$conf->action_url}VotesShowAll" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input type="number" value="{$foo-1}" name="page" hidden/>
                <input type="submit" value="{$foo}" />
            </form>
            </div>
        {/for}
    </div>

    </div>

    {include file='messages.tpl'}
{/block}