{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <form action="{$conf->action_url}personSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input id="id_login" type="text" name="id" value="{$form->id}" hidden="true" />
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" value="{$form->name}"
                    {if $user->privilege == 'admin' && $user->id != $form->id } hidden="true" {/if} />
                {if $user->privilege == 'admin' && $user->id != $form->id }{$form->name}{/if}
            </div>
            <div class="pure-control-group">
                {if  $user->privilege == 'admin'}
                    <label for="id_pass">role: </label>
                    <select name="privilege" class="pure-control-group">
                        {if isset($privileges)}
                            {foreach $privileges as $result}
                                {if ($result['idrole'] == $form->privilege)}
                                    <option value={$result['idrole']} selected="true">{$result['role_name']}</option>
                                {else}
                                    <option value={$result['idrole']}>{$result['role_name']}</option>
                                {/if}
                            {/foreach}
                        {/if}
                    </select>
                {/if}
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" value="{$form->mail}"
                    {if $user->privilege == 'admin' && $user->id != $form->id } hidden="true" {/if} />
                {if $user->privilege == 'admin' && $user->id != $form->id }{$form->mail}{/if}
            </div>
            {if $user->id == $form->id}
                <div class="pure-control-group">
                    <label for="id_pass">password: </label>
                    <input id="id_pass" type="password" name="pass" />
                </div>
                <div class="pure-control-group">
                    <label for="id_pass">password repeat: </label>
                    <input id="id_pass" type="password" name="pass2" />
                </div>
            {/if}
            <div class="pure-controls">
                <input type="submit" value="Zapisz zmiany" class="pure-button pure-button-primary" />
            </div>
        </form>
    </div>

    {include file='messages.tpl'}
{/block}