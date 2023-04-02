<?php
/* Smarty version 3.1.30, created on 2023-03-12 11:48:00
  from "C:\xampp\htdocs\Glosowanie\app\views\VotesListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640dade00a3c28_74019844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6275d748a5b3ea6b0644f5083aab68a8ff2aba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Glosowanie\\app\\views\\VotesListView.tpl',
      1 => 1678602462,
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
function content_640dade00a3c28_74019844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694823550640dade00a2de5_23135064', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_694823550640dade00a2de5_23135064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Main Page</h1>

        <div>
            <?php if (isset($_smarty_tpl->tpl_vars['questionnaires']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionnaires']->value, 'questionnaire', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['questionnaire']->value) {
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionnaire']->value[1], 'answer', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['answer']->value) {
?>
                        <?php if (($_smarty_tpl->tpl_vars['k']->value == 0)) {?>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Vote" method="post">
                                <h2><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h2>
                            <?php } else { ?>
                                <label><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</label>
                                <input type="radio" name="title" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
" />
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['questionnaire']->value[0];?>
" hidden="true" />
                        <input type="submit" value="zagłosuj" />
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
