<?php
/* Smarty version 3.1.30, created on 2023-03-12 06:49:30
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Glosowanie\app\views\VotesEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640d67eadf9576_87820325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459af6395c2c4e014fb4b45efa98018c395c33f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Glosowanie\\app\\views\\VotesEditView.tpl',
      1 => 1678600165,
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
function content_640d67eadf9576_87820325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_895032596640d67eadf8de2_56762856', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_895032596640d67eadf8de2_56762856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <label>Title of questionnaire</label>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
" hidden="true" />
            <input name="title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
" />
            <div>
                <label for="description">Description (seperate description and each answers with "|")</label>
            </div>
            <textarea id="description" name="description" value="2" rows="20" cols="50"><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</textarea>

            <div>
                <input type="submit" onclick="" value="Add answer">
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
