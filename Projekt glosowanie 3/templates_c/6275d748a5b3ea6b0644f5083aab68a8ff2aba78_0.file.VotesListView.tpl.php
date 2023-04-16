<?php
/* Smarty version 3.1.30, created on 2023-04-16 21:02:47
  from "C:\xampp\htdocs\Glosowanie\app\views\VotesListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_643c4657404cb9_36763747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6275d748a5b3ea6b0644f5083aab68a8ff2aba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Glosowanie\\app\\views\\VotesListView.tpl',
      1 => 1681671764,
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
function content_643c4657404cb9_36763747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1261986509643c4657404778_14509360', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1261986509643c4657404778_14509360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Main Page</h1>
        <h3>pages</h3>
        <div style="display:flex">  
            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value/5+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value/5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <div>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesShowAll" method="post" class="pure-form pure-form-aligned bottom-margin">
                    <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value-1;?>
" name="page" hidden/>
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
                </form>
                </div>
            <?php }
}
?>

        </div>

        <div>
            <?php if (isset($_smarty_tpl->tpl_vars['questionnaires']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionnaires']->value, 'questionnaire', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['questionnaire']->value) {
?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
Vote" method="post">
                        <h2><?php echo $_smarty_tpl->tpl_vars['questionnaire']->value[1];?>
</h2>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionnaire']->value[2], 'answer', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['answer']->value) {
?>
                                <label><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</label>
                                <input type="radio" name="title" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
" />
                                </br>
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
        </br>
        <h3>pages</h3>
        <div style="display:flex">  
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value/5+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value/5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
VotesShowAll" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value-1;?>
" name="page" hidden/>
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" />
            </form>
            </div>
        <?php }
}
?>

    </div>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
