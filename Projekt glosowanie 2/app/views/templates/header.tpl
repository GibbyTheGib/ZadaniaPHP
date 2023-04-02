<div class="pure-menu pure-menu-horizontal bottom-margin">
    <form action="{$conf->action_url}VotesShowLike" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="My Votess" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="{$conf->action_url}personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>

    {if ($user->privilege == "admin")}
        <form action="{$conf->action_url}VotesNew" method="post" class="pure-menu-heading pure-menu-link">
            <input name="id" value="{$user->id}" hidden="true" />
            <input type="submit" value="New Questionnaire" class="pure-menu-heading pure-menu-link" />
        </form>
        <a href="{$conf->action_url}personShowAll" class="pure-menu-heading pure-menu-link">Users</a>
        <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">Show All Votes</a>

    {/if}
    {if ($user->privilege == "moderator")}
        <form action="{$conf->action_url}VotesNew" method="post" class="pure-menu-heading pure-menu-link">
            <input name="id" value="{$user->id}" hidden="true" />
            <input type="submit" value="New Questionnaire" class="pure-menu-heading pure-menu-link" />
        </form>
        <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">Show All Votes</a>

    {/if}
    <a href="{$conf->action_url}logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: {$user->login}, rola: {$user->privilege}</span>
</div>