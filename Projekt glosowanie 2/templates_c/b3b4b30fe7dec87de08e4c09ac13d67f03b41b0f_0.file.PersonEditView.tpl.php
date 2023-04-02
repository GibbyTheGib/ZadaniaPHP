<?php
/* Smarty version 3.1.30, created on 2023-03-12 03:10:59
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Glosowanie\app\views\PersonEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640d34b3295300_55539083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b4b30fe7dec87de08e4c09ac13d67f03b41b0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Glosowanie\\app\\views\\PersonEditView.tpl',
      1 => 1678587057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:header.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_640d34b3295300_55539083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_574438215640d34b32941e3_47740311', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_574438215640d34b32941e3_47740311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input id="id_login" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
" hidden="true" />
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->privilege == 'admin' && $_smarty_tpl->tpl_vars['user']->value->id != $_smarty_tpl->tpl_vars['form']->value->id) {?> hidden="true" <?php }?> />
                <?php if ($_smarty_tpl->tpl_vars['user']->value->privilege == 'admin' && $_smarty_tpl->tpl_vars['user']->value->id != $_smarty_tpl->tpl_vars['form']->value->id) {
echo $_smarty_tpl->tpl_vars['form']->value->name;
}?>
            </div>
            <div class="pure-control-group">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->privilege == 'admin') {?>
                    <label for="id_pass">role: </label>
                    <select name="privilege" class="pure-control-group">
                        <?php if (isset($_smarty_tpl->tpl_vars['privileges']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['privileges']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                                <?php if (($_smarty_tpl->tpl_vars['result']->value['idrole'] == $_smarty_tpl->tpl_vars['form']->value->privilege)) {?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['result']->value['idrole'];?>
 selected="true"><?php echo $_smarty_tpl->tpl_vars['result']->value['role_name'];?>
</option>
                                <?php } else { ?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['result']->value['idrole'];?>
><?php echo $_smarty_tpl->tpl_vars['result']->value['role_name'];?>
</option>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                    </select>
                <?php }?>
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
"
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->privilege == 'admin' && $_smarty_tpl->tpl_vars['user']->value->id != $_smarty_tpl->tpl_vars['form']->value->id) {?> hidden="true" <?php }?> />
                <?php if ($_smarty_tpl->tpl_vars['user']->value->privilege == 'admin' && $_smarty_tpl->tpl_vars['user']->value->id != $_smarty_tpl->tpl_vars['form']->value->id) {
echo $_smarty_tpl->tpl_vars['form']->value->mail;
}?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['form']->value->id) {?>
                <div class="pure-control-group">
                    <label for="id_pass">password: </label>
                    <input id="id_pass" type="password" name="pass" />
                </div>
                <div class="pure-control-group">
                    <label for="id_pass">password repeat: </label>
                    <input id="id_pass" type="password" name="pass2" />
                </div>
            <?php }?>
            <div class="pure-controls">
                <input type="submit" value="Zapisz zmiany" class="pure-button pure-button-primary" />
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
