{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Users List</h1>
        <div>
            <form action="{$conf->action_url}personShowLike" method="post"
                class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <ul>
            {if isset($users)}
                {foreach $users as $result}
                    <div>
                        <div>
                            {$result['username']}
                        </div>
                        <div>
                            {$result['mail']}
                        </div>
                        <form action="{$conf->action_url}personEdit" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
                            <input name="id" value={$result['Iduser']} hidden="true" />
                            <input type="submit" value="Edytuj">
                        </form>
                        <form action="{$conf->action_url}personDelete" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
                            <input name="id" value={$result['Iduser']} hidden="true" />
                            <input type="submit" value="Zbanuj">
                        </form>
                    </div>
                {/foreach}
            {/if}
        </ul>
    </div>

    {include file='messages.tpl'}
{/block}